{!! do_shortcode('[tsf_breadcrumb]'); !!}
<br />
<p class="meta__author"><span>{{ __('By', 'et_textdomain') }}</span> {!! $author !!}</p>
<br />
<time class="meta__date" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>
<br />
<p class="meta__categories">{{ the_category( $post->ID ) }}</p>
