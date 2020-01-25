<?php
$home_url = esc_url(home_url());
$theme_url = get_template_directory_uri();
get_header();
?>

<article class="thnx">

    <section class="thnx__main">
        <h3 class="thnx__title"> <p>ようこそ OFF LABELへ</p> </h3>
        <p class="thnx__exp">
            ご登録いただきありがとうございます。学問の楽しい世界を伝えるための
            情報をお伝えしますので、ぜひお楽しみください。
        </p>
        <a class="thnx__btn" href="<?php echo $home_url; ?>">Homeへ戻る</a>
    </section>
</article>

<?php get_footer(); ?>
