
@php
  $images_sliders = get_field('header_slider');
@endphp

<section class="home-header">

  <div class="home-header-carousel slick-carousel">
    <img class="home-header-carousel-image" src="http://evaldomariano.com.br/wp-content/uploads/cropped-ev_avt.jpg" alt="">
    <img class="home-header-carousel-image" src="http://evaldomariano.com.br/wp-content/uploads/IMG_1857-1.jpeg" alt="">
    <img class="home-header-carousel-image" src="http://evaldomariano.com.br/wp-content/uploads/91289a26-8cbb-402e-ae4a-72402dcfe8f8-1024x768.jpg" alt="">
  </div>

  <div class="container">
    <div class="home-header-content">
      <h1 class="header-title">{{ the_field('header_title' )}} </h1>
    <h2 class="header-subtitle"><span class="typed">{{ the_field('header_caption') }}</span></h2>

      <ul class="list-unstyled header-social">
        <li><a href="#"><i class="ion-social-facebook"></i>A</a></li>
        <li><a href="#"><i class="ion-social-instagram"></i>A</a></li>
        <li><a href="#"><i class="fab fa-youtube"></i>A</a></li>
        <li><a href="http://api.whatsapp.com/send?1=pt_BR&phone=#"><i class="fab fa-whatsapp"></i>A</a></li>
      </ul>

    </div>
  </div>

</section>
