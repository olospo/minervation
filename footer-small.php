<section id="contact-us">
		
	<div class="container">
		
		<div class="row">
			
			<div class="col-sm-12">
				
				<h1 class="text-center black-gray">Contact us</h1>

			</div><!-- .col-sm-12 -->

		</div><!-- .row -->

		<div class="row">
			
			<div class="col-sm-12">
				
				<div class="bordered-div">
					
					<div class="row">
						
						<div class="col-sm-6 text-center">
							
							<img src="<?php echo get_template_directory_uri(); ?>/images/tel-icon.png" alt="tel">

							<a href=""><?php the_field( 'tel', 22 ); ?></a>

						</div><!-- .col-sm-6 -->

						<div class="col-sm-6 text-center">
							
							<img src="<?php echo get_template_directory_uri(); ?>/images/email-icon.png" alt="mail">

							<a href="mailto:<?php the_field( 'email', 22 ); ?>"><?php the_field( 'email', 22 ); ?></a>

						</div><!-- .col-sm-6 -->

					</div><!-- .row -->

				</div><!-- .bordered-div -->

			</div><!-- .col-sm-12 -->

		</div><!-- .row -->

	</div><!-- .container -->

</section><!-- #contact-us -->

<footer>
	
	<div class="container">
		
		<div class="row">
			
			<div class="col-sm-6">

				<ul class="social-links list-inline list-unstyled">
					
					<li class="twitter">

						<a href="#"></a>

					</li><!-- .twitter -->

					<li class="facebook">

						<a href="#"></a>

					</li><!-- .twitter -->

					<li class="linkedin">

						<a href="#"></a>

					</li><!-- .twitter -->

					<li class="youtube">

						<a href="#"></a>

					</li><!-- .twitter -->

				</ul><!-- .social-links -->

				<p style="color: #FFF;">© Minervation Ltd <?php echo date(Y); ?></p>

				<ul class="footer-menu list-unstyled">
					
					<li><a href="#">Site map</a></li>

					<li><a href="#">Privacy policy</a></li>

					<li><a href="#">Cookies</a></li>

					<li><a href="#">Terms & conditions</a></li>

				</ul><!-- .footer-menu -->

			</div><!-- .col-sm-6 -->

			<div class="col-sm-6">
				
				<?php get_search_form( );  ?>

			</div><!-- .col-sm-6 -->

		</div><!-- .row -->

	</div><!-- .container -->

</footer>

<?php wp_footer(); ?>

	<script>
		new UISearch( document.getElementById( 'sb-search' ) );
	</script>

</body>

</html>