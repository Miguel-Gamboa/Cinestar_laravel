const wrapper = document.querySelector('.wrapper');

const loginLink = document.querySelector('.login-link');
loginLink.addEventListener('click', ()=>{wrapper.classList.remove('active')})

const registerLink = document.querySelector('.register-link');
registerLink.addEventListener('click', ()=>{wrapper.classList.add('active')})

const btnPopup = document.querySelector('.btnLogin-popup');
btnPopup.addEventListener('click', ()=>{wrapper.classList.add('active-popup')})

const iconClose = document.querySelector('.icon-close');
iconClose.addEventListener('click', ()=>{wrapper.classList.remove('active-popup')})