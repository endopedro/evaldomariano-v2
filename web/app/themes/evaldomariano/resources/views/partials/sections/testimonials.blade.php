@php
  $testimonials = get_field('testimonials');
@endphp

<section class="section section-testimonials">
  <div class="container">

    <div class="section-title">
      <h2>Depoimentos</h2>
    </div>

    <h3 class="testimonials-subtitle">Alguns relatos de pessoas que recomendam meus serviços</h3>
    <img class="testimonials-image" src="@asset('images/testimonial_ic.png')" alt="">

    <div class="testimonials-carousel slick-carousel">
      @if($testimonials)
        @foreach ($testimonials as $testimonial)
          <div class="testimonials-testimonial">
            <p class="testimonial-text">“{!! $testimonial['testimonial'] !!}”</p>
            <h3 class="testimonial-author">{{ $testimonial['name'] }}</h3>
            <h4 class="testimonial-author-profession">{{ $testimonial['occupation'] }}</h4>
          </div>
        @endforeach
      @endif
    </div>
  </div>
</section>
