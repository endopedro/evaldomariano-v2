@php
    /* Template Name: Consultorio */
    $title = get_field('title');
    $top_section = get_field('top_section');
    $content_text = get_field('content_text');
    $gallery = get_field('gallery');
    $final_section = get_field('final_section');
@endphp

@extends('layouts.app')

@section('content')
  <div class="page-clinic">
    <div class="clinic-top">
      <img class="clinic-top-bg-image" src="{{ $top_section['background_image'] }}" alt="">
      <h2 class="clinic-top-title">{{ $top_section['title'] }}</h2>
      <h3 class="clinic-top-subtitle">{{ $top_section['subtitle'] }}</h3>
    </div>

    <div class="clinic-section clinic-description">
      <div class="container">
        <div class="row">
          <div class="col">
            {!! $content_text !!}
          </div>
        </div>
      </div>
    </div>

    <div class="clinic-section clinic-slider">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="clinic-carousel slick-carousel">
              @foreach($gallery as $img)
                <img class="clinic-slider-item" src="{{ $img }}" alt="">
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="clinic-section clinic-invite pb-0">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img class="clinic-invite-pic" src="{{ $final_section['left_pic'] }}" alt="">
          </div>
          <div class="col-md-4 d-flex align-items-center justify-content-center">
            <h2 class="clinic-invite-text">Seja livre para dizer o que quiser. Agende uma consulta!</h2>
          </div>
          <div class="col-md-4">
            <img class="clinic-invite-pic" src="{{ $final_section['right_pic'] }}" alt="">
          </div>
        </div>
      </div>
    </div>

  </div>
@endsection
