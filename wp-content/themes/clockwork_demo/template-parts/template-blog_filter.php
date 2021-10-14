<?php
$form_action_url = site_url() . '/wp-admin/admin-ajax.php';
$terms = ($terms = get_terms(array(
	'taxonomy' => 'category', // to make it simple I use default categories
	'orderby' => 'name',
	'hide_empty' => false,
)))
?>

<form action="<?php echo $form_action_url; ?>" method="POST" id="filter" class="p-3 mb-3 mx-5 mt-5 bg-light" onsubmit="handleCategorySearchSubmit(event)">
	<input type="hidden" name="action" value="filter_post_categories">
	<?php if ($terms) : ?>
		<label class="fs-6" for="blogCategoryFilter">Select A Category To Read More:</label>
		<select name="blogCategoryFilter" id="blogCategoryFilter" class="form-select mt-3">
			<?php foreach ($terms as $term) : ?>
				<option value="<?php echo $term->term_id; ?>"><?php echo $term->name; ?></option>
			<?php endforeach; ?>
		</select>
	<?php endif; ?>
	<button type='submit' class="btn btn-info mt-3">Search</button>
</form>