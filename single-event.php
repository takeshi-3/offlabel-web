<?php
$home_url = esc_url(home_url());
$theme_url = get_template_directory_uri();
get_header();
?>

<article class="event">
    <?php if (have_posts()): while(have_posts()): the_post(); ?>
        <section class="event__key jp">
            <?php the_post_thumbnail('full'); ?>
        </section>

        <section class="event__key en">
            <img src="<?php the_field('event_thum_en'); ?>" alt="">
        </section>

        <section class="event__concept">
            <h3 class="event__concept__title jp"><p><?php the_title(); ?></p></h3>
            <h3 class="event__concept__title en"><p><?php the_field('event_title_en'); ?></p></h3>
            <p class="event__concept__exp jp"> <?php echo get_the_content(); ?> </p>
            <p class="event__concept__exp en"> <?php echo get_field('event_detail_en'); ?> </p>
        </section>

        <section class="event__info">
            <h3 class="event__info__title jp"><p>開催概要</p></h3>
            <h3 class="event__info__title en"><p>Information</p></h3>
            <div class="event__info__line jp">
                <p class="event__info__line__name">開催日程</p>
                <p class="event__info__line__val"><?php the_field('event_date'); ?></p>
            </div>
            <div class="event__info__line en">
                <p class="event__info__line__name">Date</p>
                <p class="event__info__line__val"><?php the_field('event_date_en'); ?></p>
            </div>
            <div class="event__info__line jp">
                <p class="event__info__line__name">主催</p>
                <p class="event__info__line__val"><?php the_field('event_org'); ?></p>
            </div>
            <div class="event__info__line en">
                <p class="event__info__line__name">Host</p>
                <p class="event__info__line__val"><?php the_field('event_org_en'); ?></p>
            </div>
            <div class="event__info__line jp">
                <p class="event__info__line__name">開催テーマ</p>
                <p class="event__info__line__val"><?php the_field('event_theme'); ?></p>
            </div>
            <div class="event__info__line en">
                <p class="event__info__line__name">Theme</p>
                <p class="event__info__line__val"><?php the_field('event_theme_en'); ?></p>
            </div>
            <div class="event__info__line jp">
                <p class="event__info__line__name">開催場所</p>
                <p class="event__info__line__val">
                    <a href="<?php echo get_field('event_place_link'); ?>" target="_blank">
                        <?php the_field('event_place'); ?>
                        <i class="fas fa-external-link-alt"></i>
                    </a>
                </p>
            </div>
            <div class="event__info__line en">
                <p class="event__info__line__name">Place</p>
                <p class="event__info__line__val">
                    <a href="<?php echo get_field('event_place_link'); ?>" target="_blank">
                        <?php the_field('event_place_en'); ?>
                        <i class="fas fa-external-link-alt"></i>
                    </a>
                </p>
            </div>
            <div class="event__info__line jp">
                <p class="event__info__line__name">プログラム</p>
                <p class="event__info__line__val"><?php the_field('event_program'); ?></p>
            </div>
            <div class="event__info__line en">
                <p class="event__info__line__name">Program</p>
                <p class="event__info__line__val"><?php the_field('event_program_en'); ?></p>
            </div>
        </section>

        <section class="event__map">
            <h3 class="event__map__title"><p>MAP</p></h3>
            <div class="event__map__wrap">
                <?php the_field('event_map'); ?>
            </div>
        </section>
    <?php endwhile; endif; ?>

    <section class="event__back">
        <a href="<?php echo $home_url; ?>/event" class="event__back__btn jp">イベント一覧へ戻る</a>
        <a href="<?php echo $home_url; ?>/event" class="event__back__btn en">Back to Archive</a>
    </section>
</article>

<?php get_footer(); ?>
