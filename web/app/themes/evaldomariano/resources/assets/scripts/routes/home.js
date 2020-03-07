import 'slick-carousel'
import Typed from 'typed.js';

export default {
  init() {
    // JavaScript to be fired on the home page

    // Home header carousel
    const membersSlickCarousel = $('.home-header-carousel.slick-carousel')
    if (membersSlickCarousel !== null) {
      membersSlickCarousel.slick({
        infinite: true,
        speed: 1000,
        dots: false,
        autoplay: true,
        arrows: false,
        fade: true,
        autoplaySpeed: 7000,
        adaptiveHeight: true,
      })
    }

    // Section testimonials carousel
    const testimonialsSlickCarousel = $('.testimonials-carousel.slick-carousel')
    if (testimonialsSlickCarousel !== null) {
      testimonialsSlickCarousel.slick({
        dots: true,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 10000,
      });
    }

    // Home header Typed
    new Typed('#typed', {
      strings: [$('#typed-text').text()],
      typeSpeed: 60,
      backSpeed: 40,
      loop: true,
      backDelay: 2000,
    });

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
