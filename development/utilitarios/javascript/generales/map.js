
document.addEventListener("DOMContentLoaded", () => {

	const initMap = () => {
	let MapG = Array.from(document.querySelectorAll('.map-g--map'))

	let style = [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}];

	MapG.forEach((el,index) =>{
		let latitud = el.dataset.latitud
		let longitud = el.dataset.longitud
		let marker = el.dataset.marker
		let info = el.dataset.info
		let imagen = el.dataset.imagen
		let zoom = parseInt(el.dataset.zoom)
		let imagenWidth = el.dataset.imagenwidth
		let imagenHeight = el.dataset.imagenheight

		let title = el.dataset.title
		let text = el.dataset.text

		let latlng = new google.maps.LatLng(latitud,longitud)
		let map = new google.maps.Map(el, {
			zoom: zoom,
			center: latlng,
			styles: style
		});
		
		let contentString = `<div id="content">
		<h1 id="firstHeading" class="firstHeading">${title}</h1>
		<div id="bodyContent">
		<p>${text}</p>
		</div>
		</div>`;
		let infowindow = new google.maps.InfoWindow({
			content: contentString
		});        
		switch(marker){
			case 'image':
				let icon = {
					url: imagen,
					scaledSize: new google.maps.Size(imagenWidth, imagenHeight),
				};
				let markerDefault = new google.maps.Marker({
				position: latlng,
				map: map,
				icon: icon
				});
				markerDefault.addListener('click', function() {
					infowindow.open(el, markerDefault);
				});
			break
			default:
				let markerDefault2 = new google.maps.Marker({
				position: latlng,
				map: map,
				});
				markerDefault2.addListener('click', function() {
					infowindow.open(el, markerDefault2);
				});
			break
		}
		
	})
};
initMap()





})