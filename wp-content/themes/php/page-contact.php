<?php get_header();?>

<body id="contact" class="uf">

<?php get_template_part('globalNav'); ?>

<!-- main -->
<main>
	<div id="content">
	
		<!-- #hero -->
		<div class="hero view view-slideup">
			<div class="ptb225 md-ptb120 sm-ptb85" style="background: url('<?php echo home_url(); ?>/img/contact/hero.jpg') no-repeat center / cover ;">				
			</div>		
		</div>

		<!-- #sec1 -->
		<section id="sec1" class="cols gutter-40 mt100 sm-mt60 pb130 md-pb100 sm-pb80">
			<div class="col-12 ta-c view view-slideup">
				<div class="mt-40 md-mt-25 sm-mt-15 d-ib view view-slideup">
					<h2 class="ff-mi fz300 md-fz250 sm-fz200 lh160">お問合わせフォーム</h2>
					<p class="ff-en fz130">contact</p>
					<img loading="lazy" src="<?php echo home_url(); ?>/img/base/ic-dot.png" width="20" height="5" class="img-rspsv" alt="dot">
				</div>
			</div>
			<div class="col-12 view view-slideup">
				<div class="mt60 sm-mt40 bd-black bdrs15 ptb50 plr50 md-ptb40 md-plr40 sm-plr25">
					<p>以下のフォームに必要事項をご入力いただき、<a href="<?php echo home_url(); ?>/privacy" class="bb-black hov" target="_blank" rel="noopener">プライバシーポリシー</a>をご確認のうえ、送信ボタンを押してください。<br class="md-d-n">
					( <span class="c-red">＊</span>マークは必須項目です)</p>
					<div class="mt40 md-mt30">
						<a href="<?php echo home_url(); ?>/application" class="btn-dot sm-d-b ta-l fw-b hov c-white bgc-black ptb10 plr60 sm-plr30">体験レッスンのお申込みはこちらから</a>
					</div>
				</div>

				<!-- #mailformpro -->
				<form id="mailformpro" class="mt50 sm-mt30" action="<?php echo home_url(); ?>/mfp/mailformpro/mailformpro.cgi?type=contact" method="POST">
					<div class="mfp_phase">
						<table>
							<tbody>
								<!--〓〓〓〓〓 -->
								<tr>
									<th>お問い合わせ内容</th>
									<td>
										<div class="select">
											<select name="お問い合わせ内容">
												<option value="" selected="selected">選択して下さい</option>
												<option value="教室について">教室について</option>
												<option value="入会・退会について">入会・退会について</option>
												<option value="採用について">採用について</option>
												<option value="その他">その他</option>
											</select>
										</div>
									</td>
								</tr>
								<!--〓〓〓〓〓 -->
								<tr>
									<th><span class="c-red">＊</span> お名前</th>
									<td><input type="text" name="お名前" data-kana="フリガナ" size="40" required="required" /></td>
								</tr>
								<!--〓〓〓〓〓 -->
								<tr>
									<th><span class="c-red">＊</span> フリガナ</th>
									<td><input type="text" name="フリガナ" size="40" required="required" data-charcheck="kana" /></td>
								</tr>
								<!--〓〓〓〓〓 -->
								<tr>
									<th><span class="c-red">＊</span> メールアドレス</th>
									<td><input type="email" data-type="email" name="email" size="40" required="required" /></td>
								</tr>
								<!--〓〓〓〓〓 -->
								<tr>
									<th>電話番号<span class="fz80 pl20">ハイフン無しで入力してください。</span></th>
									<td>
										<input type="tel" data-type="tel" name="電話番号" size="40" data-min="9" />
									</td>
								</tr>
								<!--〓〓〓〓〓 -->
								<tr>
									<th><span class="c-red">＊</span> お問合わせ内容</th>
									<td>
										<textarea name="お問合わせ内容" rows="30" cols="60"></textarea>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="mfp_buttons mt60">
						<button type="submit" class="hov mfp_element_submit mfp_element_all">入力確認画面へ進む</button>
					</div>
					</form>
					
					<!--!!!【type=〇〇】をフォームごとに変える!!!--><script id="mfpjs" src="<?php echo home_url(); ?>/mfp/mailformpro/mailformpro.cgi?type=contact"></script>

			</div>
		</section>

	</div>
</main>

<?php get_footer(); ?>