<?php
$home_url = esc_url(home_url());
$theme_url = get_template_directory_uri();
get_header();
?>

<article class="speakers">
    <section class="speakers__arch">
        <h3 class="speakers__title jp"><p>出演者情報</p></h3>
        <h3 class="speakers__title en"><p>Speakers</p></h3>
        <div class="speakers__list">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <div class="speakers__list__per">
                    <p class="speakers__list__per__name speakers__list__per__name--<?php echo get_field('speaker_cat'); ?> jp"> <?php the_title(); ?> </p>
                    <p class="speakers__list__per__name en"> <?php get_field('speaker_name_en'); ?> </p>
                    <div class="speakers__list__per__flex">
                        <div class="speakers__list__per__thum">
                            <?php if(has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('medium'); ?>
                            <?php else: ?>
                                <img src="<?php echo $theme_url; ?>/img/common/logo.png" alt="">
                            <?php endif; ?>
                        </div>
                        <p class="speakers__list__per__exp jp"><?php echo get_the_content(); ?></p>
                        <p class="speakers__list__per__exp en"><?php echo get_field('speaker_text_en'); ?></p>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </section>

</article>

<?php get_footer(); ?>
