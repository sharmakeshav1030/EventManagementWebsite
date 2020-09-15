<?php
session_start();
include('dbconnect.php');


      



if(isset($_POST['submit'])){ 







$name = $_POST['name'];
$email = $_POST['email'];

$role = $_POST['role'];
$username = $_POST['username'];
$password = $_POST['password'];









	$sql = "insert into sign_up(role,username,full_name,email,password) values ('$role','$username','$name','$email','$password')";
	$result = mysqli_query($conn, $sql);
	
	
	if (!$result) {
    $result = mysqli_error($conn);
	echo "<p>Insertion Failed <br/s> Some Fields are Blank....!!</p>";
	
	
}
else{



echo "<br/><br/><span>Data Inserted successfully...!!</span>";


}
	
}



	








$conn->close();
?>