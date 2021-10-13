<?php
function is_non_empty_string(String $s)
{
	return $s !== '';
}

function cd_construct_author_name()
{
	$fName = get_the_author_meta('first_name');
	$lName = get_the_author_meta('last_name');
	$outputName = '';

	if (is_non_empty_string($fName) || is_non_empty_string($lName)) {
		$outputName = $fName . ' ' . $lName;
	} else {
		$outputName = get_the_author_meta('display_name');
	}

	return $outputName;
}

function cd_construct_category_string()
{
	$cat = get_the_category();

	$cat_string = '';

	foreach ($cat as $cat_data) {
		$cat_string .= $cat_data->name;
	};

	return $cat_string;
}
