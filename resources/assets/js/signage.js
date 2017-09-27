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

            '<p class = "top-buffer about-container">' +

                '<span class = "is-size-3">' +
                    '<i class = "fa fa-heart fa-3x heart-icon"></i>{{likes}}' +
                '</span>' +

            '</p>' +
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





