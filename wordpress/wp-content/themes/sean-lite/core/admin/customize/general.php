<?php

if (!function_exists('seanlite_admin_init')) {

	function seanlite_admin_init() {
		
		global $wp_version;

		$file_dir = get_template_directory_uri()."/core/admin/includes/";
	
		wp_enqueue_style ( 'seanlite_style', $file_dir.'css/theme.css' ); 
		wp_enqueue_script( 'seanlite_script', $file_dir.'js/theme.js',array('jquery'),'',TRUE ); 
		wp_enqueue_style ( 'seanlite_notice', $file_dir.'css/notice.css' ); 

		wp_enqueue_script( "jquery-ui-core", array('jquery'));
		wp_enqueue_script( "jquery-ui-tabs", array('jquery'));
	
	
	}
	
	add_action('admin_init', 'seanlite_admin_init');

}

?>