var keyword_field = $('#keyword');

$(document).ready(function() {

	$('html').addClass('js-active');

/* Grid */
	  	
	$(document).jkey('control+g', function() {
		$('ul#grid').toggle();
	});

/* Other Shit

	$(".full-track").colorbox({
		inline: true, 
		width: "50%",
		height: "100%",
		scrolling: true
    });

	$(".popup-400").colorbox({
    	width: "400px",
		inline: true, 
		scrolling: true
    });

    $(".popup-700").colorbox({
    	width: "700px",
		inline: true, 
		scrolling: true
    }); */

    $(".dropdown-menu li a").click(function(){
      $(".btn:first-child").text($(this).text());
      $(".btn:first-child").val($(this).text());
   	});

    /*
		Right sidebar functionality
    */

    // Disable the submitting of the form within the right sidebar
    $('#right-sidebar form').on("submit", false);

    // Clicking on any list item will show the right sidebar
    $('.list-items li a').on("click", rightSidebarShow);
    
    // Clicking on either Save, Cancel, or Delete will hide the right sidebar
    $('#right-sidebar div.buttons input').on("click", rightSidebarHide);

    $("#keyword-close").on("click", hideKeywordContainer);
}); 

/*
	Dynamically call function
*/
function mainfunc (func)
{
    this[func].apply(this, Array.prototype.slice.call(arguments, 1));
}

/*
	Right sidebar on dashboard show
*/
function rightSidebarShow(event)
{
	$("#right-sidebar").animate({
		'right': '0'
	});	
}

/*
	Right sidebar on dashboard hide
*/
function rightSidebarHide(event)
{
	$("#right-sidebar").animate({
		'right': '-270'
	});
}

var keyWords = {colour: 'showColourPicker', colour: 'showColourPicker', space: 'showSpacePicker', spacing: 'showSpacePicker' };

var getLastWord = (function() {
    re = /\w+$/;
    return function (s){
      var lastWord = s.match(re);
      return lastWord? lastWord[0] : '';
    }
}());

function showHelp(event, element) {	
	var lastWord = getLastWord(element.value);

	if (keyWords.hasOwnProperty(lastWord))
	{
		mainfunc(keyWords[lastWord], event);
	}
	else 
	{
		hideKeywordContainer(event);
	}

}

/* Show Keyword Container */
function showKeywordContainer(e)
{
	e.preventDefault();

	$(".keyword-helper-content").hide();
	$("#keyword-helper-container").slideDown();
}

/* Hide Keyword Container */
function hideKeywordContainer(e)
{
	e.preventDefault();
	$("#keyword-helper-container").slideUp();
	$(".keyword-helper-content").slideUp();
	keyword_field.prop('disabled', false);
}

/* Show Colour Picker */
function showColourPicker(e)
{
	showKeywordContainer(e);
	$('#colour-picker').show();
	$('#colorpicker1').farbtastic({ callback: '#color2', width: 150 });
}

/* Show Space Picker */
function showSpacePicker(e)
{
	showKeywordContainer(e);
	$('#space-picker').show();
}