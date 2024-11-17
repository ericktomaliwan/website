<header class="header">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative z-50 flex justify-between py-8 items-center">
    <a class="brand" href="{{ home_url('/') }}">
      {!! $siteName !!}
    </a>
    <nav class="hidden lg:flex lg:gap-10" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav lg:flex lg:gap-10', 'echo' => false]) !!}
    </nav>
  </div>
</header>



