<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>
  <body>
    
    <header class="header" role="banner">
      <div class="header__container">

        <h1 class="header__title">
          <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
            <span class="hidden"><?php bloginfo('name'); ?></span>
            
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 124 36" width="124" height="36">
              <g>
                <path d="M20.44,34.55A15.61,15.61,0,0,1,16.5,35c-3.8,0-6.57-1.26-8.17-3.41C7.12,30,6.58,27.93,6.58,24.58V16.31H0V11H6.57V4.4l6.32,2.82V11h7.78v5.35H12.89v9a4.34,4.34,0,0,0,.78,3,4,4,0,0,0,3.21,1.17,15.42,15.42,0,0,0,2.58-.24Z"></path>
                <path d="M48.69,29.38V12.88L42.61,9.77v3.07a10.81,10.81,0,0,0-6.91-2.38c-6.42,0-11.58,5.35-11.58,12.3a12.66,12.66,0,0,0,3,8.27A11.87,11.87,0,0,0,36,35a9.45,9.45,0,0,0,6.7-2.51L46.22,36l4.64-4.4Zm-6.32-3.11a6.91,6.91,0,0,1-5.7,2.91,6.16,6.16,0,0,1-6.22-6.42,6.17,6.17,0,0,1,6.08-6.47,7.26,7.26,0,0,1,5.84,2.92Z"></path>
                <path d="M64.91,24.82l-3.78,3.78-7.84-7.84L57.06,17Z"></path>
                <path d="M86.51,34.53v-1.9A9.87,9.87,0,0,1,79.94,35,11.84,11.84,0,0,1,71,31a12.66,12.66,0,0,1-3-8.27c0-7,5.16-12.3,11.58-12.3a10.46,10.46,0,0,1,6.67,2.19V0l6.32,4.8V34.53ZM86.27,19.2a7.26,7.26,0,0,0-5.83-2.91,6.17,6.17,0,0,0-6.08,6.47,6.16,6.16,0,0,0,6.22,6.42,6.91,6.91,0,0,0,5.69-2.92Z"></path>
                <path d="M121.84,29.38V13.08l-6.08-3.41v3.16a10.81,10.81,0,0,0-6.91-2.38c-6.42,0-11.58,5.35-11.58,12.3a12.66,12.66,0,0,0,3,8.27,11.87,11.87,0,0,0,8.9,4,9.87,9.87,0,0,0,6.57-2.38L119.31,36,124,31.56Zm-6.32-3.11a6.91,6.91,0,0,1-5.69,2.92,6.16,6.16,0,0,1-6.22-6.42,6.17,6.17,0,0,1,6.08-6.47,7.26,7.26,0,0,1,5.84,2.92Z"></path>
              </g>
            </svg>
          </a>
        </h1>

        <?php
          $description = get_bloginfo('description');
          if ($description):
        ?>
          <div class="header__description">
            <p><?php echo $description; ?></p>
          </div>
        <?php endif; ?>
        
        <div class="header__menu">
          <button type="button" class="button button--toggle">
            <span class="hidden"><?php esc_html_e('Menu', 'tada'); ?></span>
            <span class="button--toggle-bar"></span>
            <span class="button--toggle-bar"></span>
            <span class="button--toggle-bar"></span>
          </button>
        </div>

        <?php if (has_nav_menu('menu')): ?>
          <nav class="header__navigation" role="navigation">
            <h2 class="hidden"><?php esc_html_e('Navigation', 'horoman'); ?></h2>
            <?php wp_nav_menu(array('theme_location' => 'menu')); ?>
          </nav>
        <?php endif; ?>

        <?php if (get_field('options_form_button', option)): ?>
          <div class="header__cta">
            <button class="button button--fancy" type="button"><?php the_field('options_form_button', option); ?></button>
          </div>
        <?php endif; ?>
      </div>
    </header>
