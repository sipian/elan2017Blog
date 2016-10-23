<?php
 
if( !class_exists( 'seanlite_admin_notice' ) ) {

	class seanlite_admin_notice {
	
		/**
		 * Constructor
		 */
		 
		public function __construct( $fields = array() ) {

			if ( !get_user_meta( get_current_user_id(), 'seanlite_notice_userid_' . get_current_user_id() , TRUE ) ) {

				add_action( 'admin_notices', array(&$this, 'admin_notice') );
				add_action( 'admin_head', array( $this, 'dismiss' ) );
			
			}

			add_action( 'switch_theme', array( $this, 'update_dismiss' ) );

		}

		/**
		 * Update notice.
		 */

		public function update_dismiss() {
		
			delete_metadata( 'user', null, 'seanlite_notice_userid_' . get_current_user_id(), null, true );
		
		}

		/**
		 * Dismiss notice.
		 */
		
		public function dismiss() {
			
			if ( isset( $_GET['seanlite-dismiss'] ) ) {

				update_user_meta( get_current_user_id(), 'seanlite_notice_userid_' . get_current_user_id() , $_GET['seanlite-dismiss'] );
				remove_action( 'admin_notices', array(&$this, 'admin_notice') );

			} 

		}

		/**
		 * Admin notice.
		 */
		 
		public function admin_notice() {
			
		?>
			
            <div class="update-nag notice seanlite-notice">
            
            	<div class="seanlite-noticedescription">
					<strong><?php _e( 'Upgrade to the pro version of Sean, to enable an extensive option panel, WooCommerce support, 600+ Google Fonts, unlimited sidebars, portfolio and much more.', 'sean-lite' ); ?></strong><br/>
					<?php printf( __('<a href="%1$s" class="dismiss-notice">Dismiss this notice</a>','sean-lite'), esc_url( '?seanlite-dismiss=1' ) ); ?>
                </div>
                
                <a target="_blank" href="<?php echo esc_url( 'https://www.themeinprogress.com/sean-free-creative-portfolio-wordpress-theme/?ref=2&campaign=sean-notice' ); ?>" class="button"><?php _e( 'Upgrade to Sean Premium', 'sean-lite' ); ?></a>
                <div class="clear"></div>

            </div>
		
		<?php
		
		}

	}

}

new seanlite_admin_notice();

?>