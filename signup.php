<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>HomeRedefined</title>
 
	
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="assets/css/styles.css">
	
	
  
	
	<link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
	
	
	
	
	
	
	
	
</head>

<body style="padding: 50;">
    <div class="text-center" style="height: 450px;">
        <div style="background-image: url(&quot;assets/img/bg.jpeg&quot;);height: 350px;">
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background-color: rgba(255,255,255,0);color: rgb(255,255,255);">
                <div class="container"><a class="navbar-brand" href="index.php" style="color: rgb(255,255,255);">MMDU Event</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div
                        class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="gallery.php" style="color: rgb(255,255,255);">Gallery</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="aboutus.php" style="color: rgb(255,255,255);">About Us</a></li>
                        </ul></div>
        </div>
        </nav>
       
	   
	   
	  
	   
	   
	   
	   <div class="page-wrapper1 bg-red1 p-t-1801 p-b-1001 font-robo">
        <div class="wrapper1 wrapper--w9601">
            <div class="card card-21">
                <div class="card-heading1"></div>
                <div class="card-body1">
                    <h2 class="title">Registration Info</h2>
                    <form  name="myform" action="sign_up.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
					 <div class="row1 row-space1">
					 <div class="col-21">
                        <div class="input-group1">
                            <input class="input--style-21" type="text" placeholder="First Name" id="first_name" name="firstname" >
							</div>
							</div>
							<div class="col-21">
							<div class="input-group1">
							<input class="input--style-21" type="text" placeholder="Last Name" id="last_name" name="lastname" >
							</div>
                        </div>
						</div>
						
						
						
                        
                           
                                <div class="input-group1">
                                    <input	class="input--style-21" type="mail" placeholder="Enter Your Email..." id="your_email" name="mail" onkeyup='check1();'>
                                </div>
								<div style="margin-top:-30px; margin-left:380px;"><span id='message1'></span></div>
                            
                            <div class="row1 row-space1" style="margin-top:50px;">
					 <div class="col-21" >
                        <div class="input-group1">
                            <input class="input--style-21" type="password" placeholder="Enter Password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z]).{8,}"  onkeyup='check();' >
							</div>
							</div>
							<div class="col-21">
							<div class="input-group1">
							<input class="input--style-21" type="password" placeholder="Confirm Password" id="confirm_password" name="confirmpassword" pattern="(?=.*\d)(?=.*[a-z]).{8,}" onkeyup='check();'>
							</div>
							<div style="margin-top:-30px;"><span id='message'></span></div>
                        </div>
						</div>
                               
                            
                        
                        
                       
                       
                        <div class="p-t-301">
                            <button class="btn1 btn--radius1 btn--green1" type="submit" id="submit"name="submit" >Sign up</button>
							<button class="btn1 btn--radius1 btn--green1" >Cancel</button>
                        </div>
						Already Have an Account <a href="login.php">Log in</a>
						
						
						
						
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
	   
	   
	   
	   <script type="text/javascript">
	   var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   var check1 = function() {

	  
	  
	  if(document.getElementById('your_email').value.match(mailformat) ){
		 
    document.getElementById('message1').innerHTML = '';
	  }
	  else{
		   document.getElementById('message1').style.color = 'red';
    document.getElementById('message1').innerHTML = 'Enter Correct Email'; 
		  
	  }
   }
  var check = function() {
	
	  
	  
	  
	  
	  
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Password matched';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Passowrd not matching';
  }
}


function validateForm() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value  || document.getElementById('your_email').value.match(mailformat)) {
  return true; 
  } 
  
  else{
	alert("Some Fields have errors");
    return false;  
	  
  }
  
}
  
  


</script>
	 
    
  
	
	
	
	
	
	
</body>

</html>