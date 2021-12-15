<?php get_header();?>

<body id="course" class="uf">

<?php get_template_part('globalNav'); ?>

<!-- main -->
<main>
	<section id="content">
	
		<!-- #hero -->
		<div class="hero view view-slideup">
			<div class="ptb200 md-ptb160 sm-ptb100" style="background: url('<?php echo home_url(); ?>/img/course/hero.jpg') no-repeat center / cover ;">
			</div>		
		</div>

		<div class="bgc-white pb130 md-pb100 sm-pb80 pt150 sm-pt70 pb100 sm-pb70">
			<!-- #sec1 -->
			<section id="sec1" class="bgc-lightgray bg-nami pb70">
				<div class="cols">
					<div class="col-12 ta-c view view-slideup">
						<div class="mt-60 md-mt-50 sm-mt-40 d-ib">
							<h2 class="ff-mi fz300 md-fz250 sm-fz200 lh160">コース案内</h2>
							<p class="ff-en fz130">course</p>
							<img loading="lazy" src="<?php echo home_url(); ?>/img/base/ic-dot.png" width="20" height="5" class="img-rspsv" alt="dot">
						</div>
					</div>
					<div class="col-12">
						<!-- バンド系コース -->
						<section class="mt40 cols nega gutter-20 gutter-sm-10 view view-slideup">
							<div class="col-12 view view-slideup">
								<h3 class="ribbon-green -lightgray">バンド系コース</h3>
							</div>
							<div class="col-3 col-md-4 col-sm-6 mt20 sm-mt20 view view-slideup">
								<a href="<?php echo home_url(); ?>/vocal" class="hov course1"><span>vocal</span>ボーカル</a>
							</div>
							<div class="col-3 col-md-4 col-sm-6 mt20 sm-mt20 view view-slideup">
								<a href="<?php echo home_url(); ?>/guitar" class="hov course2"><span>guitar</span>ギター</a>
							</div>
							<div class="col-3 col-md-4 col-sm-6 mt20 sm-mt10 view view-slideup">
								<a href="<?php echo home_url(); ?>/bass" class="hov course3"><span>bass</span>ベース</a>
							</div>
							<div class="col-3 col-md-4 col-sm-6 mt20 sm-mt10 view view-slideup">
								<a href="<?php echo home_url(); ?>/drums" class="hov course4"><span>drums</span>ドラム</a>
							</div>
							<div class="col-3 col-md-4 col-sm-6 mt20 sm-mt10 view view-slideup">
								<a href="<?php echo home_url(); ?>/keyboard" class="hov course5"><span>keyboard</span>ベース</a>
							</div>
							<div class="col-3 col-md-4 col-sm-6 mt20 sm-mt10 view view-slideup">
								<a href="<?php echo home_url(); ?>/dtm" class="hov course6"><span>DTM</span>デスクトップミュージック</a>
							</div>
						</section>
						<!-- クラシック系・弦楽器コース -->
						<section class="mt60 sm-mt40 cols nega gutter-20 gutter-sm-10 view view-slideup">
							<div class="col-12 view view-slideup">
								<h3 class="ribbon-blue -lightgray">クラシック系・弦楽器コース</h3>
							</div>
							<div class="col-3 col-md-4 col-sm-6 mt20 sm-mt20 view view-slideup">
								<a href="<?php echo home_url(); ?>/piano" class="hov course7"><span>piano</span>ピアノ</a>
							</div>
							<div class="col-3 col-md-4 col-sm-6 mt20 sm-mt20 view view-slideup">
								<a href="<?php echo home_url(); ?>/violin" class="hov course8"><span>violin / viola</span>バイオリン・ビオラ</a>
							</div>
							<div class="col-3 col-md-4 col-sm-6 mt20 sm-mt10 view view-slideup">
								<a href="<?php echo home_url(); ?>/cello" class="hov course9"><span>cello</span>チェロ</a>
							</div>
							<div class="col-3 col-md-4 col-sm-6 mt20 sm-mt10 view view-slideup">
								<a href="<?php echo home_url(); ?>/ukulele" class="hov course10"><span>ukulele</span>ウクレレ</a>
							</div>
							<div class="col-3 col-md-4 col-sm-6 mt20 sm-mt10 view view-slideup">
								<a href="<?php echo home_url(); ?>/singing" class="hov course11"><span>singing</span>声楽</a>
							</div>
						</section>
						<!-- 管楽器・打楽器系コース -->
						<section class="mt60 sm-mt40 cols nega gutter-20 gutter-sm-10 view view-slideup">
							<div class="col-12 view view-slideup">
								<h3 class="ribbon-green -lightgray">管楽器・打楽器系コース</h3>
							</div>
							<div class="col-3 col-md-4 col-sm-6 mt20 sm-mt20 view view-slideup">
								<a href="<?php echo home_url(); ?>/flute" class="hov course12"><span>flute</span>フルート</a>
							</div>
							<div class="col-3 col-md-4 col-sm-6 mt20 sm-mt20 view view-slideup">
								<a href="<?php echo home_url(); ?>/saxophone" class="hov course13"><span>saxophone</span>サックス</a>
							</div>
							<div class="col-3 col-md-4 col-sm-6 mt20 sm-mt10 view view-slideup">
								<a href="<?php echo home_url(); ?>/trumpet" class="hov course14"><span>trumpet / trombone</span>トランペット・トロンボーン</a>
							</div>
							<div class="col-3 col-md-4 col-sm-6 mt20 sm-mt10 view view-slideup">
								<a href="<?php echo home_url(); ?>/clarinet" class="hov course15"><span>clarinet</span>クラリネット</a>
							</div>
						</section>
						<!-- その他のコース -->
						<section class="mt60 sm-mt40 cols nega gutter-20 gutter-sm-10 view view-slideup">
							<div class="col-12 view view-slideup">
								<h3 class="ribbon-blue -lightgray">その他のコース</h3>
							</div>
							<div class="col-3 col-md-4 col-sm-6 mt20 sm-mt20 view view-slideup">
								<a href="<?php echo home_url(); ?>/lyrics" class="hov course16"><span>lyrics / composition</span>作詞・作曲 / 音楽理論</a>
							</div>
						</section>
					</div>
				</div>
			</section>
		</div>

	</section>
</main>

<?php get_footer(); ?>