function eventDetail(eventID) {
	$('#eventid').val(eventID);
	$.ajax({
		type: "POST",
		url:"../php/getdetail.php",
		data:{"eventID":eventID},
		success: function(data){
					details = JSON.parse(data);
					console.log(details);
					$('#eventName').val(details['eventname']);
					tinyMCE.get('eventdescription').setContent(details['description']);
					//$('#eventdescription').val(details['description']);
					tinyMCE.get('eventRules').setContent(details['rules']);
					//$('#eventRules').val(details['rules']);
					$('#coordinator1').val(details['coordinator1']);
					$('#coordinator2').val(details['coordinator2']);
					$('#phone1').val(details['phone1']);
					$('#phone2').val(details['phone2']);
					$('#time').val(details['time']);
					$('#venue').val(details['venue']);
					$('#category').val(details['category']);
					$('#eventid').val(eventID);
				}
	
	});
}

function getEventList() {
	$.ajax({
		type:'GET',
		url:'../php/getEventList.php',
		success: function(eventObject) {
					var key = 0;
					eventList = JSON.parse(eventObject,function(id,name) {
						if(key == 0) {
							$('#eventList').append('<button type="button" class="btn btn-default margin10 col-md-2 col-sm-3 col-xs-10 " data-toggle="modal" data-target="#myModal" onClick="eventDetail('+id+')" id="event'+id+'" >'+name+'</button>');
							key = 1;
						}
						else{
							key = 0;
						}
					});
					$('#event').remove();
					$('#eventList').append('<button id="button" class="btn btn-primary col-md-2 col-sm-3 col-xs-10 margin10" data-toggle="modal" data-target="#myModal" onClick="addNewEvent()" ><i class="fa fa-plus"></i> ADD New Event</button>');
				}
	
	});

}

getEventList();

function addNewEvent() {
	$('#eventRegister').trigger("reset");

}

function logout() {
	document.location.href="../php/logout.php";	
}

function deleteEvent() {
	$.ajax ({
		type: 'POST',
		url : '../php/delete.php',
		data:{"eventID":$('#eventid').val()},
		success: function() {
					location.reload();
				}
	});
	
}