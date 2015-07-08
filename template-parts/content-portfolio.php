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


				<ul id="portfolio" class="portfolio">
				  	<?php $args = array(
								'post_type' => 'portfolio-post-type',
						); ?>
						<?php $portfolio = new WP_Query($args); while($portfolio->have_posts()): $portfolio->the_post(); ?>
							<li class="block">
								<a href="<?php the_permalink(); ?>">
										<div class="title-portfolio">
											<div class="center-content">
												<h3><?php the_title(); ?></h3>
												</div>
										</div>
										<?php the_post_thumbnail('gallery-thumb'); ?>
								</a>
							</li>
						<?php endwhile; wp_reset_postdata(); ?>
				</ul>

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'dinamarca' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
