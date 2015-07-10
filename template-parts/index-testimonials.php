<div id="testimonials" class="testimonials-section">
    <div class="entry-content wrap-testimonials">
        <h2 class="title">Testimonials</h2>

        <?php $args = array(
            'post_type' => 'testimonials',
            'orderby' => 'date',
            'order' => 'DESC',
            'posts_per_page' => -1
        ); ?>


          <?php $testimonials = new WP_Query($args);  ?>
          <?php  $count = $testimonials->post_count; ?>
          <ul class="testimonials <?php echo  $count == 1 ? 'no-slider' : 'slider';   ?>">
              <?php  while($testimonials->have_posts()): $testimonials->the_post(); ?>

                        <li>
                            <?php the_content(); ?>
                            <h3>- <?php echo get_the_title(); ?></h3>
                        </li>

             <?php endwhile; wp_reset_postdata(); ?>
         </ul>
    </div>
</div>
