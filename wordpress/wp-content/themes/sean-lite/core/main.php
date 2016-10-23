<?php

/**
 * Wp in Progress
 * 
 * @package Wordpress
 * @theme Sean
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * It is also available at this URL: http://www.gnu.org/licenses/gpl-3.0.txt
 */


/*-----------------------------------------------------------------------------------*/
/* TAG TITLE */
/*-----------------------------------------------------------------------------------*/  

if ( ! function_exists( '_wp_render_title_tag' ) ) {

	function seanlite_title( $title, $sep ) {
		
		global $paged, $page;
	
		if ( is_feed() )
			return $title;
	
		$title .= get_bloginfo( 'name' );
	
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			$title = "$title $sep $site_description";
	
		if ( $paged >= 2 || $page >= 2 )
			$title = "$title $sep " . sprintf( __( 'Page %s', 'sean-lite' ), max( $paged, $page ) );
	
		return $title;
		
	}

	add_filter( 'wp_title', 'seanlite_title', 10, 2 );

	function seanlite_addtitle() {
		
?>

	<title><?php wp_title( '|', true, 'right' ); ?></title>

<?php

	}

	add_action( 'wp_head', 'seanlite_addtitle' );

}

/*-----------------------------------------------------------------------------------*/
/* POST CLASS */
/*-----------------------------------------------------------------------------------*/   

if (!function_exists('seanlite_post_class')) {

	function seanlite_post_class($classes) {
	
		$classes[] = 'post-container col-md-12';
			
		return $classes;
		
	}
	
	add_filter('post_class', 'seanlite_post_class');

}

/*-----------------------------------------------------------------------------------*/
/* REQUIRE FUNCTION */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('seanlite_require')) {

	function seanlite_require($folder) {
	
		if (isset($folder)) : 
	
			if ( ( !seanlite_setting('wip_loadsystem') ) || ( seanlite_setting('wip_loadsystem') == "mode_a" ) ) {
		
				$folder = dirname(dirname(__FILE__)) . $folder ;  
				
				$files = scandir($folder);  
				  
				foreach ($files as $key => $name) {  
					if (!is_dir( $name )) { 
						require_once $folder . $name;
					} 
				}  
			
			} else if ( seanlite_setting('wip_loadsystem') == "mode_b" ) {
	
	
				$dh  = opendir(get_template_directory().$folder);
				
				while (false !== ($filename = readdir($dh))) {
				   
					if ( strlen($filename) > 2 ) {
					require_once get_template_directory()."/".$folder.$filename;
					}
				}
			}
		
		endif;
		
	}

}

/*-----------------------------------------------------------------------------------*/
/* SCRIPTS FUNCTION */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('seanlite_enqueue_script')) {

	function seanlite_enqueue_script($folder) {
	
		if (isset($folder)) : 
	
			if ( ( !seanlite_setting('wip_loadsystem') ) || ( seanlite_setting('wip_loadsystem') == "mode_a" ) ) {
			
				$dir = dirname(dirname(__FILE__)) . $folder ;  
				
				$files = scandir($dir);  
				  
				foreach ($files as $key => $name) {  
					if (!is_dir( $name )) { 
						
						wp_enqueue_script( 'seanlite_'. str_replace('.js','',$name), get_template_directory_uri() . $folder . "/" . $name , array('jquery'), FALSE, TRUE ); 
						
					} 
				}  
			
			} else if ( seanlite_setting('wip_loadsystem') == "mode_b" ) {
	
				$dh  = opendir(get_template_directory().$folder);
				
				while (false !== ($filename = readdir($dh))) {
				   
					if ( strlen($filename) > 2 ) {
							wp_enqueue_script( 'seanlite_'. str_replace('.js','',$filename), get_template_directory_uri() . $folder . "/" . $filename , array('jquery'), FALSE, TRUE ); 
					}
				}
		
			}
			
		endif;
	
	}

}

/*-----------------------------------------------------------------------------------*/
/* STYLES FUNCTION */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('seanlite_enqueue_style')) {

	function seanlite_enqueue_style($folder) {
	
		if (isset($folder)) : 
	
			if ( ( !seanlite_setting('wip_loadsystem') ) || ( seanlite_setting('wip_loadsystem') == "mode_a" ) ) {
			
				$dir = dirname(dirname(__FILE__)) . $folder ;  
				
				$files = scandir($dir);  
				  
				foreach ($files as $key => $name) {  
					
					if (!is_dir( $name )) { 
						
						wp_enqueue_style( 'seanlite_'. str_replace('.css','',$name), get_template_directory_uri() . $folder . "/" . $name ); 
						
					} 
				}  
			
			
			} else if ( seanlite_setting('wip_loadsystem') == "mode_b" ) {
	
			
				$dh  = opendir(get_template_directory().$folder);
				
				while (false !== ($filename = readdir($dh))) {
				   
					if ( strlen($filename) > 2 ) {
							wp_enqueue_style( 'seanlite_'. str_replace('.css','',$filename), get_template_directory_uri() . $folder . "/" . $filename ); 
					}
				}
			
	
			}
		
		endif;
	
	}
	
}

/*-----------------------------------------------------------------------------------*/
/* REQUEST FUNCTION */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('seanlite_request')) {

	function seanlite_request($id) {
		
		if ( isset ( $_REQUEST[$id])) 
		return $_REQUEST[$id];	
		
	}

}

/*-----------------------------------------------------------------------------------*/
/* THEME PATH */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('seanlite_theme_data')) {

	function seanlite_theme_data($id) {
		
		$themedata = wp_get_theme();
		return $themedata->get($id);
		
	}
	
}

/*-----------------------------------------------------------------------------------*/
/* THEME SETTINGS */
/*-----------------------------------------------------------------------------------*/ 


if (!function_exists('seanlite_setting')) {
	
	function seanlite_setting($id) {
		
		$seanlite_setting = get_theme_mod($id);
			
		if(isset($seanlite_setting))
			return $seanlite_setting;
		
	}
	
}

/*-----------------------------------------------------------------------------------*/
/* POST META */
/*-----------------------------------------------------------------------------------*/ 

if ( ! function_exists( 'seanlite_postmeta' ) ) {

	function seanlite_postmeta($id) {
	
		global $post;
		
		if (!is_404()) {
			$val = get_post_meta( $post->ID , $id, TRUE);
			if(isset($val))
			return $val;
		} else {
			return null;
		}
		
	}

}

/*-----------------------------------------------------------------------------------*/
/* POST ICON */
/*-----------------------------------------------------------------------------------*/ 

if ( ! function_exists( 'seanlite_posticon' ) ) {

	function seanlite_posticon() {
	
		$icons = array (
			
			"video" => "genericon-video" , 
			"gallery" => "genericon-image" , 
			"audio" => "genericon-audio" , 
			"chat" => "genericon-chat", 
			"status" => "genericon-status", 
			"image" => "genericon-picture", 
			"quote" => "genericon-quote" , 
			"link" => "genericon-external", 
			"aside" => "genericon-aside"
			
		);
	
		if (get_post_format()) { 
			
			$icon = '<span class="genericon '.$icons[get_post_format()].'"></span> '.ucfirst(get_post_format()); 
		
		} else {
			
			$icon = '<span class="genericon genericon-standard"></span> Standard'; 
		
		}
		
		return $icon;
		
	}

}

/*-----------------------------------------------------------------------------------*/
/* Preload system */
/*-----------------------------------------------------------------------------------*/ 

if ( ! function_exists( 'seanlite_jpreloader_class' ) ) {

	function seanlite_jpreloader_class($classes) {
		
		if ( seanlite_setting('wip_preload_system') == "on" ) :
		
			if ( seanlite_setting('wip_preload_layout') == "dark" ) {
				
				$classes[] = 'jpreloader dark';
				
			} else {
				
				$classes[] = 'jpreloader';
				
			}
	
		endif;
	
		return $classes;
	
	}
	
	add_filter('body_class','seanlite_jpreloader_class');
	
}

/*-----------------------------------------------------------------------------------*/
/* Infinitescroll system */
/*-----------------------------------------------------------------------------------*/ 

if ( ! function_exists( 'seanlite_infinitescroll_class' ) ) {

	function seanlite_infinitescroll_class($classes) {
		
		if ( seanlite_setting('wip_infinitescroll_system') == "on" ) :
		
			$classes[] = 'infinitescroll';
				
		endif;
	
		return $classes;
	
	}
	
	add_filter('body_class','seanlite_infinitescroll_class');

}

/*-----------------------------------------------------------------------------------*/
/* Body class */
/*-----------------------------------------------------------------------------------*/   

function seanlite_body_class($classes) {

	$classes[] = 'custombody';
		
	return $classes;
	
}

add_filter('body_class', 'seanlite_body_class');

/*-----------------------------------------------------------------------------------*/
/* Content template */
/*-----------------------------------------------------------------------------------*/ 

if ( ! function_exists( 'seanlite_template' ) ) {

	function seanlite_template($id) {
	
		$template = array ("full" => "col-md-12" , "left-sidebar" => "col-md-8" , "right-sidebar" => "col-md-8" );
	
		$span = $template["right-sidebar"];
		$sidebar =  "right-sidebar";
	
		if  ( ( (is_category()) || (is_tag()) || (is_tax()) || (is_month() ) ) && (seanlite_setting('wip_category_layout')) ) {
			
			$span = $template[seanlite_setting('wip_category_layout')];
			$sidebar =  seanlite_setting('wip_category_layout');
				
		} else if ( (is_home()) && (seanlite_setting('wip_home')) ) {
			
			$span = $template[seanlite_setting('wip_home')];
			$sidebar =  seanlite_setting('wip_home');
			
		} else if ( (is_search()) && (seanlite_setting('wip_search_layout')) ) {
			
			$span = $template[seanlite_setting('wip_search_layout')];
			$sidebar =  seanlite_setting('wip_search_layout');
			
		} else if ( ( (is_single()) || (is_page()) ) && (seanlite_postmeta('wip_template')) ) {
			
			$span = $template[seanlite_postmeta('wip_template')];
			$sidebar =  seanlite_postmeta('wip_template');
				
		}
	
		return ${$id};
		
	}

}

/*-----------------------------------------------------------------------------------*/
/*RESPONSIVE EMBED */
/*-----------------------------------------------------------------------------------*/ 

if ( ! function_exists( 'seanlite_get_thumbs' ) ) {
	
	function seanlite_embed_html( $html ) {
		return '<div class="embed-container">' . $html . '</div>';
	}
	 
	add_filter( 'embed_oembed_html', 'seanlite_embed_html', 10, 3 );
	add_filter( 'video_embed_html', 'seanlite_embed_html' );
	
}

/*-----------------------------------------------------------------------------------*/
/* THUMBNAILS */
/*-----------------------------------------------------------------------------------*/         

if ( ! function_exists( 'seanlite_get_thumbs' ) ) {
	
	function seanlite_get_thumbs($type) {
		
		if (seanlite_setting('wip_'.$type.'_thumbinal')):
			return seanlite_setting('wip_'.$type.'_thumbinal');
		else:
			return "550";
		endif;
	
	}

}

/*-----------------------------------------------------------------------------------*/
/* GET PAGED */
/*-----------------------------------------------------------------------------------*/ 

if ( ! function_exists( 'seanlite_paged' ) ) {

	function seanlite_paged() {
		
		if ( get_query_var('paged') ) {
			$paged = get_query_var('paged');
		} elseif ( get_query_var('page') ) {
			$paged = get_query_var('page');
		} else {
			$paged = 1;
		}
		
		return $paged;
		
	}

}

/*-----------------------------------------------------------------------------------*/
/* PRETTYPHOTO */
/*-----------------------------------------------------------------------------------*/   

if ( ! function_exists( 'seanlite_prettyPhoto' ) ) {

	function seanlite_prettyPhoto( $html, $id, $size, $permalink, $icon, $text ) {
		
		if ( ! $permalink )
			return str_replace( '<a', '<a rel="prettyPhoto" ', $html );
		else
			return $html;
	}
	
	add_filter( 'wp_get_attachment_link', 'seanlite_prettyPhoto', 10, 6);

}

/*-----------------------------------------------------------------------------------*/
/* Excerpt more */
/*-----------------------------------------------------------------------------------*/   

if ( ! function_exists( 'seanlite_hide_excerpt_more' ) ) {

	function seanlite_hide_excerpt_more() {
		return '';
	}
	
	add_filter('the_content_more_link', 'seanlite_hide_excerpt_more');
	add_filter('excerpt_more', 'seanlite_hide_excerpt_more');

}

if ( ! function_exists( 'seanlite_excerpt' ) ) {

	function seanlite_excerpt() {
		
		global $post,$more;
		
		$more = 0;
	
		$class = 'more';
		$button = ' [...] ';
	
		if ( seanlite_setting('wip_readmore_button') == "on" ): 
		
			$class = 'button';
			$button = __('Read more','sean-lite');
			
		endif;
	
		if ($pos=strpos($post->post_content, '<!--more-->')): 
			$content = substr(apply_filters( 'the_content', get_the_content()), 0, -5);
		else:
			$content = substr(apply_filters( 'the_excerpt', get_the_excerpt()), 0, -5);
		endif;
		
		echo $content. '<a class="'.$class.'" href="'.get_permalink($post->ID).'" title="More">'.$button.'</a></p>';
		
	}

}

/*-----------------------------------------------------------------------------------*/
/* REMOVE CATEGORY LIST REL */
/*-----------------------------------------------------------------------------------*/   

if ( ! function_exists( 'seanlite_remove_cat_rel' ) ) {

	function seanlite_remove_cat_rel($output) {
	
		$output = str_replace('rel="category"', '', $output);
		return $output;
	
	}
	
	add_filter('wp_list_categories', 'seanlite_remove_cat_rel');
	add_filter('the_category', 'seanlite_remove_cat_rel');

}

/*-----------------------------------------------------------------------------------*/
/* REMOVE THUMBNAIL DIMENSION */
/*-----------------------------------------------------------------------------------*/ 

if ( ! function_exists( 'seanlite_thumbs_size' ) ) {

	function seanlite_thumbs_size( $html, $post_id, $post_image_id ) {
		
		$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
		return $html;
	
	}
	
	add_filter( 'post_thumbnail_html', 'seanlite_thumbs_size', 10, 3 );
  
}

/*-----------------------------------------------------------------------------------*/
/* REMOVE CSS GALLERY */
/*-----------------------------------------------------------------------------------*/ 

if ( ! function_exists( 'seanlite_gallery_style' ) ) {

	function seanlite_gallery_style() {
		return "<div class='gallery'>";
	}
	
	add_filter( 'gallery_style', 'seanlite_gallery_style', 99 );

}

/*-----------------------------------------------------------------------------------*/
/* STYLES AND SCRIPTS */
/*-----------------------------------------------------------------------------------*/ 

if ( ! function_exists( 'seanlite_includes' ) ) {

	function seanlite_includes() {

		wp_enqueue_style( 'seanlite-style', get_stylesheet_uri(), array() );

		seanlite_enqueue_style('/includes/css');
	
		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
	
		wp_enqueue_script( "jquery-ui-core", array('jquery'));
		wp_enqueue_script( "jquery-ui-tabs", array('jquery'));
		
		seanlite_enqueue_script('/includes/js');
		
		if ( ( get_theme_mod('wip_skin') ) && ( get_theme_mod('wip_skin') <> "turquoise" ) ):
	
			wp_enqueue_style( 'sean-lite' . get_theme_mod('wip_skin') , get_template_directory_uri() . '/includes/skins/' . get_theme_mod('wip_skin') . '.css' ); 
	
		endif;
	
		wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=Dr+Sugiyama|Roboto+Slab|Droid+Serif:400,300,100,700' );
	
	}
	
	add_action( 'wp_enqueue_scripts', 'seanlite_includes' );

}

/*-----------------------------------------------------------------------------------*/
/* THEME SETUP */
/*-----------------------------------------------------------------------------------*/   

if ( ! function_exists( 'seanlite_setup' ) ) {

	function seanlite_setup() {

		global $content_width;

		add_theme_support( 'post-formats', array( 'aside','gallery','quote','video','audio','link','status','chat','image' ) );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
	
		add_theme_support( 'title-tag' );
		
		add_image_size( 'blog', 940,seanlite_get_thumbs('blog'), TRUE ); 
		add_image_size( 'portfolio', 940,seanlite_get_thumbs('portfolio'), TRUE ); 
		
		add_image_size( 'large', 449,304, TRUE ); 
		add_image_size( 'medium', 290,220, TRUE ); 
		add_image_size( 'small', 211,150, TRUE ); 
	
		register_nav_menu( 'main-menu', 'Main menu' );
	
		load_theme_textdomain('sean-lite', get_template_directory() . '/languages');
	
		if ( ! isset( $content_width ) )
			$content_width = seanlite_setting('wip_screen3');
	
		add_theme_support( 'custom-background', array(
			'default-color' => 'f3f3f3',
		) );
	
		seanlite_require('/core/classes/');
		seanlite_require('/core/admin/customize/');
		seanlite_require('/core/templates/');
		seanlite_require('/core/scripts/');
		seanlite_require('/core/functions/');
		seanlite_require('/core/metaboxes/');
	
	}
	
	add_action( 'after_setup_theme', 'seanlite_setup' );

}

?>