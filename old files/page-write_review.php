<?php get_header( ); ?>

<section id="write-review-page" class="write-review-page">
	
	<div class="container">
		
		<div class="row">
			
			<div class="col-md-8 col-md-offset-2 text-center">

				<?php
				$name = "";
				$company = "";
				if (isset($_GET['reviewer_name'])) {
					$name = $_GET['reviewer_name'];
				}
				if (isset($_GET['company'])) {
					$company = $_GET['company'];
				}
				?>
				
				<h1 class="uppercase underline">Thank you for your business <?php echo $name; ?>!</h1>
				
				<h2 class="hero">We’d like like to know what you thought of working with Minervation. Please login and tell us about your experience.</h2>

			</div><!-- .col-md-8 -->

		</div><!-- .row -->


		<div class="row">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php $isPasswordCorrect = false; ?>
			
			<div class="col-md-8 col-md-offset-2 text-center">
				
				<?php //check to see if the password has been entered or not ?>
				<?php if (!is_user_logged_in()): ?>

					<?php wp_login_form(  ); ?> 

				<?php else : ?>
						
						<div class="col-md-12">

							<?php gravity_form(1, false, false, false, '', false); ?>

						</div><!-- .col-md-12 -->

					</div><!-- .row -->
					
				<?php endif; ?>

			</div><!-- .col-md-8 -->

		<?php endwhile; endif; ?>

		</div><!-- .row -->

	</div><!-- .container -->

</section><!-- #write-review-page -->


<?php get_footer( ); ?>