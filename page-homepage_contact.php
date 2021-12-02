<?php get_header(); ?>
<main>
    <section class="homepage_contact-section cmn-section">
        <div class="inner">
            <div class="homepage_contact-wrapper">
                <div class="text-wrapper">
                    <h2 class="m-title">お問い合わせ</h2>
                    <div class="ofh"><div class="img-wrapper"><img src="<?php echo esc_url(get_theme_file_uri('/image/pexels-cottonbro-6848821 (1).jpg')); ?>" alt="手紙の写真" class="img"></div></div>
                    <p class="desc">お問い合わせは下記入力フォームよりお願いいたします。</p>
                    <?php echo do_shortcode('[contact-form-7 id="153" title="ホームページお問い合わせ"]'); ?>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
