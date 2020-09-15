
<?php
session_start();
?>

<!DOCTYPE html>
<html style="background-image: url(&quot;bg4 (2).jpg&quot;);">

<head>
   

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Drag--Drop-Upload-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
 
 </head>





</head>

<body style="background-image: url(&quot;bg4.jpeg&quot;);height: auto;">
    <div>
        <div style="background-image: url(&quot;assets/img/bg3.jpeg&quot;);height: 70px;width: 100%;">
            <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background-color: rgba(255,255,255,0);color: rgb(255,255,255);">
                <div class="container"><a class="navbar-brand" href="index.php" style="color: rgb(255,255,255);">Company Name</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div
                        class="collapse navbar-collapse" data-aos="fade" id="navcol-1">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="createevent.php" style="color: rgb(255,255,255);">Create Event</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="gallery.php" style="color: rgb(255,255,255);">Gallery</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color: rgb(255,255,255);">Upload Images</a></li>
                        </ul><span class="navbar-text actions"><button class="btn btn-primary" type="button"><span class="actions"> <a class="login" href="log_out.php" style="color: rgb(255,255,255);margin-right: 20px;font-size: 20px;">Logout</a></span></button>
                        </span>
                </div>
        </div>
        </nav>
    </div>
    
    </div>
	




	
	
	
	<form action="upload.php" method="post" enctype="multipart/form-data">
  
  	<?php
include('dbconnect.php');

$username = $_SESSION['username'];
$sql1 = "select full_name from sign_up where username='$username'";
$result1 = mysqli_query($conn,$sql1);

 while($row = mysqli_fetch_array($result1)) {	
        
        $name = $row['full_name'];
    }
   


$sql = "select event_title from create_event where organizer_name='$name' ";
$result = mysqli_query($conn,$sql);
echo		"<select id='title' name='eventtitle'>";
echo "<option value='Choose the Event Name'>Choose the Event Name</option>";
while($row = mysqli_fetch_array($result)) {	




echo  "<option value='".$row['event_title']."'>".$row['event_title']."</option>";

}
 echo  "</select>";



   ?>
  
 
   <div class="dashed_upload" style="margin-top:100px;">
   <div class="wrapper">
  <div class="drop">
    <div class="cont">
      <i class="fa fa-cloud-upload"></i>
      <div class="tit">
        Drag & Drop
      </div>
      <div class="desc">
        or 
      </div>
      <div class="browse">
        click here to browse
      </div>
    </div>
    <output id="list"></output><input  multiple name="files[]" type="file" id="uploadImage" onchange="preview_image();" >
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
	
	</div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  
  
  
  
	
	<center><button type="submit" name="submit_image">Upload Image</button></center>
	<br>
	 <div id="image_preview"></div>

<form>


</script>















<script>
function preview_image() 
{
 var total_file=document.getElementById("uploadImage").files.length;
 for(var i=0;i<total_file;i++)
 {
  $('#image_preview').append("<img src='"+URL.createObjectURL(event.target.files[i])+"' style='margin-bottom:20px; width: 200px; height: 200px;'>   ");
 }
}
</script>



	
</body>

</html>






















