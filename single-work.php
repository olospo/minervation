<?php get_header( ); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php $client = get_field( 'client' ); ?>

	<section id="single-work-body">
		
		<div class="container">
			
			<div class="row">
				
			
					
					<h1 class="text-center dash"><?php the_title( ); ?></h1>

		
				
			</div><!-- .row -->

			<div class="row hero">
				
				<div class="col-sm-12">
					
					<h2 class="text-center"><?php the_content( ); ?></h2>

				</div><!-- .col-sm-12 -->

			</div><!-- .row -->

			<?php if ( get_field( 'top_image_template' ) == "Full Width" ) : ?>

				<?php if ( have_rows( 'top_full_width_repeater' ) ) : while( have_rows( 'top_full_width_repeater' ) ) : the_row(); ?>

				<div class="row full-width-image">
					
					<div class="col-sm-12">

						<?php // check to see if it has video or image ?>
						<?php if ( get_sub_field( 'has_video' ) == true ) : ?>

						<div class="image-wrapper">

							<div class="video-container">
								
								<?php echo get_sub_field( 'video_link' ); ?>

							</div><!-- .video-container -->

							<?php echo get_sub_field( 'caption' ); ?>

						</div><!-- .image-wrapper -->

						<?php else : ?>

						<div class="image-wrapper">
							
							<img class="img-responsive center-block" src="<?php echo get_sub_field( 'image' ); ?>" alt="<?php echo get_sub_field( 'caption' ); ?>">

							<?php echo get_sub_field( 'caption' ); ?>

						</div><!-- .image-wrapper -->

						<?php endif; ?>

					</div><!-- .col-sm-12 -->

				</div><!-- .row -->

				<?php endwhile; endif; ?>

			<?php elseif ( get_field( 'top_image_template' ) == "Half Width" ) : ?>

				<div class="row half-width-image">

				<?php if ( have_rows( 'top_half_width_repeater' ) ) : while( have_rows( 'top_half_width_repeater' ) ) : the_row(); ?>
					
					<div class="col-sm-6">
						
						<?php // check to see if it has video or image ?>
						<?php if ( get_sub_field( 'has_video' ) == true ) : ?>

						<div class="image-wrapper">

							<div class="video-container">
								
								<?php echo get_sub_field( 'video_link' ); ?>

							</div><!-- .video-container -->

							<?php echo get_sub_field( 'caption' ); ?>

						</div><!-- .image-wrapper -->

						<?php else : ?>

						<div class="image-wrapper">
							
							<img class="img-responsive center-block" src="<?php echo get_sub_field( 'image' ); ?>" alt="<?php echo get_sub_field( 'caption' ); ?>">

							<?php echo get_sub_field( 'caption' ); ?>

						</div><!-- .image-wrapper -->

						<?php endif; ?>

					</div><!-- .col-sm-6 -->

				<?php endwhile; endif; ?>

				</div><!-- .row -->

			<?php endif; ?>

			<!-- Challenge Section -->

			<?php if ( get_field( 'challenge_text' ) ) : ?>

			<div class="row challenge-text">
				
				<div class="col-sm-12">
					
					<h2>The Challenge</h2>

					<?php echo get_field( 'challenge_text' ); ?>

				</div><!-- .col-sm-12 -->

			</div><!-- .row -->

			<?php endif; ?>

			<!-- Bottom Images Section -->

			<?php if ( get_field( 'bottom_image_template' ) == "Full Width" ) : ?>

				<?php if ( have_rows( 'bottom_full_width_repeater' ) ) : while( have_rows( 'bottom_full_width_repeater' ) ) : the_row(); ?>

				<div class="row full-width-image">
					
					<div class="col-sm-12">
						
						<?php // check to see if it has video or image ?>
						<?php if ( get_sub_field( 'has_video' ) == true ) : ?>

						<div class="image-wrapper">

							<div class="video-container">
								
								<?php echo get_sub_field( 'video_link' ); ?>

							</div><!-- .video-container -->

							<?php echo get_sub_field( 'caption' ); ?>

						</div><!-- .image-wrapper -->

						<?php else : ?>

						<div class="image-wrapper">
							
							<img class="img-responsive center-block" src="<?php echo get_sub_field( 'image' ); ?>" alt="<?php echo get_sub_field( 'caption' ); ?>">

							<?php echo get_sub_field( 'caption' ); ?>

						</div><!-- .image-wrapper -->

						<?php endif; ?>

					</div><!-- .col-sm-12 -->

				</div><!-- .row -->

				<?php endwhile; endif; ?>

			<?php elseif ( get_field( 'bottom_image_template' ) == "Half Width" ) : ?>

				<div class="row half-width-image">

				<?php if ( have_rows( 'bottom_half_width_repeater' ) ) : while( have_rows( 'bottom_half_width_repeater' ) ) : the_row(); ?>
					
					<div class="col-sm-6">
						
						<?php // check to see if it has video or image ?>
						<?php if ( get_sub_field( 'has_video' ) == true ) : ?>

						<div class="image-wrapper">

							<div class="video-container">
								
								<?php echo get_sub_field( 'video_link' ); ?>

							</div><!-- .video-container -->

							<?php echo get_sub_field( 'caption' ); ?>

						</div><!-- .image-wrapper -->

						<?php else : ?>

						<div class="image-wrapper">
							
							<img class="img-responsive center-block" src="<?php echo get_sub_field( 'image' ); ?>" alt="<?php echo get_sub_field( 'caption' ); ?>">

							<?php echo get_sub_field( 'caption' ); ?>

						</div><!-- .image-wrapper -->

						<?php endif; ?>

					</div><!-- .col-sm-6 -->

				<?php endwhile; endif; ?>

				</div><!-- .row -->

			<?php endif; ?>

			<!-- Solution Section -->

			<?php if ( get_field( 'challenge_text' ) ) : ?>

			<div class="row solution-text">
				
				<div class="col-sm-12">
					
					<h2>The Solution</h2>

					<?php echo get_field( 'solution_text' ); ?>

				</div><!-- .col-sm-12 -->

			</div><!-- .row -->

			<?php endif; ?>

			<?php if ( get_field( 'link_text' ) ) : ?>

			<div class="row link">
				
				<div class="col-sm-12 text-center">
					
					<a class="link-text" href="<?php echo get_field( 'link_source' ); ?>">

						<?php echo get_field('link_text'); ?>

					</a>

				</div><!-- .col-sm-12 -->

			</div><!-- .row -->

			<?php endif; ?>

		</div><!-- .container -->

	</section><!-- #single-work-body -->

	<section id="testimonials">
		
		<div class="container">

			<div class="row">

				<?php
				//The query
				$args = array(
						'post_type' => 'testimonials',
						'posts_per_page' => 1,
						'meta_query' => array(
							array(
								'key' => 'reviewer_company', // name of custom field
								'value' => $client->ID,
								'compare' => '=='
							)
						),
						'orderby' => 'rand'
						);
				$query = new WP_Query($args);
				//the loop
				if($query->have_posts()) :
					while($query->have_posts()) :
						$query->the_post();
				?>
				
					<div class="col-sm-10 col-sm-offset-1">

						<div class="testimony text-center">
						
							<?php $content = get_the_content( ); ?>

							<?php echo "<p>&ldquo;" . $content . "&rdquo;</p>"; ?>

							<?php // if there is a picture show the picture otherwise the default ?>
							<?php if ( get_field( 'reviewer_image' ) ) : ?>

								<img class="img-responsive img-circle center-block" src="<?php echo get_field( 'reviewer_image' ); ?>" alt="<?php echo get_field( 'reviewer_name' ); ?>" width="144" height="144">

							<?php else : ?>

								<img class="img-responsive img-circle center-block" src="<?php echo get_template_directory_uri(); ?>/images/avatar.png" alt="<?php echo get_field( 'reviewer_name' ); ?>" width="144" height="144">

							<?php endif; ?>

							<?php if ( get_field( 'reviewer_name' ) ) : ?>

								<p class="name"><?php echo get_field( 'reviewer_name' ); ?></p>

							<?php endif; ?>

							<?php if ( get_field( 'reviewer_position' ) ) : ?>

								<p class="position"><?php echo get_field( 'reviewer_position' ); ?></p>

							<?php endif; ?>

						</div><!-- .testimony -->

					</div><!-- .col-sm-10 -->

				<?php endwhile; endif; wp_reset_postdata(); ?>

			</div><!-- .row -->			

		</div><!-- .container -->

	</section><!-- #testimonials -->

<?php endwhile; endif; ?>

<?php get_footer( 'small' ); ?>