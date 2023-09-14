<?php
function horeca_about_me_shortcode($params, $content) {
    extract( shortcode_atts( 
      array(
        'settings'            => '',
        'about_us_image'        => '',
        'about_us_title'             =>'',
        'about_us_description'              =>'',
        'title_alignment'              =>'',
        'description_alignment'              =>'',
        'image_alignment'              =>'',
        'image_width'              =>'',
        'image_height'              =>'',
      ), $params ) );

    ob_start(); ?>

		<div class="horeca-about-me-container">
	    <div class="horeca-about-me-img-holder" style="text-align:<?php echo esc_attr($image_alignment); ?>">
        <?php if(!empty(esc_url( $about_us_image ))) { ?>
	        <img src="<?php echo esc_url( $about_us_image ) ?>" width="<?php echo esc_attr( $image_width ); ?>px" height="<?php echo esc_attr( $image_height ); ?>px">
        <?php } ?>
	    </div>
	    <div class="horeca-about-me-content">
        <div class="horeca-about-me-inner-content">
          <h2 class="horeca-about-me-title" style="text-align:<?php echo esc_attr($title_alignment); ?>">
            <?php echo esc_html( $about_us_title, 'horeca');  ?>
          </h2>
          <p class="horeca-about-me-description" style="text-align:<?php echo esc_attr($description_alignment); ?>">
            <?php echo esc_html( $about_us_description, 'horeca');  ?>
          </p>
        </div>
	    </div>
		</div>

    <?php
    return ob_get_clean();
}
add_shortcode('horeca-about-me', 'horeca_about_me_shortcode');