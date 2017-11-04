<!doctype html>
<html lang="en">
<head>
    <title>Thanksgiving Signage</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel = "stylesheet" href = "{{ asset('/css/bulma.css') }}">
    <link rel = "stylesheet" href = "{{ asset('/css/owl.carousel.css') }}">
    <link rel = "stylesheet" href = "{{ asset('/css/owl.theme.default.css') }}">
    <link rel = "stylesheet" href = "{{ asset('/css/signages/thanksgiving-signage.css') }}">
    <script src = {{ asset('/js/signages/thanksgiving-signage.js') }}></script>
</head>
<body>

<section class = "section">
    <div class = "bars"></div>
</section>
<section class = "section" id = "main">
    <div class = "container">
        <div id = "instafeed" class = "owl-carousel"></div>
    </div>
</section>
<section class = "section">
    <div class = "bars"></div>
</section>


</body>
</html>