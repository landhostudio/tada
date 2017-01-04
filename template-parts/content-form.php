<section class="form">
  <div class="form__container">
    <div class="form__signup">
      <?php if (get_sub_field('landing_sections_form_title')): ?>
        <h2><?php the_sub_field('landing_sections_form_title'); ?></h2>
      <?php endif; ?>

      <?php the_sub_field('landing_sections_form_body'); ?>
      
      <?php if (get_field('options_form_mailchimp', option)): ?>
        <form action="<?php the_field('options_form_mailchimp', option) ?>">
          <div class="form__label form__label-1">
            <label><?php esc_html_e('Email Address', 'tada'); ?></label>
          </div>

          <div class="form__email">
            <input type="email" id="email" class="input">
          </div>

          <div class="form__label form__label-2">
            <label for="email"></label>
          </div>

          <div class="form__button">
            <button type="submit" class="button"><?php the_field('options_form_button', option); ?></button>
          </div>
        </form>
      <?php endif; ?>
    </div>
    
    <div class="form__quotes">
      <div class="form__quote">
        <?php if (get_sub_field('landing_sections_form_quote_title')): ?>
          <div class="form__quote-title">
            <h3 class="h2 font-normal"><?php the_sub_field('landing_sections_form_quote_title'); ?></h3>
          </div>
        <?php endif; ?>

        <?php if (get_sub_field('landing_sections_form_quote_author')): ?>
          <div class="form__quote-author">
            <p><?php the_sub_field('landing_sections_form_quote_author'); ?></p>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
