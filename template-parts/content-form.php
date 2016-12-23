<section class="form">

  <?php if (have_rows('landing_sections_form_quotes')): ?>
    <div class="form__quotes">

      <?php while (have_rows('landing_sections_form_quotes')): the_row(); ?>
        
        <div class="form__quote">

          <?php if (get_sub_field('landing_sections_form_quote_title')): ?>
            <div class="form__quote-title">
              <h3><?php the_sub_field('landing_sections_form_quote_title'); ?></h3>
            </div>
          <?php endif; ?>

          <?php if (get_sub_field('landing_sections_form_quote_author')): ?>
            <div class="form__quote-author">
              <p><?php the_sub_field('landing_sections_form_quote_author'); ?></p>
            </div>
          <?php endif; ?>

        </div>

      <?php endwhile; ?>

    </div>
  <?php endif; ?>

  <?php if (get_sub_field('landing_sections_form_title') && get_sub_field('landing_sections_form_body') && get_field('options_form_mailchimp', option)): ?>
    <div class="form__input">

      <div class="form__input-text">
        <h3><?php the_sub_field('landing_sections_form_title'); ?></h3>
        <?php the_sub_field('landing_sections_form_body'); ?>
      </div>

      <?php if (get_field('options_form_mailchimp', option)): ?>

        <form action="<?php the_field('options_form_mailchimp', option) ?>">

          <div class="form__input-label1">
            <label><?php esc_html_e('Email Address', 'tada'); ?></label>
          </div>
          
          <div class="form__input-email">
            <input id="email" type="email">
          </div>
          
          <div class="form__input-label2">
            <label for="email"></label>
          </div>

          <div class="form__input-submit">
            <button type="submit"><?php the_field('options_form_button', option); ?></button>
          </div>

        </form>

      <?php endif; ?>


    </div>
  <?php endif; ?>

</section>
