@php
  $extra_section = get_field('extra_section');
@endphp

<section class="section section-symptoms">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h5 class="symptoms-left-title mb-4">{!! $extra_section['extra_section1_title'] !!}</h5>
        <h2 class="symptoms-left-subtitle mb-4">{!! $extra_section['extra_section1_caption'] !!}</h2>
        <h3 class="symptoms-text mb-4">{!! $extra_section['extra_section1_content'] !!}</h3>
      </div>
      <div class="col-md-6 right">
        <p class="symptoms-text">
          {!! $extra_section['extra_section2_content'] !!}
        </p>
      </div>
    </div>
  </div>
</section>
