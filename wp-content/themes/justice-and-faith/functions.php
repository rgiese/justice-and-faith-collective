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
?>