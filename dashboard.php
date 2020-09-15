<?php 

include('log_in.php');
if(isset($_SESSION['username']) == ''){
header('Location: login.php');
exit;
}
?>

<!DOCTYPE html>
<html style="background-image: url(&quot;bg4 (2).jpg&quot;);">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard</title>
    <link rel="stylesheet" href="dashboard/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="dashboard/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="dashboard/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
	    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    
      <link rel="stylesheet" href="assets/css/Filter.css">
    
   
    
    
    
    <link rel="stylesheet" href="dashboard/css/styles.css">



<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="dist/simple-calendar.css">
  <link rel="stylesheet" href="dashboard/demo.css">
  <link rel="stylesheet" href="assets/css/Footer-Dark.css">
  
  



   <link rel="stylesheet" href="assets/css/Table-with-search-1-1.css">
    <link rel="stylesheet" href="assets/css/Table-with-search-1.css">






<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
	<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
	<link rel='stylesheet' href='https://raw.githubusercontent.com/kartik-v/bootstrap-star-rating/master/css/star-rating.min.css'>









<link rel="stylesheet" type="text/css" href="https://fontawesome.io/assets/font-awesome/css/font-awesome.css">
<style>
.eventCard-trigger *,
.eventCard * {
  box-sizing: border-box;
}
.cards {
  margin: em auto;
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
  height: 150px;
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



.column1 {
  float: left;
  width: 1082px;
  padding: 10px;
  height: 600px; /* Should be removed. Only for demonstration */
}

.column2 {
  float: right;
  width: 270px;
  padding: 10px;
  height: 600px; /* Should be removed. Only for demonstration */
}


/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.tab-1{
	height: auto;
	
}
.tab-2{
	height: auto;
	
}
.tab-3{
	height: auto;
	
}











</style>








</head>

<body style="background-image: url(&quot;bg4.jpeg&quot;);height: auto;">
    
        <div style="background-image: url(&quot;assets/img/bg3.jpeg&quot;);height: 70px;width: 100%;">
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background-color: rgba(255,255,255,0);color: rgb(255,255,255);">
                <div class="container"><a class="navbar-brand" href="index.php" style="color: rgb(255,255,255);">MMDU Event</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div
                        class="collapse navbar-collapse" data-aos="fade" id="navcol-1">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="createevent.php" style="color: rgb(255,255,255);">Create Event</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="gallery.php" style="color: rgb(255,255,255);">Gallery</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="galleryupload.php" style="color: rgb(255,255,255);">Upload Images</a></li>
                             <li class="nav-item" role="presentation"><a class="nav-link" href="createuser.php" style="color: rgb(255,255,255);">Create new User</a></li>
                        </ul><span class="navbar-text actions"> <a class="aboutUs" href="aboutusAfterLogIn.php" style="color: rgb(255,255,255);margin-right: 20px;font-size: 20px;">About Us</a>
                        
                        
                        
                        <button class="btn btn-primary" type="button"><span class="actions"> 
						<a class="login" href="log_out.php" style="color: rgb(255,255,255);margin-right: 20px;font-size: 20px;">Logout</a></span></button>
                        </span>
                </div>
        </div>
        </nav>
    </div>
    <div>
        <div>
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1" style="font-size: 26px;">Events</a></li>
                <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-3" style="font-size: 26px;">Closed Events</a></li>
                <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-2" style="font-size: 26px;">Reports</a></li>
            </ul>
            <div class="tab-content">
			
                <div class="tab-pane active" role="tabpanel" id="tab-1">
				
			
   
   <div class="container cards">

		


				<div class="eventCard grid">
				
				
		
		
		
		
		
	<?php
include('dbconnect.php');
$username = $_SESSION['username'];
$sql1 = "select full_name from sign_up where username='$username'";
$result1 = mysqli_query($conn,$sql1);
 while($row = mysqli_fetch_array($result1)) {	
        
        $name = $row['full_name'];
    }


$sql = "select event_title, event_venue , event_thumbnail,event_id , startdate, publish_event from create_event where organizer_name='$name' and open_closed ='open' order by event_id desc" ;
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
	
	if($row['publish_event'] == 'yes'){
		echo "<form   action='publish&unpublish.php?id=".$row['event_id']."' method='post' enctype='multipart/form-data' >";
	echo "<button name ='unpublish'>Unpublish</button> ";
	echo "</form>";
	}
	else{
		
		echo "<form   action='publish&unpublish.php?id=".$row['event_id']."' method='post' enctype='multipart/form-data' >";
		
		echo "<button name='publish'>Publish</button> ";
			echo "</form>";
	}
	
	echo "<form   action='editevent.php?id=".$row['event_id']."' method='post' enctype='multipart/form-data' >";
	echo "<button>Edit</button> ";
	echo "</form>";
	
	echo "<form   action='deleteevent.php?id=".$row['event_id']."' method='post' enctype='multipart/form-data' >";
	echo "<button>Delete</button>";
	echo "</form>";
	echo			"</div>";
	
		echo	"</article>";
   
}
	 ?>  
	 
	 </div>

		







	</div>
   
  </div>
  
 


	<div class="tab-pane" role="tabpanel" id="tab-3">
				
		
   
   <div class="container cards">

		


				<div class="eventCard grid">
				
				
		
		
		
		
		
	<?php
include('dbconnect.php');
$username = $_SESSION['username'];
$sql1 = "select full_name from sign_up where username='$username'";
$result1 = mysqli_query($conn,$sql1);
 while($row = mysqli_fetch_array($result1)) {	
        
        $name = $row['full_name'];
    }


$sql = "select event_title, event_venue , event_thumbnail,event_id , startdate, publish_event from create_event where organizer_name='$name' and open_closed ='closed' order by event_id desc" ;
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
	

		
		echo "<form   action='closedeventpublish.php?id=".$row['event_id']."' method='post' enctype='multipart/form-data' >";
		echo "<button name='publish'>Publish</button> ";
			echo "</form>";
	
	
	echo "<form   action='editevent.php?id=".$row['event_id']."' method='post' enctype='multipart/form-data' >";
	echo "<button>Edit</button> ";
	echo "</form>";
	
	echo "<form   action='deleteevent.php?id=".$row['event_id']."' method='post' enctype='multipart/form-data' >";
	echo "<button>Delete</button>";
	echo "</form>";
	echo			"</div>";
	
		echo	"</article>";
   
}
	 ?>  
	 
	 </div>

		







	</div>
   
  </div>
  
  


				
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
                <div class="tab-pane" role="tabpanel" id="tab-2">
                    
                   
                   
              <div id="wrapper">
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                     
                    </div>
                    <div class="row">
                        <div class="filter">
                        <div class="card shadow border-left-primary py-2">
                         <div class="card-body">
                             	
                        <select id="year" onchange="year1()" name="yearselect">
             <option value="">Select Year</option>
<?php
include('dbconnect.php');


$username = $_SESSION['username'];
echo $username;$sql1 = "select full_name from sign_up where username='$username'";

$result1 = mysqli_query($conn,$sql1);
 while($row = mysqli_fetch_array($result1)) {	
        
        $name = $row['full_name'];
    }

$sql = "select startdate from create_event where organizer_name='$name'";

$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {
$date = strtotime($row['startdate']);

 $year[] = date('Y', $date);


 
}

$result1 = array_unique($year);

for($i=0; $i<count($result1); $i++){
	
 echo  "<option value='".$result1[$i]."'>".$result1[$i]."</option>";


}


  
 
  
  
  
?>
             </select>
             
             </div>
             </div>
                    </div>
                    
                     <div id="showcategory" style="visibility:hidden;">
             <div class="filter">
              <div class="card shadow border-left-success py-2">
                         <div class="card-body">
            
            
             <select id="category" onchange="category1()" name="categoryselect"  >
                 <option value="choose the category">Choose the category</option>
			 <option value="music">Music</option>
  <option value="dance">Dance</option>
  <option value="buisness">Buisness</option>
  <option value="fine arts">Fine Arts</option>
  <option value="theatre">Theatre</option>
  <option value="health">Health</option>
  <option value="hospitality">Hospitality</option>
  <option value="fashion">Fashion</option>
  <option value="sports">Sports</option>
  <option value="law">Law</option>
  <option value="technical">Technical</option>
  <option value="literary">Literary</option>
        </select>
        </div>
        </div>
                        </div>
                    </div>
                   
                   
                    
 






                    
                    <div id="showevent" style="visibility:hidden;">
             <div class="filter">
              <div class="card shadow border-left-success py-2">
                         <div class="card-body">
            <div id="event">
                
                
                
                
                
            </div>
        </div>
        </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    </div>
                 
                    <div id="report"></div>
     
    </div>
	</div>
	</div>
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                    
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="dashboard/js/jquery.min.js"></script>
    <script src="dashboard/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="dashboard/js/bs-animation.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
	<script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
          <script src="dist/jquery.simple-calendar.js"></script>
          
          
    
    
  
  
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-charts.js"></script>
    <script src="assets/js/dropdown-search-bs4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/Table-with-search-1.js"></script>
    <script src="assets/js/theme.js"></script>
    
  
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	












<?php
include('dbconnect.php');



$sql = "SELECT startdate,enddate, event_title FROM create_event";

$result = mysqli_query($conn,$sql);













   echo    "<script>";
   echo     "$(document).ready(function () {";
   echo     "$('#container').simpleCalendar({";
   echo      "fixedStartDay: false,";
     echo      "disableEmptyDetails: true,";
     echo          "events: [";
        
		              while($row = mysqli_fetch_array($result))
{
	
   

                      echo    "{";
			
			
                            echo   "startDate: new Date('". $row['startdate']   ."').toDateString(),";
                            echo   " endDate: new Date('".$row['enddate']."').toISOString(),";
                            echo     "summary:'" .$row['event_title'] . "' ";
                      echo "},";


   
}
        
		
       
       
                                echo   "],";

                                echo "});";
                                echo   "});";
                                echo    "</script>";


?>

<script>
    
     function year1()
 {
     
    var y = document.getElementById("showcategory");
    y.style.visibility = "visible";
  
 }
 
   function category1()
 {
     var year = document.getElementById("year").value;
     var category = document.getElementById("category").value;
    var y = document.getElementById("showevent");
    y.style.visibility = "visible";
     
      $.ajax({
   url:"eventreport.php?year="+year+"&category="+category,
   success:function(data){
    $("#event").html(data);
   }
  });
     
 
    
    
    
  
 }
 
 function eventcategory1(){
      var eventname = document.getElementById("eventcategory").value;
    
    
     
      $.ajax({
   url:"report.php?eventname="+eventname,
   success:function(data){
    $("#report").html(data);
   }
  });
     
 }
    
    
    
</script>
   



 

	
</body>

</html>






















