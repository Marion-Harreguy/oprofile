<?php

/*
Template Name: Liste des projets
*/

?>

<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>

    <?php get_template_part('template-parts/content/banner-project'); ?>

<?php endwhile; endif; ?>

<section class="posts" id="posts">

<?php 

$args = [
  'post_type' => 'project', // cf. plugin oprojects : register_post_type('project', $args);
];

$wpQueryProjects = new WP_Query($args);

?>

<?php if ($wpQueryProjects->have_posts()): while 
($wpQueryProjects->have_posts()): $wpQueryProjects->the_post(); ?>  
  
  <?php get_template_part('template-parts/content/project-excerpt'); ?>


<?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>