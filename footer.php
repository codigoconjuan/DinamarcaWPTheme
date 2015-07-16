<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Dinamarca
 */

?>

				</div><!-- #content -->

				<footer id="colophon" class="site-footer" role="contentinfo">
									<?php $widgets =  wp_get_sidebars_widgets(); ?>
									<?php $footerWidgets = count($widgets['footer-widget-1']); ?>
									<?php if ($footerWidgets != 0) { ?>
										<?php $total = ($footerWidgets %  4 )  ?>
												  <div class="footer-widgets columns-<?php echo $total; ?>">
																<?php dynamic_sidebar( 'footer-widget-1' ); ?>
												  </div>
									<?php }?>

								  <div class="site-info">
											<div class="content-footer">
														<p>All Rights Reserved  &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
											</div>
									</div>
				</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
