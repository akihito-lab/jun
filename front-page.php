<?php get_header(); ?>
<main class="front-page-main">
    <section class="slide-section cmn-section">
        <div class="inner">
            <div id="container"></div>
            <ul class="slide-list slick01">
                <li class="item">
                    <a href="<?php echo esc_url( home_url('/book/') ); ?>" class="link">
                        <div class="img-wrapper"><img src="<?php echo esc_url(get_theme_file_uri('/image/book-pro.jpg')); ?>" alt="出版本" class="img"></div>
                    </a>
                </li>
                <li class="item">
                    <a href="<?php echo esc_url( home_url('/divination/') ); ?>" class="link">
                        <div class="img-wrapper"><img src="<?php echo esc_url(get_theme_file_uri('/image/div-pro.png')); ?>" alt="占い" class="img"></div>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <div class="section-mask-wrapper">
        <div class="mask-wrapper">
            <section class="recommend-blog-section cmn-section">
                <?php
                $args = array(
                    'post_type' => 'post',  // 投稿タイプ
                                            // ・投稿        ：post
                                            // ・固定ページ  ：page
                                            // ・カスタム投稿：カスタム投稿タイプ名
                    'posts_per_page' => 3,
                    // 指定された投稿のみ表示:
                    'tag'            => 'おすすめ',
                    // 'post__in'パラメータの配列に並んだ投稿 ID の順に並び替え
                    'order' => 'ASC',
                    'orderby' => 'rand',
                );

                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :?>
                <div class="inner">
                    <div class="recommend-text">
                        <div class="recommend-text-bg"></div>
                        <h2 class="recommend-title">おすすめ記事</h2>
                        <ul class="recommend-list">
                            <?php while ($the_query->have_posts()) : $the_query->the_post();
                            ?>
                            <li class="item">
                                <a href="<?php the_permalink(); ?>" class="link">
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
                                        <img src="<?php echo $thumbnail ?>" alt="アイキャッチ画像" class="img">
                                    </div>
                                </div>
                                <div class="text">
                                    <!-- 投稿日時 -->
                                    <time class="date" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d') ?></time>
                                    <p class="desc"><?php echo $title = max_title_length($post -> post_title, 50); ?></p>
                                </div>
                                </a>
                            </li>
                            <?php
                            endwhile;
                            ?>
                        </ul>
                    </div>
                </div>
                <?php
                endif;
                wp_reset_postdata();
                ?>
            </section>

            <section class="new-blog-section cmn-section">
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
                if ($the_query->have_posts()) :?>
                <div class="inner">
                    <div class="mask">
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
                        <div class="new-btn-warpper"><a href="<?php echo esc_url( home_url('/blog/') ); ?>" class="new-btn">記事一覧</a></div>
                    </div>
                </div>
                <?php
                endif;
                wp_reset_postdata();
                ?>
            </section>
        </div>
    </div>

    <section class="my-section cmn-section">
        <div class="mask">
            <div class="inner">
                <div class="my-wrapper">
                    <div class="my-img-wrapper"><img src="<?php echo esc_url(get_theme_file_uri('/image/jun.jpg')); ?>" alt="愛門純菜の写真" class="my-img"></div>
                        <div class="my-text">
                            <h3 class="title">はじめまして。占い小説家の愛門純菜（陽純）です</h3>
                            <p class="desc">
                            私は小さい頃から霊感があり、中学生の頃、手の掌から煙が上がったり、霊が見えたり、見えないものを感じ取れるようになり、数々の不思議な体験をして参りました。 地震や近しい人の死の前々日には、予知夢を見ることもございました。 平成7年の阪神大震災では、予知夢のお蔭で、家が全壊し、生き埋めになったにも関わらず、命を助けて頂きました。
                            学生の頃から、手相を学んだり、知人などを占ってきました。そして80パーセント以上の的中率と言われております神秘的なタロット占いに惹かれ、インスピレーションを取り入れた、霊感タロット鑑定をさせて頂いております。
                            またそれとは別に小説家としても活動しております。今年に、「あなたに逢いたくて」という恋愛小説本を出版いたしました。それは、事実をもとに書き上げた、女性の切ない愛の物語。ぜひ一度お読みしていただけると光栄です。
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
                        <a href="<?php echo esc_url( home_url('/book/') ); ?>" class="book-con-link">
                            <div class="book-con">
                                <div class="img-wrapper"><img src="<?php echo esc_url(get_theme_file_uri('/image/book.jpg')); ?>" alt="出版本" class="img"></div>
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
                            </div>
                        </a>
                    </div>
                    <div class="divination-wrapper">
                        <a href="<?php echo esc_url( home_url('/divination/') ); ?>" class="divition-con-link">
                            <div class="divination-con">
                                <div class="img-wrapper"><img src="<?php echo esc_url(get_theme_file_uri('/image/pexels-mikhail-nilov-6945066 (2).jpg')); ?>" alt="占い" class="img"></div>
                                <div class="text">
                                    <h3 class="title">陽純のメール鑑定占い</h3>
                                    <p class="desc">
                                        <span style="font-weight: bold;">占術</span><br>
                                        霊感・霊視・霊感タロット・スピリチュアルカウンセリング・アストロダイス・ホロスコープ・心理カウンセリング・西洋占星術・チャネリング・心理学・波動修正<br><br>
                                        <span style="font-weight: bold;">鑑定ジャンル</span><br>
                                        お悩み全般・お仕事・復縁・不倫・人生問題・心の問題・子供の問題・心の悩み・メンタルの悩み・職場での人間関係・金運・出逢い・結婚・離婚・別れ・夫婦問題・片思い・浮気・略奪愛・異性との相性・複雑な恋愛・復活愛・就職・転職・恋愛成就・恋愛全般・適職・対人関係・両想い・心のもやもや・遠距離・三角関係・恋愛問題・失恋・メンタルの問題・相性・人間関係全般・同僚との関係・上司との関係・天職
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

    <?php get_footer(); ?>