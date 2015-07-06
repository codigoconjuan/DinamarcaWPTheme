<?php
/**
 * Template Name: Front Page w/ Slider
 *
 * @package Dinamarca
 */

get_header(); ?>

<div id="slider">
	<?php $args = array(
		'post_type' => 'slider',
		'orderby' => 'date',
		'order' => 'DESC',
		'posts_per_page' => -1,
	);?>
	<ul class="slider">
	<?php $slider = new WP_Query($args); while($slider->have_posts()): $slider->the_post(); ?>
		<li>
			<?php $link =  get_post_meta( get_the_ID(), '_slider_fields_slider_url', true ); ?>
			<?php $openNW = get_post_meta( get_the_ID(), '_slider_fields_slider_check', true ); ?>

			<?php if($link != '') { ?>
				<a href="<?php echo $link; ?>"  <?php echo (!empty($openNW) ? 'target="_BLANK"' : '');?>>
						<?php the_post_thumbnail('slider'); ?>
				</a>
			<?php }  else { ?>
					<?php the_post_thumbnail('slider'); ?>
			<?php } ?>
		</li>
	<?php endwhile; wp_reset_postdata(); ?>
	</ul>
</div>

<div id="primary" class="content-area no-sidebar">
	<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'page' ); ?>

		<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
