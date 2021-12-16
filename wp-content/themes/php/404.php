<?php get_header();?>

<body id="error" class="uf">

<?php get_template_part('globalNav'); ?>

<!-- main -->
<main>
	<div id="content">
	
		<!-- #hero -->
		<div class="hero view view-slideup">
			<div class="ptb225 md-ptb120 sm-ptb85" style="background: url('<?php echo home_url(); ?>/img/error/hero.jpg') no-repeat center / cover ;">				
			</div>		
		</div>

		<!-- #sec1 -->
		<section id="sec1" class="cols gutter-40 mt100 sm-mt60 pb110 md-pb100 sm-pb80">
			<div class="col-12 view view-slideup">
				<div class="bg-dots p60 md-p50 sm-p25">
					<h3 class="fz130 sm-fz120 d-ib bb-black pb5">お探しのページが見つかりません</h3>

					<p class="mt50 sm-mt40">ご覧いただいているURLにはページはありません。<br class="sm-d-n">
					URLの入力間違いか、ページが移動している可能性があります。</p>
					
					<div class="mt50 sm-mt30">
						<a href="<?php echo home_url(); ?>/" class="sm-d-b ta-c fw-b hov c-white bgc-blue bdrs-max ptb15 sm-ptb10 plr60 sm-plr40">トップページにもどる</a>
					</div>
				</div>
			</div>
		</section>

	</div>
</main>

<?php get_footer(); ?>