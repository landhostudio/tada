<?php
  $image      = get_sub_field('landing_sections_quote_background_image');
  $size       = 'large';
  $thumbLarge = $image['sizes'][ $size ];
?>

<?php if (get_sub_field('landing_sections_quote_title')): ?>
  <section class="quote"<?php if (get_sub_field('landing_sections_quote_text_color') || get_sub_field('landing_sections_quote_background_color')): ?> style="<?php if (get_sub_field('landing_sections_quote_text_color')): ?> color: <?php the_sub_field('landing_sections_quote_text_color'); ?>;<?php endif; ?><?php if (get_sub_field('landing_sections_quote_background_color')): ?> background-color: <?php the_sub_field('landing_sections_quote_background_color'); ?>;<?php endif; ?>"<?php endif; ?>>
    <div class="quote__container">
      <h2><?php the_sub_field('landing_sections_quote_title'); ?></h2>
    </div>

    <?php if (get_sub_field('landing_sections_quote_author') && $image): ?>
      <div class="quote__author">
        <span class="hidden"><?php the_sub_field('landing_sections_quote_author'); ?></span>
        <img src="<?php the_sub_field('landing_sections_quote_author_image'); ?>" alt="">
      </div>
    <?php endif; ?>

    <?php if ($image): ?>
      <div class="quote__background">
        <div class="quote__image rellax" data-rellax-speed="1.5" data-rellax-percentage="1">
          <?php echo wp_get_attachment_image( $image, 'large', false, array() ); ?>
        </div>
      </div>
    <?php endif; ?>

  </section>
<?php endif; ?>
