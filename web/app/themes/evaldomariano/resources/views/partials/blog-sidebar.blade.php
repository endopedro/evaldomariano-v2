@php
    $popular_posts = pvc_get_most_viewed_posts( array(
    'order'	=> 'asc',
    'post_type' => 'post',
    'posts_per_page' => 3
  ));
@endphp

<div class="blog-card">
  <h6 class="blog-card-title">
    Busca
  </h6>
  <form role="search" method="get" class="form-group mb-0" action="{{ get_home_url() }}/">
    <input type="text" class="form-control" placeholder="Pesquisar" name="s">
    <button class="btn btn-secondary btn-block" type="submit"><i class="fas fa-search"></i> BUSCAR</button>
  </form>
</div>

<div class="blog-card">
  <h6 class="blog-card-title">
    Categorias
  </h6>
  <div>
    <ul class="categories">
      @foreach( $categories as $category )
        <li class="category"><a href="{{ get_category_link( $category->term_id ) }}">{{ $category->name}}</a></li>
      @endforeach
    </ul>
  </div>
</div>

<div class="blog-card">
  <h6 class="blog-card-title">
    Artigos populares
  </h6>
  <div>
    @foreach ($popular_posts as $index=>$post)
      @php setup_postdata( $GLOBALS['post'] =& $post ) @endphp
      <a href="{{ get_permalink() }}" class="popular-post">
        <img class="popular-post-image" src="{{ the_post_thumbnail_url() }}" alt="">
        <h5 class="popular-post-title">{{ the_title() }}</h5>
      </a>
      @php wp_reset_postdata() @endphp
    @endforeach
  </div>
</div>
