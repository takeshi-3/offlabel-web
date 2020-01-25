<?php
$home_url = esc_url(home_url());
$theme_url = get_template_directory_uri();
get_header();
?>

<article class="join">
    <h3 class="join__title"> <p>Connect with OFF LABEL</p> </h3>

    <p class="join__exp">
        メールマガジンでは、開催予定の主催イベントの最新情報や特別な情報をお届けします。
    </p>

    <div class="join__form">
        <!-- dev -->
        <?php // echo do_shortcode('[contact-form-7 id="25" title="Connect with OFF LABEL"]'); ?>
        <!-- official -->
        <?php echo do_shortcode('[contact-form-7 id="12" title="Connect with OFF LABEL"]'); ?>
    </div>

</article>

<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = 'http://offlabel.pecori.jp/thanks/';
}, false );
</script>

<?php get_footer(); ?>
