@php
    $testimonials = get_posts(array(
    'post_type' => 'testimonial',
    'numberposts' => 5,
    'post_status' => 'publish'
  ));
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
        <p class="testimonial-text">{!! $testimonial->testimonial_content !!}</p>
          <h3 class="testimonial-author">{{ $testimonial->the_title }}</h3>
          <h4 class="testimonial-author-profession">{{ $testimonial->testimonial_profession }}</h4>
        </div>
        @endforeach
      @endif
    </div>

  </div>
</section>
