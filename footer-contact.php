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