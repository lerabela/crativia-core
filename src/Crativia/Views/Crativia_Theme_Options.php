<?php
namespace Crativia\Views;

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

        echo "Hello World";

    }

}
