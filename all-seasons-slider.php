<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * Dashboard. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           All_Seasons_Slider
 *
 * @wordpress-plugin
 * Plugin Name:       All Seasons Slider
 * Plugin URI:        https://github.com/alastair38/allseasons
 * Description:       Basic slider built with Swiper.js to work in all browsers IE7+
 * Version:           1.0.1
 * Author:            Alastair
 * Author URI:        http://alastaircox.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       all-seasons-slider
 * GitHub Plugin URI: https://github.com/alastair38/allseasons
   GitHub Branch:     master
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-all-seasons-slider-activator.php
 */
function activate_all_seasons_slider() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-all-seasons-slider-activator.php';
	All_Seasons_Slider_Activator::activate();
}


add_action('wp_print_scripts', 'ass_register_scripts');
add_action('wp_print_styles', 'ass_register_styles');

function ass_register_scripts() {
	if (!is_admin()) {
		// register
		wp_register_script('ass_slider_script', plugins_url('allseasons.js', __FILE__), array( 'jquery' ),true);
		wp_register_script('ass_script', plugins_url('script.js', __FILE__),array('ass_slider_script'),true);

		// enqueue
	wp_enqueue_script('ass_slider_script');
	wp_enqueue_script('ass_script');
	}
	add_action('wp_enqueue_scripts', 'ass_register_scripts');
}

function ass_register_styles() {
	// register
	wp_register_style('ass_styles', plugins_url('allseasons.css', __FILE__));

	// enqueue
	wp_enqueue_style('ass_styles');
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-all-seasons-slider-deactivator.php
 */
function deactivate_all_seasons_slider() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-all-seasons-slider-deactivator.php';
	All_Seasons_Slider_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_all_seasons_slider' );
register_deactivation_hook( __FILE__, 'deactivate_all_seasons_slider' );

/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-all-seasons-slider.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_all_seasons_slider() {

	$plugin = new All_Seasons_Slider();
	$plugin->run();

}
run_all_seasons_slider();
