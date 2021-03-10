@php
  global $query_string;

  wp_parse_str( $query_string, $search_query );
  $search = new WP_Query( $search_query );

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
          <h5 class="mb-4">Artigos contendo o termo: "{!! get_search_query() !!}"</h5>
          @if (!have_posts())
            <div class="alert alert-warning">
              {{ __('Nenhum artigo encontrado.', 'sage') }}
            </div>
            {!! get_search_form() !!}
          @endif

          @while(have_posts()) @php the_post() @endphp
            @include('components.post-card')
          @endwhile

        </div>

        <div class="col-md-3">
          @include('partials.blog-sidebar')
        </div>
      </div>

    </div>
  </div>

  {!! get_the_posts_navigation() !!}
@endsection
