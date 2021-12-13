<?php get_header();?>

<body id="teacher" class="uf">

<?php get_template_part('globalNav'); ?>

<!-- main -->
<main>
	<section id="content">
	
		<!-- #hero -->
		<div class="hero view view-slideup">
			<div class="ptb225 md-ptb120 sm-ptb85" style="background: url('<?php echo home_url(); ?>/img/teacher/hero.jpg') no-repeat center / cover ;">				
			</div>		
		</div>

		<!-- #sec1 -->
		<section id="sec1" class="cols gutter-40 mt100 sm-mt60 pb130 md-pb100 sm-pb80">
			<div class="col-12 ta-c view view-slideup mb20">
				<div class="mt-40 md-mt-25 sm-mt-15 d-ib view view-slideup">
					<h2 class="ff-mi fz300 md-fz250 sm-fz200 lh160">講師紹介</h2>
					<p class="ff-en fz130">teacher</p>
					<img loading="lazy" src="<?php echo home_url(); ?>/img/base/ic-dot.png" width="20" height="5" class="img-rspsv" alt="dot">
				</div>
			</div>
			
			<?php $rows = get_field('teachers'); ?>
			<?php foreach($rows as $row) { ?>
			<section class="col-6 col-sm-12 mt30 view view-slideup">
				<div class="bd-blue bdrs15 ptb30 plr30 sm-plr25">
					<figure><img loading="lazy" src="<?php echo $row['pic']; ?>" width="400" height="280" class="img-rspsv-full" alt="先生写真"></figure>
					<h3 class="bb-black d-ib mt30 pb10"><span class="fz130 sm-fz120"><?php echo $row['name']; ?></span><span class="pl20 ff-sofia"><?php echo $row['name_en']; ?></span></h3>
					<section class="mt25">
						<h4 class="ttl-dot c-blue fz115">担当コース</h4>
						<p class="mt10"><?php echo $row['course']; ?></p>
					</section>
					<section class="mt20">
						<h4 class="ttl-dot c-blue fz115">経歴・プロフィール</h4>
						<p class="mt10"><?php echo $row['profile']; ?></p>
					</section>
					<section class="mt20">
						<h4 class="ttl-dot c-blue fz115">メッセージ</h4>
						<p class="mt10"><?php echo $row['message']; ?></p>
					</section>
				</div>
			</section>
			<?php } ?>

		</section>

	</section>
</main>

<?php get_footer(); ?>