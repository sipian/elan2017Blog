<?php 

	get_header();

	do_action('seanlite_header_sidebar', 'header-sidebar-area');
	
	if (is_tag()) { ?>

		<h1 class="title headtitle"> <?php _e( 'Tag','sean-lite'); ?> : <?php echo get_query_var('tag');  ?> </h1>
				
	<?php } else if (is_category()) { ?>
                
		<h1 class="title headtitle"> <?php _e( 'Category','sean-lite'); ?> : <?php single_cat_title(); ?> </h1>

	<?php } else if (is_month()) { ?>

		<h1 class="title headtitle"> <?php _e( 'Archive for','sean-lite'); ?> : <?php the_time('F, Y'); ?> </h1>

	<?php } 
	
	get_template_part('layouts/archive-blog'); 

	do_action('seanlite_header_sidebar', 'bottom-sidebar-area' );

	get_footer(); 

?>