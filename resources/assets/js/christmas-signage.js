import Instafeed from 'instafeed.js';
import 'owl.carousel';

$(document).ready(function(){

    let feed = new Instafeed({
        get:'user',
        userId:'792267805',
        accessToken:'792267805.6a4961b.d608d196b8e34261b4e0fcec407abde2',
        resolution: 'standard_resolution',
        template:
        '<div class = "image-container">' +
            '<nav class = "level">' +
                '<div class = "level-item ">' +
                    '<div>' +
                        '<img src = "../images/signage/elements/web_ornament_ball.png" class = "star-images" alt="star-images">' +
                        '<p class = "likes">{{likes}} likes</p>' +
                    '</div>' +
                    '<img src = "{{image}}" width="{{width}}" height="{{height}}">' +

                '</div>' +

            '</nav>' +





        '</div>',
        after:function(){
            $('.owl-carousel').owlCarousel({

                nav:false,
                items:3,
                loop:true,
                margin:10,
                autoHeight: 'auto',
                animateOut: 'fadeOut',
                autoplay:true,
                autoplaySpeed: 250,
                sortBy:'most-recent',

            });

        }




    });
    feed.run();

});