<?php

include('dbconnect.php');
$txnid = $_GET['txnid'];
$eventid = $_GET['eventid'];


$sql = "select event_title, event_id ,min_team from create_event where event_id='$eventid'";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {	
    
    
    
    if($row['min_team'] == 0){
    $table = '<table border = "1">
         <tr>
            <th>EVENT ID</th>
            <td>'.$row['event_id'].'</td>
         </tr>
         
         <tr>
            <th>EVENT Name</th>
            <td>'.$row['event_title'].'</td>
         </tr>';
         
         $sql1 = "select name,roll_no,mobile_no, email,college_name,dept_name,payment_status  from singleevent_registration where txn_id='$txnid'";
$result1 = mysqli_query($conn,$sql1);

while($row1 = mysqli_fetch_array($result1)) {	
    $table .= '<tr>
            <th>Student Name</th>
            <td>'.$row1['name'].'</td>
         </tr>
         <tr>
            <th>Roll No</th>
            <td>'.$row1['roll_no'].'</td>
         </tr>
         <tr>
            <th>College Name</th>
            <td>'.$row1['college_name'].'</td>
         </tr>
         <tr>
            <th>Department Name</th>
            <td>'.$row1['dept_name'].'</td>
         </tr>
         <tr>
            <th>Email</th>
            <td>'.$row1['email'].'</td>
         </tr>
         <tr>
            <th>Mobile No</th>
            <td>'.$row1['mobile_no'].'</td>
         </tr>
         
         <tr>
            <th>payment Status</th>
            <td>'.$row1['payment_status'].'</td>
         </tr>
         </table>';
    
}
         
         
         
         
         
         
         
         
         
         
         
    }
    else{
        
         $table = '<table border = "1">
         <tr>
            <th>EVENT ID</th>
            <td>'.$row['event_id'].'</td>
         </tr>
         
         <tr>
            <th>EVENT Name</th>
            <td>'.$row['event_title'].'</td>
         </tr>';
         
         $sql1 = "select team_name,student_name,mobile_no, emails,college_name,payment_status  from teamevent_registration where txn_id='$txnid'";
$result1 = mysqli_query($conn,$sql1);

while($row1 = mysqli_fetch_array($result1)) {	
    $table .= '<tr>
            <th>Team Name</th>
            <td>'.$row1['team_name'].'</td>
         </tr>
         <tr>
            <th>College Name</th>
            <td>'.$row1['college_name'].'</td>
         </tr>
         
         <tr>
            <th>Team Members</th>
            <td>'.$row1['student_name'].'</td>
         </tr>
        
         
         <tr>
            <th>Emails of Team Members </th>
            <td>'.$row1['emails'].'</td>
         </tr>
         <tr>
            <th>Mobile No of Team Members</th>
            <td>'.$row1['mobile_no'].'</td>
         </tr>
         
         <tr>
            <th>payment Status</th>
            <td>'.$row1['payment_status'].'</td>
         </tr>
         </table>';
    
}
        
        
        
    }
    
    
    
    
}







echo $table;





?>