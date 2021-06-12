<?php get_header() ?>

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
                «Быстроденьги» – крупная федеральная компания на рынке микрофинансирования с разветвленной сетью
                офисов финансовой помощи по всей стране. Это первая организация в России, предложившая населению
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
                «Быстроденьги» – крупная федеральная компания на рынке микрофинансирования с разветвленной сетью
                офисов финансовой помощи по всей стране. Это первая организация в России, предложившая населению
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
                «Быстроденьги» – крупная федеральная компания на рынке микрофинансирования с разветвленной сетью
                офисов финансовой помощи по всей стране. Это первая организация в России, предложившая населению
                услугу «займы до зарплаты» — небольшие суммы денег в долг на короткий срок.
              </div>
            </div>
          </div>
        </div>
      </div>
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
      <div class="row">
        <div class="col-sm-4">
          <div class="form-group">
            <input type="text" class="form-control required" placeholder="Номер договора" />
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <input type="text" class="form-control required" placeholder="Сумма" />
          </div>
        </div>
        <div class="col-sm-4">
          <input type="submit" class="button btn block" value="Оплатить" />
        </div>
      </div>
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
      <div class="col-md-4">
        <div class="element relative">
          <div class="date">
            <div>04</div>
            <small>апреля</small>
          </div>
          <div class="text">
            <a href="#">
              Запустила продажу сертификатов
              на оказание юридических услуг
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="element relative">
          <div class="date">
            <div>04</div>
            <small>апреля</small>
          </div>
          <div class="text">
            <a href="#">
              Запустила продажу сертификатов
              на оказание юридических услуг
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="element relative">
          <div class="date">
            <div>04</div>
            <small>апреля</small>
          </div>
          <div class="text">
            <a href="#">
              Запустила продажу сертификатов
              на оказание юридических услуг
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="push40"></div>
</div>
<div class="footer-push"></div>
</div>

<?php get_footer() ?>