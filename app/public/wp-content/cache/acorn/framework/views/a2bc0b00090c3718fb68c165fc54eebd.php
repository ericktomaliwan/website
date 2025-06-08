<?php echo do_shortcode('[tsf_breadcrumb]'); ?>

<br />
<p class="meta__author"><span><?php echo e(__('By', 'et_textdomain')); ?></span> <?php echo $author; ?></p>
<p><time class="meta__date" datetime="<?php echo e(get_post_time('c', true)); ?>"><?php echo e(get_the_date()); ?></time></p>
<p><a class="badge bg-burgundy-500 text-white" href="<?php echo $category_details['link']; ?>"><?php echo $category_details['name']; ?></a></p>
<?php /**PATH /Users/ericktomaliwan/Local Sites/erick-website-2024/app/public/wp-content/themes/ericktomaliwan/resources/views/partials/entry-meta.blade.php ENDPATH**/ ?>