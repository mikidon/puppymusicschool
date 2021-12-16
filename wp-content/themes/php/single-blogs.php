<?php get_header();?>

<body id="blogs" class="uf">

<?php get_template_part('globalNav'); ?>

<!-- main -->
<main>
	<div id="content">
	
		<!-- #hero -->
		<div class="hero view view-slideup">
			<div class="ptb225 md-ptb120 sm-ptb85" style="background: url('<?php echo home_url(); ?>/img/blog/hero.jpg') no-repeat center / cover ;">				
			</div>		
		</div>

		<!-- #sec1 -->
		<div id="sec1" class="cols jc-c gutter-70 gutter-md-40 gutter-sm-20 mt100 sm-mt60 mb130 md-mb100 sm-mb80 ai-fe pb5">
			<div class="col-12">
				<div class="bgc-white bdrs15 ptb80 plr80 md-ptb60 md-plr60 sm-ptb40 sm-plr25">
					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<article>
						<div class="blog-ttl view view-slideup">
							<div class="date">
								<p class="day"><?php the_time("Y".".m".".d");?></p>
								<?php $terms = get_the_terms($post->ID, 'blogs-cat'); foreach ($terms as $term) { ?>
								<p class="category"><?php echo $term->name; ?></p>
								<?php } ?>
							</div>
							<h1><?php the_title(); ?></h1>
						</div>
						<div class="cms-sentence pt50 sm-pt40 view view-slideup">
							<?php the_content(); ?>
						</div>
					</article>
					
					<div class="bt-black mt60 view view-slideup">
						<!--CMSページネイション-->
						<div class="cols nega pt60 gutter-md-10">
							<?php
								$prevpost = get_adjacent_post(false, '', true);
								$nextpost = get_adjacent_post(false, '', false);
							?>
							<div class="col-3">
								<?php if ( $prevpost ) { ?><a class="d-b ta-c hov bd-black ptb10 plr15" href="<?php echo get_permalink($prevpost->ID) ?>">前<span class="sm-d-n">の記事</span></a><?php } ?>
							</div>
							<div class="col-6">
								<a class="d-b ta-c hov bd-black ptb10 plr15" href="<?php echo home_url(); ?>/blog">一覧へ戻る</a>
							</div>
							<div class="col-3">
								<?php if ( $nextpost ) { ?><a class="d-b ta-c hov bd-black ptb10 plr15" href="<?php echo get_permalink($nextpost->ID) ?>">次<span class="sm-d-n">の記事</span></a><?php } ?>
							</div>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
				<?php else :?>
				<?php endif; ?>
			</div>
		</div>

	</div>
</main>

<?php get_footer(); ?>