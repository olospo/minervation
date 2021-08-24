<section id="contact-us">	
	<div class="container">

		<div class="row">
			<div class="col-sm-12">				
				<h1 class="text-center black-gray dash">Contact us</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6">
				<div id="contact-form">				
					<div class="row">					
						<?php $footer = get_post( 22 );?>
						<?php echo do_shortcode( $footer->post_content ); ?>
					</div>
				</div>
			</div>
			
			<div class="col-sm-6">
				<div class="row contact-text email" style="margin-top: 30px;">
					<div class="col-sm-12">
						<a href="mailto:<?php the_field( 'email', 22 ); ?>"><?php the_field( 'email', 22 ); ?></a>
					</div><!-- .col-sm-12 -->
				</div><!-- .row -->

				<div class="row contact-text tel">
					<div class="col-sm-12">
						<a href=""><?php the_field( 'tel', 22 ); ?></a>
					</div>
				</div>

				<div class="row contact-text address">
					
					<div class="col-sm-12">

						<?php the_field( 'address', 22 ); ?>

					</div><!-- .col-sm-12 -->

				</div><!-- .row -->

			</div><!-- .col-sm-6 -->

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
					</li>

					<li class="facebook">
						<a href="#"></a>
					</li>

					<li class="linkedin">
						<a href="#"></a>
					</li>

					<li class="youtube">
						<a href="#"></a>
					</li>

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