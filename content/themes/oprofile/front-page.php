    <?php get_header(); ?>

      <?php if (have_posts()): while (have_posts()): the_post(); ?>

        <?php get_template_part('template-parts/content/banner'); ?>

      <?php endwhile; endif; ?>

      <!-- section : posts -->
      
      <section class="posts" id="posts">

      <?php 

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

        $category = get_theme_mod('oprofile_home_category_display'); 

        $args = [
          // 'post_type' => 'post',
          'posts_per_page' => $nb_posts_homepage,
          'orderby' => 'rand',
          // 'category__not_in' => 3,
          'category_name' => $category
        ];

        $wpQueryArticles = new WP_Query($args);
        
        ?>

        <?php if ($wpQueryArticles->have_posts()): while 
        ($wpQueryArticles->have_posts()): $wpQueryArticles->the_post(); ?>

          <?php get_template_part('template-parts/content/post-excerpt'); ?>

        <?php endwhile; endif; ?>

        </section>

      <?php endif; ?>

      <!-- section : oprofile_home_insert -->

      <?php if (get_theme_mod('oprofile_home_insert')) : ?>

        <?php // echo '<span style="padding:3em; color:red;">' . get_theme_mod('oprofile_home_insert') . '</span>'; ?>

          <?php 

          $args = [
            'page_id' => get_theme_mod('oprofile_home_insert')
          ];

          $wpQueryPageInsert = new WP_Query($args);

          ?>

        <?php if ($wpQueryPageInsert->have_posts()): while 
        ($wpQueryPageInsert->have_posts()): $wpQueryPageInsert->the_post(); ?>

          <?php get_template_part('template-parts/content/page-insert'); ?>

        <?php endwhile; endif; ?>

      <?php endif; ?>

      <!-- section : grid -->

      <section class="grid" id="grid">

      <?php

      $args = [
          'post_type' => 'skill'
      ];

      $wpqueryArticles = new WP_Query($args);

      ?>

      <?php if ($wpqueryArticles->have_posts()): while ($wpqueryArticles->have_posts()): $wpqueryArticles->the_post(); ?>

          <?php get_template_part('template-parts/content/skill'); ?>

      <?php endwhile; endif; ?>

      </section>

    <?php get_footer(); ?>