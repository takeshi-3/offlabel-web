<?php
$home_url = esc_url(home_url());
$theme_url = get_template_directory_uri();
get_header();
$member = array(
    '高田玲奈<br>(タカダ レナ)' => array(
        'rena',
        '東京大学総合文化研究科 超域文化科学専攻 表象文化論コース',
        '文化資源・KAWAII・メディアアート アーティスト'
    ),
    '趙 誼<br>(チョウ ギ)' => array(
        'aoi',
        '東京大学総合文化研究科 地域文化専攻',
        'Circular Economy・エコ・環境・通訳・翻訳・地域創生'
    ),
    '飯塚陽美<br>(イイヅカ ミナミ)' => array(
        'minami',
        '東京大学総合文化研究科 超域文化科学専攻 文化人類学コース',
        '移民・アイデンティティ・沖縄・日系人・多文化共生'
    ),
    '南 希宙<br>(ナム ヒジュ)' => array(
        'nam',
        '東京大学総合文化研究科 超域文化科学専攻 比較文学比較文化コース',
        '韓国近現代美術・伝統と現代社会・日韓関係・文化財'
    ),
);

$member_en = array(
    'Rena Takada' => array(
        'rena',
        '',
        ''
    ),
    '' => array(
        'aoi',
        '',
        ''
    ),
    '' => array(
        '',
        '',
        ''
    ),
    '' => array(
        '',
        '',
        ''
    )
);
?>

<article class="about">
    <section class="about__exp">
        <h3 class="about__exp__title jp"><p>OFF LABELとは?</p></h3>
        <h3 class="about__exp__title en"><p>About OFF LABEL</p></h3>
        <p class="about__exp__txt">
            OFF LABELは学問や研究の力を通じて、人々や組織、国や地域に貼られた、様々な負の「ラベル」を取り払ってゆくことを目的としています。
        </p>
        <p class="about__exp__txt">
            私たちは、アカデミックと現実世界が乖離してしまっている今、カジュアルな形で「学問」の楽しさを広め、研究を社会に発信していきたいと考えています。
            また伝えるだけではなく、学問や研究を通じて、共に考える場を形成していきたいと思っています。
        </p>
        <p class="about__exp__txt">
            「学問」や「研究」が、人々が日常生活で直面する課題を解決するきっかけや武器になることが十分にあるのではないでしょうか。
            そうすることで現状社会を取り巻く課題、研究者を取り巻く問題を解決するきっかけになると私たちは考えています。
        </p>
        <p class="about__exp__txt">
            今後OFF LABELは、市民参加型イベントなどの継続的な実施を通じて、多文化共生社会構築に寄与していきます。
        </p>
        <p class="about__exp__txt">
            <a href="https://ihs.c.u-tokyo.ac.jp/ja/" target="_blank">
                OFF LABELは東京大学大学院博士課程教育リーディングプログラム、多文化共生・統合人間学プログラム（通称：IHS) <i class="fas fa-external-link-alt"></i>生が設立した団体です。
            </a>
        </p>
    </section>

    <section class="about__memb">
        <h3 class="about__memb__title jp"><p>運営メンバー</p></h3>
        <h3 class="about__memb__title en"><p>Members</p></h3>
        <div class="about__memb__wrap jp">
            <?php foreach ($member as $name => $prop): ?>
                <div class="about__memb__per">
                    <p class="about__memb__per__name"><?php echo $name; ?></p>
                    <img class="about__memb__per__img" src="<?php echo $theme_url.'/img/home/member/'.$prop[0].'.png'; ?>" alt="">
                    <p class="about__memb__per__bel">所属 : <?php echo $prop[1]; ?></p>
                    <p class="about__memb__per__pro">専門 : <?php echo $prop[2]; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="about__memb__wrap en">
            <?php foreach ($member_en as $name => $prop): ?>
                <div class="about__memb__per">
                    <p class="about__memb__per__name"><?php echo $name; ?></p>
                    <img class="about__memb__per__img" src="<?php echo $theme_url.'/img/home/member/'.$prop[0].'.png'; ?>" alt="">
                    <p class="about__memb__per__bel">Cource : <?php echo $prop[1]; ?></p>
                    <p class="about__memb__per__pro">Major : <?php echo $prop[2]; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</article>

<?php get_footer(); ?>
