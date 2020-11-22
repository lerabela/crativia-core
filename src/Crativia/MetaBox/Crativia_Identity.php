<?php

namespace Crativia\MetaBox;
use Crativia\Views\Crativia_Template_Loader;

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) { exit; }

/**
 * Crativia Identity Settings 
 * 
 * @since 	1.0.0
 */
class Crativia_Identity implements Metabox{

	/**
	 * Page slug - slug used for enqueue functions
     * 
	 * @var     string
	 * @access  private
	 * @since   1.0.0
	 */    
    private static $slug = 'metabox-identity-';     

    /**
     * Register - Method registers a metabox actions
     * 
     * @since 1.0.0
     */
    public static function register(){

        $screen = get_current_screen();

        add_meta_box(
            "crativia_identity",         /* Meta Box ID */
            "Theme SEO (Identity)",     /* Title */
            __CLASS__."::build",  /* Function Callback */
            $screen->id,                /* Screen: Our Settings Page */
            "side",                    /* Context */
            "high"                     /* Priority */
        );

    }

    /**
     * Build - Method build the identity metabox
     * 
     * @since 1.0.0
     */
    public static function build(){

        $template_loader = Crativia_Template_Loader::getInstance();
        // load template
        $template_loader->get_template_part( "metabox/seo_identity" ); 

    }


}