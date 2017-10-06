
(function(){

    $.ajax({
        url:'/api/reviews',
        headers:{
            'Accept':'application/json',
            'Authorization':'Bearer    eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImZhMmJmNzVmMDFhZmE4ZmQ0NTYxZGQ2NmNhMGJiZTlkYjVkMjRhNTJjZTVkZmRjNzQ4MWJjNmRlMTdmNzIxNmQxOTI4ZTI1NjZmOGRlM2I3In0.eyJhdWQiOiIxIiwianRpIjoiZmEyYmY3NWYwMWFmYThmZDQ1NjFkZDY2Y2EwYmJlOWRiNWQyNGE1MmNlNWRmZGM3NDgxYmM2ZGUxN2Y3MjE2ZDE5MjhlMjU2NmY4ZGUzYjciLCJpYXQiOjE1MDcyNjYxNDksIm5iZiI6MTUwNzI2NjE0OSwiZXhwIjoxNTM4ODAyMTQ5LCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.ISYkx-eCYupEtevJQ0JcY5pEjN1jeBaaepHAi2Bu1upOis7La5E5AwnCbk3LMGbJ3khHL4lI30lY_Erzbzc4pGiPwGp6xSHgFfCnCJlt2pXnrE0TG3AQeeC2LScGmvHRNuAkar9BbE9xlbavQC83LTiielApZ_VpF-msFkB--MYxOSFWEl9Hat2FlMJxemmxE6l3s0XP4CCCEowimPmt_dl936BU7kwzhakF_frNeLB-_9LPapNhG7j8aIHUQAW5QGtEurkK2ih3JY5AvULsV_QMNJS_cqAsZTMDCxc2N6WleOHil_emtCPr5LhEm0O3n_cuhSzl4hC0bET3RaZBfGTAFmBHnVTAB93-5BDeyONpr4yuKm-k-Mu6TekIK9LrJQmo9dr_k7umzPmYP8QtrhYG1C-Yj3JkiP2IWD0_nGiEMGrG1JWGoZ4sFA4te9ORn7yeNmveMam4siB2Ljl6x4lWJRfG-t8zTbHGPSw5PfhRgFl_HQuI_GSExU3y_tYCJjlkEaBeKmNMGP4hnkzqcCz1D6xWcmXfCVGCDgnJcTJGm3uNXybg5mjPX_PjbaWPKlmudOKxFUOD8pbsryTQEFqKGgYq-563oq81U7vHkVaWKotWj_5tTEaDlS0FRxsnJpt5-AbkzldDXSc5EMTsFYC9xiiE8gKIgQfcq1TUofY'}
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




