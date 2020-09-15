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
    <title>Edit Event</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/styles.css">
	
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
	
	
	
	<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
      }

      #infowindow-content .title {
        font-weight: bold;
      }

      #infowindow-content {
        display: none;
      }

      #map #infowindow-content {
        display: inline;
      }

      .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        font-family: Roboto;
      }

      #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
      }

      .pac-controls {
        display: inline-block;
        padding: 5px 11px;
      }

      .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
      }
      #target {
        width: 345px;
      }
	  
	  
	  
	 
    </style>
	
	
	
</head>

<body style="background-image: url(&quot;bg4.jpeg&quot;);height: auto;">


 
         
 
    <div style="background-image: url(&quot;assets/img/bg3.jpeg&quot;);height: 1200px;width: 100%;">
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background-color: rgba(255,255,255,0);color: rgb(255,255,255);">
            <div class="container"><a class="navbar-brand" href="index.php" style="color: rgb(255,255,255);">Company Name</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="dashboard.php" style="color: rgb(255,255,255);">Dashboard</a></li>
                        
                        
                    </ul><span class="navbar-text actions"> <a class="login" href="#" style="color: rgb(255,255,255);margin-right: 20px;font-size: 20px;">Club/ Organizer Name</a></span></div><span class="actions"> <a class="login" href="log_out.php" style="color: rgb(255,255,255);margin-right: 20px;font-size: 20px;">Logout</a></span>
    </div>
    </nav>
    <div class="card shadow-lg" style="width: 950px;margin-right: 250px;margin-left: 300px;margin-top: 100px;height: 1600px;background-color: rgb(228,228,228);">
        <div class="card-body shadow-lg" style="height: 1500px;">
		<?php
		$id = $_GET['id'];
    echo        "<form action='edit_event.php?id=".$id."' method='post' enctype='multipart/form-data'>"
			
			?>
			
                <h2 class="text-center">Edit Event&nbsp;</h2>
                <div class="form-row">
                    <div class="col">
<?php
include('dbconnect.php');

$id = $_GET['id'];


$sql = "select event_title, event_desc, category, eventtype, max_team, min_team from create_event where event_id='$id'";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {
 echo "<div class='form-group'>";
 echo "<input class='form-control' type='text' name='eventtitle' placeholder='Event Name' style='width: 300px;' value='".$row['event_title']."'></div>";

             echo          " <div class='form-group'>";
				echo		"<textarea class='form-control' name='desc' placeholder='Description' rows='14' style='width: 300px;'>";
				echo		$row['event_desc'];
						
						
					echo	"</textarea></div>";
						
					echo	"<div style='margin-bottom:15px;'>";
						
						echo "<select id='category' onchange='category1()' name='category'>";
						
   echo "<option value='".$row['category']."'>".$row['category']."</option>";
  echo "<option value='Sports'>Sports</option>";
 echo  "<option value='fashion'>fashion</option>";
echo "<option value='music'>Music</option>";
echo  "<option value='dance'>Dance</option>";
echo "<option value='buisness'>Buisness</option>";
echo "<option value='fine arts'>Fine Arts</option>";
 echo "<option value='theatre'>Theatre</option>";
echo "<option value='health'>Health</option>";
 echo "<option value='hospitality'>Hospitality</option>";
 echo "<option value='law'>Law</option>";
 echo "<option value='technical'>Technical</option>";
 echo "<option value='literary'>Literary</option>";
  
  
echo "</select>";






echo      "<select id='EventType' onchange='eventtype1()' name='eventtype'>";
if($row['eventtype'] == 'Team Event'){
	echo       "<option value='".$row['eventtype']."'>".$row['eventtype']."</option>";
	  echo    "<option value='Single Participant'>Single Participant</option>";

  
}
else {
	"<option value='Single Participant'>Single Participant</option>";
	echo "<option value='Single Participant'>Single Participant</option>";
		echo       "<option value='Team Event'>Team Event</option>";
}
echo "</select>";



echo "</div>";


echo "<div id='basedoneventtype'></div>";

if($row['eventtype'] == 'Team Event'){
	
echo	"<div id='remove1'><input class='form-control' name='min_team_size' type='text' id='min_team_size' style=' width: 300px; margin-top:15px;' placeholder='Enter Minimum Team Size' value='".$row['min_team']."' > <input class='form-control' name='max_team_size' type='text' id='max_team_size1' style='width: 300px; margin-top:15px; margin-bottom:10px;' placeholder='Enter Maximum Team Size' value='".$row['max_team']."'></div>";
}
	}
?>				
					
		<?php
include('dbconnect.php');

$id = $_GET['id'];


$sql = "select event_rules from create_event where event_id='$id'";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {			
						
						
						
      echo       "<div class='form-group' style='width: 350px;'>";
						
						
	echo	"<button class='btn btn-primary float-right' type='button' onclick='removerulebox()' style='margin-right:-27px;'>-</button>";
						
						
			echo			"<button class='btn btn-primary float-right' type='button' onclick='addrulebox()' >+</button>";
			
			$rules= $row['event_rules'];
			
}
$t=explode (" , ", $rules);

$length = count($t);
for ($i = 0; $i < $length; $i++) {
 
  	echo "<input class='form-control' type='text' name='rules[]' placeholder='Rule ".$i."' id='rules_".$i."' style='width: 300px;' value='".$t[$i]."'>";
			 
			
}
echo  "<input type='hidden' value='".$i."' id='total'>";



						
			
		?>				
						
						</div>
                        <div id="rulebox"></div>
                     
						



                       
                        <div class="form-group">
                           
                               
                                    <h4 class="card-title">Calender</h4>
								<?php
include('dbconnect.php');

$id = $_GET['id'];


$sql = "select startdate,enddate,time,event_price, event_venue from create_event where event_id='$id'";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {	
									
						echo "<input type='text' class='form-control' style='width:300px;' name='eventdate' value='".$row['startdate']."-".$row['enddate']."' >";

                                
                     		     
                    echo    "</div>";
                    echo    "<div class='form-group'>";
					echo	"<input class='form-control' type='text' name='venue' placeholder='Venue' style='width: 300px;' value='".$row['event_venue']."'>";
					
	echo	"<div class='form-group'><input class='form-control' type='time' name='time' value='".$row['time']."' style='width: 300px;' required>";
	
	
	

						
						if($row['event_price'] >0){
			$price =			"  <div class='form-group'>
						<label>Paid Event</label>
						<label class='switch'>
							<input type='checkbox' onclick='javascript:ifCheck();'id='yesCheck' checked>
							<span class='slider'></span>
						</label>
			
			
			<div id= 'ifYes' style='visibility:visible'>";
						}
						else{
					$price = "<div class='form-group'>
						<label>Paid Event</label>
						<label class='switch'>
							<input type='checkbox' onclick='javascript:ifCheck();'id='yesCheck'>
							<span class='slider'></span>
						</label>
					
					
					
					<div id= 'ifYes' style='visibility:hidden'>";
						}
						
						
						
		$price .=				"<label>Registration Amount</label><br><input class='form-control' type='number' name='price' placeholder='Event Price(₹500)' style='width: 300px;' value='".$row['event_price']."' id='pricevalue' required>
                        <p style='font-size:12px;'>Don't need to enter the symbol or rupee</p>
                        </div>
						</div>
                        <script>
						function ifCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.visibility = 'visible';
    }
    else document.getElementById('ifYes').style.visibility = 'hidden';
    document.getElementById('pricevalue').setAttribute('value', '0');

}
</script>";
         
         
         echo $price;
         
     
                        
                  echo      "</div>";
					
					
					
						}
?>  	

			
						</div>
                        <div class="form-group">
						<input class="form-control" type="text" name="search location" placeholder="Search for location" style="width: 300px;">
                            <div class="card text-center" style="width: 300px;height: 250px;margin-top: 20px;">
                                <div class="card-body">
                                    <input id="pac-input" class="controls" type="text" placeholder="Search Box">
    <div id="map"></div>
									
                                </div>
                            </div>
                        </div>
						
						<?php
include('dbconnect.php');

$id = $_GET['id'];


$sql = "select event_thumbnail, event_sponsors,event_prizes from create_event where event_id='$id'";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)) {	
						
               echo         "<div class='form-group' style='width: 550px;'>";
				echo		"<input class='float-right' type='file' name='thumbnail' id='uploadImage' >";
                 echo          " <h4 style='width: 200px;'>Add Thumbnail</h4>";
						echo	"<br>";
					echo		"<img src='images/".$row['event_thumbnail']."' id='uploadPreview' style='width: 100px; height: 100px;'>";
                 echo       "</div>";
  echo  "<div class='form-group'><input class='form-control' type='text' name='sponsors' placeholder='Sponsors' value='".$row['event_sponsors']."' style='width: 300px;'>";
	echo	"</div>";
                   echo     "<div class='form-group' style='width: 350px;'>";
						
 echo   "<button class='btn btn-primary float-right' type='button' onclick='removeprizebox()' style='margin-right:-27px;'>-</button>";
						
			echo			"<button class='btn btn-primary float-right' type='button' onclick='addprizebox()'>+</button>";
						
$prizes= $row['event_prizes'];
			
}
$t=preg_split ("/\,/", $prizes);

$length = count($t);
for ($i = 0; $i < $length; $i++) {
						
						
echo	"<input class='form-control' type='text' name='prize[]' placeholder='Prizes ".$i."' id='prizes_".$i."' style='width: 300px;' value='".$t[$i]."'>";
				echo		"</div>";
				
}
	echo	"<input type='hidden' value='".$i."' id='total1'>";
						
						?>
						<div id="prizebox"></div>
                        
                        <div class="form-group"><button class="btn btn-primary shadow-lg" type="submit" name="submit"style="margin: 50px;margin-left: 100px;">Save</button>
                        <button class="btn btn-primary shadow-lg" type="submit" style="margin: 50px;background-color: rgb(232,44,32);"><a href="dashboard.php">Cancel</a></button></div>
                    </div>
                    <div class="col">
                        <div class="form-row">
                            <div class="col"><img class="border rounded shadow-lg" data-aos="zoom-in" data-aos-duration="900" src="assets/img/brush.jpeg" style="width: 300px;height: 300px;margin: 10px;"></div>
                        </div>
                        <div class="form-row">
                            <div class="col"><img class="border rounded shadow-lg" data-aos="zoom-in" data-aos-duration="900" data-aos-delay="500" src="assets/img/pencil.jpeg" style="width: 300px;height: 300px;margin: 10px;"></div>
                        </div>
                        <div class="form-row">
                            <div class="col"><img class="border rounded shadow-lg" data-aos="zoom-in" data-aos-duration="900" src="assets/img/pencil2.jpeg" style="width: 300px;height: 300px;margin: 10px;"></div>
                        </div>
                        <div class="form-row">
                            <div class="col" style="height: 500px;"><img src="assets/img/fether.png" style="width: 340px;height: 420px;margin-top: 90px;"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="assets/js/createevent.js"></script>
	
	
	
	<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

	
	<script>
$(function() {
  $('input[name="eventdate"]').daterangepicker({
    opens: 'left'
  }, function(start, end, label) {
    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
  });
});
</script>
	
	
	
	<script>
      // This example adds a search box to a map, using the Google Place Autocomplete
      // feature. People can enter geographical searches. The search box will return a
      // pick list containing a mix of places and predicted search terms.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -33.8688, lng: 151.2195},
          zoom: 13,
          mapTypeId: 'roadmap'
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=ykhi22fku3bdm7b3zce3sk9n6ipfuyxs&libraries=places&callback=initAutocomplete"
         async defer></script>
	
	
	
	
	
	
	
</body>

</html>
