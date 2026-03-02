<?php

// Required: enqueue the tw-output.css stylesheet so the Tailwind-generated CSS will load on our site
add_action('wp_enqueue_scripts', function () {
	wp_enqueue_style(
		'dl-theme-tw',
		get_parent_theme_file_uri('tw-output.css'),
	);

	wp_enqueue_style(
		'dl-theme-css',
		get_parent_theme_file_uri('style.css'),
	);
});

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', ['aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video']);