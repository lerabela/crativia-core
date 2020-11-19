<?php

namespace Crativia; 

class Crativia_Plugin_Core{

    /**
     * Method is reposible for plugin activation
     */
    public static function activate(){

    }

    /**
     * Method provide plugin cleanup logic, when deactivation is requested 
     */
    public static function deactivate(){

    }

    /**
     * Text domain 
     */
    public static function load_text_domain(){

       // load_plugin_textdomain(CRATIVIA_TEXT_DOMAIN, false, dirname( plugin_basename( CRATIVIA_PLUGIN_DIR ) ) . "/languages/");

    }


}