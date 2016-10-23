<?php

if (!function_exists('seanlite_customize_panel_function')) {

	function seanlite_customize_panel_function() {
		
		$theme_panel = array ( 

			/* FULL IMAGE BACKGROUND */ 

			array(
				
				"label" => __( "Full Image Background",'sean-lite'),
				"description" => __( "Do you want to set a full background image? (After the upload, check 'Fixed', from the Background Attachment section)",'sean-lite'),
				"id" => "wip_full_image_background",
				"type" => "select",
				"section" => "background_image",
				"options" => array (
				   "off" => __( "No",'sean-lite'),
				   "on" => __( "Yes",'sean-lite'),
				),
				
				"std" => "off",
			
			),

			/* START GENERAL SECTION */ 

			array( 
				
				"title" => __( "General",'sean-lite'),
				"description" => __( "General",'sean-lite'),
				"type" => "panel",
				"id" => "general_panel",
				"priority" => "10",
				
			),

			array( 

				"title" => __( "Load system",'sean-lite'),
				"type" => "section",
				"id" => "loadsystem_section",
				"panel" => "general_panel",
				"priority" => "10",

			),

			array(
				
				"label" => __( "Choose a load system",'sean-lite'),
				"description" => __( "Select a load system, if you've some problems with the theme (for example a blank page).",'sean-lite'),
				"id" => "wip_skins",
				"type" => "select",
				"section" => "loadsystem_section",
				"options" => array (
				   "mode_a" => __( "Mode a",'sean-lite'),
				   "mode_b" => __( "Mode b",'sean-lite'),
				),
				
				"std" => "mode_a",
			
			),

			/* SKINS */ 

			array( 

				"title" => __( "Color Scheme",'sean-lite'),
				"type" => "section",
				"panel" => "general_panel",
				"priority" => "11",
				"id" => "colorscheme_section",

			),

			array(
				
				"label" => __( "Predefined Color Schemes",'sean-lite'),
				"description" => __( "Choose your Color Scheme",'sean-lite'),
				"id" => "wip_skin",
				"type" => "select",
				"section" => "colorscheme_section",
				"options" => array (
				   "turquoise" => __( "Turquoise",'sean-lite'),
				   "orange" => __( "Orange",'sean-lite'),
				   "blue" => __( "Blue",'sean-lite'),
				   "red" => __( "Red",'sean-lite'),
				   "pink" => __( "Pink",'sean-lite'),
				   "purple" => __( "Purple",'sean-lite'),
				   "yellow" => __( "Yellow",'sean-lite'),
				   "green" => __( "Green",'sean-lite'),
				   "white_turquoise" => __( "White & Turquoise",'sean-lite'),
				   "white_orange" => __( "White & Orange",'sean-lite'),
				   "white_blue" => __( "White & Blue",'sean-lite'),
				   "white_red" => __( "White & Red",'sean-lite'),
				   "white_pink" => __( "White & Pink",'sean-lite'),
				   "white_purple" => __( "White & Purple",'sean-lite'),
				   "white_yellow" => __( "White & Yellow",'sean-lite'),
				   "white_green" => __( "White & Green",'sean-lite'),
				),
				
				"std" => "turquoise",
			
			),

			/* PAGE WIDTH */ 

			array( 

				"title" => __( "Page width",'sean-lite'),
				"type" => "section",
				"id" => "pagewidth_section",
				"panel" => "general_panel",
				"priority" => "12",

			),

			array( 

				"label" => __( "Screen greater than 768px",'sean-lite'),
				"description" => __( "Set a width, for a screen greater than 768 pixel (for example 750 and not 750px ) ",'sean-lite'),
				"id" => "wip_screen1",
				"type" => "text",
				"section" => "pagewidth_section",
				"std" => "750",

			),

			array( 

				"label" => __( "Screen greater than 992px",'sean-lite'),
				"description" => __( "Set a width, for a screen greater than 992 pixel (for example 940 and not 940px ) ",'sean-lite'),
				"id" => "wip_screen2",
				"type" => "text",
				"section" => "pagewidth_section",
				"std" => "940",

			),

			array( 

				"label" => __( "Screen greater than 1200px",'sean-lite'),
				"description" => __( "Set a width, in px, for a screen greater than 1200 pixel (for example 1170 and not 1170px ) ",'sean-lite'),
				"id" => "wip_screen3",
				"type" => "text",
				"section" => "pagewidth_section",
				"std" => "940",

			),

			/* SETTINGS SECTION */ 

			array( 

				"title" => __( "Settings",'sean-lite'),
				"type" => "section",
				"id" => "settings_section",
				"panel" => "general_panel",
				"priority" => "13",

			),

			array(
				
				"label" => __( "Preload system",'sean-lite'),
				"description" => __( "Do you want to use use the preload system?",'sean-lite'),
				"id" => "wip_preload_system",
				"type" => "select",
				"section" => "settings_section",
				"options" => array (
				   "off" => __( "No",'sean-lite'),
				   "on" => __( "Yes",'sean-lite'),
				),
				
				"std" => "off",
			
			),

			array(
				
				"label" => __( "Preload skin",'sean-lite'),
				"description" => __( "Select a skin for the preload system.",'sean-lite'),
				"id" => "wip_preload_layout",
				"type" => "select",
				"section" => "settings_section",
				"options" => array (
				   "" => __( "Light",'sean-lite'),
				   "dark" => __( "Dark",'sean-lite'),
				),
				
				"std" => "",
			
			),

			array(
				
				"label" => __( "Infinite scroll",'sean-lite'),
				"description" => __( "Do you want to use the infinite scroll, for the articles?",'sean-lite'),
				"id" => "wip_infinitescroll_system",
				"type" => "select",
				"section" => "settings_section",
				"options" => array (
				   "off" => __( "No",'sean-lite'),
				   "on" => __( "Yes",'sean-lite'),
				),
				
				"std" => "off",
			
			),

			array(
				
				"label" => __( "Read more button",'sean-lite'),
				"description" => __( "Do you want to use a button, for open the posts? (Instead of [...])",'sean-lite'),
				"id" => "wip_readmore_button",
				"type" => "select",
				"section" => "settings_section",
				"options" => array (
				   "off" => __( "No",'sean-lite'),
				   "on" => __( "Yes",'sean-lite'),
				),
				
				"std" => "off",
			
			),

			array( 

				"title" => __( "Styles",'sean-lite'),
				"type" => "section",
				"id" => "styles_section",
				"panel" => "general_panel",
				"priority" => "14",

			),

			array( 

				"label" => __( "Custom css",'sean-lite'),
				"description" => __( "Insert your custom css code.",'sean-lite'),
				"id" => "wip_custom_css_code",
				"type" => "custom_css",
				"section" => "styles_section",
				"std" => "",

			),

			/* LAYOUTS SECTION */ 

			array( 

				"title" => __( "Layouts",'sean-lite'),
				"type" => "section",
				"id" => "layouts_section",
				"panel" => "general_panel",
				"priority" => "15",

			),

			array(
				
				"label" => __("Home Blog Layout",'sean-lite'),
				"description" => __("If you've set the latest articles, for the homepage, choose a layout.",'sean-lite'),
				"id" => "wip_home",
				"type" => "select",
				"section" => "layouts_section",
				"options" => array (
				   "full" => __( "Full Width",'sean-lite'),
				   "left-sidebar" => __( "Left Sidebar",'sean-lite'),
				   "right-sidebar" => __( "Right Sidebar",'sean-lite'),
				),
				
				"std" => "right-sidebar",
			
			),
	

			array(
				
				"label" => __("Category Layout",'sean-lite'),
				"description" => __("Select a layout for category pages.",'sean-lite'),
				"id" => "wip_category_layout",
				"type" => "select",
				"section" => "layouts_section",
				"options" => array (
				   "full" => __( "Full Width",'sean-lite'),
				   "left-sidebar" => __( "Left Sidebar",'sean-lite'),
				   "right-sidebar" => __( "Right Sidebar",'sean-lite'),
				),
				
				"std" => "right-sidebar",
			
			),
	

			array(
				
				"label" => __("Search Layout",'sean-lite'),
				"description" => __("Select a layout for the search page.",'sean-lite'),
				"id" => "wip_search_layout",
				"type" => "select",
				"section" => "layouts_section",
				"options" => array (
				   "full" => __( "Full Width",'sean-lite'),
				   "left-sidebar" => __( "Left Sidebar",'sean-lite'),
				   "right-sidebar" => __( "Right Sidebar",'sean-lite'),
				),
				
				"std" => "right-sidebar",
			
			),

			/* THUMBNAILS SECTION */ 

			array( 

				"title" => __( "Thumbnails",'sean-lite'),
				"type" => "section",
				"id" => "thumbnails_section",
				"panel" => "general_panel",
				"priority" => "16",

			),

			array( 

				"label" => __( "Blog Thumbnail",'sean-lite'),
				"description" => __( "Insert the height for blog thumbnail.",'sean-lite'),
				"id" => "wip_blog_thumbinal",
				"type" => "text",
				"section" => "thumbnails_section",
				"std" => "550",

			),

			/* HEADER AREA SECTION */ 

			array( 

				"title" => __( "Header",'sean-lite'),
				"type" => "section",
				"id" => "header_section",
				"panel" => "general_panel",
				"priority" => "17",

			),

			array( 

				"label" => __( "Custom Logo",'sean-lite'),
				"description" => __( "Upload your custom logo",'sean-lite'),
				"id" => "wip_custom_logo",
				"type" => "upload",
				"section" => "header_section",
				"std" => "",

			),

			/* FOOTER AREA SECTION */ 

			array( 

				"title" => __( "Footer",'sean-lite'),
				"type" => "section",
				"id" => "footer_section",
				"panel" => "general_panel",
				"priority" => "18",

			),

			array( 

				"label" => __( "Copyright Text",'sean-lite'),
				"description" => __( "Insert your copyright text.",'sean-lite'),
				"id" => "wip_copyright_text",
				"type" => "textarea",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => __( "Facebook Url",'sean-lite'),
				"description" => __( "Insert Facebook Url (empty if you want to hide the button)",'sean-lite'),
				"id" => "wip_footer_facebook_button",
				"type" => "url",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => __( "Twitter Url",'sean-lite'),
				"description" => __( "Insert Twitter Url (empty if you want to hide the button)",'sean-lite'),
				"id" => "wip_footer_twitter_button",
				"type" => "url",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => __( "Flickr Url",'sean-lite'),
				"description" => __( "Insert Flickr Url (empty if you want to hide the button)",'sean-lite'),
				"id" => "wip_footer_flickr_button",
				"type" => "url",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => __( "Google Url",'sean-lite'),
				"description" => __( "Insert Google Url (empty if you want to hide the button)",'sean-lite'),
				"id" => "wip_footer_google_button",
				"type" => "url",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => __( "Linkedin Url",'sean-lite'),
				"description" => __( "Insert Linkedin Url (empty if you want to hide the button)",'sean-lite'),
				"id" => "wip_footer_linkedin_button",
				"type" => "url",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => __( "Pinterest Url",'sean-lite'),
				"description" => __( "Insert Pinterest Url (empty if you want to hide the button)",'sean-lite'),
				"id" => "wip_footer_pinterest_button",
				"type" => "url",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => __( "Tumblr Url",'sean-lite'),
				"description" => __( "Insert Tumblr Url (empty if you want to hide the button)",'sean-lite'),
				"id" => "wip_footer_tumblr_button",
				"type" => "url",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => __( "Youtube Url",'sean-lite'),
				"description" => __( "Insert Youtube Url (empty if you want to hide the button)",'sean-lite'),
				"id" => "wip_footer_youtube_button",
				"type" => "url",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => __( "Skype Url",'sean-lite'),
				"description" => __( "Insert Skype ID (empty if you want to hide the button)",'sean-lite'),
				"id" => "wip_footer_skype_button",
				"type" => "button",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => __( "Instagram Url",'sean-lite'),
				"description" => __( "Insert Instagram Url (empty if you want to hide the button)",'sean-lite'),
				"id" => "wip_footer_instagram_button",
				"type" => "url",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => __( "Github Url",'sean-lite'),
				"description" => __( "Insert Github Url (empty if you want to hide the button)",'sean-lite'),
				"id" => "wip_footer_github_button",
				"type" => "url",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => __( "Xing Url",'sean-lite'),
				"description" => __( "Insert Xing Url (empty if you want to hide the button)",'sean-lite'),
				"id" => "wip_footer_xing_button",
				"type" => "url",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => __( "WhatsApp number",'sean-lite'),
				"description" => __( "Insert WhatsApp number (empty if you want to hide the button)",'sean-lite'),
				"id" => "wip_footer_whatsapp_button",
				"type" => "button",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => __( "Email Address",'sean-lite'),
				"description" => __( "Insert Email Address (empty if you want to hide the button)",'sean-lite'),
				"id" => "wip_footer_email_button",
				"type" => "button",
				"section" => "footer_section",
				"std" => "",

			),

			array(
				
				"label" => __( "Feed Rss Button",'sean-lite'),
				"description" => __( "Do you want to display the Feed Rss button?",'sean-lite'),
				"id" => "wip_footer_rss_button",
				"type" => "select",
				"section" => "footer_section",
				"options" => array (
				   "off" => __( "No",'sean-lite'),
				   "on" => __( "Yes",'sean-lite'),
				),
				
				"std" => "off",
			
			),

			/* TYPOGRAPHY SECTION */ 

			array( 
				
				"title" => __( "Typography",'sean-lite'),
				"description" => __( "Typography",'sean-lite'),
				"type" => "panel",
				"id" => "typography_panel",
				"priority" => "11",
				
			),

			/* LOGO */ 

			array( 

				"title" => __( "Logo",'sean-lite'),
				"type" => "section",
				"id" => "logo_section",
				"panel" => "typography_panel",
				"priority" => "10",

			),

			array( 

				"label" => __( "Font size",'sean-lite'),
				"description" => __( "Insert a size, for logo font (For example, 60px) ",'sean-lite'),
				"id" => "wip_logo_font_size",
				"type" => "text",
				"section" => "logo_section",
				"std" => "60px",

			),

			/* MENU */ 

			array( 

				"title" => __( "Menu",'sean-lite'),
				"type" => "section",
				"id" => "menu_section",
				"panel" => "typography_panel",
				"priority" => "11",

			),

			array( 

				"label" => __( "Font size",'sean-lite'),
				"description" => __( "Insert a size, for menu font (For example, 14px) ",'sean-lite'),
				"id" => "wip_menu_font_size",
				"type" => "text",
				"section" => "menu_section",
				"std" => "14px",

			),

			/* CONTENT */ 

			array( 

				"title" => __( "Content",'sean-lite'),
				"type" => "section",
				"id" => "content_section",
				"panel" => "typography_panel",
				"priority" => "12",

			),

			array( 

				"label" => __( "Font size",'sean-lite'),
				"description" => __( "Insert a size, for content font (For example, 14px) ",'sean-lite'),
				"id" => "wip_content_font_size",
				"type" => "text",
				"section" => "content_section",
				"std" => "14px",

			),


			/* HEADLINES */ 

			array( 

				"title" => __( "Headlines",'sean-lite'),
				"type" => "section",
				"id" => "headlines_section",
				"panel" => "typography_panel",
				"priority" => "13",

			),

			array( 

				"label" => __( "H1 headline",'sean-lite'),
				"description" => __( "Insert a size, for for H1 elements (For example, 24px) ",'sean-lite'),
				"id" => "wip_h1_font_size",
				"type" => "text",
				"section" => "headlines_section",
				"std" => "24px",

			),

			array( 

				"label" => __( "H2 headline",'sean-lite'),
				"description" => __( "Insert a size, for for H2 elements (For example, 22px) ",'sean-lite'),
				"id" => "wip_h2_font_size",
				"type" => "text",
				"section" => "headlines_section",
				"std" => "22px",

			),

			array( 

				"label" => __( "H3 headline",'sean-lite'),
				"description" => __( "Insert a size, for for H3 elements (For example, 20px) ",'sean-lite'),
				"id" => "wip_h3_font_size",
				"type" => "text",
				"section" => "headlines_section",
				"std" => "20px",

			),

			array( 

				"label" => __( "H4 headline",'sean-lite'),
				"description" => __( "Insert a size, for for H4 elements (For example, 18px) ",'sean-lite'),
				"id" => "wip_h4_font_size",
				"type" => "text",
				"section" => "headlines_section",
				"std" => "18px",

			),

			array( 

				"label" => __( "H5 headline",'sean-lite'),
				"description" => __( "Insert a size, for for H5 elements (For example, 16px) ",'sean-lite'),
				"id" => "wip_h5_font_size",
				"type" => "text",
				"section" => "headlines_section",
				"std" => "16px",

			),

			array( 

				"label" => __( "H6 headline",'sean-lite'),
				"description" => __( "Insert a size, for for H6 elements (For example, 14px) ",'sean-lite'),
				"id" => "wip_h6_font_size",
				"type" => "text",
				"section" => "headlines_section",
				"std" => "14px",

			),
		);
		
		new seanlite_customize($theme_panel);
		
	} 
	
	add_action( 'seanlite_customize_panel', 'seanlite_customize_panel_function', 10, 2 );

}

do_action('seanlite_customize_panel');

?>