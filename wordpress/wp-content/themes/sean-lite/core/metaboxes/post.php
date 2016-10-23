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

$seanlite_new_metaboxes = new seanlite_metaboxes ('post', array (

array( "name" => "Navigation",  
       "type" => "navigation",  
       "item" => array( "setting" => __( "Setting",'sean-lite') , "sidebars" => __( "Sidebars",'sean-lite') ),   
       "start" => "<ul>", 
       "end" => "</ul>"),  

array( "type" => "begintab",
	   "tab" => "setting",
	   "element" =>

		array( "name" => __( "Setting",'sean-lite'),
			   "type" => "title",
			  ),

		array( "name" => __( "Template",'sean-lite'),
			   "desc" => __( "Select a template for this page",'sean-lite'),
			   "id" => "wip_template",
			   "type" => "select",
			   "options" => array(
				   "full" => __( "Full Width",'sean-lite'),
				   "left-sidebar" =>  __( "Left Sidebar",'sean-lite'),
				   "right-sidebar" => __( "Right Sidebar",'sean-lite'),
			  ),
		),

),

array( "type" => "endtab"),

array( "type" => "begintab",
	   "tab" => "sidebars",
	   "element" =>

		array( "name" => __( "Sidebars",'sean-lite'),
			   "type" => "title",
			  ),

		array( "name" => __( "Header Sidebar",'sean-lite'),
			   "desc" => __( "Select the header sidebar",'sean-lite'),
			   "id" => "wip_header_sidebar",
			   "type" => "select",
			   "options" => array(
			   		"none" => "None", 
					"header-sidebar-area" => "Default"
			   ),
			),

		array( "name" => __( "Bottom Sidebar",'sean-lite'),
			   "desc" => __( "Select the bottom sidebar",'sean-lite'),
			   "id" => "wip_bottom_sidebar",
			   "type" => "select",
			   "options" => array(
			   		"none" => "None", 
					"bottom-sidebar-area" => "Default"
			   ),
			),

		array( "name" => __( "Footer Sidebar",'sean-lite'),
			   "desc" => __( "Select the footer sidebar",'sean-lite'),
			   "id" => "wip_footer_sidebar",
			   "type" => "select",
			   "options" => array(
			   		"none" => "None", 
					"footer-sidebar-area" => "Default"
			   ),
		),

),

array( "type" => "endtab"),

array( "type" => "endtab")
)

);


?>