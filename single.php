<?php get_header() ?>
        <div class="news-detail">
            <div class="push40"></div>
            <div class="container">
                <h1>
                    <?php the_title() ?> 
                </h1>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="img-wrapper">
                            <?php the_post_thumbnail( 'thumbnails' ) ?>
                        </div>
                        <div class="push20"></div>
                    </div>
                    <div class="col-sm-6">
                        <div class="introtext">
                            <div class="news-date red"><?php echo get_the_date('d.m.y'); ?></div>
                            <div class="push20"></div>
                            <?php the_excerpt() ?>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <?php the_content() ?>
                </div>
                <hr />
                <a href="<?php echo home_url('new') ?>" class="decoration">Вернуться к списку новостей</a>
            </div>
            <div class="push40"></div>
        </div>
        <div class="footer-push"></div>
    </div>

    <script>
    $( function() {
        $('audio').audioPlayer();
    });
    </script>

<?php get_footer() ?>