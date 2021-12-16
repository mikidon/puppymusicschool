<?php get_header();?>

<body id="top">

  <?php get_template_part('globalNav'); ?>

  <!-- main -->
  <main>
    <div id="content">

      <!-- #hero -->
      <div id="hero" class="view view-slideup">
        <!-- .bg-slide -->
        <ul class="bg-slide">
          <li style="background-image: url(<?php echo home_url(); ?>/img/top/hero1.jpg); background-position: center center;"></li>
          <li style="background-image: url(<?php echo home_url(); ?>/img/top/hero3.jpg); background-position: center center;"></li>
          <li style="background-image: url(<?php echo home_url(); ?>/img/top/hero2.jpg); background-position: center center;"></li>
          <li style="background-image: url(<?php echo home_url(); ?>/img/top/hero4.jpg); background-position: center center;"></li>
          <li style="background-image: url(<?php echo home_url(); ?>/img/top/hero5.jpg); background-position: center center;"></li>
          <li style="background-image: url(<?php echo home_url(); ?>/img/top/hero6.jpg); background-position: center center;"></li>
        </ul>
      </div>

      <!-- #sec1 -->
      <section id="sec1" class="cols-filld-full jc-c ai-c mt85 sm-mt50">
        <div class="col-7 col-md-8 col-sm-10">
          <div class="d-f ai-c jc-c">
            <div>
              <div class="view view-slideup">
                <img loading="lazy" src="<?php echo home_url(); ?>/img/top/sec1-txt1.png" width="434" height="109" class="img-rspsv sm-d-n view view-unique1" alt="初めての方へ">
                <img loading="lazy" src="<?php echo home_url(); ?>/img/top/sec1-txt1.png" width="282" height="71" class="img-rspsv d-n sm-d-b view view-unique1" alt="初めての方へ">
              </div>
              <h2 class="fz120 view view-slideup">初めての方へ</h2>
              <p class="mt40 sm-mt30 view view-slideup">パピーミュージックスクールはポピュラー、クラシックの音楽教室。<br class="md-d-n">
                子供から大人まで幅広い方にご利用いただけます。<br class="md-d-n">
                愛知県内に7教室を構え、開校して15年で約2000人の生徒さんを持つ<br class="md-d-n">
                県内でも有数の音楽教室へと成長致しました。</p>
              <p class="mt20 view view-slideup">憧れが趣味になる。今こそ、あなたも始めてみませんか？<br class="md-d-n">
                迷ったらまずは無料体験レッスンにお越しください。</p>
              <div class="d-ib sm-d-b mt60 sm-mt40">
                <a href="<?php echo home_url(); ?>/trial" class="sm-d-b ta-c fw-b hov c-blue bd-blue bdrs-max ptb15 sm-ptb10 plr40 view view-slideup">無料体験レッスン受付中！</a>
                <a href="<?php echo home_url(); ?>/about" class="sm-d-b ta-c fw-b hov c-pink bd-pink bdrs-max ptb15 sm-ptb10 plr40 sm-mt15 ml20 sm-ml0 view view-slideup">パピーの特徴</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-5 col-md-8 col-sm-10 md-mt60 sm-mt30">
          <figure class="view view-slideup"><img loading="lazy" src="<?php echo home_url(); ?>/img/top/sec1-img1.png" width="582" height="417" class="img-rspsv-full" alt="Welcome puppy!"></figure>
        </div>
      </section>

      <!-- #sec2 -->
      <section id="sec2" class="bgc-lightblue mt250 sm-mt150 pb100 sm-pb70">
        <div class="cols-filld-full">
          <div class="col-9">
            <div class="d-f">
              <figure class="mr20 md-mr10 mt20 view view-slideup"><img loading="lazy" src="<?php echo home_url(); ?>/img/top/sec2-img1.jpg" width="261" height="230" class="img-rspsv view view-bounce" alt="コース案内"></figure>
              <figure class="mr20 md-mr10 view view-slideup"><img loading="lazy" src="<?php echo home_url(); ?>/img/top/sec2-img2.jpg" width="350" height="200" class="img-rspsv view view-bounce" alt="コース案内"></figure>
              <figure class="mt40 view view-slideup"><img loading="lazy" src="<?php echo home_url(); ?>/img/top/sec2-img3.jpg" width="390" height="230" class="img-rspsv view view-bounce" alt="コース案内"></figure>
            </div>
          </div>
        </div>
        <div class="cols">
          <div class="col-12 mt-190 md-mt-150 sm-mt-100">
            <div class="ta-r">
              <p class="txt-tate ff-en fz500 view view-slideup">Course</p>
              <h2 class="fz120 view view-slideup">コース案内</h2>
            </div>
            <!-- バンド系コース -->
            <section class="mt40 sm-mt10 cols nega gutter-20 gutter-sm-10">
              <div class="col-12">
                <h3 class="ribbon-green view view-slideup">バンド系コース</h3>
              </div>
              <div class="col-3 col-md-4 col-sm-6 mt20 sm-mt20">
                <a href="<?php echo home_url(); ?>/vocal" class="hov view view-slideup course1"><span>vocal</span>ボーカル</a>
              </div>
              <div class="col-3 col-md-4 col-sm-6 mt20 sm-mt20">
                <a href="<?php echo home_url(); ?>/guitar" class="hov view view-slideup course2"><span>guitar</span>ギター</a>
              </div>
              <div class="col-3 col-md-4 col-sm-6 mt20 sm-mt10">
                <a href="<?php echo home_url(); ?>/bass" class="hov view view-slideup course3"><span>bass</span>ベース</a>
              </div>
              <div class="col-3 col-md-4 col-sm-6 mt20 sm-mt10">
                <a href="<?php echo home_url(); ?>/drums" class="hov view view-slideup course4"><span>drums</span>ドラム</a>
              </div>
              <div class="col-3 col-md-4 col-sm-6 mt20 sm-mt10">
                <a href="<?php echo home_url(); ?>/keyboard" class="hov view view-slideup course5"><span>keyboard</span>キーボード</a>
              </div>
              <div class="col-3 col-md-4 col-sm-6 mt20 sm-mt10">
                <a href="<?php echo home_url(); ?>/dtm" class="hov view view-slideup course6"><span>DTM</span>デスクトップミュージック</a>
              </div>
            </section>
            <!-- クラシック系・弦楽器コース -->
            <section class="mt60 sm-mt40 cols nega gutter-20 gutter-sm-10">
              <div class="col-12">
                <h3 class="ribbon-blue" view view-slideup>クラシック系・弦楽器コース</h3>
              </div>
              <div class="col-3 col-md-4 col-sm-6 mt20 sm-mt20">
                <a href="<?php echo home_url(); ?>/piano" class="hov view view-slideup course7"><span>piano</span>ピアノ</a>
              </div>
              <div class="col-3 col-md-4 col-sm-6 mt20 sm-mt20">
                <a href="<?php echo home_url(); ?>/violin" class="hov view view-slideup course8"><span>violin / viola</span>バイオリン・ビオラ</a>
              </div>
              <div class="col-3 col-md-4 col-sm-6 mt20 sm-mt10">
                <a href="<?php echo home_url(); ?>/cello" class="hov view view-slideup course9"><span>cello</span>チェロ</a>
              </div>
              <div class="col-3 col-md-4 col-sm-6 mt20 sm-mt10">
                <a href="<?php echo home_url(); ?>/ukulele" class="hov view view-slideup course10"><span>ukulele</span>ウクレレ</a>
              </div>
              <div class="col-3 col-md-4 col-sm-6 mt20 sm-mt10">
                <a href="<?php echo home_url(); ?>/singing" class="hov view view-slideup course11"><span>singing</span>声楽</a>
              </div>
            </section>
            <!-- 管楽器・打楽器系コース -->
            <section class="mt60 sm-mt40 cols nega gutter-20 gutter-sm-10">
              <div class="col-12">
                <h3 class="ribbon-green view view-slideup">管楽器・打楽器系コース</h3>
              </div>
              <div class="col-3 col-md-4 col-sm-6 mt20 sm-mt20">
                <a href="<?php echo home_url(); ?>/flute" class="hov view view-slideup course12"><span>flute</span>フルート</a>
              </div>
              <div class="col-3 col-md-4 col-sm-6 mt20 sm-mt20">
                <a href="<?php echo home_url(); ?>/saxophone" class="hov view view-slideup course13"><span>saxophone</span>サックス</a>
              </div>
              <div class="col-3 col-md-4 col-sm-6 mt20 sm-mt10">
                <a href="<?php echo home_url(); ?>/trumpet" class="hov view view-slideup course14"><span>trumpet / trombone</span>トランペット・トロンボーン</a>
              </div>
              <div class="col-3 col-md-4 col-sm-6 mt20 sm-mt10">
                <a href="<?php echo home_url(); ?>/clarinet" class="hov view view-slideup course15"><span>clarinet</span>クラリネット</a>
              </div>
            </section>
            <!-- その他のコース -->
            <section class="mt60 sm-mt40 cols nega gutter-20 gutter-sm-10">
              <div class="col-12">
                <h3 class="ribbon-blue" view view-slideup>その他のコース</h3>
              </div>
              <div class="col-3 col-md-4 col-sm-6 mt20 sm-mt20">
                <a href="<?php echo home_url(); ?>/lyrics" class="hov view view-slideup course16"><span>lyrics / composition</span>作詞・作曲 / 音楽理論</a>
              </div>
            </section>
            <!-- 楽器プレゼントキャンペーン -->
            <div class="mt80 sm-mt50 bgc-white bd-blue ptb60 plr60 md-ptb50 md-plr15 sm-p30 bdrs15 fuchi-upper view view-slideup">
              <div class="cols gutter-50 gutter-md-30 ai-c jc-c">
                <div class="col-5 col-md-6 col-sm-11">
                  <figure><img loading="lazy" src="<?php echo home_url(); ?>/img/top/sec2-img4.png" width="336" height="239" class="img-rspsv" alt="プレゼントキャンペーン"></figure>
                </div>
                <div class="col-7 col-md-6 col-sm-12 sm-mt30">
                  <p>自分は本当に楽器ができるのか、どんな楽器がいいのか…新しいことを始めるのに、不安はつきものですよね。</p>
                  <p class="mt15">パピーでは体験レッスン時に無料で楽器をお貸し出し。入会されたら楽器プレゼントor入会金割引どちらか選べます。楽器メーカーではないパピーだからこそできる、忖度のない安心のサービスです。</p>
                  <div class="mt30">
                    <a href="<?php echo home_url(); ?>/present" class="sm-d-b ta-c fw-b hov c-blue bd-blue bdrs-max ptb15 sm-ptb10 plr40">詳細はこちらから</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- #sec3 -->
      <section id="sec3" class="mt100 sm-mt70">
        <div class="pb70 cols-wide bg-dots ta-c">
          <div class="mt-40 sm-mt-30 d-ib">
            <h2 class="ff-en fz300 sm-fz270 view view-slideup">Lesson Studio</h2>
            <p class="fz120 view view-slideup">教室案内</p>
          </div>
          <div class="cols gutter-sm-20 ta-l">
            <section class="col-4 col-md-6 mt40 view view-slideup">
              <a href="<?php echo home_url(); ?>/nagoya-meito" class="ptb20 sm-ptb15 plr10 bb-black bt-black d-b btn-ar">
                <h3>名古屋名東教室</h3>
              </a>
              <p class="mt30 sm-fz90">〒465-0068<br>名古屋市名東区牧の里1-111</p>
            </section>
            <section class="col-4 col-md-6 mt40 view view-slideup">
              <a href="<?php echo home_url(); ?>/nagoya-minato" class="ptb20 sm-ptb15 plr10 bb-black bt-black d-b btn-ar">
                <h3>名古屋みなと教室</h3>
              </a>
              <p class="mt30 sm-fz90">〒455-0804<br>名古屋市港区当知2丁目1501番地</p>
            </section>
            <section class="col-4 col-md-6 mt40 view view-slideup">
              <a href="<?php echo home_url(); ?>/okazaki-onishi" class="ptb20 sm-ptb15 plr10 bb-black bt-black d-b btn-ar">
                <h3>岡崎大西教室</h3>
              </a>
              <p class="mt30 sm-fz90">〒444-0871<br>岡崎市大西3丁目2-5</p>
            </section>
            <section class="col-4 col-md-6 mt40 view view-slideup">
              <a href="<?php echo home_url(); ?>/okazaki-yahagi" class="ptb20 sm-ptb15 plr10 bb-black bt-black d-b btn-ar">
                <h3>岡崎矢作教室</h3>
              </a>
              <p class="mt30 sm-fz90">〒444-0943<br>岡崎市矢作町西林寺87-1</p>
            </section>
            <section class="col-4 col-md-6 mt40 view view-slideup">
              <a href="<?php echo home_url(); ?>/kariya" class="ptb20 sm-ptb15 plr10 bb-black bt-black d-b btn-ar">
                <h3>刈谷アピタ教室</h3>
              </a>
              <p class="mt30 sm-fz90">〒448-0841<br>刈谷市南桜町2-56-1</p>
            </section>
            <section class="col-4 col-md-6 mt40 view view-slideup">
              <a href="<?php echo home_url(); ?>/anjyo" class="ptb20 sm-ptb15 plr10 bb-black bt-black d-b btn-ar">
                <h3>安城今池教室</h3>
              </a>
              <p class="mt30 sm-fz90">〒446-0071 <br>安城市今池町1丁目13番地1 3F</p>
            </section>
            <section class="col-4 col-md-6 mt40 view view-slideup">
              <a href="<?php echo home_url(); ?>/gamagori" class="ptb20 sm-ptb15 plr10 bb-black bt-black d-b btn-ar">
                <h3>蒲郡教室</h3>
              </a>
              <p class="mt30 sm-fz90">〒443-0046<br>蒲郡市竹谷町</p>
            </section>
          </div>
        </div>
      </section>

      <!-- #sec4 -->
      <div id="sec4" class="bgc-lightgreen mt290 sm-mt150 pb100">
        <div class="cols gutter-sm-20 jc-c img-tote view view-unique3">
          <section class="col-4 col-md-6 mt30 menu view view-slideup">
            <a href="<?php echo home_url(); ?>/price" class="d-b hov">
              <figure><img loading="lazy" src="<?php echo home_url(); ?>/img/top/sec4-img1.jpg" width="302" height="220" class="img-rspsv-full" alt="レッスン料金"></figure>
              <div class="menu-txt bgc-white ta-c ptb15 sm-ptb10 mlr20 sm-mlr5 mt-30 z2">
                <span class="ff-en fz150 sm-fz110 lh140">PRICE</span>
                <h2 class="sm-fz90">レッスン料金</h2>
              </div>
            </a>
          </section>
          <section class="col-4 col-md-6 mt30 menu view view-slideup">
            <a href="<?php echo home_url(); ?>/teacher" class="d-b hov">
              <figure><img loading="lazy" src="<?php echo home_url(); ?>/img/top/sec4-img2.jpg" width="302" height="220" class="img-rspsv-full" alt="講師紹介"></figure>
              <div class="menu-txt bgc-white ta-c ptb15 sm-ptb10 mlr20 sm-mlr5 mt-30 z2">
                <span class="ff-en fz150 sm-fz110 lh140">TEACHER</span>
                <h2 class="sm-fz90">講師紹介</h2>
              </div>
            </a>
          </section>
          <section class="col-4 col-md-6 mt30 menu view view-slideup">
            <a href="<?php echo home_url(); ?>/trial" class="d-b hov">
              <figure><img loading="lazy" src="<?php echo home_url(); ?>/img/top/sec4-img3.jpg" width="302" height="220" class="img-rspsv-full" alt="無料体験レッスン"></figure>
              <div class="menu-txt bgc-white ta-c ptb15 sm-ptb10 mlr20 sm-mlr5 mt-30 z2">
                <span class="ff-en fz150 sm-fz110 lh140">TRIAL</span>
                <h2 class="sm-fz90">無料体験レッスン</h2>
              </div>
            </a>
          </section>
          <section class="col-4 col-md-6 mt30 menu view view-slideup">
            <a href="<?php echo home_url(); ?>/event" class="d-b hov">
              <figure><img loading="lazy" src="<?php echo home_url(); ?>/img/top/sec4-img4.jpg" width="302" height="220" class="img-rspsv-full" alt="イベント"></figure>
              <div class="menu-txt bgc-white ta-c ptb15 sm-ptb10 mlr20 sm-mlr5 mt-30 z2">
                <span class="ff-en fz150 sm-fz110 lh140">EVENT</span>
                <h2 class="sm-fz90">イベント</h2>
              </div>
            </a>
          </section>
          <section class="col-4 col-md-6 mt30 menu view view-slideup">
            <a href="<?php echo home_url(); ?>/campaign" class="d-b hov">
              <figure><img loading="lazy" src="<?php echo home_url(); ?>/img/top/sec4-img5.jpg" width="302" height="220" class="img-rspsv-full" alt="キャンペーン"></figure>
              <div class="menu-txt bgc-white ta-c ptb15 sm-ptb10 mlr20 sm-mlr5 mt-30 z2">
                <span class="ff-en fz150 sm-fz110 lh140">CAMPAIGN</span>
                <h2 class="sm-fz90">キャンペーン</h2>
              </div>
            </a>
          </section>
          <section class="col-4 col-md-6 mt30 menu view view-slideup">
            <a href="<?php echo home_url(); ?>/present" class="d-b hov">
              <figure><img loading="lazy" src="<?php echo home_url(); ?>/img/top/sec4-img6.jpg" width="302" height="220" class="img-rspsv-full" alt="楽器プレゼント"></figure>
              <div class="menu-txt bgc-white ta-c ptb15 sm-ptb10 mlr20 sm-mlr5 mt-30 z2">
                <span class="ff-en fz150 sm-fz110 lh140">PRESENT</span>
                <h2 class="sm-fz90">楽器プレゼント</h2>
              </div>
            </a>
          </section>
          <div class="col-4 col-md-5 col-sm-10 mt70 sm-mt50 view view-slideup">
            <a href="<?php echo home_url(); ?>/company" class="d-b ta-c hov bgc-white bdrs-max ptb15 sm-ptb10 plr40">会社案内</a>
          </div>
          <div class="col-4 col-md-5 col-sm-10 mt70 sm-mt15 view view-slideup">
            <a href="<?php echo home_url(); ?>/recruit" class="d-b ta-c hov bgc-white bdrs-max ptb15 sm-ptb10 plr40">採用情報</a>
          </div>
        </div>
      </div>

      <!-- #sec5 -->
      <div id="sec5" class="mt120 sm-mt80 cols jc-c pb130 md-pb100 sm-pb80">
        <section class="col-12 col-sm-11">
          <div class="bb-black pb70 sm-pb50">
            <div class="d-f jc-sb ai-fe">
              <div class="d-f ai-fe">
                <p class="ff-en fz270 lh100 view view-slideup">News</p>
                <h2 class="pl30 sm-pl20 fz120 sm-fz100 view view-slideup">お知らせ</h2>
              </div>
              <a href="<?php echo home_url(); ?>/new" class="btn-simple ff-sofia">all view</a>
            </div>
            <div class="mt40 sm-mt20">
              <?php $args = array(
							'post_type'=>'post',
							'posts_per_page' => 3,
						); ?>
              <?php $loop = new WP_Query( $args ); ?>
              <?php if($loop -> have_posts()): while($loop -> have_posts()): $loop->the_post();?>
              <article class="new view view-slideup">
                <a class="hov d-b" href="<?php the_permalink(); ?>">
                  <p class="day"><?php the_time("Y".".m".".d");?></p>
                  <h3><?php the_title(); ?></h3>
                </a>
              </article>
              <?php endwhile;?>
              <?php else :?>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>
            </div>
          </div>
        </section>
        <section class="col-12 col-sm-11 mt80 sm-mt60">
          <div class="d-f jc-sb ai-fe">
            <div class="d-f ai-fe">
              <p class="ff-en fz270 lh100 view view-slideup">Blog</p>
              <h2 class="pl30 sm-pl20 fz120 sm-fz100 view view-slideup">スタッフブログ</h2>
            </div>
            <a href="<?php echo home_url(); ?>/blog" class="btn-simple ff-sofia">all view</a>
          </div>
          <div class="cols nega gutter-sm-15 sm-mt20">
            <?php $args = array(
						'post_type'=>'blogs',
						'posts_per_page' => 3
					); ?>
            <?php $loop = new WP_Query( $args ); ?>
            <?php if($loop -> have_posts()): while($loop -> have_posts()): $loop->the_post();?>
            <article class="blog mt50 md-mt30 col-4 col-sm-6">
              <a class="d-b view view-slideup" href="<?php the_permalink(); ?>">
                <figure>
                  <?php $imgset = wp_get_attachment_image_src(get_post_thumbnail_id(), 'size300200' ); ?>
                  <?php if($imgset){ ?>
                  <img loading="lazy" src="<?php echo $imgset[0]; ?>" width="300" class="img-rspsv-full" alt="写真">
                  <?php }else{ ?>
                  <img loading="lazy" src="<?php echo home_url(); ?>/img/base/noimage.png" width="300" class="img-rspsv-full" alt="写真">
                  <?php } ?>
                </figure>
                <div class="txt">
                  <div class="d-f">
                    <p class="day"><?php the_time("Y".".m".".d");?></p>
                    <?php $terms = get_the_terms($post->ID, 'blogs-cat'); foreach ($terms as $term) { ?>
                    <p class="category"><?php echo $term->name; ?></p>
                    <?php } ?>
                  </div>
                  <h3><?php the_title(); ?></h3>
                </div>
              </a>
            </article>
            <?php endwhile;?>
            <?php else :?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
          </div>
        </section>
      </div>

    </div>
  </main>

  <?php get_footer(); ?>
