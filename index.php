<?php get_header() ?>
<?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
        <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3> 
        <div><?php the_excerpt() ?></div> 
        <?php endwhile;
    else: ?>
        <p>Geen berichten gevonden...</p>
    <?php endif
?>  
