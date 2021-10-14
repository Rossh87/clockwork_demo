<?php
function cd_register_sidebar()
{
	register_sidebar(array(
		'name'          => __('Post search sidebar', 'clockwork_demo'),
		'id'            => 'search-widget',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
		'description'	=> __('Area to house search widget')
	));
}

add_action('widgets_init', 'cd_register_sidebar');
