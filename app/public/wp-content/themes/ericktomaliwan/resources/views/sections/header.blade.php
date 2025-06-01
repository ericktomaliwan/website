<header class="header banner py-10">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    @if (has_nav_menu('primary_navigation'))
      <nav class="nav-primary relative z-50 flex justify-between" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        <div class="flex items-center md:gap-x-12">
          <div class="header__logo">
            <img src="@asset('images/ericktomaliwan.png')" alt="{{ _e( 'Erick Tomaliwan', 'rhsp_textdomain'); }}" width="150" height="100%">
          </div>
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'hidden md:flex md:gap-x-6', 'echo' => false]) !!}
        </div> <!--end flex items-center md:gap-x-12 -->
        <div class="flex items-center gap-x-5 md:gap-x-8">
          <ul class="header__social__icons">
            <li>
              <a href="https://github.com/ericktomaliwan/" class="group inline-flex items-center justify-center rounded-full py-2 px-4 text-sm font-semibold  bg-burgundy-500 text-white hover:text-slate-100 hover:bg-burgundy-400 active:bg-blue-800 active:text-blue-100 focus-visible:outline-blue-600" color="blue" variant="solid">
              {!! $icon_gh->contents() !!}
              </a>
            </li>
            <li>
              <a href="https://facebook.com" class="group inline-flex items-center justify-center rounded-full py-2 px-4 text-sm font-semibold  bg-burgundy-500 text-white hover:text-slate-100 hover:bg-burgundy-400 active:bg-blue-800 active:text-blue-100 focus-visible:outline-blue-600" color="blue" variant="solid">
              {!! $icon_fb->contents() !!}
              </a>
            </li>
          </ul>
        </div><!--end flex items-center gap-x-5 md:gap-x-8-->
        <div class="hamburger md:hidden">
          <button id="hamburgerButton" class="relative z-10 flex h-8 w-8 items-center justify-center focus:not-data-focus:outline-hidden" aria-label="Toggle Navigation" type="button" aria-expanded="false" data-headlessui-state="">
            <svg aria-hidden="true" class="h-3.5 w-3.5 overflow-visible stroke-slate-700" fill="none" stroke-width="2" stroke-linecap="round"><path d="M0 1H14M0 7H14M0 13H14" class="origin-center transition"></path><path d="M2 2L12 12M12 2L2 12" class="origin-center transition scale-90 opacity-0"></path></svg>
          </button>
          <div class="hidden" id="popover-backdrop" aria-hidden="true"></div>
          <div id="mobileMenu" class="mobile-menu hidden absolute inset-x-0 top-full mt-4 flex origin-top flex-col rounded-2xl bg-white p-4 text-lg tracking-tight text-slate-900 ring-1 shadow-xl ring-slate-900/5 data-closed:scale-95 data-closed:opacity-0 data-enter:duration-150 data-enter:ease-out data-leave:duration-100 data-leave:ease-in">
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav lg:flex lg:gap-10', 'echo' => false]) !!}
          </div>
        </div> <!-- end md:hidden -->
      </nav> <!--end nav-->
    @endif <!--has navigation-->
  </div> <!-- whole row-->
</header>