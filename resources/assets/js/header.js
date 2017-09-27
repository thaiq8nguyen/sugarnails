

let header  = (function(){


    const deviceWidth = window.innerWidth;
    const $navBarList =  $('.navbar-burger');
    const $navBarMenu =  $('.navbar-menu');


    const init = function(){
        $navBarList.on('click', function(){
            if($navBarList.length > 0){
                $navBarMenu.toggle('fast', function(){
                    $(this).toggleClass('is-active')
                });
            }
        });
    };

    return{

        init: init,
    }
}());

$(document).ready(header.init());