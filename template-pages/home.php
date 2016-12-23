<?php
/**
 * Template Name: Home
 */
get_header(); ?>

<?php get_template_part('template-parts/content', 'hero'); ?>

<?php if (have_rows('home_sections')): ?>

  <?php while (have_rows('home_sections')): the_row(); ?>
    
    <?php if (get_row_layout() == 'home_sections_quote'): ?>
      <?php get_template_part('template-parts/content', 'quote'); ?>
    <?php elseif (get_row_layout() == 'home_sections_carousel'): ?>
      <?php get_template_part('template-parts/content', 'carousel'); ?>
    <?php elseif (get_row_layout() == 'home_sections_form'): ?>
    <?php endif; ?>
    
  <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
