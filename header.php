<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="テキストテキストテキストテキストテキストテキスト" />
  <!-- フォントファミリー -->
  
  <!-- フォントアイコン -->
  <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="header-wrapper">
            <div class="header-con">

                <?php if(!is_page()) : ?>
                <h1 class="header-logo-wrapper"><span class="header-logo"><a href="<?php echo esc_url( home_url('/') ); ?>" class="header-logo-link">占い小説家</a></span></h1>
                <?php endif; ?>

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
                        <li class="item"><a class="link" href="#">お問い合わせ</a></li>
                    </ul>
                </nav>

                <nav class="click-nav">
                    <ul class="list">
                        <li class="item"><a  class="link" href="<?php echo esc_url( home_url('/book/') ); ?>">出版本はこちら</a></li>
                        <li class="item"><a  class="link" href="<?php echo esc_url( home_url('/divination/') ); ?>">占いはこちら</a></li>
                        <li class="item"><a  class="link" href="<?php echo esc_url( home_url('/blog/') ); ?>">記事一覧</a></li>
                        <li class="item"><a  class="link" href="#">お問い合わせ</a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="breadcrumbs-wrapper">
            <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
            </div>
        </div>
        
    </header>

    