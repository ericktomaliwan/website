<article <?php (post_class()); ?>>
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mt-16 grid grid-cols-1 gap-8 pb-24 lg:grid-cols-[15rem_1fr] xl:grid-cols-[15rem_1fr_15rem]">
            <div class="flex flex-wrap items-center gap-8 max-lg:justify-between lg:flex-col lg:items-start">
                <h1 class="entry-title">
                    <?php echo $title; ?>

                </h1>
                <div class="flex items-center gap-3">
                    <div class="meta single__meta">
                        <?php echo $__env->make('partials/entry-meta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>

                <div class="flex flex-wrap gap-2">
                    <a class="badge badge-primary" data-headlessui-state="" href="/blog?category=company">Company</a>
                </div>
            </div>
            <div class="text-gray-700">
                <div class="max-w-2xl xl:mx-auto">
                    <figure class="mb-10 aspect-[3/2] w-full rounded-2xl object-cover shadow-xl">
                        <?php echo the_post_thumbnail( 'custom_large', array(
                            'srcset' => wp_get_attachment_image_url( get_post_thumbnail_id(), 'custom_small' ) . ' 768w, ' .
                            wp_get_attachment_image_url( get_post_thumbnail_id(), 'custom_medium' ) . ' 1200w, ' .
                            wp_get_attachment_image_url( get_post_thumbnail_id(), 'custom_large' ) . ' 2000w '
                        )); ?>

                    </figure>
                    <p class="my-10 text-base/8 first:mt-0 last:mb-0">Radiant has achieved a significant milestone by raising $100M in Series A funding, led by Tailwind Ventures. This substantial investment will enable Radiant to accelerate its mission of transforming the hiring landscape through innovative, AI-driven solutions. With this new capital, Radiant is well-positioned to expand its product offerings and reach a broader market, driving forward its vision of a more efficient and effective recruitment process.</p><p class="my-10 text-base/8 first:mt-0 last:mb-0">The funding will primarily be used to enhance Radiant's AI capabilities, focusing on developing more sophisticated algorithms that can better match candidates to job roles. This will not only improve the quality of hires for businesses, but also create a more streamlined and enjoyable experience for job seekers. By leveraging advanced data analytics and machine learning, Radiant aims to eliminate the inefficiencies and biases that plague traditional hiring processes.</p><p class="my-10 text-base/8 first:mt-0 last:mb-0">Tailwind Ventures' investment in Radiant is a testament to the growing importance of AI in the recruitment industry. As businesses increasingly seek out tech-driven solutions to optimize their operations, Radiant is poised to become a leader in the field. This funding round marks a pivotal moment in the company's journey, setting the stage for future growth and innovation.</p>
                    <div class="mt-10">
                        <a class="inline-flex items-center justify-center px-2 py-[calc(theme(spacing.[1.5])-1px)] rounded-lg border border-transparent shadow ring-1 ring-black/10 whitespace-nowrap text-sm font-medium text-gray-950 data-[disabled]:bg-transparent data-[hover]:bg-gray-50 data-[disabled]:opacity-40" data-headlessui-state="" href="/blog">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon" class="size-4">
                        <path fill-rule="evenodd" d="M9.78 4.22a.75.75 0 0 1 0 1.06L7.06 8l2.72 2.72a.75.75 0 1 1-1.06 1.06L5.47 8.53a.75.75 0 0 1 0-1.06l3.25-3.25a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd"></path>
                    </svg>Back to blog</a>
                </div>
                <?php echo $__env->make('forms/search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo e(App\blog_posted_on()); ?>

                </div>
            </div>
        </div>
    </div>
</article>
<?php /**PATH /Users/ericktomaliwan/Local Sites/erick-website-2024/app/public/wp-content/themes/ericktomaliwan/resources/views/partials/content-single-post.blade.php ENDPATH**/ ?>