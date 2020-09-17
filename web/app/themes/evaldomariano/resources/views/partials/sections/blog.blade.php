@php
  $recent_posts = wp_get_recent_posts(
    array(
      'numberposts' => 3,
      'post_status' => 'publish',
      'order_by' => 'post_date',
      'post_type' => 'post',
    ), $output = OBJECT
  );
@endphp

<section class="section section-blog">
  <div class="container">

    <div class="section-title">
      <h2>Blog</h2>
    </div>

    <div class="row">
      @if( $recent_posts )
        @foreach( $recent_posts as $post )
          @php setup_postdata( $GLOBALS['post'] =& $post ) @endphp

          <div class="col-lg-4">
            <a href="{{ get_permalink() }}">
              <div class="blog-post">
                <img class="post-image" src="{{ get_the_post_thumbnail_url() }}" alt="post thumbnail">
                <div class="post-content">
                  <h3 class="post-title">{{ the_title() }}</h3>
                  <div class="post-text">
                    <p>{{ the_excerpt() }}</p>
                  </div>
                </div>
              </div>
            </a>
          </div>

        @endforeach
        @php wp_reset_postdata() @endphp
      @endif
    </div>

    <div class="row">
      <a href="" class="btn btn-primary mx-auto mt-2 mt-md-4">VEJA OUTROS POSTS</a>
    </div>

  </div>
</section>
