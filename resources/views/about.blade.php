@extends('layouts.main')
@section('pageTitle','About')
@section('styles')
    <link rel = "stylesheet" href = "{{ asset('css/about.css') }}">
@endsection
@section('content')
    <section class = "hero">
        <div class = "container">
            <div class = "columns">
                <div class = "column is-one-quarter has-text-centered">
                    <figure>
                        <img src = "{{ asset('/images/web_about.jpg') }}">
                    </figure>

                </div>
                <div class = "column is-three-quarters text-description-content">

                    <h2 class  = "is-size-1 has-text-centered title">About Us</h2>
                    <p class = "is-size-5">
                        Sugar Nails established in 2013 with a great group of friends to commit to a mission.
                        To provide friendly nail care services with affordable price to our community.
                        We have always serve every guests as we would serve our
                        family members.  Our environmental friendly nail polishes came from recognized brand names and they
                        carry the top quality in the industry.  Our shelves are usually stocked with more than a hundred colors
                        that matches every occasions.  Whether you are looking for gel or normal polishes; we have them.
                        We open seven days a week so you can call us any time to schedule an appointment.
                    </p>
                    <ul id = "quality-badge">
                        <li>
                            <figure>
                                <img src = "{{ asset('/images/elements/web_about_quality_badge.png') }}">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <img src = "{{ asset('/images/elements/web_about_product_badge.png') }}">
                            </figure>
                        </li>
                    </ul>

                </div>
            </div>


        </div>

    </section>
@endsection