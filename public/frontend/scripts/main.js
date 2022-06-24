$(document).ready(function(){

  $("#topBtn").click(function(){
      $('html ,body').animate({scrollTop : 400},80);
  });
});


/**
   * Scroll top button
   */
 const scrollTop = document.querySelector('.scroll-top');
 if (scrollTop) {
   const togglescrollTop = function() {
     window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
   }
   window.addEventListener('load', togglescrollTop);
   document.addEventListener('scroll', togglescrollTop);
   scrollTop.addEventListener('click', window.scrollTo({
     top: 0,
     behavior: 'smooth'
   }));
 }