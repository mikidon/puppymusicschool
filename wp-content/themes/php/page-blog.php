<?php get_header();?>

<body id="blog" class="uf">

<?php get_template_part('globalNav'); ?>

<!-- main -->
<main>
	<section id="content">
	
		<!-- #hero -->
		<div class="hero view view-slideup">
			<div class="ptb225 md-ptb120 sm-ptb85" style="background: url('<?php echo home_url(); ?>/img/blog/hero.jpg') no-repeat center / cover ;">				
			</div>		
		</div>

		<!-- #sec1 -->
		<section id="sec1" class="mt100 md-mt80 sm-mt60">
			<div class="cols gutter-40">
				<div class="col-12 ta-c">
					<div class="mt-40 md-mt-25 sm-mt-15 d-ib view view-slideup">
						<h2 class="ff-mi fz300 md-fz250 sm-fz200 lh160">パピーブログ</h2>
						<p class="ff-en fz130">blog</p>
						<img loading="lazy" src="<?php echo home_url(); ?>/img/base/ic-dot.png" width="20" height="5" class="img-rspsv" alt="dot">
					</div>
				</div>
				<div class="col-12">
					<?php $args = array(
						'post_type'=>'blogs',
						'posts_per_page' => 9,
						'paged' => $paged
					); ?>
					<?php query_posts( $args ); ?>
					<div class="cols nega gutter-sm-15 mt30 sm-mt10">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article class="blog mt50 md-mt30 col-4 col-sm-6 view view-slideup">
							<a class="d-b" href="<?php the_permalink(); ?>">
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
			</div>
		</section>

	</section>
</main>

<?php get_footer(); ?>