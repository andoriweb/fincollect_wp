<?php
 
  /* Подключение стилей */
  add_action( 'wp_enqueue_scripts', 'fincollect_styles' );
  function fincollect_styles() {
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
    wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
  }

  /* Подключение скриптов */
  add_action( 'wp_enqueue_scripts', 'fincollect_sctipts' );
  function fincollect_sctipts() {
    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js' );
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr.js', array('jquery'), null, true );
    wp_enqueue_script( 'jquery-fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.js', array('jquery'), null, true );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'jquery-maskedinput', get_template_directory_uri() . '/assets/js/jquery.maskedinput.js', array('jquery'), null, true );
    wp_enqueue_script( 'plugins-scroll', get_template_directory_uri() . '/assets/js/plugins-scroll.js', array('jquery'), null, true );
    wp_enqueue_script( 'onReady', get_template_directory_uri() . '/assets/js/onReady.js', array('jquery'), null, true );
  }

  /* Регистрация меню */
  add_action( 'after_setup_theme', 'theme_register_nav_menu' );
  function theme_register_nav_menu() {
    register_nav_menu( 'top-menu', 'Верхнее меню' );
    register_nav_menu( 'mobile-menu', 'Мобильное меню' );
  }

 










?>