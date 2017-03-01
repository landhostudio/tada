<?php

  if (!function_exists('tada_setup')) {

    function tada_setup() {
      
      // Let WordPress manage the document title -------------------------------
			
      add_theme_support('title-tag');

      // Enable support for Post Thumbnails on posts and pages -----------------
			
      add_theme_support('post-thumbnails');

      // Enables dynamic navigation --------------------------------------------

      register_nav_menus(array(
        'menu' => 'Menu'
      ));

      // Load the assets -------------------------------------------------------
			
      function init_assets() {
        wp_enqueue_style('all-css', get_template_directory_uri() . '/dist/css/all.css', array(), '1.0.0');
        wp_enqueue_script('plugins', get_template_directory_uri() . '/dist/js/plugins.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('scripts', get_template_directory_uri() . '/dist/js/scripts.js', array('jquery'), '1.0.0', true);
      }
      add_action('wp_enqueue_scripts', 'init_assets');
      
      // Soil ------------------------------------------------------------------
      
      add_theme_support('soil-clean-up');
      // add_theme_support('soil-disable-asset-versioning');
      add_theme_support('soil-disable-trackbacks');
      add_theme_support('soil-nav-walker');
      add_theme_support('soil-relative-urls');

      // SVG upload ------------------------------------------------------------

      function svg_upload($mimes = array()) {
        $mimes['svg'] = 'image/svg+xml';
        $mimes['svgz'] = 'image/svg+xml';
        return $mimes;
      }
      add_filter('upload_mimes', 'svg_upload');
      
      // Content width ---------------------------------------------------------
      
      if (!isset($content_width)) $content_width = 640;

      // ACF Options -----------------------------------------------------------
      
      if (function_exists('acf_add_options_page')) {

        acf_add_options_page(array(
      		'page_title' 	=> 'Theme Options',
      		'menu_title'	=> 'Theme Options',
      		'menu_slug' 	=> 'theme-options'
      	));
        
      }
      
      get_template_part('inc/acf');

    }

  }
  add_action('after_setup_theme', 'tada_setup');
