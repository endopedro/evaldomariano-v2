import ScrollReveal from "scrollreveal";

const sr = ScrollReveal();

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
  { side: "left", class: ".about-image" },
  { side: "left", class: ".post-cards" },
  { side: "left", class: ".single-post" },
  { side: "left", class: ".copyright-left" },
  { side: "right", class: ".copyright-right" },
  { side: "right", class: ".symptoms-text" },
  { side: "right", class: ".about-description-heading" },
  { side: "right", class: ".about-description-text" },
  { side: "right", class: ".about-text" },
  { side: "right", class: ".blog-card" },
  { side: "bottom", class: ".service-item" },
  { side: "bottom", class: ".blog-post" },
  { side: "bottom", class: ".section-testimonials" },
  { side: "bottom", class: ".section-youtube" },
  { side: "bottom", class: ".social" },
  { side: "bottom", class: ".about-button" },
  { side: "bottom", class: ".about-greeting" },
  { side: "bottom", class: ".service-cards" },
  { side: "bottom", class: ".page-title" },
  { side: "bottom", class: ".clinic-top-title" },
  { side: "bottom", class: ".clinic-top-subtitle" },
  { side: "bottom", class: ".clinic-section" },
  { side: "bottom", class: ".service-content" },
  { side: "top", class: ".service-title" },
];

elements.forEach((el) => {
  sr.reveal(el.class, revealFrom(el.side));
});
