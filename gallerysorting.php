
 <?php
include('dbconnect.php');

$category = $_GET['category'];


$year = $_GET['year'];


if($category != '' && $year == ''){

$sql = "select organizer_name,event_name,image from gallery where category = '$category'";
$result = mysqli_query($conn,$sql);

$gallery ="<link rel='stylesheet' href='css/gallery.css'>";
  $gallery  .= '<center><div class="demo"><ul id="lightSlider">';
	
	
while($row = mysqli_fetch_array($result)) {


$gallery .= '<li data-thumb="gallery/'.$row['image'].'">
                    <div class="content_img">
                   
            <img id="yo" src="gallery/'.$row['image'].'" />
           
			<div><center>Event Name: '.$row['event_name'].'<br>
                  Organizer Name: '.$row['organizer_name'].'
			
		</center>	</div>
			
                  </div>
                      </li>';
$empty[] = $row['image'];

 
}

$gallery .= '</center></ul></div>';
$gallery .="<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
<script src='https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js'></script>
<script id='rendered-js'>
$('#lightSlider').lightSlider({
  gallery: true,
  item: 1,
  loop: true,
  slideMargin: 0,
  thumbItem: 9 });
//# sourceURL=pen.js




    </script>";


if($empty != ''){

  echo $gallery;
}
else{
    echo "No Images Found For These Query";
}



}


else if($category != '' && $year != ''){
$sql = "select organizer_name,event_name,image from gallery where category = '$category' and date like '%$year%'";
$result = mysqli_query($conn,$sql);

$gallery ="<link rel='stylesheet' href='css/gallery.css'>";
  $gallery  .= '<center><div class="demo"><ul id="lightSlider">';
	
	
while($row = mysqli_fetch_array($result)) {

$gallery .= '<li data-thumb="gallery/'.$row['image'].'">
                    <div class="content_img">
                   
            <img id="yo" src="gallery/'.$row['image'].'" />
           
			<div><center>Event Name: '.$row['event_name'].'<br>
                  Organizer Name: '.$row['organizer_name'].'
			
		</center>	</div>
			
                  </div>
                      </li>';


$empty[] = $row['image'];

 
}

$gallery .= '</center></ul></div>';
$gallery .="<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
<script src='https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js'></script>
<script id='rendered-js'>
$('#lightSlider').lightSlider({
  gallery: true,
  item: 1,
  loop: true,
  slideMargin: 0,
  thumbItem: 9 });
//# sourceURL=pen.js




    </script>";


if($empty != ''){

  echo $gallery;
}
else{
    echo "No Images Found For These Query";
}

}


else if($category == '' && $year != ''){
$sql = "select organizer_name,event_name,image from gallery where date like '%$year%'";
$result = mysqli_query($conn,$sql);

$gallery ="<link rel='stylesheet' href='css/gallery.css'>";
  $gallery  .= '<center><div class="demo"><ul id="lightSlider">';
	
	
while($row = mysqli_fetch_array($result)) {

$gallery .= '<li data-thumb="gallery/'.$row['image'].'">
                    <div class="content_img">
                   
            <img id="yo" src="gallery/'.$row['image'].'" />
           
			<div><center>Event Name: '.$row['event_name'].'<br>
                  Organizer Name: '.$row['organizer_name'].'
			
		</center>	</div>
			
                  </div>
                      </li>';



 $empty[] = $row['image'];

 
}

$gallery .= '</center></ul></div>';
$gallery .="<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
<script src='https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js'></script>
<script id='rendered-js'>
$('#lightSlider').lightSlider({
  gallery: true,
  item: 1,
  loop: true,
  slideMargin: 0,
  thumbItem: 9 });
//# sourceURL=pen.js




    </script>";


if($empty != ''){

  echo $gallery;
}
else{
    echo "No Images Found For These Query";
}

}










 
  
  
  
?>


