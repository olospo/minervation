<?php /* Template Name: Team Members Index */ ?>
<?php get_header( ); ?>

<?php if ( have_posts() ) : the_post(); ?>

	<section id="team-member-index">
		<div class="container">
			<div class="row">
				<h1 class="text-center dash">The Team</h1
			</div>

			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 text-center hero">
					<?php the_content( ); ?>
				</div>
			</div>

			<div class="row">
			<?php
			//The query
			$args = array(
					'post_type' => 'team',
					'posts_per_page' => -1,
					'meta_query' => array(
							array(
							'key'=>'group',
							'value'=> 'team-member',
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
				
				<div class="col-sm-3">					
					<div class="member-box">
						<a href="<?php the_permalink(); ?>">
						<?php $post_thumbnail_id = get_post_thumbnail_id(get_the_ID()); ?>
						<?php $alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true); ?>
						<?php $image_attributes = wp_get_attachment_image_src( $post_thumbnail_id, "full" );?>							
							<img class="img-responsive img-circle" src="<?php echo $image_attributes[0]; ?>" alt="<?php echo $alt; ?>">
							<h2 class="text-center"><?php the_title( ); ?></h2>
							<h3 class="text-center"><?php echo get_field( 'position' ); ?></h3>
						</a>
					</div>
				</div>

			<?php endwhile; endif; wp_reset_postdata(); ?>

			</div>
		</div>
	</section>

<?php endif; ?>
<?php get_footer('small'); ?>