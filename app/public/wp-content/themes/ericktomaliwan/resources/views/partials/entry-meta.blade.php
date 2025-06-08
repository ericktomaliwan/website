{!! do_shortcode('[tsf_breadcrumb]'); !!}
<br />
<p class="meta__author"><span>{{ __('By', 'et_textdomain') }}</span> {!! $author !!}</p>
<p><time class="meta__date" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time></p>
<p><a class="badge bg-burgundy-500 text-white" href="{!! $category_details['link'] !!}">{!! $category_details['name'] !!}</a></p>
