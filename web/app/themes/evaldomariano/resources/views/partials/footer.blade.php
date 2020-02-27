<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <div class="contact">
          <h2 class="contact-title">Entre em contato</h2>
          @include('../components/contact-item', [
            'content' => 'Clínica Núcleo Espaço Essencial<br>Av. 19 c/ 20 e 22, n. 1333 – Centro<br>Ituiutaba/MG',
            'icon' => 'fas fa-map-marker-alt'
            ])
          @include('../components/contact-item', [
            'content' => '(34) 3261-3877',
            'icon' => 'fas fa-phone'
            ])
          @include('../components/contact-item', [
            'content' => 'Seg – Sex / 07h às 17h',
            'icon' => 'far fa-clock'
            ])
          @include('../components/contact-item', [
            'content' => '(34) 99647-3877',
            'icon' => 'fab fa-whatsapp'
            ])
          @include('../components/contact-item', [
            'content' => 'contato@evaldomariano.com.br',
            'icon' => 'far fa-envelope'
            ])
        </div>
      </div>
      <div class="col-6">
        <div class="contact-form"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-5">
        <div class="copyright">
          <h2 class="copyright-title">Posso Proporcionar...</h2>
          <p class="copyright-text">CONFIANÇA, SEGURANÇA, DISCRIÇÃO, SIGILO, CUIDADO ÉTICO E UMA RELAÇÃO DE AJUDA PROFISSIONAL QUE PODE CONTRIBUIR PARA SUPERAÇÃO DE CONFLITOS E DIFICULDADES DO COTIDIANO.</p>
        </div>
      </div>
      <div class="col-7">
        <div class="copyright">
          <h2 class="copyright-title">Direitos Autorais</h2>
          <p class="copyright-text">CONFORME A LEI 9.610/98, É PERMITIDA A REPRODUÇÃO TOTAL OU PARCIAL, BEM COMO A DIVULGAÇÃO DE TODO O CONTEÚDO DESTE BLOG, DESDE QUE SEJA ATRIBUÍDO O DEVIDO CRÉDITO E CITAÇÃO DE DIREITO DE PROPRIEDADE INTELECTUAL AO PSICÓLOGO EVALDO MARIANO.</p>
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
