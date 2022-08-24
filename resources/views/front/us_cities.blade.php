@extends('front.layout')
@section('content')
<div class="post-image" style="background-image: url({{ asset('asset/images/us-bg.jpg') }});"></div>
<!-- Page header -->
<div class="page-header fw-main-row">
    <div class="fw-container" style="max-width:1200px">
        <div class="fw-row">
            <div class="fw-col-xs-12 fw-col-sm-8">
                <h1>US Cities</h1>
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
        <p>Traveling is fun; traveling is peace, and traveling is contentment. While some love traveling to the
            mountains, few are eager to explore the world and humans around the globe without concerning the
            landscape. And, what if you find all the varieties in one country? Yes, the United States is the
            most incredibly diverse nation giving opportunities to people from all over the world. The States
            provides great locations and views to fill your camera’s space by articulating your hidden
            photography or modeling skills.</p>
        <p><img src="{{ asset('asset/images/us-sm.jpg') }}" alt="Post image"></p>
        <p>The United States is where you find history mingling with the current generation aesthetically. The
            United States cities are present in almost every travel lover, whether the trekkers or the plain
            land lover. The nation welcomes all types of travelers: mountaineers with the vast range of Alaska
            mountains, movie lovers with the world-famous Universal Studios Hollywood, and ocean lovers with the
            stunning Miami beaches and ocean drives. Moreover, the foodies satisfy their hunger with the world’s
            famous waffles, hotdogs, and pancakes in the USA.</p>
        <p>The United States is a whole different world for traveling and exploring. From famous museums to
            beautiful streets, every corner of the nation comes with a story worth noticing. Moreover, you get
            ample opportunity to experience new adventures, learn new stories, and fill your travel diary with
            new pictures. Further, you will even feel like recording your travel stories and creating new blogs
            about your experiences. And for this, Ces Collaborative holds your back, so you don’t have to
            compromise on your experience but rather get the best one while sharing it with the world.</p>
        <div class="fw-row">
            <div class="fw-col-xs-12 fw-col-sm-4"><img src="{{ asset('asset/images/US-Cities-1.jpg') }}" alt=""></div>
            <div class="fw-col-xs-12 fw-col-sm-4"><img src="{{ asset('asset/images/US-Cities-2.jpg') }}" alt=""></div>
            <div class="fw-col-xs-12 fw-col-sm-4"><img src="{{ asset('asset/images/US-Cities-3.jpg') }}" alt=""></div>
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
