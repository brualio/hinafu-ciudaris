
document.addEventListener("DOMContentLoaded", () => {


//Acordion
acordionFunction('.acordion--pitcher','block',true,0)
acordionFunction('.acordion--pitcher2','height',true,1)

acordionFunction2('.acordion2--pitcher', '.acordion2--content', true)

//Tab
tabFunction('.tab--example','.tab--link','.tab--content','index',true,true,0,0)
tabFunction('.tab--example2','.tab--link2','.tab--content2','data',true,true,2,0)

//Set height
setHeight('.calc--height')

//Background
changeBackground('.background--change')

//Image
changeImageSrc('.image--change')

//Increment
incrementFunction('.increment--number')

//Select personalized
let selectCustomExample = document.querySelector('.select-custom--example')
  if(selectCustomExample){
    initCustomSelectInner(selectCustomExample,true)
  }

//Ancla
let anclaElement = Array.from(document.querySelectorAll('.ancla--element'))
if(anclaElement.length>0){
	anclaElement.forEach((element)=>{
		element.addEventListener('click',e =>{
			e.preventDefault()
			let dataAncla = e.currentTarget.dataset.ancla
			let dataOffset = e.currentTarget.dataset.offset
			let AnclaYoffset = dataOffset === "header" ? document.querySelector('.main-header--scroll').offsetHeight : parseInt(dataOffset)
			let AnclaElement = document.getElementById(dataAncla)
			let AnclaBlock = AnclaElement.getBoundingClientRect().top + window.pageYOffset - AnclaYoffset
			window.scrollTo({top:AnclaBlock, behavior: 'smooth'})
		})
	})
}

//Ancla elements
let anclaElements = Array.from(document.querySelectorAll('.ancla--elements'))
if(anclaElements.length>0){
	anclaElements.forEach((element) => {
		element.addEventListener('click', e =>{
			e.preventDefault()
			if(e.currentTarget.classList.contains('ancla--elements')){
				anclaElements.map(ancla => ancla.classList.remove('---active'))
				element.classList.add('---active')
				let dataAncla = e.currentTarget.dataset.ancla
				let dataOffset = e.currentTarget.dataset.offset
				let AnclaYoffset = dataOffset === "header" ? document.querySelector('.main-header--scroll').offsetHeight : parseInt(dataOffset)
				let AnclaElement = document.getElementById(dataAncla)
				let AnclaBlock = AnclaElement.getBoundingClientRect().top + window.pageYOffset - AnclaYoffset
				window.scrollTo({top:AnclaBlock, behavior: 'smooth'})
			}
		})
	})
}


//Link parent
let linkParent = Array.from(document.querySelectorAll('.link--parent'))
if(linkParent.length>0){
	linkParent.forEach((link)=>{
		let linkParentURL = link.querySelector('a').href
		let linkParentTarget = link.querySelector('a').target
		link.style.cursor= 'pointer'
		link.addEventListener('click', e =>{
			linkParentTarget != ""
			? window.open(linkParentURL, '_blank')
			: window.location.assign(linkParentURL)	
		})
	})
}

let currentURL = window.location.href
let elementLocation = Array.from(document.querySelectorAll('.element--location'))
elementLocation.forEach((link) =>{
	let href = link.getAttribute('href')
	if (currentURL === href) {
		link.classList.add('---active')
	}
})

//Date
let currentDateDiv = document.getElementById('show-date')
if(currentDateDiv){
	let currentDate = new Date()
	var day = String(currentDate.getDate()).padStart(2, '0');
	var month = String(currentDate.getMonth() + 1).padStart(2, '0'); 
	var year = currentDate.getFullYear();
	var formatDate = day + '/' + month + '/' + year;
	currentDateDiv.textContent = formatDate
}
})