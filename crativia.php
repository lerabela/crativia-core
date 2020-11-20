<?php
/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.crativia.co.za/wp
 * @since             1.0.0
 * @package           Crativia
 *
 * @wordpress-plugin
 * Plugin Name:       Crativia Core
 * Plugin URI:        https://www.crativia.co.za
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Crativia (Pty) Ltd
 * Author URI:        https://www.crativia.co.za/wp
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       crativia
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( "CRATIVIA_VERSION", "1.0.0" );
define( "CRATIVIA_TEXT_DOMAIN", "crativia" );
define( "CRATIVIA_PLUGIN_DIR", plugin_dir_path( __FILE__ ) );
define( "CRATIVIA_ASSETS", plugin_dir_url( __FILE__ ) . "resources" );

/**
 * Composer Autoload
 */
require_once plugin_dir_path(__FILE__) . "/vendor/autoload.php";

/**
 * Plugin activation
 */
register_activation_hook( __FILE__, "Crativia\Crativia_Plugin_Core::activate" );

/**
 * Plugin deactivation
 */
register_deactivation_hook( __FILE__, "Crativia\Crativia_Plugin_Core::deactivate" );

/**
 * Add theme options page
 */
add_action( "admin_menu", "Crativia\Views\Crativia_Theme_Options::register" );

/**
 * Add Text Domain
 */
add_action("plugins_loaded", "Crativia\Crativia_Plugin_Core::load_text_domain");

/**
 * Enqueue Scripts
 */
add_action("admin_enqueue_scripts","Crativia\Crativia_Plugin_Core::enqueue_scripts");

/**
 * Enqueue Styles
 */
add_action("admin_enqueue_scripts","Crativia\Crativia_Plugin_Core::enqueue_styles");


