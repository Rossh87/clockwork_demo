<?php
$content = wp_strip_all_tags(get_the_content());
$about_url = get_permalink(get_page_by_title('About'))
?>

<article id="about" class="col-sm-10 my-5 mx-auto cd_article-block cd_jumbo-py-md">
	<div class="
				d-flex
				justify-content-between
				align-items-end
				lh-1
				cd_article-block_header
				mb-2
			">
		<h2 id="about-section-heading" class="px-2 fs-2 text-black-50">
			About
		</h2>
		<a aria-labelledby="about-section-heading" class="
				nav-link
				fs-4
				text-black-50
				cd_focus-border--accent
				text-capitalize
				cd_article-block_link
				cd_animated-underline--accent
			" href="<?php echo $about_url; ?>">read more
			<span class="cd_article-block_arrow">></span></a>
	</div>
	<p class="fs-5 text-black-50 p-1 lh-lg">
		<?php echo $content; ?>
	</p>
</article>