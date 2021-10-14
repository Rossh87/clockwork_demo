<?php
function cd_custom_header_setup()
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

function cd_custom_logo_setup()
{
	$defaults = array(
		'height'               => 150,
		'width'                => 150,
		'flex-height'          => true,
		'flex-width'           => true,
		'unlink-homepage-logo' => true,
	);

	add_theme_support('custom-logo', $defaults);
}

function cd_full_header_setup()
{
	cd_custom_logo_setup();
	cd_custom_header_setup();
}

add_action('after_setup_theme', 'cd_full_header_setup');
