<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<!--[if IE 8]>
    <script src="<?php echo get_template_directory_uri(); ?>/includes/scripts/html5.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/includes/scripts/selectivizr.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >

<header id="header">

	<nav id="mainmenu" >
		
		<?php wp_nav_menu( array('theme_location' => 'main-menu', 'container' => 'false' )); ?>
	
    </nav>
     
</header>    	

<div class="container logo">
	
    <div class="row">
    	
        <div class="col-md-12">
        
            <div id="logo">
                            
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name') ?>">
                                        
                    <?php 
                                                    
                        if ( seanlite_setting('wip_custom_logo') ):
                            echo "<img src='".esc_url(seanlite_setting('wip_custom_logo'))."' alt='logo'>"; 
                        else: 
                            bloginfo('name');
                            echo "<span>".get_bloginfo('description')."</span>";
                        endif; 
                                        
                    ?>
                                            
                </a>
                            
            </div>

			<nav id="mobilemenu" >
				<?php wp_nav_menu( array('theme_location' => 'main-menu', 'container' => 'false','depth' => 3 )); ?>
			</nav>
            
        </div>
        
    </div>
    
</div>