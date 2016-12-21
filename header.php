<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
  </head>
  <body>
    <header role="banner">
      <h1>
        <a rel="home" href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      </h1>
      <nav role="navigation">
        <h2><?php esc_html_e('Navigation', 'horoman'); ?></h2>
        <?php wp_nav_menu(array('theme_location' => 'menu')); ?>
      </nav>
    </header>
