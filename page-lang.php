<?php
$home_url = esc_url(home_url());
$theme_url = get_template_directory_uri();
get_header();
?>

<div class="lang">
    <section class="lang__wrap">
        <p class="lang__str">Welcome<br>To</p>
        <div class="lang__logos">
            <img name="jp" id="lang-jp" class="lang__logos__item" src="<?php echo $theme_url; ?>/img/common/logo_jp.svg" alt="おふ れーべる">
            <img name="en" id="lang-en" class="lang__logos__item" src="<?php echo $theme_url; ?>/img/common/logo.svg" alt="OFF LABEL">
        </div>
        <div class="lang__select">
            <a href="<?php echo $home_url; ?>" class="lang__select__item" name="jp">日本語</a>
            <a href="<?php echo $home_url; ?>" class="lang__select__item" name="en">English</a>
        </div>
    </section>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        // select menu
        var $prev_lang = $('#lang-jp');
        var prev_name = 'jp';
        $('.lang__select__item').hover(function() {
            var name = $(this).attr('name');
            if (name != prev_name) {
                var $hover_lang = $('#lang-' + name);
                $prev_lang.hide();
                $hover_lang.fadeIn(800);
                $prev_lang = $hover_lang;
                prev_name = name;
            }
        },
        function() {

        });

        $('.lang__select__item').on('click', function() {
            var name = $(this).attr('name');
            localStorage.setItem('lang', name);
        });
    });
</script>
