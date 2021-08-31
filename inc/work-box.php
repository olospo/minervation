<div class="col-sm-4">
  <a class="work-box" href="<?php the_permalink(); ?>">
    <?php $post_thumbnail_id = get_post_thumbnail_id(get_the_ID()); ?>
    <?php $alt = get_post_meta($post_thumbnail_id, '_wp_attachment_image_alt', true); ?>
    <?php $image_attributes = wp_get_attachment_image_src( $post_thumbnail_id, "featured-img" );?>
    <div class="image">
      <img class="img-responsive" src="<?php echo $image_attributes[0]; ?>" alt="<?php echo $alt; ?>">
    </div>
    <h3><?php the_title( ); ?></h3>
    <p><?php echo wp_strip_all_tags( get_field( 'excerpt' ) ); ?></p>
  </a>
</div>