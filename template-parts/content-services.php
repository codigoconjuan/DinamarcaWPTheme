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

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->


		<h2>Services</h2>
	<ul class="services">
		<?php $id =  get_the_ID(); ?>
	  	<?php $args = array(
					'post_type' => 'page',
					'post_parent' => $id
			); ?>
			<?php $services = new WP_Query($args); while($services->have_posts()): $services->the_post(); ?>
				<li class="block">
						<h3><?php the_title(); ?></h3>
						<?php the_post_thumbnail(''); ?>
					  <?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" class="hvr-shutter-out-vertical button-service">Ver</a>
				</li>
			<?php endwhile; wp_reset_postdata(); ?>
	</ul>

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'dinamarca' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
