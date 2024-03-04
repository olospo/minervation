<?php get_header( ); ?>

<?php if ( have_posts() ) : the_post(); ?>

	<section id="slider">
		<ul class="bxslider">
		<?php if ( have_rows( 'slides_repeater' ) ) : while ( have_rows( 'slides_repeater' ) ) : the_row(); ?>
			<li style="background: linear-gradient(rgba(0, 0, 0, 0.20), rgba(0, 0, 0, 0.20)), url(<?php echo get_sub_field( 'image' ); ?>) 50% 30% no-repeat; background-size: cover;">
				<div class="caption">
					<div class="container">
						<div class="row">
							<div class="slide-content col-sm-8">
								<h1>
									<?php echo wp_strip_all_tags( get_sub_field( 'text' ) ); ?>
								</h1><br />
								<a class="btn btn-primary btn-lg purple-btn" href="<?php echo get_sub_field( 'link' ) ?>">Find out more</a>
							</div>
						</div>
					</div>
				</div>
			</li>
		<?php endwhile; endif; ?>
		</ul>
	</section>


	<section id="featured-works">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="text-center section-header"><?php echo get_field( 'hero_text' ); ?></h1>
				</div>
			</div><!-- .row -->
			<div class="row">
			<?php //The query for work post type, those are checked to show on home page sldier
			$args = array(
					'post_type' => 'work',
					'posts_per_page' => 3,
					'meta_query' => array(
							array(
							'key'=>'is_featured',
							'value'=> '1',
							'compare' => '=='
							)
					),
					'orderby' => 'post_date'
					);
			$query = new WP_Query($args);
			//the loop
			if($query->have_posts()) :
				while($query->have_posts()) :
					$query->the_post();
			?>
				<?php get_template_part( 'inc/work-box' ); ?>
			<?php endwhile; endif; wp_reset_postdata(); ?>
			</div>

			<div class="row">
				<div class="col-sm-12 text-center">				
					<a class="btn btn-primary btn-lg purple-btn" href="<?php echo get_site_url( );?>/work">View all projects</a>
				</div><!-- .col-sm-12 -->
			</div><!-- .row -->
		</div><!-- .container -->
	</section>

	<section id="national-elf">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="text-center section-header">We are the creators of the <br>National Elf Service!</h1>
					<img class="img-responsive" src="<?php echo get_field( 'national_elf_service_image' ); ?>" alt="National Elf Service">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<p><?php echo get_field( 'national_elf_service_first_paragraph' ); ?></p>
				</div>
				<div class="col-sm-6">
					<p><?php echo get_field( 'national_elf_service_second_paragraph' ); ?></p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 text-center">
					<a class="btn btn-primary btn-lg purple-btn" href="<?php echo get_site_url( );?>/work/national-elf-service/">Find out more</a>
				</div>
			</div>
		</div>
	</section>

	<section id="testimonials" class="front-page">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<h1 class="text-center section-header">Testimonials</h1>
				</div><!-- .col-sm-10 -->
			</div><!-- .row -->
			<div class="row">
				<?php
				//The query
				$args = array(
						'post_type' => 'testimonials',
						'posts_per_page' => 1,
						'orderby' => 'rand'
						);
				$query = new WP_Query($args);
				//the loop
				if($query->have_posts()) :
					while($query->have_posts()) :
						$query->the_post();
				?>
					<div class="col-sm-10 col-sm-offset-1">
						<div class="testimony text-center">
							<?php $content = get_the_content( ); ?>
							<?php echo "<p>&ldquo;" . $content . "&rdquo;</p>"; ?>
							<?php // if there is a picture show the picture otherwise the default ?>
							<?php if ( get_field( 'reviewer_image' ) ) : ?>
								<img class="img-responsive img-circle center-block" src="<?php echo get_field( 'reviewer_image' ); ?>" alt="<?php echo get_field( 'reviewer_name' ); ?>" width="144" height="144">
							<?php else : ?>
								<img class="img-responsive img-circle center-block" src="<?php echo get_template_directory_uri(); ?>/images/avatar.png" alt="<?php echo get_field( 'reviewer_name' ); ?>" width="144" height="144">
							<?php endif; ?>
							<?php if ( get_field( 'reviewer_name' ) ) : ?>
								<h3 class="name"><?php echo get_field( 'reviewer_name' ); ?></h3>
							<?php endif; ?>
							<?php if ( get_field( 'reviewer_position' ) ) : ?>
								<p class="position"><?php echo get_field( 'reviewer_position' ); ?></p>
							<?php endif; ?>
						</div>
					</div>
				<?php endwhile; endif; wp_reset_postdata(); ?>
			</div>
		</div>
	</section>

<?php endif; ?>

<?php get_footer('small'); ?>