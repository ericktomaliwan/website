<a href="{{ get_permalink() }}" @php(post_class( 'archived' ))>
  <figure>
      {!! the_post_thumbnail('custom_small', array(
        'class' => 'aspect-video w-full rounded-t-2xl bg-gray-100 object-cover sm:aspect-2/1 lg:aspect-3/2', 
        'srcset' => wp_get_attachment_image_url( get_post_thumbnail_id(), 'custom_small' ) . ' 1200w, ' .
          wp_get_attachment_image_url( get_post_thumbnail_id(), 'custom_medium' ) . ' 2000w '
        )
      ); !!}
  </figure>
  <div class="card-body">
    <h2 class="card-title">{!! $title !!}</h2>
    <p>@php(the_excerpt())</p>
    <div class="card-actions justify-end">
      <x-button class="group inline-flex items-center justify-center rounded-full py-2 px-4 text-sm font-semibold  bg-burgundy-500 text-white hover:text-slate-100 hover:bg-burgundy-400 active:bg-blue-800 active:text-blue-100 focus-visible:outline-blue-600">
        Read more
      </x-button>
    </div>
  </div>
</a>