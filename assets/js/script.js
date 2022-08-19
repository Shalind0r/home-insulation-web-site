//modal
const CLASS_LIST = {
   MODAL: 'img',
   MODAL_ACTIVE: '_active',
   TRIGGER_OPEN: 'zoom',
   TRIGGER_CLOSE: 'close'
};

document.addEventListener('click', (event) => {
   //open
   if (event.target.closest(`.${CLASS_LIST.TRIGGER_OPEN}`)) {
      console.log('open');
      event.preventDefault();

      const target = event.target.closest(`.${CLASS_LIST.TRIGGER_OPEN}`);
      const modalId = target.getAttribute('href').replace('#', '');
      const modal = document.getElementById(modalId);
      document.body.style.overflow = 'hidden';

      modal.classList.add(CLASS_LIST.MODAL_ACTIVE);
   }
   //close
   if (
      event.target.closest(`.${CLASS_LIST.TRIGGER_CLOSE}`) ||
      event.target.classList.contains(CLASS_LIST.MODAL_ACTIVE)
   ) {
      console.log('close');
      event.preventDefault();
      const modal = event.target.closest(`.${CLASS_LIST.MODAL}`);
      modal.classList.remove(CLASS_LIST.MODAL_ACTIVE);
      document.body.style.overflow = 'visible';
   }

});

//view more 
var more = document.querySelectorAll('.more');

for (var i = 0; i < more.length; i++) {
  more[i].addEventListener('click', function() {
    var showPerClick = 4;
    
    var hidden = this.parentNode.querySelectorAll('li.hidden');
    for (var i = 0; i < showPerClick; i++) {
      if (!hidden[i]) return this.outerHTML = "";

      hidden[i].classList.add('unhidden');
      hidden[i].classList.remove('hidden');
    }
  });
}
//carousel 
document.addEventListener('DOMContentLoaded', () => {
   const width = window.innerWidth
   if (width < 991){
      var swiper = new Swiper(".mySwiper", {
         slidesPerView: 1,
         loop: true,
         pagination: {
           el: ".swiper-pagination",
           clickable: true,
           dynamicBullets: true,
         },
         navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
         },
         autoplay: {
            delay: 3000,
         },
         breakpoints: {
            640: {
             slidesPerView: 2,
            },
          },
         
       });
     
   }
 })


