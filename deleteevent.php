<?php
session_start();
include('dbconnect.php');

$id = $_GET['id'];







  $sql_query = "DELETE FROM create_event WHERE create_event.Event_ID = '$id'";
 
        $result = mysqli_query($conn,$sql_query);
		
		
      
	 
header('location: dashboard.php');
       


  



      






		
   ?>