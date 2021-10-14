<?php

function cd_setup_ajax_localization()
{
	// register handler function script
	wp_register_script('filter_by_category', get_template_directory_uri() . '/ajax.js', array(), false, false);

	wp_localize_script(
		'filter_by_category',
		'jsforwp_globals',
		array(
			'ajax_url' => admin_url('admin-ajax.php'),
			'nonce' => wp_create_nonce('cd_filter_nonce')
		)
	);

	wp_enqueue_script('filter_by_category');
}

function cd_setup_filter_categories_callback()
{


	add_action('wp_ajax_filter_post_categories', 'cd_filter_post_categories');
	add_action('wp_ajax_nopriv_filter_post_categories', 'cd_filter_post_categories');
}

add_action('wp_enqueue_scripts', 'cd_setup_ajax_localization');

cd_setup_filter_categories_callback();

function cd_filter_post_categories()
{
	$args = array(
		'orderby' => 'date',
		'order'	=> 'DESC'
	);

	// for taxonomies / categories
	if (isset($_POST['blogCategoryFilter']))
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'category',
				'field' => 'id',
				'terms' => $_POST['blogCategoryFilter']
			)
		);

	$query = new WP_Query($args);

	if ($query->have_posts()) :
		while ($query->have_posts()) : $query->the_post();
			echo get_template_part('template-parts/template', 'blog_card');
		endwhile;
		wp_reset_postdata();
	else :
		echo 'No posts found';
	endif;

	die();
}
