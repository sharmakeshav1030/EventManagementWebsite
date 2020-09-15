<?php
session_start();
include('dbconnect.php');


if(isset($_POST['submit'])){ 
    $eventid = $_GET['eventid'];
    $name = $_POST['name'];
$feedback = $_POST['desc'];
$stars = $_POST['rating'];
	$sql = "insert into feedback(event_id,name,feedback,stars) values ('$eventid','$name','$feedback' , '$stars')";
	$result = mysqli_query($conn, $sql);
	
	echo "Thanks for your Feedback";
	
	
	
	
	
}

	






$conn->close();
?>