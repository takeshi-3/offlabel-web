<?php
$home_url = esc_url(home_url());
$theme_url = get_template_directory_uri();
get_header();
?>

<article class="events">
    <div class="events__wrap">
        <h3 class="events__title jp"><p>イベント一覧</p></h3>
        <h3 class="events__title en"><p>Events</p></h3>
        <section class="events__slide">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <a href="<?php echo get_the_permalink(); ?>" class="events__slide__item">
                    <h2 class="events__slide__title jp"><?php the_title(); ?></h2>
                    <h2 class="events__slide__title en"><?php get_field('event_title_en'); ?></h2>
                    <?php the_post_thumbnail('large', array('class' => 'events__slide__thumb')); ?>
                    <p class="events__slide__date jp">開催日 : <?php the_field('event_date'); ?></p>
                    <p class="events__slide__date en">Date : <?php the_field('event_date_en'); ?></p>
                </a>
            <?php endwhile; endif; ?>
        </section>
    </div>
</article>

<script type="text/javascript">
    $(document).ready(function() {
        $('.events__slide').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            autoplay: true,
            autoplaySpeed: 3000,
        });
    });
</script>

<?php get_footer(); ?>
