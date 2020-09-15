<?php   
include('dbconnect.php');
$date = strtotime(date('Y-m-d'));
$startdate = date('Y-m-d', $date);
$time =date("h:m a");



$sql = "UPDATE create_event SET publish_event = 'no', open_closed = 'closed' where startdate<='$startdate' and time<='$time'";

$result = mysqli_query($conn,$sql);



?>