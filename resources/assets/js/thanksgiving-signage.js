import Instafeed from 'instafeed.js';
import 'owl.carousel';

$(document).ready(function(){

    let feed = new Instafeed({
        get:'user',
        userId:'792267805',
        accessToken:'792267805.6a4961b.d608d196b8e34261b4e0fcec407abde2',
        resolution: 'standard_resolution',
        template:'<div class = "image-container">' +

        '<img src = "{{image}}" width="{{width}}" height="{{height}}">' +
        '<div class = "media about-container">' +

            '<figure class = "media-left">' +
                '<img src = "../images/signage/elements/web_turkey.png" alt="turkey">' +
            '</figure>' +
            '<div class = "media-content is-size-2">+ {{likes}}</div>'+

        '</div>' +
        '</div>',
        after:function(){
            $('.owl-carousel').owlCarousel({

                nav:false,
                items:3,
                loop:true,
                margin:10,
                animateOut: 'fadeOut',
                autoplay:true,
                autoplaySpeed: 250,
                sortBy:'most-recent',

            });

        }




    });
    feed.run();

});