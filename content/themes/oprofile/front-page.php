      <?php get_header(); ?>

      <?php if (have_posts()): while (have_posts()): the_post(); ?>

        <?php get_template_part('template-parts/content/banner'); ?>

      <?php endwhile; endif; ?>
      
      <section class="posts" id="posts">

      <?php 

      // ------------------------------------------
      // vérifier les réglages du customizer
      if (get_theme_mod('oprofile_posts_count')) {
        $nb_posts_homepage = get_theme_mod('oprofile_posts_count');
      } 
      else { 
        $nb_posts_homepage = 0;
      }

      ?>

      <?php

      if ($nb_posts_homepage != 0): ?>

        <section class="posts" id="posts">
      
        <?php

        $args = [
          'post_type' => 'post',
          'posts_per_page' => $nb_posts_homepage,
          'orderby' => 'rand',
          'category__not_in' => 2
        ];

        $wpQueryArticles = new WP_Query($args);
        
        ?>

        <?php if ($wpQueryArticles->have_posts()): while 
        ($wpQueryArticles->have_posts()): $wpQueryArticles->the_post(); ?>

          <?php get_template_part('template-parts/content/post-excerpt'); ?>

        <?php endwhile; endif; ?>

        </section>

      <?php endif; ?>

      <section class="grid" id="grid">

      <?php 
      
      $args = [
        'post_type' => 'post',
        'category_name' => 'competences',
        'orderby' => 'rand',
      ];

      $wpQueryArticles = new WP_Query($args);
      
      ?>

      <?php if ($wpQueryArticles->have_posts()): while 
      ($wpQueryArticles->have_posts()): $wpQueryArticles->the_post(); ?>

        <?php get_template_part('template-parts/content/skill'); ?>

      <?php endwhile; endif; ?>

      </section>

      <?php get_footer(); ?>