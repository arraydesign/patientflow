(function() {

// IMAGE CENTRE

	$.fn.imgWidthCentre = function() {
		return this.each(function(){
		var tWide = ($(this).width())/2;
			tWide = '-' + tWide + 'px';
			$(this).css({
				"margin-left" : tWide
			});
		});
	};	
	$.fn.imgHeightCentre = function() {
		return this.each(function(){
			var tHeight = ($(this).height())/2;
			tHeight = '-' + tHeight + 'px';
			$(this).css({
				"margin-top" : tHeight
			});
		});
	};

// CAROUSEL
	
	$.fn.theCarousel = function(){
		return this.each(function(){
			$(this).wrap('<div class="the-carousel"><div class="carousel-wrap"></div></div>');
			var $wrapper = $(this).parents(".carousel-wrap"),
				 $slider = $(this).css('width','9999px'),
				 $items = $slider.find('> li.gallery-item'),
				 $single = $items.filter(':first'),
				 $singleWidth = $single.outerWidth(),
				 $totalSlides = $items.length,
				 $currentSlide = 1;
			
			$items.filter(':last').after($items.filter(':first').clone().addClass('cloned'));
			
			function gotoSlide($slide) {
				var $dir = $slide < $currentSlide ? -1 : 1,
					 $n = Math.abs($currentSlide - $slide),
					 $left = $singleWidth * $dir * $n;

				$wrapper.filter(':not(:animated)').animate({
					scrollLeft : '+=' + $left
				}, 700, function(){
					if ($slide > $totalSlides) {
						$wrapper.scrollLeft(0);
						$slide = 1;
					}
					$currentSlide = $slide;
				});
			}
			
			$(this).bind('goto', function($event, $slide){ gotoSlide($slide); });
			$(this).bind('next', function(){ gotoSlide($currentSlide + 1); });
		});
	}

})(jQuery);

// DOCUMENT READY

$(document).ready(function(){

/* GLOBAL
-------------------------------------------------------------- */
	
	$('html').addClass('js-active');

/* Grid */
	  	
	$(document).jkey('control+g', function() {
		$('ul#grid').toggle();
	});
	
/* Sidebar Height */

	var mainHeight = $('.main').height();
	var winWidth = $(window).width();
	if (winWidth > 592) { $('aside, .aside').css({'min-height': mainHeight}); }
	$(window).resize(function () {
		var mainHeight = $('.main').height();
		var winWidth = $(window).width();
		if (winWidth > 592) { $('aside, .aside').css({'min-height': mainHeight}); } else { $('aside, .aside').css({'min-height': 0}); }
	});

/* Image centre */
   
   $(".img-centre img, .img-centre-w img").imgWidthCentre();
	$(".img-centre img, .img-centre-h img").imgHeightCentre();
	
/* Figure caption */

	$("figure").append("<a href='#' class='caption'>i</a>");
   $("figure a.caption").click(function() {
		$(this).prev().toggle();
	});

/* Carousel

	$('ul.carousel').theCarousel();
	
	var $autoscroll = true;
	
	$('ul.carousel.scroll').mouseover(function(){
		$autoscroll = false;
	}).mouseout(function(){
		$autoscroll = true;
	});
	
	setInterval(function(){
		if ($autoscroll) {
			$('ul.carousel.scroll').trigger('next');	
		}	
	}, 5000); */

/* Section tabs

	var sectionDesc = $('dl.section-list dd');
	sectionDesc.hide().filter(':first').show();
	$('dl.section-list dt').filter(':first').addClass('selected');
	$('dl.section-list dt a').click(function(){
		sectionDesc.hide();
		sectionDesc.filter(this.hash).show();
		$(this).parents('dl.section-list').children('dt').removeClass('selected');
		$(this).parent().addClass('selected');
		tOffset = $(this).parents('dl.section-list').offset();
		$(window).scrollTop(tOffset.top);
		return false;
	}); */

/* Fancybox
	
	$("span.gallery-icon a").fancybox({
		openEffect 			: 'none',
    	closeEffect			: 'none',
    	maxWidth				:	900,
    	maxHeight			:	768,
    	fitToView			:	true,
    	aspectRatio			:	true,
    	closeBtn				:	true,
    	arrows				:	true,
    	helpers				:	{
			title					:	{
				type					:	'inside'
			},
			overlay				:	{
				opacity				:	0.9,
				css					:	{
					'background-color'	:	'#000000'
				}
			},
		}
	});
	
	$(".fb-iframe").fancybox({
		type					: 'iframe',
		autoSize				:	true,
		width					:	692,
		height				:	450,
		helpers				:	{
			title					:	{
				type					:	'inside'
			},
			overlay				:	{
				opacity				:	0.9,
				css					:	{
					'background-color'	:	'#000000'
				}
			},
		}
	}); */

});