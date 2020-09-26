<article @php post_class() @endphp>
  <div class="container">
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
      </div>
      <footer>
        {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
      </footer>
      @php comments_template('/partials/comments.blade.php') @endphp
    </div>
  </div>
</article>
