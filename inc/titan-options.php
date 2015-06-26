<?php

/*
 * Titan Framework options sample code. We've placed here some
 * working examples to get your feet wet
 * @see	http://www.titanframework.net/get-started/
 */


add_action( 'tf_create_options', 'dinamarca_create_options' );

/**
 * Initialize Titan & options here
 */
function dinamarca_create_options() {

	$titan = TitanFramework::getInstance( 'dinamarca' );

	/**
	 * Create a Theme Customizer panel where we can edit some options.
	 * You should put options here that change the look of your theme.
	 */

	$section = $titan->createThemeCustomizerSection( array(
	    'name' => __( 'Theme Options', 'dinamarca' ),
	) );

	$section->createOption( array(
	    'name' => __( 'Background Color', 'dinamarca' ),
	    'id' => 'sample_color1',
	    'type' => 'color',
	    'desc' => __( 'This color changes the background of your theme', 'dinamarca' ),
	    'default' => '#FFFFFF',
		'css' => 'body { background-color: value }',
	) );

	$section->createOption( array(
	    'name' => __( 'Headings Font', 'dinamarca' ),
	    'id' => 'headings_font',
	    'type' => 'font',
	    'desc' => __( 'Select the font for all headings in the site', 'dinamarca' ),
		'show_color' => false,
		'show_font_size' => false,
	    'show_font_weight' => false,
	    'show_font_style' => false,
	    'show_line_height' => false,
	    'show_letter_spacing' => false,
	    'show_text_transform' => false,
	    'show_font_variant' => false,
	    'show_text_shadow' => false,
	    'default' => array(
	        'font-family' => 'Fauna One',
	    ),
		'css' => 'h1, h2, h3, h4, h5, h6 { value }',
	) );


	/**
	 * Create an admin panel & tabs
	 * You should put options here that do not change the look of your theme
	 */

	$adminPanel = $titan->createAdminPanel( array(
	    'name' => __( 'Theme Settings', 'dinamarca' ),
	) );

	$generalTab = $adminPanel->createTab( array(
	    'name' => __( 'General', 'dinamarca' ),
	) );

	$generalTab->createOption( array(
	    'name' => __( 'Custom Javascript Code', 'dinamarca' ),
	    'id' => 'custom_js',
	    'type' => 'code',
	    'desc' => __( 'If you want to add some additional Javascript code into your site, add them here and it will be included in the frontend header. No need to add <code>script</code> tags', 'dinamarca' ),
	    'lang' => 'javascript',
	) );

	$generalTab->createOption( array(
	    'type' => 'save',
	) );


	$footerTab = $adminPanel->createTab( array(
	    'name' => __( 'Footer', 'dinamarca' ),
	) );

	$footerTab->createOption( array(
		'name' => __( 'Copyright Text', 'dinamarca' ),
		'id' => 'copyright',
		'type' => 'text',
		'desc' => __( 'Enter your copyright text here (sample only)', 'dinamarca' ),
	) );

	$footerTab->createOption( array(
	    'type' => 'save',
	) );
}
