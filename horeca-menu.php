<?php

/**
 * Plugin Name: Horeca Menu
 * Description: Food Menu Plugin for Hotels, Restaurants and Coffee Shops..
 * Plugin URI:  http://horeca.modeltheme.com/
 * Version:     1.0.0
 * Author:      Modeltheme
 * Author URI:  http://horeca.modeltheme.com/
 * Text Domain: horeca
 *
 * Elementor tested up to: 3.13.0
 * Elementor Pro tested up to: 3.13.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Register Widgets.
 *
 * Include widget file and register widget class.
 *
 * @since 1.0.0
 * @param \Elementor\Widgets_Manager $widgets_manager Elementor widgets manager.
 * @return void
 */

function horeca_custom_widgets( $widgets_manager ) {

    require_once( __DIR__ . '/widgets/social-media-links/social-media-links.elementor.php' );
    require_once( __DIR__ . '/widgets/menu-items/menu-items.elementor.php' );
    
    $widgets_manager->register( new \Horeca_Social_Media_Links() );
    $widgets_manager->register( new \Horeca_Menu_Items() );
}
add_action( 'elementor/widgets/register', 'horeca_custom_widgets' );

function horeca_bio_links_styles() {
    wp_enqueue_style( 'horeca-menu-items', plugins_url( 'assets/css/menu-items.css', __FILE__ ), array(), '1.0.0', 'all' );
    wp_enqueue_style( 'horeca-social-media-links', plugins_url( 'assets/css/social-media-links.css', __FILE__ ), array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootstrap', plugins_url( 'assets/css/bootstrap.min.css', __FILE__ ), array(), '1.0.0', 'all' );
    wp_enqueue_script( 'gianniAccordion', plugins_url( 'assets/js/gianniAccordion.min.js', __FILE__), array( 'jquery' ), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'horeca_bio_links_styles' );

/**
||-> Function: LOAD PLUGIN TEXTDOMAIN
*/
function horeca_load_textdomain(){
    $domain = 'horeca';
    $locale = apply_filters( 'plugin_locale', get_locale(), $domain );

    load_textdomain( $domain, trailingslashit( WP_LANG_DIR ) . $domain . '/' . $domain . '-' . $locale . '.mo' );
    load_plugin_textdomain( $domain, FALSE, basename( plugin_dir_path( dirname( __FILE__ ) ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'horeca_load_textdomain' );

require_once( __DIR__ . '/widgets/social-media-links/social-media-links.shortcode.php' );
require_once( __DIR__ . '/widgets/menu-items/menu-items.shortcode.php' );