export default {
  init() {
    // JavaScript to be fired on all pages

    // Navbar
    $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      if (scroll > 200 ) {
        $('#main-nav, #main-nav-subpage').slideDown(700);
        $('#main-nav-subpage').removeClass('subpage-nav');
      } else {
        $('#main-nav').slideUp(700);
        $('#main-nav-subpage').hide();
        $('#main-nav-subpage').addClass('subpage-nav');
      }
    });

    // Navbar mobile icon
    $('.responsive').on('click', function() {
      $('.nav-menu').slideToggle();
    });

  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
