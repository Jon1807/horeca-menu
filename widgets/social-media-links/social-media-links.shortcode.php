<?php
if( !function_exists('horeca_social_media_links_shortcode') ) {
	function horeca_social_media_links_shortcode($params, $content) {
	    extract( shortcode_atts( 
	      array(
	        'settings'            => '',
	        'list'        => '',
	        'icons_alignment'             =>'',
	      ), $params ) );

	    ob_start(); 

	    $list = unserialize(base64_decode($list)); 
	    ?>

			<div class="horeca-social-media-links-alignment" style="text-align:<?php echo esc_attr($icons_alignment); ?>">
				<div class="horeca-social-media-links-container">
			    <?php if ($list) { ?>
						<?php  foreach ( $list as $item ) {
			        $link = $item['link']['url'];
	            ?>   
							<div class="horeca-social-media-links-inner-container">
								<a class="horeca-icon-link" target="_blank" href="<?php echo esc_url($link); ?>">
	              	<?php if ( class_exists('Elementor\Core\Admin\Admin') ) { ?>
	          				<?php \Elementor\Icons_Manager::render_icon( $item['icon'], [ 'aria-hidden' => 'true' ] ); ?>
	              	<?php }else{ ?>
	        					<i class="<?php echo esc_attr($item['icon']['value']); ?>"></i>
	              	<?php } ?>
								</a>
							</div>
						<?php } ?>
					<?php } ?>
				</div>
			</div>

	    <?php
	    return ob_get_clean();
	}
	add_shortcode('horeca-social-media-links', 'horeca_social_media_links_shortcode');
}