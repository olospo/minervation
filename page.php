<?php get_header( ); ?>

<?php if ( have_posts() ) : the_post(); ?>

	<section id="page">
		
		<div class="container">

			<div class="row">

				<div class="col-sm-12">

					<?php the_content( ); ?>
					
				</div><!-- .col-sm-12 -->

			</div><!-- .row -->

		</div><!-- .container -->

	</section><!-- #page-->

<?php endif; ?>

<?php get_footer( 'contact' ); ?>