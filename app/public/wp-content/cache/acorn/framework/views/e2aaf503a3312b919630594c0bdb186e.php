<a href="<?php echo e(get_permalink()); ?>" <?php (post_class( 'archived' )); ?>>
  <figure>
      <?php echo the_post_thumbnail('custom_small', array(
        'class' => 'aspect-video w-full rounded-t-2xl bg-gray-100 object-cover sm:aspect-2/1 lg:aspect-3/2', 
        'srcset' => wp_get_attachment_image_url( get_post_thumbnail_id(), 'custom_small' ) . ' 1200w, ' .
          wp_get_attachment_image_url( get_post_thumbnail_id(), 'custom_medium' ) . ' 2000w '
        )
      ); ?>

  </figure>
  <div class="card-body">
    <h2 class="card-title"><?php echo $title; ?></h2>
    <p><?php (the_excerpt()); ?></p>
    <a class="badge bg-burgundy-500 text-white" href="<?php echo $category_details['link']; ?>"><?php echo $category_details['name']; ?></a>
  </div>
</a><?php /**PATH /Users/ericktomaliwan/Local Sites/erick-website-2024/app/public/wp-content/themes/ericktomaliwan/resources/views/partials/content.blade.php ENDPATH**/ ?>