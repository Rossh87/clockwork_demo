<section id="consultants" class="col-sm-10 my-5 mx-auto cd_article-block cd_article-block--spaced-bottom">
	<div class="
                        d-flex
                        justify-content-between
                        align-items-end
                        lh-1
                        cd_article-block_header
                        mb-2
                    ">
		<h2 id="consultants-section-heading" class="px-2 fs-2 text-black-50">
			Our Consultants
		</h2>
	</div>
	<div class="container">
		<div class="row justify-content-center">
			<?php
			$consultant_query = new WP_Query(array('post_type' => 'consultant'));
			if ($consultant_query->have_posts()) :
				while ($consultant_query->have_posts()) :
					$consultant_query->the_post();
					get_template_part('template-parts/template', 'consultant_card');
				endwhile;
				wp_reset_postdata();
			endif;
			?>
		</div>
</section>