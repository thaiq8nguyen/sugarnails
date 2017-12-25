import Instafeed from 'instafeed.js';
import 'owl.carousel';

$(document).ready(function(){
    let $happyNewYear = $('#happy-new-year');
    let $fromSugarNails = $('#from-sugar-nails');

    $happyNewYear.addClass('animated slideInDown');


    setTimeout(function(){
        $happyNewYear.addClass('hidden');
        $fromSugarNails.removeClass('hidden').addClass('animated slideInUp')
        setTimeout(function(){
            $fromSugarNails.addClass('hidden');
            $happyNewYear.removeClass().addClass('animated zoomIn');
        },10000);
    },5000);



    let feed = new Instafeed({
        get:'user',
        userId:'792267805',
        accessToken:'792267805.6a4961b.d608d196b8e34261b4e0fcec407abde2',
        resolution: 'standard_resolution',
        template:
        '<div class = "image-container">' +
        '<nav class = "level">' +
        '<div class = "level-item has-text-centered">' +
        '<div>' +
        '<img src = "../images/signage/elements/web_champagne_bottle.png" class = "star-images" alt="star-images">' +
        '<p class = "likes">{{likes}} likes</p>' +
        '</div>' +

        '</div>' +

        '</nav>' +

        '<img src = "{{image}}" width="{{width}}" height="{{height}}">' +

        '</div>',
        after:function(){
            $('.owl-carousel').owlCarousel({

                nav:false,
                items:3,
                loop:true,
                margin:5,
                animateOut: 'fadeOut',
                autoplay:true,
                autoplaySpeed: 250,
                sortBy:'most-recent',

            });

        }




    });
    feed.run();

});