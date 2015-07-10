<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Dinamarca
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="featured-image">
		<?php the_post_thumbnail('slider'); ?>

	</div>

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

			<h2>Services</h2>
			<ul class="services">
				<?php $id =  get_the_ID(); ?>
			  	<?php $args = array(
							'post_type' => 'page',
							'post_parent' => $id,
							'orderby' => 'title',
							'order' => 'ASC',
					); ?>
					<?php $services = new WP_Query($args); while($services->have_posts()): $services->the_post(); ?>
						<li class="block">
								<h3><?php the_title(); ?></h3>

						  	<?php $image = get_post_meta( get_the_ID(), '_single_Service_service_image', true ); ?>
								<?php if ($image) { ?>
									<img src="<?php echo $image; ?>" alt="Image of <?php echo get_the_title(); ?>" />
							  <?php } ?>

								<?php $description = get_post_meta( get_the_ID(), '_single_Service_description', true ); ?>
								<?php if($description) { ?>
									<p class="service-description">
										<?php echo $description; ?>
									</p>
								<?php } ?>

								<a href="<?php the_permalink(); ?>" class="hvr-shutter-out-vertical button-service">Ver</a>
						</li>
					<?php endwhile; wp_reset_postdata(); ?>
			</ul>

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'dinamarca' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
