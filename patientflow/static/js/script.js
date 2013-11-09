$(document).ready(function() { 
	$("span.doctor-status-button").on("click", updateDoctorStatus);
}); 

/*
	Right sidebar on dashboard show
*/
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
        	button.html(data);
        },
        error: function(data) {
        	console.log(data);
        }
    });
    event.preventDefault();

    return false;
}