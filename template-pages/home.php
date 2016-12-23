<?php
/**
 * Template Name: Home
 */
get_header(); ?>

<section class="hero">

	<?php if (get_field('home_hero_title')): ?>
    <div class="hero__title">
      <h2><?php the_field('home_hero_title'); ?></h2>
    </div>
	<?php endif; ?>

  <div class="hero__scroll">
    <button><?php esc_html_e('Learn More', 'tada'); ?></button>
  </div>

  <div class="hero__parallax">
    
    <div class="hero__parallax-1">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/parallax-1@1x.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/parallax-1@1x.jpg 1x, <?php echo get_stylesheet_directory_uri(); ?>/dist/img/parallax-1@2x.jpg 2x" alt="">
    </div>
    
    <div class="hero__parallax-2">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/parallax-2@1x.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/parallax-2@1x.jpg 1x, <?php echo get_stylesheet_directory_uri(); ?>/dist/img/parallax-2@2x.jpg 2x" alt="">
    </div>
    
    <div class="hero__parallax-3">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/parallax-3@1x.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/parallax-3@1x.jpg 1x, <?php echo get_stylesheet_directory_uri(); ?>/dist/img/parallax-3@2x.jpg 2x" alt="">
    </div>
    
    <div class="hero__parallax-4">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/parallax-4@1x.jpg" srcset="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/parallax-4@1x.jpg 1x, <?php echo get_stylesheet_directory_uri(); ?>/dist/img/parallax-4@2x.jpg 2x" alt="">
    </div>

  </div>

  <div class="hero__product">

    <div class="hero__product-key">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/key.jpg" alt="">
    </div>
    
    <div class="hero__product-shadow">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/key-shadow.jpg" alt="">
    </div>

  </div>

</section>

<?php get_footer(); ?>
