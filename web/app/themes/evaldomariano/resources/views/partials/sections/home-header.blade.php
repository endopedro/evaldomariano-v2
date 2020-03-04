
@php
  $images_slider = get_field('header_slider');
@endphp

<section class="home-header">

  <div class="home-header-carousel slick-carousel">
    @php
      foreach($images_slider as $img){
        echo '<img class="home-header-carousel-image" src="' . $img .'" alt="">' ;
      }
    @endphp
  </div>

  <div class="container">
    <div class="home-header-content">
      <h1 class="header-title">{{ the_field('header_title' )}} </h1>
      <h2 class="header-subtitle"><span id="typed"></span></h2>
      <div class="d-none" id="typed-text">{{ the_field('header_caption') }}</div>

      <div class="header-social list-unstyled">
        @if(the_field(fb_link))
          <a class="header-social-item" href="{{ the_field('fb_link') }}"><i class="fab fa-facebook-square"></i></a>
        @endif
        @if(the_field(ig_link))
          <a class="header-social-item" href="{{ the_field('ig_link') }}"><i class="fab fa-instagram"></i></a>
        @endif
        @if(the_field(yt_link))
          <a class="header-social-item" href="{{ the_field('yt_link') }}"><i class="fab fa-youtube"></i></a>
        @endif
        @if(the_field(wpp_contact))
          <a class="header-social-item" href="http://api.whatsapp.com/send?1=pt_BR&phone=+55{{ the_field('wpp_contact')}}"><i class="fab fa-whatsapp"></i></a>
        @endif
      </div>

    </div>
  </div>

</section>
