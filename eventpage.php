<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Event Page</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/Header-Blue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    
    	
		<!-- Stripe JavaScript library -->
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<!-- jQuery is used only for this example; it isn't required to use Stripe -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
    fieldset{
       margin-top:100px; 
    }
    
</style>
    

</head>

<body>
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


$id = $_GET['id'];

$sql = "select min_team, event_price,max_team from create_event where event_id='$id'";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {
	$min_team =  $row['min_team'];
	$max_team = $row['max_team'];
	$price = $row['event_price'];
	
}


$minimum= $min_team;
$maximum = $max_team;
$eventprice = $price;









$conn->close();
?>




    <div class="text-center" style="height: 20%;">
        <div style="background-image: url(&quot;assets/img/band-playing-on-stage-2747446.jpg&quot;);height: 350px;">
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background-color: rgba(255,255,255,0);color: rgb(255,255,255);">
                <div class="container"><a class="navbar-brand" href="index.php" style="color: rgb(255,255,255);">MMDU Event</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div
                        class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php" style="color: rgb(255,255,255);">Home</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="galleryAfterLogIn.php" style="color: rgb(255,255,255);">Gallery</a></li>
                        </ul>
                        
                        <?php					
						
						
						
						 

include('log_in.php');
if(isset($_SESSION['username']) == ''){



						


						
		echo		"<span class='navbar-text actions'> <a class='login' href='login.php' style='color: rgb(255,255,255);'>Log In</a>";
	echo	"<a class='btn bt-light action-button' role='button' href='signup.php'>Sign Up</a></span>";
						
						}
						
						else{
						echo	" <a href='dashboard.php' style='color: rgb(255,255,255);'>Dashboard</a>";
						}
						
						?>
                        
                        
                        </div>
        </div>
        </nav>
        <div class="card shadow-lg" style="width: 63%;margin-right: 16%;margin-left: 20%;margin-top: 7%;background-color: rgb(228,228,228);">
           
              
                
                        <?php
include('dbconnect.php');

$id = $_GET['id'];



$sql = "select event_title,organizer_name ,event_desc , event_thumbnail from create_event where event_id='$id'";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {       
            
            
echo "<div class='card-body shadow-lg'>";
echo "<img src='images/".$row['event_thumbnail']."' style='width: 100%;height: 450px;'>";
      echo        " <div>";
echo "<h1 class='text-left' style='margin-top:1%;font-size: 54px;color:rgb(43,43,43);'>".$row['event_title']."</h1>";
         echo       "<h1 class='text-left' style='color: rgb(107,110,114);'>".$row['organizer_name']."</h1>";
           echo     "<pre class='text-left'><br>".$row['event_desc']."<br>";
                
                
                
                
                
               echo "<br></pre>";
                
                
}
?> 
                        
                        
                        
                </div>
                
                
               
                
                
                
                <div>
                    <fieldset>
                        <legend style="width: 90%;padding: 1%;border: 2px solid rgb(94,148,172);-moz-border-radius: 2%;-webkit-border-radius: 2%;border-radius: 2%;">Rules
                        
                        
                         <?php
include('dbconnect.php');

$id = $_GET['id'];



$sql = "select event_rules from create_event where event_id='$id'";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) { 
    
    
    
    $rules= $row['event_rules'];
    
   
        
}
$t=explode(" , ", $rules);


echo '<ol>';
echo '<li>' . implode ("</li><li>", $t) . '</li>';
echo '</ol>';



$conn->close();
?>
                        
                        </legend>
                    </fieldset>
                </div>
                <div style="width: 60%;">
                    <div class="table-responsive" style="border: 2px solid rgb(169,172,169);/*-moz-border-radius: 8px;*//*-webkit-border-radius: 8px;*//*border-radius: 8px;*/">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Event Category</th>
                                    
                                 
                                    
                                    <th>Event Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    
                           <?php
include('dbconnect.php');

$id = $_GET['id'];



$sql = "select category,eventtype from create_event where event_id='$id'";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) { 
    
    
                               
         echo                           "<td>".$row['category']."</td>";
           echo                         "<td>".$row['eventtype']."</td>";
    
    
   
        
}




$conn->close();
?>                      
                                    
                                    
                                 
                                    
                                    
                                    
                                </tr>
                                <tr></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <h1 class="text-left" style="font-size: 30px;">Location</h1>
                <div class="row">
                    <div class="col"></div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="card border rounded shadow-lg" style="background-color: rgba(255,255,255,0.06);">
                                    <div class="card-body">
                                        <h4 class="card-title" style="font-size: 30px;">Time &amp; Venue</h4>
                                        
    <?php
include('dbconnect.php');

$id = $_GET['id'];



$sql = "select startdate,time,event_venue from create_event where event_id='$id'";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {                                     
                  $date = strtotime($row['startdate']);  
                 
                                        
    echo          "<h1 style='font-size: 35px;'>".date('M j, Y', $date)." | ". date("H:i a", strtotime($row['time']))."</h1><h1 style='font-size: 20px;'>".$row['event_venue']."</h1>";
                                        
}
?>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="padding: 5%;">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
									<button class="btn btn-primary btn-Oscuro" id="register" data-bs-hover-animate="tada" data-toggle="modal" data-target="#modal" type="button">Register Now</button>
                                        <div class="modal fade centro" role="dialog" tabindex="-1" id="modal">
                                        <?php
include('dbconnect.php');
$id = $_GET['id'];
if($eventprice != 0){
														
												echo "<form action='eventregistration.php?id1=".$id."' method='post' enctype='multipart/form-data' id='paymentFrm'>";
}
else{
    	echo "<form action='eventregistration1.php?id1=".$id."' method='post' enctype='multipart/form-data'>";
}
														?>   

										   <div class="modal-dialog" role="document">
 

											   <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h6 class="modal-title txtsGrises">REGISTER </h6>
														<button type="button" id="register" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">×</span>
														</button>
														</div>
                                                    <div class="modal-body">
                                                        <h2 class="titulos">Register form: </h2>
                                                        <p class="text-left margenesEspacio">Write your information to be part of our community and have access to the system. </p>
														

                                                        <div class="col padMar">
														
													
														<div id="registerform"></div>
														<div id="teamdetails3"></div>
														<div id="teamdetails"></div>
														<div id="teamdetails1"></div>
												<div id="payment"></div>
  
    
														
														
														
																</div>
                                                    </div>
                                                    <div class="modal-footer">
<?php                      

if($eventprice  != 0){
		echo	"<button class='btn btn-primary btn-Oscuro' type='submit' id='payBtn'>REGISTER & Pay ₹".$eventprice." </button>";
}
else{
 echo "<button class='btn btn-primary btn-Oscuro' type='submit' name ='submit'>REGISTER </button>";
}
													?>
													
												
													</div>
													
                                                </div>
												
												
												 </div>
											
												 </form>
												 
												 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                  


				  </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div style="height: 300px;"><img class="float-right" data-aos="slide-left" data-aos-duration="800" data-aos-delay="200" src="assets/img/musicLogo.jpg" style="width: 200px;"><img class="float-left" data-aos="slide-right" data-aos-duration="800" data-aos-delay="200" src="assets/img/writingLogo.jpg"
            style="width: 200px;"></div>
    <div style="height: 300px;"><img data-aos="slide-right" data-aos-duration="800" data-aos-delay="200" src="assets/img/sportsLogo.png" style="width: 200px;"><img class="float-right" data-aos="slide-left" data-aos-duration="800" data-aos-delay="200" src="assets/img/doctorLogo.png" style="width: 200px;height: 250px;"></div>
    <div
        style="height: 300px;"><img class="float-right" data-aos="slide-left" data-aos-duration="800" data-aos-delay="200" src="assets/img/danceLogo.png" style="margin: 50px;margin-right: 10px;"><img class="float-left" data-aos="slide-right" data-aos-duration="800" data-aos-delay="200"
            src="assets/img/coding%20logo.png" style="width: 200px;margin-top: 50px;margin-right: 50px;"></div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bs-animation.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
		
		
		
		
		
		<script>
		
		
		var btn = document.getElementById("register");
var x = "<?php echo $minimum ?>";
var y = "<?php echo $maximum ?>";
var z = y-x;

btn.onclick = function() {
			
			var text = "";
			 if(<?php echo $eventprice ?> != 0){
      
   
   
    document.getElementById("payment").innerHTML = ' <p><label>Card Number</label><input type="text" name="card_num" size="20" autocomplete="off" class="card-number" /></p><p><label>CVC</label><input type="text" name="cvc" size="4" autocomplete="off" class="card-cvc" /></p><p><label>Expiration (MM/YYYY)</label><input type="text" name="exp_month" size="2" class="card-expiry-month"/><span> / </span><input type="text" name="exp_year" size="4" class="card-expiry-year"/></p>';

    }
    else{
    }
			
	if(x=="0"){
		
		
		
  text = "<input type='text' name='name' class='margenesEspacio inputLargo' placeholder='Full Name'> <input type='text' class='margenesEspacio inputLargo' placeholder='Roll No.' name='rollno'> <input type='text' class='margenesEspacio inputLargo'  placeholder='College Name' name='college'> <select name='dept_name'> <option value='None'>Choose the Department</option><option Value='hotel Management'>Hotel Management</option><option Value='B.tech'>B.tech</option><option Value='BCA'>BCA</option><option Value='B.sc'>B.sc</option><option Value='B.com'>B.com</option><option Value='MBBS'>MBBS</option><option Value='MBA'>MBA</option><option Value='M.sc'>M.sc</option><option Value='BBA'>BBA</option><option Value='LLB'>LLB</option><option Value='BDS'>BDS</option><option Value='MDS'>MDS</option><option Value='M.tech'>M.tech</option></select><input type='text' class='margenesEspacio inputLargo' placeholder='Email' name='email'><input type='tel' class='margenesEspacio inputLargo' placeholder='Mobile phone' name='mobileno'>" ;
  
  
  
  
  
  


document.getElementById("registerform").innerHTML = text;
		
		
	}
	
	
	else{
	    
	     if(<?php echo $eventprice ?> != 0){
      
   
   
    document.getElementById("payment").innerHTML = ' <p><label>Card Number</label><input type="text" name="card_num" size="20" autocomplete="off" class="card-number" /></p><p><label>CVC</label><input type="text" name="cvc" size="4" autocomplete="off" class="card-cvc" /></p><p><label>Expiration (MM/YYYY)</label><input type="text" name="exp_month" size="2" class="card-expiry-month"/><span> / </span><input type="text" name="exp_year" size="4" class="card-expiry-year"/></p>';

    }
    else{
    }
			
		var text = "";
		var text1 ="";
		var text3 ="";
	var i,u;
	for (i = 0; i < x; i++) {
		
		
		
  text +="<input name='name[]' class='margenesEspacio inputLargo' type='text' id='name_"+i+"' placeholder='name(rollno)' required> <input type='mail' name='email[]' class='margenesEspacio inputLargo' id='mail_"+i+"' placeholder='Enter Your Email' required><input name='mobile[]' class='margenesEspacio inputLargo' type='tel' id='mobile_"+i+"' placeholder='Enter your mobile no' required><br>" ;
  
  
}
for (u = 0; u < z; u++) {
		
		
		
  text1 +="<input name='name[]' class='margenesEspacio inputLargo' type='text' id='name_"+u+"' placeholder='name(rollno)' > <input type='mail' name='email[]' id='mail_"+u+"' class='margenesEspacio inputLargo' placeholder='Enter Your Email'  ><input name='mobile[]' type='tel' id='mobile_"+u+"'  placeholder='Enter your mobile no'  class='margenesEspacio inputLargo'><br>" ;
  
  
}

 text3 = "<input type='text'  name='team_name' class='margenesEspacio inputLargo' placeholder='Team Name'><br><input type='text'  name='college' placeholder='Enter Your College/University Name...' class='margenesEspacio inputLargo' >"



document.getElementById("teamdetails").innerHTML = text;
document.getElementById("teamdetails1").innerHTML = text1;
document.getElementById("teamdetails3").innerHTML = text3;



	}
	
	
	
		
}





		
		</script>
		
		
	<script type="text/javascript">
//set your publishable key
Stripe.setPublishableKey('pk_test_YHJ6iSHoBEdcBTWPs0bvcRDp000qmWpWPo');

//callback to handle the response from stripe
function stripeResponseHandler(status, response) {
    if (response.error) {
        //enable the submit button
        $('#payBtn').removeAttr("disabled");
        //display the errors on the form
        $(".payment-errors").html(response.error.message);
    } else {
        var form$ = $("#paymentFrm");
        //get token id
        var token = response['id'];
        //insert the token into the form
        form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
        //submit form to the server
        form$.get(0).submit();
    }
}
$(document).ready(function() {
    //on form submit
    $("#paymentFrm").submit(function(event) {
        //disable the submit button to prevent repeated clicks
        $('#payBtn').attr("disabled", "disabled");
        
        //create single-use token to charge the user
        Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
        }, stripeResponseHandler);
        
        //submit from callback
        return false;
    });
});
</script>
		
	
		
	
</body>

</html>