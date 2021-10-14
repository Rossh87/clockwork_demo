<?php
// bring in some helpers for constructing variables
require_once(get_template_directory() . '/helpers/helper-blog_card.php');

$post_id = get_the_ID();
$avatar_url = get_avatar_url(get_the_author_meta('ID'));
$title = get_the_title();
$excerpt = get_the_excerpt();
$pulication_date = get_the_date();
$header_elements_id = "blog-card-head-" . $post_id;
$publication_date_string = "Published " . $publication_date;
$author_name = cd_construct_author_name();
$category_string = cd_construct_category_string();
?>

<div class="col-8 col-md-6 col-xl-4 p-4">
	<a href="<?php the_permalink(); ?>" class="nav-link cd_focus-border--accent ">
		<div class="card">
			<div class="card-header">
				<?php echo $category_string ?>
			</div>
			<div class="card-body">
				<header class="d-flex justify-content-start mb-3">

					<span aria-labelledby="<?php echo $header_elements_id; ?>" aria-role="img" style='background-image: url("<?php echo $avatar_url; ?>");' alt="Blog post author" class="cd_avatar me-3"></span>
					<small id="<?php echo $header_elements_id; ?>" class="text-black-50 pt-3 text-center"><?php echo $author_name; ?></small>
				</header>
				<h5 class="card-title pb-3"><?php echo $title; ?></h5>
				<p class="card-text"><?php echo $excerpt; ?></p>
				<footer class="card-text"><small class="text-muted">Published <?php echo get_the_date(); ?></small></footer>
			</div>
		</div>
	</a>
</div>