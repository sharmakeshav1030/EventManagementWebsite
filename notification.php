<?php   
include('dbconnect.php');
$date = strtotime(date('Y-m-d'));
$startdate = date('Y-m-d', $date);
$sql = "select event_id, event_title,event_venue,time from create_event where startdate='$startdate'";
$result = mysqli_query($conn,$sql);



while($row = mysqli_fetch_array($result)) {
    $eventid = $row['event_id'];
    
   $sql1 = "select email,name from singleevent_registration where event_id='$eventid'";
   
    $result1 = mysqli_query($conn,$sql1);
    
    while($row1 = mysqli_fetch_array($result1)) {
        
        $to_email = $row1['email']; 
$from = 'anshul.zero@gmail.com';
$subject = 'Reminder'.$row['event_title'];
$message = 'Dear '.$row1['name'].',
We Welcome You To MMDU event hub,
This mail is to remind you about the event '.$row['event_title'].' that you have participated in.
Time: '.$row['time'].'
Venue: '.$row['event_venue'].'
We will be pleased to see you there...

Thank You';
$headers = "FROM: Event HUB <".$from.">\r\n";
mail($to_email,$subject,$message,$headers);
        
    }
    
}

?>