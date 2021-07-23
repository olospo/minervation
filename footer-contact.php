<footer>
	
	<div class="container">
		
		<div class="row">
			
			<div class="col-sm-6">
				
				<ul class="social-links list-inline list-unstyled">
					
					<li class="twitter">

						<a href="#"></a>

					</li><!-- .twitter -->

					<li class="googleplus">

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