<?php
/* Template Name: Blog Archive */

get_header('page')
?>

<main class="container push-down">
	<?php get_template_part('template-parts/template', 'blog_filter'); ?>
	<div class="d-flex">
		<div class="row justify-content-center" id="category-search-ajax-replaceable">
			<?php
			$category_query = new WP_Query(array('post_type' => 'post'));

			if ($category_query->have_posts()) : while ($category_query->have_posts()) :
					$category_query->the_post();
					get_template_part('template-parts/template', 'blog_card');
			?>
				<?php endwhile;
			else : ?>
				<h1>No posts found!</h1>
			<?php endif; ?>
		</div>
	</div>
</main>