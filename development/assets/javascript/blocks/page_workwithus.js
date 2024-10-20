document.addEventListener("DOMContentLoaded", () => {

  //Acordion
  acordionFunction2('.workwithus-jobs-item--pitcher', '.workwithus-jobs-item--content', true);

  //Form Sticky
  let SedeSticky = document.querySelector('.workwithus-form--sticky')
  if(SedeSticky){
    var stickyEl = new Sticksy('.workwithus-form--sticky', {
      topSpacing: 140,
      listen: true
    })
    stickyEl.onStateChanged = function (state) {
      if (state === 'fixed') stickyEl.nodeRef.classList.add('widget--sticky')
      else stickyEl.nodeRef.classList.remove('widget--sticky')
    }
  }

});
