  <h2>Services</h2>
  <ul class="services">
          <?php
            $args = array(
                'post_type'  => 'page',
                'orderby' => 'title',
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                        'key'   => '_wp_page_template',
                        'value' => 'templates/page-singleService.php'
                    )
                )
            );
          ?>
      <?php $services = new WP_Query($args); while($services->have_posts()): $services->the_post(); ?>

        <li class="block">
            <h3><?php the_title(); ?></h3>

            <?php $image = get_post_meta( get_the_ID(), '_single_Service_service_image', true ); ?>
            <?php if ($image) { ?>
              <img src="<?php echo $image; ?>" alt="Image of <?php echo get_the_title(); ?>" />
            <?php } ?>

            <?php $description = get_post_meta( get_the_ID(), '_single_Service_description', true ); ?>
            <?php if($description) { ?>
              <p class="service-description">
                <?php echo $description; ?>
              </p>
            <?php } ?>

            <a href="<?php the_permalink(); ?>" class="hvr-shutter-out-vertical button-service">Ver</a>
        </li>

      <?php endwhile; wp_reset_postdata(); ?>

			</ul>
