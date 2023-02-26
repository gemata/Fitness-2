
//for header
let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');





menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

//for window scroll

window.onscroll = ()=>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');

    if(window.scrollY > 0 ){
        document.querySelector('.header').classList.add('active');

    }else{
        document.querySelector('.header').classList.remove('active');
    }
   
   
}


//for home section
var swiper = new Swiper(".home-slider", {
    spaceBetween: 20,
     grabCursor:true,
     loop:true,
     centeredSlides:true,
     autoplay: {
        delay: 8500,
        disableOnInteraction: false,
      },

    
  });

  //for feature section

  var swiper = new Swiper(".feature-slider", {
    spaceBetween: 20,
     grabCursor:true,
     loop:true,
     centeredSlides:true,
     autoplay: {
        delay: 8500,
        disableOnInteraction: false,
      },
      breakpoints:{
        0:{
            slidePerView: 1,
        },
        768:{
            slidePerView: 2,
        },
        991:{
            slidesPerView: 3,
        },
      },
    
  });

//for trainers section
var swiper = new Swiper(".trainer-slider", {
    spaceBetween: 20,
     grabCursor:true,
     loop:true,
     centeredSlides:true,
     autoplay: {
        delay: 8500,
        disableOnInteraction: false,
      },
      breakpoints:{
        0:{
            slidePerView: 1,
        },
        768:{
            slidePerView: 2,
        },
        991:{
            slidesPerView: 3,
        },
      },
    
  });

  var swiper = new Swiper(".schedule-slider", {
    spaceBetween: 20,
     grabCursor:true,
     loop:true,
     centeredSlides:true,
     autoplay: {
        delay: 8500,
        disableOnInteraction: false,
      },
      breakpoints:{
        0:{
            slidePerView: 1,
        },
        768:{
            slidePerView: 2,
        },
        991:{
            slidesPerView: 3,
        },
      },
    
  });

  //for blog section
var swiper = new Swiper(".blogs-slider", {
    spaceBetween: 20,
     grabCursor:true,
     loop:true,
     centeredSlides:true,
     autoplay: {
        delay: 8500,
        disableOnInteraction: false,
      },
      breakpoints:{
        0:{
            slidePerView: 1,
        },
        768:{
            slidePerView: 2,
        },
        991:{
            slidesPerView: 3,
        },
      },
    
  });

  


  async function contactScroll() {

    console.log("p");

        window.scrollTo({top: 0, behavior: 'smooth'});            
        await new Promise(r => setTimeout(r, 1000));
        window.scrollTo(0, document.body.scrollHeight);

};

if (performance.navigation.type == 1) {
    window.location.href= 'file:///C:/Users/blepo/OneDrive/Documents/GitHub/Fitness/index.php';
};