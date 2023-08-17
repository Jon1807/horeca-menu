<?php
function horeca_menu_items_shortcode($params, $content) {
    extract( shortcode_atts( 
      array(
        'settings'            => '',
        'tab1'        => '',
        'tab2'        => '',
        'tab3'        => '',
        'tab4'        => '',
        'tab_title1'  => '',
        'tab_title2'  => '',
        'tab_title3'  => '',
        'tab_title4'  => '',
        'version'     =>'',
        'columns'     =>'',
        'alignment'     =>'',
        'image_alignment'     =>'',
      ), $params ) );

    ob_start(); 

    $tab1 = unserialize(base64_decode($tab1)); 
    $tab2 = unserialize(base64_decode($tab2)); 
    $tab3 = unserialize(base64_decode($tab3)); 
    $tab4 = unserialize(base64_decode($tab4)); 
    $tab_title1 = unserialize(base64_decode($tab_title1)); 
    $tab_title2 = unserialize(base64_decode($tab_title2)); 
    $tab_title3 = unserialize(base64_decode($tab_title3)); 
    $tab_title4 = unserialize(base64_decode($tab_title4));
    ?>
			<div class="horeca-menu-items-container">
				<div class="horeca-menu-tab">
					<input id="horeca-menu-tab1" type="radio" name="pct" checked="checked">
					<input id="horeca-menu-tab2" type="radio" name="pct">
					<input id="horeca-menu-tab3" type="radio" name="pct">
					<input id="horeca-menu-tab4" type="radio" name="pct">
				  <nav class="horeca-menu-nav">
				    <ul class="horeca-menu-tab-list">
				      <li class="horeca-menu-tab horeca-menu-tab1 active">
				        <label class="horeca-menu-label" for="horeca-menu-tab1"><?php echo esc_html($tab_title1);  ?></label>
				      </li>
				      <li class="horeca-menu-tab horeca-menu-tab2">
				        <label class="horeca-menu-label" for="horeca-menu-tab2"><?php echo esc_html($tab_title2);  ?></label>
				      </li>
				      <li class="horeca-menu-tab horeca-menu-tab3">
				        <label class="horeca-menu-label" for="horeca-menu-tab3"><?php echo esc_html($tab_title3);  ?></label>
				      </li>
				      <li class="horeca-menu-tab horeca-menu-tab4">
				        <label class="horeca-menu-label" for="horeca-menu-tab4"><?php echo esc_html($tab_title4);  ?></label>
				      </li>
				    </ul>
				  </nav>
				  <section class="horeca-menu-section">
				    <div class="horeca-menu-tab1 horeca-menu-tab1-<?php echo esc_attr($version); ?>" style="-webkit-columns:<?php echo esc_attr($columns)?>">
				      <?php if ($tab1) {
								foreach ( $tab1 as $item ) {
									$item_type1 = $item['item_type1'];
									$card_color1 = $item['card_color1'];
									$dish_image1 = $item['dish_image1']['url'];
									$dish_title1 = $item['dish_title1'];
									$dish_price1 = $item['dish_price1'];
									$dish_description1 = $item['dish_description1'];
									$title_color1 = $item['title_color1'];
									$price_color1 = $item['price_color1'];
									$description_color1 = $item['description_color1'];
									$title_size1 = $item['title_size1'];
									$price_size1 = $item['price_size1'];
									$description_size1 = $item['description_size1'];
									$title_weight1 = $item['title_weight1'];
									$price_weight1 = $item['price_weight1'];
									$description_weight1 = $item['description_weight1'];
									$dish_promotion1 = $item['dish_promotion1'];
									$dish_toggle1 = $item['dish_toggle1'];	
									$dish_heading1 = $item['dish_heading1'];	
									$heading_size1 = $item['heading_size1'];	
									$heading_weight1 = $item['heading_weight1'];
									$heading_color1 = $item['heading_color1'];
									$image_dimensions1 = $item['image_dimensions1'];
									$image_width = $image_dimensions1['width'];
									$image_height = $image_dimensions1['height'];	
									$layout_display1 = $item['layout_display1'];							
			            ?>
				            <?php if($item_type1 == "heading"){ ?>
				            	<div class="horeca-menu-items-heading">
									 			<h2 class="horeca-menu-items-inner-heading" style="color:<?php echo esc_attr($heading_color1)?>;font-weight:<?php echo esc_attr($heading_weight1)?>;font-size:<?php echo esc_attr($heading_size1)?>px"><?php echo esc_html($dish_heading1);  ?> 
									 			</h2>
								 			</div>
								 		<?php } ?>
								 		<?php if($item_type1 == "product"){ ?>
				              <div class="horeca-menu-items-inner-container-<?php echo esc_attr($version); ?>" style="background-color:<?php echo esc_attr($card_color1)?>;text-align:<?php echo esc_attr($alignment)?>;display:<?php echo esc_attr($layout_display1)?>">
				              	<?php if(!empty($dish_image1)){?>
											    <div class="horeca-menu-items-img-holder" style="justify-content:<?php echo esc_attr($image_alignment)?>;">
											      <img src="<?php echo esc_url($dish_image1); ?>" alt="menu-items-image" width="<?php echo esc_attr( $image_width ); ?>px" height="<?php echo esc_attr( $image_height ); ?>px">
											    </div>
										 		<?php }?>
										 		<div class="horeca-menu-items-content">
										 			<div class="horeca-menu-items-upper-content" style="display:<?php echo esc_attr($layout_display1)?>">
									          <?php if(!empty($dish_title1)){ ?>
											        <div class="horeca-menu-items-title" style="color:<?php echo esc_attr($title_color1)?>;font-weight:<?php echo esc_attr($title_weight1)?>;font-size:<?php echo esc_attr($title_size1)?>px">
										          	<?php echo esc_html($dish_title1);  ?>
											        </div>
										        <?php } ?>
										        <?php if($version == 'v2'){ ?>
										       	 <div class="horeca-menu-items-line"></div>
										         <?php } ?>
										        <?php if(!empty($dish_price1)){ ?>
											        <div class="horeca-menu-items-price" style="color:<?php echo esc_attr($price_color1)?>;font-weight:<?php echo esc_attr($price_weight1)?>;font-size:<?php echo esc_attr($price_size1)?>px">
										          	<?php echo esc_html($dish_price1);  ?>
											        </div>
										        <?php } ?>
									      	</div> 
									      	<div class="horeca-menu-items-bottom-content">
										        <div class="horeca-menu-items-description" style="color:<?php echo esc_attr($description_color1)?>;font-weight:<?php echo esc_attr($description_weight1)?>;font-size:<?php echo esc_attr($description_size1)?>px">
									          	<?php echo esc_html($dish_description1);  ?>
										        </div>
										        <?php if ( 'yes' === $item['dish_toggle1'] ) { ?>
										        	<div class="horeca-menu-items-promotion">
										        		<span class="horeca-menu-items-label">
										        			<?php echo esc_html($dish_promotion1);  ?>
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
				    <div class="horeca-menu-tab2 horeca-menu-tab2-<?php echo esc_attr($version); ?>" style="-webkit-columns:<?php echo esc_attr($columns)?>">
				     <?php if ($tab2) {
								foreach ( $tab2 as $item2 ) {
									$item_type2 = $item2['item_type2'];
									$card_color2 = $item2['card_color2'];
									$dish_image2 = $item2['dish_image2']['url'];
									$dish_title2 = $item2['dish_title2'];
									$dish_price2 = $item2['dish_price2'];
									$dish_description2 = $item2['dish_description2'];
									$title_color2 = $item2['title_color2'];
									$price_color2 = $item2['price_color2'];
									$description_color2 = $item2['description_color2'];
									$title_size2 = $item2['title_size2'];
									$price_size2 = $item2['price_size2'];
									$description_size2 = $item2['description_size2'];
									$title_weight2 = $item2['title_weight2'];
									$price_weight2 = $item2['price_weight2'];
									$description_weight2 = $item2['description_weight2'];
									$dish_promotion2 = $item2['dish_promotion2'];
									$dish_toggle2 = $item2['dish_toggle2'];
									$dish_heading2 = $item2['dish_heading2'];
									$heading_size2 = $item2['heading_size2'];	
									$heading_weight2 = $item2['heading_weight2'];
									$heading_color2 = $item2['heading_color2'];
									$image_dimensions2 = $item2['image_dimensions2'];
									$image_width2 = $image_dimensions2['width'];
									$image_height2 = $image_dimensions2['height'];		
									$layout_display2 = $item2['layout_display2'];	
			            ?>
			            	<?php if($item_type2 == "heading"){ ?>
			            		<div class="horeca-menu-items-heading">
					            	<h2 class="horeca-menu-items-inner-heading" style="color:<?php echo esc_attr($heading_color2)?>;font-weight:<?php echo esc_attr($heading_weight2)?>;font-size:<?php echo esc_attr($heading_size2)?>px"><?php echo esc_html($dish_heading2);  ?> 
					            	</h2>
				           		</div>
			            	<?php }?>
			            	<?php if($item_type2 == "product"){ ?>
				              <div class="horeca-menu-items-inner-container-<?php echo esc_attr($version); ?>" style="background-color:<?php echo esc_attr($card_color2)?>;text-align:<?php echo esc_attr($alignment)?>;display:<?php echo esc_attr($layout_display2)?>">
				              	<?php if(!empty($dish_image2)){?>
											    <div class="horeca-menu-items-img-holder">
											      <img src="<?php echo esc_url($dish_image2); ?>" alt="menu-items-image" width="<?php echo esc_attr( $image_width2 ); ?>px" height="<?php echo esc_attr( $image_height2 ); ?>px">
											    </div>
										 		<?php }?>
										 		<div class="horeca-menu-items-content">
										 			<div class="horeca-menu-items-upper-content" style="display:<?php echo esc_attr($layout_display2)?>">
									          <?php if(!empty($dish_title2)){ ?>
											        <div class="horeca-menu-items-title" style="color:<?php echo esc_attr($title_color2)?>;font-weight:<?php echo esc_attr($title_weight2)?>;font-size:<?php echo esc_attr($title_size2)?>px">
										          	<?php echo esc_html($dish_title2);  ?>
											        </div>
										        <?php } ?>
										        <?php if($version == 'v2'){ ?>
										       	 <div class="horeca-menu-items-line"></div>
										         <?php } ?>
										        <?php if(!empty($dish_price2)){ ?>
											        <div class="horeca-menu-items-price" style="color:<?php echo esc_attr($price_color2)?>;font-weight:<?php echo esc_attr($price_weight2)?>;font-size:<?php echo esc_attr($price_size2)?>px">
										          	<?php echo esc_html($dish_price2);  ?>
											        </div>
										        <?php } ?>
									      	</div>
									      	<div class="horeca-menu-items-bottom-content">
										        <div class="horeca-menu-items-description" style="color:<?php echo esc_attr($description_color2)?>;font-weight:<?php echo esc_attr($description_weight2)?>;font-size:<?php echo esc_attr($description_size2)?>px">
									          	<?php echo esc_html($dish_description2);  ?>
										        </div>
										         <?php if ( 'yes' === $item2['dish_toggle2'] ) { ?>
										        	<div class="horeca-menu-items-promotion">
										        		<span class="horeca-menu-items-label">
										        			<?php echo esc_html($dish_promotion2);  ?>
										        		</span>
										        	</div>
										        <?php } ?>
										      </div>
									      </div>
									    </div>
									  <?php }?>
						      <?php } ?>
								<?php } ?>
				    </div>
				    <div class="horeca-menu-tab3 horeca-menu-tab3-<?php echo esc_attr($version); ?>" style="-webkit-columns:<?php echo esc_attr($columns)?>">
				      <?php if ($tab3) {
								foreach ( $tab3 as $item3 ) {
									$item_type3 = $item3['item_type3'];
									$card_color3 = $item3['card_color3'];
									$dish_image3 = $item3['dish_image3']['url'];
									$dish_title3 = $item3['dish_title3'];
									$dish_price3 = $item3['dish_price3'];
									$dish_description3 = $item3['dish_description3'];
									$title_color3 = $item3['title_color3'];
									$price_color3 = $item3['price_color3'];
									$description_color3 = $item3['description_color3'];
									$title_size3 = $item3['title_size3'];
									$price_size3 = $item3['price_size3'];
									$description_size3 = $item3['description_size3'];
									$title_weight3 = $item3['title_weight3'];
									$price_weight3 = $item3['price_weight3'];
									$description_weight3 = $item3['description_weight3'];
									$dish_promotion3 = $item3['dish_promotion3'];
									$dish_toggle3 = $item3['dish_toggle3'];
									$dish_heading3 = $item3['dish_heading3'];
									$heading_size3 = $item3['heading_size3'];	
									$heading_weight3 = $item3['heading_weight3'];
									$heading_color3 = $item3['heading_color3'];
									$image_dimensions3 = $item3['image_dimensions3'];
									$image_width3 = $image_dimensions2['width'];
									$image_height3 = $image_dimensions2['height'];	
									$layout_display3 = $item3['layout_display3'];	
			            ?>
			            	<?php if($item_type3 == "heading"){ ?>
			            		<div class="horeca-menu-items-heading">
					            	<h2 class="horeca-menu-items-inner-heading" style="color:<?php echo esc_attr($heading_color3)?>;font-weight:<?php echo esc_attr($heading_weight3)?>;font-size:<?php echo esc_attr($heading_size3)?>px"><?php echo esc_html($dish_heading3);  ?> 
					            	</h2>
					            </div>
			            	<?php }?>
			            	<?php if($item_type3 == "product"){ ?>
				              <div class="horeca-menu-items-inner-container-<?php echo esc_attr($version); ?>" style="background-color:<?php echo esc_attr($card_color3)?>;text-align:<?php echo esc_attr($alignment)?>;display:<?php echo esc_attr($layout_display3)?>">
				              	<?php if(!empty($dish_image3)){?>
											    <div class="horeca-menu-items-img-holder">
											      <img src="<?php echo esc_url($dish_image3); ?>" alt="menu-items-image" width="<?php echo esc_attr( $image_width3 ); ?>px" height="<?php echo esc_attr( $image_height3 ); ?>px">
											    </div>
										 		<?php }?>
										 		<div class="horeca-menu-items-content">
										 			<div class="horeca-menu-items-upper-content" style="display:<?php echo esc_attr($layout_display3)?>">
									          <?php if(!empty($dish_title3)){ ?>
											        <div class="horeca-menu-items-title" style="color:<?php echo esc_attr($title_color3)?>;font-weight:<?php echo esc_attr($title_weight3)?>;font-size:<?php echo esc_attr($title_size3)?>px">
										          	<?php echo esc_html($dish_title3);  ?>
											        </div>
										        <?php } ?>
										        <?php if($version == 'v2'){ ?>
										       	 <div class="horeca-menu-items-line"></div>
										         <?php } ?>
										        <?php if(!empty($dish_price3)){ ?>
											        <div class="horeca-menu-items-price" style="color:<?php echo esc_attr($price_color3)?>;font-weight:<?php echo esc_attr($price_weight3)?>;font-size:<?php echo esc_attr($price_size3)?>px">
										          	<?php echo esc_html($dish_price3);  ?>
											        </div>
										        <?php } ?>
									      	</div>
									      	<div class="horeca-menu-items-bottom-content">
										        <div class="horeca-menu-items-description" style="color:<?php echo esc_attr($description_color3)?>;font-weight:<?php echo esc_attr($description_weight3)?>;font-size:<?php echo esc_attr($description_size3)?>px">
									          	<?php echo esc_html($dish_description3);  ?>
										        </div>
										        <?php if ( 'yes' === $item3['dish_toggle3'] ) { ?>
										        	<div class="horeca-menu-items-promotion">
										        		<span class="horeca-menu-items-label">
										        			<?php echo esc_html($dish_promotion3);  ?>
										        		</span>
										        	</div>
										        <?php } ?>
										      </div>
									      </div>
									    </div>
									  <?php }?>
						      <?php } ?>
								<?php } ?>
				    </div>
				    <div class="horeca-menu-tab4 horeca-menu-tab4-<?php echo esc_attr($version); ?>" style="-webkit-columns:<?php echo esc_attr($columns)?>">
				      <?php if ($tab4) {
								foreach ( $tab4 as $item4 ) {
									$item_type4 = $item4['item_type4'];
									$card_color4 = $item4['card_color4'];
									$dish_image4 = $item4['dish_image4']['url'];
									$dish_title4 = $item4['dish_title4'];
									$dish_price4 = $item4['dish_price4'];
									$dish_description4 = $item4['dish_description4'];
									$title_color4 = $item4['title_color4'];
									$price_color4 = $item4['price_color4'];
									$description_color4 = $item4['description_color4'];
									$title_size4 = $item4['title_size4'];
									$price_size4 = $item4['price_size4'];
									$description_size4 = $item4['description_size4'];
									$title_weight4 = $item4['title_weight4'];
									$price_weight4 = $item4['price_weight4'];
									$description_weight4 = $item4['description_weight4'];
									$dish_promotion4 = $item4['dish_promotion4'];
									$dish_toggle4 = $item4['dish_toggle4'];
									$dish_heading4 = $item4['dish_heading4'];
									$heading_size4 = $item4['heading_size4'];	
									$heading_weight4 = $item4['heading_weight4'];
									$heading_color4 = $item4['heading_color4'];	
									$image_dimensions4 = $item4['image_dimensions4'];
									$image_width4 = $image_dimensions4['width'];
									$image_height4 = $image_dimensions4['height'];	
									$layout_display4 = $item4['layout_display4'];	
			            ?>
			            	<?php if($item_type4 == "heading"){ ?>
			            		<div class="horeca-menu-items-heading">
					            	<h2 class="horeca-menu-items-inner-heading" style="color:<?php echo esc_attr($heading_color4)?>;font-weight:<?php echo esc_attr($heading_weight4)?>;font-size:<?php echo esc_attr($heading_size4)?>px"><?php echo esc_html($dish_heading4);  ?> 
					            	</h2>
				            	</div>
				            <?php }?>
				            <?php if($item_type4 == "product"){ ?>
				              <div class="horeca-menu-items-inner-container-<?php echo esc_attr($version); ?>" style="background-color:<?php echo esc_attr($card_color4)?>;text-align:<?php echo esc_attr($alignment)?>;display:<?php echo esc_attr($layout_display4)?>">
				              	<?php if(!empty($dish_image4)){?>
											    <div class="horeca-menu-items-img-holder">
											      <img src="<?php echo esc_url($dish_image4); ?>" alt="menu-items-image" width="<?php echo esc_attr( $image_width4 ); ?>px" height="<?php echo esc_attr( $image_height4 ); ?>px">
											    </div>
										 		<?php }?>
										 		<div class="horeca-menu-items-content">
										 			<div class="horeca-menu-items-upper-content" style="display:<?php echo esc_attr($layout_display4)?>">
									          <?php if(!empty($dish_title4)){ ?>
											        <div class="horeca-menu-items-title" style="color:<?php echo esc_attr($title_color4)?>;font-weight:<?php echo esc_attr($title_weight4)?>;font-size:<?php echo esc_attr($title_size4)?>px">
										          	<?php echo esc_html($dish_title4);  ?>
											        </div>
										        <?php } ?>
										        <?php if($version == 'v2'){ ?>
										       	 <div class="horeca-menu-items-line"></div>
										         <?php } ?>
										        <?php if(!empty($dish_price4)){ ?>
											        <div class="horeca-menu-items-price" style="color:<?php echo esc_attr($price_color4)?>;font-weight:<?php echo esc_attr($price_weight4)?>;font-size:<?php echo esc_attr($price_size4)?>px">
										          	<?php echo esc_html($dish_price4);  ?>
											        </div>
										        <?php } ?>
									      	</div>
									        <div class="horeca-menu-items-bottom-content">
										        <div class="horeca-menu-items-description" style="color:<?php echo esc_attr($description_color4)?>;font-weight:<?php echo esc_attr($description_weight4)?>;font-size:<?php echo esc_attr($description_size4)?>px">
									          	<?php echo esc_html($dish_description4);  ?>
										        </div>
										        <?php if ( 'yes' === $item4['dish_toggle4'] ) { ?>
										        	<div class="horeca-menu-items-promotion">
										        		<span class="horeca-menu-items-label">
										        			<?php echo esc_html($dish_promotion4);  ?>
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
	<?php //var_dump($dish_title); ?>
    <?php
    return ob_get_clean();
}
add_shortcode('horeca-menu-items', 'horeca_menu_items_shortcode');