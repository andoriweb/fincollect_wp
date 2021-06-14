<?php
    /*
    Template Name: Новости
    */

    get_header();
?>
<div class="news-list">
    <div class="push40"></div>
    <div class="container">
        <h1 class="news-title">Новости</h1>
        <div class="row">

            <?php 
            $args = array(
                'paged'         => ( get_query_var('paged') ? get_query_var('paged') : 1 ),
                'post_type'   => 'post',
                'category__not_in'    => '4',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            );
            query_posts( $args );
            while ( have_posts() ) {
                the_post();
                ?>

                <div class="col-sm-6 col-md-4">
                    <div class="element relative">
                        <a href="<?php the_permalink(); ?>" class="absolute"></a>
                        <div class="img-wrapper">
                            <?php the_post_thumbnail( 'thumbnail'); ?>
                        </div>
                        <div class="push15"></div>
                        <a href="<?php the_permalink(); ?>" class="decoration black">
                            <?php echo pietergoosen_custom_excerpts(20); ?>
                        </a>
                        <div class="push5"></div>
                        <div class="news-date red"><?php echo get_the_date('d.m.y'); ?></div>
                        <div class="push30"></div>
                    </div>
                </div>
                <hr class="clear-hr" />

                <?php
            } ?>
            <?php 
            the_posts_pagination(
                $args = array(
                'show_all'     => false, // показаны все страницы участвующие в пагинации
                'end_size'     => 10,     // количество страниц на концах
                'mid_size'     => 2,     // количество страниц вокруг текущей
                'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
                'prev_text'    => 'Предыдущая',
                'next_text'    => 'Следующая',
                'type'         => 'list',
                )
            ); ?>
            <?php
            wp_reset_query();
            ?>







            

            <!-- <div class="col-sm-6 col-md-4">
                <div class="element relative">
                    <a href="#" class="absolute"></a>
                    <div class="img-wrapper">
                        <img src="images/news1.jpg" alt="" />
                    </div>
                    <div class="push15"></div>
                    <a href="#" class="decoration black">
                        Генеральный директор группы компаний
                        «Быстроденьги» Юрий Провкин избран Юрий Провкин
                    </a>
                    <div class="push5"></div>
                    <div class="news-date red">30.05.16</div>
                    <div class="push30"></div>
                </div>
            </div>
            <hr class="clear-hr" />
            <div class="col-sm-6 col-md-4">
                <div class="element relative">
                    <a href="#" class="absolute"></a>
                    <div class="img-wrapper">
                        <img src="images/news1.jpg" alt="" />
                    </div>
                    <div class="push15"></div>
                    <a href="#" class="decoration black">
                        Генеральный директор группы компаний
                        «Быстроденьги» Юрий Провкин избран
                    </a>
                    <div class="push5"></div>
                    <div class="news-date red">30.05.16</div>
                    <div class="push30"></div>
                </div>
            </div>
            <hr class="clear-hr" />
            <div class="col-sm-6 col-md-4">
                <div class="element relative">
                    <a href="#" class="absolute"></a>
                    <div class="img-wrapper">
                        <img src="images/news1.jpg" alt="" />
                    </div>
                    <div class="push15"></div>
                    <a href="#" class="decoration black">
                        Генеральный директор группы компаний
                        «Быстроденьги» Юрий Провкин избран
                    </a>
                    <div class="push5"></div>
                    <div class="news-date red">30.05.16</div>
                    <div class="push30"></div>
                </div>
            </div>
            <hr class="clear-hr" />
            <div class="col-sm-6 col-md-4">
                <div class="element relative">
                    <a href="#" class="absolute"></a>
                    <div class="img-wrapper">
                        <img src="images/news1.jpg" alt="" />
                    </div>
                    <div class="push15"></div>
                    <a href="#" class="decoration black">
                        Генеральный директор группы компаний
                        «Быстроденьги» Юрий Провкин избран
                    </a>
                    <div class="push5"></div>
                    <div class="news-date red">30.05.16</div>
                    <div class="push30"></div>
                </div>
            </div>
            <hr class="clear-hr" />
            <div class="col-sm-6 col-md-4">
                <div class="element relative">
                    <a href="#" class="absolute"></a>
                    <div class="img-wrapper">
                        <img src="images/news1.jpg" alt="" />
                    </div>
                    <div class="push15"></div>
                    <a href="#" class="decoration black">
                        Генеральный директор группы компаний
                        «Быстроденьги» Юрий Провкин избран
                    </a>
                    <div class="push5"></div>
                    <div class="news-date red">30.05.16</div>
                    <div class="push30"></div>
                </div>
            </div>
            <hr class="clear-hr" />
            <div class="col-sm-6 col-md-4">
                <div class="element relative">
                    <a href="#" class="absolute"></a>
                    <div class="img-wrapper">
                        <img src="images/news1.jpg" alt="" />
                    </div>
                    <div class="push15"></div>
                    <a href="#" class="decoration black">
                        Генеральный директор группы компаний
                        «Быстроденьги» Юрий Провкин избран
                    </a>
                    <div class="push5"></div>
                    <div class="news-date red">30.05.16</div>
                    <div class="push30"></div>
                </div>
            </div>
            <hr class="clear-hr" />
            <div class="col-sm-6 col-md-4">
                <div class="element relative">
                    <a href="#" class="absolute"></a>
                    <div class="img-wrapper">
                        <img src="images/news1.jpg" alt="" />
                    </div>
                    <div class="push15"></div>
                    <a href="#" class="decoration black">
                        Генеральный директор группы компаний
                        «Быстроденьги» Юрий Провкин избран
                    </a>
                    <div class="push5"></div>
                    <div class="news-date red">30.05.16</div>
                    <div class="push30"></div>
                </div>
            </div>
            <hr class="clear-hr" />
            <div class="col-sm-6 col-md-4">
                <div class="element relative">
                    <a href="#" class="absolute"></a>
                    <div class="img-wrapper">
                        <img src="images/news1.jpg" alt="" />
                    </div>
                    <div class="push15"></div>
                    <a href="#" class="decoration black">
                        Генеральный директор группы компаний
                        «Быстроденьги» Юрий Провкин избран
                    </a>
                    <div class="push5"></div>
                    <div class="news-date red">30.05.16</div>
                    <div class="push30"></div>
                </div>
            </div>
            <hr class="clear-hr" /> -->

        </div> <!-- /row -->
        <hr>

        <!-- <div class="pagination text-center">
            <ul>
                <li class="prev"><a href="#"><span class="hidden-xs">Предыдущая</span></a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li>...</li>
                <li><a href="#">13</a></li>
                <li class="next"><a href="#"><span class="hidden-xs">Следующая</span></a></li>
            </ul>
        </div> -->

    </div>
    <div class="push40"></div>
</div>
<div class="footer-push"></div>
</div>

<?php get_footer(); ?>