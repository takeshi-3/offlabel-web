<?php
$home_url = esc_url(home_url());
$theme_url = get_template_directory_uri();
get_header();
?>

<article class="new">
    <?php if (have_posts()): while(have_posts()): the_post(); ?>
        <section class="new__wrap">
            <h3 class="new__title jp"><p><i class="fas fa-pencil-alt"></i> <?php echo get_the_title(); ?></p></h3>
            <h3 class="new__title en"><p><i class="fas fa-pencil-alt"></i> <?php echo get_field('news_title_en'); ?></p></h3>

            <p class="new__date jp"><?php the_time('Y年n月j日'); ?></p>
            <p class="new__date en"><?php the_time('Y.n.j'); ?></p>

            <div class="new__thum">
                <?php if(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('large'); ?>
                <?php else: ?>
                    <img src="<?php echo $theme_url; ?>/img/common/logo.png" alt="">
                <?php endif; ?>
            </div>

            <p class="new__exp jp"> <?php echo get_the_content(); ?> </p>
            <p class="new__exp en"> <?php echo get_field('news_text_en'); ?> </p>
        </section>
    <?php endwhile; endif; ?>

    <section class="new__back">
        <a href="<?php echo $home_url; ?>/news" class="new__back__btn jp">記事一覧へ戻る</a>
        <a href="<?php echo $home_url; ?>/news" class="new__back__btn en">Back to Archive</a>
    </section>
</article>

<?php get_footer(); ?>
