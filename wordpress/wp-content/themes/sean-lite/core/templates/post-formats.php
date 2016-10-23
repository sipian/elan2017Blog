<?php

/**
 * Wp in Progress
 * 
 * @package Wordpress
 * @author WPinProgress
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * It is also available at this URL: http://www.gnu.org/licenses/gpl-3.0.txt
 */

function seanlite_post_formats_function() {
	
	if ( get_post_type( get_the_ID()) == "page" ) {
		
		$postformats = "page";
	
	} 
	
	else if ( !get_post_format() ) {
		
		$postformats = "standard";
	
	} 
					
	else {
		
		$postformats = get_post_format();
	
	}
					
	get_template_part( 'core/post-formats/'.$postformats.'-format' );

}

add_action( 'seanlite_postformat','seanlite_post_formats_function', 10, 2 );

?>