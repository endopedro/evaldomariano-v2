<div class="post-card">
  <div class="post-card-header">
    <a href="{{ get_permalink() }}">
      <img class="post-card-header-image" src="{{ the_post_thumbnail_url() }}" alt="">
    </a>
  </div>
  <div class="post-card-body">
    <a href="{{ get_permalink() }}">
      <h2 class="post-card-body-title">
        {{ the_title() }}
      </h2>
      <div class="post-card-body-excerpt">
        {{ the_excerpt() }}
      </div>
    </a>
    <div class="post-card-body-tags">
      <i class="fas fa-tags mr-1"></i>
      {!! get_the_tag_list() !!}
    </div>
  </div>
  <div class="post-card-footer">
    <div class="post-card-footer-content">
      <div class="author">
        <i class="fas fa-feather-alt mr-1"></i>
        <span>{{ get_the_author() }}</span>
      </div>
      <div class="date">
        <i class="far fa-calendar-alt mr-1"></i>
        <span class="d-none d-md-inline-block">{{ get_the_date('j \d\e F \d\e Y') }}</span>
        <span class="d-md-none">{{ get_the_date('d/m/y') }}</span>
      </div>
      <div class="comments">
        <i class="fas fa-comments mr-1"></i>
        <span>{{ get_comments_number() }}</span>
      </div>
    </div>
  </div>
</div>
