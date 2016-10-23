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

	seanlite_thumbnail('blog');
	
?>

<div class="post-article">

<?php

	if (is_search()) {
		 
		seanlite_get_title("search"); 
		
	} else if (is_page()) {
		
		seanlite_get_title("standard");
		 
	}
	
	do_action('seanlite_after_content'); 
	
?>
    
</div>