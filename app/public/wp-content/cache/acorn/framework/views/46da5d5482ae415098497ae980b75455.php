<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('partials.page-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <div class="row">
    <div class="col-md-9">
      <?php if(! have_posts()): ?>
        <?php echo __('Sorry, no results were found.', 'et_textdomain'); ?>

      <?php endif; ?>
      <div class="row post-archive">
        <?php while(have_posts()): ?>
          <div class="col-sm-6 col-xxl-4 d-flex">
            <?php (the_post()); ?>
            <?php echo $__env->make('partials.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/ericktomaliwan/Local Sites/erick-website-2024/app/public/wp-content/themes/ericktomaliwan/resources/views/search.blade.php ENDPATH**/ ?>