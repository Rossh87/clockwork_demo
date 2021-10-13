<?php
/* Template Name: Blog Archive */

get_header('page')
?>

<main class="container d-flex">
	<div class="row justify-content-center">
		<?php
		$category_query = new WP_Query(array('post_type' => 'post'));

		if ($category_query->have_posts()) : while ($category_query->have_posts()) :
				$category_query->the_post(); ?>
				<div class="col-8 col-md-6 col-xl-4 p-4">
					<a href="<?php the_permalink(); ?>" class="nav-link cd_focus-border--accent ">
						<div class="card">
							<div class="card-header">
								<?php
								$cat = get_the_category();

								$cat_string = '';

								foreach ($cat as $cat_data) {
									$cat_string .= $cat_data->name;
								};

								echo $cat_string
								?>
							</div>
							<div class="card-body">
								<h5 class="card-title pb-3"><?php the_title(); ?></h5>
								<p class="card-text"><?php the_excerpt(); ?></p>
							</div>
						</div>
					</a>
				</div>

			<?php endwhile;
		else : ?>
			<h1>No posts found!</h1>
		<?php endif; ?>

	</div>
</main>