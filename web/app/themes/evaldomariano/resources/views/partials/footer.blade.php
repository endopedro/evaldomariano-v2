@php
    $epitome = get_field('epitome', get_page_by_title('rodape')->ID);
    $cpyright = get_field('cpyright', get_page_by_title('rodape')->ID);
    $info = get_field('contact_info', get_page_by_title('rodape')->ID);
    $social = get_field('social_networks', get_page_by_title('redes-sociais')->ID);
@endphp
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="contact">
          <h2 class="contact-title">Entre em contato</h2>
          @include('../components/contact-item', [
            'content' => $info['contact_address'],
            'icon' => 'fas fa-map-marker-alt'
            ])
          @include('../components/contact-item', [
            'content' => $info['contact_phone_number'],
            'icon' => 'fas fa-phone'
            ])
          @include('../components/contact-item', [
            'content' => $info['contact_open_hours'],
            'icon' => 'far fa-clock'
            ])
            @if($social['wpp_contact'])
              @include('../components/contact-item', [
                'content' => $social['wpp_contact'],
                'icon' => 'fab fa-whatsapp'
                ])
            @endif
          @include('../components/contact-item', [
            'content' => $info['contact_email'],
            'icon' => 'far fa-envelope'
            ])
        </div>
      </div>
      <div class="col-lg-6">
        <div class="contact-form"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-5">
        <div class="copyright">
          <h2 class="copyright-title">{!! $epitome['epitome_title'] !!}</h2>
        <p class="copyright-text">{!! $epitome['epitome_content'] !!}</p>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="copyright">
          <h2 class="copyright-title">{!! $cpyright['cpyright_title'] !!}</h2>
          <p class="copyright-text">{!! $cpyright['cpyright_content'] !!}</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="social">
        <h5 class="social-title">EVALDO MARIANO PSICÓLOGO {{ date("Y") }}</h5>
        <div class="social-icons">
          <a class="social-icon" href="#"><i class="fab fa-facebook-square"></i></a>
          <a class="social-icon" href="#"><i class="fab fa-instagram"></i></a>
          <a class="social-icon" href="#"><i class="fab fa-youtube"></i></a>
          <a class="social-icon" href="#"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>
    @php dynamic_sidebar('sidebar-footer') @endphp
  </div>
</footer>
