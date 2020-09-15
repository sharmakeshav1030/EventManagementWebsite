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
	   <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
	
	
	<link rel="stylesheet" href="assets/css/Footer-Dark.css">
	
	
	<link rel="stylesheet"  href="slick/slick.css">
  <link rel="stylesheet"  href="slick/slick-theme.css">
  <style type="text/css">
   



.yo {
  position: relative;
  width: auto;
}

.yo1{
  display: block;
  width: auto;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: auto;
  width: auto;
  opacity: 0;
  transition: 1s ease;
  background-color: #d4e2c4bd;
}

.yo:hover .overlay {
  opacity: 1.4;
  
  	transition: transform 1s;
		
		 -ms-transform: scale(1) 
  -webkit-transform: scale(1); 
  transform: scale(1);
  
}

.yo2 {
	font-family:Copperplate;
  color: black;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
 






   
	

    .slider {
        width: 90%;
        margin: 110px auto;
		margin-top:30px;
		
    }

    .slick-slide {
      margin: 0px 10px;
    }

    .slick-slide img {
      width: 350px;
	  height:200px;
	
    }

    .slick-prev:before,
    .slick-next:before {
      color: white;
	 
	  
	  
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: 1;
    }
    
    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }
  </style>
	
	
	
	
	
	
	
	
<link rel="stylesheet" type="text/css" href="https://fontawesome.io/assets/font-awesome/css/font-awesome.css">
<style>
.eventCard-trigger *,
.eventCard * {
  box-sizing: border-box;
}
.cards {
  margin: 2em auto;
}
.eventCard-trigger {
  margin: -25px 0;
 
  padding: 0 15px;
}
.eventCard-trigger > i {
  font-size: 1.3em;
  padding-right: 8px;
  cursor: pointer;
}
.eventCard-trigger > i.active {
  opacity: 0.3;
  pointer-events: none;
}
.eventCard {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-start;
  font-family: sans-serif;
}
.eventCard__item {
  flex: 1 0 calc(33.33% - 30px);
  max-width: calc(33.33% - 30px);
  border: 1px solid #ddd;
  margin: 15px;
  background-color: #fff;
}
.eventCard .item-1-img {
  padding: 15px;
  background-color: #eee;
  height: 250px;
}
.eventCard .item-1-img img {
  max-width: 100%;
  width: 100%;
  height: 100%;
  display: block;
  margin: 0 auto;
}
.eventCard .item-1-box {
  padding: 15px;
}
.eventCard .item-1-box .name {
  margin-top: 0;
  margin-bottom: 10px;
}
.eventCard .item-1-box .address {
  margin-top: 10px;
  color: #afaeae;
}
.eventCard .item-1-box .name,
.eventCard .item-1-box .address {
  display: -webkit-box;
  line-height: 1.4;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
}
.eventCard .item-1-box .date {
  padding: 10px 10px 0 10px;
  border-top: 1px solid #eee;
  margin: 0 -15px;
  font-size: 0.9em;
  text-transform: uppercase;
}
.eventCard .item-1-box .date > span {
  font-size: 2em;
  padding-right: 3px;
}
.eventCard.list {
  flex-direction: column;
}
.eventCard.list .eventCard__item {
  flex-basis: 100%;
  max-width: 100%;
  display: flex;
}
.eventCard.list .eventCard__item .item-1-img,
.eventCard.list .eventCard__item .item-3-img,
.eventCard.list .eventCard__item .item-4-img {
  height: 150px;
  flex: 1 0 25%;
}
.eventCard.list .eventCard__item .item-1-box,
.eventCard.list .eventCard__item .item-3-box,
.eventCard.list .eventCard__item .item-4-box {
  flex: 1 0 75%;
}
.eventCard.list .eventCard__item .item-1-box .box-holder,
.eventCard.list .eventCard__item .item-3-box .box-holder,
.eventCard.list .eventCard__item .item-4-box .box-holder {
  position: static;
  padding: 0;
  width: 100%;
}
.eventCard.list .eventCard__item .item-2-img {
  height: 150px;
  flex: 1 0 25%;
}
.eventCard.list .eventCard__item .item-2-img .date {
  font-size: 0.75em;
}
.eventCard.list .eventCard__item .item-2-img .date-1 {
  top: 5px;
  right: 8px;
  width: 45px;
  height: 45px;
  padding: 3px;
  font-size: 0.65em;
  line-height: 1.2;
}
.eventCard.list .eventCard__item .item-2-img .date-1.bottom {
  top: 35%;
  bottom: 0;
  right: -22px;
}
.eventCard.list .eventCard__item .item-2-box {
  flex: 1 0 75%;
}
.eventCard.list .eventCard__item .item-2-box.pl {
  padding-left: 35px;
}
.eventCard .item-2-img {
  background-color: #eee;
  position: relative;
  height: 250px;
}
.eventCard .item-2-img img {
  max-width: 100%;
  width: 100%;
  height: 100%;
  display: block;
  margin: 0 auto;
}
.eventCard .item-2-img .date {
  position: absolute;
  bottom: 0;
  padding: 3px 10px;
  min-width: 20%;
  text-align: center;
  background-color: #000;
  color: #fff;
  font-size: 0.9em;
  text-transform: uppercase;
}
.eventCard .item-2-img .date > span {
  font-size: 1.65em;
  padding-right: 5px;
}
.eventCard .item-2-img .date-1 {
  position: absolute;
  top: 8px;
  right: 8px;
  width: 50px;
  height: 50px;
  padding: 5px;
  line-height: 1.1;
  border-radius: 50%;
  text-align: center;
  background-color: #000;
  color: #fff;
  font-size: 0.75em;
  text-transform: uppercase;
}
.eventCard .item-2-img .date-1 > span {
  font-size: 2em;
  display: block;
  padding-right: 5px;
}
.eventCard .item-2-img .date-1.bottom {
  top: inherit;
  bottom: -22px;
}
.eventCard .item-2-box {
  padding: 15px;
}
.eventCard .item-2-box .name {
  margin-top: 0;
  margin-bottom: 10px;
}
.eventCard .item-2-box .address {
  margin-top: 10px;
  color: #afaeae;
}
.eventCard .item-2-box .name,
.eventCard .item-2-box .address {
  display: -webkit-box;
  line-height: 1.4;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
}
.eventCard .item-3-img {
  background-color: #eee;
  height: 250px;
}
.eventCard .item-3-img img {
  max-width: 100%;
  width: 100%;
  height: 100%;
  display: block;
  margin: 0 auto;
}
.eventCard .item-3-box {
  padding: 15px;
}
.eventCard .item-3-box .date {
  border-left: 3px solid #ddd;
  font-size: 0.9em;
  color: #827979;
  padding: 0 5px;
  margin-bottom: 8px;
}
.eventCard .item-3-box .date > span {
  padding-right: 2px;
}
.eventCard .item-3-box .name {
  margin-top: 0;
  margin-bottom: 10px;
}
.eventCard .item-3-box .address {
  margin-top: 10px;
  color: #afaeae;
}
.eventCard .item-3-box .name,
.eventCard .item-3-box .address {
  display: -webkit-box;
  line-height: 1.4;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
}
.eventCard .item-4-img {
  background-color: #eee;
  height: 250px;
}
.eventCard .item-4-img img {
  max-width: 100%;
  width: 100%;
  height: 100%;
  display: block;
  margin: 0 auto;
}
.eventCard .item-4-box {
  padding: 15px;
  position: relative;
  height: 145px;
}
.eventCard .item-4-box .box-holder {
  background-color: #fff;
  position: absolute;
  top: -30px;
  width: 90%;
  left: 0;
  right: 0;
  margin: 0 auto;
  padding: 10px;
}
.eventCard .item-4-box .box-holder .event-detail {
  display: flex;
  align-items: center;
  margin-bottom: 15px;
}
.eventCard .item-4-box .box-holder .event-detail .date {
  font-size: 0.8em;
  color: #fff;
  min-width: 50px;
  margin-right: 5px;
  text-align: center;
  background-color: rgba(0, 0, 0, 0.44);
  padding-bottom: 5px;
  text-transform: uppercase;
}
.eventCard .item-4-box .box-holder .event-detail .date > span {
  display: block;
  padding: 5px 0;
  background-color: rgba(0, 0, 0, 0.25);
  margin-bottom: 5px;
}
.eventCard .item-4-box .box-holder .event-detail .name {
  margin: 0;
}
.eventCard .item-4-box .name,
.eventCard .item-4-box .address {
  display: -webkit-box;
  line-height: 1.4;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
}
.eventCard .item-4-box .address {
  margin-top: 10px;
  -webkit-line-clamp: 3;
  color: #afaeae;
}

a, a:visited, a:hover, a:active {
  color: inherit;
}


.vl {
  border-left: 3px solid white;
  height: 150px;
  position: absolute;
  left: 50%;
  margin-top: 3px;
  margin-left: -3px;
  top: 0;
}
</style>
  	
	
</head>

<body style="background-color: black;padding: 50; width:100%">
     <script>
        var botmanWidget = {
            frameEndpoint: 'chat.html',
            introMessage: 'Hello I am a chatbot',
            chatServer : 'chat.php', 
            title: 'My Chatbot', 
            mainColor: '#456765',
            bubbleBackground: '#ff76f4',
            aboutText: '',
            bubbleAvatarUrl: '',
        }; 
    </script>
        <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
       <div style="background-color:#010314;">
		<div class="text-center" style="height: 15%; background-color:;">
        <div style="background-color:#414657 ;height: 10%; filter: brightness(); position:fixed;top:0;width: 100%;z-index:1030;" >
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background-color: rgba(255,255,255,0);color: rgb(255,255,255);">
                <div class="container">
                    <a href="index.php"><img class="navbar-brand" src="Capture.png" alt="MMDU Event Hub" width="200" height="60"></a>
                    
				<button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
				<span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span>
				</button>
                    <div
                        class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="gallery.php" style="color: rgb(255,255,255);">Gallery</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="aboutus.php" style="color: rgb(255,255,255);">About us</a></li>
                        </ul>
						
				<?php					
						
						
						
					 

					include('log_in.php');
					if(isset($_SESSION['username']) == ''){
	
					echo		"<span class='navbar-text actions'> <a class='btn bt-light' href='login.php' style='color: rgb(255,255,255);'>Log In</a>";
					echo	"<a class='btn bt-light action-button' role='button' href='signup.php' style='background-color:red'>Sign Up</a></span>";
						
					}
						else{
						echo	" <span><a class='btn bt-light action-button' role='button' href='dashboard.php'>Dashboard</a></span>";
						}		
				?>
						
						
					</div>
        </div>
        </nav>
       
	   </div>
	   <div style="background-color:;margin-top:5%">
	   
	   <section class="center slider" style="height:300px; position:center;">
    
	
	<?php
include('dbconnect.php');


$sql1 = "select event_thumbnail,event_title,event_id,event_desc from create_event where publish_event='yes' and open_closed ='open' order by startdate asc Limit 12 ";
$result1 = mysqli_query($conn,$sql1);

while($row1 = mysqli_fetch_array($result1)) {


         echo   "<div class='yo' style='margin-top:50px'>";

    
	echo "<a href='eventpage.php?id=".$row1['event_id']."'>";

	echo "<img src='images/".$row1['event_thumbnail']."' class='yo1'>";
	  
	echo  "<div class='overlay'>";
   echo  "<div class='yo2'><u>".$row1['event_title'],$row2['event_desc']."</u></div>";
	
	echo "</div>";
 echo  "</a>";
 echo   "</div>";
	
}
  
    ?>
  </section>
	   
	   
	   
    </div>
    </div>
	</div>
	<div >
	<section style="background-color: white">
    <div class="border rounded" style="height: 15%;width:100%;margin:; margin-top:-7%; background-color:#7E8FAB;filter: brightness(111%); position:center;">
        <h3 style="margin: 10px; text-align: center; font-family: Palatino;"><b>Browse Events By Categories</b></h1>
        <div class="carousel slide" data-ride="carousel" id="carousel-2">
             <div class="carousel-inner" role="listbox">
			
			
                <div class="carousel-item active">
                    <div class="row" style="margin-left: 2%">
					<button id="buisness" style="padding: 0; border: none; background: none;">
                         <div class="col text-break text-center" style="padding: 10px;"><img class="rounded shadow-lg" src="assets/img/Bbusiness.jpg" style="width: 200px;height: 150px;">
                           <h1 style="font-size: 22px; font-family:courier new;"><b>Business</b></h1>
                        </div>
						
						</button>
						<button id="technical" style="padding: 0; border: none; background: none;">
                        <div class="col text-center" style="padding: 10px;"><img class="rounded shadow-lg" src="assets/img/coding.jpg" style="width: 200px;height: 150px;">
                            <h1 style="font-size: 22px; font-family:courier new;"><b>Technical</b></h1>
                        </div>
						</button>
						<button id="literary" style="padding: 0; border: none; background: none;">
                        <div class="col text-center" style="padding: 10px;"><img class="rounded shadow-lg" src="assets/img/literature.jpg" style="width: 200px;height: 150px;">
                            <h1 style="font-size: 22px; font-family:courier new;"><b>Literary</b></h1>
                        </div>
						</button>
						<button id="fashion" style="padding: 0; border: none; background: none;">
                        <div class="col text-center" style="padding: 10px;"><img class="rounded shadow-lg" src="assets/img/fashion.jpg" style="width: 200px;height: 150px;">
                            <h1 style="font-size: 22px; font-family:courier new;"><b>Fashion</b></h1>
                        </div>
						</button>
						
						<button id="law" style="padding: 0; border: none; background: none;">
                        <div class="col text-center" style="padding: 10px;"><img class="rounded shadow-lg" src="assets/img/law.jpg" style="width: 200px;height: 150px;">
                            <h1 style="font-size: 22px; font-family:courier new;"><b>Law</b></h1>
                        </div>
						</button>
						<button id="sports" style="padding: 0; border: none; background: none;">
                        <div class="col text-center" style="padding: 10px;"><img class="rounded shadow-lg" src="assets/img/sports.jpg" style="width: 200px;height: 150px;">
                            <h1 style="font-size: 22px; font-family:courier new;"><b>Sports</b></h1>
                        </div>
						</button>
						
                    </div>
                </div>
				
				
				
                <div class="carousel-item">
                    <div class="row" style="margin-left: 2%">
					<button id="music" style="padding: 0; border: none; background: none;">
                        <div class="col text-center" style="padding: 10px;"><img class="rounded shadow-lg" src="assets/img/music.jpg" style="width: 200px;height: 150px;">
                            <h1 style="font-size: 22px; font-family:courier new;"><b>Music</b></h1>
                        </div>
						</button>
						<button id="health" style="padding: 0; border: none; background: none;">
                        <div class="col text-center" style="padding: 10px;"><img class="rounded shadow-lg" src="assets/img/health.jpeg" style="width: 200px;height: 150px;">
                            <h1 style="font-size: 22px; font-family:courier new;"><b>Health</b></h1>
                        </div>
						</button>
						<button id="finearts" style="padding: 0; border: none; background: none;">
                        <div class="col text-center" style="padding: 10px;"><img class="rounded shadow-lg" src="assets/img/finearts.jpeg" style="width: 200px;height: 150px;">
                            <h1 style="font-size: 22px; font-family:courier new;"><b>Fine Arts</b></h1>
                        </div>
						</button>
						<button id="theater" style="padding: 0; border: none; background: none;">
                        <div class="col text-center" style="padding: 10px;"><img class="rounded shadow-lg" src="assets/img/theater.jpg" style="width: 200px;height: 150px;">
                            <h1 style="font-size: 22px; font-family:courier new;"><b>Theater</b></h1>
                        </div>
						</button>
						<button id="hospitality" style="padding: 0; border: none; background: none;">
                        <div class="col text-center" style="padding: 10px;"><img class="rounded shadow-lg" src="assets/img/hospitality%27.jpeg" style="width: 200px;height: 150px;">
                            <h1 style="font-size: 22px; font-family:courier new;"><b>Hospitality</b></h1>
                        </div>
						</button>
						<button id="dance" style="padding: 0; border: none; background: none;">
                        <div class="col text-center" style="padding: 10px;"><img class="rounded shadow-lg" src="assets/img/dance.jpeg" style="width: 200px;height: 150px;">
                            <h1 style="font-size: 22px; font-family:courier new;"><b>Dance</b></h1>
                        </div>
						</button>
                    </div>
                </div>
            </div>
            <div><a class="carousel-control-prev p-1" href="#carousel-2" role="button" data-slide="prev" style="margin-left:-6%"><span class="carousel-control-prev-icon"></span>
			<span class="sr-only">Previous</span></a><a class="carousel-control-next p-1" href="#carousel-2" role="button" data-slide="next" style="margin-right:-6%"><span class="carousel-control-next-icon" ></span><span class="sr-only">Next</span></a></div>
            <ol class="carousel-indicators">
                <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-2" data-slide-to="1"></li>
            </ol>
        </div>
    </div>
	</section>
    <div style="height:100%;margin:30px; background-image: url(&quot;assets/img/bg2.jpg&quot;);">
     
                <h1 style="margin-left: 3%;">Events</h1>
                <a href="examples/eventcalender.php"><h7 style="margin: 3%"> See Event calender</h7></a>
			
            
            
        
		
	<div id="categories">
		</div>
		
		<div id ="remove1" class="container cards">
	


				<div class="eventCard grid" id="eventmore">
				
				
		
		
		
		
		
	<?php
include('dbconnect.php');



$sql = "select event_title, event_venue , event_thumbnail,event_id,startdate, event_desc from create_event where publish_event='yes' and open_closed ='open' order by startdate asc Limit 6";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {	
		
   
  echo "<article class='eventCard__item item-2'>";
	echo			"<div class='item-2-img'>";
	echo				"<img src='images/".$row['event_thumbnail']."'>";
	echo				"<div class='date-1 bottom'>";
	
	$startdate = date('d', strtotime($row['startdate']));
	$date = strtotime($row['startdate']);
 
	
	echo					"<span>".$startdate."</span>".date('M', $date);
	
	echo				"</div>";
	echo			"</div>";
	echo			"<div class='item-2-box pl'>";
	echo				"<h3 class='name'><a href='eventpage.php?id=".$row['event_id']."'>".$row['event_title']."</a></h3>";
	echo				"<p class='address'>".$row['event_venue']."</p>";
	echo    '<hr>';
	echo				substr($row['event_desc'],0,100)."...";
	echo			"</div>";
		echo	"</article>";
   
}
$eventid = $row['startdate'];


	 ?> 
	 
	
	 
	 </div>

<center>	<button type="button" name="btn_more" data-vid="<?php echo $eventid; ?>" id="btn_more">Load More</button>	</center>
 






	</div>
	   
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
	
	
	
	
	<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    
     
     
     
     
      
      $(".center").slick({
        dots: false,
        infinite: true,
        centerMode: true,
        slidesToShow: 3,
         autoplay: true,
  autoplaySpeed: 1000,
        
        slidesToScroll: 3
      });
      
     
</script>
	
	<script>
var y = document.getElementById("remove1");
$(document).ready(function(){
  $("#buisness").click(function(){
	  y.style.display = "none";
    $.ajax({url: "new.php?id=buisness", success: function(result){
      $("#categories").html(result);
    }});
  });
});

$(document).ready(function(){
  $("#fashion").click(function(){
	  y.style.display = "none";
    $.ajax({url: "new.php?id=fashion", success: function(result){
      $("#categories").html(result);
    }});
  });
});

$(document).ready(function(){
  $("#sports").click(function(){
	  y.style.display = "none";
    $.ajax({url: "new.php?id=sports", success: function(result){
      $("#categories").html(result);
    }});
  });
});

$(document).ready(function(){
  $("#dance").click(function(){
	  y.style.display = "none";
    $.ajax({url: "new.php?id=dance", success: function(result){
      $("#categories").html(result);
    }});
  });
});

$(document).ready(function(){
  $("#finearts").click(function(){
	  y.style.display = "none";
    $.ajax({url: "new.php?id=fine arts", success: function(result){
      $("#categories").html(result);
    }});
  });
});

$(document).ready(function(){
  $("#health").click(function(){
	  y.style.display = "none";
    $.ajax({url: "new.php?id=health", success: function(result){
      $("#categories").html(result);
    }});
  });
});

$(document).ready(function(){
  $("#technical").click(function(){
	  y.style.display = "none";
    $.ajax({url: "new.php?id=technical", success: function(result){
      $("#categories").html(result);
    }});
  });
});

$(document).ready(function(){
  $("#law").click(function(){
	  y.style.display = "none";
    $.ajax({url: "new.php?id=law", success: function(result){
      $("#categories").html(result);
    }});
  });
});

$(document).ready(function(){
  $("#literary").click(function(){
	  y.style.display = "none";
    $.ajax({url: "new.php?id=literary", success: function(result){
      $("#categories").html(result);
    }});
  });
});

$(document).ready(function(){
  $("#theater").click(function(){
	  y.style.display = "none";
    $.ajax({url: "new.php?id=theater", success: function(result){
      $("#categories").html(result);
    }});
  });
});

$(document).ready(function(){
  $("#hospitality").click(function(){
	  y.style.display = "none";
    $.ajax({url: "new.php?id=hospitality", success: function(result){
      $("#categories").html(result);
    }});
  });
});

$(document).ready(function(){
  $("#music").click(function(){
	  y.style.display = "none";
    $.ajax({url: "new.php?id=music", success: function(result){
      $("#categories").html(result);
    }});
  });
});



</script>

<script>  
 $(document).ready(function(){  
      $(document).on('click', '#btn_more', function(){  
           var last_event_id = $(this).data("vid");  
           $('#btn_more').html("Loading...");  
           $.ajax({  
                url:"event_more.php",  
                method:"POST",  
                data:{last_event_id:last_event_id},  
                  
                success:function(data)  
                {  
                     if(data.trim() == '')  
                     {  
                          $('#btn_more').html("No Data");
                           
                     }  
                     else  
                     {  
                         $('#btn_more').remove();
                         $('#eventmore').append(data); 
                         $('#remove1').append(data.button);
                         
                     }  
                }  
           });  
      });  
 });  
 </script>






	</div>
 <div class="footer-clean" style="background: #414657; width: 100%">
     
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    
                    <div class="col-sm-4 col-md-3 item social" style="color: white; margin-left: -200px">
                        <h3 >Team</h3>
                        <ul>
                            <li><a href="https://www.instagram.com/anshul.sharma23/">Anshul Sharm</a></li>
                            <li><a href="https://www.instagram.com/sharmakeshav0101/">Keshav Sharma</a></li>
                            <li><a href="https://www.instagram.com/vishu_pahwa/">Vaibhav Pahwa</a></li>
                            <li><a href="https://www.instagram.com/princepariharr/">Prince Parihar</a></li>
                            <li><a href="https://www.instagram.com/sukrut_patill/">Sukrut Patil</a></li>
                        </ul>
					<div class="item social" style="margin-right:-30%">
					<a class="shadow" href="https://www.facebook.com/princeparihar22" style="color: rgb(255,255,255);background-color: #350bdc;"><i class="icon ion-social-facebook"></i></a>
					<a class="shadow" href="https://twitter.com/sukrutpatil77" style="background-color: #0980d6;color: rgb(255,255,255);"><i class="icon ion-social-twitter"></i></a>
					<a class="shadow-lg" href="https://www.instagram.com/anshul.sharma23/" style="color: rgb(255,255,255);background-color: #e001f4;"><i class="icon ion-social-instagram"></i></a>
                    <p class="text-center copyright" style="color:white;margin-right: -30%">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;MMDU Event Hub © 2020</p>
					</div>
					</div>
                     
                    <div class="col-sm-4 col-md-3 item" style="color:white">
                        <h3>Mentors</h3>
                        <ul>
                            <li><a href="https://www.linkedin.com/in/gunjan-sethi-23a89711/">Dr. Gunjan Sethi</a></li>
                            <li><a href="https://www.linkedin.com/in/rohini-sharma-7117b827/">Dr. Rohini Sharma</a></li>
                        </ul>
                    <span class="vl" style="margin-left=50px"></span>
                    </div>
                    
					
                    
					<div class="col-sm-4 col-md-3 item social" style="margin left:-30px">
                    
										<img width="185px" height="70px" align="left" src="website-logo.png"><br><br><br>
										<p style="color:white; font-size:11px; text-align:left;">Maharishi Markandeshwar (Deemed to be University) is a leading University in North India and has become a symbol of quality education in technical, medical and other professional streams.</p>
				
					
					
					</div>
                    <div class="col-lg-3 item social" style="margin left:-30px">
                    
										<h2 style="color:Red">Our <span style="color:#ffffffff">Contacts</span></h2>
				
					
					
					</div>
                </div>
                
            </div>
            
        </footer>
    </div>
	
	 <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>