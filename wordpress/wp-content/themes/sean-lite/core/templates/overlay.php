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

function seanlite_hoverlay_image($thumbnail) {
	
	global $post;
	
?>
		
    <a rel="gallery" href="<?php echo $thumbnail; ?>" class="overlay-expand overlay-link swipebox"><i class="fa fa-expand"></i></a>

<?php 

} 

function seanlite_hoverlay_video($thumbnail) {
	
	global $post;
	
	$url = array( 
		'//player.vimeo.com/video/' => 'http://vimeo.com/', 
		'http://www.youtube.com/embed/' => 'http://www.youtube.com/watch?v=' 
	);
	
	?>
		
    <a rel="video" class="overlay-expand overlay-link swipebox swipebox-video" href="<?php echo $url[seanlite_postmeta('wip_video_type')].seanlite_postmeta('wip_video_id'); ?>"><i class="fa fa-expand"></i></a>
	
<?php 

} 

function seanlite_hoverlay_gallery($thumbnail) {
	
	global $post;
	
	$wip_gallery = seanlite_postmeta( 'galleries' ); 
	$firstimage = array_keys($wip_gallery);
	unset($wip_gallery[$firstimage[0]]);
	
?>

	<a rel="gallery-<?php echo $post->ID;?>" href="<?php echo $thumbnail; ?>" class="overlay-expand overlay-link swipebox"><i class="fa fa-expand"></i></a>
            
	<?php 
			
		foreach ( $wip_gallery as $slide => $input) { 
	
		echo '<a rel="gallery-'.$post->ID.'" href="'.$input['url'].'" class="swipebox hidden"></a>';
	
	}
			
} 

?>