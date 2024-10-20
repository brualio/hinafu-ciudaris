
document.addEventListener("DOMContentLoaded", () => {

	// INPUT CHECKBOX
	let inputCheckbox = Array.from(document.querySelectorAll('.input--checkbox'))
	if(inputCheckbox.length>0) {
		inputCheckbox[0].classList.add('---checked')
		inputCheckbox.forEach((checkbox)=>{
			checkbox.addEventListener('change', e =>{
				e.target.checked
				? checkbox.classList.add('---checked')
				: checkbox.classList.remove('---checked')
			})
		})
	}

	// INPUT RADIOBUTTON
	let inputRadio = document.querySelectorAll('.input--radio input[type="radio"]')
	if(inputRadio.length>0){
		inputRadio[0].parentElement.parentElement.classList.add('---selected')
		inputRadio.forEach((radio) => {
			radio.addEventListener('change', () => {
				inputRadio.forEach((radio) => {
					radio.parentElement.parentElement.classList.remove('---selected')
				})
				radio.checked && radio.parentElement.parentElement.classList.add('---selected')
			})
		})
	}	

	// INPUT FILE
	let InputFile = Array.from(document.querySelectorAll('.input-file--js'))
	let InputFileText = document.getElementsByClassName('input-file--text')
	if (InputFile.length>0) {
		InputFile.forEach((file,index) =>{
		file.addEventListener('change', e =>{
			InputFileText[index].innerText = e.target.files[0].name
		})
	})
	}

	// INPUT FOCUS
	let inputFocus = Array.from(document.querySelectorAll('.input--animation .input-field--animation'))
	if (inputFocus.length>0) {
		inputFocus.forEach((input)=>{
			input.addEventListener('focus', () =>{
				input.parentElement.parentElement.parentElement.classList.add('---focus')
			})
			input.addEventListener('blur', () =>{
				if(input.value === "") {
					input.parentElement.parentElement.parentElement.classList.remove('---focus')
				}
			})
			if (input.value !=="") {
				input.parentElement.parentElement.parentElement.classList.add('---focus')
			}
		})
	}


	//ONLY LETTERS
	let inputLetters = Array.from(document.querySelectorAll('.input--letters'))
	if(inputLetters){
		inputLetters.forEach((input)=>{
			input.addEventListener('keypress', e =>{
				var inputValue = e.charCode;
				if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)){
					e.preventDefault();
				}
			})
		})
	}

	//ONLY NUMBERS
	let inputNumbers = Array.from(document.querySelectorAll('.input--numbers'))
	if(inputNumbers){
		inputNumbers.forEach((input)=>{
			input.addEventListener('keypress', e =>{
				var inputValue = e.charCode;
				if (inputValue > 31 && (inputValue < 47 || inputValue > 57)){
					e.preventDefault();
				}
			})
		})
	}


	let selectDate = Array.from(document.querySelectorAll('.input--date'))
  if(selectDate.length>0){
    flatpickr(".input--date",{
      dateFormat: "l j \\d\\e F, Y",
      locale: {
        firstDayOfWeek: 1,
        weekdays: {
          shorthand: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
          longhand: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],         
        }, 
        months: {
          shorthand: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Оct', 'Nov', 'Dic'],
          longhand: ['Enero', 'Febreo', 'Мarzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        },
      },
    })
  }

	
})