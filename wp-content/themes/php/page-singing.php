<?php get_header();?>

<body id="singing" class="uf">

<?php get_template_part('globalNav'); ?>

<!-- main -->
<main>
	<section id="content">
	
		<!-- #hero -->
		<div class="hero view view-slideup">
			<div class="ptb200 md-ptb160 sm-ptb100" style="background: url('<?php echo home_url(); ?>/img/piano/hero.jpg') no-repeat center / cover ;">
			</div>		
		</div>

		<!-- #sec1 -->
		<section id="sec1" class="mt120 sm-mt70">
			<div class="ptb20 sm-ptb30 cols-wide bg-dots">
				<div class="cols jc-c ai-c gutter-70 gutter-md-40">
					<div class="col-6 col-sm-12">
						<div class="ttl">
							<p class="ff-en fz350 lh180">Singing</p>
							<h2>声楽</h2>
						</div>
						<p class="mt30">体全体がひとつの楽器となる声楽。クラシックを歌うための呼吸法や発声法などを学び、好きな曲を伸びやかに情感を込めて歌えるようにしていきます。</p>
						<p class="mt15">声楽は初めてという方でも、呼吸法や発声、身体の使い方、ソルフェージュなど、丁寧に指導いたします。声楽で進学を目指す方から、趣味の方まで幅広く対応しています。歌曲や合唱、ミュージカル、シャンソン、童謡など楽しく歌いましょう！</p>
					</div>
					<div class="col-6 col-sm-10 sm-mt40">
						<figure><img loading="lazy" src="<?php echo home_url(); ?>/img/singing/sec1-img1.png" width="446" height="437" class="img-rspsv" alt="ウクレレ"></figure>
					</div>
				</div>
			</div>
		</section>
					
		<!-- #sec2 -->

		<!-- #sec3 -->

		<!-- #sec4 -->
		<section id="sec4" class="course-link pb40 bgc-lightgray sm-plr20">
			<div class="cols gutter-20 gutter-sm-10">
				<div class="col-12 mt-20">
					<h3 class="ribbon-black -lightgray">バンド系コース</h3>
				</div>
				<div class="col-3 col-md-4 col-sm-6 mt20 sm-mt20">
					<a href="<?php echo home_url(); ?>/vocal" class="hov course1"><span>vocal</span>ボーカル</a>
				</div>
				<div class="col-3 col-md-4 col-sm-6 mt20 sm-mt20">
					<a href="<?php echo home_url(); ?>/guitar" class="hov course2"><span>guitar</span>ギター</a>
				</div>
				<div class="col-3 col-md-4 col-sm-6 mt20 sm-mt10">
					<a href="<?php echo home_url(); ?>/bass" class="hov course3"><span>bass</span>ベース</a>
				</div>
				<div class="col-3 col-md-4 col-sm-6 mt20 sm-mt10">
					<a href="<?php echo home_url(); ?>/drums" class="hov course4"><span>drums</span>ドラム</a>
				</div>
				<div class="col-3 col-md-4 col-sm-6 mt20 sm-mt10">
					<a href="<?php echo home_url(); ?>/keyboard" class="hov course5"><span>keyboard</span>ベース</a>
				</div>
				<div class="col-3 col-md-4 col-sm-6 mt20 sm-mt10">
					<a href="<?php echo home_url(); ?>/dtm" class="hov course6"><span>DTM</span>デスクトップミュージック</a>
				</div>
			</div>
		</section>

	</section>
</main>

<?php get_footer(); ?>