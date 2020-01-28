@if(is_front_page())
  <nav id="main-nav">
@else
  <nav id="main-nav-subpage" class="subpage-nav">
@endif
  <div class="row">
    <div class="container">
      <div class="logo">
        <a href="{{ get_home_url() }}"><img src="@asset('images/logo_site.png')" alt="logo"></a>
      </div>
      <div class="responsive"><i data-icon="m" class="ion-navicon-round"></i></div>
        {!! wp_nav_menu(
          array(
            'theme_location' => 'top-menu',
            'menu_class' => 'nav-menu list-unstyled',
            'container' => '',
          )
        ) !!}
    </div>
  </div>
</nav>
