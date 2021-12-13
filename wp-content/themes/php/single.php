<?php get_header();?>

<body id="news" class="uf">

<?php get_template_part('globalNav'); ?>

<!-- main -->
<main>
	<section id="content">
	
		<!-- #hero -->
		<div class="hero view view-slideup">
			<div class="ptb225 md-ptb120 sm-ptb85" style="background: url('<?php echo home_url(); ?>/img/new/hero.jpg') no-repeat center / cover ;">				
			</div>		
		</div>

		<!-- #sec1 -->
		<div id="sec1" class="cols jc-c gutter-70 gutter-md-40 mt100 sm-mt60 ptb70 sm-ptb50 mb130 md-mb100 sm-mb80 ai-fe pb5 bg-dots">
			<div class="col-10 col-md-11 col-sm-12">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<article>
					<div class="new-ttl view view-slideup">
						<p class="day"><?php the_time("Y".".m".".d");?></p>
						<h1><?php the_title(); ?></h1>
					</div>
					<div class="cms-sentence pt50 sm-pt40 view view-slideup">
						<?php the_content(); ?>
					</div>
				</article>
				
				<!--CMSページネイション-->
				<div class="bt-black mt60 view view-slideup">
					<div class="cols nega pt60 gutter-md-10">
						<?php
							$prevpost = get_adjacent_post(false, '', true);
							$nextpost = get_adjacent_post(false, '', false);
						?>
						<div class="col-3">
							<?php if ( $prevpost ) { ?><a class="d-b ta-c hov bd-black ptb10 plr15" href="<?php echo get_permalink($prevpost->ID) ?>">前<span class="sm-d-n">の記事</span></a><?php } ?>
						</div>
						<div class="col-6">
							<a class="d-b ta-c hov bd-black ptb10 plr15" href="<?php echo home_url(); ?>/new">一覧へ戻る</a>
						</div>
						<div class="col-3">
							<?php if ( $nextpost ) { ?><a class="d-b ta-c hov bd-black ptb10 plr15" href="<?php echo get_permalink($nextpost->ID) ?>">次<span class="sm-d-n">の記事</span></a><?php } ?>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
				<?php else :?>
				<?php endif; ?>
			</div>
		</div>

	</section>
</main>

<?php get_footer(); ?>