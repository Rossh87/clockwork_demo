<?php
get_header('page');
?>
<main class="container" id="main-content">
	<?php
	if (have_posts()) : while (have_posts()) :
			the_post();
			get_template_part('template-parts/template', 'consultant');
	?>
		<?php endwhile;
	else : ?>
		<h1>No posts found!</h1>
	<?php endif; ?>
</main>
<?php get_footer(); ?>