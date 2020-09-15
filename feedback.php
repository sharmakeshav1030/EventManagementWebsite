<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>feedbackDesign</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
	    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="./style.css">
</head>

<body class="d-flex" style="width: 100%;height: 100%;background-color: rgb(225,225,225);">
    <div style="width: 100%;height: 450px;background-image: url(&quot;assets/img/FeedbackBg.png&quot;);">
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background-color: rgba(255,255,255,0);color: rgb(255,255,255);">
            <div class="container"><a class="navbar-brand" href="#" style="color: rgb(255,255,255);">Company Name</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#" style="color: rgb(255,255,255);">First Item</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color: rgb(255,255,255);">Second Item</a></li>
                    </ul><span class="navbar-text actions"> <a class="login" href="#" style="color: rgb(255,255,255);margin-right: 10px;">Log In</a><a class="btn btn-light action-button" role="button" href="#">Sign Up</a></span></div>
    </div>
    </nav>
    <div class="card shadow-lg" style="width: 50%;margin-left: 25%;margin-right: 25%;margin-top: 15%;background-color: rgb(255,255,255);">
        <div class="card-body text-center">
		
		
           
            
			    <?php   
include('dbconnect.php');


$eventid = $_GET['eventid'];
            $sql = "select event_title,event_desc from create_event where event_id='$eventid'";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {
    
   echo          "<h4 class='card-title'>".$row['event_title']."</h4>";
   
   echo '<h6 class="text-muted card-subtitle mb-2">Description</h6><p class="card-text">'.$row['event_desc'].'</p><div style="width: 100%;padding-bottom: 10px;">';
}       
         

 echo  "<form action='feedbacksubmit.php?eventid=".$eventid."' method='post' enctype='multipart/form-data'>";
            
            ?>
			
			
			
			<input type="text" name="name" style="width: 60%;padding-left: 16px;padding-bottom: 8px;padding-top: 8px;" placeholder="Your Name"></div>
			<textarea class="shadow-lg form-control-lg" name="desc" placeholder="Verbal Feedback" style="font-size: 16px;width: 60%;height: 200px;"></textarea>
			  <span class="star__container">
  <input type="radio" name="rating" value="1" id="star-1" class="star__radio visuhide">
  <input type="radio" name="rating" value="2" id="star-2" class="star__radio visuhide">
  <input type="radio" name="rating" value="3" id="star-3" class="star__radio visuhide">
  <input type="radio" name="rating" value="4" id="star-4" class="star__radio visuhide">
  <input type="radio" name="rating" value="5" id="star-5" class="star__radio visuhide">

  <label class="star__item" for="star-1"><span class="visuhide">1 star</span></label>
  <label class="star__item" for="star-2"><span class="visuhide">2 stars</span></label>
  <label class="star__item" for="star-3"><span class="visuhide">3 stars</span></label>
  <label class="star__item" for="star-4"><span class="visuhide">4 stars</span></label>
  <label class="star__item" for="star-5"><span class="visuhide">5 stars</span></label>
</span>
<button type="submit" name="submit" style="margin-right:-600px">Submit</button>
			</div>
			
			</form>
    </div>
   
	    <div class="footer-clean" style ="margin-top:5%">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Team</h3>
                        <ul>
                            <li><a href="https://www.instagram.com/anshul.sharma23/">Anshul Sharm</a></li>
                            <li><a href="https://www.instagram.com/sharmakeshav0101/">Keshav Sharma</a></li>
                            <li><a href="https://www.instagram.com/vishu_pahwa/">Vaibhav Pahwa</a></li>
                            <li><a href="https://www.instagram.com/princepariharr/">Prince Parihar</a></li>
                            <li><a href="https://www.instagram.com/sukrut_patill/">Sukrut Patil</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3>Mentors</h3>
                        <ul>
                            <li><a href="https://www.linkedin.com/in/gunjan-sethi-23a89711/">Dr. Gunjan Sethi</a></li>
                            <li><a href="https://www.linkedin.com/in/rohini-sharma-7117b827/">Dr. Rohini Sharma</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social">
					<a class="shadow" href="https://www.facebook.com/princeparihar22" style="color: rgb(255,255,255);background-color: #350bdc;"><i class="icon ion-social-facebook"></i></a>
					<a class="shadow" href="https://twitter.com/sukrutpatil77" style="background-color: #0980d6;color: rgb(255,255,255);"><i class="icon ion-social-twitter"></i></a>
					<a class="shadow-lg" href="https://www.instagram.com/anshul.sharma23/" style="color: rgb(255,255,255);background-color: #e001f4;"><i class="icon ion-social-instagram"></i></a>
                            <p class="text-center copyright">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;MMDU Event Hub © 2020</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
	 </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>