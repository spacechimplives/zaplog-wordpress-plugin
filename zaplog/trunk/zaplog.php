<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * Dashboard. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           zaplog
 *
 * @wordpress-plugin
 * Plugin Name:       Zaplog Open Source Journalism
 * Plugin URI:        https://github.com/patricksavalle/zaplog-wordpress-plugin
 * Description:       Turns Wordpress into a open source journalism platform
 * Version:           1.0.0
 * Author:            patricksavalle.com
 * Author URI:        http://patricksavalle.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       zaplog
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/zaplog-activator.php
 */
function activate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/zaplog-activator.php';
	Zaplog_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/zaplog-deactivator.php
 */
function deactivate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/zaplog-deactivator.php';
	Zaplog_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_zaplog' );
register_deactivation_hook( __FILE__, 'deactivate_zaplog' );

/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/zaplog.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_plugin_name() {

	$plugin = new Zaplog();
	$plugin->run();

}
run_plugin_name();
