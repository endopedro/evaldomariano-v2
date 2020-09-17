import ScrollReveal from "scrollreveal";

let sr = ScrollReveal();

const revealFrom = (side) => ({
  duration: 500,
  origin: side,
  distance: "75px",
  delay: 100,
  cleanup: true,
});

const elements = [
  { side: "left", class: ".about-img-frame" },
  { side: "left", class: ".symptoms-left-title" },
  { side: "left", class: ".symptoms-left-subtitle" },
  { side: "left", class: ".symptoms-text" },
  { side: "left", class: ".contact" },
  { side: "left", class: ".copyright .left" },
  { side: "right", class: ".right .symptoms-text" },
  { side: "right", class: ".about-description-heading" },
  { side: "right", class: ".about-description-text" },
  { side: "right", class: ".copyright .right" },
  { side: "bottom", class: ".service-item" },
  { side: "bottom", class: ".blog-post" },
  { side: "bottom", class: ".section-testimonials" },
  { side: "bottom", class: ".section-youtube" },
  { side: "bottom", class: ".social" },
];

// elements.map((el) => {
//   sr.reveal(el.class, revealFrom(el.side));
// });
