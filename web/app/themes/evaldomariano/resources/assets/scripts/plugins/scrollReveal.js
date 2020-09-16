import ScrollReveal from "scrollreveal";

let sr = ScrollReveal();

const revealFrom = (side) => ({
  duration: 500,
  origin: side,
  distance: "75px",
  // delay: 100,
});

const elements = [
  { side: "left", class: ".about-img-frame" },
  { side: "left", class: ".symptoms-left-title" },
  { side: "left", class: ".symptoms-left-subtitle" },
  { side: "left", class: ".symptoms-text" },
  { side: "right", class: ".right .symptoms-text" },
  { side: "right", class: ".about-description-heading" },
  { side: "right", class: ".about-description-text" },
];

elements.map((el) => {
  sr.reveal(el.class, revealFrom(el.side));
});
