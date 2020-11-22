<?php

namespace Crativia\Views;

/**
 * Template loader for PW Sample Plugin.
 *
 * Only need to specify class listings here.
 * 
 * Make class a singleton
 *
 */
class Crativia_Template_Loader extends \Gamajo_Template_Loader{

	/**
	 * Prefix for filter names.
	 *
	 * @since 1.0.0
	 * @type string
	 */	
	private static $instance;

	/**
	 * Prefix for filter names.
	 *
	 * @since 1.0.0
	 * @type string
	 */
	protected $filter_prefix = "crativia_core";
 
	/**
	 * Directory name where custom templates for this plugin should be found in the theme.
	 *
	 * @since 1.0.0
	 * @type string
	 */
	protected $theme_template_directory = "crativia-core";
 
	/**
	 * Reference to the root directory path of this plugin.
	 *
	 * @since 1.0.0
	 * @type string
	 */
	protected $plugin_directory = CRATIVIA_PLUGIN_DIR;

	/**
	 * Directory name where templates are found in this plugin.
	 *
	 * Can either be a defined constant, or a relative reference from where the subclass lives.
	 *
	 * e.g. 'templates' or 'includes/templates', etc.
	 *
	 * @since 1.1.0
	 *
	 * @var string
	 */
	protected $plugin_template_directory = "resources/templates";    

    /**
     * The Singleton's constructor should always be private to prevent direct
     * construction calls with the `new` operator.
     */
    protected function __construct() { }

    /**
     * Singletons should not be cloneable.
     */
    protected function __clone() { }

    /**
     * Singletons should not be restorable from strings.
     */
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

	/**
	 * Api to get instance
	 * 
	 * @since 1.0.0
	 */
	public static function getInstance(): Crativia_Template_Loader{

		try{

			// if is set then return instance
			if( isset(self::$instance)){

				return self::$instance;

			}

			// create instance
			self::$instance = new Crativia_Template_Loader();

			return self::$instance;			

		}catch(\Exception $e){

			//TODO error logging to lib
			exit($e->getMessage());

		}

	}


}