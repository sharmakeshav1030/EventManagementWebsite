<?php 
session_start();
include('dbconnect.php');
$category = $_GET['category'];
$year = $_GET['year'];
$username = $_SESSION['username'];
$sql1 = "select full_name from sign_up where username='$username'";
$result1 = mysqli_query($conn,$sql1);
 while($row = mysqli_fetch_array($result1)) {	
        
        $name = $row['full_name'];
    }


$sql = "select event_title from create_event where category='$category' and startdate like '%$year%' and organizer_name='$name'";
$result = mysqli_query($conn,$sql);
$event = '<select id="eventcategory" onchange="eventcategory1()">
<option value="select the event name">Select the event name</option>';

 while($row = mysqli_fetch_array($result)) {
     $event .=     '<option value="'.$row['event_title'].'">'.$row['event_title'].'</option>';
     }
$event .= '</select>';
     
     echo $event;
     
     ?>
 