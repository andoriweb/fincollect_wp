<?php
/* 
Template Name: Контакты
*/
get_header();
?>
        <div class="requisites">
            <div class="push50"></div>
                <div class="container">
                    <h1>Контакты</h1>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="element">
                                <p>
                                    <strong>Адрес</strong><br />
                                    <?php the_field('contact-address') ?>
                                </p>
                                <p>
                                    <strong>Телефон </strong><br />
                                    <?php the_field('phone', 2) ?>
                                </p>
                                <p>
                                    <strong>E-mail </strong><br />
                                    <a href="<?php the_field('e-mail') ?>" class="decoration">mail@mail.ru</a>
                                </p>
                                <p>
                                    <strong>Контакты для СМИ </strong><br />
                                    <?php the_field('phone', 2) ?>
                                    <br>
                                    <a href="<?php the_field('contact-cmi') ?>" class="decoration">info@fincollect.ru</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="element">
                                <p>
                                    <strong>Наши реквизиты </strong><br />
                                    <?php the_field('contact-details') ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="push50"></div>
        </div>
        <div class="map-wrapper">
            <div id="google-map" class="google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2244.5374670704114!2d37.52426191593108!3d55.76653668055703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b5497a6d52e6ab%3A0xd4671dc67e60c8b3!2zMS3QuSDQnNCw0LPQuNGB0YLRgNCw0LvRjNC90YvQuSDRgtGD0L8uLCDQnNC-0YHQutCy0LAsINCg0L7RgdGB0LjRjw!5e0!3m2!1sru!2sua!4v1623668783557!5m2!1sru!2sua" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
        
        <div class="feedback gray-bg" style="border-bottom: none;">
            <div class="push40"></div>
            <div class="container">
                <div class="title-h2"><span class="red">Форма</span> обратной связи</div>
                <p>Все ваши жалобы и предложения Вы можете направить нам, и мы обязательно примем их в работу.</p>
                <div class="push5"></div>

                <form class="rf">
                    <?php echo do_shortcode('[contact-form-7 id="115" title="Форма Контакты"]') ?>
                </form>

            </div>
            <div class="push20"></div>
        </div>
        <div class="footer-push"></div>
    </div>

<?php get_footer() ?>