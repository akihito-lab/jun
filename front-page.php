<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="テキストテキストテキストテキストテキストテキスト" />
  <!-- フォントファミリー -->
  
  <!-- フォントアイコン -->
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
    <h1 class="header-logo"><a href="<?php echo esc_url( home_url('/') ); ?>" class="header-logo-link">占い小説家</a></h1>
        <span class="nav_toggle">
            <i></i>
            <i></i>
            <i></i>
        </span>
        <nav class="header-nav">
            <ul class="nav-list">
                <li class="item"><a href="#">出版本はこちら</a></li>
                <li class="item"><a href="#">占いはこちら</a></li>
                <li class="item"><a href="#">記事一覧</a></li>
                <li class="item"><a href="#">お問い合わせ</a></li>
            </ul>
        </nav>

    </header>
    <main>
        <section class="slide-section cmn-section">
            <div class="inner">
                <ul class="slide-list slick01">
                    <li class="item">
                        <div class="img-wrapper"><img src="<?php echo esc_url(get_theme_file_uri('/image/book.jpg')); ?>" alt="" class="img"></div>
                        <p class="desc">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    </li>
                    <li class="item">
                        <div class="img-wrapper"><img src="https://placehold.jp/981x1378.png" alt="" class="img"></div>
                        <p class="desc">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    </li>
                    <li class="item">
                        <div class="img-wrapper"><img src="https://placehold.jp/981x1378.png" alt="" class="img"></div>
                        <p class="desc">テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                    </li>
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
                <?php $thumbnail = (get_the_post_thumbnail_url($post ->ID,'full' )) ? get_the_post_thumbnail_url($post ->ID,'full') : get_template_directory_uri().$NO_IMAGE_URL;?>
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

    <footer class="footer">
        <div class="footer-wrapper">
            <div class="footer-link-wrapper"><a href="" class="footer-link">トップページ</a></div>
            <div class="footer-link-wrapper"><a href="" class="footer-link">-出版本</a></div>
            <div class="footer-link-wrapper"><a href="" class="footer-link">-占い</a></div>
            <div class="footer-link-wrapper"><a href="" class="footer-link">記事一覧</a></div>
            <div class="footer-link-wrapper"><a href="" class="footer-link">お問い合わせ</a></div>
        </div>
        <p class="copy-right">Copyright (c) 2021 Jun Home Page All Rights Reserved.</p>
    </footer>

    
    <?php wp_footer(); ?>
</body>
</html>