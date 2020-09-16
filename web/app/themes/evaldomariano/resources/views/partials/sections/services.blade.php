@php
  $args = array(
    'posts_per_page' => -1,
    'post_type' => 'service',
    'sort_order' => 'desc',
    'orderby' => 'post__in'
);
  $posts = get_posts( $args );
@endphp

<section class="section section-services">
  <div class="container">

    <div class="section-title">
      <h2>O que ofereço</h2>
    </div>

    <div class="services-wrapper">

      @if( $posts )
        @foreach( $posts as $post )
          @php setup_postdata( $GLOBALS['post'] =& $post ) @endphp
          @include('components.service-item')
        @endforeach
        @php wp_reset_postdata() @endphp
      @endif

    </div>
  </div>
</section>
