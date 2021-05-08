@php
  $epitome = get_field('epitome', get_page_by_title('home')->ID);
  $cpyright = get_field('cpyright', get_page_by_title('home')->ID);
  $info = get_field('contact_info', get_page_by_title('home')->ID);
  $social_fields = get_field('social_networks', get_page_by_title('home')->ID);
@endphp

<footer class="footer">
  <div class="container">
    <div class="row contact">
      <div class="col-lg-4">
        <h2 class="contact-title">Entre em contato</h2>
        @includeWhen($info['contact_address'], '../components/contact-item', [
          'content' => $info['contact_address'],
          'icon' => 'fas fa-map-marker-alt'
        ])
        @includeWhen($info['contact_phone_number'], '../components/contact-item', [
          'content' => $info['contact_phone_number'],
          'icon' => 'fas fa-phone'
        ])
        @includeWhen($info['contact_open_hours'], '../components/contact-item', [
          'content' => $info['contact_open_hours'],
          'icon' => 'far fa-clock'
        ])
        @includeWhen($info['contact_whatsapp'], '../components/contact-item', [
          'content' => $info['contact_whatsapp'],
          'icon' => 'fab fa-whatsapp'
        ])
        @includeWhen($info['contact_email'], '../components/contact-item', [
          'content' => $info['contact_email'],
          'icon' => 'far fa-envelope',
          'class' => 'email'
        ])
      </div>
      <div class="col-lg-6 offset-lg-2">
        <div class="contact-form mt-4 mt-lg-0">
          {!! do_shortcode('[contact-form-7 id="1707" title="Contact form 1"]') !!}
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-5">
        <div class="copyright left">
          <h2 class="copyright-title">{!! $epitome['epitome_title'] !!}</h2>
          <div class="copyright-text">{!! $epitome['epitome_content'] !!}</div>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="copyright right">
          <h2 class="copyright-title">{!! $cpyright['cpyright_title'] !!}</h2>
          <div class="copyright-text">{!! $cpyright['cpyright_content'] !!}</div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="social">
        <h5 class="social-title">EVALDO MARIANO PSICÓLOGO {{ date("Y") }}</h5>
        <div class="social-icons">
          @if($social_fields['fb_link'])
            <a class="social-icon" href="{{ $social_fields['fb_link'] }}"><i class="fab fa-facebook-square"></i></a>
          @endif
          @if($social_fields['ig_link'])
            <a class="social-icon" href="{{ $social_fields['ig_link'] }}"><i class="fab fa-instagram"></i></a>
          @endif
          @if($social_fields['yt_link'])
            <a class="social-icon" href="{{ $social_fields['yt_link'] }}"><i class="fab fa-youtube"></i></a>
          @endif
          @if($social_fields['wpp_contact'])
            <a class="social-icon" href="http://api.whatsapp.com/send?1=pt_BR&phone=+55{{ $social_fields['wpp_contact'] }}"><i class="fab fa-whatsapp"></i></a>
          @endif
        </div>
      </div>
    </div>
    @php dynamic_sidebar('sidebar-footer') @endphp
  </div>
</footer>
