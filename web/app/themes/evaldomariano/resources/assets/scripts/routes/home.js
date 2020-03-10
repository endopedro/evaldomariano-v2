import 'slick-carousel'
import Typed from 'typed.js';
import ScrollReveal from 'scrollreveal'

export default {
  init() {
    // JavaScript to be fired on the home page

    // Home ScrollReveal
    let sr = ScrollReveal()
    sr.reveal('.section-testimonials', {
      duration: 1500,
      origin: 'bottom',
      distance: '75px',
      delay: 600,
    })

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

    // Home services Scroll
    let isInViewport = function (elem) {
      var bounding = elem.getBoundingClientRect();
      return (
          bounding.top-100 >= 0 &&
          bounding.left >= 0 &&
          bounding.bottom+100 <= (window.innerHeight || document.documentElement.clientHeight) &&
          bounding.right <= (window.innerWidth || document.documentElement.clientWidth)
      );
    };
    let services = document.getElementsByClassName('services-item')
    window.addEventListener('scroll', () => {
      [].forEach.call(services, service => {
        if (isInViewport(service) && window.innerWidth < 768) {
          service.classList.add('hover');
        } else {
          service.classList.remove('hover');
        }
      })
    })

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
