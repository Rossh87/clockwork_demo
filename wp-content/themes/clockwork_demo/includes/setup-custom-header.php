<?php
function cd_header_setup()
{
	$args = array(
		'flex-width' => true,
		'flex-height' => true,
		'default-image' => get_template_directory_uri() . '/images/skyline-panorama.jpg',
		'header-text' => false,
		'uploads' => true,
	);

	add_theme_support('custom-header', $args);
};

add_action('after_setup_theme', 'cd_header_setup');
