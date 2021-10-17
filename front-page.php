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
    <h1 class="header-logo"><a href="" class="header-logo-link">占い小説家</a></h1>
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
        <section class="slide-section">
            <div class="inner">
                <ul class="slide-list">
                    <li class="item">
                        <div class="img-wrapper"><img src="<?php echo esc_url(get_theme_file_uri('/image/book.jpg')); ?>" alt="" class="img"></div>
                        <p class="desc"></p>
                    </li>
                    <li class="item">
                        <div class="img-wrapper"><img src="<?php echo esc_url(get_theme_file_uri('/image/noimg.png')); ?>" alt="" class="img"></div>
                        <p class="desc"></p>
                    </li>
                    <li class="item">
                        <div class="img-wrapper"><img src<?php echo esc_url(get_theme_file_uri('/image/noimg.png')); ?>="" alt="" class="img"></div>
                        <p class="desc"></p>
                    </li>
                </ul>
            </div>
        </section>

        <section class="recommend-blog-section">
            <div class="inner">
                <h2 class="recommend-title">おすすめの記事</h2>
                <ul class="recommend-list">
                    <li class="item">
                        <div class="img-wrapper"><img src="" alt="" class="img"></div>
                        <p class="desc"></p>
                    </li>
                </ul>
            </div>
        </section>

        <section class="new-blog-section">
            <div class="inner">
                <h2 class="new-title">News&Topics</h2>
                <div class="new-wrapper">
                    <p class="new-tag">NEW</p>
                    <dl class="new-list">
                        <dt class="date"></dt>
                        <dd class="desc"></dd>
                    </dl>
                </div>
                <div class="new-btn-warpper"><a href="" class="new-btn"></a></div>
            </div>
        </section>

        <section class="my-section">
            <div class="inner">
                <div class="my-img-wrapper"><img src="" alt="" class="my-img"></div>
                <div class="my-text">
                    <p class="desc"></p>
                </div>
            </div>
        </section>

        <section class="business-section">
            <div class="inner">
                <div class="book-wrapper">
                    <div class="img-wrapper"><img src="" alt="" class="img"></div>
                    <p class="desc"></p>
                </div>
                <div class="divination-wrapper">
                    <div class="img-wrapper"><img src="" alt="" class="img"></div>
                    <p class="desc"></p>
                </div>
            </div>
        </section>

        <section class="contact-section">
            <div class="inner">
                <h2 class="contact-title"></h2>
                <div class="contact-img-wrapper"><img src="" alt="" class="contact-img"></div>
                <p class="tell"></p>
                <div class="contact-btn-wrapper"><a href="" class="contact-btn"></a></div>
                <p class="desc"></p>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer-link-wrapper">
            <a href="" class="footer-link">トップページ</a>
            <a href="" class="footer-link">-出版本</a>
            <a href="" class="footer-link">-占い</a>
            <a href="" class="footer-link">記事一覧</a>
            <a href="" class="footer-link">お問い合わせ</a>
        </div>
        <p class="copy-right"></p>
    </footer>

    
    <?php wp_footer(); ?>
</body>
</html>