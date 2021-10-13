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
				<header class="d-flex justify-content-start mb-3">
					<span aria-labelledby="blog-card-header-<?php get_the_ID(); ?>" aria-role="img" style='background-image: url("<?php get_the_post_thumbnail_url(); ?>");' alt="Blog post author" class="cd_avatar me-3"></span>
					<small id="blog-card-header-<?php get_the_ID(); ?>" class="text-black-50 pt-3 text-center"><?php echo get_the_author(); ?></small>
				</header>
				<h5 class="card-title pb-3"><?php the_title(); ?></h5>
				<p class="card-text"><?php the_excerpt(); ?></p>
				<footer class="card-text"><small class="text-muted">Published <?php echo get_the_date(); ?></small></footer>
			</div>
		</div>
	</a>
</div>