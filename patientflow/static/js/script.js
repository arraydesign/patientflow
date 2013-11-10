$(document).ready(function() { 
	$("span.doctor-status-button").on("click", updateDoctorStatus);
    $("#assign-next-patient").on("click", assignNextPatient);
    // $("#room-action").on("click", roomAction);

    $('html').addClass('js-active');

    /* Grid */            
    $(document).jkey('control+g', function() {
        $('ul#grid').toggle();
    });

    /* Modals */
    $('.fb-inline').fancybox({
        autoSize: false,
        autoHeight: true,
        padding: 16,
        width: 672,
        helpers: {
            title : {
                type : 'inside'
            },
            overlay : {
                css : {
                    'background' : 'rgba(0,42,53,0.9)'
                }
            }
        }
    });
}); 

window.setInterval(autoAssign, 3000);

function autoAssign(){
    // console.log('asdfds');
}

function roomAction(event)
{
    var button = $(this);
    var form = $(this).closest("form");

    console.log(form.attr('method'));

    $.ajax({
        type: form.attr('method'),
        url: form.attr('action'),
        data: form.serialize(),
        success: function (data) {
            console.log("Success - " + data);
            button.val(data);
        },
        error: function(data) {
            console.log("Error - " + data);
        }
    });
    event.preventDefault();

    return false;
}

function updateDoctorStatus(event)
{	
	var button = $(this);
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

function assignNextPatient(event)
{
    var button = $(this);
    var form = $(this).closest("form");

    $.ajax({
        type: form.attr('method'),
        url: form.attr('action'),
        data: form.serialize(),
        success: function (data) {
            if (data == "No rooms available"){
                alert("No rooms available");
            }
    
            console.log("Success" + data);
        },
        error: function(data) {
            console.log("Error" + data);
        }
    });
    event.preventDefault();

    return false;
}