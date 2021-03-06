<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.fromdoppler.com/
 * @since      1.0.0
 *
 * @package    Doppler_For_Learnpress
 * @subpackage Doppler_For_Learnpress/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Doppler_For_Learnpress
 * @subpackage Doppler_For_Learnpress/public
 * @author     Doppler LLC <info@fromdoppler.com>
 */
class Doppler_For_Learnpress_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 * TODO: remove if not necessary.
	 * @since    1.0.0
	 */
	public function enqueue_styles() {
	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 * TODO: remove if not necessary.
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {
    }
    
    public function dplr_after_course_finished( $course_id, $user_id, $return ) {
        echo 'im in public';
		var_dump($course_id);
		var_dump($user_id);
		var_dump($return);
		die();
	}

}
