
document.addEventListener("DOMContentLoaded", () => {
 //Item
 let imageProject = document.querySelectorAll('.item--project')
 if(imageProject.length>0){
  imageProject.forEach(project=>{
    let image = project.querySelector('img')
    let imageDiv = project.querySelector('.item-project-image')
    let imageDefault = image.getAttribute('src')
    let imageHover = image.getAttribute('data-image-hover')
    project.addEventListener('mouseenter', () => {
      imageDiv.style.transition = 'opacity 0.5s ease-in-out'
      imageDiv.style.opacity = '0'
      setTimeout(() => {
        image.src = imageHover
        imageDiv.style.opacity = '1'
      }, 100);
    });
    project.addEventListener('mouseleave', () => {
      imageDiv.style.opacity = '0'
      setTimeout(() => {
        image.src = imageDefault
        imageDiv.style.opacity = '1'
      }, 100);
    });
  })
}

//Gallery
let galleryItem = Array.from(document.querySelectorAll('.project-detail-gallery-tab-content-item'))
console.log(galleryItem)
if (galleryItem) {
  galleryItem.map((item, index) => {
    console.log(index)
    for (let i = 1; i < 9; i++) {
      var projectGalleryTop = new Swiper(`.project-gallery--top${index}`, {
        navigation: {
          nextEl: `.project-gallery-top--next${index}`,
          prevEl: `.project-gallery-top--prev${index}`,
        },
        pagination: {
          el: `.project-gallery-top--pagination${index}`,
          type: "fraction",
          formatFractionCurrent: function (number) {
            return ('0' + number).slice(-2); 
          },
          formatFractionTotal: function (number) {
            return ('0' + number).slice(-2);
          }
        },
        thumbs: {
          swiper: projectGalleryThumbnail
        }
      });
      var projectGalleryThumbnail = new Swiper(`.project-gallery--thumbnail${index}`, {
        slidesPerView: 4,
        spaceBetween: 12,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
      });
    }
  });
}

tabFunction('.project--gallery','.project--gallery-link','.project--gallery-content','index',true,true,0,0)


//Rel
var projectRelCarrousel = new Swiper(".project--rel-carrousel", {
  spaceBetween: 50,
  speed: 1000,
  watchOverflow: true,
  pagination: {
    el: ".project--rel-carrousel--pagination",
    clickable: true
  },
  breakpoints: {
    1025: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 2,
    },
    768: {
      slidesPerView: 2,
    },
    767: {
      slidesPerView: 1,
    }
  }
  })


  //Banner
  var projectBannerCarrousel = new Swiper(".project--banner-carrousel", {
    loop: false,
    effect: 'fade',
    fadeEffect: {
      crossFade: true
  },
  pagination: {
    el: ".project--banner-carrousel-pagination",
    clickable: true
  }
  })

  
  const projectAsesorCarrousel = new Swiper('.project--asesor-carrousel', {
    direction: 'horizontal',
    loop: false,
    watchOverflow: true,
    pagination: {
      el: ".project---asesor-pagination",
      clickable: true
    },
    breakpoints: {
      767: {
        direction: 'vertical',
      }
    }
  });


  //360
  let project360Pitcher = document.getElementById('project--360')
  if(project360Pitcher){
    project360Pitcher.addEventListener('click', e =>{
      project360Pitcher.parentElement.parentElement.classList.add('--show')
    })
  }
  
})

  