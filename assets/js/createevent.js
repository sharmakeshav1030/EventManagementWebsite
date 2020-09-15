function addprizebox(){
      var new_chq_no = parseInt($('#total1').val())+1;
     
      $('#prizebox').append("<input name='prize[]' type='text' id='prize_"+new_chq_no+"' style='width: 300px; margin-top:15px;   margin-bottom:10px; '  class='form-control' placeholder='Prize "+new_chq_no+"'>");
      $('#total1').val(new_chq_no)
    }
    function removeprizebox(){
      var last_chq_no = $('#total1').val();
	
      if(last_chq_no>0){
		  
        $('#prize_'+last_chq_no).remove();
        $('#total1').val(last_chq_no-1);
      }
    }
	
	function addrulebox(){
      var new_chq_no = parseInt($('#total').val())+1;
      
      $('#rulebox').append("<input name='rules[]' type='text' id='rules_"+new_chq_no+"' style='width: 300px; margin-top:15px; margin-bottom:10px;' class='form-control' placeholder='Rule "+new_chq_no+"'>");
      $('#total').val(new_chq_no)
    }
    function removerulebox(){
      var last_chq_no = $('#total').val();
	  
      
	  if(last_chq_no>0){
		  
		
        $('#rules_'+last_chq_no).remove();
		
        $('#total').val(last_chq_no-1);
      }
    }
	
	
	
	function eventtype1() {
    var x = document.getElementById("EventType").value;
	var y = document.getElementById("remove1");
	
    if(x == "Choose the Event Type"){
		
      document.getElementById("basedoneventtype").innerHTML = ""
	  
    }
	else if(x == "Single Participant"){
		 
      document.getElementById("basedoneventtype").innerHTML = ""
	  
         y.style.display = "none";
	  
    }
	else if(x == "Team Event"){
		 
      document.getElementById("basedoneventtype").innerHTML = "<input class='form-control' name='min_team_size' type='text' id='min_team_size' style=' width: 300px; margin-top:15px;' placeholder='Enter Minimum Team Size' required> <input class='form-control' name='max_team_size' type='text' id='max_team_size' style='width: 300px; margin-top:15px; margin-bottom:10px;' placeholder='Enter Maximum Team Size' required>"
    }
	
	
	
}

function readURL(input) {
var y =	document.getElementById("uploadPreview");
	y.style.display = "block";
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#uploadPreview').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#uploadImage").change(function(){
        readURL(this);
    });
	