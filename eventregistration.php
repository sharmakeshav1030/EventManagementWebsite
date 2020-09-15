<?php
include('dbconnect.php');
$id1 = $_GET['id1'];

$sql = "select event_title,event_id, min_team, max_team , event_price from create_event where event_id=$id1";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {
	$min_team =  $row['min_team'];
	$max_team = $row['max_team'];
	$eventprice = $row['event_price'];
	$eventid = $row['event_id'];
	$event_title = $row['event_title'];
	
	
}


$minimum= $min_team;
$maximum = $max_team;
$price = $eventprice;
$eventid1 = $eventid;
$eventtitle = $event_title;

if(!empty($_POST['stripeToken'])){ 




if($minimum == '0'){
    
    
  $token  = $_POST['stripeToken'];

$name = $_POST['name'];
$roll_no = $_POST['rollno'];

$college = $_POST['college'];

$dept_name= $_POST['dept_name'];
$email = $_POST['email'];
$mobile_no = $_POST['mobileno'];

$card_num = $_POST['card_num'];
    $card_cvc = $_POST['cvc'];
    $card_exp_month = $_POST['exp_month'];
    $card_exp_year = $_POST['exp_year'];

require_once('stripe-php/init.php');

    
    //set api key
    $stripe = array(
      "secret_key"      => "sk_test_v84JTdCyIpjSIysnbicn5CXF00RjjhgKQF",
      "publishable_key" => "pk_test_YHJ6iSHoBEdcBTWPs0bvcRDp000qmWpWPo"
    );
    
    \Stripe\Stripe::setApiKey($stripe['secret_key']);
   
    
    //add customer to stripe
    $customer = \Stripe\Customer::create(array(
        'email' => $email,
        'source'  => $token
    ));


 //item information
    $itemName = $eventtitle;
    $itemNumber = "EV".$eventid1;
    $itemPrice = $price;
    $currency = "inr";
    $orderID = "EVENT".$eventid1;
    
    


    
    $charge = \Stripe\Charge::create(array(
       
        'customer' => $customer->id,
        'amount'   => $itemPrice,
        'currency' => $currency,
        'description' => $itemName,
        'metadata' => array(
            'order_id' => $orderID
           
        )
        
    ));
    
    
    
    
    $chargeJson = $charge->jsonSerialize();

    //check whether the charge is successful
    if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1){
       
        //order details 
        $amount = $chargeJson['amount'];
        $balance_transaction = $chargeJson['balance_transaction'];
        $currency = $chargeJson['currency'];
        $status = $chargeJson['status'];
        $date = date("Y-m-d H:i:s");




	$sql = "insert into singleevent_registration(event_id ,name, roll_no, college_name,dept_name, email , mobile_no,paid_amount,paid_amount_currency,txn_id,payment_status) values ('$id1','$name', '$roll_no', '$college','$dept_name' ,'$email', '$mobile_no','$amount','$currency','$balance_transaction','$status')";
	

	
$result = mysqli_query($conn, $sql);
        $url = "successfullyregisterd.php?txnid=".$balance_transaction."&eventid=".$id1;
       
      
        
        echo "<script>window.location='".$url."'</script>";
       
    }else{
        
        $statusMsg = "Transaction has been failed";
    }
    
}
    









    

else{
	 $token  = $_POST['stripeToken'];
	
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

$card_num = $_POST['card_num'];
    $card_cvc = $_POST['cvc'];
    $card_exp_month = $_POST['exp_month'];
    $card_exp_year = $_POST['exp_year'];

require_once('stripe-php/init.php');

    
    //set api key
    $stripe = array(
      "secret_key"      => "sk_test_v84JTdCyIpjSIysnbicn5CXF00RjjhgKQF",
      "publishable_key" => "pk_test_YHJ6iSHoBEdcBTWPs0bvcRDp000qmWpWPo"
    );
    
    \Stripe\Stripe::setApiKey($stripe['secret_key']);
   
    
    //add customer to stripe
    $customer = \Stripe\Customer::create(array(
        'email' => $email[0],
        'source'  => $token
    ));


 $itemName = $eventtitle;
    $itemNumber = "EV".$eventid1;
    $itemPrice = $price;
    $currency = "inr";
    $orderID = "EVENT".$eventid1;
    
    


    
    $charge = \Stripe\Charge::create(array(
       
        'customer' => $customer->id,
        'amount'   => $itemPrice,
        'currency' => $currency,
        'description' => $itemName,
        'metadata' => array(
            'order_id' => $orderID
           
        )
        
    ));
    
    
    
    
    $chargeJson = $charge->jsonSerialize();

    //check whether the charge is successful
    if($chargeJson['amount_refunded'] == 0 && empty($chargeJson['failure_code']) && $chargeJson['paid'] == 1 && $chargeJson['captured'] == 1){
       
        //order details 
        $amount = $chargeJson['amount'];
        $balance_transaction = $chargeJson['balance_transaction'];
        $currency = $chargeJson['currency'];
        $status = $chargeJson['status'];
        $date = date("Y-m-d H:i:s");







	$sql = "insert into teamevent_registration(event_id ,team_name, college_name,student_name, emails , mobile_no,paid_amount,paid_amount_currency,txn_id, payment_status) values ('$id1','$teamname', '$college','$studentname' ,'$emails', '$mobile_no','$amount','$currency','$balance_transaction','$status')";
	
$result = mysqli_query($conn, $sql);


     $url = "successfullyregisterd.php?txnid=".$balance_transaction."&eventid=".$id1;
       
      
        
        echo "<script>window.location='".$url."'</script>";
       
    }else{
        
        $statusMsg = "Transaction has been failed";
    }



	
}



















}
else{
    $statusMsg = "Form submission error.......";
}

//show success or error message
echo $statusMsg;

















$conn->close();
?>