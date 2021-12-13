<?php get_header();?>

<body id="recruit" class="uf">

<?php get_template_part('globalNav'); ?>

<!-- main -->
<main>
	<section id="content">
	
		<!-- #hero -->
		<div class="hero view view-slideup">
			<div class="ptb200 md-ptb160 sm-ptb100" style="background: url('<?php echo home_url(); ?>/img/recruit/hero.jpg') no-repeat center / cover ;">
			</div>		
		</div>

		<!-- #sec1 -->
		<section id="sec1" class="mt120 sm-mt70 pb130 md-pb100 sm-pb80">
			<div class="pb70 sm-pb50 cols-wide bg-dots ta-c">
				<div class="mt-40 md-mt-25 sm-mt-15 d-ib view view-slideup">
					<h2 class="ff-mi fz300 md-fz250 sm-fz200 lh160">採用情報</h2>
					<p class="ff-en fz130">recruit</p>
					<img loading="lazy" src="<?php echo home_url(); ?>/img/base/ic-dot.png" width="20" height="5" class="img-rspsv" alt="dot">
					<p class="mt50 sm-mt30">以下の教室で講師を募集しております。<br>その他の講師も随時募集しておりますので<br class="d-n sm-d-b">お気軽にお問合せください。</p>
				</div>
				<div class="cols gutter-sm-20 ta-l view view-slideup mt30">
					<?php if(have_rows('recruit')): ?>
					<?php while(have_rows('recruit')): the_row(); ?>
						<section class="col-4 col-md-6 mt40">
						<h3 class="ptb20 sm-ptb15 plr10 bb-black bt-black d-b"><?php the_sub_field('name'); ?></h3>
						<?php if(have_rows('list')): ?>
							<ul class="mt30 li-dots">
							<?php while(have_rows('list')): the_row(); ?>
							<li><?php the_sub_field('list_item'); ?></li>
							<?php endwhile; ?>
							<?php endif; ?>
							</ul>
						</section>
					<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</section>

		<!-- #sec2 -->
		<section id="sec2" class="bgc-lightgray bg-nami pb100 sm-pb50 mb130 md-mb100 sm-mb80">
			<div class="cols gutter-40 jc-c">
				<div class="col-12 ta-c view view-slideup">
					<div class="mt-70 md-mt-60 d-ib">
						<p class="ff-en fz300 sm-fz240 lh180">application</p>
						<h2>募集要項</h2>
						<img loading="lazy" src="<?php echo home_url(); ?>/img/base/ic-dot.png" width="20" height="5" class="img-rspsv" alt="dot">
					</div>
				</div>
				<section class="col-12 mt50 view view-slideup">
					<div class="bgc-white p60 md-p40 md-p30 bdrs15 h-eq">
						<table class="tbl-basic th-w240">
							<tbody>
								<?php if(have_rows('application')): ?>
								<?php while(have_rows('application')): the_row(); ?>	
								<tr>
									<th><?php the_sub_field('head'); ?></th>
									<td><?php the_sub_field('body'); ?></td>
								</tr>
								<?php endwhile; ?>
								<?php endif; ?>
							</tbody>
						</table>
					</div>
				</section>
				<div class="mt50 col-6 col-md-8 col-sm-11">
					<a href="<?php echo home_url(); ?>/contact" class="d-b ta-c fw-b hov c-blue bd-blue bdrs-max ptb10 plr40">ご応募・お問合わせはフォームから！</a>
				</div>
			</div>
		</section>

	</section>
</main>

<?php get_footer(); ?>