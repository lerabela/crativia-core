<?php

namespace Crativia\Views;
use Crativia\Views\Crativia_Template_Loader;

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) { exit; }

/**
 * Crativia Theme Options Class
 * 
 * @since 	1.0.0
 */
class Crativia_Theme_Options{

	/**
	 * Page slug - slug used for enqueue functions
     * 
	 * @var     string
	 * @access  private
	 * @since   1.0.0
	 */    
    private static $slug = 'crativia-options-'; 

    /**
     * Register - Method registers a theme menu item
     * 
     * @since 1.0.0
     */
    public static function register(){

        // Add the menu item and page
        $page_title = "Crativia Theme Options";
        $menu_title = "Theme Settings";
        $capability = "manage_options";
        $slug = "theme_options";
        $callback = __CLASS__."::build";
        $icon = "dashicons-admin-plugins";
        $position = 100;
        add_menu_page( $page_title, $menu_title, $capability, $slug, $callback, $icon, $position );

    }

    /**
     * Build - Method build the theme settings page
     * 
     * @since 1.0.0
     */
    public static function build(){

        $template_loader = Crativia_Template_Loader::getInstance();
        // load template
        $template_loader->get_template_part( "theme/options/dashboard" ); 

    }

    /**
     * Enqueue Scripts - Method will enqueue plugin scripts
     * 
     * @since 1.0.0
     */
    public static function enqueue_scripts(){

        wp_enqueue_script( self::$slug . "scripts", CRATIVIA_ASSETS."/js/crativia.js", array(), CRATIVIA_VERSION, true );

    }

    /**
     * Enqueue Styles - Method will enqueue plugin styles
     * 
     * @since 1.0.0
     */
    public static function enqueue_styles(){

        wp_enqueue_style( self::$slug . "style", CRATIVIA_ASSETS."/css/crativia.css", array(), CRATIVIA_VERSION, "all" );

    }

}
