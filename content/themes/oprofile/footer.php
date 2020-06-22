</main>

    <?php if (get_theme_mod('oprofile_footer_active')) : ?>

      <footer class="footer" id="footer" style="background-color:<?php echo get_theme_mod('oprofile_footer_bgcolor'); ?>">

      <?php get_template_part('template-parts/footer/contact-form'); ?>
      <?php get_template_part('template-parts/footer/contact-info'); ?>

      </footer>

    <?php endif; ?>

  </div>

  <div class="menu">
    <a href="" class="ui-button close-menu">
      <i class="fa fa-close" aria-hidden="true"></i>
    </a>
    <!-- <nav class="main-nav">
      <ul>
        <li class="main-nav__item">
          <a href="#">Homepage</a>
        </li>
        <li class="main-nav__item">
          <a href="#">Blog</a>
        </li>
        <li class="main-nav__item">
          <a href="#">Projets</a>
        </li>
        <li class="main-nav__item">
          <a href="#">Exemple</a>
        </li>
        <li class="main-nav__item">
          <a href="#">Contact</a>
        </li>
      </ul>

    </nav> -->

    <?php

    $menu = wp_nav_menu([
      'theme_location' => 'main-menu',
      'container' => 'nav',
      'container_class' => 'main-nav',
      'echo' => false
    ]);

    $menu = str_replace(['menu-item', 'class="menu"'], ['main-nav__item', ''], $menu);

    echo $menu;

    ?>


    <div class="social-nav">
      <ul>
        <li>
          <a href="#">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-google" aria-hidden="true"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="fa fa-github" aria-hidden="true"></i>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <?php wp_footer(); ?>
</body>
</html>