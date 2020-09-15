<?php
session_start();
include('dbconnect.php');



if(isset($_POST['submit'])){ 
$username = mysqli_real_escape_string($conn,$_POST['username']);



$password = mysqli_real_escape_string($conn,$_POST['password']);




  $sql_query = "select full_name from sign_up where username = '$username' and password='$password'";
 
        $result = mysqli_query($conn,$sql_query);
       
   

       $row = mysqli_num_rows($result);

        if($row > 0){
            $_SESSION['username'] = $username;
          
			
			
            header('location: dashboard.php');
			
        }else{
            echo "Invalid username and password";
        }

    









      
}



		
   ?>