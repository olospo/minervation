<?php get_header( ); ?>

<?php if ( have_posts() ) : the_post(); ?>

	<section id="services-tem">
		<div class="container">
			<div class="row">
				<h1 class="text-center dash">Our Services</h1>
				<h2 class="text-center"><?php the_content(); ?></h2>
			</div>

			<div class="row">
				<?php $args = array('child_of' => get_the_id(), 'sort_column'   => 'menu_order'); // get children of services page
				$services = get_pages( $args );
				$counter = 0; ?>
				
				<?php foreach ($services as $service ) : ?>

					<div class="col-sm-4">
						<div class="service-box">
							<a href="<?php the_permalink( $service ); ?>">
								<div class="icon-wrapper">
									<?php $post_thumbnail_id = get_post_thumbnail_id($service->ID); ?>
									<?php $image_attributes = wp_get_attachment_image_src( $post_thumbnail_id, "full" );?> 
									<img class="img-responsive center-block" src="<?php echo $image_attributes[0]; ?>">
								</div>
								<div class="text-wrapper">
									<?php echo $service->post_title; ?>
								</div>
							</a>
						</div>

						<p class="teaser-text text-center">
							<?php if ( get_field( 'hero_text', $service->ID ) ) : ?>
								<?php echo wp_strip_all_tags( get_field( 'hero_text', $service->ID ) ); ?>
							<?php endif; ?>
						</p>
					</div>

				<?php $counter++; ?>

				<?php if ( $counter % 3 == 0 ) : ?>
					</div>
					<div>
				<?php endif; ?>

				<?php endforeach; ?>
			</div>
		</div>
	</section>

<?php endif; ?>

<?php get_footer('small'); ?>