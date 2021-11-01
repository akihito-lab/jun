<?php get_header(); ?>
<main>
    <section class="archive-section cmn-section">
        <div class="inner">
            <div class="archive-wrapper">
                <?php if ( have_posts() ) : ?>
                <ul class="archive-list">
                    <?php while ( have_posts() ) : the_post(); ?>
                    <li class="item">
                        <a href="<?php the_permalink(); ?>" class="img-wrapper-link"><div class="img-wrapper"><img src="<?php echo $thumbnail ?>" alt="" class="img"></div></a>
                        <div class="text">
                            <time class="date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d') ?></time>
                            <h3 class="title"><a href="<?php the_permalink(); ?>" class="link"><?php the_title(); ?></a></h3>
                            <p class="desc"><?php echo $excerpt = max_excerpt_length($post -> post_content, 100); ?></p>
                            <div class="link-wrapper"><a href="<?php the_permalink(); ?>" class="link">見る</a></div>
                        </div>
                    </li>
                    <?php endwhile;?>
                </ul>
                <?php endif; ?>
                <?php get_sidebar(); ?>
            </div>
            <?php wp_pagenavi(); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>