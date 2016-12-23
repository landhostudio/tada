<?php if (have_rows('landing_sections_carousel_slides')): ?>

  <section class="carousel">
    <div class="carousel__slides">

      <?php while (have_rows('landing_sections_carousel_slides')): the_row(); ?>

        <div class="carousel__slide"<?php if (get_sub_field('landing_sections_carousel_slide_color')): ?> style="background-color: <?php the_sub_field('landing_sections_carousel_slide_color'); ?>"<?php endif; ?>>

          <?php if (get_sub_field('landing_sections_carousel_slide_title') || get_sub_field('landing_sections_carousel_slide_body') || get_sub_field('landing_sections_carousel_slide_features')): ?>
            <div class="carousel__slide-col1">

              <?php if (get_sub_field('landing_sections_carousel_slide_title') || get_sub_field('landing_sections_carousel_slide_body')): ?>
                <div class="carousel__slide-body">

                  <?php if (get_sub_field('landing_sections_carousel_slide_title')): ?>
                    <h2><?php the_sub_field('landing_sections_carousel_slide_title'); ?></h2>
                  <?php endif; ?>

                  <?php the_sub_field('landing_sections_carousel_slide_body'); ?>

                </div>
              <?php endif; ?>

              <?php if (have_rows('landing_sections_carousel_slide_features')): ?>
                <div class="carousel__slide-features">

                  <?php while (have_rows('landing_sections_carousel_slide_features')): the_row(); ?>
                    <div class="carousel__slide-feature">

                      <?php if (get_sub_field('landing_sections_carousel_slide_feature_icon')): ?>
                        <div class="carousel__slide-icon">
                          <img src="<?php the_sub_field('landing_sections_carousel_slide_feature_icon'); ?>" alt="">
                        </div>
                      <?php endif; ?>
                      
                      <?php if (get_sub_field('landing_sections_carousel_slide_feature_body')): ?>
                        <div class="carousel__slide-text">
                          <?php the_sub_field('landing_sections_carousel_slide_feature_body'); ?>
                        </div>
                      <?php endif; ?>

                    </div>
                  <?php endwhile; ?>

                </div>
              <?php endif; ?>

            </div>
          <?php endif; ?>

          <?php if(get_sub_field('landing_sections_carousel_slide_image')): ?>
            <div class="carousel__slide-col2">
              <?php
                $image = get_sub_field('landing_sections_carousel_slide_image');
                echo wp_get_attachment_image($image, 'large', false, array());
              ?>
            </div>
          <?php endif; ?>

        </div>
      
      <?php endwhile; ?>

    </div>
  </section>

<?php endif; ?>
