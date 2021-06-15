<?php
/*
    Template Name: Партнёрам
*/

get_header();
?>
        <div class="services-wrapper">
            <div class="push35"></div>
            <div class="container">
                <h1>Партнерам</h1>
                <h2><span class="red">наши</span> услуги</h2>
                <div class="push5"></div>
            </div>
            <div class="our-services">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="element relative">
                                <img src="<?php the_field('service-img-1') ?>" />
                                <div class="title weight600 f18">
                                    <?php the_field('service-title-1') ?>
                                </div>
                                <div class="push8"></div>
                                <div class="content">
                                    <?php the_field('service-text-1') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="element relative">
                                <img src="<?php the_field('service-img-2') ?>" />
                                <div class="title weight600 f18">
                                    <?php the_field('service-title-2') ?>
                                </div>
                                <div class="push8"></div>
                                <div class="text">
                                    <?php the_field('service-text-2') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="element relative">
                                <img src="<?php the_field('service-img-3') ?>" />
                                <div class="title weight600 f18">
                                    <?php the_field('service-title-3') ?>
                                </div>
                                <div class="push8"></div>
                                <div class="text">
                                    <?php the_field('service-text-3') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="push15"></div>
                    <p>Если у вас есть предложения и вопросы, вы можете связаться с нами по телефонам или 
                    отправить нам письмо: <a href="<?php the_field('e-mail', 102) ?>" class="decoration"><?php the_field('e-mail', 102) ?></a></p>
                </div>
                <div class="push10"></div>
                <hr />
            </div>
        </div>
        
        <div class="partners" id="partners">
            <div class="push25"></div>
            <div class="container">
                <div class="title-h2"><span class="red">Наши</span> партнеры</div>
                <div class="push5"></div>
                <div class="partners-carousel">

                    <?php
                        // параметры по умолчанию
                        $posts = get_posts( array(
                        'numberposts' => 0,
                        'category'    => 8,
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
            <hr />
        </div>
        
        
        <div class="tenders" id="tenders">
            <div class="push25"></div>
            <div class="container">
                <div class="title-h2"><span class="red">Наши</span> тендеры</div>
                <div class="push5"></div>
                <div class="tenders-carousel">

                <?php
                    // параметры по умолчанию
                    $posts = get_posts( array(
                    'numberposts' => 0,
                    'category'    => 9,
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
                                    <div class="push10 hidden-md"></div>
                                    <div class="title f24"><?php the_title(); ?></div>
                                    <div class="push5"></div>
                                    <div class="text">
                                        <?php the_content(); ?> 
                                    </div>
                                    <div class="push20"></div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <a href="#" class="button block">Участвовать</a>
                                        </div>
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
            <hr />
        </div>
        <div class="docs" id="docs">
            <div class="push20"></div>
            <div class="container">
                <div class="title-h2"><span class="red">Рекомендательные</span> письма</div>
                <div class="push15"></div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="element relative">
                            <div class="icon">
                                <div><img src="<?php echo bloginfo('template_url'); ?>/assets/images/pdf.png" /></div>
                                <small>8 kb</small>
                            </div>
                            <div class="text">
                                <?php echo do_shortcode( '[download id="281"]' ) ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="element relative">
                            <div class="icon">
                                <div><img src="<?php echo bloginfo('template_url'); ?>/assets/images/pdf.png" /></div>
                                <small>18 kb</small>
                            </div>
                            <div class="text">
                                <?php echo do_shortcode( '[download id="281"]' ) ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="element relative">
                            <div class="icon">
                                <div><img src="<?php echo bloginfo('template_url'); ?>/assets/images/pdf.png" /></div>
                                <small>128 kb</small>
                            </div>
                            <div class="text">
                                <?php echo do_shortcode( '[download id="281"]' ) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="push30"></div>
        </div>
        
        <div class="footer-push"></div>
    </div>

    <div class="modal" id="resume">
        <div class="title-h2"><span class="red">отправить</span> резюме</div>
        <form class="rf">
            <div class="form-group">
                <input type="text" class="form-control required" placeholder="Имя" />
            </div>
            <div class="form-group">
                <input type="text" class="form-control required tel" placeholder="Телефон" />
            </div>
            <div class="form-group">
                <div class="file-input-box">
                    <input type="file" id="fileInput1" />
                    <label for="fileInput1">Прикрепить резюме</label>
                    <div class="file-input-info">
                        <div class="file-input-info-inner relative">
                            <div class="attach-name"></div> <span class="attach-delete"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="customcheck">
                <div class="form-group">
                    <input type="checkbox" id="agreement" class="required" checked="checked" />
                    <label for="agreement">Я согласен с</label> <a href="#" class="decoration">условиями обработки данных</a>
                </div>
            </div>
            <div class="push10"></div>
            <input type="submit" class="button btn block" value="отправить" />
        </form>
    </div>

<?php get_footer() ?>