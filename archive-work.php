<?php get_header( ); ?>

	<section id="work-archive-page">
		
		<div class="container">
			
			<div class="row">
				
				<h1 class="text-center dash">Work</h1>

			</div><!-- .row -->



			<div class="row">
				
				<div class="col-sm-12">

					<?php $workPage = get_post(77);  ?>
					
					<h2 class="text-center hero"><?php echo $workPage->post_content; ?></h2>

				</div><!--.col-sm-12 -->

			</div><!-- .row -->

			<div class="row">
				
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

					<div class="col-sm-4">
						
						<a class="work-box" href="<?php the_permalink(); ?>">

							<?php $post_thumbnail_id = get_post_thumbnail_id(get_the_ID()); ?>
							<?php $alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true); ?>
							<?php $image_attributes = wp_get_attachment_image_src( $post_thumbnail_id, "full" );?>
							
							<img class="img-responsive" src="<?php echo $image_attributes[0]; ?>" alt="<?php echo $alt; ?>">

							<h3><?php the_title( ); ?></h3>

							<p><?php echo wp_strip_all_tags( get_field( 'excerpt' ) ); ?></p>

						</a><!-- .work-box -->

					</div><!-- .col-sm-4 -->

				<?php endwhile; endif; ?>

			</div><!-- .row -->

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
					</div> <!-- .pagination -->
					
				</div><!-- .col-sm-12 -->

			</div><!-- .row -->

		</div><!-- .container -->

	</section><!-- #work-archive-page -->

<?php get_footer( 'small' ); ?>