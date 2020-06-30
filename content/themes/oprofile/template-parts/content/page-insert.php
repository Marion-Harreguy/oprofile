      <section class="banner" id="banner" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
        <div class="intro">
          <h1 class="intro__title"><?php the_title(); ?></h1>
          <p class="intro__content">
            <?php the_content(); ?>

            <!-- exécution du hook 'hookie' -->
            <?php do_action('hookie') ?>

          </p>
        </div>
      </section> 