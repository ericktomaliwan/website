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
    <div class="card-actions justify-end">
      <?php if (isset($component)) { $__componentOriginale67687e3e4e61f963b25a6bcf3983629 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale67687e3e4e61f963b25a6bcf3983629 = $attributes; } ?>
<?php $component = App\View\Components\Button::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'group inline-flex items-center justify-center rounded-full py-2 px-4 text-sm font-semibold  bg-burgundy-500 text-white hover:text-slate-100 hover:bg-burgundy-400 active:bg-blue-800 active:text-blue-100 focus-visible:outline-blue-600']); ?>
        Read more
       <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale67687e3e4e61f963b25a6bcf3983629)): ?>
<?php $attributes = $__attributesOriginale67687e3e4e61f963b25a6bcf3983629; ?>
<?php unset($__attributesOriginale67687e3e4e61f963b25a6bcf3983629); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale67687e3e4e61f963b25a6bcf3983629)): ?>
<?php $component = $__componentOriginale67687e3e4e61f963b25a6bcf3983629; ?>
<?php unset($__componentOriginale67687e3e4e61f963b25a6bcf3983629); ?>
<?php endif; ?>
    </div>
  </div>
</a><?php /**PATH /Users/ericktomaliwan/Local Sites/erick-website-2024/app/public/wp-content/themes/ericktomaliwan/resources/views/partials/content.blade.php ENDPATH**/ ?>