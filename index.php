<?php 

/* 
Template name: Главная
*/

get_header() 
?>

<div class="header-slider white" style="background-image: url(<?php the_field('main-img') ?>)">
  <div class="table">
    <div class="table-cell">
      <div class="container">
        <div class="title"><?php the_field('main-title') ?></div>
        <p class="main-description">
          <?php the_field('main-description') ?>
        </p>
        <a href="<?php the_field('main-btn') ?>" class="button min dark-btn">Подробнее</a>
      </div>
    </div>
  </div>
</div>
<div class="partners">
  <div class="push40"></div>
  <div class="container">
    <div class="title-h2"><span class="red">С кем мы</span> работаем</div>
    <div class="push10"></div>
    <div class="partners-carousel">

    <?php
        // параметры по умолчанию
        $posts = get_posts( array(
          'numberposts' => 0,
          'category'    => 4,
          'orderby'     => 'date',
          'order'       => 'DESC',
          'include'     => array(),
          'exclude'     => array(),
          'meta_key'    => '',
          'meta_value'  =>'',
          'post_type'   => 'post',
          'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ) );

        foreach( $posts as $post ){
          setup_postdata($post);
        ?>

          <div class="item">
            <div class="row">
              <div class="col-md-6">
                <div class="img-wrapper">
                  <?php the_post_thumbnail( 'medium' ) ?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="element-content">
                  <div class="push30 hidden-md"></div>
                  <div class="title f24"><?php the_title(); ?></div>
                  <div class="push5"></div>
                  <div class="text">
                    <?php the_content(  ); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

      <?php
        }

        wp_reset_postdata(); // сброс
      ?>

    </div>
    <div class="push100"></div>
  </div>
</div>
<div class="loan-pay gray-bg">
  <div class="push40"></div>
  <div class="container">
    <div class="title-h2"><span class="red">Оплатить</span> займ</div>
    <p>
      Вы можете оплатить вашу задолженность онлайн и уточнить о поступлении денежных средств по номеру горячей линии.
    </p>

    <form class="rf">
        <?php echo do_shortcode( '[contact-form-7 id="65" title="Контактная форма 1"]' ) ?>
    </form>

  </div>
  <div class="push20"></div>
</div>
<div class="news">
  <div class="push40"></div>
  <div class="container">
    <div class="title-h2">Новости</div>
    <div class="push5"></div>
    <div class="row">

      
      <?php
        // параметры по умолчанию
        $posts = get_posts( array(
          'numberposts' => 3,
          'category'    => 5,
          'orderby'     => 'date',
          'order'       => 'DESC',
          'include'     => array(),
          'exclude'     => array(),
          'meta_key'    => '',
          'meta_value'  =>'',
          'post_type'   => 'post',
          'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ) );

        foreach( $posts as $post ){
          setup_postdata($post);
        ?>
          <div class="col-md-4">
            <div class="element relative">
              <div class="date">
                <div><?php echo get_the_date('d'); ?></div>
                <small><?php echo get_the_date('F'); ?></small>
              </div>
              <div class="text">
                <a href="<?php the_permalink(); ?>">
                  <?php the_excerpt(  ); ?>
                </a>
              </div>
            </div>
          </div>
        <?php
          }

        wp_reset_postdata(); // сброс
      ?>

    </div>
  </div>
  <div class="push40"></div>
</div>
<div class="footer-push"></div>
</div>

<?php get_footer() ?>