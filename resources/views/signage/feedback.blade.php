<!doctype html>
<html lang = "en">
    <head>
        <meta name="csrf-token" content = "{{ csrf_token() }}">
        <title>Feedback Signage</title>
        <link rel = "stylesheet" href = "{{ asset('/css/bulma.css') }}">
        <link rel = "stylesheet" href = "{{ asset('/css/animate.min.css') }}">

        <style>
            @import url('https://fonts.googleapis.com/css?family=Roboto');
            @import url('https://fonts.googleapis.com/css?family=Dancing+Script');

            body{
                background: url('/images/signage/signage_feedback.png');
                width:1920px;
                height:1080px;
            }

            .greeting{

                font-size:64px;
                font-weight: bold;
                font-family: 'Roboto', sans-serif;

            }
            .thanks{

                font-size:128px;
                font-weight: bold;
                font-family: 'Dancing Script', cursive;

            }
            #feedbacks-container{
                margin-top: 15%;
            }
            .review{
                font-size: 58px;
                font-weight: 400;
            }
            .customer-name{
                font-size:56px;
                font-family: 'Dancing Script', cursive;
            }

        </style>

    </head>
    <body>
        <section class = "section">

            <div class = "container" id = "feedbacks-container">

            </div>

        </section>
        <template id = "template">

                @foreach($reviews as $review)
                    <div class = "media">
                        <div class = "media-left"><img class = "animated fadeInLeft" src = "{{ $review['social_media'] }}" alt = "logo"></div>
                        <div class = "media-content">
                            <div class = "content has-text-centered">
                                <p class = "animated fadeInDown review">{{ $review['review'] }}</p>
                                <p class = "animated fadeInUp customer-name">{{ $review['customer_name'] }}</p>'
                            </div>
                        </div>
                    </div>
                @endforeach




        </template>
        <script src = {{ asset('/js/feedback.js') }}></script>
    </body>


</html>