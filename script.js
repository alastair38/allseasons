jQuery(document).ready(function($) {

var mySwiper = new Swiper('.swiper-container',{
    pagination: '.pagination',
    loop:true,
    autoplay: 5000,
    speed: 1000,
    grabCursor: true,
    paginationClickable: true
  })
  $('.arrow-left').on('click', function(e){
    e.preventDefault()
    mySwiper.swipePrev()
  })
  $('.arrow-right').on('click', function(e){
    e.preventDefault()
    mySwiper.swipeNext()
  })



})