<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="pinterest" content="nopin">
    <?php wp_head(); ?>
    <?php get_template_part('inc/icons'); ?>
  </head>
  <body>
    
    <header class="header<?php if (has_nav_menu('menu')): ?> header--hasmenu<?php endif; ?>" role="banner">
      <div class="header__container">

        <h1 class="header__title">
          <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
            <span class="hidden"><?php bloginfo('name'); ?></span>
            
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 112 36" width="112" height="36">
              <g>
                <path d="M20.43,34.56a15.57,15.57,0,0,1-3.94.49c-3.79,0-6.57-1.26-8.17-3.41C7.1,30,6.57,27.94,6.57,24.58V16.31H0V11H6.57V4.4l6.32,2.82V11h7.78v5.35H12.89v9a4.34,4.34,0,0,0,.78,3,4,4,0,0,0,3.21,1.17,15.42,15.42,0,0,0,2.58-.24Z"/>
                <path d="M49.14,29.38V12.89L43.05,9.78v3.06a10.81,10.81,0,0,0-6.91-2.38c-6.42,0-11.58,5.35-11.58,12.31a12.66,12.66,0,0,0,3,8.27,11.86,11.86,0,0,0,8.9,4,9.5,9.5,0,0,0,6.7-2.51L46.66,36l4.64-4.41Zm-6.32-3.12a6.91,6.91,0,0,1-5.69,2.92,6.17,6.17,0,0,1-6.23-6.42A6.17,6.17,0,0,1,37,16.3a7.26,7.26,0,0,1,5.84,2.92Z" />
                <path d="M73.85,34.54v-1.9A9.87,9.87,0,0,1,67.28,35a11.86,11.86,0,0,1-8.9-4,12.66,12.66,0,0,1-3-8.27c0-7,5.16-12.31,11.58-12.31a10.46,10.46,0,0,1,6.67,2.19V0l6.32,4.8V34.54ZM73.6,19.21a7.26,7.26,0,0,0-5.84-2.92,6.17,6.17,0,0,0-6.08,6.47,6.17,6.17,0,0,0,6.23,6.42,6.91,6.91,0,0,0,5.69-2.92Z"/>
                <path d="M109.84,29.38V13.09l-6.08-3.41v3.16a10.81,10.81,0,0,0-6.91-2.38c-6.42,0-11.58,5.35-11.58,12.31a12.66,12.66,0,0,0,3,8.27,11.86,11.86,0,0,0,8.9,4,9.87,9.87,0,0,0,6.57-2.38L107.31,36,112,31.56Zm-6.32-3.12a6.91,6.91,0,0,1-5.69,2.92,6.17,6.17,0,0,1-6.23-6.42,6.17,6.17,0,0,1,6.08-6.47,7.26,7.26,0,0,1,5.84,2.92Z" />
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
        
        <?php if (has_nav_menu('menu')): ?>
          <div class="header__menu">
            <button type="button" class="button button--toggle">
              <span class="hidden"><?php esc_html_e('Menu', 'tada'); ?></span>
              <span class="button--toggle-bar"></span>
              <span class="button--toggle-bar"></span>
              <span class="button--toggle-bar"></span>
            </button>
          </div>

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

    <main role="main">
