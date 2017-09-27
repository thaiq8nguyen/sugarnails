@extends('layouts.main')
@section('title','Sugar Nails')
@section('styles')
    <link rel = "stylesheet" href = "{{ asset('/css/owl.carousel.css') }}">
    <link rel = "stylesheet" href = "{{ asset('/css/owl.theme.default.css') }}">
    <link rel = "stylesheet" href = "{{ asset('/css/welcome.css') }}">
@endsection
@section('scripts')
    <script src = "{{ asset('/js/carousel.js') }}"></script>
@endsection
@section('content')
    <section class = "hero">
        <div class = "owl-carousel owl-theme">
            <img class = "image" src="{{ asset('/images/welcome_image_1-80.jpg') }}">
            <img class = "image" src="{{ asset('/images/image_2.jpg') }} ">
            <img class = "image" src="{{ asset('/images/image_3.jpg') }} ">
            <img class = "image" src="{{ asset('/images/image_4.jpg') }} ">
            <img class = "image" src="{{ asset('/images/image_5.jpg') }} ">
        </div>
    </section>
    <section class = "hero default-primary-color" id = "general-info">
        <div class = "hero-body">
            <div class = "container">
                <div class = "columns">
                    <!--Contact-------------------------------------------------------------------------------------------->
                    <div class = "column is-one-third">
                        <p class = " is-size-1 has-text-centered">
                            <i class = "fa fa-phone accent-text-color"></i>
                            <span class = "contact-heading is-hidden-mobile">Appointment</span>
                        </p>
                        <div class = "content-top-buffer" id = "appointment-description">
                            <p class = "is-size-5 is-hidden-mobile">To best serve all of our customers we prefer you book an appointment
                                before you head to our store.
                            </p>
                            <p class = "has-text-centered is-size-3 has-text-weight-bold has-text-white content-top-buffer">
                                (818) 754 1182
                            </p>
                        </div>
                    </div>
                    <!--Contact-------------------------------------------------------------------------------------------->
                    <!--Location------------------------------------------------------------------------------------------->
                    <div class = "column is-one-third">
                        <p class = " is-size-1 has-text-centered">
                            <i class = "fa fa-map-marker accent-text-color"></i>
                            <span class = "contact-heading is-hidden-mobile">Location</span>
                        </p>
                        <div class = "content-top-buffer">
                            <p class = "is-size-5 is-hidden-mobile">
                                Sugar Nails is conveniently located at the heart of Valley Village at the
                                corner of Magnolia Blvd & Whitsett St.  Our address is:
                            </p>
                            <br>
                            <address class = "is-size-5 has-text-weight-bold has-text-centered">
                                12464 Magnolia Blvd<br>
                                Valley Village, CA 91607<br>
                            </address>
                            <div id = "map-container" class = "content-top-buffer">
                                <iframe
                                        width="100%"
                                        height="350"
                                        frameborder="1" style="border:5px;"
                                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA90Camoi8oY5cRXHA-jEyY2r2xVAJElhY
                                    &q=Sugar+Nails,91607" allowfullscreen>
                                </iframe>
                            </div>
                        </div>
                    </div>
                    <!--Location------------------------------------------------------------------------------------------->
                    <div class = "column is-one-third">
                        <p class = " is-size-1 has-text-centered">
                            <i class = "fa fa-clock-o accent-text-color"></i>
                            <span class = "contact-heading is-hidden-mobile">Hours</span>
                        </p>
                        <div id = "table-container" class = "">
                            <table class = "table is-bordered" id = "hours-table" align="center">
                                <tbody>
                                <tr>
                                    <th>Sunday</th>
                                    <td>9:30 - 7:00</td>
                                </tr>
                                <tr>
                                    <th>Monday</th>
                                    <td>11:00 - 7:00</td>
                                </tr>
                                <tr>
                                    <th>Tuesday</th>
                                    <td>9:30 - 7:00</td>
                                </tr>
                                <tr>
                                    <th>Wednesday</th>
                                    <td>9:30 - 7:00</td>
                                </tr>
                                <tr>
                                    <th>Thursday</th>
                                    <td>9:30 - 7:00</td>
                                </tr>
                                <tr>
                                    <th>Friday</th>
                                    <td>9:30 - 7:00</td>
                                </tr>
                                <tr>
                                    <th>Saturday</th>
                                    <td>9:30 - 7:00</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class = "hero light-primary-color" id = "social-media-section">
        <div class = "container">
            <div class = "level social-media-container is-mobile">
                <div class = "level-item has-text-centered social-media-level">
                    <div>
                        <p>
                            <figure class = "is-128x128 is-hidden-mobile">
                                <img src = "{{ asset('/images/elements/web_instagram_full_hd.png') }}">
                            </figure>

                            <figure class = "is-32x32 is-hidden-desktop">
                                <img src = "{{ asset('/images/elements/web_instagram_mobile.png') }}">
                            </figure>

                        </p>
                        <p class = "social-media-follower">1,632 followers</p>
                        <p class = "social-media-follower">869 posts</p>
                    </div>
                </div>
                <div class = "level-item has-text-centered social-media-level">
                    <div>
                        <p>
                            <figure class = "is-128x128 is-hidden-mobile">
                                <img src = "{{ asset('/images/elements/web_facebook_full_hd.png') }}" id = "facebook-media">
                            </figure>
                            <figure class = "is-32x32 is-hidden-desktop">
                                <img src = "{{ asset('/images/elements/web_facebook_mobile.png') }}">
                            </figure>

                        </p>
                        <p class = "social-media-follower">
                            <span class = "rating">4.5</span>
                            <span class = "star-rating">
                                <i class = "fa fa-star"></i>
                                <i class = "fa fa-star"></i>
                                <i class = "fa fa-star"></i>
                                <i class = "fa fa-star"></i>
                                <i class = "fa fa-star-half"></i>
                            </span>
                        </p>
                        <p class = "social-media-follower">89 likes</p>
                    </div>

                </div>
                <div class = "level-item has-text-centered social-media-level">
                    <div>
                        <p>
                            <figure class = "is-128x128 is-hidden-mobile">
                                <img src = "{{ asset('/images/elements/web_yelp_full_hd.png') }}" id = "facebook-media">
                            </figure>
                            <figure class = "is-32x32 is-hidden-desktop">
                                <img src = "{{ asset('/images/elements/web_yelp_mobile.png') }}">
                            </figure>
                        </p>
                        <p class = "social-media-follower">
                            <span class = "rating">4</span>
                            <span class = "star-rating">
                                <i class = "fa fa-star"></i>
                                <i class = "fa fa-star"></i>
                                <i class = "fa fa-star"></i>
                                <i class = "fa fa-star"></i>
                            </span>
                        </p>
                        <p class = "social-media-follower">311 reviews</p>
                    </div>

                </div>
            </div>
        </div>

    </section>
@endsection