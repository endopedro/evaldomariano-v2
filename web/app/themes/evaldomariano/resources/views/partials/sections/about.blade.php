<section class="section section-about">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-4 mb-3 mb-lg-0">
        <div class="about-img-frame">
          <div class="about-img">
            {{-- <img src="http://evaldomariano.com.br/wp-content/uploads/cropped-ev_avt.jpg" class="img-responsive" alt="me"> --}}
          <img src="{{the_field('about_me_img')}}" class="img-responsive animated fadeInLeft" alt="me">
          </div>
        </div>
      </div>

      <div class="col-lg-7">
        <div class="about-descr">
          <p class="about-descr-heading animated fadeInRight">{{the_field('about_me_title')}}<br>{{the_field('about_me_caption')}}</p>
          <div class="about-descr-text">
            {{the_field('about_me_content')}}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
