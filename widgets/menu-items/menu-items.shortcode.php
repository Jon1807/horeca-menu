<?php
function horeca_menu_items_shortcode($params, $content) {
    extract( shortcode_atts( 
      array(
        'settings'            => '',
        'tab1'        => '',
        'version'     =>'',
        'columns'     =>'',
        'alignment'     =>'',
        'image_alignment'     =>'',
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
									$title_color = $item['title_color'];
									$price_color = $item['price_color'];
									$description_color = $item['description_color'];
									$title_size = $item['title_size'];
									$price_size = $item['price_size'];
									$description_size = $item['description_size'];
									$title_weight = $item['title_weight'];
									$price_weight = $item['price_weight'];
									$description_weight = $item['description_weight'];
									$dish_promotion = $item['dish_promotion'];
									$dish_toggle = $item['dish_toggle'];	
									$dish_heading = $item['dish_heading'];	
									$heading_size = $item['heading_size'];	
									$heading_weight = $item['heading_weight'];
									$heading_color = $item['heading_color'];
									$image_dimensions = $item['image_dimensions'];
									$image_width = $image_dimensions['width'];
									$image_height = $image_dimensions['height'];	
									$layout_display = $item['layout_display'];							
			            ?>
				            <?php if($item_type == "heading"){ ?>
				            	<div class="horeca-menu-items-heading">
									 			<h2 class="horeca-menu-items-inner-heading" style="color:<?php echo esc_attr($heading_color)?>;font-weight:<?php echo esc_attr($heading_weight)?>;font-size:<?php echo esc_attr($heading_size)?>px"><?php echo esc_html($dish_heading);  ?> 
									 			</h2>
								 			</div>
								 		<?php } ?>
								 		<?php if($item_type == "product"){ ?>
				              <div class="horeca-menu-items-inner-container-<?php echo esc_attr($version); ?>" style="background-color:<?php echo esc_attr($card_color)?>;text-align:<?php echo esc_attr($alignment)?>;display:<?php echo esc_attr($layout_display)?>">
				              	<?php if(!empty($dish_image)){?>
											    <div class="horeca-menu-items-img-holder" style="justify-content:<?php echo esc_attr($image_alignment)?>;">
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