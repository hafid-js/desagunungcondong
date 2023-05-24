"use strict";

$("#users-carousel").owlCarousel({
  items: 1,
  margin: 20,
  autoplay: true,
  autoplayTimeout: 5000,
  loop: true,
  responsive: {
    0: {
      items: 2
    },
    578: {
      items: 1
    },
    768: {
      items: 1
    }
  }
});
