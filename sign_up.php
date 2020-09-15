<?php
include('dbconnect.php');



if(isset($_POST['submit'])){ 







$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];

$email = $_POST['mail'];



$password = $_POST['password'];



if($email !=''|| $password !=''){
	
	
	
$sql = "insert into sign_up(first_name, last_name, email, password) values ('$first_name', '$last_name', '$email','$password')";
	$result = mysqli_query($conn, $sql);
	



			
			$_SESSION['success']  = "New user successfully created!!";
			header('location: login.php');
		



}



}


$conn->close();
?>