import 'slick-carousel'

export default {
  init() {
    // JavaScript to be fired on all pages

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
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
