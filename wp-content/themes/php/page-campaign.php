<?php get_header();?>

<body id="campaign" class="uf">

  <?php get_template_part('globalNav'); ?>

  <!-- main -->
  <main>
    <div id="content">

      <!-- #hero -->
      <div class="hero view view-slideup">
        <div class="ptb225 md-ptb120 sm-ptb85" style="background: url('<?php echo home_url(); ?>/img/campaign/hero.jpg') no-repeat center / cover ;">
        </div>
      </div>

      <!-- #sec1 -->
      <section id="sec1" class="cols gutter-40 mt100 sm-mt60 pb130 md-pb100 sm-pb80">
        <div class="col-12 ta-c view view-slideup mb20">
          <div class="mt-40 md-mt-25 sm-mt-15 d-ib view view-slideup">
            <h2 class="ff-mi fz300 md-fz250 sm-fz200 lh160">キャンペーン</h2>
            <p class="ff-en fz130">campaign</p>
            <img loading="lazy" src="<?php echo home_url(); ?>/img/base/ic-dot.png" width="20" height="5" class="img-rspsv" alt="dot">
          </div>
        </div>
        <div class="col-12 mt50 sm-mt30 view view-slideup">
          <div class="bgc-white ptb60 plr60 md-ptb40 md-plr40 sm-ptb40 sm-plr30 bdrs15">
            <div class="cols jc-c ai-c nega gutter-40 gutter-sm-30">
              <div class="col-6 col-md-7 col-sm-12">
                <img loading="lazy" src="<?php echo home_url(); ?>/img/campaign/sec1-txt.png" width="374" height="45" class="img-rspsv" alt="入会金60％offキャンペーン">
                <p class="mt20">体験レッスン当日にご入会いただきますと、入会金17800円→7000円に割引されます！この機会に是非無料体験レッスンにお申込みください。</p>
                <p class="mt10 fz90">※楽器プレゼントを選択された場合、当キャンペーンはご利用いただけません。</p>
                <p class="mt10">キャンペーン期限：<?php the_field('limit'); ?></p>
              </div>
              <div class="col-6 col-md-5 col-sm-10 ta-c sm-mt30">
                <figure class="view view-bounce"><img loading="lazy" src="<?php echo home_url(); ?>/img/campaign/sec1-img1.png" width="342" height="334" class="img-rspsv" alt="入会金60％offキャンペーン"></figure>
              </div>
            </div>
            <div class="cols jc-c nega gutter-30">
              <section class="col-6 col-sm-12 mt50">
                <h3 class="c-white bgc-blue d-ib bdrs5 ptb5 plr20">いろんなコースを体験してみたい</h3>
                <p class="mt25">自分に合った先生・楽器を探したいからいくつか体験を受けたい、そんな方は2コース目から2000円にて体験を受けることができます。</p>
              </section>
              <section class="col-6 col-sm-12 mt50 sm-mt30">
                <h3 class="c-white bgc-blue d-ib bdrs5 ptb5 plr20">長期の楽器レンタルができます！</h3>
                <p class="mt25">「楽器をまだ用意できない」「いつまで続くか分からない」そんな方には3000円/月で楽器のレンタルができます。</p>
                <p class="mt15 fz90">※ドラムや電子ピアノなど大型の楽器はレンタル対象外です</p>
              </section>
              <div class="col-8 col-sm-12 mt50 sm-mt30">
                <a href="<?php echo home_url(); ?>/application" class="d-b ta-c fw-b hov c-blue bd-blue bdrs-max ptb10 plr40 sm-plr20">無料体験レッスンのお申込みはこちら</a>
              </div>
            </div>
          </div>
        </div>
        <section class="col-6 col-sm-12 mt50 view view-slideup">
          <div class="bgc-white p40 md-p30 bdrs15 h-eq">
            <figure class="view view-bounce"><img loading="lazy" src="<?php echo home_url(); ?>/img/campaign/sec1-img2.jpg" width="390" height="230" class="img-rspsv" alt="口コミ投稿キャンペーン"></figure>
            <h3 class="mt30 fz130 sm-fz120 d-ib bb-black pb5"> 口コミ投稿キャンペーン</h3>
            <p class="mt30">Googleのクチコミ、Instagramのいずれかに投稿し、投稿画面を見せて頂いた方に、1,000円をその場でキャッシュバックいたします。</p>
            <p class="mt10 fz90">※入会当日か初回レッスン日に限ります。</p>
          </div>
        </section>
        <section class="col-6 col-sm-12 mt50 sm-mt30 view view-slideup">
          <div class="bgc-white p40 md-p30 bdrs15 h-eq">
            <figure class="view view-bounce"><img loading="lazy" src="<?php echo home_url(); ?>/img/campaign/sec1-img3.jpg" width="390" height="230" class="img-rspsv" alt="お友達紹介キャンペーン"></figure>
            <h3 class="mt30 fz130 sm-fz120 d-ib bb-black pb5">お友達紹介キャンペーン</h3>
            <p class="mt30">パピーの生徒さんがお友達をご紹介いただきご入会すると、紹介者・お友達それぞれに1000円キャッシュバックいたします！</p>
          </div>
        </section>
        <div class="col-12 view-slideup">
          <!-- 楽器プレゼントキャンペーン -->
          <div class="mt80 sm-mt50 bgc-white bd-blue ptb60 plr60 md-ptb50 md-plr15 sm-p30 bdrs15 fuchi-upper">
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

      </section>

    </div>
  </main>

  <?php get_footer(); ?>
