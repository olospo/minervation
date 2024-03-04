<?php get_header( ); ?>

<?php if ( have_posts() ) : the_post(); ?>

	<section id="team-member-index">
		
		<div class="container">
			
			<div class="row">
  			<h1 class="text-center dash"><?php the_title(); ?></h1>
			</div>
			
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 text-center hero">
					<?php if ( get_field( 'hero_text' ) ) : ?>
						<?php echo get_field( 'hero_text' ); ?>
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
						<h3 class="text-center"><?php echo get_field( 'position' ); ?></h3>

					</div><!-- .member-box -->

				</div><!-- .col-sm-3 -->

				<div class="col-sm-8 col-sm-offset-1">

					<?php if ( get_field( 'group' ) == "team-member" ) : ?>
					
					<div class="row">
						<div class="col-sm-12">
							<table class="table">
								<tr>
									<td>Email: </td>
									<td><a href="mailto:<?php echo get_field( 'email' ); ?>"><?php echo get_field( 'email' ); ?></a></td>
								</tr>
								<tr>
									<td>Office: </td>
									<td><?php echo get_field( 'office_tel' ); ?></td>
								</tr>
							</table>
						</div><!-- .col-sm-12 -->
					</div><!-- .row -->

					<div class="row">
						
						<div class="col-sm-12">
							
							<ul class="list-unstyled list-inline social-icons">
								
								<?php if ( have_rows( 'social_repeater' ) ) : while ( have_rows( 'social_repeater' ) ) : the_row(); ?>

									<li>
										
										<a href="<?php echo get_sub_field( 'link' ); ?>" target="_blank" style="background-image: url(<?php echo get_sub_field( 'icon' ); ?>)"></a>

									</li>

								<?php endwhile; endif; ?>

							</ul>

						</div><!-- .col-sm-12 -->

					</div><!-- .row -->

					<?php endif; ?>

					<div class="row">
						
						<div class="col-sm-12">
							
							<?php if ( get_field( 'main_text' ) ) : ?>

								<?php echo get_field( 'main_text' ); ?>

							<?php endif; ?>

						</div><!-- .col-sm-12 -->

					</div><!-- .row -->

				</div><!-- .col-sm-8 -->

			</div><!-- .row -->

		</div><!-- .container -->

	</section><!-- #team-member-index -->

<?php endif; ?>

<?php get_footer( 'small' ); ?>