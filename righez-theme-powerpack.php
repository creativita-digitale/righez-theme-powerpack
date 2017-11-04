<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/creativita-digitale
 * @since             1.0.0
 * @package           Righez_Theme_Powerpack
 *
 * @wordpress-plugin
 * Plugin Name:       Theme Powerpack
 * Plugin URI:        https://github.com/creativita-digitale/righez-theme-powerpack
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Alex Righetto
 * Author URI:        https://github.com/creativita-digitale
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       righez-theme-powerpack
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-righez-theme-powerpack-activator.php
 */
function activate_righez_theme_powerpack() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-righez-theme-powerpack-activator.php';
	Righez_Theme_Powerpack_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-righez-theme-powerpack-deactivator.php
 */
function deactivate_righez_theme_powerpack() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-righez-theme-powerpack-deactivator.php';
	Righez_Theme_Powerpack_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_righez_theme_powerpack' );
register_deactivation_hook( __FILE__, 'deactivate_righez_theme_powerpack' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-righez-theme-powerpack.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_righez_theme_powerpack() {

	$plugin = new Righez_Theme_Powerpack();
	$plugin->run();

}
run_righez_theme_powerpack();
