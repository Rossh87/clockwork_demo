<?php
// bring in some helpers for constructing variables
require_once(get_template_directory() . '/helpers/helper-blog_card.php');

$post_id = get_the_ID();
$consultant_name = get_the_title();
$excerpt = get_the_excerpt();
$header_elements_id = "blog-single-head-" . $post_id;
$author_string = $author_name . ", " . get_the_date();
$tags_string = cd_construct_tags_string();
$hire_date = get_field('hire_date');
$areas_of_expertise = get_field('expertise');
?>

<main class="container py-5">
	<div class="w-50 mx-auto">
		<?php echo get_the_post_thumbnail($post_id, 'large'); ?>
		<article class="fs-5 py-5">
			<header class="text-secondary pb-2">
				<h1 class="fs-2 text-black text-center"><?php echo $consultant_name; ?></h1>
				<div class="pe-1 fs-5"><span class="fw-bold fs-6 pe-2">Joined:</span><span class="fs-6"><?php echo $hire_date ?></span></div>
				<div class="pe-1 fs-5"><span class="fw-bold fs-6 pe-2">Expert In:</span><span class="fs-6"><?php echo $areas_of_expertise ?></span></div>
			</header>
			<?php the_content() ?>
		</article>
	</div>
</main>