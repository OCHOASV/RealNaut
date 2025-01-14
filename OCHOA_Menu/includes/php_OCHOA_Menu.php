<?php
/*
	OCHOA Menus
*/

/* Shortcode for Menu */
add_shortcode("menu", function($atts, $content){
    require_once 'menu.php';
    return $menu;
});