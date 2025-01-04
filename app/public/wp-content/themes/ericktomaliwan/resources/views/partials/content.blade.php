<a href="{{ get_permalink() }}" @php(post_class( 'archived' ))>
  <figure>
      {!! the_post_thumbnail('custom_small', array(
        'srcset' => wp_get_attachment_image_url( get_post_thumbnail_id(), 'custom_small' ) . ' 1200w, ' .
          wp_get_attachment_image_url( get_post_thumbnail_id(), 'custom_medium' ) . ' 2000w '
      )); !!}
  </figure>
  <div class="card-body">
    <h2 class="card-title">{!! $title !!}</h2>
    <p>@php(the_excerpt())</p>
    <div class="card-actions justify-end">
      Extra Button
    </div>
  </div>
</a>