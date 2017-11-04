<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/creativita-digitale
 * @since      1.0.0
 *
 * @package    Righez_Theme_Powerpack
 * @subpackage Righez_Theme_Powerpack/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Righez_Theme_Powerpack
 * @subpackage Righez_Theme_Powerpack/includes
 * @author     Alex Righetto <a.righetto@creativitadigitale.com>
 */
class Righez_Theme_Powerpack_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'righez-theme-powerpack',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
