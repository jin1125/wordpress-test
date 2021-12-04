<?php
add_action('init', function () {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  register_post_type('info', [
    'label' => 'お知らせ',
    'public' => true,
    'menu_position' => 5,
    'supports' => ['thumbnail', 'title', 'editor', 'page-attributes'],
    'has_archive' => true,
    'show_in_rest' => true
  ]);
});

add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('reset', get_template_directory_uri() . '/reset.css');
  wp_enqueue_style('style', get_stylesheet_uri(), array('reset'));
});
