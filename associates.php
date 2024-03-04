<?php
/*
Template Name: Associate Members Index
*/
?>

<?php get_header( ); ?>

<?php if ( have_posts() ) : the_post(); ?>

	<section id="team-member-index">
		
		<div class="container">
			
			<div class="row">
				
				<h1 class="text-center dash">Associates</h1>

			</div><!-- .row -->

			<div class="row">
				
				<div class="col-sm-10 col-sm-offset-1 text-center hero">
					
					<?php the_content( ); ?>

				</div><!-- .col-sm-12 -->

			</div><!-- .row -->

			<div class="row">

			<?php
			//The query
			$args = array(
					'post_type' => 'team',
					'posts_per_page' => -1,
					'meta_query' => array(
							array(
							'key'=>'group',
							'value'=> 'associate',
							'compare' => '='
							)
					),
					'meta_key' => 'priority',
					'orderby'  => 'meta_value_num',
					'order'	   => 'DESC'
					);
			$query = new WP_Query($args);
			//the loop
			if($query->have_posts()) :
				while($query->have_posts()) :
					$query->the_post();
			?>
				
				<div class="col-sm-2">
					
					<div class="member-box">

						<a href="<?php the_permalink(); ?>">

						<?php $post_thumbnail_id = get_post_thumbnail_id(get_the_ID()); ?>
						<?php $alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true); ?>
						<?php $image_attributes = wp_get_attachment_image_src( $post_thumbnail_id, "full" );?>
							
							<img class="img-responsive img-circle" src="<?php echo $image_attributes[0]; ?>" alt="<?php echo $alt; ?>">

							<p class="text-center name"><?php the_title( ); ?></p>
							<p class="text-center title"><?php echo get_field( 'position' ); ?></p>

						</a>

					</div><!-- .member-box -->

				</div><!-- .col-sm-2 -->

			<?php endwhile; endif; wp_reset_postdata(); ?>

			</div><!-- .row -->

		</div><!-- .container -->

	</section><!-- #team-member-index -->

<?php endif; ?>

<?php get_footer( ); ?>