<?php get_header(); ?>
<main>
    <section class="archive-section cmn-section">
        <div class="inner">
            <div class="archive-wrapper">
                <ul class="archive-list">
                    <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                    <li class="item">
                            <a href="<?php the_permalink(); ?>" class="img-wrapper-link ofh">
                                    <?php
                                    $cats = get_the_category();
                                    foreach($cats as $cat):
                                    ?>
                                    <!-- カテゴリー名 -->
                                    <span class="category-name"><?php echo esc_html($cat->name); ?></span>
                                    <?php
                                    endforeach;
                                    ?>
                                <div class="img-wrapper">
                                <?php $thumbnail = (get_the_post_thumbnail_url( $post->ID, 'medium' )) ? get_the_post_thumbnail_url( $post->ID, 'medium' ) : get_template_directory_uri().'/image/noimg.png'; ?>
                                    <img src="<?php echo $thumbnail ?>" alt="アイキャッチ画像" class="img">
                                </div>
                            </a>
                        <div class="text">
                            <time class="date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d') ?></time>
                            <h3 class="title"><a href="<?php the_permalink(); ?>" class="link"><?php the_title(); ?></a></h3>
                            <p class="desc"><?php echo $excerpt = max_excerpt_length($post -> post_content, 210); ?></p>
                            <div class="link-wrapper"><a href="<?php the_permalink(); ?>" class="link">続きを見る</a></div>
                        </div>
                    </li>
                    <?php endwhile;?>
                    <?php else: ?>
                        <p class="none-post">ただいま記事を作成しております。</p>
                    <?php endif;?>
                </ul>
                <?php get_sidebar(); ?>
            </div>
            <?php wp_pagenavi(); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>