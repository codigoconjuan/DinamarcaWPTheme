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

  <?php $images = get_post_meta( get_the_ID(), '_gallery_dinamarcafile_list', true ); ?>

  <?php if($images != '') { ?>

        <div class="gallery">
            <?php $images = get_post_meta( get_the_ID(), '_gallery_dinamarcafile_list', true ); ?>
						<ul>
	            <?php foreach($images as $key => $image) { ?>
							<?php $thumbImage = wp_get_attachment_image_src($key, 'gallery-thumb');?>
									<li class="block">
										<a href="<?php echo $image ?>">
													<img src="<?php echo $thumbImage[0]; ?>" />
										</a>
									</li>
	           <?php  } ?>
					</ul>
        </div>

  <?php  } ?>

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'dinamarca' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
