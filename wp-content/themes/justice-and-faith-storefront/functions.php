<?php
	// Amend styles
	add_action('wp_enqueue_scripts', 'tt_child_enqueue_parent_styles');

	function tt_child_enqueue_parent_styles() {
	   wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');
	}

	// Amend header
	function amend_header() {
		// Font references
		echo '<link rel="preconnect" href="https://fonts.gstatic.com">' . "\n";
		echo '<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">' . "\n";
	}

	add_action('wp_head', 'amend_header');

	// Reorder Storefront header
	add_action('init', 'reorder_storefront_primary_navigation', 15 /* magic value from the internet what could go wrong */);

	function reorder_storefront_primary_navigation() {
		// Remove search box
		remove_action('storefront_header', 'storefront_product_search', 40);

		// Remove wrapping outer div for site branding
		remove_action('storefront_header', 'storefront_header_container', 0);
		remove_action('storefront_header', 'storefront_header_container_close', 41);

		// Remove wrapping outer div for site navigation
		remove_action('storefront_header', 'storefront_primary_navigation_wrapper', 42);
		remove_action('storefront_header', 'storefront_primary_navigation_wrapper_close', 68);
	}
?>