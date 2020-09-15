<?php   
include('dbconnect.php');
$date = strtotime(date('Y-m-d'));
$startdate = date('Y-m-d', $date);
$sql = "select event_id, event_title from create_event where enddate='$startdate'";
$result = mysqli_query($conn,$sql);



while($row = mysqli_fetch_array($result)) {
    $eventid = $row['event_id'];
    
   $sql1 = "select email,name from singleevent_registration where event_id='$eventid'";
   
    $result1 = mysqli_query($conn,$sql1);
    
    while($row1 = mysqli_fetch_array($result1)) {
        
        $to_email = $row1['email']; 
$from = 'anshul.zero@gmail.com';
$subject = 'Feedback :'.$row['event_title'];
$message = 'Dear '.$row1['name'].',
We Welcome You To MMDU event hub,
This mail is to remind you about the event '.$row['event_title'].' that you have participated in has ended well please 
give us a nice feedback to make our services more better next time.
Here is the link... <a href="eventmanagement2315.000webhostapp.com/feedback.php?eventid='.$row['event_id'].'>Event Feedback</a>

We are so thankful for your feedback...
Thank You';
$headers = "FROM: Event HUB <".$from.">\r\n";
mail($to_email,$subject,$message,$headers);
        
    }
    
}

?>