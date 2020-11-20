<?php

namespace Crativia; 
use Crativia\Views\Crativia_Theme_Options;

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) { exit; }

/**
 * Crativia Plugin Core Class
 * 
 * @since 	1.0.0
 */
class Crativia_Plugin_Core{

	/**
	 * Activiate - method provide plguin activation logic
     * 
	 * @since 	1.0.0
	 */
    public static function activate(){

    }

    /**
     * Deactivation - Method provide plugin cleanup logic, when deactivation is requested 
     * 
     * @since 1.0.0
     */
    public static function deactivate(){

    }

    /**
     * Load Text Domain - Method loads text domain logic 
     * 
     * @since 1.0.0
     */
    public static function load_text_domain(){

       load_plugin_textdomain(CRATIVIA_TEXT_DOMAIN, false, dirname( plugin_basename( CRATIVIA_PLUGIN_DIR ) ) . "/languages/");

    }

    /**
     * Enqueue Scripts - Method will enqueue plugin scripts
     * 
     * @since 1.0.0
     */
    public static function enqueue_scripts(){

        // load dashboard scripts
        Crativia_Theme_Options::enqueue_scripts();       

    }

    /**
     * Enqueue Styles - Method will enqueue plugin styles
     * 
     * @since 1.0.0 
     */
    public static function enqueue_styles(){

        // load dashboard styles
        Crativia_Theme_Options::enqueue_styles();

    }


}