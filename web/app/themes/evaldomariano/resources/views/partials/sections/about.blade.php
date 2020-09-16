@php
  $aboutme = get_field('personal_info');
@endphp

<section class="section section-about">
  <div class="container">
    <div class="row justify-content-between">

      <div class="col-lg-4 mb-3 mb-lg-0">
        <div class="about-img-frame">
          <div class="about-img">
            @if ($aboutme['personal_img'])
              <img src="{{ $aboutme['personal_img'] }}" alt="foto">
            @endif
          </div>
        </div>
      </div>

      <div class="col-lg-7">
        <div class="about-description">
          <p class="about-description-heading">
            {!! $aboutme['personal_title'] !!}<br>
            {!! $aboutme['personal_caption'] !!}
          </p>
          <div class="about-description-text">
            {!! $aboutme['personal_content'] !!}
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
