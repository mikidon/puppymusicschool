<?php get_header();?>

<body id="application" class="uf">

<?php get_template_part('globalNav'); ?>

<!-- main -->
<main>
	<div id="content">
	
		<!-- #hero -->
		<div class="hero view view-slideup">
			<div class="ptb225 md-ptb120 sm-ptb85" style="background: url('<?php echo home_url(); ?>/img/application/hero.jpg') no-repeat center / cover ;">				
			</div>		
		</div>

		<!-- #sec1 -->
		<section id="sec1" class="cols gutter-40 mt100 sm-mt60 pb130 md-pb100 sm-pb80">
			<div class="col-12 ta-c view view-slideup">
				<div class="mt-40 md-mt-25 sm-mt-15 d-ib view view-slideup">
					<h2 class="ff-mi fz300 md-fz250 sm-fz200 lh160">体験レッスンお申込み</h2>
					<p class="ff-en fz130">free trial</p>
					<img loading="lazy" src="<?php echo home_url(); ?>/img/base/ic-dot.png" width="20" height="5" class="img-rspsv" alt="dot">
				</div>
			</div>
			<div class="col-12 view view-slideup">
				<div class="mt60 sm-mt40 bd-black bdrs15 ptb50 plr50 md-ptb40 md-plr40 sm-plr25">
					<p>以下のフォームに必要事項をご入力いただき、<a href="<?php echo home_url(); ?>/privacy" class="hov bb-black" target="_blank" rel="noopener">プライバシーポリシー</a>をご確認のうえ、送信ボタンを押してください。<br class="md-d-n">
					( <span class="c-red">＊</span>マークは必須項目です)</p>
					<div class="mt40 md-mt30">
						<a href="<?php echo home_url(); ?>/contact" class="btn-dot sm-d-b ta-l fw-b hov c-white bgc-black ptb10 plr60 sm-plr30">通常のお問合わせはこちらから</a>
					</div>
				</div>

				<!-- #mailformpro -->
				<form id="mailformpro" class="mt50 sm-mt30" action="<?php echo home_url(); ?>/mfp/mailformpro/mailformpro.cgi?type=application" method="POST">
					<div class="mfp_phase">
						<table>
							<tbody>
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
									<th><span class="c-red">＊</span> 年齢<span class="fz80 pl20">※18歳未満の方は保護者の承諾が必要です。</span></th>
									<td><input type="number" data-type="number" name="数字" data-min="1" data-max="80" required="required" /></td>
								</tr>
								<!--〓〓〓〓〓 -->
								<tr>
									<th><span class="c-red">＊</span> 性別</th>
									<td class="bgc-white p20">
										<label><input type="radio" name="性別" value="男" required="required" /> 男性</label>
										<label><input class="ml20" type="radio" name="性別" value="女" required="required" /> 女性</label>
										<div id="errormsg_性別" class="mfp_err"></div>
									</td>
								</tr>
								<!--〓〓〓〓〓 -->
								<tr>
									<th><span class="c-red">＊</span> 住所</th>
									<td>
									<ul>
										<li>
											<input type="hidden" name="ご住所" data-unjoin="〒+郵便番号+\n+都道府県+市区町村+丁目番地" value="" />
											<input type="text" name="郵便番号" size="20" data-address="都道府県,市区町村,市区町村" autocomplete="off" placeholder="郵便番号" />
										</li>
										<li class="mt10 sm-mt10">
											<div class="select">
												<select name="都道府県">
													<option value="" selected="selected">都道府県</option>
													<optgroup label="北海道・東北地方">
													<option value="北海道">北海道</option>
													<option value="青森県">青森県</option>
													<option value="岩手県">岩手県</option>
													<option value="秋田県">秋田県</option>
													<option value="宮城県">宮城県</option>
													<option value="山形県">山形県</option>
													<option value="福島県">福島県</option>
													</optgroup>
													<optgroup label="関東地方">
													<option value="栃木県">栃木県</option>
													<option value="群馬県">群馬県</option>
													<option value="茨城県">茨城県</option>
													<option value="埼玉県">埼玉県</option>
													<option value="東京都">東京都</option>
													<option value="千葉県">千葉県</option>
													<option value="神奈川県">神奈川県</option>
													</optgroup>
													<optgroup label="中部地方">
													<option value="山梨県">山梨県</option>
													<option value="長野県">長野県</option>
													<option value="新潟県">新潟県</option>
													<option value="富山県">富山県</option>
													<option value="石川県">石川県</option>
													<option value="福井県">福井県</option>
													<option value="静岡県">静岡県</option>
													<option value="岐阜県">岐阜県</option>
													<option value="愛知県">愛知県</option>
													</optgroup>
													<optgroup label="近畿地方">
													<option value="三重県">三重県</option>
													<option value="滋賀県">滋賀県</option>
													<option value="京都府">京都府</option>
													<option value="大阪府">大阪府</option>
													<option value="兵庫県">兵庫県</option>
													<option value="奈良県">奈良県</option>
													<option value="和歌山県">和歌山県</option>
													</optgroup>
													<optgroup label="四国地方">
													<option value="徳島県">徳島県</option>
													<option value="香川県">香川県</option>
													<option value="愛媛県">愛媛県</option>
													<option value="高知県">高知県</option>
													</optgroup>
													<optgroup label="中国地方">
													<option value="鳥取県">鳥取県</option>
													<option value="島根県">島根県</option>
													<option value="岡山県">岡山県</option>
													<option value="広島県">広島県</option>
													<option value="山口県">山口県</option>
													</optgroup>
													<optgroup label="九州・沖縄地方">
													<option value="福岡県">福岡県</option>
													<option value="佐賀県">佐賀県</option>
													<option value="長崎県">長崎県</option>
													<option value="大分県">大分県</option>
													<option value="熊本県">熊本県</option>
													<option value="宮崎県">宮崎県</option>
													<option value="鹿児島県">鹿児島県</option>
													<option value="沖縄県">沖縄県</option>
													</optgroup>
												</select>
											</div>
										</li>
										<li class="mt10 sm-mt10"><input type="text" name="市区町村" size="50" placeholder="市区町村" /></li>
										<li class="mt10 sm-mt10"><input type="text" name="丁目番地" size="50" placeholder="番地、マンション名など" /></li>
									</ul>
									</td>
								</tr>
								<!--〓〓〓〓〓 -->
								<tr>
									<th><span class="c-red">＊</span> メールアドレス</th>
									<td><input type="email" data-type="email" name="email" size="40" required="required" /></td>
								</tr>
								<!--〓〓〓〓〓 -->
								<tr>
									<th><span class="c-red">＊</span> 電話番号<span class="fz80 pl20">ハイフン無しで入力してください。</span></th>
									<td>
										<input type="tel" data-type="tel" name="電話番号" size="40" data-min="9" required="required" />
									</td>
								</tr>
								<!--〓〓〓〓〓 -->
								<tr>
									<th><span class="c-red">＊</span> 希望コース<span class="fz80 pl20">※体験レッスンは1度に1コースしか申し込みできません</span></th>
									<td>
										<div class="select">
											<select name="希望コース" required="required">
												<option value="" selected="selected">選択して下さい</option>
												<option value="ピアノ">ピアノ</option>
												<option value="ヴォーカル">ヴォーカル</option>
												<option value="エレキギター">エレキギター</option>
												<option value="アコースティックギター">アコースティックギター</option>
												<option value="ベース">ベース</option>
												<option value="ドラム">ドラム</option>
												<option value="キーボード">キーボード</option>
												<option value="フルート">フルート</option>
												<option value="サックス">サックス</option>
												<option value="トランペット">トランペット</option>
												<option value="トロンボーン">トロンボーン</option>
												<option value="クラリネット">クラリネット</option>
												<option value="バイオリン">バイオリン</option>
												<option value="ヴィオラ">ヴィオラ</option>
												<option value="チェロ">チェロ</option>
												<option value="声楽">声楽</option>
												<option value="DTM">DTM</option>
												<option value="ウクレレ">ウクレレ</option>
												<option value="その他">その他</option>
											</select>
										</div>
									</td>
								</tr>
								<!--〓〓〓〓〓 -->
								<tr>
									<th><span class="c-red">＊</span> レッスン形態</th>
									<td>
										<div class="select">
											<select name="レッスン形態" required="required">
												<option value="" selected="selected">選択して下さい</option>
												<option value="個人">個人</option>
												<option value="グループ">グループ</option>
												<option value="未定">未定</option>
												<option value="こだわらない">こだわらない</option>
											</select>
										</div>
									</td>
								</tr>
								<!--〓〓〓〓〓 -->
								<tr>
									<th><span class="c-red">＊</span> 希望レッスン場所</th>
									<td class="bgc-white p20">
									<label><input type="radio" name="希望レッスン場所" value="名古屋みなと教室" required="required" /> 名古屋みなと教室</label><br class="d-n sm-d-b">
										<label><input class="ml20 sm-ml5 sm-mt15" type="radio" name="希望レッスン場所" value="名古屋名東教室" required="required" /> 名古屋名東教室</label><br class="d-n sm-d-b">
										<label><input class="ml20 sm-ml5 sm-mt15" type="radio" name="希望レッスン場所" value="岡崎大西教室" required="required" /> 岡崎大西教室</label><br class="d-n sm-d-b">
										<label><input class="ml20 sm-ml5 sm-mt15" type="radio" name="希望レッスン場所" value="岡崎矢作教室" required="required" /> 岡崎矢作教室</label><br>
										<label><input class="sm-ml5 sm-mt15" type="radio" name="希望レッスン場所" value="刈谷アピタ教室" required="required" /> 刈谷アピタ教室</label><br class="d-n sm-d-b">
										<label><input class="ml20 sm-ml5 sm-mt15" type="radio" name="希望レッスン場所" value="安城今池教室" required="required" /> 安城今池教室</label><br class="d-n sm-d-b">
										<label><input class="ml20 sm-ml5 sm-mt15" type="radio" name="希望レッスン場所" value="蒲郡教室" required="required" /> 蒲郡教室</label><br class="d-n sm-d-b">
										<label><input class="ml20 sm-ml5 sm-mt15" type="radio" name="希望レッスン場所" value="自宅" required="required" /> 自宅</label><br class="d-n sm-d-b">
										<label><input class="ml20 sm-ml5 sm-mt15" type="radio" name="希望レッスン場所" value="講師宅" required="required" /> 講師宅</label>
										<div id="errormsg_希望レッスン場所" class="mfp_err"></div>
									</td>
								</tr>
								<!--〓〓〓〓〓 -->
								<tr>
									<th><span class="c-red">＊</span> 希望コースの経験</th>
									<td>
										<div class="select">
											<select name="希望コースの経験" required="required">
												<option value="" selected="selected">選択して下さい</option>
												<option value="無し">無し</option>
												<option value="少々有り">少々有り</option>
												<option value="有り">有り</option>
											</select>
										</div>
									</td>
								</tr>
								<!--〓〓〓〓〓 -->
								<tr>
									<th>体験時の楽器の有無</th>
									<td>
										<div class="select">
											<select name="内容">
												<option value="" selected="selected">選択して下さい</option>
												<option value="無し">無し</option>
												<option value="有り">有り</option>
											</select>
										</div>
									</td>
								</tr>
								<!--〓〓〓〓〓 -->
								<tr>
									<th><span class="c-red">＊</span> 体験希望日<span class="fz80 pl20">※入会した場合、通学可能な曜日を記入してください</span></th>
									<td>
									<ul>
										<li><input type="text" name="第1希望" size="40" required="required" placeholder="第1希望 (必須)　例：月水金 18時～21時"></li>
										<li class="mt10 sm-mt10"><input type="text" name="第2希望" size="40" placeholder="第2希望"></li>
									</ul>
									</td>
								</tr>
								<!--〓〓〓〓〓 -->
								<tr>
									<th>ご職業</th>
									<td>
										<div class="select">
											<select name="職業">
												<option value="" selected="selected">選択して下さい</option>
												<option value="会社員">会社員</option>
												<option value="学生">学生</option>
												<option value="主婦">主婦</option>
												<option value="フリーター">フリーター</option>
												<option value="無職">無職</option>
												<option value="自営業">自営業</option>
												<option value="その他">その他</option>
											</select>
										</div>
									</td>
								</tr>
								<!--〓〓〓〓〓 -->
								<tr>
									<th>当スクールを知ったきっかけ</th>
									<td>
										<div class="select">
											<select name="当スクールを知ったきっかけ">
												<option value="" selected="selected">選択して下さい</option>
												<option value="ネット検索">ネット検索</option>
												<option value="雑誌、チラシ">雑誌、チラシ</option>
												<option value="知人の紹介">知人の紹介</option>
												<option value="SNS">SNS</option>
												<option value="看板を見て">看板を見て</option>
												<option value="教室を通りかかって">教室を通りかかって</option>
												<option value="その他">その他</option>
											</select>
										</div>
									</td>
								</tr>
								<!--〓〓〓〓〓 -->
								<tr>
									<th>ご質問、ご要望などがあればご記入ください</th>
									<td>
										<textarea name="ご質問、ご要望など" rows="30" cols="60"></textarea>
									</td>
								</tr>
							</tbody>
						</table>
					</div>

					<section class="bg-dots mt60 p60 md-p50 sm-p25">
						<h3 class="fz130 sm-fz110 d-ib bb-black pb5">以下の内容に同意してお申し込みください。</h3>
						<ul class="mt40 sm-mt30 li-dots">
							<li>同業種、資格取得者でない方に限ります。</li>
							<li>名前、住所などに偽りなくお申込みください。</li>
							<li>講師に対し当スクール以外でのレッスンを勧誘する事を禁止します。</li>
							<li> 申込み後、キャンセルする場合は必ず事務所までご連絡ください。</li>
						</ul>
					</section>

					<div class="mfp_buttons mt60">
						<button type="submit" class="hov mfp_element_submit mfp_element_all">入力確認画面へ進む</button>
					</div>
				</form>

				<!--!!!【type=〇〇】をフォームごとに変える!!!--><script id="mfpjs" src="<?php echo home_url(); ?>/mfp/mailformpro/mailformpro.cgi?type=application"></script>

			</div>
		</section>

	</div>
</main>

<?php get_footer(); ?>