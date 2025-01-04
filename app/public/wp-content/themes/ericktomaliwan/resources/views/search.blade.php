@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <div class="row">
    <div class="col-md-9">
      @if (! have_posts())
        {!! __('Sorry, no results were found.', 'et_textdomain') !!}
      @endif
      <div class="row post-archive">
        @while(have_posts())
          <div class="col-sm-6 col-xxl-4 d-flex">
            @php(the_post())
            @include('partials.content')
          </div>
        @endwhile
      </div>
    </div>
  </div>
@endsection
