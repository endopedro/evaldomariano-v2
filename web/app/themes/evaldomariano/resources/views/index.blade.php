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

          <div class="pagination">
            {!! paginate_links() !!}
          </div>

        </div>

        <div class="col-md-3">
          @include('partials.blog-sidebar')
        </div>
      </div>

    </div>
  </div>


@endsection
