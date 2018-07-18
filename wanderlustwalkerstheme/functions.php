<?php

register_nav_menus( array(
	'nav_menu' => 'Menu główne',
	'footer_menu' => 'Menu w stopce',
) );

if (function_exists('add_theme_support')) {
add_theme_support('post-thumbnails');
set_post_thumbnail_size(150, 150, true);
}
?>