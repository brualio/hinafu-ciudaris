document.addEventListener("DOMContentLoaded", () => {

    //CHECKBOXS
    let CategoriaAll = Array.from(document.querySelectorAll('.filter-g--categoria'))
    let CategoriaAllForm = document.getElementById('filter-g--prueba')
    let SortList = document.getElementById('filter-g--sort')

    if(CategoriaAll){
        CategoriaAll.forEach((el,i)=>{
            el.addEventListener('change', e =>{
                SortList.value = ""
                CategoriaAllForm.submit()
                
            })
        })
    }

    //SELECTS
    let CategoriaSelectAll = Array.from(document.querySelectorAll('.filter-g--cat'))
    if(CategoriaSelectAll){
        CategoriaSelectAll.forEach((el,i)=>{
            el.addEventListener('change', e =>{
                SortList.value = ""

                CategoriaAllForm.submit()
                
            })
        })
    }
    

    let CategoriaDelete = Array.from(document.querySelectorAll('.filter-g__selectedItemClose'))
    if(CategoriaDelete){
        CategoriaDelete.forEach((el,i)=>{
            el.addEventListener('click', e=>{
                e.preventDefault()
                let categoriaSelected = el.parentElement.dataset.filter
                let categoriaSelectedItem = document.querySelector('.filter-g--checkbox input[value="'+categoriaSelected+'"]')
                if(categoriaSelectedItem){
                    categoriaSelectedItem.checked = false
                }
                let categoriaSelectItem = document.querySelector('.filter-g--cat option[value="'+categoriaSelected+'"]')
                if(categoriaSelectItem){
                    categoriaSelectItem.parentElement.selectedIndex = "0"
                }
                SortList.value = ""
                CategoriaAllForm.submit()
            })
        })
    }

    if(SortList){
        SortList.addEventListener('change', e=>{
            const select = e.target;
            //const desc = select.options[select.selectedIndex].value;
            //document.querySelector('.filter-g--order').value = desc
            CategoriaAllForm.submit()
        })
    }


    let CategoriaBtn = document.querySelector('.filter-g--button')
    let CategoriaSidebar = document.querySelector('.filter-g--sidebar')
    let CategoriaSideOv = document.querySelector('.filter-g--overlay')
    if(CategoriaBtn){
        CategoriaBtn.addEventListener('click', e =>{
            e.preventDefault()
            CategoriaSidebar.classList.add('active')
            CategoriaSideOv.classList.add('active')
        })
    }

    let CategoriaSideClose = Array.from(document.querySelectorAll('.filter-g--overlay, .filter-g--sidebarClose'))
    if(CategoriaSideClose){
        CategoriaSideClose.forEach((el,i) =>{
            el.addEventListener('click', evt =>{
                CategoriaSidebar.classList.remove('active')
                CategoriaSideOv.classList.remove('active')
            })
        })
    }

})


