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
          <img class="intro__img" src="<?php the_field('intro_img');?>" alt="хирурги">
          <img class="intro__img-bg" src="<?php echo bloginfo('template_url');?>/assets/img/index/intro-bg.svg" alt="хирурги">
        </div>
        <div class="intro__content">
          <h2 class="intro__title"><?php the_field('intro_title');?><span><?php the_field('intro_subtitle');?></span></h2>
          <div class="intro__text">
            <p><?php the_field('intro_text');?></p>
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
        <?php 
            $my_posts = get_posts( array(
                'numberposts' => -1,
                'category_name'    => 'course-slider',
                'orderby'     => 'date',
                'order'       => 'ASC',
                'post_type'   => 'post',
                'suppress_filters' => true,
            ) );
    
            global $post;
    
            foreach( $my_posts as $post ){
                setup_postdata( $post );
                ?>
                    <li class="course">
                        <div class="cours__wrapper">
                        <div class="cours__content">
                            <div class="cours__counts"><span><?php the_field('number') ?></span>/<?php the_field('count') ?></div>
                            <div class="cours__note">Наши курсы</div>
                            <h3 class="cours__title">Курс<span><?php the_title(); ?></span></h3>
                            <a href="<?php the_field('course-link') ?>" class="cours__btn btn">Подробнее</a>
                        </div>
                        <div class="cours__img-box">
                            <img src="<?php the_field('course-img') ?>" alt="операция на кисти">
                        </div>
                        </div>
                    </li>
                <?php
                // формат вывода the_title() ...
            }
    
            wp_reset_postdata(); 
        ?>

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

        <?php 
            $my_posts = get_posts( array(
                'numberposts' => -1,
                'category_name'    => 'teaches-slider',
                'orderby'     => 'date',
                'order'       => 'ASC',
                'post_type'   => 'post',
                'suppress_filters' => true,
            ) );
    
            global $post;
    
            foreach( $my_posts as $post ){
                setup_postdata( $post );
                ?>
                    <li class="teachers__item">
                        <div class="teachers__item-wrapper">
                        <div class="teachers__img-box">
                            <img src="<?php the_field('teacher-img') ?>" alt="преподаватель">
                        </div>
                        <div class="teachers__name"><?php the_title(); ?></div>
                        <p class="teachers__text"><?php the_field('teacher-descr') ?></p>
                        </div>
                    </li>
                <?php
                // формат вывода the_title() ...
            }
    
            wp_reset_postdata(); 
        ?>
        </ul>
        <img class="teachers__dot" src="<?php echo bloginfo('template_url');?>/assets/img/icons/dots.svg" alt="декоративные точки">
      </div>
    </div>
  </section>

<?php 
    get_footer();
?>