@extends('front.layout')
@section('content')
<div class="post-image" style="background-image: url({{ asset('asset/images/am-bg.jpg') }});"></div>
<!-- Page header -->
<div class="page-header fw-main-row">
    <div class="fw-container" style="max-width:1200px">
        <div class="fw-row">
            <div class="fw-col-xs-12 fw-col-sm-8">
                <h1> Amsterdam</h1>
                <div class="post-details"><span class="item"><i class="icon-calendar-2"></i><span>Aug 02
                            2022</span></span><span class="item"><i class="icon-circular-clock"></i><span>6
                            min</span></span></div>
            </div>

        </div>
    </div>
</div>
<!-- END Page header -->
<!-- Main block -->
<main class="fw-main-row">
    <div class="fw-container site-content" style="max-width:1200px">
        <p>The cultural capital, Amsterdam, is one of the greatest small city. Netherland’s capital has a huge
            cultural and social life variation and hence becoming Europe’s one of the most popular tourist
            destinations. From iconic architecture to cafes and culture, Amsterdam is a beauty in itself,
            attracting travelers from all around the world. The 40 ancient museums are always the center point
            of tourists. Furthermore, the beautiful landscapes, historic houses, theaters, and concert halls
            give you a story worth remembering.</p>
        <p><img src="{{ asset('asset/images/am-sm.jpg') }}" alt="Post image"></p>
        <p>Amsterdam is also a famous honeymoon destination for couples as it is one of the most romantic and
            beautiful cities in Europe. The unconventional restaurants, local-craft beers, and unbeatable
            network of cycle routes motivate the global youth to enjoy the aesthetic environment of Amsterdam.
            Every street of the city has a story to tell; you only have to give your ears to them.</p>
        <p>Your visit to Amsterdam will pile up the stories in your life. These beautiful piles will motivate
            you to show your story to the world, and you can easily do this with Ces Collaborative. We are the
            team that will create your journey to story through blogs, photographs, and documentaries depicting
            the best version of your Amsterdam journey. Moreover, our videographers and photographers are
            skilled and trained enough not to hamper your moments and still capture the journey.</p>
        <div class="fw-row">
            <div class="fw-col-xs-12 fw-col-sm-4"><img src="{{ asset('asset/images/am1.jpg') }}" alt=""></div>
            <div class="fw-col-xs-12 fw-col-sm-4"><img src="{{ asset('asset/images/am2.jpg') }}" alt=""></div>
            <div class="fw-col-xs-12 fw-col-sm-4"><img src="{{ asset('asset/images/am3.jpg') }}" alt=""></div>
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
