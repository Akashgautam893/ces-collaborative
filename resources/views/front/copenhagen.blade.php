@extends('front.layout')
@section('content')
<div class="post-image" style="background-image: url({{ asset('asset/images/c-bg.jpg') }});"></div>
<!-- Page header -->
<div class="page-header fw-main-row">
    <div class="fw-container" style="max-width:1200px">
        <div class="fw-row">
            <div class="fw-col-xs-12 fw-col-sm-8">
                <h1> Copenhagen</h1>
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
        <p>Denmark’s capital Copenhagen has multitudes of tourist attractions to please even the pickiest
            travelers. This Danish city has been attracting guests from around the world for years. The
            Scandinavian city seems to have everything one would love in a gateway - lots of water, greenery,
            adventure places, and a cozy atmosphere. Maritime Flair, the unique cafe culture, and friendly
            street life make tourists visit the place repeatedly. Located on the sea shore, Copenhagen gives you
            a distinctly European feel and is a perfect place for wandering through at your leisure. You can hop
            on a bike to explore the city highlights yourself or may have a travel guide beside you to give you
            personal travel tips. </p>
        <p><img src="{{ asset('asset/images/c-sm.jpg') }}" alt="Post image"></p>
        <p>Tivoli Gardens, Christiansborg Palace, The National Gallery of Denmark, and Amalienborg Castle are a
            few names of many that top the chart of tourist attractions. Visiting this city is extremely
            relaxing; throughout the city, you feel a nautical vibe reflected in the colorful shore-side homes
            and big ships docked along the quays. In addition, the place is also the home to many cutting-edge
            restaurants, including the famous Noma, where tables must be reserved months in advance.</p>
        <P>Moreover, people love cycling in Copenhagen; this city is one of the cycle-friendly cities in Europe.
            So, if you get one for yourself, explore the city. The weather in Copenhagen is also quite pleasant.
            We recommend summer as the best travel time (June to August), the temperature is mild and hardly
            gets hot here. So, pack your travel bag for an itinerary to Copenhagen, and Ces Collaborative will
            accompany you to make a captivating travel blog without interrupting the fun and excitement. We will
            capture the smallest details in our shoot that best describe your travel and the place. </P>
        <div class="fw-row">
            <div class="fw-col-xs-12 fw-col-sm-4"><img src="{{ asset('asset/images/c1.jpg') }}" alt=""></div>
            <div class="fw-col-xs-12 fw-col-sm-4"><img src="{{ asset('asset/images/c2.jpg') }}" alt=""></div>
            <div class="fw-col-xs-12 fw-col-sm-4"><img src="{{ asset('asset/images/c3.jpg') }}" alt=""></div>
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
