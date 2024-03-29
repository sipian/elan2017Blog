<?php

	class seanlite_metaboxes {
	   
		public $posttype;
		public $metaboxes_fields;
	   
		public function __construct( $posttype, $fields = array() ) {
	
			$this->posttype = $posttype;
			$this->metaboxes_fields = $fields;
			
			add_action( 'add_meta_boxes', array( &$this, 'new_metaboxes' ) ); 
			add_action( 'save_post', array( &$this, 'seanlite_metaboxes_save' ) );
		}
	
		public function new_metaboxes() {
	
			$posttype = $this->posttype ;
			add_meta_box( $posttype, ucfirst($posttype).' settings', array( &$this, 'metaboxes_panel' ), $posttype, 'normal', 'high' );
		
		}
		
		public function metaboxes_panel() {
	
			$metaboxes_fields = $this->metaboxes_fields ;
	
			global $post, $post_id;
			
			foreach ($metaboxes_fields as $value) {
			switch ( $value['type'] ) { 
		
			case 'navigation': ?>
			
				<div id="tabs" class="metaboxes">
						
					<ul>
			
						<?php 
										
							foreach ($value['item'] as $option => $name ) {
							
								echo "<li class='".$option."'><a href='#".str_replace(" ", "", $option)."'>".$name."</a></li>";
							
							}
							
						?>
						
                        <li class="clear"></li>
                           
					</ul>
					   
			<?php	
					
			break;
		
			case 'begintab': ?>
			
				<div id="<?php echo $value['tab'];?>" >
		
			<?php	
					
			break;
		
			case 'endtab': ?>
			
				</div>
		
			<?php	
					
			break;
			}
			foreach ($value as $field) {
		
			if (isset($field['type'])) : 
		
				switch ( $field['type'] ) { 
		
					case 'start':  ?>
					<div class="postformat" id="<?php echo $field['id']; ?>">
				
					<?php break;
					
					case 'end':  ?>
					</div>
					
					<?php break;
					
					case 'title':  ?>
					
					<h2 class="title"><?php echo $field['name']; ?></h2>
					
					<?php break;
		
					case 'text':  ?>
					
					<p class="wip_inputbox">
						
						<div class="input-left">
						
							<label for="<?php echo $field['id']; ?>"><?php echo $field['name']; ?></label><br />
							<em> <?php echo $field['desc']; ?> </em>
							
						</div>
						
						<div class="input-right">
						
							<input name="<?php echo $field['id']; ?>" id="<?php echo $field['id']; ?>" type="<?php echo $field['type']; ?>" value="<?php if ( seanlite_postmeta( $field['id']) != "") { echo seanlite_postmeta( $field['id']); } ?>" style="width:100%"/>
							
						</div>
						
						<div class="clear"></div>
					</p>
				
					<?php break;
		
					case 'select':  ?>
					
					<p class="wip_inputbox">
						
						<div class="input-left">
						
							<label for="<?php echo $field['id']; ?>"><?php echo $field['name']; ?></label><br />
							<em> <?php echo $field['desc']; ?> </em>
							
						</div>
						
						<div class="input-right">
						
							<select name="<?php echo $field['id']; ?>" id="<?php echo $field['id']; ?>" style="width:100%">
								<?php foreach ($field['options'] as $option => $values) { ?>
								<option <?php if (seanlite_postmeta( $field['id']) == $option) { echo 'selected="selected"'; } ?> value="<?php echo $option; ?>"><?php echo $values; ?></option><?php } ?>
							</select>
						
						</div>
						
						<div class="clear"></div>
					</p>
					
					<?php break;
					
					case 'taxonomy-select':  
					
					$slideshows = get_terms("slideshows");
					foreach ($slideshows as $slideshow)	
						{
							$wp_terms[$slideshow->term_id] = $slideshow->name;
						}
					?>
					
					<p class="wip_inputbox">
						<label for="<?php echo $field['id']; ?>"><?php echo $field['name']; ?></label>
						<select name="<?php echo $field['id']; ?>" id="<?php echo $field['id']; ?>" style="width:100%">
							<option value="all"> All </option>
							<?php foreach ( $wp_terms as $option => $values) { ?>
							<option <?php if (seanlite_postmeta( $field['id']) == $option) { echo 'selected="selected"'; } ?> value="<?php echo $option; ?>"><?php echo $values; ?></option><?php } ?>
						</select>
						<em> <?php echo $field['desc']; ?> </em>
					</p>
				
				
					<?php break;
		
					case 'textarea':  ?>
							
					<p class="wip_inputbox">
						
						<div class="input-left">
							<label for="<?php echo $field['id']; ?>"><?php echo $field['name']; ?></label><br />
							<em> <?php echo $field['desc']; ?> </em>
						</div>
						<div class="input-right">
						<textarea name="<?php echo $field['id']; ?>" id="<?php echo $field['id']; ?>" type="<?php echo $field['type']; ?>" style="width:100%"><?php if ( seanlite_postmeta( $field['id']) != "") { echo stripslashes(seanlite_postmeta( $field['id'])); } ?></textarea>
						</div>
						<div class="clear"></div>
					</p>
							
					<?php break;
		
					}
				
				endif;
				
				}
			}
	
		}
		
		public function seanlite_metaboxes_save() {
		
				global $post_id, $post;
				
				$metaboxes_fields = $this->metaboxes_fields ;
		
				foreach ($metaboxes_fields as $value) {
					foreach ($value as $field) {

						if ((isset($field['id'])) && (isset($_POST[$field['id']]))) {
		
						$new = $_POST[$field['id']];
						
							if ( $field['id'] <> "galleries" ) {
		
								update_post_meta( $post_id , $field['id'], $new );
		
							}
						}
					}
				}
		}
	
	}

?>