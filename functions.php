<?php
function add_files()
{
  wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;500;700&display=swap');
  // トップページ 
  if (is_page('front')) {
    wp_enqueue_style('top-style', get_theme_file_uri('/src/css/top.css'));
  }
  // menu
  elseif (is_page('menu')) {
    wp_enqueue_style('menu-style', get_theme_file_uri('/src/css/menu.css'));
  }
  // hamburger
  elseif (is_page('hamburger')) {
    wp_enqueue_style('hamburger-style', get_theme_file_uri('/src/css/hamburger.css'));
  }
  // hot-sand
  elseif (is_page('hot-sand')) {
    wp_enqueue_style('hot-sand-style', get_theme_file_uri('/src/css/hot-sand.css'));
  }
  // dri-des
  elseif (is_page('dri-des')) {
    wp_enqueue_style('dri-des-style', get_theme_file_uri('/src/css/dri-des.css'));
  }
  // news
  elseif (is_page('news')) {
    wp_enqueue_style('news-style', get_theme_file_uri('/src/css/news.css'));
  }
};

function wp_document_title_separator($separator)
{
  $separator = '|';
  return $separator;
}
add_filter('document_title_separator', 'wp_document_title_separator');
add_theme_support('title-tag');
add_action('wp_enqueue_scripts', 'add_files');
