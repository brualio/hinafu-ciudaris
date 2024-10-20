
//CUSTOM CURSOR
//<div id="cursor"></div>
let cursor_custom = document.getElementById('cursor');
if(cursor_custom){
  const onMouseMove = (e) =>{
    cursor_custom.style.left = e.pageX + 'px';
    cursor_custom.style.top = e.pageY + 'px';
  }
  document.addEventListener('mousemove', onMouseMove);
}
let image_popup_project = Array.from(document.querySelectorAll('.image---popup'))
image_popup_project.forEach((el,index) =>{
  el.addEventListener('mouseenter', e =>{
    cursor_custom.classList.add('active')
  })
  el.addEventListener('mouseleave', e =>{
    cursor_custom.classList.remove('active')
  })
})
//

//SCROLL TOP
let footer_ancla = document.getElementById("footer---ancla")
footer_ancla.addEventListener('click', e =>{
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
})
//

//ODD ITEM
let workOdd = Array.from(document.querySelectorAll('.work-gallery__item.w50'));
if(workOdd){
  let workOddReturn = workOdd.filter((num,index) => index % 2)
  workOddReturn.map(number => number.classList.add('workm-0'))
}
//

//CLOCK
function moveClock(){
	momentoActual = new Date()
	hora = momentoActual.getHours()
	minuto = momentoActual.getMinutes()
	segundo = momentoActual.getSeconds()
	str_segundo = new String (segundo)
	if (str_segundo.length == 1) 
		segundo = "0" + segundo
	str_minuto = new String (minuto)
	if (str_minuto.length == 1) 
		minuto = "0" + minuto
	str_hora = new String (hora)
	if (str_hora.length == 1) 
		hora = "0" + hora
	if(document.querySelector('.test')){
		document.querySelector('.test').textContent = minuto
	}
	setTimeout("moveClock()",1000)
}
//

//GROUP LETTERS
let groupLetters = (string) =>{
	var stringText = document.getElementById(string)
	var stringTxt = stringText.dataset.text
	var i = 0, length = stringTxt.length;
	for (i; i < stringTxt.length; i++) {
			stringText.innerHTML += `<span><i>` + stringTxt[i] + "" + "</i></span>";
	}
}
groupLetters('home-works--title2')

let groupString = (string) =>{
	var stringText = document.getElementById(string)
	var stringTxt = stringText.dataset.text
		var out = [];
		var StringSeparate = stringTxt.split(' ');
	 for (var j = 0; j < StringSeparate.length; j += 1) {
		out.push('<span><i>' + StringSeparate.slice(j, j+1).join(' ') + '</i></span>');
	}
	stringText.innerHTML = out.join(' ');
}
groupString('home-award--title')
//

//SHARE
//<a class="icon-share g-post--shareIn" href="javascript: void(0);" data-title="<?php the_title() ?>" data-url="<?php the_permalink(); ?>"></a>
let pitcherShareIn = Array.from(document.querySelectorAll('.g-post--shareIn'))
pitcherShareIn.forEach((el,index) =>{
  el.addEventListener('click', e =>{
    if(navigator.share){
      navigator.share({
        title: `${el.dataset.title}`,
        url: `${el.dataset.url}`
      }).then(() =>{
        console.log('thanks for sharing')
      })
      .catch(() =>{console.error})
    }else{
      //el.parentElement.parentElement.classList.remove('active')
    }
  })
})
//

//Select personalized foreach
let announcementtabItems = Array.from(document.querySelectorAll('.announcement--tab-link'))
announcementtabItems.map((item,index) =>{
	acordionFunction2(`.acordion2--pitcher${index}`, `.acordion2--content${index}`, true);
})



