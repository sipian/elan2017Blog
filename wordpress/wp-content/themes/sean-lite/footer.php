<footer id="footer">
	
    <div class="container">

		<?php do_action('seanlite_footer_sidebar'); ?>
		
        <section class="row" >
             
			<div class="col-md-12" >

                <div class="copyright">

                    <p>
                        <?php if (seanlite_setting('wip_copyright_text')): ?>
                           <?php echo esc_html(seanlite_setting('wip_copyright_text')); ?>
                        <?php else: ?>
                          <?php _e('Copyright','sean-lite'); ?> <?php echo get_bloginfo("name"); ?> <?php echo date("Y"); ?> 
                        <?php endif; ?> 
                        | <?php _e('Theme by','sean-lite'); ?> <a href="<?php echo esc_url('https://www.themeinprogress.com/'); ?>" target="_blank">Theme in Progress</a> |
                        <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'sean-lite' ) ); ?>" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'sean-lite' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'sean-lite' ), 'WordPress' ); ?></a>
                    
                    </p>

				</div>
                
                <?php do_action('seanlite_social_buttons'); ?>

                <div class="clear"></div>
                
			</div>
                
		</section>
        
	</div>
    
</footer>

<div id="back-to-top"><i class="fa fa-chevron-up"></i></div>

<?php wp_footer() ?>  
 
</body>

</html>