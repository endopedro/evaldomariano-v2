import "slick-carousel";

export default {
  init() {
    // JavaScript to be fired on the about us page
    const clinicSlickCarousel = $(
      ".clinic-carousel.slick-carousel"
    );
    if (clinicSlickCarousel !== null) {
      clinicSlickCarousel.slick({
        dots: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 10000,
      });
    }
  },
};
