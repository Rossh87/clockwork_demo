<?php
// bring in some helpers for constructing variables
require_once(get_template_directory() . '/helpers/helper-blog_card.php');

$post_id = get_the_ID();
$avatar_url = get_avatar_url(get_the_author_meta('ID'));
$title = get_the_title();
$excerpt = get_the_excerpt();
$pulication_date = get_the_date();
$header_elements_id = "blog-single-head-" . $post_id;
$author_name = cd_construct_author_name();
$author_string = $author_name . ", " . get_the_date();
$tags_string = cd_construct_tags_string();
?>

<main id="main-content" class="container py-5">
	<div class="w-50 mx-auto">
		<?php echo get_the_post_thumbnail(get_the_ID(), 'large'); ?>
		<article class="fs-5 py-5">
			<header class="text-secondary pb-2">
				<h1 class="fs-3 text-black"><?php the_title(); ?></h1>
				<div class="d-flex">
					<span aria-role="img" aria-labelledby=<?php echo $header_elements_id; ?> style='background-image: url("<?php echo $avatar_url; ?>");' alt="Blog post author" class="cd_avatar me-3"></span>
					<div>
						<small id="<?php echo $header_elements_id; ?>" class="d-block"><span class="fw-bold"><?php echo $author_name ?>,</span><span> <?php echo $pulication_date; ?></span></small>
						<small><span class="fw-bold pe-1">Tags:</span><span><?php echo $tags_string ?></span></small>
					</div>
				</div>
			</header>
			<?php the_content() ?>
		</article>
	</div>
</main>