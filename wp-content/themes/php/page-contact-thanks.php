<?php get_header();?>

<body id="contact-thanks" class="uf">

<?php get_template_part('globalNav'); ?>

<!-- main -->
<main>
	<div id="content">
	
		<!-- #hero -->
		<div class="hero view view-slideup">
			<div class="ptb225 md-ptb120 sm-ptb85" style="background: url('<?php echo home_url(); ?>/img/contact/hero.jpg') no-repeat center left / cover ;">				
			</div>		
		</div>

		<!-- #sec1 -->
		<section id="sec1" class="cols gutter-40 mt100 sm-mt60 pb110 md-pb100 sm-pb80">
			<div class="col-12 view view-slideup">
				<div class="bg-dots p60 md-p50 sm-p25">
					<h3 class="fz130 sm-fz120 d-ib bb-black pb5">お問合わせが完了しました</h3>

					<p class="mt50 sm-mt40">お問合せいただき誠にありがとうございました。内容を確認し、担当者よりご連絡を差し上げます。<br>
						なお3営業日を過ぎても返答がない場合は、メールの受信がうまく行えていない可能性がありますので、<br class="sm-d-n">
						お電話にてお問い合わせください。</p>
					
					<div class="mt50 sm-mt30">
						<a href="<?php echo home_url(); ?>/" class="sm-d-b ta-c fw-b hov c-white bgc-blue bdrs-max ptb15 sm-ptb10 plr60 sm-plr40">トップページにもどる</a>
					</div>
				</div>
			</div>
		</section>

	</div>
</main>

<?php get_footer(); ?>