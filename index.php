<?php
    get_header();
?>

<div class="menu">
    <button class="menu__close round-btn" type="button">
      <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
      <line x1="2.12571" y1="2" x2="28.9958" y2="28.8701" stroke="white" stroke-width="3" stroke-linecap="round"/>
      <line x1="2" y1="28.8699" x2="28.8701" y2="1.99983" stroke="white" stroke-width="3" stroke-linecap="round"/>
      </svg></button>
      <div class="container">
        <div class="menu__inner">
          <div class="menu__img-box">
            <img class="active" src="<?php echo bloginfo('template_url');?>/assets/img/menu-index.png" alt="хирург">
            <img data-id="about" src="<?php echo bloginfo('template_url');?>/assets/img/menu-about.png" alt="хирурги">
            <img data-id="contacts" src="<?php echo bloginfo('template_url');?>/assets/img/menu-contacts.png" alt="логотипы">
            <img data-id="courses" src="<?php echo bloginfo('template_url');?>/assets/img/menu-courses.png" alt="операция">
          </div>
          <ul class="menu__list">
            <!-- <li class="menu__item">
              <a class="menu__link anchor" href="#about" data-src="about"><span>О нас</span></a>
            </li> -->
            <li class="menu__item">
              <a class="menu__link anchor" href="#contacts" data-src="contacts"><span>Контакты</span></a>
            </li>
            <li class="menu__item">
              <a class="menu__link" href="/courses/" data-src="courses"><span>Курсы</span></a>
            </li>
          </ul>
        </div>
      </div>
  </div>

  <section class="promo">
    <div class="container">
      <div class="promo__inner">
        <div class="promo__title">
          <img src="<?php echo bloginfo('template_url');?>/assets/img/index/promo-title.svg" alt="Hand masterclass">
        </div>
        <a href="#" class="promo__btn btn">Наши курсы</a>
        <div class="promo__dots-box">
          <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/dots.svg" alt="декоративные точки">
          <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/dots.svg" alt="декоративные точки">
          <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/dots.svg" alt="декоративные точки">
        </div>
      </div>
    </div>
    <div class="promo__big-img">
      <img src="<?php echo bloginfo('template_url');?>/assets/img/index/promo.png" alt="хирург">
    </div>
  </section>

  <section class="intro">
    <div class="container">
      <div class="intro__inner">
        <div class="intro__img-box">
          <img class="intro__img" src="<?php echo bloginfo('template_url');?>/assets/img/index/intro.png" alt="хирурги">
          <img class="intro__img-bg" src="<?php echo bloginfo('template_url');?>/assets/img/index/intro-bg.svg" alt="хирурги">
        </div>
        <div class="intro__content">
          <h2 class="intro__title">Кисть – <span>уникальный орган</span></h2>
          <div class="intro__text">
            <p>состоящий из 29 костей, 34 мышц, 123 связок, чувствительность которого осуществляется тремя нервами. Восстановление этой функции, утраченной в результате травмы или заболевания – главная задача кистевого хирурга. Чтобы стать специалистом в этой области требуется многолетнее обучение и постоянное совершенствование. Поэтому цель Hand Masterclass - популяризация хирургии кисти, передача знаний о методах лечения травм, их последствий и заболеваний верхней конечности.</p>
          </div>
          <div class="intro__dots">
            <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/dots.svg" alt="декоративные точки">
            <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/dots.svg" alt="декоративные точки">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="pluses">
    <div class="container">
      <div class="pluses__inner">
        <ul class="pluses__list">
          <li class="pluses__item">
            <div class="pluses__img-box">
              <img src="<?php echo bloginfo('template_url');?>/assets/img/index/pluses/1.svg" alt="иконка">
            </div>
            <div class="pluses__item-title">Опыт</div>
            <p class="pluses__text">
              за последние 3 года нами проведено 9 курсов по анатомии, хирургии и терапии кисти, с общим числом курсантов более 200 человек и 2 live-вебинара
            </p>
          </li>
          <li class="pluses__item">
            <div class="pluses__img-box">
              <img src="<?php echo bloginfo('template_url');?>/assets/img/index/pluses/2.svg" alt="иконка">
            </div>
            <div class="pluses__item-title">ДОСТУПНОСТЬ</div>
            <p class="pluses__text">
              на практической части курса не более двух курсантов на один анатомический препарат
            </p>
          </li>
          <li class="pluses__item">
            <div class="pluses__img-box">
              <img src="<?php echo bloginfo('template_url');?>/assets/img/index/pluses/3.svg" alt="иконка">
            </div>
            <div class="pluses__item-title">КАЧЕСТВО</div>
            <p class="pluses__text">
              мы сами отбираем  кадаверный материал, у нас особый подход к уровню теоретического материала и качеству его подачи, а наши преподаватели - одни из лучших кистевых хирургов России
            </p>
          </li>
          <li class="pluses__item">
            <div class="pluses__img-box">
              <img src="<?php echo bloginfo('template_url');?>/assets/img/index/pluses/4.svg" alt="иконка">
            </div>
            <div class="pluses__item-title">ОТКРЫТОСТЬ</div>
            <p class="pluses__text">
              мы делимся тем, что знаем сами и научились у других 
            </p>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="courses">
    <div class="container">
      <div class="courses__inner">
        <ul class="courses__slider">
          <li class="course">
            <div class="cours__wrapper">
              <div class="cours__content">
                <div class="cours__counts"><span>01</span>/03</div>
                <div class="cours__note">Наши курсы</div>
                <h3 class="cours__title">Курс<span>по локальным лоскутам кисти</span></h3>
                <a href="#" class="cours__btn btn">Подробнее</a>
              </div>
              <div class="cours__img-box">
                <img src="<?php echo bloginfo('template_url');?>/assets/img/courses/1.png" alt="операция на кисти">
              </div>
            </div>
          </li>

          <li class="course">
            <div class="cours__wrapper">
              <div class="cours__content">
                <div class="cours__counts"><span>02</span>/03</div>
                <div class="cours__note">Наши курсы</div>
                <h3 class="cours__title">Курс<span>по нервам верхней конечности</span></h3>
                <a href="#" class="cours__btn btn">Подробнее</a>
              </div>
              <div class="cours__img-box">
                <img src="<?php echo bloginfo('template_url');?>/assets/img/courses/2.png" alt="операция на кисти">
              </div>
            </div>
          </li>

          <li class="course">
            <div class="cours__wrapper">
              <div class="cours__content">
                <div class="cours__counts"><span>03</span>/03</div>
                <div class="cours__note">Наши курсы</div>
                <h3 class="cours__title">Курс<span>базовые навыки по микрохирургии</span></h3>
                <a href="#" class="cours__btn btn">Подробнее</a>
              </div>
              <div class="cours__img-box">
                <img src="<?php echo bloginfo('template_url');?>/assets/img/courses/3.png" alt="операция на кисти">
              </div>
            </div>
          </li>
        </ul>
        <div class="courses__dots">
          <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/dots.svg" alt="декоративные точки">
          <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/dots.svg" alt="декоративные точки">
          <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/dots.svg" alt="декоративные точки">
        </div>
      </div>
    </div>
  </section>

  <section class="teachers">
    <div class="container">
      <div class="teachers__inner">
        <h2 class="teachers__title">Наши преподаватели</h2>
        <ul class="teachers__slider">
          <li class="teachers__item">
            <div class="teachers__item-wrapper">
              <div class="teachers__img-box">
                <img src="<?php echo bloginfo('template_url');?>/assets/img/index/teachers/1.png" alt="преподователь">
              </div>
              <div class="teachers__name">Байтингер Андрей Владимирович</div>
              <p class="teachers__text">Пластический хирург НИИ микрохирургии, Томск</p>
            </div>
          </li>

          <li class="teachers__item">
            <div class="teachers__item-wrapper">
              <div class="teachers__img-box">
                <img src="<?php echo bloginfo('template_url');?>/assets/img/index/teachers/2.png" alt="преподователь">
              </div>
              <div class="teachers__name">Николай Карпинский Антонович</div>
              <p class="teachers__text">Еuropean Diploma in Hand Surgery
                Реаклиник, Санкт - Петербург</p>
            </div>
          </li>

          <li class="teachers__item">
            <div class="teachers__item-wrapper">
              <div class="teachers__img-box">
                <img src="<?php echo bloginfo('template_url');?>/assets/img/index/teachers/3.png" alt="преподователь">
              </div>
              <div class="teachers__name">Назарян Георгий Адольфович</div>
              <p class="teachers__text">Руководитель Центра Микрохирургии Кисти ГКБ им. А.К. Ерамишанцева, Москва, Еuropean Diploma in Hand Surgery</p>
            </div>
          </li>

          <li class="teachers__item">
            <div class="teachers__item-wrapper">
              <div class="teachers__img-box">
                <img src="<?php echo bloginfo('template_url');?>/assets/img/index/teachers/4.png" alt="преподователь">
              </div>
              <div class="teachers__name">Сухинин Тимофей Юрьевич</div>
              <p class="teachers__text">Заведующий микрохирургическим отделением Центра Микрохирургии Кисти ГКБ им. А.К. Ерамишанцева, Москва</p>
            </div>
          </li>

          <li class="teachers__item">
            <div class="teachers__item-wrapper">
              <div class="teachers__img-box">
                <img src="<?php echo bloginfo('template_url');?>/assets/img/index/teachers/5.png" alt="преподователь">
              </div>
              <div class="teachers__name">Хентов Алексей Александрович</div>
              <p class="teachers__text">Травматолог-ортопед отделения хирургии кисти и микрохирургии ГКБ им. С.С. Юдина, Москва</p>
            </div>
          </li>

          <li class="teachers__item">
            <div class="teachers__item-wrapper">
              <div class="teachers__img-box">
                <img src="<?php echo bloginfo('template_url');?>/assets/img/index/teachers/6.png" alt="преподователь">
              </div>
              <div class="teachers__name">Шакиров Артём Ильдарович</div>
              <p class="teachers__text">Травматолог - ортопед Центра Микрохирургии Кисти ГКБ им. А.К. Ерамишанцева</p>
            </div>
          </li>

          <li class="teachers__item">
            <div class="teachers__item-wrapper">
              <div class="teachers__img-box">
                <img src="<?php echo bloginfo('template_url');?>/assets/img/index/teachers/7.png" alt="преподователь">
              </div>
              <div class="teachers__name">Байтингер Андрей Владимирович</div>
              <p class="teachers__text">Пластический хирург НИИ микрохирургии, Томск</p>
            </div>
          </li>
        </ul>
        <img class="teachers__dot" src="<?php echo bloginfo('template_url');?>/assets/img/icons/dots.svg" alt="декоративные точки">
      </div>
    </div>
  </section>

<?php 
    get_footer();
?>