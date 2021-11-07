
<?php get_header(); ?>
<main>
    <section class="archive-section cmn-section">
        <div class="inner">
            <h2 class="search-title">「<?php the_search_query(); ?>」の検索結果は<?php echo $wp_query->found_posts;?>件です</h2>
            <div class="archive-wrapper">
                <?php if(have_posts()): ?>
                    <ul class="archive-list">
                        <?php while(have_posts()) : the_post(); ?>
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
                                    <img src="<?php echo $thumbnail ?>" alt="" class="img">
                                </div>
                            </a>
                        <div class="text">
                            <time class="date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d') ?></time>
                            <h3 class="title"><a href="<?php the_permalink(); ?>" class="link"><?php the_title(); ?></a></h3>
                            <p class="desc"><?php echo $excerpt = max_excerpt_length($post -> post_content, 210); ?></p>
                            <div class="link-wrapper"><a href="<?php the_permalink(); ?>" class="link">続きを見る</a></div>
                        </div>
                    </li>
                        <?php endwhile; ?>
                    </ul>
                        <?php else : ?>
                        <div class="no-search">
                            <p class="desc" >Topページに戻る場合は<a href="<?php echo home_url(); ?>"><span style="color:red">こちら</span></a>から戻ることができます。</p>
                        </div>
                <?php endif; ?>
                <?php get_sidebar(); ?>
            </div>
        </div>
        <?php wp_pagenavi(); ?>
    </section>
</main>

<?php get_footer(); ?>