<?php

if ( ! function_exists( 'emptytheme_support' ) ) :
	function emptytheme_support()  {

		// Adding support for featured images.
		add_theme_support( 'post-thumbnails' );

		// Adding support for alignwide and alignfull classes in the block editor.
		add_theme_support( 'align-wide' );

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Adding support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		// Add support for custom units.
		add_theme_support( 'custom-units' );
	}
	add_action( 'after_setup_theme', 'emptytheme_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function emptytheme_scripts() {

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'emptytheme-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

	// Enqueue theme custom styles.
	wp_enqueue_style( 'emptytheme-style-index', get_template_directory_uri() . '/build/style-index.css', array(), wp_get_theme()->get( 'Version' ) );

	// Enqueue scripts.
	wp_enqueue_script( 'emptytheme-script-index', get_template_directory_uri() . '/build/index.js', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'emptytheme_scripts' );

/**
 * Enqueue WordPress theme styles within Gutenberg.
 */
function emptytheme_gutenberg_styles() {
	wp_enqueue_style( 'editor-styles', get_template_directory_uri() . '/build/index.css', array(), false, wp_get_theme()->get( 'Version' ), 'all' );
}
add_action( 'enqueue_block_editor_assets', 'emptytheme_gutenberg_styles' );
