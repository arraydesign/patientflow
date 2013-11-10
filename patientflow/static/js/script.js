$(document).ready(function() { 
	$("span.doctor-status-button").on("click", updateDoctorStatus);
}); 

function updateDoctorStatus(event)
{	
	var button = $(this);
	console.log(button.attr("class"));
	var form = $(this).closest("form");

    $.ajax({
        type: form.attr('method'),
        url: form.attr('action'),
        data: form.serialize(),
        success: function (data) {
        	console.log("Success" + data);
        	button.html(data);
        	button.next().val(data);
        },
        error: function(data) {
        	console.log("Error" + data);
        }
    });
    event.preventDefault();

    return false;
}