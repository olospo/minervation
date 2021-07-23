<?php
/*
Template Name: Child of Services
*/
?>

<?php get_header( ); ?>

<?php if ( have_posts() ) : the_post(); ?>

	<div id="service-page-wrapper">

		<section id="services-tem">
			
			<div class="container">
				
				<div class="row">
					

							
						<h1 class="text-center dash"><?php the_title( ); ?></h1>

						<div class="text-center hero">

						  	<?php if ( get_field( 'hero_text' ) ) : ?>

								<?php the_field( 'hero_text' ); ?>

               				<?php endif; ?>

						</div><!-- .hero -->


				</div><!-- .row -->

				<div class="row">
					
					<div class="col-sm-4">
						
						<div class="service-box">

							<div class="icon-wrapper">

								<?php $post_thumbnail_id = get_post_thumbnail_id(get_the_ID()); ?>
								<?php $image_attributes = wp_get_attachment_image_src( $post_thumbnail_id, "full" );?> 
								
								<img class="img-responsive center-block" src="<?php echo $image_attributes[0]; ?>">

							</div><!-- .icon-wrapper -->

							<div class="text-wrapper">
								
								<?php the_title(); ?>

							</div><!-- .text-wrapper -->

						</div><!-- .service-box -->

					</div><!-- .col-sm-4 -->

					<div class="col-sm-8">
						
						<?php the_content( ); ?>

					</div><!-- .col-sm-8 -->

				</div><!-- .row -->

			</div><!-- .container -->

		</section><!-- #services-tem -->

		<section id="testimonials">
		
		<div class="container">

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

								<p class="name"><?php the_field( 'reviewer_name' ); ?></p>

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

		<section id="related-work">
			
			<div class="container">

				<div class="row">
					
					<div class="col-sm-12 text-center">
						
						<h1 class="dash">Related Work</h1>

					</div><!-- .col-sm-12 -->
					
				</div><!-- .row -->
				
				<div class="row">
					
					<?php $tax = strtolower(get_the_title( )); ?>
					<?php
					//The query
					$args = array(
							'post_type' => 'work',
							'posts_per_page' => 4,
							'service' => $tax,
							'orderby' => 'rand'
							);
					$query = new WP_Query($args);
					//the loop
					if($query->have_posts()) :
						while($query->have_posts()) :
							$query->the_post();
					?>

					<div class="col-sm-3">
							
						<a class="work-box" href="<?php the_permalink(); ?>">

							<?php $post_thumbnail_id = get_post_thumbnail_id(get_the_ID()); ?>
							<?php $alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true); ?>
							<?php $image_attributes = wp_get_attachment_image_src( $post_thumbnail_id, "full" );?>
							
							<img class="img-responsive" src="<?php echo $image_attributes[0]; ?>" alt="<?php echo $alt; ?>">

							<h3><?php the_title( ); ?></h3>

						</a><!-- .work-box -->

					</div><!-- .col-sm-3 -->

					<?php endwhile; endif; wp_reset_postdata(); ?>

				</div><!-- .row -->

			</div><!-- .container -->

		</section><!-- #related-work -->

	</div><!-- #service-page-wrapper -->

<?php endif; ?>

<?php get_footer( 'small' ); ?>