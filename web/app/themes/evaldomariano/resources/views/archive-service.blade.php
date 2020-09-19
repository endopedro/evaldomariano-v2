@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <div class="services-archive page">
    <div class="container">

        <div class="page-title">
          <h1>Serviços</h1>
        </div>

      @if (!have_posts())
        <div class="alert alert-warning">
          {{ __('Sorry, no results were found.', 'sage') }}
        </div>
        {!! get_search_form(false) !!}
      @endif


      <div class="row justify-content-center">
        @while (have_posts()) @php the_post() @endphp
        <div class="col-md-4">
          @include('components.service-card')
        </div>
        @endwhile
      </div>

      {!! get_the_posts_navigation() !!}
    </div>
  </div>
@endsection
