<?php
/**
 * Template Name: Front Page
 *
 * @package Dinamarca
 */

get_header(); ?>

<?php // Load Slider ?>
<?php $titan = TitanFramework::getInstance( 'dinamarca' ); ?>
<?php if ($titan->getOption( 'show_slider' )) { ?>
        <?php get_template_part( 'template-parts/index', 'slider' ); ?>
<?php } ?>

<?php // page content ?>
<div id="primary" class="content-area no-sidebar">
	<main id="main" class="site-main" role="main">
	<?php while (have_posts()) : the_post(); ?>
			<?php get_template_part( 'template-parts/index', 'content' ); ?>
		<?php endwhile; // End of the loop. ?>
	</main><!-- #main -->
</div><!-- #primary -->




<?php // Load Services ?>
<?php $titan = TitanFramework::getInstance( 'dinamarca' ); ?>
<?php if ($titan->getOption( 'show_services' )) { ?>
    <?php get_template_part( 'template-parts/index', 'services' ); ?>
<?php } ?>

<?php // Load Testimonials ?>
<?php $titan = TitanFramework::getInstance( 'dinamarca' ); ?>
<?php if ($titan->getOption( 'show_testimonials' )) { ?>
    <?php get_template_part( 'template-parts/index', 'testimonials' ); ?>
<?php } ?>

<?php // Load Blog ?>
<?php $titan = TitanFramework::getInstance( 'dinamarca' ); ?>
<?php if ($titan->getOption( 'show_blog' )) { ?>
    <?php get_template_part( 'template-parts/index', 'blog' ); ?>
<?php } ?>


<?php get_footer(); ?>
