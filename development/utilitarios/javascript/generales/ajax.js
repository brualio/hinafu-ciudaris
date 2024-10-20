
document.addEventListener("DOMContentLoaded", () => {
    //GET txt or HTML
    let Loading = document.getElementById('loading')
    let LoadContent = document.getElementById('LoadContent')
    Loading.style.display = 'none'
    let getData = evt =>{
        Loading.style.display = 'block'
        let xhr = new XMLHttpRequest()
        xhr.open('GET','/assets/ajax/data.html', true)
        xhr.onreadystatechange = e =>{
            if(xhr.readyState==4 && xhr.status==200){
                Loading.style.display = 'none'
                LoadContent.innerHTML = xhr.responseText
            }
            else{
                Loading.style.display = 'none'
                LoadContent.innerHTML = `
                <p>No se encontro Data</p>
                `
            }
        }
        xhr.send()
    }
    
    let LoadButton = document.getElementById('LoadButton')
    if(LoadButton){
        LoadButton.addEventListener('click', getData)
    }

    //GET json
    let LoadContentJson = document.getElementById('LoadContentJson')
    let getDataJson = evt =>{
        let xhrJson = new XMLHttpRequest()
        xhrJson.open('GET','/assets/ajax/data.json', true)
        xhrJson.onreadystatechange = e =>{
            console.log(xhrJson.readyState)
            if(xhrJson.readyState==4 && xhrJson.status==200){
                LoadContentJson.innerHTML=`<p>Se encontro Data</p>`
                let DataJson = JSON.parse(xhrJson.responseText)
                console.log(DataJson)
                LoadContentJson.innerHTML= ''
                for(let data of DataJson.items){
                    LoadContentJson.innerHTML += `
                    <article>
                        <figure>
                            <img src="${data.imagen}"/>
                        </figure>
                        <p>${data.id} - ${data.titulo}</p>
                    </article>`
                }
            }
            else{
                LoadContentJson.innerHTML = `
                <p>No se encontro Data</p>`
            }
        }
        xhrJson.send()
    }


    let LoadButtonJson =  document.getElementById('LoadButtonJson')
    if(LoadButtonJson){
        LoadButtonJson.addEventListener('click', getDataJson)
    }
    
    //GET xml
    let LoadContentXML = document.getElementById('LoadContentXML')
    let getDataXML = evt =>{
        let xhrXML = new XMLHttpRequest()
        xhrXML.open('GET', '/assets/ajax/data.xml', true)
        xhrXML.onreadystatechange= e =>{
            if(xhrXML.readyState==4 && xhrXML.status==200){
                let dataXML = xhrXML.responseXML
                let dataXMLItem = dataXML.getElementsByTagName('comida')
                console.log(dataXMLItem)
                for(let i=0; i<dataXMLItem.length;i++){
                    LoadContentXML.innerHTML +=`
                    <article>
                        <h3>Nombre: ${dataXMLItem[i].getElementsByTagName("nombre")[0].childNodes[0].nodeValue} </h3>
                        <h4>Precio: ${dataXMLItem[i].getElementsByTagName("precio")[0].childNodes[0].nodeValue}</h4>
                        <p>Calorias: ${dataXMLItem[i].getElementsByTagName("calorias")[0].childNodes[0].nodeValue}</p>
                    </article>
                    `
                    console.log(dataXMLItem[i].getElementsByTagName("nombre")[0].childNodes[0].nodeValue)
                }
                
            }
            else{
                console.log('no conecto')
            }
        }
        xhrXML.send()
    }
    let LoadButtonXML =  document.getElementById('LoadButtonXML')
    if(LoadButtonXML){
        LoadButtonXML.addEventListener('click', getDataXML)
    }



    //FETCH API
    let contentExample = document.getElementById('contentExample')
	let CargarJson = () =>{
		fetch('/assets/ajax/data.json')
			.then(response =>{
				if(response.ok){
					return response.json()
				} else{
					throw "Error en solicitar la URL " + response.statusText
				}
				
			})
			.then(responseSend =>{
				console.log(responseSend)
				for(let data of responseSend.items){
					contentExample.innerHTML += `
					<article>
						<figure>
							<img src="${data.imagen}" />
						</figure>
						<h3>${data.titulo}</h3>
					</article>
					`
				}
			})
			.catch(error =>{
				contentExample.innerHTML += `
					<p>
						${error}
					</p>
					`
			})
		
	}
	

	let btn = document.getElementById('contentExampleButton')
	if(btn){
		btn.addEventListener('click', e =>{
			e.preventDefault()
			CargarJson()
		})
    }
    

    //Async Await
    /*let LoadContentFeachApi = document.getElementById('LoadContentFeachApi')
    let getDataApiFetch = async() =>{
        console.log('ok')
        try{
            let Result = await fetch('/assets/ajax/data.json')
            let ResultJson =  await Result.json()
            console.log(ResultJson)
            LoadContentFeachApi.innerHTML = ''
            for(let data of ResultJson.items){
                LoadContentFeachApi.innerHTML += `<p>${data.titulo}</p>`
            }
        }
        catch(error){
            LoadContentFeachApi.innerHTML = `<p>No se pudo conectar ${error}</p>`
        }
                    
    }
    let LoadButtonFechApi = document.getElementById('LoadButtonFechApi')
    if(LoadButtonFechApi){
        LoadButtonFechApi.addEventListener('click', getDataApiFetch)
    }*/


})