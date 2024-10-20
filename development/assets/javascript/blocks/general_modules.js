document.addEventListener("DOMContentLoaded", () => {
//Testimonials
var testimonialCarrousel = new Swiper('.testimonials--carrousel', {
  loop: false,
  effect: 'fade',
  fadeEffect: {
    crossFade: true
  },
  navigation: {
      nextEl: '.testimonials--carrousel-next',
      prevEl: '.testimonials--carrousel-prev',
  },
});

var testimonialThumbnails = new Swiper('.testimonials--thumbnails', {
  slidesPerView: 'auto',
  spaceBetween: 20,
  slidesPerView: 3,
  centeredSlides: true,
  slideToClickedSlide: true,
});

testimonialCarrousel.controller.control = testimonialThumbnails;
testimonialThumbnails.controller.control = testimonialCarrousel;

  //LightGallery
  let galleryID2 = document.getElementById('lightgallery2')
  if(galleryID2){
    lightGallery(galleryID2);
  }

});

