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


<div id="primary" class="content-area no-sidebar">
	<main id="main" class="site-main" role="main">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<?php get_template_part( 'template-parts/page', 'index' ); ?>

		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->


<?php else: endif; ?>

  

<?php // Load Testimonials ?>
<?php $titan = TitanFramework::getInstance( 'dinamarca' ); ?>
<?php if ($titan->getOption( 'show_testimonials' )) { ?>
    <?php get_template_part( 'template-parts/index', 'testimonials' ); ?>
<?php } ?>




<?php // Load Testimonials ?>
<?php $titan = TitanFramework::getInstance( 'dinamarca' ); ?>
<?php if ($titan->getOption( 'show_blog' )) { ?>
    <?php get_template_part( 'template-parts/index', 'blog' ); ?>
<?php } ?>


<?php get_footer(); ?>
