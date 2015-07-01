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

	$callTo = $titan->createThemeCustomizerSection( array(
	    'name' => __( 'Call To Action Colors', 'dinamarca' ),
	) );

	$callTo->createOption( array(
	    'name' => __( 'Background Color', 'dinamarca' ),
	    'id' => 'call_to_action_BG',
	    'type' => 'color',
	    'desc' => __( 'This color changes the background of your call to action', 'dinamarca' ),
	    'default' => '#91c842',
			'livepreview' => '',
		   'css' => '#call-to-action { background-color: value !important}',
	) );

	$callTo->createOption( array(
	    'name' => __( 'Text Color', 'dinamarca' ),
	    'id' => 'call_to_action_TC',
	    'type' => 'color',
	    'desc' => __( 'This color changes the text color of your call to action', 'dinamarca' ),
	    'default' => '#FFFFFF',
			'livepreview' => '',
		  'css' => '#call-to-action p { color: value !important}',
	) );



	/**
	 * Create a Theme Customizer panel where we can edit some options.
	 * You should put options here that change the look of your theme.
	 */

	$section = $titan->createThemeCustomizerSection( array(
	    'name' => __( 'Header Options', 'dinamarca' ),
	) );

	$section->createOption( array(
	    'name' => __( 'Background Color', 'dinamarca' ),
	    'id' => 'sample_color1',
	    'type' => 'color',
	    'desc' => __( 'This color changes the background of your header', 'dinamarca' ),
	    'default' => '#FFFFFF',
	  	'css' => 'header .site-branding {
									background-color: value!important
						  }
							h1.widget-title {
									color:value!important
						  }',
	) );


	$section->createOption( array(
	    'name' => 'My Upload Option',
	    'id' => 'logo_imagen',
	    'type' => 'upload',
	    'desc' => 'Upload your Logo',
			'default' => '',
			'livepreview' => ''
	) );

	$section->createOption( array(
	    'name' => 'Header Image',
	    'id' => 'header_image',
	    'type' => 'upload',
	    'desc' => 'Upload an Image',
			'default' => '',
			'livepreview' => '',
			'css' => 'header.site-header {
									background-image: value!important
							}',
	) );
	/**
	 * Create an admin panel & tabs
	 * You should put options here that do not change the look of your theme
	 */


	$footer = $titan->createThemeCustomizerSection( array(
			'name' => __( 'Footer Options', 'dinamarca' ),
	) );

	$footer->createOption( array(
			'name' => __( 'Background Color', 'dinamarca' ),
			'id' => 'footer_bg',
			'type' => 'color',
			'desc' => __( 'This color changes the background of your footer', 'dinamarca' ),
			'default' => '#363f48',
			'css' => 	'footer.site-footer {
								    background-color:value!important;
						     }',
	) );
	$footer->createOption( array(
	    'name' => __( 'Text Color', 'dinamarca' ),
	    'id' => 'footer_p',
	    'type' => 'color',
	    'desc' => __( 'This color changes the text color of your call to action', 'dinamarca' ),
	    'default' => '#FFFFFF',
			'livepreview' => '',
		  'css' => 'footer.site-footer p {
				  					color:value!important;
								}',
	) );

	$adminPanel = $titan->createAdminPanel( array(
	    'name' => __( 'Dinamarca Settings', 'dinamarca' ),
	) );

	 /** CALL TO ACTION **/
  $callToActionOptions =	$adminPanel->createTab( array(
			'name' => __( 'Call To Action Options', 'dinamarca' ),
	) );
	$callToActionOptions->createOption( array(
			'name' => 'Phone Number',
			'id' => 'phone_number',
			'type' => 'text',
			'desc' => 'Add your Phone number to header.'
	) );
	$callToActionOptions->createOption( array(
			'name' => 'Contact Button Text',
			'id' => 'button_text',
			'type' => 'text',
			'desc' => 'Contact Text.'
	) );
	$callToActionOptions->createOption( array(
			'name' => 'Contact Button Link',
			'id' => 'button_link',
			'type' => 'text',
			'desc' => 'Contact Link.'
	) );
	$callToActionOptions->createOption( array(
			'type' => 'save',
	) );


	/** GENERAL **/
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

  /** FOOTER **/
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


	$logoImagen = $adminPanel->createTab( array(
	    'name' => __( 'Logo', 'dinamarca' ),
	) );

	$logoImagen->createOption( array(
	    'name' => 'My Upload Option',
	    'id' => 'my_upload_option',
	    'type' => 'upload',
	    'desc' => 'Upload your image'
	) );
	$logoImagen->createOption( array(
	    'type' => 'save',
	) );
}