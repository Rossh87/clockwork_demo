<?php
get_header('page');
?>
<main id="main-content" class="container push-down">
	<article class='w-50 mx-auto mb-5'>
		<header class="text-center mb-3">
			<h1 class="fs-1">About Our Business</h1>
			<h2 class="fs-3 text-secondary">Reasons we're the best</h2>
		</header>
		<?php the_content() ?>
	</article>
</main>
<?php get_footer(); ?>