<?php
$home_url = esc_url(home_url());
$theme_url = get_template_directory_uri();

$menu = array(
	'About' => $home_url.'/about',
	'Event' => $home_url.'/event',
	'Speaker' => $home_url.'/speaker',
	'News' => $home_url.'/news'
);
?>

<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-154571888-1"></script>
	<script>
  	window.dataLayer = window.dataLayer || [];
  	function gtag(){dataLayer.push(arguments);}
  	gtag('js', new Date());

  	gtag('config', 'UA-154571888-1');
	</script>

	<!-- basic info -->
	<title>OFF LABEL | 学問と日常を繋ぐ</title>
	<meta charset="utf-8">
	<meta name="description" content="OFF LABELは学問や研究の力を通じて、人々や組織、国や地域に貼られた、様々な負の「ラベル」を取り払ってゆくことを目的としています。">
	<meta name="keywords" content="東京大学, OFF LABEL, 学問, 研究, 研究者, アカデミック, 日常生活, オシャレ">
	<meta name="author" content="Chun">
	<meta name="viewport" content="width=device-width initial-scale=1">
	<meta name="theme-color" content="#2E2C53">

	<!-- OGP -->
	<meta property="og:title" content="OFF LABEL | HOME" />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="OFF LABELは学問や研究の力を通じて、人々や組織、国や地域に貼られた、様々な負の「ラベル」を取り払ってゆくことを目的としています。" />
	<meta property="og:url" content="http://offlabel.pecori.jp" />
	<meta property="og:site_name" content="OFF LABEL | 学問と日常を繋ぐ" />
	<meta property="og:image" content="<?php echo $theme_url; ?>/img/common/ogp.png" />

	<!-- link -->
	<link rel="shortcut icon" href="./img/common/favicon.ico">
	<link rel="stylesheet" href="<?php echo $theme_url; ?>/css/style.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">

	<!-- script -->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script src="https://kit.fontawesome.com/4c5d959895.js" crossorigin="anonymous"></script>
	<script name="tsukushi-font-import">
  	(function(d) {
    var config = {
    	kitId: 'otj6pkb',
    	scriptTimeout: 3000,
    	async: true
	},
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  	})(document);
	</script>
	<?php wp_head(); ?>
</head>
<body class="page" id="page">
	<div class="hamburger" id="hamburger">
		<span class="hamburger-line"></span>
		<span class="hamburger-line"></span>
		<span class="hamburger-line"></span>
	</div>

	<div class="header__spmenu">
		<?php foreach ($menu as $name => $link): ?>
			<a href="<?php echo $link; ?>" class="header__spmenu__item"><?php echo $name; ?></a>
		<?php endforeach; ?>
		<div class="header__spmenu__sns">
			<a href="https://www.facebook.com/OFFLABELJP/" target="_blank"> <i class="fab fa-facebook-square"></i> </a>
			<a href="https://twitter.com/offlabelgakkai" target="_blank"> <i class="fab fa-twitter"></i> </a>
			<a href="https://www.instagram.com/offlabelgakkai/" target="_blank"> <i class="fab fa-instagram"></i> </a>
		</div>
	</div>

	<?php if(is_front_page()): ?>
		<div class="header--spacing"></div>
	<?php endif; ?>

	<header class="header">
		<div class="header__logo">
			<a href="<?php echo $home_url; ?>"> <img src="<?php echo $theme_url; ?>/img/common/logo_long.svg" alt="OFF LABEL"> </a>
		</div>

		<div class="header__menu">
			<?php foreach ($menu as $name => $link): ?>
				<a href="<?php echo $link; ?>" class="header__menu__item"><?php echo $name; ?></a>
			<?php endforeach; ?>
			<a href="https://www.facebook.com/OFFLABELJP/" target="_blank"> <i class="fab fa-facebook-square"></i> </a>
			<a href="https://twitter.com/offlabelgakkai" target="_blank"> <i class="fab fa-twitter"></i> </a>
			<a href="https://www.instagram.com/offlabelgakkai/" target="_blank"> <i class="fab fa-instagram"></i> </a>
			<a href="<?php echo $home_url; ?>/join" class="header__menu__join">
				<p>Join us</p>
			</a>
		</div>
	</header>


	<script type="text/javascript">
		$(document).ready(function() {
			// hamburger action
			var hamb_state = 0;
			$('#hamburger').on('click', function() {
				var $spmenu = $('.header__spmenu');
				$('.hamburger-line').toggleClass('hamb-active');
				if(hamb_state == 0) {
					hamb_state = 1;
					$spmenu.css('display', 'block');
					$spmenu.animate({
						top: 0,
						opacity: 1
					}, 300);
				}
				else if(hamb_state == 1) {
					hamb_state = 0;
					$spmenu.animate({
						top: '100%',
						opacity: 0
					}, 300);
					setTimeout(function() {
						$spmenu.css('display', 'none');
					}, 300);
				}
			});
		});
	</script>
