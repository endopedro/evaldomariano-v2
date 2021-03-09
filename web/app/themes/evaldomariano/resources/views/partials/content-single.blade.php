@php
  $tags = wp_get_post_tags($post->ID);
  $related_posts = null;

  if ($tags) {
    $first_tag = $tags[0]->term_id;
    $args = array(
      'tag__in' => array($first_tag),
      'post__not_in' => array($post->ID),
      'posts_per_page'=>2,
      'fields' => 'ids',
      'caller_get_posts'=>1
    );

    $related_posts = new WP_Query($args);
  }
@endphp

<article @php post_class() @endphp>
  <div class="blog-page page">
    <div class="container">

      <div class="page-title">
        <h1>Blog</h1>
      </div>

      <div class="row">
        <div class="col-lg-9">

          <div class="single-post white-card">
            <header class="single-post-header">
              <div class="single-post-header-image">
                <img src="{{ the_post_thumbnail_url() }}" alt="">
              </div>
              <div class="single-post-header-content">
                <h2 class="post-title">{!! get_the_title() !!}</h2>
                @include('partials/entry-meta')
              </div>
            </header>

            <div class="entry-content">
              @php the_content() @endphp
              @include('components/post-tags')

              @if( $related_posts )
                <div class="related-posts mt-4">
                  <h6 class="title">Artigos relacionados</h6>
                    <div class="row">
                      @while ($related_posts->have_posts())
                        <div class="col-md-6 mb-2 mb-md-0">
                          @php $related_posts->the_post() @endphp
                            <a href="{{ get_permalink() }}" class="popular-post">
                              <img class="popular-post-image" src="{{ the_post_thumbnail_url() }}" alt="">
                              <h5 class="popular-post-title">{{ the_title() }}</h5>
                            </a>
                          </div>
                        @endwhile
                      @php wp_reset_query() @endphp
                    </div>
                  </div>
                @endif

              <footer>
                {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
              </footer>
              <div class="mt-5">
                @php comments_template('/partials/comments.blade.php') @endphp
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          @include('partials.blog-sidebar')
        </div>
      </div>

    </div>
  </div>
</article>
