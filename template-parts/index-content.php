<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Dinamarca
 */

?>
<?php $content =  get_the_content(); ?>

<?php if($content != '') { ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('box'); ?>>

    <div class="entry-content">
        <?php the_content(); ?>
    </div><!-- .entry-content -->

</article><!-- #post-## -->

<?php } ?>
