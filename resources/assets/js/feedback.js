
(function(){

    $.ajax({
        url:'/api/reviews',
        headers:{
            'Accept':'application/json',
            'Authorization':'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjQzY2IwNTBmNTE4MGJhODVjYmE5MDJkMjNjYWU1ZjIxMjhlMzJmMGYyNDQ3MGI1ZDc1YTg1YmViMzA0NWIxYWE5Y2NlMWU5MWI5MDRlOTMyIn0.eyJhdWQiOiIxIiwianRpIjoiNDNjYjA1MGY1MTgwYmE4NWNiYTkwMmQyM2NhZTVmMjEyOGUzMmYwZjI0NDcwYjVkNzVhODViZWIzMDQ1YjFhYTljY2UxZTkxYjkwNGU5MzIiLCJpYXQiOjE1MDczMzQ0NzUsIm5iZiI6MTUwNzMzNDQ3NSwiZXhwIjoxNTM4ODcwNDc1LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.VoQu-rGvCiMR5Eh0shFhhfM-qe13AYKzLVfgkcw5YgWQetKQr-u-srwGv7oE51SlWvftSbf2T3PsBHOWH7jw8o0KQrgXHr9ACuxpBydGrWNkkGFj9zUeaHrjJ8S5XU82-idqKbhdQlA3h5H-D-f9DxMrGrV-45169ytt1r4D-yVB19pkuy6TaUrC2yyPB9z6bN-u15mcjTR-TO4GG6-r2XnBSofGdWwbpohNC9YY8JNoxxQ-yZOLmK7-cP00TeSvi5bBea2_q8bEYrj6WYkhajXGDp113W1qq42FBi_C5cvwxEPB8kIY2_PDkFOoDnmD-wxP7A0LzWzr1_x9yr-Quu-T7fwUgu7mGKGx1TNK7dYEcGuvfkJ7dUOwdSoK6qmEk0F9eMHlh7qquri2KejC_Osx4bPcg92CjoS-2I_nDgsS_Cvvgld_-ucuMLpK0iutAe8wRNreEDaTSyPj9jL5-mUp3Hu_hgkbQNABS544IAS1hQLuyHeO-OnbZkV-TTPj2Ch1OQRf_SS_vtjSl6TPVIy1b-qA7FZ1MyKQZw-jECrq_UCCXtKZFPz48z3mYFvRGgrspQT8mTFcVERyy9Hmr8pwpRgac3fGdA18dU6fuTEtYEmxgZcGPSobETPhrxLrVG0TeVTUrp563kKklYOdafp9BwF5E1vGzTD5Ml6csrA'}
    }).done(function(feedbacks){

        display(feedbacks);

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




