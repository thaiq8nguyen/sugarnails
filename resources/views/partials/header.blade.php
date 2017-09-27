
<!--Top Bar------------------------------------------------------------------------------------------------------------>
<div class = "hero light-primary-color">
    <div class = "hero-body">
        <div class = "container">
            <div class = "level">
                <div class = "level-left">
                    <div class = "level-item">
                        <div class = "columns is-mobile">
                            <div class = "column">
                                <a class = "navbar-item" href="https://www.instagram.com/sugarnailsalon/">
                                    <i class = "fa fa-instagram fa-2x"></i>
                                </a>
                            </div>
                            <div class = "column">
                                <a class = "navbar-item" href="https://www.facebook.com/sugarnailspa/">
                                    <i class = "fa fa-facebook fa-2x"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class = "level-right">
                    <div class = "level-item">
                        <div class = "columns is-mobile">
                            <div class = "column is-half">
                                <div class = "media">
                                    <div class = "media-left">
                                        <i class = "fa fa-phone fa-2x"></i>
                                    </div>
                                    <div class = "media-content">
                                        <p class = "is-size-6">818 754 1182</p>
                                    </div>
                                </div>

                            </div>
                            <div class = "column is-half">
                                <div class = "media">
                                    <div class = "media-left">
                                        <i class = "fa fa-clock-o fa-2x"></i>
                                    </div>
                                    <div class = "media-content">
                                        <p class = "is-size-6 has-text-weight-bold">Tues - Sun</p>
                                        <p class = "is-size-6">9:30 to 7</p>
                                        <p class = "is-size-6 has-text-weight-bold">Monday</p>
                                        <p class = "is-size-6">11 to 7</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Top Bar------------------------------------------------------------------------------------------------------------>
<!--Nav Bar------------------------------------------------------------------------------------------------------------>
<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class = "container">
        <div class = "navbar-brand">
            <a class = "navbar-item" href = "{{ route('welcome') }}">
                <img src = "{{ asset('/images/web_logo.png') }}">
            </a>
            <button class="button navbar-burger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <div class = "navbar-menu nav-right">
            <div class = "navbar-end">
                <a class="navbar-item" href="{{ route('services') }}">
                    Services
                </a>
                <a class="navbar-item" href="{{ route('about') }}">
                    About Us
                </a>
            </div>
        </div>
    </div>
</nav>
<!--Nav Bar------------------------------------------------------------------------------------------------------------>