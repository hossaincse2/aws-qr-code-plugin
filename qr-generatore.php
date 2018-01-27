<?php
/**
 * Plugin Name: AWS QR Code
 * Plugin URI: https://puredevs.com
 * Description: This qr code generator use for product and personal info
 * Author: Hossain
 * Version: 1.0.0
 * Text Domain: aws-qr-code
 * Domain Path: languages/
 * License: GPL2
 * GitHub Plugin URI: https://github.com/GaryJones/move-floating-social-bar-in-genesis
 * GitHub Branch:     master
 * === RELEASE NOTES ===
 * Check readme file for full release notes.


{AWS QR Code} is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

{AWS QR Code} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with {AWS QR Code}. If not, see {License URI}.
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

define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-plugin-name-activator.php
 */
function activate_aws_qrc() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class_aws_qrc_activator.php';
	Aws_Qrc_Activator::activate();
}
register_activation_hook( __FILE__, 'activate_aws_qrc' );

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-plugin-name-deactivator.php
 */
function deactivate_aws_qrc() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class_aws_qrc_deactivator.php';
	Aws_Qrc_Deactivator::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_aws_qrc' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class_aws_qrc.php';

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
	$plugin = new Aws_Qrc();
	$plugin->run();
}
run_plugin_name();