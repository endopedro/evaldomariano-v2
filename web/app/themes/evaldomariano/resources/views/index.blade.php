@php
  $categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC'
  ));
@endphp

@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <div class="blog-page page">
    <div class="container">

      <div class="page-title">
        <h1>Blog</h1>
      </div>

      <div class="row">
        <div class="col-md-9">

          @if (!have_posts())
            <div class="alert alert-warning">
              {{ __('Sorry, no results were found.', 'sage') }}
            </div>
            {!! get_search_form(false) !!}
          @endif

          @while (have_posts()) @php the_post() @endphp
            @include('components.post-card')
          @endwhile

          {!! paginate_links() !!}

        </div>

        <div class="col-md-3">
          <div class="blog-card">
            <h6 class="blog-card-title">
              Busca
            </h6>
            <form role="search" method="get" class="form-group" action="{{ get_home_url() }}/">
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
              Posts mais populares
            </h6>
          </div>
        </div>
      </div>


    </div>
  </div>


@endsection
