<?php
/**
 * Template Name: Landing Page
 */
get_header(); ?>

<?php get_template_part('template-parts/content', 'hero'); ?>

<?php if (have_rows('landing_sections')): ?>

  <?php while (have_rows('landing_sections')): the_row(); ?>
    
    <?php if (get_row_layout() == 'landing_sections_quote'): ?>
      <?php get_template_part('template-parts/content', 'quote'); ?>
    <?php elseif (get_row_layout() == 'landing_sections_carousel'): ?>
      <?php get_template_part('template-parts/content', 'carousel'); ?>
    <?php elseif (get_row_layout() == 'landing_sections_form'): ?>
      <?php get_template_part('template-parts/content', 'form'); ?>
    <?php endif; ?>
    
  <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
