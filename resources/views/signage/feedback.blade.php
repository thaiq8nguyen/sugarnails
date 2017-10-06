<!doctype html>
<html lang = "en">
    <head>
        <meta name="csrf-token" content = "{{ csrf_token() }}">
        <title>Feedback Signage</title>
        <link rel = "stylesheet" href = "{{ asset('/css/bulma.css') }}">
        <link rel = "stylesheet" href = "{{ asset('/css/animate.min.css') }}">

        <style>
            @import url('https://fonts.googleapis.com/css?family=Dancing+Script');

            body{
                background: url('/images/signage/signage_feedback.png');
                width:1920px;
                height:1080px;
            }

            #feedbacks-container{
                margin-top: 15%;
            }
            .review{
                font-size: 42px;
                font-weight: 400;
            }
            .customer-name{
                font-size:34px;
                font-family: 'Dancing Script', cursive;
            }

        </style>

    </head>
    <body>
        <section class = "section">

            <div class = "container" id = "feedbacks-container">

            </div>

        </section>
        <script src = {{ asset('/js/feedback.js') }}></script>
    </body>

</html>