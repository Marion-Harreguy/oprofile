        <article class="post" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
          <h2 class="post__title"><?php the_title(); ?></h2>
          <p><?php the_content(); ?></p><br />
          <a href="<?php the_permalink(); ?>" style="text-decoration:underline;">Lire l'article en entier</a>
        </article>