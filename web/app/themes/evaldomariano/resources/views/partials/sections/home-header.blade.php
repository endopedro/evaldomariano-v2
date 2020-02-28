
@php
    $images_sliders = get_field('header_slider');
@endphp
<section class="home-header">

  <div class="slide-item" style="background: url('http://evaldomariano.com.br/wp-content/uploads/cropped-ev_avt.jpg') repeat scroll right center / cover"></div>

  <div class="container">
    <div class="home-header-content">
      <h1 class="header-title">{{ the_field('header_title' )}} </h1>
    <h2 class="header-subtitle"><span class="typed">{{the_field('header_caption')}}</span></h2>

      <ul class="list-unstyled header-social">
        <li><a href="#"><i class="ion-social-facebook"></i>A</a></li>
        <li><a href="#"><i class="ion-social-instagram"></i>A</a></li>
        <li><a href="#"><i class="fab fa-youtube"></i>A</a></li>
        <li><a href="http://api.whatsapp.com/send?1=pt_BR&phone=#"><i class="fab fa-whatsapp"></i>A</a></li>
      </ul>

    </div>
  </div>

</section>
