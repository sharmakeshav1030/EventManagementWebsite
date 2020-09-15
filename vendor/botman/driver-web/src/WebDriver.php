<?php

namespace BotMan\Drivers\Web;

use BotMan\BotMan\Users\User;
use Illuminate\Support\Collection;
use BotMan\BotMan\Drivers\HttpDriver;
use BotMan\BotMan\Interfaces\WebAccess;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Attachments\File;
use BotMan\BotMan\Messages\Attachments\Audio;
use BotMan\BotMan\Messages\Attachments\Image;
use BotMan\BotMan\Messages\Attachments\Video;
use BotMan\BotMan\Messages\Outgoing\Question;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use BotMan\BotMan\Messages\Incoming\IncomingMessage;
use BotMan\BotMan\Messages\Outgoing\OutgoingMessage;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class WebDriver extends HttpDriver
{
    const DRIVER_NAME = 'Web';

    const ATTACHMENT_IMAGE = 'image';
    const ATTACHMENT_AUDIO = 'audio';
    const ATTACHMENT_VIDEO = 'video';
    const ATTACHMENT_FILE = 'file';
    const ATTACHMENT_LOCATION = 'location';

    /** @var OutgoingMessage[] */
    protected $replies = [];

    /** @var int */
    protected $replyStatusCode = 200;

    /** @var string */
    protected $errorMessage = '';

    /** @var array */
    protected $messages = [];

    /** @var array */
    protected $files = [];

    /**
     * @param Request $request
     */
    public function buildPayload(Request $request)
    {
        $this->payload = $request->request->all();
        $this->event = Collection::make($this->payload);
        $this->files = Collection::make($request->files->all());
        $this->config = Collection::make($this->config->get('web', []));
    }

    /**
     * @param IncomingMessage $matchingMessage
     * @return \BotMan\BotMan\Users\User
     */
    public function getUser(IncomingMessage $matchingMessage)
    {
        return new User($matchingMessage->getSender());
    }

    /**
     * Determine if the request is for this driver.
     *
     * @return bool
     */
    public function matchesRequest()
    {
        return Collection::make($this->config->get('matchingData'))->diffAssoc($this->event)->isEmpty();
    }

    /**
     * @param  IncomingMessage $message
     * @return \BotMan\BotMan\Messages\Incoming\Answer
     */
    public function getConversationAnswer(IncomingMessage $message)
    {
        $interactive = $this->event->get('interactive', false);
        if (is_string($interactive)) {
            $interactive = ($interactive !== 'false') && ($interactive !== '0');
        } else {
            $interactive = (bool) $interactive;
        }

        return Answer::create($message->getText())
            ->setValue($this->event->get('value', $message->getText()))
            ->setMessage($message)
            ->setInteractiveReply($interactive);
    }

    /**
     * Retrieve the chat message.
     *
     * @return array
     */
    public function getMessages()
    {
        if (empty($this->messages)) {
            $message = $this->event->get('message');
            $userId = $this->event->get('userId');
            $sender = $this->event->get('sender', $userId);

            $incomingMessage = new IncomingMessage($message, $sender, $userId, $this->payload);

            $incomingMessage = $this->addAttachments($incomingMessage);

            $this->messages = [$incomingMessage];
        }

        return $this->messages;
    }

    /**
     * @return bool
     */
    public function isBot()
    {
        return false;
    }

    /**
     * @param string|Question|OutgoingMessage $message
     * @param IncomingMessage $matchingMessage
     * @param array $additionalParameters
     * @return Response
     */
    public function buildServicePayload($message, $matchingMessage, $additionalParameters = [])
    {
        if (! $message instanceof WebAccess && ! $message instanceof OutgoingMessage) {
            $this->errorMessage = 'Unsupported message type.';
            $this->replyStatusCode = 500;
        }

        return [
            'message' => $message,
            'additionalParameters' => $additionalParameters,
        ];
    }

    /**
     * @param mixed $payload
     * @return Response
     */
    public function sendPayload($payload)
    {
        $this->replies[] = $payload;
    }

    /**
     * @param $messages
     * @return array
     */
    protected function buildReply($messages)
    {
        $replyData = Collection::make($messages)->transform(function ($replyData) {
            $reply = [];
            $message = $replyData['message'];
            $additionalParameters = $replyData['additionalParameters'];

            if ($message instanceof WebAccess) {
                $reply = $message->toWebDriver();
            } elseif ($message instanceof OutgoingMessage) {
                $attachmentData = (is_null($message->getAttachment())) ? null : $message->getAttachment()->toWebDriver();
                $reply = [
                    'type' => 'text',
                    'text' => $message->getText(),
                    'attachment' => $attachmentData,
                ];
            }
            $reply['additionalParameters'] = $additionalParameters;

            return $reply;
        })->toArray();

        return $replyData;
    }

    /**
     * Send out message response.
     */
    public function messagesHandled()
    {
        $messages = $this->buildReply($this->replies);

        // Reset replies
        $this->replies = [];

        Response::create(json_encode([
            'status' => $this->replyStatusCode,
            'messages' => $messages,
        ]), $this->replyStatusCode, [
            'Content-Type' => 'application/json',
            'Access-Control-Allow-Credentials' => true,
            'Access-Control-Allow-Origin' => '*',
        ])->send();
    }

    /**
     * @return bool
     */
    public function isConfigured()
    {
        return false;
    }

    /**
     * Low-level method to perform driver specific API requests.
     *
     * @param string $endpoint
     * @param array $parameters
     * @param \BotMan\BotMan\Messages\Incoming\IncomingMessage $matchingMessage
     * @return void
     */
    public function sendRequest($endpoint, array $parameters, IncomingMessage $matchingMessage)
    {
        // Not available with the web driver.
    }

    /**
     * Add potential attachments to the message object.
     *
     * @param IncomingMessage $incomingMessage
     * @return IncomingMessage
     */
    protected function addAttachments($incomingMessage)
    {
        $attachment = $this->event->get('attachment');

        if ($attachment === self::ATTACHMENT_IMAGE) {
            $images = $this->files->map(function ($file) {
                if ($file instanceof UploadedFile) {
                    $path = $file->getRealPath();
                } else {
                    $path = $file['tmp_name'];
                }

                return new Image($this->getDataURI($path));
            })->values()->toArray();
            $incomingMessage->setText(Image::PATTERN);
            $incomingMessage->setImages($images);
        } elseif ($attachment === self::ATTACHMENT_AUDIO) {
            $audio = $this->files->map(function ($file) {
                if ($file instanceof UploadedFile) {
                    $path = $file->getRealPath();
                } else {
                    $path = $file['tmp_name'];
                }

                return new Audio($this->getDataURI($path));
            })->values()->toArray();
            $incomingMessage->setText(Audio::PATTERN);
            $incomingMessage->setAudio($audio);
        } elseif ($attachment === self::ATTACHMENT_VIDEO) {
            $videos = $this->files->map(function ($file) {
                if ($file instanceof UploadedFile) {
                    $path = $file->getRealPath();
                } else {
                    $path = $file['tmp_name'];
                }

                return new Video($this->getDataURI($path));
            })->values()->toArray();
            $incomingMessage->setText(Video::PATTERN);
            $incomingMessage->setVideos($videos);
        } elseif ($attachment === self::ATTACHMENT_FILE) {
            $files = $this->files->map(function ($file) {
                if ($file instanceof UploadedFile) {
                    $path = $file->getRealPath();
                } else {
                    $path = $file['tmp_name'];
                }

                return new File($this->getDataURI($path));
            })->values()->toArray();
            $incomingMessage->setText(File::PATTERN);
            $incomingMessage->setFiles($files);
        }

        return $incomingMessage;
    }

    /**
     * @param $file
     * @param string $mime
     * @return string
     */
    protected function getDataURI($file, $mime = '')
    {
        return 'data: '.(function_exists('mime_content_type') ? mime_content_type($file) : $mime).';base64,'.base64_encode(file_get_contents($file));
    }
}
