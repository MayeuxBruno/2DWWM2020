<div class="blog-post colonne">
    <?php the_post_thumbnail(); //Affichage de l'image de mise en avant?> 
    <h2 class="blog-post-title"><?php the_title(); ?></h2>
    <p class="blog-post-meta"><?php //the_date(); ?>  <a href="#"><?php //the_author(); ?></a></p>
    <?php if (is_single())
    {
        //L'article est le seul présent sur la page
        the_content();
        } else {
        //Il y a plusieurs articles sur la page
        the_excerpt();
    }?>
    <a href="<?php echo get_permalink(); ?>"> Lire la suite...</a>
</div><!-- /.blog-post -->