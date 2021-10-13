<?php

function load_bootstrap()
{
	wp_enqueue_style('bootstrap_cdn_css', "https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css", array(), false, 'all');
	wp_enqueue_script('bootstrap_cdn_scripts', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js', array(), false, false);
}


function load_theme_scripts()
{
	wp_enqueue_script('clockwork_demo_js', get_template_directory_uri() . '/scripts.js', array(), false, false);
}

function load_theme_styles()
{
	wp_enqueue_style('clockwork_demo_style', get_template_directory_uri() . '/style.css', array(), false, 'all');
}

function load_all_external_resources()
{
	load_bootstrap();
	load_theme_styles();
	load_theme_scripts();
}

add_action('wp_enqueue_scripts', 'load_all_external_resources');
