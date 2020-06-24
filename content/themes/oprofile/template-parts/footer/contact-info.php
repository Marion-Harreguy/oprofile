      <address class="contact-info">
        <div class="contact-info__part">
          <i class="fa far far fa-envelope" aria-hidden="true"></i>
          <h4 class="contact-info__part__label">Email</h4>
          <!-- pour éviter les spams : https://www.nicolas-hoffmann.net/utilitaires/crypteur.php -->

          <?php

            $email = get_theme_mod('oprofile_footer_email');
            $phone = get_theme_mod('oprofile_footer_phone');
            $adress = nl2br(get_theme_mod('oprofile_footer_adress'));

          ?>
          <a href="mailto:<?php echo $email; ?>" class="contact-info__part__content is-email"><?php echo $email; ?></a>
        </div>
        <div class="contact-info__part">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <h4 class="contact-info__part__label">Téléphone</h4>
          <a href="tel:<?php echo $phone; ?>" class="contact-info__part__content"><?php echo $phone; ?></a>
        </div>
        <div class="contact-info__part">
          <i class="fa fa-home" aria-hidden="true"></i>
          <h4 class="contact-info__part__label">Adresse</h4>
          <p class="contact-info__part__content">
          <?php echo $adress; ?><br />
          </p>
        </div>

      </address>