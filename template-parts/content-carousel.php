<?php if (have_rows('landing_sections_carousel_slides')): ?>

  <section class="carousel">
    <div class="carousel__slides">

      <?php while (have_rows('landing_sections_carousel_slides')): the_row(); ?>

        <div class="carousel__slide"<?php if (get_sub_field('landing_sections_carousel_slide_color')): ?> style="background-color: <?php the_sub_field('landing_sections_carousel_slide_color'); ?>"<?php endif; ?>>

          <?php if (get_sub_field('landing_sections_carousel_slide_title') || get_sub_field('landing_sections_carousel_slide_body') || get_sub_field('landing_sections_carousel_slide_features')): ?>
            <div class="carousel__container">

              <?php if(get_sub_field('landing_sections_carousel_slide_image')): ?>
                <div class="carousel__image">
                  <?php
                    $image = get_sub_field('landing_sections_carousel_slide_image');
                    echo wp_get_attachment_image($image, 'large', false, array());
                  ?>
                </div>
              <?php endif; ?>

              <div class="carousel__content">
                <?php if (get_sub_field('landing_sections_carousel_slide_title')): ?>
                  <h2><?php the_sub_field('landing_sections_carousel_slide_title'); ?></h2>
                <?php endif; ?>

                <?php the_sub_field('landing_sections_carousel_slide_body'); ?>

                <?php if (have_rows('landing_sections_carousel_slide_features')): ?>
                  <?php while (have_rows('landing_sections_carousel_slide_features')): the_row(); ?>
                    <div class="carousel__feature">
                      <?php if (get_sub_field('landing_sections_carousel_slide_feature_icon')): ?>
                        <div class="carousel__icon">
                          <img src="<?php the_sub_field('landing_sections_carousel_slide_feature_icon'); ?>" alt="">
                        </div>
                      <?php endif; ?>
                      
                      <?php if (get_sub_field('landing_sections_carousel_slide_feature_body')): ?>
                        <div class="carousel__text">
                          <?php the_sub_field('landing_sections_carousel_slide_feature_body'); ?>
                        </div>
                      <?php endif; ?>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
            </div>
          <?php endif; ?>
        </div>
      <?php endwhile; ?>
    </div>
  </section>

<?php endif; ?>
