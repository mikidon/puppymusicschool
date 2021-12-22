<!-- header -->
<header>
	<div id="hd-main">
		<div class="hd-upper">
			<?php if(is_home()){ ?>
			<h1 class="site-ttl"><a class="hov" href="<?php echo home_url(); ?>/"><img loading="lazy" src="<?php echo home_url(); ?>/img/base/hd-logo.png" width="369" height="36" alt="音楽教室 名古屋市名東区 港区 岡崎市 刈谷市 安城市 蒲郡市 ピアノ ボーカル ギター ドラム フルート サックス トランペット バイオリン"></a></h1>
			<?php }elseif(is_single()){ ?>
			<h1 class="site-ttl"><a class="hov" href="<?php echo home_url(); ?>/"><img loading="lazy" src="<?php echo home_url(); ?>/img/base/hd-logo.png" width="369" height="36" alt="<?php the_title(); ?>"></a></h1>
			<?php }else{ ?>
			<div class="site-ttl"><a class="hov" href="<?php echo home_url(); ?>/"><img loading="lazy" src="<?php echo home_url(); ?>/img/base/hd-logo.png" width="369" height="36" alt="<?php the_title(); ?>"></a></div>
			<?php } ?>
			<div class="d-f">
				<nav id="sub-menu">
					<ul>
						<li><a href="<?php echo home_url(); ?>/new" class="hov">お知らせ</a></li>
						<li><a href="<?php echo home_url(); ?>/blog" class="hov">ブログ</a></li>
						<li><a href="<?php echo home_url(); ?>/recruit" class="hov">採用情報</a></li>
					</ul>	
				</nav>
				<div class="hd-cv">
					<a href="<?php echo home_url(); ?>/application" class="cv-application">体験レッスン</a>
					<a href="<?php echo home_url(); ?>/contact" class="cv-contact">お問合わせ</a>
				</div>
			</div>
		</div>
		<nav id="global-nav">
			<ul>
				<li><a href="<?php echo home_url(); ?>/about">パピーの特徴</a></li>
				<li><a href="<?php echo home_url(); ?>/course">コース案内</a></li>
				<li><a href="<?php echo home_url(); ?>/school">教室案内</a></li>
				<li><a href="<?php echo home_url(); ?>/price">レッスン料金</a></li>
				<li><a href="<?php echo home_url(); ?>/teacher">講師紹介</a></li>
				<li><a href="<?php echo home_url(); ?>/trial">体験レッスン</a></li>
				<li class="d-n md-d-b"><a href="<?php echo home_url(); ?>/event" class="hov">イベント</a></li>
				<li class="d-n md-d-b"><a href="<?php echo home_url(); ?>/campaign" class="hov">キャンペーン</a></li>
				<li class="d-n md-d-b"><a href="<?php echo home_url(); ?>/present" class="hov">楽器プレゼント</a></li>
				<li><a href="<?php echo home_url(); ?>/company">会社案内</a></li>
				<li class="d-n md-d-b"><a href="<?php echo home_url(); ?>/recruit" class="hov">採用情報</a></li>
				<li class="d-n md-d-b"><a href="<?php echo home_url(); ?>/new" class="hov">お知らせ</a></li>
				<li class="d-n md-d-b"><a href="<?php echo home_url(); ?>/blog" class="hov">ブログ</a></li>
				<li class="d-n md-d-b"><a href="<?php echo home_url(); ?>/contact" class="hov">お問合わせ</a></li>
			</ul>
		</nav>
		<div id="burger-trg">
			<span class="burger-ic"></span>
		</div>
	</div>
</header>