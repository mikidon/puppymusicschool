// Common
$(window).on('load',function(){
	//#バーガーアイコンメニュー
	$("#burger-trg").click(function(){
		$(this).toggleClass("act");
		$("#global-nav").fadeToggle(200);
	});
	//グローバルメニューのドロップダウン
	$("#global-nav .dd-tgl").hover(function(){
		$(this).addClass("act");
		},function(){
		$(this).removeClass("act");
	});
	//高さを揃える
	$('.hg-box').matchHeight();
	//スムーススクロール
	$(window).scroller({
		pc: 155,//PC追従ヘッダーの高さ
		tb: 60,//タブレッド追従ヘッダーの高さ
		sp: 60//スマホ追従ヘッダーの高さ
	});
	// 読み込み時に画面内に入っていたら要素の順番にアニメーション表示
	var Position = $(window).height() + $(window).scrollTop();//ウィンドウの高さ + スクロール量 を取得
		$('.view,.il-view,.marker').each(function(i) {
		if(Position > $(this).offset().top) {
			$(this).delay(60*i).queue(function() {
				$(this).addClass("on");
			});
		}
	});
	//ヘッダー
	var startPos = 0;
	$(window).on("scroll", function(e){
		var distanceY = $(this).scrollTop();
		//スクロールで表示されるヘッダー
		if(distanceY > 140){
			$("#hd-main").addClass("scrolled");
		} else {
			$("#hd-main").removeClass("scrolled");
		}
		scrollPosition = $(window).height() + $(window).scrollTop();//ウィンドウの高さ + スクロール量 を取得
		$('.view,.il-view,.marker').each(function() {
		if(scrollPosition - 100 > $(this).offset().top) {
			$(this).addClass("on");
		}
		});
	});
});

// Use [top]
if($('body#top').length){
	$(".bg-slide").bxSlider({
		mode:'fade',
		speed: 800,
		pause:  5000,
		auto: true,
		pager: true,
		controls: false,
		easing: 'swing',
		pagerCustom: '.bx-pager'
	});
}