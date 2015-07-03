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

	<ul class="services">

		<?php $id =  get_the_ID(); ?>

	  	<?php $args = array(
					'post_type' => 'page',
					'post_parent' => $id
			); ?>
			<?php $services = new WP_Query($args); while($services->have_posts()): $services->the_post(); ?>

				<li>
						<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>

								<?php the_post_thumbnail(''); ?>
						</a>

						<p>
							<?php the_excerpt(); ?>
						</p>
				</li>




			<?php endwhile; wp_reset_postdata(); ?>
	</ul>

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'dinamarca' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
