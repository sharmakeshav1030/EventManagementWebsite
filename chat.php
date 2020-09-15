<?php
   require_once 'vendor/autoload.php';

   use BotMan\BotMan\BotMan;
   use BotMan\BotMan\BotManFactory;
   use BotMan\BotMan\Drivers\DriverManager;
   
   $config = [
    // Your driver-specific configuration
    // "telegram" => [
    //    "token" => "TOKEN"
    // ]
];

   DriverManager::loadDriver(\BotMan\Drivers\Web\WebDriver::class);

   $botman = BotManFactory::create($config);

  // Give the bot something to listen for.
$botman->hears('hello', function (BotMan $bot) {
    $bot->reply('Hey There.');
});

$botman->hears('Good Morning', function (BotMan $bot) {
    $bot->reply('Good Morning to you too');
});

$botman->hears('How can I register myself into an event?', function (BotMan $bot) {
    $bot->reply('Click on the event in which you wish to register. Then a form
    will appear. Fill in that form. and submit. TaDa You are successfully registered');
});

$botman->hears('How to get to know about the upcoming events?', function (BotMan $bot) {
    $bot->reply('All the upcoming events are shown on the homepage of the Website. If you
    wish to see any particular event, you can filter the page accordingly');
});

$botman->hears('What is the last day of registration for this ‘particular’ event?', function (BotMan $bot) {
    $bot->reply('Please check your email. We have sent you the timings and the venue');
});

$botman->hears('What are the various modes of payment for registering into an event?', function (BotMan $bot) {
    $bot->reply('That depends on the event you are registering in');
});



$botman->hears('what is the time in {city} located in {continent}' , function (BotMan $bot,$city,$continent) {
     date_default_timezone_set("$continent/$city");
      $reply = "The time in ".$city." ".$continent." is ".date("h:i:sa");
    $bot->reply($reply);
});

$botman->fallback(function($bot) {
    $bot->reply('Sorry, I did not understand these commands. If you are facing any problem please tell us so that our team can reach back to you asap. Tell us your email address?');
});

// Start listening
$botman->listen();
?>
