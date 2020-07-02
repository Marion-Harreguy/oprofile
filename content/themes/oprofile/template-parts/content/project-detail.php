<article style="padding:3em;color:black;">
<img style="width:30%;" src="<?php the_post_thumbnail_url(); ?>" alt="">
    <h1 style="font-weight:bold;"><?php the_title(); ?></h1><br/>
    <?php the_content(); ?><br/>
    <p style="font-size:0.8em;">Date : <?php the_date(); ?></p><br/>
    <p style="font-size:0.8em;">Auteur : <?php the_author(); ?></p>
</article>