      <?php get_header(); ?>

      <?php if (have_posts()): while (have_posts()): the_post(); ?>

        <?php get_template_part('template-parts/content/banner'); ?>

      <?php endwhile; endif; ?>
      
      <section class="posts" id="posts">

      <?php 
      
      $args = [
        'post_type' => 'post',
        'posts_per_page' => 6,
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