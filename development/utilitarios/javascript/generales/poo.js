

document.addEventListener("DOMContentLoaded", () => {
    class Pelicula{
        constructor(titulo, genero, duracion, rated){
            this.titulo = titulo,
            this.genero = genero,
            this.duracion = duracion,
            this.rated = rated
        }
        getTitulo(){
            return `La pelicula se llama ${this.titulo}`
        }
        getGenerp(){
            return `La pelicula es del genero de ${this.genero}`
        }
    }


    class Serie extends Pelicula{
        constructor(titulo,genero,duracion,rated,capitulos){
            super(titulo,genero,duracion,rated,capitulos);
            this.capitulos = capitulos
        }
    }


    let viernes13 = new Pelicula('Viernes 13', 'Terror','2 horas','+18')

    let IronMan = new Pelicula('Iron man', 'Superheroes','2 horas y 15 minutos','+14')

    let GOT = new Serie('Game of thrones', 'Fantasia','+24 horas','+14',30)

    console.log(viernes13)
    console.log(IronMan)
    console.log(GOT.getTitulo() )
})
