<?php get_header( ); ?>

<?php if ( have_posts() ) : the_post(); ?>

	<section id="about-top">
		
		<div class="container">
			
			<div class="row">
				
				<h1 class="text-center dash">About Minervation</h1>

			</div><!-- .row -->



			<div class="row">
				
				<div class="col-sm-12 text-center hero">
					
					<?php if ( get_field( 'about_hero_text' ) ) : ?>

						<?php the_field( 'about_hero_text' ); ?>

					<?php endif; ?>

				</div><!-- .col-sm-12 -->

			</div><!-- .row -->

			<div class="row">
				
				<div class="col-sm-4">
					
					<div id="research-box">
						
						<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/research-box.png" alt="research-box">

						<?php if ( get_field( 'research_box_text' ) ) : ?>

							<?php the_field( 'research_box_text' ); ?>

						<?php endif; ?>

					</div><!-- #research-box -->

				</div><!-- .col-sm-4 -->

				<div class="col-sm-4">
					
					<div id="filtering-box">
						
						<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/filtering-box.png" alt="filter-box">

						<?php if ( get_field( 'filtering_box_text' ) ) : ?>

							<?php the_field( 'filtering_box_text' ); ?>

						<?php endif; ?>

					</div><!-- #filtering-box -->
					
				</div><!-- .col-sm-4 -->

				<div class="col-sm-4">
					
					<div id="summarising-box">
						
						<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/summarising-box.png" alt="filter-box">

						<?php if ( get_field( 'summarising_box_text' ) ) : ?>

							<?php the_field( 'summarising_box_text' ); ?>

						<?php endif; ?>

					</div><!-- #summarising-box -->
					
				</div><!-- .col-sm-4 -->

			</div><!-- .row -->

			<div class="row">

				<div class="col-sm-12 text-center hero">
				
					<?php if ( get_field( 'about_bottom_hero_text' ) ) : ?>

						<?php the_field( 'about_bottom_hero_text' ); ?>

					<?php endif; ?>

				</div><!-- .col-sm-12 -->

			</div><!-- .row -->

		</div><!-- .container -->

	</section><!-- #about-top -->

	<section id="our-history">
		
		<div class="container">
			
			<div class="row">
				
				<h1 class="text-center dash">Our History</h1>

			</div><!-- .row -->

			<div class="row">
				
				<div class="col-sm-12 text-center hero">
					
					<?php if ( get_field( 'history_hero_text' ) ) : ?>

						<?php the_field( 'history_hero_text' ); ?>

					<?php endif; ?>

				</div><!-- .col-sm-12 -->

			</div><!-- .row -->

			<div class="row">
				
				<?php if ( have_rows( 'history_repeater' ) ) : while( have_rows( 'history_repeater' ) ) : the_row(); ?>

					<div class="col-sm-6">
						
						<img class="img-responsive" src="<?php the_sub_field( 'image' ); ?>" alt="<?php the_sub_field( 'image_alt' ); ?>">

						<?php the_sub_field( 'text' ); ?>

					</div><!-- .col-sm-6 -->

				<?php endwhile; endif; ?>

			</div><!-- .row -->

		</div><!-- .container -->

	</section><!-- #our-history -->

	<section id="our-ethos">
	
		<div class="container">
			
			<div class="row">
				
				<h1 class="text-center dash">Our ethos is simple:</h1>

			</div><!-- .row -->


			<div class="row">
				
				<div class="col-sm-10 col-sm-offset-1 text-center hero">
					
					<?php if ( get_field( 'our_ethos' ) ) : ?>

						<?php the_field( 'our_ethos' ); ?>

					<?php endif; ?>

				</div><!-- .col-sm-10 -->

			</div><!-- .row -->

		</div><!-- .container -->

	</section><!-- #our-ethos -->

	<?php if ( get_field( 'video_link' ) ) : ?>

	<section id="about-video">
		
		<div class="container">
			
			<div class="row">
        
        <h1 class="text-center">Got a few minutes? Watch our video.</h1>
        
				<div class="col-sm-10 col-sm-offset-1">

					<div class="video-container">
					
						<?php the_field( 'video_link' ); ?>

					</div><!-- .video-container -->


				</div><!-- .col-sm-10 -->

			</div><!-- .row -->

		</div><!-- .container -->

	</section><!-- #about-video -->

	<?php endif; ?>

	<section id="the-team">
	
		<div class="container">
			
			<div class="row">
				
				<h1 class="text-center dash">The team</h1>

			</div><!-- .row -->

			<div class="row">

				<div class="col-sm-12 text-center hero">
				
					<?php if ( get_field( 'team_hero_text' ) ) : ?>

						<?php the_field( 'team_hero_text' ); ?>

					<?php endif; ?>

				</div><!-- .col-sm-12 -->

			</div><!-- .row -->

			<div class="row">

				<div class="col-sm-10 col-sm-offset-1">

					<div class="row">
					
						<?php
						//The query
						$args = array(
								'post_type' => 'team',
								'posts_per_page' => 3,
								'meta_query' => array(
										array(
										'key'=>'group',
										'value'=> 'team-member',
										'compare' => '='
										)
								),
								'meta_key' => 'priority',
								'orderby'  => 'meta_value_num',
								'order'	   => 'DESC'
								);
						$query = new WP_Query($args);
						//the loop
						if($query->have_posts()) :
							while($query->have_posts()) :
								$query->the_post();
						?>

							<div class="col-sm-4">
								
								<div class="member-box">

									<a href="<?php the_permalink(); ?>">

									<?php $post_thumbnail_id = get_post_thumbnail_id(get_the_ID()); ?>
									<?php $alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true); ?>
									<?php $image_attributes = wp_get_attachment_image_src( $post_thumbnail_id, "full" );?>
										
										<img class="img-responsive img-circle" src="<?php echo $image_attributes[0]; ?>" alt="<?php echo $alt; ?>">

										<h2 class="text-center"><?php the_title( ); ?></h2>
										<h3 class="text-center"><?php the_field( 'position' ); ?></h3>

									</a>

								</div><!-- .member-box -->

							</div><!-- .col-sm-4 -->

						<?php endwhile; endif; wp_reset_postdata(); ?>

					</div><!-- .row -->

					<div class="row">
						
						<div class="col-sm-12 text-center">
							
							<a class="btn btn-lg btn-primary purple-btn" href="<?php echo get_site_url( ); ?>/team-member">See all the team</a>

						</div><!-- .col-sm-12 -->

					</div><!-- .row -->

				</div><!-- .col-sm-10 -->

			</div><!-- .row -->

		</div><!-- .container -->

	</section><!-- #the-team -->

<?php endif; ?>

<?php get_footer( 'small' ); ?>