



document.addEventListener("DOMContentLoaded", () => {
 
  //Filter
  let CategoriaAllForm = document.getElementById('filter-g--prueba')
  let CategoriaSelectAll = Array.from(document.querySelectorAll('.filter-g--cat'))

  if(CategoriaSelectAll){
      CategoriaSelectAll.forEach((el,i)=>{
          el.addEventListener('change', e =>{              
              CategoriaAllForm.submit()
          })
      })
    }
})