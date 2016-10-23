<div class="container">
	
    <div class="row" id="blog" >
    
	<?php if ( ( seanlite_template('sidebar') == "left-sidebar" ) || ( seanlite_template('sidebar') == "right-sidebar" ) ) : ?>
        
        <div class="<?php echo seanlite_template('span') .' '. seanlite_template('sidebar'); ?>"> 
       
        	<div class="row"> 
        
    <?php endif; ?>

    <?php
	
		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div <?php post_class(); ?> >
    
				<?php do_action('seanlite_postformat'); ?>
        
                <div style="clear:both"></div>
            
			</div>
		
		<?php endwhile; else:  ?>

            <div <?php post_class(); ?> >
        
                <article class="article category">
                        
                    <div class="post-article">
        
                        <h2><?php _e( 'Content not found','sean-lite' ) ?></h2>           
                        
                        <p> <?php _e( 'No article found in this category.','sean-lite'); ?> </p>
        
                        <h3> <?php _e( 'What can i do?','sean-lite' ) ?> </h3>           
        
                        <p> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name') ?>"> <?php _e( 'Back to the homepage','sean-lite'); ?> </a> </p>
        
                        <p> <?php _e( 'Make a search, from the below form:','sean-lite'); ?> </p>
                        
                        <section class="contact-form">
                        
                            <form method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                                 <input type="text" value="<?php _e( 'Search', 'sean-lite' ) ?>" name="s" id="s" onblur="if (this.value == '') {this.value = '<?php _e( 'Search', 'sean-lite' ) ?>';}" onfocus="if (this.value == '<?php _e( 'Search', 'sean-lite' ) ?>') {this.value = '';}" class="input-search"/>
                                 <input type="submit" id="searchsubmit" class="button-search" value="<?php _e( 'Search', 'sean-lite' ) ?>" />
                            </form>
                            
                            <div class="clear"></div>
                            
                        </section>
    
                    </div>
         
               </article>
        
            </div>
	
		<?php endif; ?>
        
	<?php if ( ( seanlite_template('sidebar') == "left-sidebar" ) || ( seanlite_template('sidebar') == "right-sidebar" ) ) : ?>
        
        </div>
        
    </div>
        
    <?php endif; ?>

	<?php if ( seanlite_template('span') == "col-md-8" ) : ?>
        
        <section id="sidebar" class="post-container col-md-4">
            <div class="sidebar-box">
            
            
				<?php if ( is_active_sidebar('category-sidebar-area') ) { 
                
                    dynamic_sidebar('category-sidebar-area');
                
                } else { 
                    
                    the_widget( 'WP_Widget_Archives','',
                    array('before_widget' => '<div class="post-article">',
                          'after_widget'  => '</div>',
                          'before_title'  => '<h3 class="title">',
                          'after_title'   => '</h3>'
                    ));
    
                    the_widget( 'WP_Widget_Calendar',
                    array("title"=> __('Calendar','sean-lite')),
                    array('before_widget' => '<div class="post-article">',
                          'after_widget'  => '</div>',
                          'before_title'  => '<h3 class="title">',
                          'after_title'   => '</h3>'
                    ));
    
                    the_widget( 'WP_Widget_Categories','',
                    array('before_widget' => '<div class="post-article">',
                          'after_widget'  => '</div>',
                          'before_title'  => '<h3 class="title">',
                          'after_title'   => '</h3>'
                    ));
                
                 } 
                 
                 ?>
            
            </div>
        </section>
    
	<?php endif; ?>
           
    </div>

	<?php 

		if ( seanlite_setting('wip_infinitescroll_system') == "on" ) :
			
			do_action('seanlite_infinitescroll_script','seanlite_category_layout'); 
					
		endif;

		get_template_part('pagination'); 
		
	?>

</div>