<?PHP
/*
    Template Name: Карьера
*/

get_header();
?>
<div class="job-wrapper">
    <div class="push35"></div>
    <div class="container">
        <h1>Карьера</h1>
        <h2><span class="red">Почему стоит</span> работать в «Финколлект»</h2>
        <div class="push5"></div>
    </div>
    <div class="job-why">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="element relative">
                        <img src="<?php the_field('advantage-img-1') ?>" />
                        <div class="title weight600 f18">
                            <?php the_field('advantage-title-1') ?>
                        </div>
                        <div class="push8"></div>
                        <div class="text">
                            <?php the_field('advantage-text-1') ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="element relative">
                        <img src="<?php the_field('advantage-img-2') ?>" />
                        <div class="title weight600 f18">
                            <?php the_field('advantage-title-2') ?>
                        </div>
                        <div class="push8"></div>
                        <div class="text">
                            <?php the_field('advantage-text-2') ?>.
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="element relative">
                        <img src="<?php the_field('advantage-img-3') ?>" />
                        <div class="title weight600 f18">
                            <?php the_field('advantage-title-3') ?>
                        </div>
                        <div class="push8"></div>
                        <div class="text">
                            <?php the_field('advantage-text-3') ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="element relative">
                        <img src="<?php the_field('advantage-img-4') ?>" />
                        <div class="title weight600 f18">
                            <?php the_field('advantage-title-4') ?>
                        </div>
                        <div class="push8"></div>
                        <div class="text">
                            <?php the_field('advantage-text-4') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="push10"></div>
        <hr />
    </div>

    <div class="vacancy">
        <div class="push25"></div>
        <div class="container">
            <div class="title-h2">Вакансии</div>
            <div class="push5"></div>
            <div class="accordeon invert">

                <?php
                    // параметры по умолчанию
                    $posts = get_posts( array(
                    'numberposts' => 0,
                    'category'    => 7,
                    'orderby'     => 'date',
                    'order'       => 'ASC',
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
                    <div class="element">
                        <div class="title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <?php the_title() ?>
                                </div>
                                <div class="col-sm-6 text-right-sm">
                                    <?php the_field('vacancy-wage') ?>
                                </div>
                            </div>
                        </div>
                        <div class="element-content">
                            <div class="push10"></div>
                            <div class="row content">
                                <div class="col-sm-6">
                                    <ul>
                                        <li>
                                            <?php the_field('advantage-vacancy-1') ?>
                                        </li>
                                        <li>
                                            <?php the_field('advantage-vacancy-2') ?>
                                        </li>
                                        <li>
                                            <?php the_field('advantage-vacancy-3') ?>
                                        </li>
                                        <li>
                                            <?php the_field('advantage-vacancy-4') ?>
                                        </li>
                                        <li>
                                            <?php the_field('advantage-vacancy-5') ?>
                                        </li>
                                        <li>
                                            <?php the_field('advantage-vacancy-6') ?>
                                        </li>
                                        <li>
                                            <?php the_field('advantage-vacancy-7') ?>
                                        </li>
                                        <li>
                                            <?php the_field('advantage-vacancy-8') ?>
                                        </li>
                                        <li>
                                            <?php the_field('advantage-vacancy-9') ?>
                                        </li>
                                        <li>
                                            <?php the_field('advantage-vacancy-10') ?>
                                        </li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <a href="#resume" class="button fancyboxModal block">отправить резюме</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="weight600 f18">Требования</div>
                                    <div class="push5"></div>
                                    <ul>
                                        <li>
                                            <?php the_field('demand-vacancy-1') ?>
                                        </li>
                                        <li>
                                            <?php the_field('demand-vacancy-2') ?>
                                        </li>
                                        <li>
                                            <?php the_field('demand-vacancy-3') ?>
                                        </li>
                                        <li>
                                            <?php the_field('demand-vacancy-4') ?>
                                        </li>
                                        <li>
                                            <?php the_field('demand-vacancy-5') ?>
                                        </li>
                                        <li>
                                            <?php the_field('demand-vacancy-6') ?>
                                        </li>
                                        <li>
                                            <?php the_field('demand-vacancy-7') ?>
                                        </li>
                                        <li>
                                            <?php the_field('demand-vacancy-8') ?>
                                        </li>
                                        <li>
                                            <?php the_field('demand-vacancy-9') ?>
                                        </li>
                                        <li>
                                            <?php the_field('demand-vacancy-10') ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                    }

                    wp_reset_postdata(); // сброс
                ?>

            </div>
            <div class="push45"></div>
            <div class="manager">
                <div class="title-h2"><span class="red">Контакты менеджеров</span> по персоналу</div>
                <p>Подробная информация по телефонам:</p>
                <div class="row">
                    <div class="col-sm-6">
                        +7 (960) 363-84-18 — Дарья
                    </div>
                    <div class="col-sm-6">
                        +7 (964) 859-26-14 — Яна
                    </div>
                </div>
            </div>
        </div>
        <div class="push50"></div>
    </div>
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
                <label for="agreement">Я согласен с</label> <a href="#" class="decoration">условиями обработки
                    данных</a>
            </div>
        </div>
        <div class="push10"></div>
        <input type="submit" class="button btn block" value="отправить" />
    </form>
</div>

<?php get_footer() ?>