var interval;
var int;

$(document).ready(function() { 
    // This DOES NOT work
    $(".practitioner").on("click", updateDoctorStatus);
	// $("span.doctor-status-button").on("click", updateDoctorStatus);

    $("#assign-next-patient").on("click", assignNextPatient);
    // $("#room-action").on("click", roomAction);

    $('html').addClass('js-active');

    /* Grid */            
    $(document).jkey('control+g', function() {
        $('ul#grid').toggle();
    });

    /* Auto Assign */

    $(".checkbox").click(function(){
        if($(this).is(":checked"))
            int = window.clearInterval();
        else
            int = self.setInterval(function(){autoAssign()}, 2000);
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

function autoAssign(){
    alert("Auto running");
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
	var form = $(this);
    var hidden_field = form.find("input[name='status']")
	// var form = $(this).closest("form");

    $.ajax({
        type: form.attr('method'),
        url: form.attr('action'),
        data: form.serialize(),
        success: function (data) {
        	console.log("Success" + data);
            // form.find(".practitioner-name").r
        	// button.html(data);
        	// button.next().val(data);
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