<div class="sidebar">
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
    <ul class="sidebar-business-list slick02">
        <a href="" class="link">
            <li class="item">
                <div class="img-wrapper"><img src="<?php echo esc_url(get_theme_file_uri('/image/book.jpg')); ?>" alt="" class="img"></div>
            </li>
        </a>
        <a href="" class="link">
            <li class="item">
                <div class="img-wrapper"><img src="https://placehold.jp/981x1378.png" alt="" class="img"></div>
            </li>
        </a>
    </ul>
    
    <!-- おすすめ -->
        <?php
        $args = array(
            'post_type' => 'post',  // 投稿タイプ
                                    // ・投稿        ：post
                                    // ・固定ページ  ：page
                                    // ・カスタム投稿：カスタム投稿タイプ名
            'posts_per_page' => 3,
            // 指定された投稿のみ表示:
            'tag'            => 'recommend',
            // 'post__in'パラメータの配列に並んだ投稿 ID の順に並び替え
            'order' => 'ASC',
            'orderby' => 'rand',
        );

        $the_query = new WP_Query($args);?>
        <h2 class="sidebar-title cmn-sidebar-title">おすすめの記事</h2>
        <ul class="sidebar-list">
        <?php if ($the_query->have_posts()) :?>
        <?php while ($the_query->have_posts()) : $the_query->the_post();
        ?>

        <a href="<?php the_permalink(); ?>" class="link">
        <li class="item">
        <?php $thumbnail = (get_the_post_thumbnail_url( $post->ID, 'medium' )) ? get_the_post_thumbnail_url( $post->ID, 'medium' ) : get_template_directory_uri().'/image/noimg.png'; ?>
            <div class="img-wrapper"><img src="<?php echo $thumbnail ?>" alt="" class="img"></div>
            <h2 class="title"><?php the_title(); ?></h2>
        </li>
        </a>

        <?php endwhile;?>
        <?php else: ?>
        <p class="none-post">ただいま記事を作成しております。</p>
        <?php endif;?>
        </ul>
        <?php wp_reset_postdata();?>
        
        <!-- 新着 -->
        <?php
        $args = array(
            'post_type' => 'post',  // 投稿タイプ
                                    // ・投稿        ：post
                                    // ・固定ページ  ：page
                                    // ・カスタム投稿：カスタム投稿タイプ名
            'posts_per_page' => 3,
            // 'post__in'パラメータの配列に並んだ投稿 ID の順に並び替え
            'order' => 'ASC',
            'orderby' => 'date',
        );

        $the_query = new WP_Query($args);?>
        <h2 class="sidebar-title cmn-sidebar-title">最新の記事</h2>
        <ul class="sidebar-list">
        <?php if ($the_query->have_posts()) :?>
        <?php while ($the_query->have_posts()) : $the_query->the_post();
        ?>

        <a href="<?php the_permalink(); ?>" class="link">
        <li class="item">
        <?php $thumbnail = (get_the_post_thumbnail_url( $post->ID, 'medium' )) ? get_the_post_thumbnail_url( $post->ID, 'medium' ) : get_template_directory_uri().'/image/noimg.png'; ?>
            <div class="img-wrapper"><img src="<?php echo $thumbnail ?>" alt="" class="img"></div>
            <h2 class="title"><?php the_title(); ?></h2>
        </li>
        </a>

        <?php endwhile;?>
        <?php else: ?>
        <p class="none-post">ただいま記事を作成しております。</p>
        <?php endif;?>
        </ul>
        <?php wp_reset_postdata();?>



        <!-- 関連記事 -->
        <?php $categories = get_the_category($post->ID);
        
        $category_ID = array();
        
        foreach($categories as $category):
            array_push( $category_ID, $category -> cat_ID);
        endforeach ; 

        $args = array(
            // 今読んでいる記事を除く
            'post__not_in' => array($post -> ID),
            'posts_per_page'=> 3,
            'category__in' => $category_ID,
            // ランダムに記事を選ぶ
            'orderby' => 'rand',
        );

        $the_query = new WP_Query($args);?>
        <h2 class="sidebar-title cmn-sidebar-title">関連記事</h2>
        <ul class="sidebar-list">
        <?php if ($the_query->have_posts()) :?>
        <?php while ($the_query->have_posts()) : $the_query->the_post();
        ?>

        <a href="<?php the_permalink(); ?>" class="link">
        <li class="item">
        <?php $thumbnail = (get_the_post_thumbnail_url( $post->ID, 'medium' )) ? get_the_post_thumbnail_url( $post->ID, 'medium' ) : get_template_directory_uri().'/image/noimg.png'; ?>
            <div class="img-wrapper"><img src="<?php echo $thumbnail ?>" alt="" class="img"></div>
            <h2 class="title"><?php the_title(); ?></h2>
        </li>
        </a>

        <?php endwhile;?>
        <?php else: ?>
        <p class="none-post">ただいま記事を作成しております。</p>
        <?php endif;?>
        </ul>
        <?php wp_reset_postdata();?>
</div>






