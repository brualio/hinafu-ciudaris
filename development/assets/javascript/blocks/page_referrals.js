
document.addEventListener("DOMContentLoaded", () => {
  var referralsCarrousel = new Swiper(".referrals--carrousel", {
  slidesPerView: 2,
  spaceBetween: 30,
  speed: 1000,
  slidesPerView: 'auto',
  navigation: {
    nextEl: '.referrals--carrousel-next',
    prevEl: '.referrals--carrousel-prev',
  },
  pagination: {
    el: ".referrals--carrousel-pagination",
    type: "fraction",
    formatFractionCurrent: function (number) {
      return ('0' + number).slice(-2); 
    },
    formatFractionTotal: function (number) {
      return ('0' + number).slice(-2);
    }
  },
  breakpoints: {
    768: {
      slidesPerView: 2,
    },
    767: {
      slidesPerView: 1,
    },
    320: {
      slidesPerView: 1,
    }
  }
  })
})