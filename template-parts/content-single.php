<?php
/**
 * Template part for displaying single posts.
 *
 * @package Dinamarca
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

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

                <?php if($image) { ?>
                    <img class="author-image" src="<?php echo $image; ?>" alt="Image of <?php echo $niceName ?>" />
                <?php } ?>


				<span class="author"><?php echo esc_html_x( 'Written by', 'post author by', 'dinamarca' ); ?> <?php the_author_posts_link(); ?></span>
	</div>

	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php the_content(); ?>

	</div><!-- .entry-content -->

	<?php $titan = TitanFramework::getInstance( 'dinamarca' ); ?>
	<?php if ($titan->getOption( 'author_bio' )) { ?>
			<div class="author-bio">
					<h2><?php echo esc_html_x( 'Author Bio', 'author bio', 'dinamarca' ); ?></h2>






				  <?php $image =  esc_attr(get_the_author_meta('_user_avatar')); ?>
					<?php if ($image != '') { ?>
							<div class="bio-img">
									<img src="<?php echo $image; ?>" alt="Image of <?php echo $niceName; ?>">
							</div>
					<?php } ?>

							<div class="bio-information">

										<?php $niceName =  get_the_author_meta('display_name'); ?>
										<?php if(!empty($niceName)) { ?>
												<h3><?php echo $niceName; ?></h3>
										<?php } ?>

										<?php $bio =  get_the_author_meta('description'); ?>
										<?php if(!empty($bio)) { ?>
												<p><?php echo $bio; ?></p>
										<?php } ?>

										<ul class="social-links">
												<?php $dribbleUrl =  get_the_author_meta('_user_dribbleurl'); ?>
												<?php if(!empty($dribbleUrl)) { ?>
														<li><a href="<?php echo $dribbleUrl; ?>" target="_blank"></a></li>
												<?php } ?>

												<?php $facebookUrl =  get_the_author_meta('_user_facebookurl'); ?>
												<?php if(!empty($facebookUrl)) { ?>
														<li><a href="<?php echo $facebookUrl; ?>" target="_blank"></a></li>
												<?php } ?>

												<?php $flickrUrl =  get_the_author_meta('_user_flickrUrl'); ?>
												<?php if(!empty($flickrUrl)) { ?>
														<li><a href="<?php echo $flickrUrl; ?>" target="_blank"></a></li>
												<?php } ?>

												<?php $githubUrl =  get_the_author_meta('_user_githuburl'); ?>
												<?php if(!empty($githubUrl)) { ?>
														<li><a href="<?php echo $githubUrl; ?>" target="_blank"></a></li>
												<?php } ?>

												<?php $googleplusUrl =  get_the_author_meta('_user_googleplusurl'); ?>
												<?php if(!empty($googleplusUrl)) { ?>
														<li><a href="<?php echo $googleplusUrl; ?>" target="_blank"></a></li>
												<?php } ?>

												<?php $instagramUrl =  get_the_author_meta('_user_instagramrUrl'); ?>
												<?php if(!empty($instagramUrl)) { ?>
														<li><a href="<?php echo $instagramUrl; ?>" target="_blank"></a></li>
												<?php } ?>

												<?php $jsfiddlerUrl =  get_the_author_meta('_user_jsfiddlerUrl'); ?>
												<?php if(!empty($jsfiddlerUrl)) { ?>
														<li><a href="<?php echo $jsfiddlerUrl; ?>" target="_blank"></a></li>
												<?php } ?>

												<?php $linkediInUrl =  get_the_author_meta('_user_linkedinurl'); ?>
												<?php if(!empty($linkediInUrl)) { ?>
														<li><a href="<?php echo $linkediInUrl; ?>" target="_blank"></a></li>
												<?php } ?>

												<?php $pinterestUrl =  get_the_author_meta('_user_pinteresturl'); ?>
												<?php if(!empty($pinterestUrl)) { ?>
														<li><a href="<?php echo $pinterestUrl; ?>" target="_blank"></a></li>
												<?php } ?>

												<?php $soundcloudUrl =  get_the_author_meta('_user_soundCloudrUrl'); ?>
												<?php if(!empty($soundcloudUrl)) { ?>
														<li><a href="<?php echo $soundcloudUrl; ?>" target="_blank"></a></li>
												<?php } ?>

												<?php $stackoverflowUrl =  get_the_author_meta('_user_stackoverflowrUrl'); ?>
												<?php if(!empty($stackoverflowUrl)) { ?>
														<li><a href="<?php echo $stackoverflowUrl; ?>" target="_blank"></a></li>
												<?php } ?>

												<?php $tumblUrl =  get_the_author_meta('_user_tumblUrl'); ?>
												<?php if(!empty($tumblUrl)) { ?>
														<li><a href="<?php echo $tumblUrl; ?>" target="_blank"></a></li>
												<?php } ?>

												<?php $twitterURL =  get_the_author_meta('_user_twitterurl'); ?>
												<?php if(!empty($twitterURL)) { ?>
														<li><a href="<?php echo $twitterURL; ?>" target="_blank"></a></li>
												<?php } ?>

												<?php $vimeo =  get_the_author_meta('_user_vimeorUrl'); ?>
												<?php if(!empty($vimeo)) { ?>
														<li><a href="<?php echo $vimeo; ?>" target="_blank"></a></li>
												<?php } ?>

												<?php $youtubeUrl =  get_the_author_meta('_user_youtubeurl'); ?>
												<?php if(!empty($youtubeUrl)) { ?>
														<li><a href="<?php echo $youtubeUrl; ?>" target="_blank"></a></li>
												<?php } ?>



										</ul>
							</div> <!--.bio-information-->
			</div> <!--.author-bio-->
<?php } ?>


</article><!-- #post-## -->
