<?php
/**
 * Template part for displaying posts.
 *
 * @package Dinamarca
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>


				<div class="post-categories">
						<?php
						$categories_list = get_the_category_list( esc_html__( ', ', 'dinamarca' ) );
						if ( $categories_list && dinamarca_categorized_blog() ) {
							printf( '<span class="cat-links">' . esc_html__( 'Posted in %1$s', 'dinamarca' ) . '</span>', $categories_list ); // WPCS: XSS OK.
						}
						?>
			 </div> <!--.post-categories -->

			 <div class="post-tags">
				<?php
					$tags_list = get_the_tag_list( '', esc_html__( ', ', 'dinamarca' ) );
					if ( $tags_list ) {
						printf( '<span class="tags-links">' . esc_html__( 'Tagged %1$s', 'dinamarca' ) . '</span>', $tags_list ); // WPCS: XSS OK.
					}
				 ?>
			</div>


				<?php if (has_post_thumbnail() ) { ?>
			  <?php $postThumbnail =  get_the_post_thumbnail(); ?>
				<div class="header-content">
							<div class="featured-image">
									<?php  echo $postThumbnail  ?>
							</div>
				</div> <!--.header-content-->
			<?php	}  ?>

			<div class="posted-on <?php echo (!empty($postThumbnail) ? 'header-image' : 'no-image'); ?>" >
						<?php $image =  get_the_author_meta('_yourprefix_user_avatar'); ?>
						<?php $niceName =  get_the_author_meta('display_name'); ?>

						<img class="author-image" src="<?php echo $image; ?>" alt="Image of <?php echo $niceName ?>" />
						<span class="author"><?php _e( 'Written by', 'dinamarca' ); ?> <?php the_author_posts_link(); ?></span>
			</div>

			</header><!-- .entry-header -->


	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'dinamarca' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dinamarca' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
