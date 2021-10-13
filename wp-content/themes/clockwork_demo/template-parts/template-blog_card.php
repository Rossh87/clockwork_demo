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