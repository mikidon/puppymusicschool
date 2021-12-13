<?php get_header();?>

<body id="guitar" class="uf">

<?php get_template_part('globalNav'); ?>

<!-- main -->
<main>
	<section id="content">
	
		<!-- #hero -->
		<div class="hero view view-slideup">
			<div class="ptb200 md-ptb160 sm-ptb100" style="background: url('<?php echo home_url(); ?>/img/vocal/hero.jpg') no-repeat center / cover ;">
			</div>		
		</div>

		<!-- #sec1 -->
		<section id="sec1" class="mt120 sm-mt70">
			<div class="ptb20 sm-ptb30 cols-wide bg-dots">
				<div class="cols jc-c ai-c gutter-70 gutter-md-40">
					<div class="col-6 col-sm-10 sm-mt40 ord1 sm-ord2">
						<figure><img loading="lazy" src="<?php echo home_url(); ?>/img/guitar/sec1-img1.png" width="455" height="448" class="img-rspsv" alt="ギター"></figure>
					</div>
					<div class="col-6 col-sm-12 ord2 sm-ord1">
						<div class="ttl">
							<p class="ff-en fz350 lh180">Guitar</p>
							<h2>ギター</h2>
						</div>
						<p class="mt30">家に眠っていたギターを取り出してさて、曲でも弾いてみようかなと始めてみたが、なかなか難しい…。</p>
						<p class="mt15">正しい指導の下にギターを習わないと上達せず長続きしません。 先生と一緒に楽しくレッスンしてテクニックを身につけていきましょう。</p>
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