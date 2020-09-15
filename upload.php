<?php
$servername = "localhost";
$username = "id13212736_root";
$password = "Team2internship@1";
$dbname = "id13212736_event";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if(isset($_POST['submit_image']))
{
	$eventtitle = $_POST['eventtitle'];
	$sql = "select category, organizer_name, startdate from create_event where event_title='$eventtitle'";
$result = mysqli_query($conn,$sql);
	while($row = mysqli_fetch_array($result)) {	
        
       
         $category = $row['category'];
          $startdate = $row['startdate'];
           $orgname = $row['organizer_name'];
        
    }
	
	
for($i=0;$i<count($_FILES["files"]["name"]);$i++)
{
 $uploadfile=$_FILES["files"]["tmp_name"][$i];
 $folder="gallery/";
 move_uploaded_file($_FILES["files"]["tmp_name"][$i], "$folder".$_FILES["files"]["name"][$i]);
 
$image=basename( $_FILES["files"]["name"][$i]);
 
 $sql1 =  "insert into gallery(event_name, organizer_name, image, date,category) values ('$eventtitle','$orgname','$image', '$startdate','$category')";




	
	$result1 = mysqli_query($conn, $sql1);
header('location: dashboard.php');

	
		
   
 
 
}

}


?>