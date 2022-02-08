// Start of Toggling Side Bar

let sideBar = document.querySelector('.side-bar');

document.querySelector('#menu-btn').onclick = toggleActiveClass;

document.querySelector('#close-side-bar').onclick = toggleActiveClass;

function toggleActiveClass(){
    sideBar.classList.toggle('active');
}

let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = toggleSearchFormClass;

function toggleSearchFormClass(){
    searchForm.classList.toggle('active');
}

function removeSideBar_SearchForm(){
    sideBar.classList.remove('active');
    searchForm.classList.remove('active');
}

// End of Toggling Side Bar

// Start of Password Visibility Toggling Login Form

var passwordState = false;

function togglePasswordVisibility(){
  if (passwordState){
    document.getElementById("loginPassword").setAttribute("type" , "password");
    document.getElementById("loginEye").style.color = '#7a797e';
    passwordState = false;
  }
  else{
    document.getElementById("loginPassword").setAttribute("type" , "text");
    document.getElementById("loginEye").style.color = '#5887ef';
    passwordState = true;
  }
}

// End of Password Visibility Toggling Login Form

// Start of Password Visibility Toggling Register Form

var passwordStateRegister = false;

function togglePasswordVisibilityRegister(){
  if (passwordStateRegister){
    document.getElementById("registerPassword").setAttribute("type" , "password");
    document.getElementById("registerEye").style.color = '#7a797e';
    passwordStateRegister = false;
  }
  else{
    document.getElementById("registerPassword").setAttribute("type" , "text");
    document.getElementById("registerEye").style.color = '#5887ef';
    passwordStateRegister = true;
  }
}

// End of Password Visibility Toggling Register Form

// Start of Confirm Password Visibility Toggling Register Form

var passwordStateRegisterConfirm = false;

function togglePasswordVisibilityRegisterConfirm(){

  if (passwordStateRegister){
    document.getElementById("confirmRegisterPassword").setAttribute("type" , "password");
    document.getElementById("registerEyeConfirm").style.color = '#7a797e';
    passwordStateRegister = false;
  }
  else{
    document.getElementById("confirmRegisterPassword").setAttribute("type" , "text");
    document.getElementById("registerEyeConfirm").style.color = '#5887ef';
    passwordStateRegister = true;
  }
}

// End of Confirm Password Visibility Toggling Register Form

window.onscroll = removeSideBar_SearchForm;

document.querySelectorAll('.accordion-container .accordion').forEach(accordion=>{
  accordion.onclick = () =>{
    accordion.classList.toggle('active');
  }
});

var swiper = new Swiper(".home-slider", {
    loop:true,
    grabCursor:true,
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".review-slider", {
  loop:true,
  grabCursor:true,
  spaceBetween: 30,
  centeredSlides: false,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints:{
    450:{
      slidesPerView: 1,
    },
    768:{
      slidesPerView: 2,
    },
    1024:{
      slidesPerView: 3,
    },
  },
});

