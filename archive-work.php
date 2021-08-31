<?php get_header( ); ?>

	<section id="work-archive-page">	
		<div class="container">
			<div class="row">
				<h1 class="text-center dash">Work</h1>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<?php $workPage = get_post(77);  ?>
					<h2 class="text-center hero"><?php echo $workPage->post_content; ?></h2>
				</div>
			</div>

			<div class="row">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'inc/work-box' ); ?>
				<?php endwhile; endif; ?>
			</div>

			<div class="row">
				<div class="col-sm-12 text-center">
					<div class="pagination">
						<?php
						global $wp_query;
						$big = 999999999; // need an unlikely integer
						echo paginate_links( array(
							'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format' => '?paged=%#%',
							'current' => max( 1, get_query_var('paged') ),
							'end_size' => '5',
							'total' => $wp_query->max_num_pages
						) );
						?>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer( 'small' ); ?>