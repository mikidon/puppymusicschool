<!doctype html>
<html class="no-js" lang="ja">
<head>
<meta charset="utf-8">
<!-- 古いブラウザーで表示したときにクロームフレームを呼び出す。 -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="format-detection" content="telephone=no">
<title><?php wp_title(); ?></title>
<?php wp_head(); ?>
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
<link rel="stylesheet" href="<?php echo site_url(); ?>/css/style.css">
<!-- Typekit[：P_パピーミュージックスクール] -->
<script>
	(function(d) {
	  var config = {
		kitId: 'rhk1bji',
		scriptTimeout: 3000,
		async: true
	  },
	  h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
	})(document);
  </script>
<!-- Typekit -->
</head>