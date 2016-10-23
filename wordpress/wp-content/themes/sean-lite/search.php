<?php 

	get_header();

	do_action('seanlite_header_sidebar', 'header-sidebar-area');

?>

	<h1 class="title headtitle"> <?php _e( '<span>Search </span> results for', 'sean-lite' ) ?> <strong> <?php echo $s; ?> </strong> </h1>

<?php

	get_template_part('layouts/search-blog'); 
			
	do_action('seanlite_header_sidebar', 'bottom-sidebar-area' );

	get_footer(); 

?>