<?php
/**
 *
 * @since             1.0.0
 * @package           Conch
 *
 * @wordpress-plugin
 * Plugin Name:       Conch
 * Plugin URI:        https://github.com/Spotfin/Conch
 * Description:       WP Plugin Starter Shell
 * Version:           1.0.0
 * Author:            Spotfin Creative
 * Author URI:        https://spotfincreative.com
 * License:           Unlicense
 * License URI:       https://unlicense.org
 * Text Domain:       conch
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Current plugin version.
 * @todo auto update for releases
 */
define( 'CONCH_VERSION', '1.0.0' );

/**
 * Core plugin class used to define any 
 * admin-specific hooks, and public-facing site hooks.
 * 
 * @since 1.0.0
 */
require plugin_dir_path( __FILE__ ) . 'inc/class-conch.php';

/**
 * Fire up the plugin
 *
 * @since 1.0.0
 */
function run_conch() {

	$plugin = new Conch();
	$plugin->run();

}
run_conch();
