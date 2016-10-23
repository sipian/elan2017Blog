( function( $ ) {

	$('.preview-notice').append('<a class="getpremium" target="_blank" href="' + seanlite_details.url + '">' + seanlite_details.label + '</a>'); 
	$('.preview-notice').on("click",function(a){a.stopPropagation()});

} )( jQuery );   