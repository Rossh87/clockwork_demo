<?php
function cd_set_excerpt_length($length)
{
	return 25;
}

add_theme_support('post-thumbnails', array('post'));

add_filter('excerpt_length', 'cd_set_excerpt_length');
