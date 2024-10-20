//AOS
AOS.init({
  startEvent: 'load',
  offset: 100,
  once: true,
  duration: 600
});

AOS.init({
  startEvent: 'load',
  offset: 100,
  once: true,
  duration: 600
});

AOS.refresh();
//

//LIGHTGALLERY
lightGallery(document.getElementById('lightgallery'));

let project_list_carrousel = document.querySelectorAll('.project__list_carrousel-items---pitcher');
for ( var i = 0; i < project_list_carrousel.length; i++ ) {
lightGallery( project_list_carrousel[i], {
  selector: 'a',
  counter: false,
  download: false,
  zoom: false,
  fullScreen: false,
  autoplay: false,
  autoplayControls: false
});
}
//

//SWIPER
var mainSlider = new Swiper('.main--slider', {
  loop: true,
  autoplay: {
    delay: 5000,
  },
  pagination: {
    el: '.main--slider--pagination',
    clickable: true,
    renderBullet: function (index, className) {
      return '<span class="' + className + '">' + "<i>" +  (index + 1) + '</i>' + '</span>';
     },
    },
  });

  let bulletElements = document.querySelectorAll('.main--slider--pagination .swiper-pagination-bullet');
  let svgContainer = document.createElement('div');
  svgContainer.classList.add('main-slider-pagination-circle');
  svgContainer.innerHTML = `
  <svg height="40" width="40">
  <circle class="circle" cx="20" cy="20" r="19" stroke="#FF9E18" stroke-width="2" fill-opacity="0" />
  </svg>
  `;
  bulletElements.forEach(function (bulletElement) {
    bulletElement.appendChild(svgContainer.cloneNode(true));
  });


var gCarrousel = new Swiper(".g-carrousel--details ", {
  loop: true,
  loopAdditionalSlides: 10,
  spaceBetween: 0,
  watchOverflow: true,
  navigation: {
    nextEl: '.g-carrousel--next',
    prevEl: '.g-carrousel--prev',
  },
  pagination: {
    el: ".g-carrousel--fraction",
    type: "fraction",
  }
});

var gCarrouselImages = new Swiper(".g-carrousel--thumbnails", {
  loop: true,
  loopAdditionalSlides: 10,
  spaceBetween: 56,
  watchOverflow: true,
});
gCarrouselImages.on('transitionEnd', function() {
  let imageMask = Array.from(document.querySelectorAll('.g-image--mask'))
  if(imageMask) imageMask.map(imagen => imagen.classList.add('active'))
  
  
});
gCarrousel.controller.control = gCarrouselImages;
gCarrouselImages.controller.control = gCarrousel;


var unkoTimelineSlide1 = new Swiper(".unko-timeline--slide1", {
  slidesPerView: 3,
  spaceBetween: 27,
  speed: 1000,
  slidesPerView: 'auto',
  navigation: {
    nextEl: '.unko-timeline-slide1-slide--next',
    prevEl: '.unko-timeline-slide1-slide--prev',
  },
  breakpoints: {
    1920: {
      slidesPerView: 3,
    },
    1025: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 3,
    },
    768: {
      slidesPerView: 2,
    },
    767: {
      slidesPerView: 2,
    },
    320: {
      slidesPerView: 1,
    }
  }
 });

var unkoTimelineSlide2 = new Swiper('.unko-timeline--slide2', {
  slidesPerView: 3,
  spaceBetween: 27,
  thumbs: {
    swiper: unkoTimelineSlide1,
  },
  breakpoints: {
    1920: {
      slidesPerView: 3,
    },
    1025: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 3,
    },
    768: {
      slidesPerView: 2,
    },
    767: {
      slidesPerView: 2,
    },
    320: {
      slidesPerView: 1,
    }
  }
});

unkoTimelineSlide1.on('slideChange', function () {
  unkoTimelineSlide2.slideTo(unkoTimelineSlide1.activeIndex);
});

unkoTimelineSlide2.on('slideChange', function () {
  unkoTimelineSlide1.slideTo(unkoTimelineSlide2.activeIndex);
});
//

//WAYPOINT
let waypointElement = new Waypoint({
  element: document.getElementById('contenidowaypoint'),
  handler: function(direction) {
    if (direction == 'down') {
      this.element.classList.add('---waypoint')
    } else {
      this.element.classList.remove('---waypoint')
    }
  },
  offset: '40%'
});

var waypoint = new Waypoint({
  element: document.getElementById('contenidowaypoint'),
  handler: function(direction) {
    incrementFunction('.increment--g')
  },
  offset: '50%'
})

let figureG = document.querySelectorAll('.g-image--mask')
	figureG.forEach((el,index) =>{
		new Waypoint({
			element: el,
			handler: function(direction) {
				el.classList.add('active')
			},
			offset: '70%'
		})
	})

  let sedeDetailFlightID = document.getElementById('sede-detail-flight')
  if(sedeDetailFlightID){
    let sedeDetailFlight = new Waypoint({
      element: sedeDetailFlightID,
      handler: function(direction) {
        if (direction == 'down') {
          $('.menu_a1').addClass('---active')
        } else {
          $('.menu_a1').removeClass('---active')
        }
      },
      offset: '50%'
    })
  }


  let sedeDetailAboutID = document.getElementById('sede-detail-about')
  if(sedeDetailAboutID){
    let sedeDetailAbout = new Waypoint({
      element: sedeDetailAboutID,
      handler: function(direction) {
        if (direction == 'down') {
          $('.menu_a2').addClass('---active')
          $('.menu_a1').removeClass('---active')
        } else {
          $('.menu_a2').removeClass('---active')
          $('.menu_a1').addClass('---active')
        }
      },
      offset: '50%'
    })
  }

  let sedeDetailServicesID = document.getElementById('sede-detail-services')
  if(sedeDetailServicesID){
    let sedeDetailServices = new Waypoint({
      element: sedeDetailServicesID,
      handler: function(direction) {
        if (direction == 'down') {
          $('.menu_a3').addClass('---active')
          $('.menu_a2').removeClass('---active')
        } else {
          $('.menu_a3').removeClass('---active')
          $('.menu_a2').addClass('---active')
        }
      },
      offset: '50%'
    })
  }

  let sedeDetailTourismID = document.getElementById('sede-detail-tourism')
  if(sedeDetailTourismID){
    let sedeDetailTourism = new Waypoint({
      element: sedeDetailTourismID,
      handler: function(direction) {
        if (direction == 'down') {
          $('.menu_a4').addClass('---active')
          $('.menu_a3').removeClass('---active')
        } else {
          $('.menu_a4').removeClass('---active')
          $('.menu_a3').addClass('---active')
        }
      },
      offset: '50%'
    })
  }

  let sedeDetailTransportID = document.getElementById('sede-detail-transport')
  if(sedeDetailTransportID){
    let sedeDetailTransport = new Waypoint({
      element: sedeDetailTransportID,
      handler: function(direction) {
        if (direction == 'down') {
          $('.menu_a5').addClass('---active')
          $('.menu_a4').removeClass('---active')
        } else {
          $('.menu_a5').removeClass('---active')
          $('.menu_a4').addClass('---active')
        }
      },
      offset: '50%'
    })
  }

  let sedeDetailContactID = document.getElementById('sede-detail-contact')
  if(sedeDetailContactID){
    let sedeDetailContact = new Waypoint({
      element: sedeDetailContactID,
      handler: function(direction) {
        if (direction == 'down') {
          $('.menu_a6').addClass('---active')
          $('.menu_a5').removeClass('---active')
        } else {
          $('.menu_a6').removeClass('---active')
          $('.menu_a5').addClass('---active')
        }
      },
      offset: '50%'
    })
  }

//

//STICKY
  //Sticky
  let SedeSticky = document.querySelector('.widget.js-sticky-widget')
  if(SedeSticky){
    var stickyEl = new Sticksy('.widget.js-sticky-widget', {
      topSpacing: 140,
    })
    stickyEl.onStateChanged = function (state) {
      if (state === 'fixed') stickyEl.nodeRef.classList.add('widget--sticky')
      else stickyEl.nodeRef.classList.remove('widget--sticky')
    }
  }
//

//CHART
//<canvas id="chart-id" width="30" height="30"></canvas>
new Chart(document.getElementById("chart-id"), {
  type: 'doughnut',
  data: {
    datasets: [
    {
      borderColor: '#005470',
      borderWidth: 1,
      backgroundColor: ['#005470','#000','#005470'],
      data: [30,30,60]
    }
    ]
  },
  options: {
    title: {
      display: false
    }
  }
}

//SELECT DATE
let selectDate = Array.from(document.querySelectorAll('.sede--select'))
if(selectDate.length>0){
  flatpickr(".sede--select",{
    dateFormat: "l j \\d\\e F, Y",
    locale: {
      firstDayOfWeek: 1,
      weekdays: {
        shorthand: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
        longhand: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],         
      }, 
      months: {
        shorthand: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Оct', 'Nov', 'Dic'],
        longhand: ['Enero', 'Febreo', 'Мarzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
      },
    },
  })
}