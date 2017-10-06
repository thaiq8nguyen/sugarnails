<!doctype html>
<html lang="en">
    <head>
        <meta name="csrf-token" content = "{{ csrf_token() }}">
        <title>Passport</title>
        <link rel = "stylesheet" href = "{{ asset('/css/bootstrap.css') }}">

    </head>
    <body>
        <section class = "section">
            <div class = "container" id = "root">
                <h1>Passport</h1>
                <authorized-clients></authorized-clients>
                <clients></clients>
                <personal-access-token></personal-access-token>

            </div>
        </section>
        <script src = "{{ asset('js/jquery.min.js') }}"></script>
        <script src = "{{ asset('js/bootstrap.min.js') }}"></script>
        <script src = "{{ asset('js/app.js') }}"></script>
    </body>
</html>


