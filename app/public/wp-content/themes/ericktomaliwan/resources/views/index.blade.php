@extends('layouts.app')

  @section('content')
    @include('partials.page-header')

    @if (! have_posts())
      <x-alert type="warning">
        {!! __('Sorry, no results were found.', 'et_textdomain') !!}
      </x-alert>
    {!! get_search_form(false) !!}
  @endif

  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="pt-6 pb-6 grid grid-cols-1 gap-8 lg:grid-cols-3">  
        @while(have_posts())
          <div class="card bg-base-100 shadow-md">
              @php(the_post())
              @includeFirst(['partials.content-' . get_post_type(), 'partials.content'])
          </div>
        @endwhile
    </div>
  </div>
@endsection