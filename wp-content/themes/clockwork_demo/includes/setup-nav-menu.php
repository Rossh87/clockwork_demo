<?php
function register_menus()
{
	$args = array(
		'main-nav' => __('Main Navigation'),
	);
	register_nav_menus($args);
}

function add_menu_anchor_classes($atts)
{
	$atts['class'] = "nav-link active p-1 cd_focus-border--white";

	return $atts;
}

function add_menu_li_classes($classes, $item, $args)
{
	error_log("is nav_menu_item_classes working?");
	$classes[] = "nav-item mx-1";

	return $classes;
}

add_filter('nav_menu_css_class', 'add_menu_li_classes', 1, 3);
add_filter('nav_menu_link_attributes', 'add_menu_anchor_classes', 10);
add_action('init', 'register_menus');
