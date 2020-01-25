<?php
$home_url = esc_url(home_url());
$theme_url = get_template_directory_uri();
get_header(); ?>

<div class="err">
  <img class="err__mainviz" src="<?php echo $theme_url; ?>/img/404/apologize.svg" alt="ただいま準備中です。もう少し待っててね！">
</div>

<?php get_footer(); ?>
