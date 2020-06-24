        <div class="grid__item">
          <i class="grid__item__icon fa fa <?php the_field('icon'); ?>" aria-hidden="true"></i>
          <h3 class="grid__item__title"><?php the_title(); ?></h3>
          <p class="grid__item__content"><?php the_content(); ?></p>
          <p class="grid_item_content">Niveau de compétence: <?php the_field('level'); ?></p>
          <?php // custom fields https://wordpress.org/support/article/custom-fields/
                // the_meta(); ?>
        </div>