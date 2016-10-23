<?php get_header(); ?>

<h1 class="title headtitle"> <?php _e( 'Content not found','sean-lite'); ?> </h1>

<div class="container">

	<div class="row" id="blog" >
		
        <article class="post-container col-md-12">

			<div class="post-article">

                <h1> <?php _e( 'Oops, it is a little bit embarassing...','sean-lite' ) ?> </h1>           
			
				<?php _e( 'The page that you requested, was not found.','sean-lite'); ?> 

                <h2> <?php _e( 'What can i do?','sean-lite' ) ?> </h2>           

                <p> <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name') ?>"> <?php _e( 'Back to the homepage','sean-lite'); ?> </a> </p>
                
			</div>

    	</article>
           
    </div>
    
</div>

<?php get_footer(); ?>