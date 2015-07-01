<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Dinamarca
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<div id="call-to-action">
				<div class="wrapper">
						 <?php $titan = TitanFramework::getInstance( 'dinamarca' ); ?>
						 <?php if ($titan->getOption( 'phone_number' )) { ?>
									<div class="information phone">
									   <?php $phoneNumber = $titan->getOption( 'phone_number' ); ?>
										    	<a href="tel:+<?php echo $phoneNumber; ?>" class="button">
																<i class="fa fa-phone"></i>
																<?php echo $phoneNumber; ?>
													</a>
									</div>
							<?php } // end if?>

						  <?php $titan = TitanFramework::getInstance( 'dinamarca' ); ?>
							<?php if ($titan->getOption( 'phone_number' )) { ?>
							<div class="information">
							   <?php $btnText = $titan->getOption( 'button_text' ); ?>
								 <?php $btnLink = $titan->getOption( 'button_link' ); ?>
								    <a href="<?php echo $btnLink; ?>" class="button">
													<i class="fa fa-check"></i>
													<?php echo $btnText; ?>
									  </a>
							</div>
							<?php } ?>
				</div><!--.wrapper-->
	</div>

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dinamarca' ); ?></a>

  <?php $titan = TitanFramework::getInstance( 'dinamarca' ); ?>
	<?php $headerImage = $titan->getOption( 'header_image' ); ?>
	<header id="masthead" class="site-header <?php echo (!empty($headerImage) ? 'header-image' : ''); ?>" role="banner"  >
		<div class="site-branding">

		    	<?php $titan = TitanFramework::getInstance( 'dinamarca' ); ?>
					<?php if ($logoID = $titan->getOption( 'logo_imagen' )) {
				        $logoID = $titan->getOption( 'logo_imagen' );
								$imageAttachment = wp_get_attachment_image_src( $logoID,'full' );
			          $imageSrc = $imageAttachment[0]; ?>

								<div class="logo">
											<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
														<img src="<?php echo $imageSrc; ?>">
											</a>
								</div>


					<?php } else { ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			  	<?php	} ?>

          <p class="site-description"><?php bloginfo( 'description' ); ?></p>

		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
