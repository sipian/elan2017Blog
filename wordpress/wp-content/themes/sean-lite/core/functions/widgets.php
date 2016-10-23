<?php

if ( ! function_exists( 'seanlite_add_widgets' ) ) {

	function seanlite_add_widgets() {
	
		register_sidebar(array(
		
			'name' => __('Sidebar','sean-lite'),
			'id'   => 'side-sidebar-area',
			'description'   => __('This sidebar will be shown at the side of content.','sean-lite'),
			'before_widget' => '<div id="%1$s" class="post-article %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="title">',
			'after_title'   => '</h3>'
		
		));
	
		register_sidebar(array(
		
			'name' => __('Home Sidebar','sean-lite'),
			'id'   => 'home-sidebar-area',
			'description'   => __('This sidebar will be shown at the side of homepage.','sean-lite'),
			'before_widget' => '<div id="%1$s" class="post-article %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="title">',
			'after_title'   => '</h3>'
		
		));
	
		register_sidebar(array(

			'name' => __('Category Sidebar','sean-lite'),
			'id'   => 'category-sidebar-area',
			'description'   => __('This sidebar will be shown at the side of archive page.','sean-lite'),
			'before_widget' => '<div id="%1$s" class="post-article %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="title">',
			'after_title'   => '</h3>'
		
		));
	
		register_sidebar(array(
		
			'name' => __('Search Sidebar','sean-lite'),
			'id'   => 'search-sidebar-area',
			'description'   => __('This sidebar will be shown at the side of search page.','sean-lite'),
			'before_widget' => '<div id="%1$s" class="post-article %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="title">',
			'after_title'   => '</h3>'
		
		));
	
		register_sidebar(array(

			'name' => __('Header Sidebar','sean-lite'),
			'id'   => 'header-sidebar-area',
			'description'   => __('This sidebar will be shown before the content.','sean-lite'),
			'before_widget' => '<div id="%1$s" class="post-container %2$s"><div class="post-article">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h3 class="title">',
			'after_title'   => '</h3>'
		
		));
	
		register_sidebar(array(
			
			'name' => __('Bottom Sidebar','sean-lite'),
			'id'   => 'bottom-sidebar-area',
			'description'   => __('This sidebar will be shown after the content.','sean-lite'),
			'before_widget' => '<div id="%1$s" class="post-container %2$s"><div class="post-article">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h3 class="title">',
			'after_title'   => '</h3>'
		
		));
	
		register_sidebar(array(
		
			'name' => __('Footer Sidebar','sean-lite'),
			'id'   => 'footer-sidebar-area',
			'description'   => __('This sidebar will be shown at the bottom of page.','sean-lite'),
			'before_widget' => '<div id="%1$s" class="col-md-4 widget-box %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="title">',
			'after_title'   => '</h4>'
		
		));
	
	}
	
	add_action( 'widgets_init', 'seanlite_add_widgets' );

}

?>