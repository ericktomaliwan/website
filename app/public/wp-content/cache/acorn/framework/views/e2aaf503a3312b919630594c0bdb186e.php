<a href="<?php echo e(get_permalink()); ?>" <?php (post_class( 'archived' )); ?>>
  <figure>
      <?php echo the_post_thumbnail('custom_small', array(
        'srcset' => wp_get_attachment_image_url( get_post_thumbnail_id(), 'custom_small' ) . ' 1200w, ' .
          wp_get_attachment_image_url( get_post_thumbnail_id(), 'custom_medium' ) . ' 2000w '
      )); ?>

  </figure>
  <div class="card-body">
    <h2 class="card-title"><?php echo $title; ?></h2>
    <p><?php (the_excerpt()); ?></p>
    <div class="card-actions justify-end">
      Extra Button
    </div>
  </div>
</a><?php /**PATH /Users/ericktomaliwan/Local Sites/erick-website-2024/app/public/wp-content/themes/ericktomaliwan/resources/views/partials/content.blade.php ENDPATH**/ ?>