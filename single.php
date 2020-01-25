<?php
$home_url = esc_url(home_url());
$theme_url = get_template_directory_uri();
get_header('2');
?>

<article class="event">
    <?php if(in_category('event')): ?>
        <h1 class="event__title"> <img src="<?php echo $theme_url; ?>/img/event/title_str.png" alt="イベント"> </h1>
    <?php else: ?>
        <h1 class="event__title event__title--news"> <img src="<?php echo $theme_url; ?>/img/news/title_str.png" alt="お知らせ"> </h1>
    <?php endif; ?>

    <section class="event__single">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <div class="event__single__thum"> <?php the_post_thumbnail('large', array('class' => 'event__box__thum')); ?></div>
            <p class="event__single__date"><?php the_time('Y.m.d'); ?></p>
            <p class="event__single__title"><?php the_title(); ?></p>
            <p class="event__single__txt"><?php the_content(); ?></p>
        <?php endwhile; endif; ?>
    </section>
</article>

<?php get_footer('2'); ?>
