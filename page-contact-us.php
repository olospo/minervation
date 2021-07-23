<?php get_header( ); ?>

<?php if ( have_posts() ) : the_post(); ?>

	<section id="contact-us-page">
		
		<div class="container">
			
			<div class="row">
				
				<h1 class="text-center dash">Contact us</h1>

			</div><!-- .row -->

	

			<div class="row">

				<div class="col-sm-6">

					<div id="contact-form">
						
						<div class="row">
							
							<?php $footer = get_post( 22 );?>

							<?php echo do_shortcode( $footer->post_content ); ?>

						</div><!-- .row -->

					</div><!-- .contact-form -->

				</div><!-- .col-sm-6 -->
				
				<div class="col-sm-6">

					<div class="row contact-text email" style="margin-top: 60px;">

						<div class="col-sm-12">

							<a href="mailto:<?php the_field( 'email', 22 ); ?>"><?php the_field( 'email', 22 ); ?></a>

						</div><!-- .col-sm-12 -->

					</div><!-- .row -->

					<div class="row contact-text tel">
						
						<div class="col-sm-12">

							<a href=""><?php the_field( 'tel', 22 ); ?></a>

						</div><!-- .col-sm-12 -->

					</div><!-- .row -->

					<div class="row contact-text address">
						
						<div class="col-sm-12">

							<?php the_field( 'address', 22 ); ?>

						</div><!-- .col-sm-12 -->

					</div><!-- .row -->

				</div><!-- .col-sm-6 -->

			</div><!-- .row -->

		</div><!-- .container -->

		<div id="map-container" class="map contact-map">

			<div id="map-canvas">
				

			</div><!-- #map-canvas -->

		</div><!-- #map-container -->

	</section><!-- #contact-us-page -->

<?php endif; ?>

<?php get_footer( 'contact' ); ?>