@php
    $recent_posts = wp_get_recent_posts(array(
    'numberposts' => 3,
    'post_status' => 'publish',
    'order_by' => 'post_date'
  ), $output = OBJECT);
@endphp
<section class="section section-blog">
  <div class="container">

    <div class="section-title">
      <h2>Blog</h2>
    </div>

    <div class="row">
    @foreach ($recent_posts as $post)
      <div class="col-lg-4">
      <a href="{{get_permalink($post->ID)}}">
          <div class="blog-post">
          <div class="post-image" style="background-image: url('{{get_the_post_thumbnail_url($post->ID)}}')"></div>
            <div class="post-content">
              <h3 class="post-title">{{$post->post_title}}</h3>
              <div class="post-text">
                <p>{{$post->post_excerpt}}</p>
              </div>
            </div>
          </div>
        </a>
      </div>
    @endforeach


    </div>
  </div>
</section>
