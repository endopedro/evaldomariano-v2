
@php
  $header_fields = get_field('home_header');
  $social_fields = get_field('social_networks');
@endphp

<section class="home-header">

  <div class="home-header-carousel slick-carousel">
    @php
      foreach($header_fields['header_slider'] as $img){
        echo '<img class="home-header-carousel-image" src="' . $img .'" alt="">' ;
      }
    @endphp
  </div>

  <div class="container">
    <div class="home-header-content">
      <h1 class="header-title">{{ $header_fields['header_title']}} </h1>
      <h2 class="header-subtitle"><span id="typed"></span></h2>
      <div class="d-none" id="typed-text">{{ $header_fields['header_caption'] }}</div>

      <div class="header-social list-unstyled">
        @if($social_fields['fb_link'])
          <a class="header-social-item" href="{{ $social_fields['fb_link'] }}"><i class="fab fa-facebook-square"></i></a>
        @endif
        @if($social_fields['ig_link'])
          <a class="header-social-item" href="{{ $social_fields['ig_link'] }}"><i class="fab fa-instagram"></i></a>
        @endif
        @if($social_fields['yt_link'])
          <a class="header-social-item" href="{{ $social_fields['yt_link'] }}"><i class="fab fa-youtube"></i></a>
        @endif
        @if($social_fields['wpp_contact'])
          <a class="header-social-item" href="http://api.whatsapp.com/send?1=pt_BR&phone=+55{{ $social_fields['wpp_contact']}}"><i class="fab fa-whatsapp"></i></a>
        @endif
      </div>

    </div>
  </div>

</section>
