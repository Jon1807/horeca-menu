<?php
function horeca_menu_items_shortcode($params, $content) {
    extract( shortcode_atts( 
      array(
        'settings'            => '',
        'tab1'        => '',
        'version'     =>'',
        'columns'     =>'',
        'alignment'     =>'',
        'layout_display'     =>'',
      ), $params ) );

    ob_start(); 

    $tab1 = unserialize(base64_decode($tab1)); 
    ?>
			<div class="horeca-menu-items-container">
				<div class="horeca-menu-tab">
					<input id="horeca-menu-tab1" type="radio" name="pct" checked="checked">
				  <section class="horeca-menu-section">
				    <div class="horeca-menu-tab1 horeca-menu-tab1-<?php echo esc_attr($version); ?>" style="-webkit-columns:<?php echo esc_attr($columns)?>">
				      <?php if ($tab1) {
								foreach ( $tab1 as $item ) {
									$item_type = $item['item_type'];
									$card_color = $item['card_color'];
									$dish_image = $item['dish_image']['url'];
									$dish_title = $item['dish_title'];
									$dish_price = $item['dish_price'];
									$dish_description = $item['dish_description'];
									$dish_promotion = $item['dish_promotion'];
									$dish_toggle = $item['dish_toggle'];	
									$dish_heading = $item['dish_heading'];	
									$badge_alignment = $item['badge_alignment'];
									$calories = $item['calories'];
									$fat = $item['fat'];
									$carbs = $item['carbs'];
									$proteins = $item['proteins'];							
			            ?>
				            <?php if($item_type == "heading"){ ?>
				            	<div class="horeca-menu-items-heading">
									 			<h2 class="horeca-menu-items-inner-heading" style="color:<?php echo esc_attr($heading_color)?>"><?php echo esc_html($dish_heading);  ?> 
									 			</h2>
								 			</div>
								 		<?php } ?>
								 		<?php if($item_type == "product"){ ?>
				              <div class="horeca-menu-items-inner-container-<?php echo esc_attr($version); ?>" style="background-color:<?php echo esc_attr($card_color)?>;text-align:<?php echo esc_attr($alignment)?>;display:<?php echo esc_attr($layout_display)?>">
				              	<?php if(!empty($dish_image)){?>
											    <div class="horeca-menu-items-img-holder">
											      <img src="<?php echo esc_url($dish_image); ?>" alt="menu-items-image" width="<?php echo esc_attr( $image_width ); ?>px" height="<?php echo esc_attr( $image_height ); ?>px">
											    </div>
										 		<?php }?>
										 		<div class="horeca-menu-items-content">
										 			<div class="horeca-menu-items-upper-content" style="display:<?php echo esc_attr($layout_display)?>">
									          <?php if(!empty($dish_title)){ ?>
											        <div class="horeca-menu-items-title" style="color:<?php echo esc_attr($title_color)?>;font-weight:<?php echo esc_attr($title_weight)?>;font-size:<?php echo esc_attr($title_size)?>px">
										          	<?php echo esc_html($dish_title);  ?>
											        </div>
										        <?php } ?>
										        <?php if($version == 'v2'){ ?>
										       	 <div class="horeca-menu-items-line"></div>
										         <?php } ?>
										        <?php if(!empty($dish_price)){ ?>
											        <div class="horeca-menu-items-price" style="color:<?php echo esc_attr($price_color)?>;font-weight:<?php echo esc_attr($price_weight)?>;font-size:<?php echo esc_attr($price_size)?>px">
										          	<?php echo esc_html($dish_price);  ?>
											        </div>
										        <?php } ?>
									      	</div> 
									      	<div class="horeca-menu-items-bottom-content">
										        <div class="horeca-menu-items-description" style="color:<?php echo esc_attr($description_color)?>;font-weight:<?php echo esc_attr($description_weight)?>;font-size:<?php echo esc_attr($description_size)?>px">
									          	<?php echo esc_html($dish_description);  ?>
										        </div>
										        <?php if ( 'yes' === $item['dish_toggle'] ) { ?>
										        	<div class="horeca-menu-items-promotion">
										        		<span class="horeca-menu-items-label">
										        			<?php echo esc_html($dish_promotion);  ?>
										        		</span>
										        	</div>
										        <?php } ?>
										      </div>
										      <div class="horeca-menu-items-badges" style="text-align:<?php echo esc_attr($badge_alignment)?>">
											      <?php if ( 'yes' === $item['vegan_toggle'] ) { ?>
											      	<svg class="horeca-svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M272 96c-78.6 0-145.1 51.5-167.7 122.5c33.6-17 71.5-26.5 111.7-26.5h88c8.8 0 16 7.2 16 16s-7.2 16-16 16H288 216s0 0 0 0c-16.6 0-32.7 1.9-48.2 5.4c-25.9 5.9-50 16.4-71.4 30.7c0 0 0 0 0 0C38.3 298.8 0 364.9 0 440v16c0 13.3 10.7 24 24 24s24-10.7 24-24V440c0-48.7 20.7-92.5 53.8-123.2C121.6 392.3 190.3 448 272 448l1 0c132.1-.7 239-130.9 239-291.4c0-42.6-7.5-83.1-21.1-119.6c-2.6-6.9-12.7-6.6-16.2-.1C455.9 72.1 418.7 96 376 96L272 96z"/></svg>
											      <?php } ?>
											      <?php if ( 'yes' === $item['gluten_toggle'] ) { ?>
											      	<svg class="horeca-svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><path d="M505 41c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L383 95c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l88-88zM305.5 27.3c-6.2-6.2-16.4-6.2-22.6 0L271.5 38.6c-37.5 37.5-37.5 98.3 0 135.8l10.4 10.4-30.5 30.5c-3.4-27.3-15.5-53.8-36.5-74.8l-11.3-11.3c-6.2-6.2-16.4-6.2-22.6 0l-11.3 11.3c-37.5 37.5-37.5 98.3 0 135.8l10.4 10.4-30.5 30.5c-3.4-27.3-15.5-53.8-36.5-74.8L101.8 231c-6.2-6.2-16.4-6.2-22.6 0L67.9 242.3c-37.5 37.5-37.5 98.3 0 135.8l10.4 10.4L9.4 457.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l68.9-68.9 12.2 12.2c37.5 37.5 98.3 37.5 135.8 0l11.3-11.3c6.2-6.2 6.2-16.4 0-22.6l-11.3-11.3c-21.8-21.8-49.6-34.1-78.1-36.9l31.9-31.9 12.2 12.2c22.5 22.5 53.3 31.5 82.4 27c0-1 0-2.1 0-3.1c0-33.1 9.1-64.1 25-90.6c-15.5-8.7-32.5-13.8-49.8-15.5l31.9-31.9 12.2 12.2c6 6 12.6 11.1 19.7 15.2c27.5-34 67.3-57.5 112.6-63.8c-4.1-3.8-8.4-7.3-12.9-10.5L505 137c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-59.4 59.4c-20.6-4.4-42-3.7-62.3 2.1c6.1-21.3 6.6-43.8 1.4-65.3L409 41c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0L329.1 52.9c-3.7-5-7.8-9.8-12.4-14.3L305.5 27.3zM496 512a144 144 0 1 0 0-288 144 144 0 1 0 0 288zm0-96a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm0-144c8.8 0 16 7.2 16 16v80c0 8.8-7.2 16-16 16s-16-7.2-16-16V288c0-8.8 7.2-16 16-16z"/></svg>
											      <?php } ?>
											      <?php if ( 'yes' === $item['spicy_toggle'] ) { ?>
											      	<svg class="horeca-svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M428.3 3c11.6-6.4 26.2-2.3 32.6 9.3l4.8 8.7c19.3 34.7 19.8 75.7 3.4 110C495.8 159.6 512 197.9 512 240c0 18.5-3.1 36.3-8.9 52.8c-6.1 17.3-28.5 16.3-36.8-.1l-11.7-23.4c-4.1-8.1-12.4-13.3-21.5-13.3H360c-13.3 0-24-10.7-24-24V152c0-13.3-10.7-24-24-24l-17.1 0c-21.3 0-30-23.9-10.8-32.9C304.7 85.4 327.7 80 352 80c28.3 0 54.8 7.3 77.8 20.2c5.5-18.2 3.7-38.4-6-55.8L419 35.7c-6.4-11.6-2.3-26.2 9.3-32.6zM171.2 345.5L264 160l40 0v80c0 26.5 21.5 48 48 48h76.2l23.9 47.8C372.3 443.9 244.3 512 103.2 512H44.4C19.9 512 0 492.1 0 467.6c0-20.8 14.5-38.8 34.8-43.3l49.8-11.1c37.6-8.4 69.5-33.2 86.7-67.7z"/></svg>
											      <?php } ?>
											      <?php if ( 'yes' === $item['sugar_toggle'] ) { ?>
											      	<svg class="horeca-svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><path d="M32 0C23.1 0 14.6 3.7 8.6 10.2S-.6 25.4 .1 34.3L28.9 437.7c3 41.9 37.8 74.3 79.8 74.3H275.3c42 0 76.8-32.4 79.8-74.3L383.9 34.3c.6-8.9-2.4-17.6-8.5-24.1S360.9 0 352 0H32zM73 156.5L66.4 64H317.6L311 156.5l-24.2 12.1c-19.4 9.7-42.2 9.7-61.6 0c-20.9-10.4-45.5-10.4-66.4 0c-19.4 9.7-42.2 9.7-61.6 0L73 156.5z"/></svg>
											      <?php } ?>
											      <?php if ( 'yes' === $item['alcohol_toggle'] ) { ?>
											      	<svg class="horeca-svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M393.4 9.4c12.5-12.5 32.8-12.5 45.3 0l64 64c12.5 12.5 12.5 32.8 0 45.3c-11.8 11.8-30.7 12.5-43.2 1.9l-9.5 9.5-48.8 48.8c-9.2 9.2-11.5 22.9-8.6 35.6c9.4 40.9-1.9 85.6-33.8 117.5L197.3 493.3c-25 25-65.5 25-90.5 0l-88-88c-25-25-25-65.5 0-90.5L180.2 153.3c31.9-31.9 76.6-43.1 117.5-33.8c12.6 2.9 26.4 .5 35.5-8.6l48.8-48.8 9.5-9.5c-10.6-12.6-10-31.4 1.9-43.2zM99.3 347.3l65.4 65.4c6.2 6.2 16.4 6.2 22.6 0l97.4-97.4c6.2-6.2 6.2-16.4 0-22.6l-65.4-65.4c-6.2-6.2-16.4-6.2-22.6 0L99.3 324.7c-6.2 6.2-6.2 16.4 0 22.6z"/></svg>
											      <?php } ?>
										    	</div>
										    	<div class="horeca-menu-items-nutritional-info" style="text-align:<?php echo esc_attr($badge_alignment)?>">
										    		<?php if ( 'yes' === $item['calories_toggle'] ) { ?>
										    			<?php echo esc_html($calories);  ?>Cal
										    		<?php } ?>
										    		<?php if ( 'yes' === $item['fat_toggle'] ) { ?>
										    			<?php echo esc_html($fat);  ?>Fat
										    		<?php } ?>
										    		<?php if ( 'yes' === $item['carbs_toggle'] ) { ?>
										    			<?php echo esc_html($carbs);  ?>Carb
										    		<?php } ?>
										    		<?php if ( 'yes' === $item['proteins_toggle'] ) { ?>
										    			<?php echo esc_html($proteins);  ?>Prot
										    		<?php } ?>
										    	</div>
									      </div>
									    </div>
									  <?php } ?>
						    <?php } ?>
							<?php } ?>
				    </div>
				  </section>
				</div>   
			</div>
    <?php
    return ob_get_clean();
}
add_shortcode('horeca-menu-items', 'horeca_menu_items_shortcode');