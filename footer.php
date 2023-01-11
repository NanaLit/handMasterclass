<footer id="contacts" class="footer">
    <div class="container">
      <div class="footer__inner">
        <div class="footer__contacts">
          <div class="footer__contact">
            <div class="footer__title">Позвоните нам</div>
            <a class="footer__link" href="tel:<?php the_field('phone', 2);?>"><?php the_field('phone', 2);?></a>
          </div>
          <div class="footer__contact">
            <div class="footer__title">Напишите нам</div>
            <a class="footer__link" href="mailto:<?php the_field('email', 2);?>"><?php the_field('email', 2);?></a>
          </div>
        </div>

        <div class="footer__right-box">
          <div class="footer__logo">
            <a href="/">
                <?php the_custom_logo(); ?>
            </a>
          </div>
          <div class="footer__copy"><?php the_field('copy', 2);?></div>
        </div>

        <div class="footer__dots">
          <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/dots.svg" alt="декоративные точки">
          <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/dots.svg" alt="декоративные точки">
          <img src="<?php echo bloginfo('template_url');?>/assets/img/icons/dots.svg" alt="декоративные точки">
        </div>
      </div>
    </div>
  </footer>
    <?php
        wp_footer();
    ?>
</body>
</html>