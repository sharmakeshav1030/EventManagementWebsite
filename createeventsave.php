<?php
session_start();
include('dbconnect.php');
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["thumbnail"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$extension = explode("/", $_FILES["thumbnail"]["type"]);

$tmp=$_FILES["thumbnail"]["tmp_name"];

      

$username = $_SESSION['username'];
$sql1 = "select full_name from sign_up where username='$username'";
$result1 = mysqli_query($conn,$sql1);
 while($row = mysqli_fetch_array($result1)) {	
        
        $name = $row['full_name'];
    }


if(isset($_POST['submit'])){ 







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

$check = getimagesize($_FILES["thumbnail"]["tmp_name"]);
    if($check !== false) {
       header('location: dashboard.php');
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "No Thumbnail is selected";
        $uploadOk = 0;
    }
if($uploadOk==1){


if ($_FILES["thumbnail"]["size"] > 500000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

} else {
    if ( move_uploaded_file($tmp, "images/" . $eventtitle.".".$extension[1])) {
        
        echo "The file image has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
	

}

}

$image=$eventtitle.".".$extension[1];
if($uploadOk == 1){
if($eventtype== "Team Event"){
	$min_team= $_POST['min_team_size'];
$max_team= $_POST['max_team_size'];


	$sql = "insert into create_event(organizer_name,event_title, event_desc,category,eventtype ,min_team , max_team, event_rules, startdate,enddate, event_venue,time,event_price,event_thumbnail,event_sponsors,event_prizes,publish_event,open_closed) values ('$name','$eventtitle', '$desc', '$category','$eventtype','$min_team','$max_team','$rule', '$startdate','$enddate', '$venue','$time','$price','$image', '$sponsors','$prize','no','open')";
	$result = mysqli_query($conn, $sql);
	
}

else if($eventtype== "Single Participant" || $eventtype== "Choose the Event Type"){
	$sql = "insert into create_event(organizer_name, event_title, event_desc,category,eventtype ,min_team , max_team,event_rules, startdate,enddate, event_venue,time,event_price,event_thumbnail,event_sponsors,event_prizes,publish_event,open_closed) values ('$name','$eventtitle', '$desc', '$category','$eventtype','0','0','$rule', '$startdate','$enddate', '$venue','$time','$price','$image', '$sponsors','$prize','no','open')";
	$result = mysqli_query($conn, $sql);
}

	



if (!$result) {
    $result = mysqli_error($conn);
	echo "<p>Insertion Failed <br/s> Some Fields are Blank....!!</p>";
	
	
}
else{



echo "<br/><br/><span>Data Inserted successfully...!!</span>";


}

}
else{
	echo "<p>Please fill the form again</p>";
}
    
}


}


$conn->close();
?>