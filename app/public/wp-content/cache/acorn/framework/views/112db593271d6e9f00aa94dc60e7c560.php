<article <?php (post_class()); ?>>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mt-16 grid grid-cols-1 gap-8 pb-24 lg:grid-cols-[20rem_1fr]">
            <div class="flex flex-wrap items-center gap-8 max-lg:justify-between lg:flex-col lg:items-start">
                <h1 class="entry-title">
                    <?php echo $title; ?>

                </h1>
                <div class="flex items-center gap-3">
                    <div class="meta single__meta">
                        <?php echo $__env->make('partials/entry-meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>
            <div class="text-gray-700">
                <div class="max-w-full">
                    <figure class="mb-10 aspect-[3/2] w-full rounded-2xl object-cover shadow-xl">
                        <?php echo the_post_thumbnail( 'custom_large', array(
                            'srcset' => wp_get_attachment_image_url( get_post_thumbnail_id(), 'custom_small' ) . ' 768w, ' .
                            wp_get_attachment_image_url( get_post_thumbnail_id(), 'custom_medium' ) . ' 1200w, ' .
                            wp_get_attachment_image_url( get_post_thumbnail_id(), 'custom_large' ) . ' 2000w '
                        )); ?>

                    </figure>
                    <p class="my-10 text-base/8 first:mt-0 last:mb-0">
                        <?php (the_content()); ?>
                    </p>
                    <div class="mt-10">
                        <a class="inline-flex items-center justify-center px-2 py-[calc(theme(spacing.[1.5])-1px)] rounded-lg border border-transparent shadow ring-1 ring-black/10 whitespace-nowrap text-sm font-medium text-gray-950 data-[disabled]:bg-transparent data-[hover]:bg-gray-50 data-[disabled]:opacity-40" data-headlessui-state="" href="/blog">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon" class="size-4">
                                <path fill-rule="evenodd" d="M9.78 4.22a.75.75 0 0 1 0 1.06L7.06 8l2.72 2.72a.75.75 0 1 1-1.06 1.06L5.47 8.53a.75.75 0 0 1 0-1.06l3.25-3.25a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd"></path>
                            </svg>
                            Back to blog
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
<?php /**PATH /Users/ericktomaliwan/Local Sites/erick-website-2024/app/public/wp-content/themes/ericktomaliwan/resources/views/partials/content-single-post.blade.php ENDPATH**/ ?>