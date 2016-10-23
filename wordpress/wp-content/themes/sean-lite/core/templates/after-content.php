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

function after_content_function() {

	if ( ( is_home()) || (is_category()) || (is_search()) || (is_tag()) || (is_month()) ) :
		
		if ( get_post_type() == "post") {
		
			echo '<div class="line">'; 
				
				echo '<span class="genericon genericon-time"></span>' . get_the_date(); 
				echo '<span class="genericon genericon-category"></span>'; the_category(', ');
				echo seanlite_posticon(); 
				
			echo '</div>';

		}
		
		seanlite_excerpt();

		else: 
		
		if (is_singular( 'post' )) {

			echo '<div class="line">'; 
	
				echo '<span class="genericon genericon-time"></span>' . get_the_date(); 
				echo '<span class="genericon genericon-category"></span>'; the_category(', ');
				the_tags( '<span class="genericon genericon-tag"></span>' , ', ');
				echo seanlite_posticon(); 
			
			echo '</div>';

		}
	
		the_content();

		echo '<div class="clear"></div>';

	endif; 
} 

add_action( 'seanlite_after_content', 'after_content_function', 10, 2 );

?>