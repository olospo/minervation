<?php get_header( ); ?>

<?php if ( have_posts() ) : the_post(); ?>

	<section id="team-member-index">
		
		<div class="container">
			
			<div class="row">
				

  
  				  <h1 class="text-center dash"><?php the_title(); ?></h1>

		
				
			</div><!-- .row -->


			<div class="row">
				
				<div class="col-sm-10 col-sm-offset-1 text-center hero">
					
					<?php if ( get_field( 'hero_text' ) ) : ?>

						<?php the_field( 'hero_text' ); ?>

					<?php endif; ?>

				</div><!-- .col-sm-12 -->

			</div><!-- .row -->

			<div class="row member-body">
				
				<div class="col-sm-3">
					
					<div class="member-box">

						<?php $id = get_the_ID(); ?>
						<?php $post_thumbnail_id = get_post_thumbnail_id(get_the_ID()); ?>
						<?php $alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true); ?>
						<?php $image_attributes = wp_get_attachment_image_src( $post_thumbnail_id, "full" );?>
							
						<img class="img-responsive img-circle" src="<?php echo $image_attributes[0]; ?>" alt="<?php echo $alt; ?>">

						<h2 class="text-center"><?php the_title( ); ?></h2>
						<h3 class="text-center"><?php the_field( 'position' ); ?></h3>

					</div><!-- .member-box -->

				</div><!-- .col-sm-3 -->

				<div class="col-sm-8 col-sm-offset-1">

					<?php if ( get_field( 'group' ) == "team-member" ) : ?>
					
					<div class="row">
						
						<div class="col-sm-12">
							
							<table class="table">
							  
								<tr>
										
									<td>Email: </td>

									<td><a href="mailto:<?php the_field( 'email' ); ?>"><?php the_field( 'email' ); ?></a></td>

								</tr>

								<tr>
										
									<td>Office: </td>

									<td><?php the_field( 'office_tel' ); ?></td>

								</tr>

								<tr>
										
									<td>Mobile: </td>

									<td><?php the_field( 'mobile' ); ?></td>

								</tr>

								<tr>
										
									<td>Skype: </td>

									<td><?php the_field( 'skype' ); ?></td>

								</tr>

							</table>

						</div><!-- .col-sm-12 -->

					</div><!-- .row -->

					<div class="row">
						
						<div class="col-sm-12">

							<p style="margin-bottom: 40px; margin-top: 30px;">Connect with <?php the_title( ); ?></p>
							
							<ul class="list-unstyled list-inline social-icons">
								
								<?php if ( have_rows( 'social_repeater' ) ) : while ( have_rows( 'social_repeater' ) ) : the_row(); ?>

									<li>
										
										<a href="<?php the_sub_field( 'link' ); ?>" target="_blank" style="background-image: url(<?php the_sub_field( 'icon' ); ?>)"></a>

									</li>

								<?php endwhile; endif; ?>

							</ul>

						</div><!-- .col-sm-12 -->

					</div><!-- .row -->

					<?php endif; ?>

					<div class="row">
						
						<div class="col-sm-12">
							
							<?php if ( get_field( 'main_text' ) ) : ?>

								<?php the_field( 'main_text' ); ?>

							<?php endif; ?>

						</div><!-- .col-sm-12 -->

					</div><!-- .row -->

				</div><!-- .col-sm-8 -->

			</div><!-- .row -->

		</div><!-- .container -->

	</section><!-- #team-member-index -->

	<section id="related-work">
			
		<div class="container">

			<div class="row">
				
				<div class="col-sm-12 text-center">
					
					<h1 class="dash">Projects</h1>

				</div><!-- .col-sm-12 -->
				
			</div><!-- .row -->
			
			<div class="row">
				
				<?php
				$person_id = $id;
				$project_counter = 1;
				$projects = array();
				//The query
				$args = array(
						'post_type' => 'work',
						'posts_per_page' => -1,
						'orderby' => 'rand'
						);
				$query = new WP_Query($args);
				//the loop
				if($query->have_posts()) :
					while($query->have_posts()) :
						$query->the_post();

						$contributers = get_field('associates', $post->ID);

						for ($i = 0; $i < count($contributers); $i++) :
					
							$countributer_id = $contributers[$i]->ID; ?>

							<?php if ($person_id == $countributer_id): ?>
								
								<?php $project_counter++; ?>
								<?php $projects[] = $post->ID; ?>

							<?php endif ?>

						<?php endfor; ?>

				<?php endwhile; endif; wp_reset_postdata(); ?>

				<?php $projects = array_slice($projects, 0, 4); ?>

				<?php for ($i = 0; $i < count($projects); $i++) : ?>

				<div class="col-sm-3">
						
					<a class="work-box" href="<?php echo get_permalink($projects[$i]); ?>">

						<?php $post_thumbnail_id = get_post_thumbnail_id($projects[$i]); ?>
						<?php $alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true); ?>
						<?php $image_attributes = wp_get_attachment_image_src( $post_thumbnail_id, "full" );?>
						
						<img class="img-responsive" src="<?php echo $image_attributes[0]; ?>" alt="<?php echo $alt; ?>">

						<h3><?php echo get_the_title($projects[$i]); ?></h3>

					</a><!-- .work-box -->

				</div><!-- .col-sm-3 -->

				<?php endfor; ?>

			</div><!-- .row -->

		</div><!-- .container -->

	</section><!-- #related-work -->

<?php endif; ?>

<?php get_footer( 'small' ); ?>