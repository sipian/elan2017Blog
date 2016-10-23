<?php

	/**
	 * Wp in Progress
	 * 
	 * @author WPinProgress
	 *
	 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
	 * It is also available at this URL: http://www.gnu.org/licenses/gpl-3.0.txt
	 */
	
	/* Template Name: Archives */

	get_header(); 
	
	if ( ( seanlite_postmeta('wip_header_sidebar') ) && ( seanlite_postmeta('wip_header_sidebar') <> "none" ) ):
	
		do_action('seanlite_header_sidebar', seanlite_postmeta('wip_header_sidebar'));
	
	endif;
	
	?>
    
    <div class="container content">
        
        <div class="row">
           
            <div class="<?php echo seanlite_template('span') . " " . seanlite_template('sidebar'); ?>">
                
                <div class="row">
            
                    <article <?php post_class(); ?> >
                    
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                   
                   		<?php seanlite_thumbnail('blog'); ?>
                        
                        <div class="post-article">
                        
                        <?php
                        
                            if (is_search()) {
                                 
                                seanlite_get_title("search"); 
                                
                            } else if (is_page()) {
                                
                                seanlite_get_title("standard");
                                 
                            }

                            the_content(); 
                            
                        	the_widget( 'WP_Widget_Recent_Posts' ); 

                        	the_widget( 'WP_Widget_Archives' ); 
                        	
							the_widget( 'WP_Widget_Categories' ); 

							if ( ( !seanlite_postmeta('wip_view_social_buttons')) || ( seanlite_postmeta('wip_view_social_buttons') == "on" ) ) :
							
								do_action('seanlite_social_buttons');
							
							endif;

						?> 

                        </div>    
                                
                        <?php wp_link_pages(array('before' => '<div class="wip-pagination">', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>') ); ?>
    
                        <?php endwhile; endif;?>
                
                    </article>
            
                    <?php comments_template(); ?>
    
                </div>
            
            </div>
    
            <?php get_sidebar(); ?>
    
        </div>
        
    </div>

    <?php

	if ( ( seanlite_postmeta('wip_bottom_sidebar') ) && ( seanlite_postmeta('wip_bottom_sidebar') <> "none" ) ):
	
		do_action('seanlite_bottom_sidebar', seanlite_postmeta('wip_bottom_sidebar'));
	
	endif;
	
	get_footer(); 
	
?>