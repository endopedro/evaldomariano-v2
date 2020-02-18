@extends('layouts.app')

@section('content')
  @include('partials.sections.home-header')
  @include('partials.sections.about')
  @include('partials.sections.symptoms')
  @include('partials.sections.services')
  @include('partials.sections.blog')
@endsection
