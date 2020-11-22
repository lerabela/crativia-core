<?php

namespace Crativia\MetaBox;
use Crativia\Views\Crativia_Template_Loader;

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) { exit; }

/**
 * Crativia Core Settings 
 * 
 * @since 	1.0.0
 */
class Crativia_Core_Settings implements Metabox{

    /**
     * Register - Method registers a metabox actions
     * 
     * @since 1.0.0
     */    
    public static function register(){

        $screen = get_current_screen();

        add_meta_box(
            "crativia_core_settings",         /* Meta Box ID */
            "Theme Settings",     /* Title */
            __CLASS__."::build",  /* Function Callback */
            $screen->id,                /* Screen: Our Settings Page */
            "normal",                    /* Context */
            "high"                     /* Priority */
        );

    }

    /**
     * Build - Method build the core settings metabox UI
     * 
     * @since 1.0.0
     */    
    public static function build(){

        $template_loader = Crativia_Template_Loader::getInstance();
        // load template
        $template_loader->get_template_part( "metabox/core_settings" ); 

    }

}