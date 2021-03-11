@extends('layouts.app')

@section('content')
  <div class="page page-404 container">

    <div class="page-title mb-3">
      <h1>Ops...!</h1>
    </div>

    @if (!have_posts())
      <div class="text-center">
        <div class="icon">
          <i class="fas fa-exclamation-triangle"></i>
        </div>
        <h4>
          {{ __('A página que você tentou acessar não existe ou está indisponível.', 'sage') }}
        </h4>
        <a href="{!! get_home_url() !!}">
          <h5><u>Clique aqui para retornar ao site</u></h5>
        </a>
        {{-- {!! get_search_form(false) !!} --}}
      </div>
    @endif

  </div>
@endsection
