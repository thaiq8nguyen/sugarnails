import 'owl.carousel';


/*Image Carousel*/
$(document).ready(function(){


   $('.owl-carousel').owlCarousel({

       loop:true,
       nav:false,
       dots:true,
       items:1,
       autoplay: true,
       animateOut: 'fadeOut',

   });



});