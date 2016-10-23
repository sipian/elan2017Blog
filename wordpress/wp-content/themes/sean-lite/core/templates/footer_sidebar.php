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

function seanlite_footer_sidebar_function() {
	
	if ( is_active_sidebar("footer-sidebar-area") ) : 

?>
    
	<section class="row widgets">
                        
		<?php dynamic_sidebar("footer-sidebar-area") ?>
                        
	</section>
        
<?php 

	endif; 
	
}

add_action( 'seanlite_footer_sidebar','seanlite_footer_sidebar_function', 10, 2 );

?>