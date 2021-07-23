<?php get_header( ); ?>

	<section id="about-top">
		
		<div class="container">

			<?php if ( have_posts() ) : the_post(); ?>
			
			<div class="row">
				
				<div class="col-sm-12">

					<h1 class="text-center dash">Sign-up for our newsletter</h1>

					<div class="row">
						
						<div class="col-sm-6 col-sm-offset-3">
							
							<?php the_content( ); ?>

						</div><!-- .col-sm-6 -->

					</div><!-- .row -->

				</div><!-- .col-sm-12 -->
				
			</div><!-- .row -->

			<?php endif; ?>

		</div><!-- .container -->

	</section><!-- #about-top -->

<?php get_footer( 'contact' ); ?>