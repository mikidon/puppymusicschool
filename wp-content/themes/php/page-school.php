<?php get_header();?>

<body id="school" class="uf">

<?php get_template_part('globalNav'); ?>

<!-- main -->
<main>
	<section id="content">
	
		<!-- #hero -->
		<div class="hero view view-slideup">
			<div class="ptb200 md-ptb160 sm-ptb100" style="background: url('<?php echo home_url(); ?>/img/about/hero.jpg') no-repeat center / cover ;">
			</div>		
		</div>

		<!-- #sec1 -->
		<section id="sec1" class="mt120 sm-mt70 pb130 md-pb100 sm-pb80">
			<div class="pb70 sm-pb50 cols-wide bg-dots ta-c">
				<div class="mt-40 md-mt-25 sm-mt-15 d-ib view view-slideup">
					<h2 class="ff-mi fz300 md-fz250 sm-fz200 lh160">教室案内</h2>
					<p class="ff-en fz130">school</p>
					<img loading="lazy" src="<?php echo home_url(); ?>/img/base/ic-dot.png" width="20" height="5" class="img-rspsv" alt="dot">
				</div>
				<div class="cols gutter-sm-20 ta-l view view-slideup">
					<section class="col-4 col-md-6 mt40">
						<a href="<?php echo home_url(); ?>/nagoya-meito" class="ptb20 sm-ptb15 plr10 bb-black bt-black d-b btn-ar"><h3>名古屋名東教室</h3></a>
						<p class="mt30 sm-fz90">〒465-0068<br>名古屋市名東区牧の里1-111</p>
					</section>
					<section class="col-4 col-md-6 mt40">
						<a href="<?php echo home_url(); ?>/nagoya-minato" class="ptb20 sm-ptb15 plr10 bb-black bt-black d-b btn-ar"><h3>名古屋みなと教室</h3></a>
						<p class="mt30 sm-fz90">〒455-0804<br>名古屋市港区当知2丁目1501番地</p>
					</section>
					<section class="col-4 col-md-6 mt40">
						<a href="<?php echo home_url(); ?>/okazaki-onishi" class="ptb20 sm-ptb15 plr10 bb-black bt-black d-b btn-ar"><h3>岡崎大西教室</h3></a>
						<p class="mt30 sm-fz90">〒444-0871<br>岡崎市大西3丁目2-5</p>
					</section>
					<section class="col-4 col-md-6 mt40">
						<a href="<?php echo home_url(); ?>/okazaki-yahagi" class="ptb20 sm-ptb15 plr10 bb-black bt-black d-b btn-ar"><h3>岡崎矢作教室</h3></a>
						<p class="mt30 sm-fz90">〒444-0943<br>岡崎市矢作町西林寺87-1</p>
					</section>
					<section class="col-4 col-md-6 mt40">
						<a href="<?php echo home_url(); ?>/kariya" class="ptb20 sm-ptb15 plr10 bb-black bt-black d-b btn-ar"><h3>刈谷アピタ教室</h3></a>
						<p class="mt30 sm-fz90">〒448-0841<br>刈谷市南桜町2-56-1</p>
					</section>
					<section class="col-4 col-md-6 mt40">
						<a href="<?php echo home_url(); ?>/anjyo" class="ptb20 sm-ptb15 plr10 bb-black bt-black d-b btn-ar"><h3>安城今池教室</h3></a>
						<p class="mt30 sm-fz90">〒446-0071 <br>安城市今池町1丁目13番地1 3F</p>
					</section>
					<section class="col-4 col-md-6 mt40">
						<a href="<?php echo home_url(); ?>/gamagori" class="ptb20 sm-ptb15 plr10 bb-black bt-black d-b btn-ar"><h3>蒲郡教室</h3></a>
						<p class="mt30 sm-fz90">〒443-0046<br>蒲郡市竹谷町</p>
					</section>
				</div>
			</div>
			<div class="mt100 sm-mt60 sm-mt50 cols gutter-sm-20">
				<div class="col-6">
					<figure><img loading="lazy" src="<?php echo home_url(); ?>/img/school/sec1-img1.jpg" width="469" height="220" class="img-rspsv" alt="教室案内"></figure>
				</div>
				<div class="col-6">
					<figure><img loading="lazy" src="<?php echo home_url(); ?>/img/school/sec1-img2.jpg" width="469" height="220" class="img-rspsv" alt="教室案内"></figure>
				</div>
			</div>
		</section>

	</section>
</main>

<?php get_footer(); ?>