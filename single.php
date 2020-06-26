  <?php get_header(); ?>
<div class="container-fluid">
    <div class="row">
        <main class="col-md-9">
            <div class="row">
                <?php if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                        <div class="col-md-3 p-4 text-right small bg-light">
                            Dit bericht is door: <?php the_author(); ?><br>
                            Datum: <?php the_time('j F Y') ?>
                            in: <?php the_category() ?>
                        </div>
                        <div class="col-md-9">
                            <h3><?php the_title() ?></h3>
                            <div><?php the_content() ?></div>
                            <hr>
                            <div class="bg-light p-4">
                                <?php if (comments_open() || get_comments_number()) :
                                    comments_template();
                                endif; ?>
                            </div>
                        <?php endwhile;
                else : ?>
                        <p>Geen berichten!</p>
                    <?php endif; ?>
                        </div>
            </div>
        </main>
        <aside class="col-md-3 bg-light p-4">
            <?php dynamic_sidebar('aside'); ?>
        </aside>
    </div>
</div>
<?php get_footer(); ?>