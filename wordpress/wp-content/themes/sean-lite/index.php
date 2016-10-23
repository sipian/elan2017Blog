<?php 

	get_header();

	do_action('seanlite_header_sidebar', 'header-sidebar-area');

	get_template_part('layouts/home-blog'); 

	do_action('seanlite_header_sidebar', 'bottom-sidebar-area' );

	get_footer(); 

?>