

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>gallery</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="assets/css/styles.css">
	 <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
	

  <link rel='stylesheet' href='css/gallery.css'>
    <link rel="stylesheet" href="assets/css/Filter.css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
	
<style>





.demo {
    width:1300px;
	margin-bottom:30px;
	margin-top:30px;
	
}
ul {
    list-style: none outside none;
    padding-left: 0;
    margin-bottom:0;
}
li {
    display: block;
    float: left;
    margin-right: 6px;
    cursor:pointer;
}
#yo {
    display: block;
   height:450px;
    width:1300px;
}

/* Parent Container */
.content_img{
 position: relative;
 width: 200px;
 
 float: left;
 margin-right: 10px;
}

/* Child Text Container */
.content_img div{
 position: absolute;
 bottom: 0;
 right: 0;
 background: black;
 color: white;
 margin-bottom: 5px;
 margin-right:-1095px;
 font-family: sans-serif;
 opacity: 0;
 visibility: hidden;
 -webkit-transition: visibility 0s, opacity 0.5s linear; 
 transition: visibility 0s, opacity 0.5s linear;
}

/* Hover on Parent Container */
.content_img:hover{
 cursor: pointer;
}

.content_img:hover div{
 width: 400px;
 padding: 8px 15px;
 visibility: visible;
 opacity: 0.7; 
}
</style>



</head>

<body style="background-color: rgb(255,255,255);">
    <div style="background-image: url(&quot;assets/img/bg6.jpg&quot;);height: 350px;">
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background-color: rgba(255,255,255,0);color: rgb(0,0,0);">
            <div class="container"><a class="navbar-brand" href="index.php" style="color: rgb(0,0,0);">MMDU Event</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php" style="color: rgb(0,0,0);">Home</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="aboutus.php" style="color: rgb(0,0,0);">About us</a></li>
                    </ul><span class="navbar-text actions"> <a class="login" href="login.php" style="color: rgb(0,0,0);margin: 0px;margin-right: 20px;">Log In</a><a class="btn btn-light action-button" role="button" href="signup.php">Sign Up</a></span></div>
    </div>
    </nav>
    <div style="margin: 50px;">
        <h1 style="font-size: 108px;"><strong>Gallery</strong></h1>
        
    </div>
    </div>
	
	<div class="filter">
    <form>
	
	
        <input placeholder="e.g sports, drama, horror, technology"></input><br>
		
		
        <select id="category" onchange="category1()" name="categoryselect">
             <option value="">Select Category</option>
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
		
		
    <select id="year" onchange="year1()" name="yearselect">
             <option value="">Select Year</option>
     <?php
include('dbconnect.php');

$id = $_GET['id'];


$sql = "select date from gallery";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {
$date = strtotime($row['date']);

 $year[] = date('Y', $date);


 
}

$result1 = array_unique($year);

for($i=0; $i<count($result1); $i++){
	
 echo  "<option value='".$result1[$i]."'>".$result1[$i]."</option>";


}


  
 
  
  
  
?>
    
    
    
 </select>
    
    </form>
    
	
	
  
        <div id="yoyo"></div>
       
        
	
	
	
	
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
<script src='https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js'></script>
<script id="rendered-js">
$('#lightSlider').lightSlider({
  gallery: true,
  item: 1,
  loop: true,
  slideMargin: 0,
  thumbItem: 9 });
//# sourceURL=pen.js




    </script>
	<script>

function category1()
 {
     var category = document.getElementById("category").value;
  $.ajax({
   url:"gallerysorting.php?category="+category,
   success:function(data){
    $("#yoyo").html(data);
   }
  });
 }
  
  function year1()
 {
     var year = document.getElementById("year").value;
     var category = document.getElementById("category").value;
  $.ajax({
   url:"gallerysorting.php?year="+year+"&category="+category,
   success:function(data){
    $("#yoyo").html(data);
   }
  });
 }
  
  
  
 
 </script>

    
    
     
</body>

</html>