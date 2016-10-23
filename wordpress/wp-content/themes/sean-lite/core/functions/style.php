<?php 

function seanlite_css_custom() { 

	echo '<style type="text/css">';

/* =================== BEGIN PAGE WIDTH =================== */

	if (seanlite_setting('wip_screen1')) 
		echo "@media (min-width:768px){.container{width:".esc_html(seanlite_setting('wip_screen1'))."px}}"; 

	if (seanlite_setting('wip_screen2')) 
		echo "@media (min-width:992px){.container{width:".esc_html(seanlite_setting('wip_screen2'))."px}}"; 

	if (seanlite_setting('wip_screen3')) 
		echo "@media (min-width:1200px){.container{width:".esc_html(seanlite_setting('wip_screen3'))."px}}"; 

/* =================== END LOGO STYLE =================== */

/* =================== BODY STYLE =================== */

	if ( (seanlite_setting('wip_full_image_background')) == "on" )
		echo "body {  -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;}"; 

/* =================== END BODY STYLE =================== */

/* =================== BEGIN LOGO STYLE =================== */

	$logostyle = '';

	/* Logo Font Size */
	if (seanlite_setting('wip_logo_font_size')) 
		$logostyle .= "font-size:".esc_html(seanlite_setting('wip_logo_font_size')).";"; 
	
	if ($logostyle)
		echo '#logo a { '.$logostyle.' } ';

/* =================== END LOGO STYLE =================== */

/* =================== BEGIN NAV STYLE =================== */

	$navstyle = '';

	/* Nav  Font Size */
	if (seanlite_setting('wip_menu_font_size')) 
		$navstyle .= "font-size:".esc_html(seanlite_setting('wip_menu_font_size')).";"; 
	
	if ($navstyle)
		echo 'nav#mainmenu ul li a, nav#mainmenu ul ul li a { '.$navstyle.' } ';
		
	echo '#logo a { color: #'.get_header_textcolor().'; } ';

/* =================== END NAV STYLE =================== */

/* =================== BEGIN CONTENT STYLE =================== */

	if (seanlite_setting('wip_content_font_size')) 
		echo ".post-article p, .post-article li, .post-article address, .post-article dd, .post-article blockquote, .post-article td, .post-article th, .textwidget, .toggle_container h5.element  { font-size:".esc_html(seanlite_setting('wip_content_font_size'))."}"; 
	

/* =================== END CONTENT STYLE =================== */

/* =================== START TITLE STYLE =================== */

	if (seanlite_setting('wip_h1_font_size')) 
		echo "h1 {font-size:".esc_html(seanlite_setting('wip_h1_font_size'))."; }"; 
	if (seanlite_setting('wip_h2_font_size')) 
		echo "h2 { font-size:".esc_html(seanlite_setting('wip_h2_font_size'))."; }"; 
	if (seanlite_setting('wip_h3_font_size')) 
		echo "h3 { font-size:".esc_html(seanlite_setting('wip_h3_font_size'))."; }"; 
	if (seanlite_setting('wip_h4_font_size')) 
		echo "h4 { font-size:".esc_html(seanlite_setting('wip_h4_font_size'))."; }"; 
	if (seanlite_setting('wip_h5_font_size')) 
		echo "h5 { font-size:".esc_html(seanlite_setting('wip_h5_font_size'))."; }"; 
	if (seanlite_setting('wip_h6_font_size')) 
		echo "h6 { font-size:".esc_html(seanlite_setting('wip_h6_font_size'))."; }"; 


/* =================== END TITLE STYLE =================== */

	if (seanlite_setting('wip_custom_css_code'))
		echo esc_html(seanlite_setting('wip_custom_css_code')); 

	echo '</style>';

}

add_action('wp_head', 'seanlite_css_custom');

?>