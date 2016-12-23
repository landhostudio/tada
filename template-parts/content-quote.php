<?php if (get_sub_field('home_sections_quote_title')): ?>
  <section class="quote"<?php if (get_sub_field('home_sections_quote_color') || get_sub_field('home_sections_quote_background')): ?> style="<?php if (get_sub_field('home_sections_quote_color')): ?>background-color: <?php the_sub_field('home_sections_quote_color'); ?>;<?php endif; ?><?php if (get_sub_field('home_sections_quote_background')): ?> background-image: url('<?php the_sub_field('home_sections_quote_background'); ?>');<?php endif; ?>"<?php endif; ?>>

    <div class="quote__title">
      <h2><?php the_sub_field('home_sections_quote_title'); ?></h2>
    </div>

    <?php if (get_sub_field('home_sections_quote_author') && get_sub_field('home_sections_quote_author_image')): ?>

      <div class="quote__author">
        <p class="hidden"><?php the_sub_field('home_sections_quote_author'); ?></p>
        <img src="<?php the_sub_field('home_sections_quote_author_image'); ?>" alt="">
      </div>

    <?php endif; ?>

  </section>
<?php endif; ?>
