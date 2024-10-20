
document.addEventListener("DOMContentLoaded", () => {
  //Carrousel
  var investorsCarrousel = new Swiper(".investors--carrousel", {
  loop: false,
  effect: 'fade',
  fadeEffect: {
    crossFade: true
  },
  navigation: {
    nextEl: '.investors--carrousel-next',
    prevEl: '.investors--carrousel-prev',
  },
  pagination: {
    el: ".investors--carrousel-pagination",
    clickable: true
  }
  })
})