<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    All_Seasons_Slider
 * @subpackage All_Seasons_Slider/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the dashboard-specific stylesheet and JavaScript.
 *
 * @package    All_Seasons_Slider
 * @subpackage All_Seasons_Slider/public
 * @author     Alastair <alastair@alastaircox.com>
 */
class All_Seasons_Slider_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $all_seasons_slider    The ID of this plugin.
	 */
	private $all_seasons_slider;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @var      string    $all_seasons_slider       The name of the plugin.
	 * @var      string    $version    The version of this plugin.
	 */
	public function __construct( $all_seasons_slider, $version ) {

		$this->all_seasons_slider = $all_seasons_slider;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in All_Seasons_Slider_Public_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The All_Seasons_Slider_Public_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->all_seasons_slider, plugin_dir_url( __FILE__ ) . 'css/all-seasons-slider-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in All_Seasons_Slider_Public_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The All_Seasons_Slider_Public_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->all_seasons_slider, plugin_dir_url( __FILE__ ) . 'js/all-seasons-slider-public.js', array( 'jquery' ), $this->version, false );

	}

}
