<?php get_header( ); ?>

<?php if ( have_posts() ) : the_post(); ?>

	<section id="slider">
		
		<ul class="bxslider">
			
		<?php if ( have_rows( 'slides_repeater' ) ) : while ( have_rows( 'slides_repeater' ) ) : the_row(); ?>

			<li style="background-image: url(<?php the_sub_field( 'image' ); ?>);">

				<div class="caption">

					<div class="container">
						
						<div class="row">

							<div class="col-sm-8">

								<h1>

									<?php echo wp_strip_all_tags( get_sub_field( 'text' ) ); ?>

								</h1>

								<a class="btn btn-primary btn-lg purple-btn" href="<?php the_sub_field( 'link' ) ?>">Find out more</a>

							</div><!-- .col-sm-8 -->

						</div><!-- .row -->

					</div><!-- .container -->

				</div><!-- .caption -->

			</li>

		<?php endwhile; endif; ?>

		</ul>

	</section><!-- #slider -->

	<?php if ( get_field( 'hero_text' ) ) : ?>

	<section id="hero-text">
		
		<div class="container">
			
			<div class="row">
				
				<div class="col-sm-12 text-center">
					
					<h1><?php the_field( 'hero_text' ); ?></h1>

				</div><!-- .col-sm-12 -->

			</div><!-- .row -->

		</div><!-- .container -->

	</section><!-- #hero-text -->

	<?php endif; ?>

	<section id="work-slider">

		<div class="container">

			<div class="row">

				<div class="col-sm-12">

					<div class="row">

						<ul class="work-bxslider">

							<?php
							//The query for work post type, those are checked to show on home page sldier
							$args = array(
									'post_type' => 'work',
									'posts_per_page' => 5,
									'meta_query' => array(
											array(
											'key'=>'show_on_home_page_slider',
											'value'=> '1',
											'compare' => '=='
											)
									),
									'orderby' => 'post_date'
									);
							$query = new WP_Query($args);
							//the loop
							if($query->have_posts()) :
								while($query->have_posts()) :
									$query->the_post();
							?>

							<li>
								
								<div class="col-sm-5 col-sm-offset-1">
									
									<?php $post_thumbnail_id = get_post_thumbnail_id(get_the_ID()); ?>
									<?php $alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true); ?>
									<?php $image_attributes = wp_get_attachment_image_src( $post_thumbnail_id, "full" );?>
									
									<img class="img-responsive" src="<?php echo $image_attributes[0]; ?>" alt="<?php echo $alt; ?>">

								</div><!-- .col-sm-6 -->

								<div class="col-sm-5">
									
									<h2><?php the_title( ); ?></h2>

									<p><?php the_field( 'excerpt' ); ?></p>

									<a class="btn btn-lg btn-primary purple-btn" href="<?php the_permalink(); ?>">Read more</a>

								</div><!-- .col-sm-6 -->

							</li>

							<?php endwhile; endif; wp_reset_postdata(); ?>

						</ul><!-- .work-bxslider -->

					</div><!-- .row -->

				</div><!-- .col-ms-12 -->
		
			</div><!-- .row -->

		</div><!-- .container -->

	</section><!-- #work-slider -->

	<section id="trusted-by-clients">
		
		<div class="container">
			
			<div class="row">
				
				<div class="col-sm-12">
					
					<h1 class="text-center section-header">Minervation is trusted by</h1>

				</div><!-- .col-sm-12 -->

			</div><!-- .row -->

			<?php $truested_by_clients = get_field( 'minervation_trusted_by' ); ?>

			<div class="row">
				
				<?php // If there are four itmes in array use 3 columns other wise centrise them ?>
				<?php if (count($truested_by_clients) > 3 ) : ?>
					
					<?php foreach ($truested_by_clients as $value) : ?>

						<div class="col-sm-3">
							
							<a href="<?php the_field( 'website', $value->ID ); ?>" target="_blank">
								
								<?php $post_thumbnail_id = get_post_thumbnail_id($value->ID); ?>
								<?php $alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true); ?>
								<?php $image_attributes = wp_get_attachment_image_src( $post_thumbnail_id, "full" );?>

								<img class="img-responsive" src="<?php echo $image_attributes[0]; ?>" alt="<?php echo $alt; ?>">

							</a>

						</div><!-- .col-sm-3 -->

					<?php endforeach; ?>

				<?php else : ?>

					<div class="col-sm-8 col-sm-offset-2">
						
						<div class="row">

							<?php foreach ($truested_by_clients as $value) : ?>
							
								<div class="col-sm-4">
									
									<a style="display: inline-block; width: 100%;" href="<?php the_field( 'website', $value->ID ); ?>" target="_blank">
									
										<?php $post_thumbnail_id = get_post_thumbnail_id($value->ID); ?>
										<?php $alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true); ?>
										<?php $image_attributes = wp_get_attachment_image_src( $post_thumbnail_id, "full" );?>

										<img class="img-responsive center-block" src="<?php echo $image_attributes[0]; ?>" alt="<?php echo $alt; ?>">

									<a>

								</div><!-- .col-sm-4 -->

							<?php endforeach; ?>

						</div><!-- .row -->

					</div><!-- .col-sm-8 -->

				<?php endif; ?>

			</div><!-- .row -->

		</div><!-- .container -->

	</section><!-- #trusted-by-clients -->

	<section id="featured-works">
		
		<div class="container">
			
			<div class="row">
				
				<div class="col-sm-12">
					
					<h1 class="text-center section-header">Featured work</h1>

				</div><!-- .col-sm-12 -->

			</div><!-- .row -->

			<div class="row">

			<?php
			//The query for work post type, those are checked to show on home page sldier
			$args = array(
					'post_type' => 'work',
					'posts_per_page' => 3,
					'meta_query' => array(
							array(
							'key'=>'is_featured',
							'value'=> '1',
							'compare' => '=='
							)
					),
					'orderby' => 'post_date'
					);
			$query = new WP_Query($args);
			//the loop
			if($query->have_posts()) :
				while($query->have_posts()) :
					$query->the_post();
			?>

				<div class="col-sm-4">

					<a class="box" href="<?php the_permalink(); ?>">
					
						<?php $post_thumbnail_id = get_post_thumbnail_id(get_the_ID()); ?>
						<?php $alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true); ?>
						<?php $image_attributes = wp_get_attachment_image_src( $post_thumbnail_id, "featured-img" );?>
						
						<img class="img-responsive" src="<?php echo $image_attributes[0]; ?>" alt="<?php echo $alt; ?>">

						<h2><?php the_title( ); ?></h2>
						
						<p><?php echo wp_strip_all_tags( get_field( 'excerpt' ) ); ?></p>

					</a><!-- .box -->

				</div><!-- .col-sm-4 -->

			<?php endwhile; endif; wp_reset_postdata(); ?>

			</div><!-- .row -->

			<div class="row">
				
				<div class="col-sm-12 text-center">
					
					<a class="btn btn-primary btn-lg purple-btn" href="<?php echo get_site_url( );?>/work">View all work</a>

				</div><!-- .col-sm-12 -->

			</div><!-- .row -->

		</div><!-- .container -->

	</section><!-- #featured-works -->

	<section id="national-elf">
		
		<div class="container">
			
			<div class="row">
				
				<div class="col-sm-12">

					<h1 class="text-center section-header">We are the creators of the <br>National Elf Service!</h1>
					
					<img class="img-responsive" src="<?php the_field( 'national_elf_service_image' ); ?>" alt="National Elf Service">

				</div><!-- .col-sm-12 -->

			</div><!-- .row -->

			<div class="row">
				
				<div class="col-sm-6">
					
					<p><?php the_field( 'national_elf_service_first_paragraph' ); ?></p>

				</div><!-- .col-sm-6 -->

				<div class="col-sm-6">
					
					<p><?php the_field( 'national_elf_service_second_paragraph' ); ?></p>

				</div><!-- .col-sm-6 -->

			</div><!-- .row -->

			<div class="row">
				
				<div class="col-sm-12 text-center">
					
					<a class="btn btn-primary btn-lg purple-btn" href="<?php echo get_site_url( );?>/work">Find out more</a>

				</div><!-- .col-sm-12 -->

			</div><!-- .row -->

		</div><!-- .container -->

	</section><!-- #national-elf -->

	<section id="testimonials" class="front-page">
		
		<div class="container">
			
			<div class="row">
				
				<div class="col-sm-10 col-sm-offset-1">
					
					<h1 class="text-center section-header">Testimonials</h1>

				</div><!-- .col-sm-10 -->

			</div><!-- .row -->

			<div class="row">

				<?php
				//The query
				$args = array(
						'post_type' => 'testimonials',
						'posts_per_page' => 1,
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

								<img class="img-responsive img-circle center-block" src="<?php the_field( 'reviewer_image' ); ?>" alt="<?php the_field( 'reviewer_name' ); ?>" width="144" height="144">

							<?php else : ?>

								<img class="img-responsive img-circle center-block" src="<?php echo get_template_directory_uri(); ?>/images/avatar.png" alt="<?php the_field( 'reviewer_name' ); ?>" width="144" height="144">

							<?php endif; ?>

							<?php if ( get_field( 'reviewer_name' ) ) : ?>

								<h3 class="name"><?php the_field( 'reviewer_name' ); ?></h3>

							<?php endif; ?>

							<?php if ( get_field( 'reviewer_position' ) ) : ?>

								<p class="position"><?php the_field( 'reviewer_position' ); ?></p>

							<?php endif; ?>

						</div><!-- .testimony -->

					</div><!-- .col-sm-10 -->

				<?php endwhile; endif; wp_reset_postdata(); ?>

			</div><!-- .row -->			

		</div><!-- .container -->

	</section><!-- #testimonials -->

<?php endif; ?>

<?php get_footer('small'); ?>