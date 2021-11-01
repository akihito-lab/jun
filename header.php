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

        <?php if(!is_page()) : ?>
        <h1 class="header-logo"><a href="<?php echo esc_url( home_url('/') ); ?>" class="header-logo-link">占い小説家</a></h1>
        <?php endif; ?>

        <span class="nav_toggle">
            <i></i>
            <i></i>
            <i></i>
        </span>

        <?php if(!is_page()) : ?>
        <nav class="header-nav">
            <ul class="nav-list">
                <li class="item"><a href="<?php echo esc_url( home_url('/book/') ); ?>">出版本はこちら</a></li>
                <li class="item"><a href="<?php echo esc_url( home_url('/divination/') ); ?>">占いはこちら</a></li>
                <li class="item"><a href="<?php echo esc_url( home_url('/blog/') ); ?>">記事一覧</a></li>
                <li class="item"><a href="#">お問い合わせ</a></li>
            </ul>
        </nav>
        <?php endif; ?>

        <nav class="header-show">
            <ul class="show-list">
                <li class="item"><a href="<?php echo esc_url( home_url('/book/') ); ?>">出版本はこちら</a></li>
                <li class="item"><a href="<?php echo esc_url( home_url('/divination/') ); ?>">占いはこちら</a></li>
                <li class="item"><a href="<?php echo esc_url( home_url('/blog/') ); ?>">記事一覧</a></li>
                <li class="item"><a href="#">お問い合わせ</a></li>
            </ul>
        </nav>

        <?php if(!is_page()) : ?>
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display'))
        {
            bcn_display();
        }?>
        </div>
        <?php endif ?>
    </header>

    