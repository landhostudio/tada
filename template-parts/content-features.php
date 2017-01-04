<section class="features">
  <div class="features__container">
    <?php
      $featuredImage = get_sub_field('landing_sections_features_image');
      if ($featuredImage):
    ?>
      <div class="features__image">
        <?php echo wp_get_attachment_image($featuredImage, 'large', false, array()); ?>
      </div>
    <?php endif; ?>
    
    <div class="features__content">
      <?php if (get_sub_field('landing_sections_features_title')): ?>
        <h2><?php the_sub_field('landing_sections_features_title'); ?></h2>
      <?php endif; ?>

      <?php the_sub_field('landing_sections_features_text'); ?>
      
      <?php if (have_rows('landing_sections_features_group')): ?>
        <div class="features__group">
          <?php while (have_rows('landing_sections_features_group')): the_row(); ?>
            <div class="features__item">
              <?php if (get_sub_field('landing_sections_features_group_icon')): ?>
                <div class="features__icon">
                  <img src="<?php the_sub_field('landing_sections_features_group_icon'); ?>" alt="">
                </div>
              <?php endif; ?>
              
              <?php if (get_sub_field('landing_sections_features_group_text')): ?>
                <div class="features__text">
                  <?php the_sub_field('landing_sections_features_group_text'); ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
