<section id="contact-us">
	<div class="container">
		
		<div class="row">
			<div class="col-sm-12">
				<h1 class="text-center black-gray">Contact us</h1>
			</div>
		</div>
	
		<div class="row">
			<div class="col-sm-12">
				<div class="bordered-div">
					<div class="row">
						<div class="col-sm-6 text-center">
							<img src="<?php echo get_template_directory_uri(); ?>/images/tel-icon.png" alt="tel">
							<a href="tel:<?php the_field( 'tel', 22 ); ?>"><?php the_field( 'tel', 22 ); ?></a>
						</div>
						<div class="col-sm-6 text-center">
							<img src="<?php echo get_template_directory_uri(); ?>/images/email-icon.png" alt="mail">
							<a href="mailto:<?php the_field( 'email', 22 ); ?>"><?php the_field( 'email', 22 ); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</section>

<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">

				<p>&copy; Minervation Ltd <?php echo date(Y); ?></p>

				<ul class="footer-menu list-unstyled">
					<li><a href="#">Site map</a></li>
					<li><a href="#">Privacy policy</a></li>
					<li><a href="#">Cookies</a></li>
					<li><a href="#">Terms & conditions</a></li>
				</ul>
				
			</div>
			
			<div class="col-sm-6">
				<ul class="social-links list-inline list-unstyled">
					
					<li class="twitter">
						<a href="<?php the_field('twitter_link', 22); ?>"></a>
					</li>

					<li class="facebook">
						<a href="<?php the_field('facebook_link', 22); ?>"></a>
					</li>

					<li class="linkedin">
						<a href="<?php the_field('linkedin_link', 22); ?>"></a>
					</li>

					<li class="youtube">
						<a href="<?php the_field('youtube_link', 22); ?>"></a>
					</li>

				</ul>
			</div>
			
			
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
	<script>
	new UISearch( document.getElementById( 'sb-search' ) );
</script>
</body>
</html>