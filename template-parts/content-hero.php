<?php if (is_home() || is_front_page()): ?>
  <section class="hero">
    <?php if (get_field('landing_hero_title')): ?>
      <div class="hero__container">
        <div class="hero__title">
          <h2><?php the_field('landing_hero_title'); ?></h2>
          <?php if (get_field('landing_hero_wordmark')): ?>
            <div class="hero__wordmark">
              <img src="<?php the_field('landing_hero_wordmark'); ?>" alt="">
            </div>
          <?php endif; ?>
        </div>
      </div>
    <?php endif; ?>

    <div class="hero__readmore">
      <button type="button" class="button button--more">
        <span><?php esc_html_e('Learn More', 'tada'); ?></span>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 18" width="8" height="18">
          <g>
            <path d="M4,17.18l-.39.35L4,18l.39-.46ZM3.48,0V17.18h1V0Zm.9,16.83L.78,12.53,0,13.24l3.61,4.3Zm0,.71L8,13.24l-.78-.71-3.61,4.3Z"></path>
          </g>
        </svg>
      </button>
    </div>

    <div class="hero__scene">
      <div class="hero__petals">
        <div class="hero__petal hero__petal--1">
          <img class="rellax" src="<?php echo get_template_directory_uri(); ?>/dist/img/petals-1.png" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/petals-1.png 1x, <?php echo get_template_directory_uri(); ?>/dist/img/petals-1@1,5x.png 1.5x, <?php echo get_template_directory_uri(); ?>/dist/img/petals-1@2x.png 2x" alt="" data-rellax-speed="4" data-rellax-percentage="0.25">
        </div>

        <div class="hero__petal hero__petal--2">
          <img class="rellax" src="<?php echo get_template_directory_uri(); ?>/dist/img/petals-2.png" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/petals-2.png 1x, <?php echo get_template_directory_uri(); ?>/dist/img/petals-2@1,5x.png 1.5x, <?php echo get_template_directory_uri(); ?>/dist/img/petals-2@2x.png 2x" alt="" data-rellax-speed="8">
        </div>

        <div class="hero__petal hero__petal--3">
          <img class="rellax" src="<?php echo get_template_directory_uri(); ?>/dist/img/petals-3.png" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/petals-3.png 1x, <?php echo get_template_directory_uri(); ?>/dist/img/petals-3@1,5x.png 1.5x, <?php echo get_template_directory_uri(); ?>/dist/img/petals-3@2x.png 2x" alt="" data-rellax-speed="4">
        </div>
      </div>

      <div class="hero__product">
        <div class="hero__key">
          <img class="rellax" src="<?php echo get_template_directory_uri(); ?>/dist/img/key.png" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/key.png 1x, <?php echo get_template_directory_uri(); ?>/dist/img/key@1,5x.png 1.5x, <?php echo get_template_directory_uri(); ?>/dist/img/key@2x.png 2x" alt="" data-rellax-speed="6">
        </div>

        <div class="hero__shadow">
          <img class="rellax" src="<?php echo get_template_directory_uri(); ?>/dist/img/shadow.png" srcset="<?php echo get_template_directory_uri(); ?>/dist/img/shadow.png 1x, <?php echo get_template_directory_uri(); ?>/dist/img/shadow@1,5x.png 1.5x, <?php echo get_template_directory_uri(); ?>/dist/img/shadow@2x.png 2x" alt="" data-rellax-speed="4">
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
