<?php
/*
Template Name: О компании
*/

get_header();
?>
<div class="header-slider white about-slide" style="background-image: url(<?php the_field('about-bg') ?>);">
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
<div class="worth gray-bg">
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
<div class="docs">
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

<div class="association gray-bg">
    <div class="push45"></div>
    <div class="container">
        <div class="title-h2"><span class="red">Участие</span> в ассоциациях</div>
        <div class="push10"></div>
        <div class="partners-carousel">
            <div class="item">
                <div class="row">
                    <div class="col-md-6">
                        <div class="img-wrapper">
                            <img src="images/napka.jpg" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="element-content">
                            <div class="push30 hidden-md"></div>
                            <div class="title f24">Национальная ассоциация профессиональных коллекторских агентств
                                (НАПКА)</div>
                            <div class="push5"></div>
                            <div class="text">
                                «Быстроденьги» – крупная федеральная компания на рынке микрофинансирования с
                                разветвленной сетью офисов финансовой помощи по всей стране.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-md-6">
                        <div class="img-wrapper">
                            <img src="images/partner1.jpg" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="element-content">
                            <div class="push30 hidden-md"></div>
                            <div class="title f24">Быстроденьги</div>
                            <div class="push5"></div>
                            <div class="text">
                                «Быстроденьги» – крупная федеральная компания на рынке микрофинансирования с
                                разветвленной сетью
                                офисов финансовой помощи по всей стране. Это первая организация в России, предложившая
                                населению
                                услугу «займы до зарплаты» — небольшие суммы денег в долг на короткий срок.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-md-6">
                        <div class="img-wrapper">
                            <img src="images/partner1.jpg" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="element-content">
                            <div class="push30 hidden-md"></div>
                            <div class="title f24">Быстроденьги</div>
                            <div class="push5"></div>
                            <div class="text">
                                «Быстроденьги» – крупная федеральная компания на рынке микрофинансирования с
                                разветвленной сетью
                                офисов финансовой помощи по всей стране. Это первая организация в России, предложившая
                                населению
                                услугу «займы до зарплаты» — небольшие суммы денег в долг на короткий срок.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="push100"></div>
        <div class="push10"></div>
    </div>
</div>
<div class="footer-push"></div>
</div>

<?php get_footer() ?>