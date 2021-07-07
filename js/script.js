'use strict'


const modalOpen = document.querySelectorAll('.store-item__button'),
   modalClose = document.querySelector('[data-close]'),
   modal = document.querySelector('.modal'),
   modalContent = document.querySelector('.modal__content'),
   html = document.querySelector('html');

function openModalWindow() {
   modalOpen.forEach((item) => {
      item.addEventListener('click', (event) => {
         modal.classList.add('show');
         modal.classList.remove('hide');
         document.body.style.overflow = 'hidden';
      })
   })

}


function closeModal() {
   modal.classList.add('hide');
   modal.classList.remove('show');
   document.body.style.overflow = '';
}
function closeModalWindow() {
   modalClose.addEventListener('click', closeModal)

}
modal.addEventListener('click', (event) => {
   if (event.target === modal) {
      closeModal();
   }
})
document.addEventListener('keydown', (e) => {
   if (e.code === "Escape" && modal.classList.contains('show')) {
      closeModal();
   }
})

openModalWindow();
closeModalWindow();