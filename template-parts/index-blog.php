<div id="blog" class="blog-section">
      <div class="entry-content wrap-blog">
          <h2>Latest Blog Post</h2>
          <?php $args = array(
              'post_type' => 'post',
              'posts_per_page' => 2,
              'orderby' => 'date',
              'order' => 'DESC',
              'ignore_sticky_posts' => true
          );?>
          <ul>
            <?php $blog = new WP_Query($args); while($blog->have_posts()): $blog->the_post(); ?>
                    <li class="box">
                      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                      <?php the_post_thumbnail('blogPost'); ?>
                      <?php the_content(); ?>
                    </li>
            <?php endwhile; wp_reset_postdata(); ?>
          </ul>
      </div>
</div>
