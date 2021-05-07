<?php 
/*
Plugin Name: Plugin Name
Plugin URI: https://indexis.digital
Description:
Version: 0.0.0
Author: Marcos Matos
Author URI: https://indexis.digital
Text Domain: ia
*/

// If this file is called directly, abort. //
if ( ! defined( 'WPINC' ) ) {die;} // end if

// Let's Initialize Everything
if ( file_exists( plugin_dir_path( __FILE__ ) . 'core-init.php' ) ) {
require_once( plugin_dir_path( __FILE__ ) . 'core-init.php' );
}
