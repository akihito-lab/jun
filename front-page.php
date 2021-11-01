<?php get_header(); ?>
    <main>
        <section class="slide-section cmn-section">
            <div class="inner">
                <ul class="slide-list slick01">
                    <a href="" class="link">
                        <li class="item">
                            <div class="img-wrapper"><img src="<?php echo esc_url(get_theme_file_uri('/image/book.jpg')); ?>" alt="" class="img"></div>
                            <div class="text">
                                <div class="title">テキストテキストテキストテキストテキスト</div>
                                <p class="desc">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
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
                <h2 class="recommend-title cmn-title">おすすめの記事</h2>
                <ul class="recommend-list">
                <?php while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                <a href="<?php the_permalink(); ?>" class="link">
                <li class="item">
                    <div class="img-wrapper"><img src="<?php echo $thumbnail ?>" alt="" class="img"></div>
                    <p class="desc"><?php the_title(); ?></p>
                </li>
                </a>
                <?php
                endwhile;
                ?>
                </ul>
                <?php
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </section>

        <section class="new-blog-section cmn-section">
            <div class="inner">
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
                    <h2 class="new-title cmn-title">最新の記事</h2>
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
        </section>

        <section class="my-section cmn-section">
            <div class="inner">
                <div class="my-wrapper">
                    <div class="my-img-wrapper"><img src="<?php echo esc_url(get_theme_file_uri('/image/jun.jpg')); ?>" alt="" class="my-img"></div>
                        <div class="my-text">
                            <h3 class="title">テキストテキストテキスト</h3>
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
        </section>

        <section class="business-section cmn-section">
            <div class="inner">
                <div class="book-wrapper">
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
                <div class="divination-wrapper">
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
        </section>

        <section class="contact-section cmn-section">
            <div class="inner">
                <h2 class="contact-title cmn-title">お問い合わせください</h2>
                <div class="contact-img-wrapper"><img src="https://placehold.jp/150x150.png" alt="" class="contact-img"></div>
                <p class="tell">000-000-0000</p>
                <div class="contact-btn-wrapper"><a href="<?php echo esc_url( home_url('/contact/') ); ?>" class="contact-btn">お問い合わせフォーム</a></div>
                <p class="contact-desc">
                    テキストテキストテキストテキストテキストテキストテキスト
                    テキストテキストテキストテキストテキストテキストテキスト
                    テキストテキストテキストテキストテキストテキストテキスト
                    テキストテキストテキストテキストテキストテキストテキスト
                </p>
            </div>
        </section>
    </main>

    <?php get_footer(); ?>