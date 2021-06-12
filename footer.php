<div class="footer-wrapper">
  <div class="container">
    <div class="push25"></div>
    <div class="row">
      <div class="col-sm-6 col-md-7 col-lg-6">
        <div class="copyright">
          © 2016 ООО «Финколлект». <br class="hidden-md hidden-lg">Все права защищены.
          <div class="footer-logo"><a href="<?php bloginfo('url') ?>"><img src="<?php the_field('footer-logo', 2) ?>" alt="logo" /></a></div>
        </div>
      </div>
      <div class="col-sm-6 col-md-5 col-lg-4 col-lg-offset-2 hidden-xs">
        <div class="push5"></div>
        <div class="footer-tel relative">
          <div class="push3"></div>
          <div><?php the_field('phone', 2) ?></div>
          <small>Звонок по РФ бесплатный </small>
          <a href="#callback" class="button invert min callback-btn fancyboxModal">Обратный звонок</a>
        </div>
      </div>
    </div>
    <div class="push15"></div>
  </div>
</div>
<div class="modal" id="callback">
  <div class="title-h2"><span class="red">перезвонить</span> мне</div>
  <p>
    Оставьте телефон и мы перезвоним вам бесплатно
    в удобное время.
  </p>
  <form class="rf">
    <div class="form-group">
      <input type="text" class="form-control required" placeholder="Имя" />
    </div>
    <div class="form-group">
      <input type="text" class="form-control required tel" placeholder="Телефон" />
    </div>
    <input type="submit" class="button btn block" value="позвоните мне" />
  </form>
</div>

<?php wp_footer() ?>

</body>

</html>