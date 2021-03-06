<div class="sidebar">
    <div class="tab-flex">
    <div class="sidebar-wrapper">
        <h2 class="sidebar-title cmn-sidebar-title">
            Search for...
            <span class="i_box"><i class="one_i"></i></span>
        </h2>
        <div class="search-wrapper">
            <?php get_search_form(); ?>
            <div class="category-search">
                <p class="title">カテゴリー</p>
                <div class="list">
                    <?php
                    $cats = get_categories();
                    foreach($cats as $cat):
                    ?>
                    <!-- カテゴリー名 -->
                    <a href="<?php echo get_category_link($cat->term_id); ?>" class="link"><?php echo esc_html($cat->name); ?></a>
                    <?php endforeach;?>
                </div>
            </div>
            <div class="tag-search">
                <p class="title">タグ</p>
                <div class="list">
                    <?php
                    $tags = get_tags();
                    foreach($tags as $tag):
                    ?>
                    <!-- タグ名 -->
                    <a href="<?php echo get_tag_link($tag->term_id); ?>" class="link"><?php echo esc_html($tag->name); ?></a>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-wrapper">
        <h2 class="sidebar-title cmn-sidebar-title">
            出版本＆占い
            <span class="i_box"><i class="one_i"></i></span>
        </h2>
        <ul class="sidebar-business-list slick02">
            <li class="item">
                <a href="<?php echo esc_url( home_url('/book/') ); ?>" class="link">
                    <div class="img-wrapper"><img src="<?php echo esc_url(get_theme_file_uri('/image/book.jpg')); ?>" alt="本の写真" class="img"></div>
                </a>
            </li>
            <li class="item">
                <a href="<?php echo esc_url( home_url('/divination/') ); ?>" class="link">
                    <div class="img-wrapper"><img src="<?php echo esc_url(get_theme_file_uri('/image/div-sidebar.jpg')); ?>" alt="占いの写真" class="img"></div>
                </a>
            </li>
        </ul>
    </div>
    </div>
    
    <!-- 関連記事 -->
    <?php $categories = get_the_category($post->ID);
        
        $category_ID = array();
        
        foreach($categories as $category):
            array_push( $category_ID, $category -> cat_ID);
        endforeach ; 

        $args = array(
            // 今読んでいる記事を除く
            'post__not_in' => array($post -> ID),
            'posts_per_page'=> 6,
            'category__in' => $category_ID,
            // ランダムに記事を選ぶ
            'orderby' => 'rand',
        );

        $the_query = new WP_Query($args);?>
        <div class="sidebar-wrapper">
            <h2 class="sidebar-title cmn-sidebar-title">
                関連記事
                <span class="i_box"><i class="one_i"></i></span>
            </h2>
            <ul class="sidebar-list">
            <?php if ($the_query->have_posts()) :?>
            <?php while ($the_query->have_posts()) : $the_query->the_post();
            ?>

                <li class="item">
                    <a href="<?php the_permalink(); ?>" class="link">
                        <?php $thumbnail = (get_the_post_thumbnail_url( $post->ID, 'medium' )) ? get_the_post_thumbnail_url( $post->ID, 'medium' ) : get_template_directory_uri().'/image/noimg.png'; ?>
                        <div class="ofh">
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
                        </div>
                        <div class="text">
                            <!-- 投稿日時 -->
                            <time class="date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d') ?></time>
                            <h3 class="title"><?php echo $title = max_title_length($post -> post_title, 50); ?></h3>
                        </div>
                    </a>
                </li>

            <?php endwhile;?>
            <?php else: ?>
            <p class="none-post">ただいま記事を作成しております。</p>
            <?php endif;?>
            </ul>
        </div>
        <?php wp_reset_postdata();?>

        
    <!-- おすすめ -->
        <?php
        $args = array(
            'post_type' => 'post',  // 投稿タイプ
                                    // ・投稿        ：post
                                    // ・固定ページ  ：page
                                    // ・カスタム投稿：カスタム投稿タイプ名
            'posts_per_page' => 10,
            // 指定された投稿のみ表示:
            'tag'            => 'おすすめ',
            // 'post__in'パラメータの配列に並んだ投稿 ID の順に並び替え
            'order' => 'ASC',
            'orderby' => 'rand',
        );

        $the_query = new WP_Query($args);?>
        <div class="sidebar-wrapper">
            <h2 class="sidebar-title cmn-sidebar-title">
                おすすめの記事
                <span class="i_box"><i class="one_i"></i></span>
            </h2>
            <ul class="sidebar-list">
            <?php if ($the_query->have_posts()) :?>
            <?php while ($the_query->have_posts()) : $the_query->the_post();
            ?>

            <li class="item">
                <a href="<?php the_permalink(); ?>" class="link">
                    <?php $thumbnail = (get_the_post_thumbnail_url( $post->ID, 'medium' )) ? get_the_post_thumbnail_url( $post->ID, 'medium' ) : get_template_directory_uri().'/image/noimg.png'; ?>
                    <div class="ofh">
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
                    </div>
                    <div class="text">
                        <!-- 投稿日時 -->
                        <time class="date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d') ?></time>
                        <h3 class="title"><?php echo $title = max_title_length($post -> post_title, 50); ?></h3>
                    </div>
                </a>
            </li>

            <?php endwhile;?>
            <?php else: ?>
            <p class="none-post">ただいま記事を作成しております。</p>
            <?php endif;?>
            </ul>
        </div>
        <?php wp_reset_postdata();?>
        
        <!-- 新着 -->
        <?php
        $args = array(
            'post_type' => 'post',  // 投稿タイプ
                                    // ・投稿        ：post
                                    // ・固定ページ  ：page
                                    // ・カスタム投稿：カスタム投稿タイプ名
            'posts_per_page' => 4,
            // 'post__in'パラメータの配列に並んだ投稿 ID の順に並び替え
            'order' => 'ASC',
            'orderby' => 'date',
        );

        $the_query = new WP_Query($args);?>
        <div class="sidebar-wrapper">
            <h2 class="sidebar-title cmn-sidebar-title">
                最新の記事
                <span class="i_box"><i class="one_i"></i></span>
            </h2>
            <ul class="sidebar-list">
            <?php if ($the_query->have_posts()) :?>
            <?php while ($the_query->have_posts()) : $the_query->the_post();
            ?>

                <li class="item">
                    <a href="<?php the_permalink(); ?>" class="link">
                        <?php $thumbnail = (get_the_post_thumbnail_url( $post->ID, 'medium' )) ? get_the_post_thumbnail_url( $post->ID, 'medium' ) : get_template_directory_uri().'/image/noimg.png'; ?>
                        <div class="ofh">
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
                        </div>
                        <div class="text">
                            <!-- 投稿日時 -->
                            <time class="date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d') ?></time>
                            <h3 class="title"><?php echo $title = max_title_length($post -> post_title, 50); ?></h3>
                        </div>
                    </a>
                </li>

            <?php endwhile;?>
            <?php else: ?>
            <p class="none-post">ただいま記事を作成しております。</p>
            <?php endif;?>
            </ul>
        </div>
        <?php wp_reset_postdata();?>

</div>






