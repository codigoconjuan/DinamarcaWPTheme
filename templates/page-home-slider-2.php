<?php
/**
 * Template Name: Front Page
 *
 * @package Dinamarca
 */

get_header(); ?>

<?php // Load Slider ?>
<?php get_template_part( 'template-parts/index', 'slider' ); ?>

<div id="primary" class="content-area no-sidebar">
    <main id="main" class="site-main" role="main">

        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/page', 'index' ); ?>

        <?php endwhile; // End of the loop. ?>

    </main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
