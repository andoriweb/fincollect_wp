<?php
/*
Template Name: О компании
*/

get_header();
?>
<div class="header-slider white about-slide" id="about" style="background-image: url(<?php the_field('about-bg') ?>);">
    <div class="table">
        <div class="table-cell">
            <div class="container">
                <div class="title"><?php the_field('about-title') ?></div>
                <p>
                    <?php the_field('about-subtitle') ?>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="push40"></div>
    <div class="container">
        <?php the_content() ?>
        <div class="push15"></div>
        <div class="title-h2"><span class="red">наши</span> достижения</div>
        <div class="push10"></div>
        <div class="icons-list achievements">
            <div class="element relative">
                <img src="<?php the_field('attainment-img-1') ?>" />
                <p><?php the_field('attainment-text-1') ?></p>
            </div>
            <div class="element relative">
                <img src="<?php the_field('attainment-img-2') ?>" />
                <p><?php the_field('attainment-text-2') ?></p>
            </div>
            <div class="element relative">
                <img src="<?php the_field('attainment-img-3') ?>" />
                <p><?php the_field('attainment-text-3') ?></p>
            </div>
        </div>
    </div>
    <div class="push25"></div>
</div>
<div class="worth gray-bg" id="value">
    <div class="push40"></div>
    <div class="container">
        <div class="title-h2"><span class="red">наши</span> ценности</div>
        <div class="push10"></div>
        <div class="flex row">
            <div class="col-sm-4">
                <div class="element">
                    <div class="img-wrapper">
                        <img src="<?php the_field('value-img-1') ?>" />
                    </div>
                    <div class="element-content">
                        <div class="title weight600 f18"><?php the_field('value-title-1') ?></div>
                        <div class="push5"></div>
                        <div class="text">
                            <?php the_field('value-text-1') ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="element">
                    <div class="img-wrapper">
                        <img src="<?php the_field('value-img-2') ?>" />
                    </div>
                    <div class="element-content">
                        <div class="title weight600 f18"><?php the_field('value-title-2') ?></div>
                        <div class="push5"></div>
                        <div class="text">
                            <?php the_field('value-text-2') ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="element">
                    <div class="img-wrapper">
                        <img src="<?php the_field('value-img-3') ?>" />
                    </div>
                    <div class="element-content">
                        <div class="title weight600 f18"><?php the_field('value-title-3') ?></div>
                        <div class="push5"></div>
                        <div class="text">
                            <?php the_field('value-text-3') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="push20"></div>
</div>
<div class="docs" id="docs">
    <div class="push40"></div>
    <div class="container">
        <div class="title-h2">Документы</div>
        <div class="push15"></div>
        <div class="row">
            <div class="col-md-4">
                <div class="element relative">
                    <!-- <a href="#" class="absolute"></a> -->
                    <div class="icon">
                        <div><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/pdf.png" /></div>
                        <small>8 kb</small>
                    </div>
                    <div class="text">
                        <?php echo do_shortcode( '[download id="166"]' ) ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="element relative">
                    <!-- <a href="#" class="absolute"></a> -->
                    <div class="icon">
                        <div><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/pdf.png" /></div>
                        <small>18 kb</small>
                    </div>
                    <div class="text">
                        <?php echo do_shortcode( '[download id="166"]' ) ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="element relative">
                    <!-- <a href="#" class="absolute"></a> -->
                    <div class="icon">
                        <div><img src="<?php echo bloginfo( 'template_url' ); ?>/assets/images/pdf.png" /></div>
                        <small>128 kb</small>
                    </div>
                    <div class="text">
                        <?php echo do_shortcode( '[download id="166"]' ) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="push30"></div>
</div>

<div class="association gray-bg" id="association">
    <div class="push45"></div>
    <div class="container">
        <div class="title-h2"><span class="red">Участие</span> в ассоциациях</div>
        <div class="push10"></div>
        <div class="partners-carousel">

            <?php
            // параметры по умолчанию
            $posts = get_posts( array(
            'numberposts' => 0,
            'category'    => 6,
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
        <div class="push10"></div>
    </div>
</div>
<div class="footer-push"></div>
</div>

<?php get_footer() ?>