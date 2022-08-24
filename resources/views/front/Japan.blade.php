@extends('front.layout')
@section('content')
<div class="post-image" style="background-image: url({{ asset('asset/images/japan-bg.jpg') }});"></div>
<!-- Page header -->
<div class="page-header fw-main-row">
    <div class="fw-container" style="max-width:1200px">
        <div class="fw-row">
            <div class="fw-col-xs-12 fw-col-sm-8">
                <h1> Japan</h1>
                <div class="post-details"><span class="item"><i class="icon-calendar-2"></i><span>feb 03
                            2016</span></span><span class="item"><i class="icon-circular-clock"></i><span>6
                            min</span></span></div>
            </div>

        </div>
    </div>
</div>
<!-- END Page header -->
<!-- Main block -->
<main class="fw-main-row">
    <div class="fw-container site-content" style="max-width:1200px">
        <p>Are you interested in exploring the "Land of the Rising Sun" and sharing your story with others? If
            so, we can help you share your travel stories prepped up with other attributes like stunning
            photographs and engrossing videographies. Japan is the country where the past blends with the
            future. It is a high-tech world blended with pristine natural beauty. From bustling Tokyo to
            zen-like Kyoto, find different colors in the cities of Japan. </p>
        <p><img src="{{ asset('asset/images/japan-2.jpg') }}" alt="Post image"></p>
        <p>
            According to sources, Japan still enjoys one of the highest standards of living in the world. It is
            amazing that there is so much to see in a seemingly small island nation. Whether you want to sign up
            for a short stay in the hotels of Tokyo, Kyoto, Okinawa, and other cities or want to go for a road
            trip to Hokkaido, Kanazawa, and Sapporo, we can record your journey and post the travel itinerary in
            the online platform.
        </p>

        <p>
            From hotels, main attractions, and local markets to public transportations, we cover every aspect of
            your journey. Our travel blogs are insightful, informative as well as captivating. We film details
            like what to pack, where to stay, travel guides, food cuisines, travel shops and many more. A survey
            on overseas travel found that Japan is one of the top three travel destinations for tourists across
            the world every year. So pack your travel bag and embark on a journey to experience the majestic
            Mount Fiji, the historic Kyoto, the famous Shrine Island, the stunning Osaka castle, and many more.
        </p>
        <div class="fw-row">
            <div class="fw-col-xs-12 fw-col-sm-4"><img src="{{ asset('asset/images/j1.jpg') }}" alt=""></div>
            <div class="fw-col-xs-12 fw-col-sm-4"><img src="{{ asset('asset/images/j2.jpg') }}" alt=""></div>
            <div class="fw-col-xs-12 fw-col-sm-4"><img src="{{ asset('asset/images/j3.jpg') }}" alt=""></div>
        </div>
        <div class="fw-row" style="margin-top: 45px;margin-bottom: 45px;">
            <div class="fw-col-xs-12 fw-col-sm-6 fw-col-md-4">
                <div class="number-block-item">
                    <div class="num">01</div>
                    <div class="text">
                        <div class="h5 uppercase">What To Pack</div>
                        <p>We tell you exactly what to pack in your travel bags for a new journey. Different
                            countries have different cultures, climates, and of course, different rules. Our
                            travel blogs help you get prepared for a new destination.
                        </p>
                    </div>
                </div>
            </div>
            <div class="fw-col-xs-12 fw-col-sm-6 fw-col-md-4">
                <div class="number-block-item">
                    <div class="num">02</div>
                    <div class="text">
                        <div class="h5 uppercase">How To Travel
                        </div>
                        <p>Choosing the right means to transport may be confusing, especially if you are new to
                            the land. Our travel blogs are there to guide you choose the best means of travel
                            when you are traveling to new cities.
                        </p>
                    </div>
                </div>
            </div>
            <div class="fw-col-xs-12 fw-col-sm-6 fw-col-md-4">
                <div class="number-block-item">
                    <div class="num">03</div>
                    <div class="text">
                        <div class="h5 uppercase">Where To Stay</div>
                        <p>Your travel ideologies, destinations, and companions decide where you will stay or
                            want to stay. Our blogs are the real-life experiences of all types of travelers,
                            helping you find the best stay in your journey. </p>
                    </div>
                </div>
            </div>
            <div class="fw-col-xs-12 fw-col-sm-6 fw-col-md-4">
                <div class="number-block-item">
                    <div class="num">04</div>
                    <div class="text">
                        <div class="h5 uppercase">What To See
                        </div>
                        <p>Your travel plans to a country or city are based on what you fantasize about the
                            land. So we, Ces Collaborative, through our blogs, tell you about the hidden gems of
                            all the cities you must explore. </p>
                    </div>
                </div>
            </div>
            <div class="fw-col-xs-12 fw-col-sm-6 fw-col-md-4">
                <div class="number-block-item">
                    <div class="num">05</div>
                    <div class="text">
                        <div class="h5 uppercase">What To Eat </div>
                        <p>Every city and country has its food specialty. Some recipes surface across the globe,
                            while a few are found only in their native land. Our blogs are the treasure of those
                            hidden and native food.</p>
                    </div>
                </div>
            </div>
            <div class="fw-col-xs-12 fw-col-sm-6 fw-col-md-4">
                <div class="number-block-item">
                    <div class="num">06</div>
                    <div class="text">
                        <div class="h5 uppercase">What To Buy </div>
                        <p>The local market is where you find the true colors of the culture of a particular
                            city. So, we at Ces Collaborative bring the blog describing the best things in the
                            city, thus helping you buy items that rewind your journey.</p>
                    </div>
                </div>
            </div>
        </div>




    </div>
</main>

@endsection
