<?php get_header(); ?>
<main>
    <section class="single-section cmn-section">
        <div class="inner">
            <div class="single-wrapper">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <div class="text-wrapper">
                            <div class="text">
                                <time class="date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d') ?></time>
                                <h3 class="title"><?php the_title(); ?></h3>
                                <p class="desc"><?php the_content(); ?></p>
                            </div>
                        </div>
                    <?php endwhile;?>
                <?php endif; ?>
                <?php get_sidebar(); ?>
            </div>
        </div>
        <?php wp_pagenavi(); ?>
    </section>
</main>

<?php get_footer(); ?>