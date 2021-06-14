<?php
 
  /* Подключение стилей */
  add_action( 'wp_enqueue_scripts', 'fincollect_styles' );
  function fincollect_styles() {
    
    // wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.css' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );
    wp_enqueue_style( 'main-style', get_stylesheet_uri() );
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

  /* Превьюшки для постов */
  add_theme_support( 'post-thumbnails' );

  // удаляет H2 из шаблона пагинации
  add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
  function my_navigation_template( $template, $class ){
    return '
      <div class="col-md-12">
        <hr>
        <div class="pagination text-center"
          <nav class="text-center navigation %1$s" role="navigation">
            <div>%3$s</div>
          </nav> 
        </div>
      </div>
    ';
  }

  // Сократить excerpt
  function pietergoosen_custom_excerpts($limit) { return wp_trim_words(get_the_excerpt(), $limit, '<a href="'. esc_url( get_permalink() ) . '" id="more">' . '&nbsp;&hellip;' . '<br>' . __( 'Read more &nbsp;&raquo;', 'pietergoosen' ) . '</a>'); } 
  











?>