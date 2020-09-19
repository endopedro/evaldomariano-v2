<nav id="main-nav{{ is_front_page() ? '' : '-subpage' }}">
  <div class="row">
    <div class="container">
      <div class="main-nav-top-content">
        <div class="logo">
          <a href="{{ get_home_url() }}"><img src="@asset('images/logo_site.png')" alt="logo"></a>
        </div>
        <div class="responsive"><i class="fas fa-bars"></i></div>
        <div class="nav-menu-large">
          {!! wp_nav_menu(
            array(
              'theme_location' => 'primary_navigation',
              // 'menu_class' => 'nav-menu-large',
              'container' => '',
            )
          ) !!}
        </div>
      </div>
      <div class="nav-menu">
        {!! wp_nav_menu(
          array(
            'theme_location' => 'primary_navigation',
            // 'menu_class' => 'nav-menu',
            'container' => '',
          )
        ) !!}
      </div>
    </div>
  </div>
</nav>
