@php
    /* Template Name: Sobre mim */
@endphp
@extends('layouts.app')

@section('content')
  <div class="page about">

    <div class="page-title">
      <h1>{{ the_field('about_me_title') }}</h1>
    </div>

    <div class="row mb-3">
      <div class="col-lg-5 pb-lg-3">
        <img class="about-image" src="{{ the_field('about_me_img') }}" alt="">
      </div>

      <div class="col-lg-7">
        <div class="about-text">
          {!! the_field('about_me_content') !!}
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12 text-center mb-4">
        <a href="{{ the_field('about_me_link') }}" target="_blank" class="btn btn-secondary btn-lg">Conheça mais sobre o meu currículo clicando aqui</a>
      </div>
      <div class="col-12 text-center">
        <h2 class="about-greeting">{{ the_field('about_me_greeting') }}</h2>
      </div>
    </div>

  </div>
@endsection
