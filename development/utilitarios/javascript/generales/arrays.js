

document.addEventListener("DOMContentLoaded", () => {

    let Clubes = [
            {nombre: "Real Madrid", titulos: 12},
            {nombre: "Barcelona", titulos: 5},
            {nombre: "Bayern Munich", titulos: 4}
            ]

    console.log(Clubes)


    //FILTER
    let Clubesmas10titulos = Clubes.filter((club,index)=>{
        return club.titulos>10
    })

    console.log(Clubesmas10titulos)

    //MAP
    let ClubesNombres = Clubes.map((club,index)=>{
        return club.nombre
    })
    console.log(ClubesNombres)

    //REDUCE
    let SumaTitulos = Clubes.reduce((contador, siguiente)=>{
        return contador + siguiente.titulos
    },0)

    console.log(SumaTitulos)
})
