
function shuffle(feedbacks){
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
}
$(function(){

    const $container = $('#feedbacks-container');
    const template = $('#template').html();
    const $templateClone = $(template);
    const greeting = '<div class = "media">' +
        '<div class = "media-left"></div><div class = "media-content">' +
        '<div class = "content has-text-centered">' +
        '<p class = "greeting">What our clients have said about Sugar Nails ?</p>' +
        '</div></div></div>';

    const thanks = '<div class = "media">' +
        '<div class = "media-left"></div><div class = "media-content">' +
        '<div class = "content has-text-centered">' +
        '<p class = "thanks animated zoomIn">Thank You!</p>' +
        '</div></div></div>';




    play();
    setInterval(function(){

        play();

    },60000);

    function play(){

        const $shuffledFeedbacks = shuffle($templateClone.filter('.media'));

        setTimeout(function(){
            $container.html('').append(greeting);
        },1000);


        $shuffledFeedbacks.filter('.media').each(function(index, value){
            console.log('start');

            setTimeout(function(){
                $container.html('').append(value);
            }, 5000 * (index + 1));


        });

        setTimeout(function(){
            $container.html('').append(thanks);
        },55000);
    }

});




