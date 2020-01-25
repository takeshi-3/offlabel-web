<?php
$home_url = esc_url(home_url());
$theme_url = get_template_directory_uri();
get_header();
?>

<article class="news">
    <section class="news__arch">
        <h3 class="news__title jp"><p>お知らせ</p></h3>
        <h3 class="news__title en"><p>NEWS</p></h3>
        <div class="news__list">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <a href="<?php echo get_the_permalink(); ?>" class="news__list__item">
                    <p class="news__list__item__date jp"> <?php the_time('Y年n月j日'); ?> </p>
                    <p class="news__list__item__date en"> <?php the_time('Y.n.j'); ?> </p>
                    <div class="news__list__item__thum">
                        <?php if(has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('medium'); ?>
                        <?php else: ?>
                            <img src="<?php echo $theme_url; ?>/img/common/logo.png" alt="">
                        <?php endif; ?>
                    </div>
                    <p class="news__list__item__title jp"><?php the_title(); ?></p>
                    <p class="news__list__item__title en"><?php the_field('news_title_en'); ?></p>
                    <p class="news__list__item__exp jp">
                        <?php echo mb_strimwidth(get_the_content(), 0, 100, '...', 'utf8'); ?>
                    </p>
                    <p class="news__list__item__exp en">
                        <?php echo mb_strimwidth(get_field('news_text_en'), 0, 50, '...', 'utf8'); ?>
                    </p>
                </a>
            <?php endwhile; endif; ?>
            <div class="news__list__item--blank"></div><div class="news__list__item--blank"></div><div class="news__list__item--blank"></div>
        </div>
    </section>

</article>

<?php get_footer(); ?>
