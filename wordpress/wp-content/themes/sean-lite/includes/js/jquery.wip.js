jQuery.noConflict()(function($){

/* ===============================================
   Jpreloader
   =============================================== */

	$(document).ready(function() {

		$('body.jpreloader').jpreLoader({
			showSplash: false,
			showPercentage: true,
		});

	});

/* ===============================================
   Menu
   =============================================== */

	if ( $('nav#mobilemenu ul:first .current-menu-item').length ) { 
	
		$('nav#mobilemenu ul:first').tinyNav({
			active: 'current-menu-item',
		});

	} else {
	
		$('nav#mobilemenu ul:first').tinyNav({
			header: 'Select an item',
		});

	}
	
	$('nav#mainmenu li').hover(
		function () {
			$(this).children('ul').stop(true, true).fadeIn(100);
	 
		}, 
		function () {
			$(this).children('ul').stop(true, true).fadeOut(400);		
		}
	);

/* ===============================================
   Scroll to Top Plugin
   =============================================== */

	$(window).scroll(function() {
		
		if( $(window).scrollTop() > 400 ) {
			
			$('#back-to-top').fadeIn(500);
			
			} else {
			
			$('#back-to-top').fadeOut(500);
		}
		
	});

	$('#back-to-top').click(function(){
		$.scrollTo(0,'slow');
		return false;
	});

/* ===============================================
   Overlay code
   =============================================== */
	
	$('.overlay-image.shortcode-thumb').hover(function(){
		
		var imgwidth = $(this).children('img').width();
		var imgheight = $(this).children('img').height();
		$(this).children('.zoom').css({'width':imgwidth,'height':imgheight});	
		$(this).children('.link').css({'width':imgwidth,'height':imgheight});		
		$(this).css({'width':imgwidth+10});		
		
		$('.overlay',this).animate({ opacity : 0.6 },{queue:false});
		}, 
		function() {
		$('.overlay',this).animate({ opacity: 0.0 },{queue:false});
	
	});
	
	
	$('.overlay-image.blog-thumb').hover(function(){
		
		var imgwidth = $(this).children('img').width();
		var imgheight = $(this).children('img').height();
		$(this).children('.link').css({'width':imgwidth,'height':imgheight});		
		$(this).css({'width':imgwidth, 'height':imgheight});		
		
		$('.overlay',this).animate({ opacity : 0.4 },{queue:false});
		}, 
		function() {
		$('.overlay',this).animate({ opacity: 0.0 },{queue:false});
	
	});

	$('.gallery img').hover(function(){
		$(this).animate({ opacity: 0.50 },{queue:false});
	}, 
	function() {
		$(this).animate({ opacity: 1.00 },{queue:false});
	});
	
/* ===============================================
   Prettyphoto code
   =============================================== */

	$("a[rel^='prettyPhoto']").prettyPhoto({
	
		animationSpeed:'fast',
		slideshow:5000,
		theme:'pp_default',
		show_title:false,
		overlay_gallery: false,
		social_tools: false
		
	});
	
	$('.swipebox').swipebox();
	
});          