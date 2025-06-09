<header class="header banner py-10">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    @if (has_nav_menu('primary_navigation'))
      <nav class="nav-primary relative z-50 flex justify-between items-center" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        <div class="flex items-center md:gap-x-12">
          <a class="header__logo" href="{{ home_url('/') }}">
            <img src="@asset('images/ericktomaliwan.png')" alt="{{ _e( 'Erick Tomaliwan', 'rhsp_textdomain'); }}" width="108" height="100%">
          </a>
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'hidden md:flex md:gap-x-6', 'echo' => false]) !!}
        </div> <!--end flex items-center md:gap-x-12 -->
        <div class="flex items-center gap-x-5 md:gap-x-8">
          <ul class="header__social__icons">
            <li>
              <a href="https://github.com/ericktomaliwan/" class="header__social__icons--github" color="blue" variant="solid">
              {!! $icon_gh->contents() !!}
              </a>
            </li>
              <li>
              <a href="https://www.linkedin.com/in/ericktomaliwan/" class="header__social__icons--linkedin" color="blue" variant="solid">
              {!! $icon_li->contents() !!}
              </a>
            </li>
            <li>
              <a href="https://codepen.io/ericktomaliwan" class="header__social__icons--codepen" color="blue" variant="solid">
              {!! $icon_cp->contents() !!}
              </a>
            </li>
          </ul>
        </div><!--end flex items-center gap-x-5 md:gap-x-8-->
        <div class="hamburger md:hidden">
          <button id="hamburgerButton" aria-label="Toggle Navigation" type="button" aria-expanded="false">
            <svg aria-hidden="true" class="h-3.5 w-3.5 overflow-visible stroke-slate-700" fill="none" stroke-width="2" stroke-linecap="round"><path d="M0 1H14M0 7H14M0 13H14" class="origin-center transition"></path><path d="M2 2L12 12M12 2L2 12" class="origin-center transition scale-90 opacity-0"></path></svg>
          </button>
          <div id="popover-backdrop" aria-hidden="true" class="invisible opacity-0"></div>
          <div id="mobileMenu" class="invisible opacity-0">
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav lg:flex lg:gap-10', 'echo' => false]) !!}
          </div>
        </div> <!-- end md:hidden -->
      </nav> <!--end nav-->
    @endif <!--has navigation-->
  </div> <!-- whole row-->
</header>