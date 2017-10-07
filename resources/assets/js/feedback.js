
(function(){

    $.ajax({
        url:'/api/reviews',
        headers: {

            'Accept':'application/json',

            'Authorization':'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjAyNmY0ZWI4YjE4MTI0NjU1ZWY0YTYyNTkwZDAyNTU5YWNjMjcyYjZkNTgzZjNhYzZhNjkzYTY3OTYwYWY5NDIzMDI3NmQwZTQyY2E5NDY2In0.eyJhdWQiOiIxIiwianRpIjoiMDI2ZjRlYjhiMTgxMjQ2NTVlZjRhNjI1OTBkMDI1NTlhY2MyNzJiNmQ1ODNmM2FjNmE2OTNhNjc5NjBhZjk0MjMwMjc2ZDBlNDJjYTk0NjYiLCJpYXQiOjE1MDczMzgyMjMsIm5iZiI6MTUwNzMzODIyMywiZXhwIjoxNTM4ODc0MjIzLCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.Cev5AVTaCMqJUAJhBCp0Hx6eBnevQUOIgTryDDdgKAqUyJPECJffWsEM_b8CsWlP6YawyIgpq-I4VZg1k7xGP5ZdLvxWTpVEs_46hNX_g4yibYAtVIbrsYBHTayO9QZBp6oJDB4lZqImR-09H6yNayQ2N7exfoP537a2m5Tv5Fx6QZZqPq4TWDj4Vdv1gimoE3D4d6pQS1uCUtvy1njcmfbmF7NejGO2YalAWmrzEBykispVBAS2iYbbkJ28Um9z4f1oWhPkvSRzcYVi86TlEUcoxQ2txopOkH5uDZLx7ycCZSUZX-YsZDOjAY8YVeT2iqs6CB8jtns1u5IbQuDX2c6fWbH6BQz6-hZ9omqUoA7VojB_PcBf3ZRPljFpl_j7wSi7sDMZ1znIWPct8M5dFF7cj3rXcXXhHzTl72fR5wEoz8fVyLeqD_502w9upjjpo5kO3xCt092He9lRtTaFNgDyT4c-W0xCPPvnbEIrAvKKg-GWsqnjm1q8JcFWdg5z1LYn09t_VPKJQqvUzIEXS4Q3P1Iu9tDxtE6Vo19bOEbnJ8ITVs5o0rWGc3CCV9sOBahsUiUnrdQnTvG-OvkkY-gIwid7EGSojdF5WPlT8yxuvybqYD3ZCySNtg5bcZLF2mHNjbNYMVvFvPzhxe3r8qsQ4qw_yxRErj4WpaMJL8Q'
        }
    }).done(function(feedbacks){
        display(feedbacks)
    });


    let shuffleFeedbacks = function(feedbacks){
        let currentIndex = feedbacks.length, temporaryValue, randomIndex;

        // While there remain elements to shuffle...
        while (0 !== currentIndex) {

            // Pick a remaining element...
            randomIndex = Math.floor(Math.random() * currentIndex);
            currentIndex -= 1;

            // And swap it with the current element.
            temporaryValue = feedbacks[currentIndex];
            feedbacks[currentIndex] = feedbacks[randomIndex];
            feedbacks[randomIndex] = temporaryValue;
        }

        return feedbacks;
    };

    let display = function(feedbacks){

        $(document).ready(function(){
            let $container = $('#feedbacks-container');
            let feedback = '';

            setTimeout(function(){
                let shuffled = shuffleFeedbacks(feedbacks);
                for(let i = 0; i < shuffled.length; i++ ) {
                    setTimeout(function () {

                        feedback = '<div class = "media">' +
                            '<div class = "media-left"><img class = "animated fadeInLeft" src = "' + shuffled[i].social_media + '" alt = "logo"></div>' +
                            '<div class = "media-content">' +
                            '<div class = "content has-text-centered">' +
                            '<p class = "animated fadeInDown review">' + shuffled[i].review + '</p>' +
                            '<p class = "animated fadeInUp customer-name">' + shuffled[i].customer_name + '</p>' +
                            '</div>' +
                            '</div>' +
                            '</div>';

                        $container.html('').append(feedback);

                    }, 5000 * i);
                }

            },50000);
        });
    };
})();




