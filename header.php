<!-- ホームページ。ブログのヘッダー -->
<?php if(!is_page(array('book', 'divination', 'divination_contact','divination_complete'))) : ?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- フォントファミリー -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300;400;700&family=Zen+Antique+Soft&display=swap" rel="stylesheet">
  <!-- フォントアイコン -->
  <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <?php if(is_front_page()) : ?>
        <div class="header-wrapper">
        <?php endif; ?>

        <?php if(!is_front_page()) : ?>
        <div class="header-archive-single-wrapper">
        <?php endif; ?>
            <div class="header-con">
                <h1 class="header-logo-wrapper"><span class="header-logo"><a href="<?php echo esc_url( home_url('/') ); ?>" class="header-logo-link">占い小説家</a></span></h1>

                <button type="button" id="js-buttonHamburger" class="c-button p-hamburger" aria-controls="global-nav" aria-expanded="false">
                    <span class="p-hamburger__line">
                        <span class="u-visuallyHidden">
                        メニューを開閉する
                        </span>
                    </span>
                </button>

                <nav class="header-nav">
                    <ul class="nav-list">
                        <li class="item"><a class="link" href="<?php echo esc_url( home_url() ); ?>">トップページ</a></li>
                        <li class="item"><a class="link" href="<?php echo esc_url( home_url('/book/') ); ?>">出版本はこちら</a></li>
                        <li class="item"><a class="link" href="<?php echo esc_url( home_url('/divination/') ); ?>">占いはこちら</a></li>
                        <li class="item"><a class="link" href="<?php echo esc_url( home_url('/blog/') ); ?>">記事一覧</a></li>
                        <li class="item"><a class="link" href="<?php echo esc_url( home_url('/homepage_contact/') ); ?>">お問い合わせ</a></li>
                    </ul>
                </nav>

                <nav class="click-nav">
                    <ul class="list">
                        <li class="item"><a class="link" href="<?php echo esc_url( home_url() ); ?>">トップページ</a></li>
                        <li class="item"><a  class="link" href="<?php echo esc_url( home_url('/book/') ); ?>">出版本はこちら</a></li>
                        <li class="item"><a  class="link" href="<?php echo esc_url( home_url('/divination/') ); ?>">占いはこちら</a></li>
                        <li class="item"><a  class="link" href="<?php echo esc_url( home_url('/blog/') ); ?>">記事一覧</a></li>
                        <li class="item"><a  class="link" href="<?php echo esc_url( home_url('/homepage_contact/') ); ?>">お問い合わせ</a></li>
                    </ul>
                </nav>
            </div>
        <?php if(!is_front_page()) : ?>
        </div>
        <?php endif; ?>
        <?php if(is_front_page()) : ?>
        </div>
        <?php endif; ?>

        <?php if(is_front_page()) : ?>
        <div class="breadcrumbs-wrapper">
        <?php endif; ?>
        <?php if(!is_front_page()) : ?>
        <div class="breadcrumbs-archive-single-wrapper">
        <?php endif; ?>

            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
            </div>
        <?php if(!is_front_page()) : ?>
        </div>
        <?php endif; ?>
        <?php if(is_front_page()) : ?>
        </div>
        <?php endif; ?>
    </header>


<?php elseif(is_page(array('divination', 'divination_contact','divination_complete'))) : ?>
<!-- 占いのヘッダー -->
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- フォントファミリー -->
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300;400;700&family=Zen+Antique+Soft&display=swap" rel="stylesheet">
<!-- フォントアイコン -->
<link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <header class="divination-header">
        <nav class="divination-header-nav">
            <div class="list">
                <div class="divination-header-logo-wrapper">
                    <p class="divination-header-logo-desc">お気軽にメール鑑定承ります</p>
                    <h1 class="divination-header-logo-title">
                        <a href="<?php echo esc_url( home_url('divination') ); ?>" class="logo-link">
                            <span class="s-title">霊感タロット占い師</span><span class="m-title">陽&nbsp;&nbsp;純</span>
                        </a>
                    </h1>
                </div>
                <div class="divination-item-wrapper">
                    <div class="divination-time-item">
                        <div class="title">お気軽にご相談ください</div>
                        <p class="desc">対応時間：24時間</p>
                    </div>
                    <div class="divination-contact-item">
                        <div class="btn-wrapper"><a href="<?php echo esc_url( home_url('/divination_contact/') ); ?>" class="btn">お問い合わせはこちら</a></div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="p-hamburger-wrapper">
            <h2 class="title">霊感タロット占い師&nbsp;&nbsp;陽純</h2>
            <button type="button" id="js-buttonHamburger" class="c-button p-hamburger" aria-controls="global-nav" aria-expanded="false">
                <span class="p-hamburger__line">
                    <span class="u-visuallyHidden">
                    メニューを開閉する
                    </span>
                </span>
            </button>
        </div>
        <nav class="click-nav">
            <ul class="list">
            <li class="item"><a class="link" href="<?php echo esc_url( home_url() ); ?>">トップページ</a></li>
                        <li class="item"><a  class="link" href="<?php echo esc_url( home_url('/book/') ); ?>">出版本はこちら</a></li>
                        <li class="item"><a  class="link" href="<?php echo esc_url( home_url('/divination/') ); ?>">占いはこちら</a></li>
                        <li class="item"><a  class="link" href="<?php echo esc_url( home_url('/blog/') ); ?>">記事一覧</a></li>
                        <li class="item"><a  class="link" href="<?php echo esc_url( home_url('/homepage_contact/') ); ?>">お問い合わせ</a></li>
            </ul>
        </nav>
    </header>

<?php elseif(is_page('book')) : ?>
<!DOCTYPE html>
<html lang="ja">
    <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- フォントファミリー -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300;400;700&family=Zen+Antique+Soft&display=swap" rel="stylesheet">
    
    <!-- フォントアイコン -->
    <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">
        <?php wp_head(); ?>
    </head>

    <body>
        <header class="book-header">
            <button type="button" id="js-buttonHamburger" class="c-button p-hamburger" aria-controls="global-nav" aria-expanded="false">
                    <span class="p-hamburger__line">
                        <span class="u-visuallyHidden">
                        メニューを開閉する
                        </span>
                    </span>
            </button>
            <nav class="click-nav">
                <ul class="list">
                <li class="item"><a class="link" href="<?php echo esc_url( home_url() ); ?>">トップページ</a></li>
                        <li class="item"><a  class="link" href="<?php echo esc_url( home_url('/book/') ); ?>">出版本はこちら</a></li>
                        <li class="item"><a  class="link" href="<?php echo esc_url( home_url('/divination/') ); ?>">占いはこちら</a></li>
                        <li class="item"><a  class="link" href="<?php echo esc_url( home_url('/blog/') ); ?>">記事一覧</a></li>
                        <li class="item"><a  class="link" href="<?php echo esc_url( home_url('/homepage_contact/') ); ?>">お問い合わせ</a></li>
                </ul>
            </nav>
        </header>
<?php endif; ?>
