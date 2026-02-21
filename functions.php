<?php

// Required: enqueue the tw-output.css stylesheet so the Tailwind-generated CSS will load on our site
add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style(
		'dl-theme-tw',
		get_parent_theme_file_uri('tw-output.css'),
	);

	wp_enqueue_style(
		'dl-theme-tw',
		get_parent_theme_file_uri('style.css'),
	);
});

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'));

// Inside templates (single.php, index.php), we want to style the post image by adding classes
// like `the_post_thumbnail('large', ['class' => 'rounded-xl']);`
// However, since the above associative array contains the `>` character, it'll break Draft
// Layout's HTML parsing. So instead we extract out the array into this function so we can use
// `the_post_thumbnail('large', get_post_image_args('rounded-xl'));` inside the editable template
// file, thus avoiding the `>` character
function get_post_image_args($class)
{
	return ['class' => $class];
}