<?php
get_header('landing');

$page_id = get_the_ID();

$page_query = new WP_Query(array('page_id' => $page_id));

while ($page_query->have_posts()) : $page_query->the_post();
?>
	<main id="content" class="cd_content container">
		<?php
		get_template_part('template-parts/template', 'about');
		get_template_part('template-parts/template', 'home_consultants');
		get_template_part('template-parts/template', 'home_blog');
		?>
	</main>
<?php
endwhile;
get_footer();
?>