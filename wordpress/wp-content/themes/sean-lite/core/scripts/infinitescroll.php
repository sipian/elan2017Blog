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

function seanlite_infinitescroll_script_function($page) { 

	if ( seanlite_setting($page) == "full" ) :
	
		$container = "'body.infinitescroll #blog'";
		$item = "#blog .post-container";
	
	else :
	
		$container = "'body.infinitescroll #blog .row'";
		$item = "#blog .row .post-container";
	
	endif;
	 
	?>

	<script type="text/javascript">

		jQuery.noConflict()(function($){
					
			$(<?php echo $container; ?>).infinitescroll({
				navSelector  : ".wp-pagenavi",            
				nextSelector : ".wp-pagenavi a:first",    
				itemSelector : "<?php echo $item; ?>",
				loading: {
					img: "",
					msgText: '<div class="load-more"><i class="fa fa-circle-o-notch fa-spin"></i></div>',
				},
				
			}, 
				
			function(newElements) {
						
				var $newElems = $(newElements).css({
					opacity: 0
				});
				
							
				$newElems.animate({
					opacity: 1
				});
				
			});
				
		});
					
	</script>
	
<?php 

} 

add_action( 'seanlite_infinitescroll_script', 'seanlite_infinitescroll_script_function', 10, 2 );

?>