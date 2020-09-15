<?php
session_start();
include('dbconnect.php');

$id = $_GET['id'];

if(isset($_POST['publish'])){ 





  $sql_query = "UPDATE create_event SET publish_event = 'yes' WHERE create_event.`Event_ID` ='$id'";
 
        $result = mysqli_query($conn,$sql_query);
		
		
      
	  header('location: dashboard.php');

       


  



      
}


else if(isset($_POST['unpublish'])){ 





  $sql_query = "UPDATE create_event SET publish_event = 'no' WHERE create_event.`Event_ID` ='$id'";
 
        $result = mysqli_query($conn,$sql_query);
		
		
      
	  header('location: dashboard.php');

       


  



      
}



		
   ?>