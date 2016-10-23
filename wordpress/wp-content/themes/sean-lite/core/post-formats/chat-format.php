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

	if (is_single()) :
		 
		seanlite_get_title("post"); 
		
	else :

		seanlite_get_title("blog"); 
		 
	endif;

	do_action('seanlite_after_content'); 
	
?>

</div>