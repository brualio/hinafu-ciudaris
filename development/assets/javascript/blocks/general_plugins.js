
document.addEventListener("DOMContentLoaded", () => {
  //AOS
  AOS.init({
    startEvent: 'load',
    offset: 100,
    once: true,
    duration: 600
  });

  //Main Slider
	var mainSlider = new Swiper('.main--slider', {
		loop: true,
		speed: 420,
		autoplay: {
			delay: 5000,
		},
		pagination: {
			el: '.main-slider--pagination',
			clickable: true,
		},
		navigation: {
			nextEl: '.main-slider-arrow--next',
			prevEl: '.main-slider-arrow--prev',
		},
	});

	//Slider Example
	var blockSlider = new Swiper('.block--slider', {
		slidesPerView: 1,
		slidesPerGroup: 1,
		spaceBetween: 40,
		loop: true,
		loopFillGroupWithBlank: true,
		autoplay: {
			delay: 5000,
		},
		pagination: {
			el: '.block-slider--pagination',
			clickable: true,
		},
		navigation: {
			nextEl: '.block-slider--next',
			prevEl: '.block-slider--prev',
		},
			breakpoints: {
			1601: {
				slidesPerView: 3,
			},
			1024: {
				slidesPerView: 3,
			},
			960: {
				slidesPerView: 2,
			},
			768: {
				slidesPerView: 2,
			},
			480: {
				slidesPerView: 1,
			},
			320: {
				slidesPerView: 1,
			}
		}
	});

  //Waypoint
  let waypointDiv = document.getElementById('contenidowaypoint')
  if(waypointDiv){
    let waypointElement = new Waypoint({
      element: waypointDiv,
      handler: function(direction) {
        if (direction == 'down') {
          this.element.classList.add('---waypoint')
        } else {
          this.element.classList.remove('---waypoint')
        }
      },
      offset: '40%'
    });
  }
  

  //LightGallery
  let galleryID = document.getElementById('lightgallery')
  if(galleryID){
    lightGallery(galleryID);
  }


	//Sticky
	let SedeSticky = document.querySelector('.widget.js-sticky-widget')
  if(SedeSticky){
    var stickyEl = new Sticksy('.widget.js-sticky-widget', {
      topSpacing: 100,
    })
    stickyEl.onStateChanged = function (state) {
      if (state === 'fixed') stickyEl.nodeRef.classList.add('widget--sticky')
      else stickyEl.nodeRef.classList.remove('widget--sticky')
    }
  }
  

});