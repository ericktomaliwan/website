<!doctype html>
<html <?php (language_attributes()); ?> data-theme="light">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php (do_action('get_header')); ?>
    <?php (wp_head()); ?>
  </head>

  <body <?php (body_class()); ?>>
    <?php (wp_body_open()); ?>

    <div id="app">
      <a class="sr-only focus:not-sr-only" href="#main">
        <?php echo e(__('Skip to content')); ?>

      </a>

      <?php echo $__env->make('sections.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <main class="flex-auto">
        <div class="overflow-hidden">
          <?php echo $__env->yieldContent('content'); ?>
        </div>
      </main>

      <?php if (! empty(trim($__env->yieldContent('sidebar')))): ?>
        <aside class="sidebar">
          <?php echo $__env->yieldContent('sidebar'); ?>
        </aside>
      <?php endif; ?>

      <?php echo $__env->make('sections.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php (do_action('get_footer')); ?>
    <?php (wp_footer()); ?>
  </body>
</html><?php /**PATH /Users/ericktomaliwan/Local Sites/erick-website-2024/app/public/wp-content/themes/ericktomaliwan/resources/views/layouts/app.blade.php ENDPATH**/ ?>