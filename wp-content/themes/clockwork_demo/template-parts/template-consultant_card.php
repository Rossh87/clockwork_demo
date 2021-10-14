<?php
$area_of_expertise = get_field('expertise');
$consultant_name = get_the_title();
$consultant_post_id = get_the_ID();
$consultant_page_link = get_permalink(get_post($consultant_post_id));
$card_url = get_the_post_thumbnail_url(null, 'large')
?>

<div class="col-8 col-md-6 col-xl-4 p-4">
	<div class="card h-100 cd_focus-border--accent">
		<a href="<?php echo $consultant_page_link ?>" style="height:100%;" class="nav-link text-black-50">

			<img src="<?php echo $card_url ?>" alt="professional headshot of consultant" class="card-img-top" />
			<div class="card-body ">
				<h3 class="text-capitalize card-title"><?php echo $consultant_name ?></h3>
				<p class="card-text"><?php echo $area_of_expertise ?></p>
			</div>
		</a>
	</div>
</div>