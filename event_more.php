<?php
include('dbconnect.php');




$sql = "select event_title, event_venue , event_thumbnail,event_id,startdate from create_event where publish_event='yes' and open_closed ='open'  and startdate > ".$_POST['last_event_id']." order by startdate asc Limit 3";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0)  
{
while($row = mysqli_fetch_array($result)) {	
		$startdate = date('d', strtotime($row['startdate']));
	$date = strtotime($row['startdate']);	
   
  $output= "<article class='eventCard__item item-2'>
			<div class='item-2-img'>
	<img src='images/".$row['event_thumbnail']."'>
<div class='date-1 bottom'>
	

 
	
	<span>".$startdate."</span>".date('M', $date)."
	
	</div>
	</div>
<div class='item-2-box pl'>
<h3 class='name'><a href='eventpage.php?id=".$row['event_id']."'>".$row['event_title']."</a></h3>
	<p class='address'>".$row['event_venue']."</p>
</div>
		</article>";
   
}


$eventid = $row['startdate'];

  $button = ' <button  style="margin-left:505px; margin-top:20px" type="button" name="btn_more" data-vid="<?php echo $eventid; ?>" id="btn_more">Load More</button>';


echo $output;
echo $button;
}

	 ?> 