<?php
session_start();
include('dbconnect.php');

$id = $_GET['id'];

if(isset($_POST['publish'])){ 
$sql=  "select startdate from create event where Event_ID ='$id'";
$result1 = mysqli_query($conn,$sql);
$date = strtotime(date('Y-m-d'));
$startdate = date('Y-m-d', $date);


while($row = mysqli_fetch_array($result1)){
    $date = $row['startdate'];
   
}


if($date < $startdate  ){
    
    echo "Please Edit the Event Time Before opening it Again";
}

else{




  $sql_query = "UPDATE create_event SET publish_event = 'yes', open_closed='open' WHERE create_event.`Event_ID` ='$id'";
 
        $result = mysqli_query($conn,$sql_query);
		
		
      
	  header('location: dashboard.php');

       
}

  



      
}






		
   ?>