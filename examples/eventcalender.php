

<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8' />
<link href='../packages/core/main.css' rel='stylesheet' />
<link href='../packages/daygrid/main.css' rel='stylesheet' />
<link href='../packages/timegrid/main.css' rel='stylesheet' />
<link href='../packages/list/main.css' rel='stylesheet' />
<script src='../packages/core/main.js'></script>
<script src='../packages/interaction/main.js'></script>
<script src='../packages/daygrid/main.js'></script>
<script src='../packages/timegrid/main.js'></script>
<script src='../packages/list/main.js'></script>



<style>

  body {
    margin: 40px 10px;
    padding: 0;
    font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
    font-size: 14px;
  }

  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }

</style>
</head>
<body>
    <?php
include('dbconnect.php');



$sql = "SELECT startdate,enddate, event_title,time FROM create_event where publish_event='yes' and open_closed ='open'";

$result = mysqli_query($conn,$sql);


$startdate = date('Y-m-d', strtotime(date('Y-m-d')));



$event = "<script>
  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
      },
      defaultDate: '".$startdate."',
      navLinks: true, // can click day/week names to navigate views

      weekNumbers: true,
      weekNumbersWithinDays: true,
      weekNumberCalculation: 'ISO',

      editable: true,
      eventLimit: true, // allow 'more' link when too many events
      events: [
        ";







 
        
		              while($row = mysqli_fetch_array($result))
{
	
   
$event .= "{


          title: '".$row['event_title']."',
          start: '".$row['startdate']."T".$row['time']."',
          end: '".$row['enddate']."'
        },";
                         
			


   
}
        
		
       
     $event .= "   ]
    });

    calendar.render();
  });

</script>";
                              
echo $event;

?>

  <div id='calendar'></div>




</body>
</html>
