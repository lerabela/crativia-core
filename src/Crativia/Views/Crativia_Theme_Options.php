<?php
namespace Crativia\Views;
use Crativia\Views\Crativia_Template_Loader;

class Crativia_Theme_Options{

    public static function register(){

        // Add the menu item and page
        $page_title = "Crativia Theme Options";
        $menu_title = 'Theme Options';
        $capability = 'manage_options';
        $slug = 'theme_options';
        $callback = __CLASS__."::build";
        $icon = 'dashicons-admin-plugins';
        $position = 100;
        add_menu_page( $page_title, $menu_title, $capability, $slug, $callback, $icon, $position );

    }

    public static function build(){

        $template_loader = new Crativia_Template_Loader;

        // load template
        $template_loader->get_template_part( 'theme/options/dashboard' ); 

    }

}
