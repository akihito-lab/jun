<?php get_header(); ?>
<main class="front-page-main">
    <section class="slide-section cmn-section">
        <div class="inner">
            <div id="container"></div>
            <ul class="slide-list slick01">
                <a href="" class="link">
                    <li class="item">
                        <div class="img-wrapper"><img src="<?php echo esc_url(get_theme_file_uri('/image/book.jpg')); ?>" alt="" class="img"></div>
                        <div class="text">
                            <p class="lead">1人の男性を、こんなにも愛することができるのだろうか？</p>
                            <div class="info">
                                <h2 class="title">あなたに逢いたくて</h2>
                                <p class="author">著者：愛門&nbsp;純菜</p>
                            </div>
                            <p class="desc">
                            1986年、短大を卒業した愛子は神戸市内で就職し、賢志と出逢った。<br>
                            思わせぶりな賢志の言葉を信じた純粋な愛子。<br><br>
                            しかし彼の態度ははっきりしない。<br>
                            愛子の想いは物理的な距離を越えてますます燃え上っていく。<br><br>
                            しかしその一途な愛はすれ違い、恋愛裁判へと向かってしまうのだった。<br>
                            そして1995年1月17日がやってくる....。<br><br>
                            事実をもとに書き上げた、1人の女性の切ない愛の物語。
                            </p>
                        </div>
                    </li>
                </a>
                <a href="" class="link">
                    <li class="item">
                        <div class="img-wrapper"><img src="https://placehold.jp/981x1378.png" alt="" class="img"></div>
                        <div class="text">
                            <div class="title">テキストテキストテキストテキストテキスト</div>
                            <p class="desc">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                        </div>
                    </li>
                </a>
            </ul>
        </div>
    </section>
    <div class="section-mask-wrapper">
        <div class="mask-wrapper">
            <section class="recommend-blog-section cmn-section">
                <div class="inner">
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

                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) :?>
                    <div class="recommend-text">
                        <div class="recommend-text-bg"></div>
                        <h2 class="recommend-title">おすすめ記事</h2>
                        <ul class="recommend-list">
                        <?php while ($the_query->have_posts()) : $the_query->the_post();
                        ?>
                        <a href="<?php the_permalink(); ?>" class="link">
                        <li class="item">
                                <?php
                                $cats = get_the_category();
                                foreach($cats as $cat):
                                ?>
                                <!-- カテゴリー名 -->
                                <span class="category-name"><?php echo esc_html($cat->name); ?></span>
                                <?php
                                endforeach;
                                ?>
                            <div class="ofh">
                                <div class="img-wrapper">
                                    <img src="<?php echo $thumbnail ?>" alt="" class="img">
                                </div>
                            </div>
                            <div class="text">
                                <!-- 投稿日時 -->
                                <time class="date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d') ?></time>
                                <p class="desc"><?php the_title(); ?></p>
                            </div>
                        </li>
                        </a>
                        <?php
                        endwhile;
                        ?>
                        </ul>
                    </div>
                    <?php
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
            </section>

            <section class="new-blog-section cmn-section">
                <div class="inner">
                    <div class="mask">
                        <?php
                        $args = array(
                            'post_type' => 'post',  // 投稿タイプ
                                                    // ・投稿        ：post
                                                    // ・固定ページ  ：page
                                                    // ・カスタム投稿：カスタム投稿タイプ名
                            'posts_per_page' => 5,
                            'oder' => 'ASC',
                            // 'post__in'パラメータの配列に並んだ投稿 ID の順に並び替え
                            'orderby' => 'date',
                        );

                        $the_query = new WP_Query($args);
                        if ($the_query->have_posts()) :
                        ?>
                        <div class="new-wrapper">
                            <h2 class="new-title">最新の記事</h2>
                            <div class="new-con">
                                <p class="new-tag">NEW</p>
                                <div class="new-list-wrapper">
                        <?php
                        while ($the_query->have_posts()) : $the_query->the_post();
                        ?>
                            <a href="<?php the_permalink(); ?>" class="new-link">
                            <div class="new-list">
                                <time class="date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d') ?></time>
                                <p class="desc"><?php the_title(); ?></p>
                            </div>
                            </a>
                        <?php
                        endwhile;
                        ?>
                                </div>
                            </div>
                        </div>
                        <div  div class="new-btn-warpper"><a href="<?php echo esc_url( home_url('/blog/') ); ?>" class="new-btn">記事一覧</a></div>
                        <?php
                        endif;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <section class="my-section cmn-section">
        <div class="mask">
            <div class="inner">
                <div class="my-wrapper">
                    <div class="my-img-wrapper"><img src="<?php echo esc_url(get_theme_file_uri('/image/jun.jpg')); ?>" alt="" class="my-img"></div>
                        <div class="my-text">
                            <h3 class="title">占い小説家の愛門純菜です</h3>
                            <p class="desc">
                            テキストテキストテキストテキストテキストテキストテキスト<br><br>
                            テキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキスト
                            テキストテキスト
                            テキストテキストテキストテキストテキストテキストテキスト<br><br>
                            テキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキスト
                            テキストテキスト
                            テキストテキストテキストテキストテキストテキストテキスト<br><br>
                            テキストテキストテキストテキストテキストテキストテキスト
                            テキストテキストテキストテキストテキストテキストテキスト
                            テキストテキスト
                            </p>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <section class="business-section cmn-section">
        <div class="inner">
            <div class="mask">
                <div class="business-text">
                    <div class="business-text-bg"></div>
                    <h2 class="business-title">出版本＆占いについて</h2>
                    <div class="book-wrapper">
                        <div class="book-con">
                            <div class="img-wrapper"><img src="<?php echo esc_url(get_theme_file_uri('/image/book.jpg')); ?>" alt="" class="img"></div>
                            <div class="text">
                                <h3 class="title">テキストテキストテキストテキストテキスト</h3>
                                <p class="desc">
                                    テキストテキストテキストテキストテキストテキストテキスト<br><br>
                                    テキストテキストテキストテキストテキストテキストテキスト
                                    テキストテキストテキストテキストテキストテキストテキスト
                                    テキストテキストテキストテキストテキストテキストテキスト
                                    テキストテキストテキストテキストテキストテキストテキスト<br><br>
                                    テキストテキストテキストテキストテキストテキストテキスト
                                    テキストテキストテキストテキストテキストテキストテキスト
                                    テキストテキストテキストテキストテキストテキストテキスト
                                    テキストテキストテキストテキストテキストテキストテキスト<br><br>
                                    テキストテキストテキストテキストテキストテキストテキスト
                                    テキストテキストテキストテキストテキストテキストテキスト
                                    テキストテキストテキストテキストテキストテキストテキスト
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="divination-wrapper">
                        <div class="divination-con">
                            <div class="img-wrapper"><img src="https://placehold.jp/981x1378.png" alt="" class="img"></div>
                            <div class="text">
                                <h3 class="title">テキストテキストテキストテキストテキスト</h3>
                                <p class="desc">
                                    テキストテキストテキストテキストテキストテキストテキスト<br><br>
                                    テキストテキストテキストテキストテキストテキストテキスト
                                    テキストテキストテキストテキストテキストテキストテキスト
                                    テキストテキストテキストテキストテキストテキストテキスト
                                    テキストテキストテキストテキストテキストテキストテキスト<br><br>
                                    テキストテキストテキストテキストテキストテキストテキスト
                                    テキストテキストテキストテキストテキストテキストテキスト
                                    テキストテキストテキストテキストテキストテキストテキスト
                                    テキストテキストテキストテキストテキストテキストテキスト<br><br>
                                    テキストテキストテキストテキストテキストテキストテキスト
                                    テキストテキストテキストテキストテキストテキストテキスト
                                    テキストテキストテキストテキストテキストテキストテキスト
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

    <?php get_footer(); ?>