<?php
include('dbconnect.php');
$id1 = $_GET['id1'];

$sql = "select min_team, max_team  from create_event where event_id=$id1";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {
	$min_team =  $row['min_team'];
	$max_team = $row['max_team'];

	
	
}


$minimum= $min_team;
$maximum = $max_team;







if(isset($_POST['submit'])){ 




if($minimum == '0'){


$name = $_POST['name'];
$roll_no = $_POST['rollno'];

$college = $_POST['college'];

$dept_name= $_POST['dept_name'];
$email = $_POST['email'];
$mobile_no = $_POST['mobileno'];








	$sql = "insert into singleevent_registration(event_id ,name, roll_no, college_name,dept_name, email , mobile_no,paid_amount,paid_amount_currency,txn_id, payment_status) values ('$id1','$name', '$roll_no', '$college','$dept_name' ,'$email', '$mobile_no','0','inr','0','succeeded')";
	
$result = mysqli_query($conn, $sql);




  $url = "successfullyregisterd1.php?rollno=".$roll_no."&eventid=".$id1;
       
      
        
        echo "<script>window.location='".$url."'</script>";






    
}
else{
	
	
	$teamname = $_POST['team_name'];
	$college = $_POST['college'];
	
	foreach ($_POST['name'] as $value) {
    $name[]= $value;

	}
$studentname = implode(",",$name);




foreach ($_POST['email'] as $value) {
    $email[]= $value;

	}

$emails= implode(",", $email);

foreach ($_POST['mobile'] as $value) {
    $mobile[]= $value;

	}

$mobile_no = implode(",", $mobile);








	$sql = "insert into teamevent_registration(event_id ,team_name, college_name,student_name, emails , mobile_no,paid_amount,paid_amount_currency,txn_id, payment_status) values ('$id1','$teamname', '$college',
	'$studentname' ,'$emails', '$mobile_no','0','inr','0','succeeded')";
	
$result = mysqli_query($conn, $sql);


 $url = "successfullyregisterd1.php?mobileno=".$mobile_no."&eventid=".$id1;
       
      
        
        echo "<script>window.location='".$url."'</script>";
	
}
















}









$conn->close();
?>