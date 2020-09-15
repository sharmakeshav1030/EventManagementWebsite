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
    <title>createEvent</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/styles.css">
	
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
	
	
	<style>
.switch {
  position: relative;
  display: inline-block;
  width: 43px;
  height: 18px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 10px;
  width: 10px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}



</style>
	
	
	
	
</head>

<body style="background-image: url(&quot;bg4.jpeg&quot;);height: auto;">


 
  <div style="background-image: url(&quot;assets/img/bg3.jpeg&quot;);height: 1200px;width: 100%;">
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background-color: rgba(255,255,255,0);color: rgb(255,255,255);">
            <div class="container"><a class="navbar-brand" href="index.php" style="color: rgb(255,255,255);">MMDU Event</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="dashboard.php" style="color: rgb(255,255,255);">Dashboard</a></li>
                        
                        <li class="nav-item" role="presentation"><a class="nav-link" href="galleryupload.php" style="color: rgb(255,255,255);">Upload</a></li>
                    </ul></div><span class="actions"> <a class="login" href="log_out.php" style="color: rgb(255,255,255);margin-right: 20px;font-size: 20px;">Logout</a></span>
    </div>
    </nav>
    <div class="card shadow-lg" style="width: 63%;margin-right: 16%;margin-left: 20%;margin-top: 7%;background-color: rgb(228,228,228);">
        <div class="card-body shadow-lg" style="height: 100%;">
            <form action="createeventsave.php" method="post" enctype="multipart/form-data" >
                <h2 class="text-center">Create&nbsp;</h2>
                <div class="form-row">
                    <div class="col">
                        <div class="form-group"><input class="form-control" type="text" name="eventtitle" placeholder="Event Name" style="width: 60%;" required></div>
                        <div class="form-group"><textarea class="form-control" name="desc" placeholder="Description" rows="14" style="width: 90%;" required></textarea></div>
						<div style="margin-bottom:3%;">
						<select id="category" onchange="category1()" name="category" required>
<option value="Choose the Category">Choose the Category</option>
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
  <option value="literary">Others</option>
  
  
</select>


<select id="EventType" onchange="eventtype1()" name="eventtype" required>
<option value="Choose the Event Type">Choose the Event Type</option>
  <option value="Single Participant">Single Participant</option>
  <option value="Team Event">Team Event</option>
  
  
</select>
</div>


<div id="basedoneventtype"></div>
					
						
						
						
						
                       <div class="form-group" style="width: 70%;">
						<button class="btn btn-primary float-right" type="button" onclick="removerulebox()" style="margin-right:-27px;">-</button>
						
						
						<button class="btn btn-primary float-right" type="button" onclick="addrulebox()" >+</button>
						
						
						<input class="form-control" type="text" name="rules[]" placeholder="Rule 1" style="width: 80%;" required></div>
                         <div id="rulebox"></div>
                        <input type="hidden" value="1" id="total">
                       
                        <div class="form-group">
                           
                               
                                    <h4 class="card-title">Calender</h4>
									<input type="text" class="form-control" style="width:55%;" name="eventdate"  >
                                
                            
                        </div>
                        <div class="form-group"><input class="form-control" type="text" name="venue" placeholder="Venue" style="width: 300px;" required></div>
                        <div class="form-group"><Label>Time</Label><br><input class="form-control" type="time" name="time" value="00:00:00" style="width: 55%;" required>
                        
                       </div>
						
						
						<div class="form-group">
						<label>Paid Event</label>
						<label class="switch">
							<input type="checkbox" onclick="javascript:ifCheck();"id="yesCheck">
							<span class="slider"></span>
						</label>
						<div id= "ifYes" style="visibility:Hidden">
						<label>Registration Amount</label><br><input class="form-control" type="number" name="price" placeholder="Event Price(₹500)" style="width: 55%;" value="0" required>
                        <p style='font-size:12px;'>Don't need to enter the symbol or rupee</p>
                        </div>
						</div>
                        <script>
							function ifCheck() {
								if (document.getElementById('yesCheck').checked) {
								document.getElementById('ifYes').style.visibility = 'visible';
							}
								else document.getElementById('ifYes').style.visibility = 'hidden';

							}
						</script>
                       
                        
                        <div class="form-group"><input class="form-control" type="text" name="search location" placeholder="Search for location" style="width: 55%;">
                            <div class="card text-center" style="width: 55%;height: 250px;margin-top: 3%;">
                                <div class="card-body">
                                    <h4 class="card-title">Map</h4>
									
                                </div>
                            </div>
                        </div>
                        <div class="form-group" style="width: 110%;"><input class="float-right" type="file" name="thumbnail" id="uploadImage" required>
                            <h4 style="width: 50%;">Add Thumbnail</h4>
                            <br>
                            <img src="" id="uploadPreview" style="width: 100px; height: 100px; display:none">
                        </div>
                        <div class="form-group"><input class="form-control" type="text" name="sponsors" placeholder="Sponsors*" style="width: 65%;"></div>
                        <div class="form-group" style="width: 80%;">
						
						<button class="btn btn-primary float-right" type="button" onclick="removeprizebox()" style="margin-right:-27px;">-</button>
						
						<button class="btn btn-primary float-right" type="button" onclick="addprizebox()">+</button>
						
						
						<input class="form-control" type="text" name="prize[]" placeholder="Prizes 1" style="width: 81%;" ></div>
						<div id="prizebox"></div>
                        <input type="hidden" value="1" id="total1">
                        <div class="form-group"><button class="btn btn-primary shadow-lg" type="submit" name="submit"style="margin: 10%;margin-left: 6%;">Save</button>
						<button class="btn btn-primary shadow-lg" type="submit" style="margin: 10%;background-color: rgb(232,44,32);"><a href="dashboard.php">Cancel</a></button></div>
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
                            <div class="col" style="height: 20%;"><img src="assets/img/fether.png" style="width: 340px;height: 420px;margin-top: 90px;"></div>
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
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places&callback=initAutocomplete"
         async defer></script>
	
	

	
	
	<div style="text-align: right;position: fixed;z-index:9999999;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height: 0;display:block !important;"><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&utm_campaign=000_logo&utm_medium=website&utm_content=footer_img"><img src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png" alt="www.000webhost.com"></a></div><script>function getCookie(t){for(var e=t+"=",n=decodeURIComponent(document.cookie).split(";"),o=0;o<n.length;o++){for(var a=n[o];" "==a.charAt(0);)a=a.substring(1);if(0==a.indexOf(e))return a.substring(e.length,a.length)}return""}getCookie("hostinger")&&(document.cookie="hostinger=;expires=Thu, 01 Jan 1970 00:00:01 GMT;",location.reload());var wordpressAdminBody=document.getElementsByClassName("wp-admin")[0],notification=document.getElementsByClassName("notice notice-success is-dismissible"),hostingerLogo=document.getElementsByClassName("hlogo"),mainContent=document.getElementsByClassName("notice_content")[0],wpSidebar=document.getElementById("adminmenuwrap"),wpTopBarRight=document.getElementById("wp-admin-bar-top-secondary");if(null!=wordpressAdminBody&&notification.length>0&&null!=mainContent){var googleFont=document.createElement("link");googleFontHref=document.createAttribute("href"),googleFontRel=document.createAttribute("rel"),googleFontHref.value="https://fonts.googleapis.com/css?family=Roboto:300,400,600",googleFontRel.value="stylesheet",googleFont.setAttributeNode(googleFontHref),googleFont.setAttributeNode(googleFontRel);var css="@media only screen and (max-width: 576px) {#main_content {max-width: 320px !important;} #main_content h1 {font-size: 30px !important;} #main_content h2 {font-size: 40px !important; margin: 20px 0 !important;} #main_content p {font-size: 14px !important;} #main_content .content-wrapper {text-align: center !important;}} @media only screen and (max-width: 781px) {#main_content {margin: auto; justify-content: center; max-width: 445px;} .upgrade-btn-sidebar {display: none;} #wp-toolbar .top-bar-upgrade-btn {width: 52px; height: 46px !important; padding: 0 !important;} .top-bar-upgrade-btn__text {display: none;} .dashicons-star-filled.top-bar-upgrade-btn__icon::before {font-size: 28px; margin-top: 10px; width: 28px; height: 28px;}} @media only screen and (max-width: 1325px) {.web-hosting-90-off-image-wrapper {position: absolute; max-width: 95% !important;} .notice_content {justify-content: center;} .web-hosting-90-off-image {opacity: 0.3;}} @media only screen and (min-width: 769px) {.notice_content {justify-content: space-between;} #main_content {margin-left: 5%; max-width: 445px;} .web-hosting-90-off-image-wrapper {position: absolute; right: 0; display: flex; padding: 0 5%}} @media only screen and (max-width: 960px) {.upgrade-btn-sidebar {border-radius: 0 !important; padding: 10px 0 !important; margin: 0 !important;} .upgrade-btn-sidebar__icon {display: block !important; margin: auto;} .upgrade-btn-sidebar__text {display: none;}}  .web-hosting-90-off-image {max-width: 90%; margin-top: 20px;} .content-wrapper {z-index: 5} .notice_content {display: flex; align-items: center;} * {-webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;} .upgrade_button_red_sale{box-shadow: 0 2px 12px -6px #cc292f; max-width: 350px; border: 0; border-radius: 3px; background-color: #6747c7 !important; padding: 15px 55px !important;  margin-bottom: 48px; font-size: 14px; font-weight: 800; color: #ffffff;} .upgrade_button_red_sale:hover{color: #ffffff !important; background: rgba(103,71,199, 0.9) !important;} .upgrade-btn-sidebar {text-align:center;background-color:#ff4546;max-width: 350px;border-radius: 3px;border: 0;padding: 12px; margin: 20px 10px;display: block; font-size: 12px;color: #ffffff;font-weight: 700;text-decoration: none;} .upgrade-btn-sidebar:hover, .upgrade-btn-sidebar:focus, .upgrade-btn-sidebar:active {background-color: rgba(255,69,70, 0.9); color: #ffffff;} .upgrade-btn-sidebar__icon {display: none;} .top-bar-upgrade-btn {height: 100% !important; display: inline-block !important; padding: 0 10px !important; color: #ffffff; cursor: pointer;} .top-bar-upgrade-btn:hover, .top-bar-upgrade-btn:active, .top-bar-upgrade-btn:focus {background-color: #ff4546 !important; color: #ffffff !important;} .top-bar-upgrade-btn__icon {margin-right: 6px;}",style=document.createElement("style"),sheet=window.document.styleSheets[0];style.styleSheet?style.styleSheet.cssText=css:style.appendChild(document.createTextNode(css)),document.getElementsByTagName("head")[0].appendChild(style),document.getElementsByTagName("head")[0].appendChild(googleFont);var button=document.getElementsByClassName("upgrade_button_red")[0],link=button.parentElement;link.setAttribute("href","https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&utm_medium=panel&utm_campaign=000-wp"),link.innerHTML='<button class="upgrade_button_red_sale">Upgrade Now</button>',(notification=notification[0]).setAttribute("style","background-color: #f8f8f8; border-left-color: #6747c7 !important;"),notification.className="notice notice-error is-dismissible";var mainContentHolder=document.getElementById("main_content");mainContentHolder.setAttribute("style","padding: 0;"),hostingerLogo[0].remove();var h1Tag=notification.getElementsByTagName("H1")[0];h1Tag.className="000-h1",h1Tag.innerHTML="Limited Time Offer",h1Tag.setAttribute("style","color: #32454c;  margin-top: 48px; font-size: 48px; font-weight: 700;");var h2Tag=document.createElement("H2");h2Tag.innerHTML="From $0.79/month",h2Tag.setAttribute("style","color: #32454c; margin: 20px 0 45px 0; font-size: 48px; font-weight: 700;"),h1Tag.parentNode.insertBefore(h2Tag,h1Tag.nextSibling);var paragraph=notification.getElementsByTagName("p")[0];paragraph.innerHTML="Don’t miss the opportunity to enjoy up to <strong>4x WordPress Speed, Free SSL and all premium features</strong> available for a fraction of the price!",paragraph.setAttribute("style",'font-family: "Roboto", sans-serif; font-size: 18px; font-weight: 300; color: #6f7c81; margin-bottom: 20px;');var list=notification.getElementsByTagName("UL")[0];list.remove();var org_html=mainContent.innerHTML,new_html='<div class="content-wrapper">'+mainContent.innerHTML+'</div><div class="web-hosting-90-off-image-wrapper"><img class="web-hosting-90-off-image" src="https://cdn.000webhost.com/000webhost/promotions/wp-inject-default-img.png"></div>';mainContent.innerHTML=new_html;var saleImage=mainContent.getElementsByClassName("web-hosting-90-off-image")[0];wpSidebar.insertAdjacentHTML("beforeend",'<a href="https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&amp;utm_medium=panel&amp;utm_campaign=000-wp-sidebar" target="_blank" class="upgrade-btn-sidebar"><span class="dashicons dashicons-star-filled upgrade-btn-sidebar__icon"></span><span class="upgrade-btn-sidebar__text">Upgrade</span></a>'),wpTopBarRight.insertAdjacentHTML("beforebegin",'<a class="top-bar-upgrade-btn" href="https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&amp;utm_medium=panel&amp;utm_campaign=000-wp-top-bar" target="_blank"><span class="ab-icon dashicons-before dashicons-star-filled top-bar-upgrade-btn__icon"></span><span class="top-bar-upgrade-btn__text">Go Premium</span></a>')}</script><script type="text/javascript" src="https://a.opmnstr.com/app/js/api.min.js" data-campaign="f6brbmuxflyqoriatchv" data-user="71036" async></script></body>
	
</body>

</html>
