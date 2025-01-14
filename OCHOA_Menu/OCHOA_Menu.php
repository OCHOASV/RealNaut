<?php
/*
	Plugin Name: OCHOA Menu
	Plugin URI: https://www.ochoa.es/
	Description: OCHOA Menus - RealNaut
	Author: Carlos Ochoa <ochoa.ini@gmail.com>
	Author URI: https://www.ochoa.es/
	Version: 1.0
	License: GPLv2
*/

// Exit if accessed directly
if( !defined('ABSPATH') ) {
	exit;
}

$pluginDirPath = plugin_dir_path( __FILE__ );

// Activate Plugin Function
function activate(){

}

// Disable Plugin Function
function disable(){

}

register_activation_hook(__FILE__,'activate');
register_deactivation_hook(__FILE__,'disable');


require_once $pluginDirPath.'includes/core_OCHOA_Menu.php';