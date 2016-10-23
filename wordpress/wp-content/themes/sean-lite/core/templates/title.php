<?php 

/**
 * Wp in Progress
 * 
 * @author WPinProgress
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * It is also available at this URL: http://www.gnu.org/licenses/gpl-3.0.txt
 */

function seanlite_get_title($type) {
	
	global $post;
	
	$title = get_the_title();
	
	if (!empty($title)) {
	
		if ( $type == "blog" ) { ?>
			
        	<h2 class="title icon-title"> <a href="<?php echo get_permalink($post->ID); ?>"> <?php echo $title; ?> </a> </h2>
	
		<?php } else if ( $type == "search" ){ ?>
			
        	<h2 class="title"> <a href="<?php echo get_permalink($post->ID); ?>"> <?php echo $title; ?> </a> </h2>
	
		<?php } else if ( $type == "post" ) { ?>
 
            <h1 class="title"> <?php echo $title; ?> </h1>

		<?php } else if ( $type == "standard" ) { ?>
			
            <h1 class="title"> <?php echo $title; ?> </h1>
            
		<?php }
		
	}
	
}

?>