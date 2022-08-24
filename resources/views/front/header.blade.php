{{-- @php
    echo "<pre>";
    print_r($fsCatelogs->toArray());
    die();
@endphp --}}
<!-- Preloader -->
<div id="page-preloader">
    <div class="spinner centered-container"><img src="{{ asset('asset/images/preloader.jpg') }}" alt=""></div>
</div>
<!-- END Preloader -->
<header class="header fw-main-row">
    <div class="fw-container">
        <!-- Logo -->
        <div class="logo"><a href="{{ url('/') }}"><img src="{{ asset('asset/images/logo-light.png') }}"
                    alt=""></a></div>
        <!-- END Logo -->
        <div class="fr">
            <!-- Navigation -->
            <nav class="navigation">
                <ul class="menu">

                    <li class="menu-item-has-children current-menu-parent">
                        <a href="{{ url('/') }}">Home</a>

                    </li>

                    <li class="menu-item-has-children">
                        <a href="{{ url('/about') }}">About Us </a>

                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ url('/service') }}">Services</a>

                    </li>
                    <li class="menu-item-has-children">
                        <a href="{{ url('/blogs') }}">Blog</a>

                    </li>
                    <li class="menu-item-has-children submenu">
                        <a href="{{ url('/photography') }}">Photography</a>
                        <ul class="sub-menu">
                            @foreach ($fsCatelogs as $fsCatelog)
                            <li class="menu-item-has-children">
                                <a href="{{ url('/admin/home/catelogImages/'. $fsCatelog->slug) }}">{{ $fsCatelog->service_name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="menu-item-has-children submenu">
                        <a href="{{ url('/videography') }}">Videography</a>
                        <ul class="sub-menu">
                            <li class="menu-item-has-children">
                                <a href="{{ url('/weddings') }}"> weddings</a>

                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ url('/documentaries') }}">documentaries</a>

                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ url('/small_business_owner_profiles') }}"> small business owner
                                    profiles</a>

                        </ul>
                    </li>


                    <li class="menu-item-has-children submenu">
                        <a href="{{ url('/travel-blog') }}">Travel Blog</a>
                        <ul class="sub-menu">
                            <li class="menu-item-has-children">
                                <a href="{{ url('/Japan') }}"> Japan</a>

                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ url('/us_cities') }}">US cities</a>

                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ url('/amsterdam') }}">Amsterdam</a>

                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ url('/copenhagen') }}"> Copenhagen</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/contact') }}">CONTACT</a></li>
                </ul>
            </nav>
            <!-- END Navigation -->
            <!-- Search button -->
            <div class="search"><i class="icon-magnifying-glass"></i></div>
            <!-- END Search button -->
            <!-- Side panel button -->
            <div class="side-panel-button">
                <div></div>
            </div>
            <!-- END Side panel button -->
        </div>
        <!-- Search form -->
        <form action="#" class="header-search-form">
            <button type="submit" class="submit"><i class="icon-magnifying-glass"></i></button>
            <input type="text" class="input" placeholder="Search...">
            <div class="button-close"><i class="icon-access-denied"></i></div>
        </form>
        <!-- END Search form -->
    </div>
</header>
<!-- Side panel -->
<div class="side-panel-area dark-bg">
    <div class="button-close"><i class="icon-access-denied"></i></div>
    <div class="wrap">
        <!-- Mobile navigation -->
        <div class="spa-widget mob-navigation">
            <h5>Navigation</h5>
            <ul class="menu">
                <li class="menu-item-has-children current-menu-parent">
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{ url('/about') }}">About</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{ url('/service') }}">Service</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="{{ url('/blogs') }}">Blog</a>
                </li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
            </ul>
        </div>
        <!-- END Mobile navigation -->
        <!-- Widget item -->
        <div class="spa-widget">
            <h5>About Us</h5>
            <div class="content">
                <img src="{{ asset('asset/images/imgs/about-widget.jpg') }}" alt="Ella">
                <p>
                    Ces Collaborative is one of the leading names in the commercial photography and videography
                    industry that delivers world-class videos and captivating photographs expressing you and your
                    stories in the best way possible. We also write travel blogs and make documentaries for you sharing
                    your unique ideas and inspiring stories with the world.
                </p>
            </div>
        </div>
        <!-- END Widget -->
        <!-- Widget item -->
        <div class="spa-widget">
            <h5>Gallery</h5>
            <div class="gallery-widget fw-row">
                <div class="fw-col-xs-4"><a href="javascript:void(0)"><img
                            src="{{ asset('asset/images/imgs/gallery-widget1.jpg') }}" alt=""></a></div>
                <div class="fw-col-xs-4"><a href="javascript:void(0)"><img
                            src="{{ asset('asset/images/imgs/gallery-widget2.jpg') }}" alt=""></a></div>
                <div class="fw-col-xs-4"><a href="javascript:void(0)"><img
                            src="{{ asset('asset/images/imgs/gallery-widget3.jpg') }}" alt=""></a></div>
                <div class="fw-col-xs-4"><a href="javascript:void(0)"><img
                            src="{{ asset('asset/images/imgs/gallery-widget4.jpg') }}" alt=""></a></div>
                <div class="fw-col-xs-4"><a href="javascript:void(0)"><img
                            src="{{ asset('asset/images/imgs/gallery-widget5.jpg') }}" alt=""></a></div>
                <div class="fw-col-xs-4"><a href="javascript:void(0)"><img
                            src="{{ asset('asset/images/imgs/gallery-widget6.jpg') }}" alt=""></a></div>
            </div>
        </div>
        <!-- END Widget -->
        <!-- Widget item -->

        <!-- END Widget -->
        <!-- Widget item -->
        <div class="spa-widget">
            <h5>Tags</h5>
            <ul class="menu">
                <li><a href="{{ url('/professional_headshots') }}">Professional Headshots</a></li>
                <li><a href="{{ url('/family_portraits') }}">Family Pictures</a></li>
                <li> <a href="{{ url('/travel_blog') }}">Travel Destinations</a></li>
                <li><a href="{{ url('/photography') }}">Photoshoot</a></li>
                <li> <a href="{{ url('/blogs') }}">Blogging</a></li>
                <li><a href="{{ url('/videography') }}">Videography</a></li>
            </ul>
        </div>
        <!-- END Widget -->
        <!-- Widget item -->

        <!-- END Widget -->
        <!-- Copyright -->
        <div class="copyrighting">All rights reserved by Ces Collaborative | Designed By
            <a href="{{ url('zonewebsites.us') }}"> Zonewebsites</a>
        </div>
        <!-- END Copyright -->
    </div>
</div>
<!-- END Side panel -->
