<?php get_header();?>

<body id="new" class="uf">

<?php get_template_part('globalNav'); ?>

<!-- main -->
<main>
	<div id="content">
	
		<!-- #hero -->
		<div class="hero view view-slideup">
			<div class="ptb225 md-ptb120 sm-ptb85" style="background: url('<?php echo home_url(); ?>/img/new/hero.jpg') no-repeat center / cover ;">		
			</div>		
		</div>

		<!-- #sec1 -->
		<section id="sec1" class="cols jc-sb gutter-70 gutter-md-40 mt100 md-mt80 sm-mt60">
			<div class="cols gutter-40">
				<div class="col-12 ta-c">
					<div class="mt-40 md-mt-25 sm-mt-15 d-ib view view-slideup">
						<h2 class="ff-mi fz300 md-fz250 sm-fz200 lh160">お知らせ</h2>
						<p class="ff-en fz130">news</p>
						<img loading="lazy" src="<?php echo home_url(); ?>/img/base/ic-dot.png" width="20" height="5" class="img-rspsv" alt="dot">
					</div>
				</div>
				<?php $args = array(
					'post_type'=>'post',
					'posts_per_page' => 6,
					'paged' => $paged
				); ?>
				<?php query_posts( $args ); ?>
				<div class="col-12 view view-slideup mt80 md-mt50 sm-mt40">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="new">
						<a class="hov" href="<?php the_permalink(); ?>">
							<p class="day"><?php the_time("Y".".m".".d");?></p>
							<h3><?php the_title(); ?></h3>
						</a>
					</article>
					<?php endwhile; ?>
					<?php else: ?>
					<?php endif; ?>
				</div>
				<div class="col-12 sm-mt40 pb130 md-pb100 sm-pb80">
					<?php if (function_exists('pagination') && $wp_query->max_num_pages > 1) { ?>
					<!--CMSページネイション-->
					<div class="mt100 md-mt70 sm-mt50 view view-slideup">
						<?php pagination($additional_loop->max_num_pages); ?>
					</div>
					<?php } ?>
				</div>
				<?php wp_reset_query(); ?>
			</div>
		</section>

	</div>
</main>

<?php get_footer(); ?>