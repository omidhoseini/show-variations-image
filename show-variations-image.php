<?php
/**
 * Plugin Name:       Show Variations Image
 * Plugin URI:        https://brpcreative.com.au
 * Description:       This plugin show variations image on single attribute.
 * Version:           1.0.1
 * Requires at least: 5.7
 * Requires PHP:      5.6
 * Author:            BRPCreative
 * Author URI:        https://brpcreative.com.au
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       show-variations-image
 * Domain Path:       /lang
 *
 * @package   show-variations-image
 * @category  plugin
 * @link      https://github.com/omidhoseini/create-alt-image
 * @author    BRPCreative
 * @license   GPL v2 or later
 * @copyright Copyright (c) 2021, BRPCreative.
 */

use SVI\Inc\Classes\SVIRegister;

// Security Note: Blocks direct access to the PHP files.
\defined( 'ABSPATH' ) || die;

// Define plugin path.
\define( '_SVI_PLUGIN_PATH', \plugin_dir_path( __FILE__ ) );
\define( '_SVI_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Get all plugin data.
require_once ABSPATH . 'wp-admin/includes/plugin.php';
$plugin_data = \get_plugin_data( __FILE__ );

// Define plugin version.
\define( '_SVI_VERSION', $plugin_data['Version'] );

// Call the SVIRegister class..
require_once \_SVI_PLUGIN_PATH . 'inc/classes/class-sviregister.php';
( new SVIRegister() );
