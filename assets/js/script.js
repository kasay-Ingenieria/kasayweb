const swiper = new Swiper('.swiper', {
  effect: "coverflow",
  loop: true,
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: 3, 
  spaceBetween: 30,

  coverflowEffect: {
    rotate: 2,
    stretch: -155,
    depth: 350,
    modifier: 1,
    slideShadows: false
  },

  autoplay: {
    delay: 3000,
    disableOnInteraction: false
  },

  pagination: {
    el: ".swiper-pagination",
    clickable: true
  },
  
  breakpoints: {
  0: {
    slidesPerView: 1
  },
  768: {
    slidesPerView: 2
  },
  1024: {
    slidesPerView: 3
  }
}

});
