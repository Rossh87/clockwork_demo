<?php
function cd_register_sidebars()
{
	register_sidebar(array(
		'name' => 'Footer social widget',
		'id' => 'footer-social-widget',
		'before_widget' => '<div>',
		'after_widget' => '</div>'
	));
}
add_action('widgets_init', 'cd_register_sidebars');
