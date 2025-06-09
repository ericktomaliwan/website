<footer class="mx-auto max-w-7xl px-6 lg:px-8 w-full">
  <div class="flex flex-col items-start justify-between gap-y-12 pb-6 pt-16 lg:flex-row lg:items-center lg:py-16">
    <div>
      <div class="flex items-center">
        <div class="">
          <p class="text-base font-semibold text-gray-900">Erick Tomaliwan</p>
          <p class="mt-1 text-sm">Transforming Coffee into Code.</p>
        </div>
      </div>
      <nav class="mt-11">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'flex gap-8 relative -mx-3 -my-2 rounded-lg px-3 py-2 text-sm text-gray-700 transition-colors delay-150 hover:text-gray-900 hover:delay-0', 'echo' => false]) !!}
      </nav>
    </div>
    <div class="flex flex-col items-start justify-between gap-y-12 pb-6 pt-6 lg:flex-row lg:items-center lg:py-16">
      <div class="lg:w-64">
        <p class="text-base font-semibold text-gray-900">
          <a href="http://github.com/ericktomaliwan/">
            <span class="inset-0 sm:rounded-2xl"></span>
              Connect with me in GitHub
            </a>
        </p>
        <p class="mt-1 text-sm">
          Connect with me on GitHub to stay updated on my latest projects.
        </p>
      </div>
    </div>
  </div><!--end top footer-->
  <div class="flex flex-col items-center border-t border-gray-200 pb-12 pt-8 md:justify-between md:pt-6">
    <form class="flex w-full justify-center md:w-auto">
      <p class="mt-6 text-sm text-gray-500 md:mt-0">© Copyright <!-- -->2025<!-- -->. All rights reserved.</p>
    </form>
  </div>
</footer>