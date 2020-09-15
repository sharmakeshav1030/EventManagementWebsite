<?php
include('dbconnect.php');

$id = $_GET['id'];


$sql = "select event_title, event_venue , event_thumbnail,event_id,startdate from create_event where publish_event='yes' and category='$id' and open_closed ='open'";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {	

$startdate = date('d', strtotime($row['startdate']));
	$date = strtotime($row['startdate']);
	
	

    $array[]   =      "<article class='eventCard__item item-2'><div class='item-2-img'><img src='images/".$row['event_thumbnail']."'><div class='date-1 bottom'><span>".$startdate."</span>".date('M', $date)."</div></div><div class='item-2-box pl'><h3 class='name'><a href='eventpage.php?id=".$row['event_id']."'>".$row['event_title']."</a></h3><p class='address'>".$row['event_venue']."</p></div></article>";
		

}

echo "<div class='container cards'><div class='eventCard grid'>";
if($array != ''){
    echo implode(",",$array);
}
else {
    echo "Sorry, No Event Found For These Category";
}



echo "</div></div>";


?>