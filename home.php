<?php
$home_url = esc_url(home_url());
$theme_url = get_template_directory_uri();
get_header();

$news_args = array(
    'posts_per_page' => 6,
    'post_type' => 'news',
);
$news_query = new WP_Query($news_args);
?>

<div class="home">
    <section class="home__hero">
        <h1>
            <img class="jp" src="<?php echo $theme_url; ?>/img/home/hero.jpg" alt="はじめまして学問">
            <img class="en" src="<?php echo $theme_url; ?>/img/home/hero_en.jpg" alt="Hello, Academic World.">
        </h1>
    </section>

    <section class="home__news--wrap">
        <div class="home__news">
            <h2 class="home__news__title"><p>TOP NEWS</p></h2>

            <div class="home__news__list">
                <?php while ($news_query->have_posts()): $news_query->the_post();?>
                    <a href="<?php echo get_the_permalink(); ?>" class="home__news__item">
                        <div class="">
                            <p class="home__news__item__date"><?php the_time('Y.n.j'); ?></p>
                            <div class="home__news__item__thum">
                                <?php if(has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php else: ?>
                                    <img src="<?php echo $theme_url; ?>/img/common/logo.png" alt="">
                                <?php endif; ?>
                            </div>
                        </div>
                        <p class="home__news__item__title"><?php the_title(); ?></p>
                    </a>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>

            <div class="home__news__more">
                <a class="home__news__more__btn" href="<?php echo $home_url; ?>/news">More News!</a>
            </div>
        </div>
    </section>

    <section class="home__menu">
        <a href="<?php echo $home_url; ?>/about" class="home__menu__about home__menu__item" name="about">
            <p class="home__menu__about__title jp">OFF LABELとは?</p>
            <p class="home__menu__about__title en">About OFF LABEL</p>
            <img src="<?php echo $theme_url; ?>/img/common/logo.svg" alt="OFF LABEL">
        </a>
        <a href="<?php echo $home_url; ?>/event" class="home__menu__conf home__menu__item" name="conf">
            <p class="home__menu__conf__title jp">イベント一覧</p>
            <p class="home__menu__conf__title en">Events</p>
            <img src="<?php echo $theme_url; ?>/img/home/conf.svg" alt="はじめまして、学問。">
        </a>
        <a href="<?php echo $home_url; ?>/speaker" class="home__menu__memb home__menu__item" name="member">
            <p class="home__menu__memb__title jp">出演者情報</p>
            <p class="home__menu__memb__title en">Speakers</p>
            <img src="<?php echo $theme_url; ?>/img/home/speaker.svg" alt="">
        </a>
        <a href="<?php echo $home_url; ?>/news" class="home__menu__news home__menu__item" name="news">
            <p class="home__menu__news__title jp">お知らせ</p>
            <p class="home__menu__news__title en">News</p>
            <img src="<?php echo $theme_url; ?>/img/home/news.svg" alt="">
        </a>
    </section>
</div>

<script type="text/javascript">
  $(document).ready(function() {
      // menu action
      var $open_div;
      var duration = 500;
      $('.home__menu__item').on('click', function() {
         var name = $(this).attr('name');
         var $div = $('.home__div[name="' + name + '"]');
         $open_div = $div;
         $div.show();
         $('.home__close').fadeIn(duration);
         $div.animate({
             height: '100vh',
             opacity: 1
         }, duration);
         setTimeout(function() {
             $div.children('.home__div__wrap').fadeIn(400);
             $div.children('.home__div__hero').fadeIn(400);
         }, duration);
      });

      $('.home__close').on('click', function() {
          $open_div.children('.home__div__wrap').fadeOut(200);
          $open_div.children('.home__div__hero').fadeOut(200);
          setTimeout(function() {
              $open_div.animate({
                  height: 0,
                  opacity: 0
              }, duration);
          }, 300);
          $(this).fadeOut(duration);
          setTimeout(function() {
              $open_div.hide();
          }, 800);
      });
  });
</script>

<?php get_footer(); ?>
