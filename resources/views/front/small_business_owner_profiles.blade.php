@extends('front.layout')
@section('content')
<div class="banner-block fw-main-row small profiles" style="height: 720px;">
    <div class="item dark-bg" style="background-image: url({{ asset('asset/images/profile-1.jpg') }});">
        <div class="centered-container fw-container">
            <div class="h1 text-dark" style="color:#fff">Successful Small Business <br>Owners’ Profiles </div>

            <p class=" text-dark" style="color:#fff">Are you a small business owner who wants to share his story
                with the world? <br>Ces Collaborative covers success stories and portfolios of budding
                entrepreneurs who want to be in the spotlight. </p>

            <div class="social-links">
                <a href="#"><i class="social-icon-facebook-logo"></i></a>
                <a href="#"><i class="social-icon-instagram-social-network-logo-of-photo-camera"></i></a>
                <a href="#"><i class="social-icon-twitter-social-logotype"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="fw-container">
    <div class="fw-row row justify-content-center align-items-center py-3">
        <div class="fw-col-xs-12 fw-col-sm-5 fw-col-md-4">
            <div class="wedding-img profile-img">
                <img src="{{ asset('asset/images/profile-2.jpg') }}">
            </div>
        </div>
        <div class="fw-col-xs-12 fw-col-sm-7 fw-col-md-8 ">
            <div class="wedding-text profile-text">
                <h2>Sharing Your Portfolio and Success Story</h2>
                <P>Ces Collaborative provides a suitable platform for budding entrepreneurs and small business
                    owners to receive the desired public recognition for their hard work and ideas. We shoot
                    portfolios and success stories of small business owners who want to convey their stories to
                    others. Doing so highlights their work and helps them unfold their talent to a larger crowd.
                </P>

                <p><b> We add the following features to our business owner stories:</b></p>

                <div class="fw-row row">
                    <div class="fw-col-xs-12 fw-col-sm-12 fw-col-md-12">
                        <ul>
                            <li>The objective of The Business</li>
                            <li>The Strategy and the Approach</li>
                            <li>How Is It Helpful For Consumers</li>
                            <li>An Inspiring Personal Journey</li>
                            <li>The Future Scope</li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- Banner block -->
<div class="banner-block fw-main-row" style="height: 420px;">
    <div class="item" style="background-image: url({{ asset('asset/images/profile-4.jpg') }});">
        <div class="centered-container fw-container text-center">
            <div class="h2" style="color:#fff">Making A Difference In Small Entrepreneurship</div>
            <p class="big text-white" style="color:#fff">We Provide Spotlight to Successful Small Business
                Owners and budding entrepreneurs.
            </p>

        </div>
    </div>
</div>

@endsection
