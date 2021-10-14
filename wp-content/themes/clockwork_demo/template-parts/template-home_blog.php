<?php
$blog_archive_url = get_permalink(get_page_by_title('Blog Archive'));
?>

<section id="blog" class="col-sm-10 my-5 mx-auto cd_article-block">
	<div class="
                        d-flex
                        justify-content-between
                        align-items-end
                        lh-1
                        cd_article-block_header
                        mb-2
                    ">
		<h2 id="blog-section-heading" class="px-2 fs-2 text-black-50">
			From the Team
		</h2>
		<a aria-label="all blog posts" class="
                            nav-link
                            fs-4
                            text-black-50
                            cd_focus-border--accent
                            text-capitalize
                            cd_article-block_link
                            cd_animated-underline--accent
                        " href="<?php echo $blog_archive_url ?>">read more
			<span class="cd_article-block_arrow">></span></a>
	</div>
	<div class="container">
		<div class="row justify-content-center">
			<?php
			$retrieved_post_count = 0;
			$blog_query = new WP_Query(array('post_type' => 'post', 'posts_per_page'));
			if ($blog_query->have_posts()) :
				while ($blog_query->have_posts() && $retrieved_post_count < 3) :
					$blog_query->the_post();
					get_template_part('template-parts/template', 'blog_card');
					$retrieved_post_count++;
				endwhile;
				wp_reset_postdata();
			endif;
			?>
		</div>
</section>