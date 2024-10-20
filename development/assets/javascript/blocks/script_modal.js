document.addEventListener("DOMContentLoaded", () => {
    
	//General modal - popup video imagen
	let modalVideoURL = document.querySelector('.modal-video--url')
	let modalImagesURL = document.querySelector('.modal-images--url')  
	let modalclose = Array.from(document.querySelectorAll('.modal--close, .modal-overlay--close'))
	if (modalclose.length>0) {
		modalclose.forEach((modal) =>{
			modal.addEventListener('click', () =>{
				modal.parentElement.classList.remove('---show')
				modal.parentElement.parentElement.classList.remove('---show')
				modalVideoURL.src= ""
				modalImagesURL.src=""
			})
		})
	}

	// Modal Video
	let modalVideoPitcher = Array.from(document.querySelectorAll('.modal-pitcher---video'))
	let modalVideo = document.getElementById('modal--video')
	let modalVideoUrl =  document.querySelector('.modal-video--url')
	if(modalVideoPitcher.length>0){
		modalVideoPitcher.forEach((video) =>{
			video.addEventListener('click', evt =>{
				evt.preventDefault()
				let videoSrc = video.dataset.video
				let videoSrcLink = videoSrc.split("=");
				modalVideoUrl.src= 'https://www.youtube.com/embed/' + videoSrcLink[1]
				modalVideo.classList.add('---show')
			})
		})
	}


	// Modal Image
	let modalImagePitcher = document.getElementById('modal-pitcher--image')
	let modalImage = document.getElementById('modal--image')
	if (modalImagePitcher) {
		modalImagePitcher.addEventListener('click', e =>{
			e.preventDefault()
			modalImage.classList.add('---show')
		})
	}

	// Modal Images
	let modalImagesPitcher = Array.from(document.querySelectorAll('.modal-pitcher--images'))
	let modalImages = document.getElementById('modal--images')
	let modalImagesUrl =  document.querySelector('.modal-images--url')
	if(modalImagesPitcher.length>0){
		modalImagesPitcher.forEach((modal) =>{
			modal.addEventListener('click', evt =>{
				evt.preventDefault()
				let ImagesSrc = modal.dataset.imagen
				modalImagesUrl.src= ImagesSrc
				modalImages.classList.add('---show')
			})
		})
	}

	// Terms
	let modalTermsPitcher = Array.from(document.querySelectorAll('.modal-pitcher--terms'))
	let modalTerminos = document.getElementById('modal--terms')
	if (modalTermsPitcher.length>0) {
		modalTermsPitcher.forEach((modal)=>{
			modal.addEventListener('click', e =>{
			e.preventDefault()
			modalTerminos.classList.add('---show')
		})    
		})
	}

})