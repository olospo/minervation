<?php get_header( ); ?>

<?php if ( have_posts() ) : the_post(); ?>

	<section id="services-tem">
		
		<div class="container">
			
			<div class="row">

				<h1 class="text-center dash">Our Services</h1>

				<h2 class="text-center"><?php the_content(); ?></h2>

			</div><!-- .row -->

			<div class="row">
				
				<?php // get children of services page ?>
				<?php $args = array('child_of' => get_the_id()); ?>
				<?php $services = get_pages( $args ); ?>
				<?php $counter = 0; ?>
				
				<?php foreach ($services as $service ) : ?>

					<div class="col-sm-4">
						
						<div class="service-box">
						
							<a href="<?php echo $service->guid; ?>">

								<div class="icon-wrapper">

									<?php $post_thumbnail_id = get_post_thumbnail_id($service->ID); ?>
									<?php $image_attributes = wp_get_attachment_image_src( $post_thumbnail_id, "full" );?> 
									
									<img class="img-responsive center-block" src="<?php echo $image_attributes[0]; ?>">

								</div><!-- .icon-wrapper -->

								<div class="text-wrapper">
									
									<?php echo $service->post_title; ?>

								</div><!-- .text-wrapper -->

							</a>

						</div><!-- .service-box -->

						<p class="teaser-text text-center">
								
							<?php if ( get_field( 'hero_text', $service->ID ) ) : ?>

								<?php echo wp_strip_all_tags( get_field( 'hero_text', $service->ID ) ); ?>

							<?php endif; ?>

						</p><!-- .teaser-text -->

					</div><!-- .col-sm-4 -->

				<?php $counter++; ?>

				<?php if ( $counter % 3 == 0 ) : ?>

					</div><!-- .row -->

					<div>

				<?php endif; ?>

				<?php endforeach; ?>

			</div><!-- .row -->

		</div><!-- .container -->

	</section><!-- #services-tem -->

<?php endif; ?>

<?php get_footer( 'small' ); ?>