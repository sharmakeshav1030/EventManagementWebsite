<?php
include('dbconnect.php');
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["thumbnail"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$extension = explode("/", $_FILES["thumbnail"]["type"]);

if(isset($_POST['submit'])){ 





$id = $_GET['id'];

$eventtitle = $_POST['eventtitle'];
$desc = $_POST['desc'];

$category = $_POST['category'];
$eventtype = $_POST['eventtype'];
$price = $_POST['price'];
$time = $_POST['time'];


$eventdate = $_POST['eventdate'];

list($a, $b) = explode("-",$eventdate);

$rawdate = htmlentities($a);
$startdate = date('Y-m-d', strtotime($rawdate));
$rawdate1 = htmlentities($b);
$enddate = date('Y-m-d', strtotime($rawdate1));


$venue = $_POST['venue'];
$sponsors = $_POST['sponsors'];














if($eventtitle !=''||$desc !=''){
	
	foreach ($_POST['rules'] as $value) {
    $yo[]= $value;

	}
	
	foreach ($_POST['prize'] as $value) {
    $yo1[]= $value;

	}
$rule= implode(" , ",$yo);
$prize= implode(" , ",$yo1);





// Check file size
if ($_FILES["thumbnail"]["size"] > 500000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats

// Check if $uploadOk is set to 0 by an error


$yo = basename($_FILES["thumbnail"]["name"]);
if(!$yo)
{
 $image = null;   
}
else{
    if (move_uploaded_file($tmp, "images/" . $eventtitle.".".$extension[1])) {
        echo "The file ". basename( $_FILES["thumbnail"]["name"]). " has been uploaded.";
    } 
	

$image=$eventtitle.".".$extension[1];
}











if($eventtype== "Team Event"){
	$min_team= $_POST['min_team_size'];
$max_team= $_POST['max_team_size'];

if(!$image){


 $sql =  "UPDATE create_event SET Event_TITLE = '$eventtitle', EVENT_DESC = '$desc', Category = '$category', eventtype = '$eventtype', min_team = '$min_team', max_team = '$max_team', EVENT_RULES = '$rule', startdate = '$startdate', enddate = '$enddate', EVENT_VENUE = '$venue', time= '$time',event_price='$price', EVENT_SPONSORS = '$sponsors', EVENT_PRIZES = '$prize' WHERE create_event.Event_ID = $id";




	
	$result = mysqli_query($conn, $sql);
}

else{
     $sql =  "UPDATE create_event SET Event_TITLE = '$eventtitle', EVENT_DESC = '$desc', Category = '$category', eventtype = '$eventtype', min_team = '$min_team', max_team = '$max_team', EVENT_RULES = '$rule', startdate = '$startdate', enddate = '$enddate', EVENT_VENUE = '$venue', time= '$time',event_price='$price', event_thumbnail = '$image', EVENT_SPONSORS = '$sponsors', EVENT_PRIZES = '$prize' WHERE create_event.Event_ID = $id";




	
	$result = mysqli_query($conn, $sql);
    
}



}

else if($eventtype== "Single Participant" || $eventtype== "Choose the Event Type"){
   if(!$image) {
    
    
	$sql = "UPDATE create_event SET Event_TITLE = '$eventtitle', EVENT_DESC = '$desc', Category = '$category', eventtype = '$eventtype', min_team = '0', max_team = '0', EVENT_RULES = '$rule', startdate = '$startdate', enddate = '$enddate', EVENT_VENUE = '$venue',time= '$time',event_price='$price',  EVENT_SPONSORS = '$sponsors', EVENT_PRIZES = '$prize' WHERE create_event.Event_ID = $id";
	$result = mysqli_query($conn, $sql);
	
   }
   
   else{
       	$sql = "UPDATE create_event SET Event_TITLE = '$eventtitle', EVENT_DESC = '$desc', Category = '$category', eventtype = '$eventtype', min_team = '0', max_team = '0', EVENT_RULES = '$rule', startdate = '$startdate', enddate = '$enddate', EVENT_VENUE = '$venue',time= '$time',event_price='$price', event_thumbnail = '$image', EVENT_SPONSORS = '$sponsors', EVENT_PRIZES = '$prize' WHERE create_event.Event_ID = $id";
	$result = mysqli_query($conn, $sql);
       
   }
   
   
}

	



if (!$result) {
    $result = mysqli_error($conn);
	echo "<p>Insertion Failed <br/s> Some Fields are Blank....!!</p>";
	
	
}
else{
	
	header('location: dashboard.php');


echo "<br/><br/><span>Data Inserted successfully...!!</span>";


}


    
}


}


$conn->close();
?>