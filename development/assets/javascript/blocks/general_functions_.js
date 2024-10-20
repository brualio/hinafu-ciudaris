
//DEBOUNCY
const debounce = (func, delay) => {
	let timeoutId
	return function () {
		clearTimeout(timeoutId)
		timeoutId = setTimeout(func, delay)
	}
}

//CHANGE BACKGROUND
const changeBackground = (background) =>{
	let backgroundArray = Array.from(document.querySelectorAll(background))
	if(backgroundArray.length> 0){
		backgroundArray.forEach((bg)=>{
			let backgroundBG = bg.dataset.bg
			let backgroundUrl = backgroundBG.split(';')
			let backgroundUrlDesktop = backgroundUrl[0]
			let backgroundUrlIpad = backgroundUrl[1]
			let backgroundUrlMobile = backgroundUrl[2]
			if (window.matchMedia("(min-width: 1025px)").matches){
				bg.style.backgroundImage = `url('${backgroundUrlDesktop}')`
			}else if (window.matchMedia("(min-width: 768px) and (max-width: 1024px)").matches){
				bg.style.backgroundImage = `url('${backgroundUrlIpad}')`
			}else{
				bg.style.backgroundImage = `url('${backgroundUrlMobile}')`
			} 
		})
	}
	const changeBackgroundOnResize = () => { changeBackground(background)}
	window.addEventListener('resize', debounce(changeBackgroundOnResize, 250))
}

//CHANGE IMG
const changeImageSrc = (images) => {
  let imageArray = Array.from(document.querySelectorAll(images));
  if (imageArray.length > 0) {
    imageArray.forEach((img) => {
      let imageSrc = img.dataset.src;
      let imageSrcDesktop = imageSrc.split(';')[0];
      let imageSrcTablet = imageSrc.split(';')[1];
      let imageSrcMobile = imageSrc.split(';')[2];

      // console.log("<" + imageSrcDesktop + ">");
      // console.log("<" + imageSrcTablet + ">");
      // console.log("<" + imageSrcMobile + ">");
      
      if (window.matchMedia("(min-width: 1025px)").matches) {
        img.src = imageSrcDesktop;
      } else if (window.matchMedia("(min-width: 768px) and (max-width: 1024px)").matches) {
        img.src = imageSrcTablet;
      } else {
        img.src = imageSrcMobile;
      }
    });
  }
	const changeImageSrcOnResize = () => {
		changeImageSrc(images);
	};
	window.addEventListener('resize', debounce(changeImageSrcOnResize, 250));
};


//TAB GENERAL
 const tabFunction = (tab,pitcher,content,type,prevent,activeElement,index,nextElement,anclaElement) =>{
	let tabArray = Array.from(document.querySelectorAll(tab))
	if(tabArray.length>0){
		tabArray.forEach((tabEl) =>{
			let tabLinks = Array.from(tabEl.querySelectorAll(pitcher))
			let tabContent = Array.from(tabEl.querySelectorAll(content))
			tabLinks.forEach((tabLink,i) =>{
				tabLink.addEventListener('click', event =>{
					prevent && event.preventDefault()
					if(type === "index"){
						tabLinks.map(tablink => tablink.classList.remove('---active'))
						tabLinks[i].classList.add('---active')
						tabContent.map(content => content.classList.remove('---active'))
						nextElement ? tabContent[i + nextElement].classList.add('---active') : tabContent[i].classList.add('---active');
					}else if(type === "data"){
						let tabData = tabLink.dataset.tab
						tabLinks.map(link => link.classList.remove('---active'))
						tabLink.classList.add('---active')
						tabContent.map(content => content.classList.remove('---active'))
						document.querySelector(`.tab--item[data-tab="${tabData}"`) .classList.add('---active')
					}
					if(anclaElement){
						let AnclaYoffset = document.querySelector('.main-header--scroll').offsetHeight
						let AnclaElement = document.getElementById(anclaElement);
						let AnclaBlock = AnclaElement.getBoundingClientRect().top + window.pageYOffset - AnclaYoffset
						window.scrollTo({ top: AnclaBlock, behavior: 'smooth' });
					}
				})
			})
			if (activeElement) {
				type === "index" ? tabLinks[index].click()
				: document.querySelector(`.tab--link[data-tab="${tabLinks[index].dataset.tab}"]`).click();
			}
		})
	}
}

// ACORDION
const acordionFunction = (pitcher,type,activeElement,index) =>{
	let acordion = Array.from(document.querySelectorAll(pitcher))
	if(acordion.length>0){
		acordion.forEach((acordion)=>{
			let acordionContent =  acordion.nextElementSibling
			if(type === "block"){ 
				acordionContent.classList.add('--acordion-block')
			} else if(type === "height"){ 
				acordionContent.classList.add('--acordion-height')
			}
			acordion.addEventListener('click', e =>{
				acordion.classList.toggle('---active')
				acordionContent.classList.toggle('---active')
				if(type === "block"){
					acordionContent.style.display = acordionContent.style.display === "block" ? "none" : "block"
				} else if(type === "height"){
					acordionContent.style.maxHeight = acordionContent.style.maxHeight ? null : acordionContent.scrollHeight + 'px';	
				}
			})
		})
		activeElement && acordion[index].click();
	}
}

let acordionFunction2 = (pitcher, content, firstOpen) => {
	if(pitcher){
		$(document).ready(function() {
				if (firstOpen) {
						$(pitcher).first().addClass('---active');
						$(content).first().show();
				}
				$(pitcher).click(function() {
						$(this).toggleClass('---active');
						$(this).next(content).slideToggle();
						$(pitcher).not(this).removeClass('---active');
						$(content).not($(this).next(content)).slideUp();
				});
		});
	}
}


//CALC HEIGHT
const setHeight = async (heightEl) => {
  let images = Array.from(document.querySelectorAll(`${heightEl} img`));
  await Promise.all(images.map(image => {
    return new Promise(resolve => {
      if (image.complete) {
        resolve();
      } else {
        image.addEventListener('load', resolve);
        image.addEventListener('error', resolve);
      }
    });
  }));

  let calHeight = Array.from(document.querySelectorAll(heightEl));
  let calHeightMax = calHeight.map(height => height.scrollHeight);
  let calHeightMaxNum = Math.max(...calHeightMax);

  if (calHeight.length > 0) {
    calHeight.forEach((block) => block.style.height = `${calHeightMaxNum}px`);
  }

  window.addEventListener('resize', debounce(() => {
    setHeight(heightEl);
  }, 250));
  };


// INCREMENT NUMBERS
const incrementFunction = (num) =>{
	let increment = Array.from(document.querySelectorAll(num))
	if(increment.length>0){
		increment.forEach((inc) =>{
			let incrementMax = inc.dataset.number
			let incrementCountLoop = 0
			let incrementAnimation = setInterval(()=>{
				incrementCountLoop++
				inc.textContent = incrementCountLoop
				incrementCountLoop == incrementMax &&	clearInterval(incrementAnimation)
			}, 10)
		})
	}
}


// SOCIAL MEDIA
const shareSocial = (type, url) => {
    let w = 600,h = 450, pos_x, pos_y
    pos_x=(screen.width/2)-(w/2)
    pos_y=(screen.height/2)-(h/2)
    switch(type) {
    case 'facebook':
    window.open('http://www.facebook.com/sharer.php?u='+url+'','mywindow', 'toolbar=0, status=0, left='+pos_x+', top='+pos_y+', width='+w+', height='+h);
    break;
    case 'twitter':
    window.open('https://twitter.com/intent/tweet?text=&url='+url+'&via=proyecto','mywindow', 'toolbar=0, status=0, left='+pos_x+', top='+pos_y+', width='+w+', height='+h);
    break;
    case 'pinterest':
    window.open('https://pinterest.com/pin/create/button/?media='+url+'','mywindow', 'toolbar=0, status=0, left='+pos_x+', top='+pos_y+', width='+w+', height='+h);
    break;
    case 'linkedin':
    window.open('http://www.linkedin.com/shareArticle?url='+url+'','mywindow', 'toolbar=0, status=0, left='+pos_x+', top='+pos_y+', width='+w+', height='+h);
    break;
    }
}


function initCustomSelect(selectContainer,selectStatus) {
  const selectCustomPitcher = selectContainer.querySelector('.select-custom--pitcher');
  const selectCustomSelected = selectContainer.querySelector('.select-custom-selected-option--text');
  const selectCustomOption = Array.from(selectContainer.querySelectorAll('.select-custom-option-content--text'));
  const selectCustomDropdown = selectContainer.querySelector('.select-custom--options');

  selectCustomPitcher.addEventListener('click', (e) => {
    const isDropdownVisible = selectCustomDropdown.classList.contains('---show');

    const allSelectContainers = document.querySelectorAll('.select--custom');
    allSelectContainers.forEach((container) => {
      const dropdown = container.querySelector('.select-custom--options');
      dropdown.classList.remove('---show');
    });

    if (!isDropdownVisible) {
      selectCustomDropdown.classList.add('---show');
    }
    e.stopPropagation();
  });

  document.addEventListener('click', () => {
    const allSelectContainers = document.querySelectorAll('.select--custom');
    allSelectContainers.forEach((container) => {
      const dropdown = container.querySelector('.select-custom--options');
      dropdown.classList.remove('---show');
    });
  });

  selectCustomOption.forEach((option) => {
    option.addEventListener('click', () => {
      selectCustomOption.forEach((selected) => selected.classList.remove('---selected'));
      option.classList.add('---selected');
      selectCustomSelected.textContent = option.textContent;
    });
  });
	if(selectStatus){
		const firstOption = selectCustomOption[0];
		if (firstOption) {
			firstOption.click();
		}
	}
 
}

const selectContainers = document.querySelectorAll('.select--custom');
selectContainers.forEach((container) => {
  initCustomSelect(container);
});


function initCustomSelectInner(selectContainer,selectStatus) {
  const selectCustomPitcher = selectContainer.querySelector('.select-custom--pitcher');
  const selectCustomSelected = selectContainer.querySelector('.select-custom-selected-option--text');
  const selectCustomOption = Array.from(selectContainer.querySelectorAll('.select-custom-option-content--text'));
  const selectCustomDropdown = selectContainer.querySelector('.select-custom--options');

  selectCustomPitcher.addEventListener('click', (e) => {
    const isDropdownVisible = selectCustomDropdown.classList.contains('---show');

    const allSelectContainers = document.querySelectorAll('.select--custom');
    allSelectContainers.forEach((container) => {
      const dropdown = container.querySelector('.select-custom--options');
      dropdown.classList.remove('---show');
    });

    if (!isDropdownVisible) {
      selectCustomDropdown.classList.add('---show');
    }
    e.stopPropagation();
  });

  document.addEventListener('click', () => {
    const allSelectContainers = document.querySelectorAll('.select--custom');
    allSelectContainers.forEach((container) => {
      const dropdown = container.querySelector('.select-custom--options');
      dropdown.classList.remove('---show');
    });
  });

  selectCustomOption.forEach((option) => {
    option.addEventListener('click', () => {
      selectCustomOption.forEach((selected) => selected.classList.remove('---selected'));
      option.classList.add('---selected');
      selectCustomSelected.innerHTML = option.innerHTML;
    });
  });
	if(selectStatus){
		const firstOption = selectCustomOption[0];
		if (firstOption) {
			firstOption.click();
		}
	}
 
}

const selectContainersInner = document.querySelectorAll('.select--custom');
selectContainers.forEach((container) => {
  initCustomSelectInner(container);
});
