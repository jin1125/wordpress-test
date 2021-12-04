<?php
add_action('init', function () {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
});

add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('reset', get_template_directory_uri().'/reset.css');
  wp_enqueue_style('style', get_stylesheet_uri(), array('reset'));
});