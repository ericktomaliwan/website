@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  We should have a back button or a asearch bar

  <div class="relative isolate flex h-full flex-col items-center justify-center py-20 text-center sm:py-32">
    <x-alert type="warning">
      {!! __('Sorry, but the page you are trying to view does not exist.', 'sage') !!}
    </x-alert>
    <h3>{!! __('This page is out of cell range', 'et_textdomain') !!}</h3>
    <p>
      <a href='{{ get_site_url() }}'>{!! __('Return home', 'et_textdomain') !!}</a>, {!! __('or', 'et_textdomain') !!} 
      {!! __("if you can't find what you're looking for.", 'et_textdomain') !!}
    </p>
  </div>
@endsection