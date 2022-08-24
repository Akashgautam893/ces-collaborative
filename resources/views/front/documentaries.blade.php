@extends('front.layout')
@section('content')
<section class="video-container section-full document " style="height: 1024px;">
    <div class="overlay-main bg-secondry opacity-05"></div>
    <video src="{{ asset('asset/images/do-v-1.mp4') }}" autoplay="" loop="" playsinline="" muted=""></video>
    <div class="callout home-about-section p-t80 p-b50 bg-no-repeat bg-bottom-right">
        <div class="fw-container ">
            <div class="fw-row">

                <div class="fw-col-xs-12 fw-col-sm-12 fw-col-md-12">
                    <div class="awesome-counter text-white">
                        <h1 class="white-text">Documentaries - Featuring Untold Stories </h1>
                        <p>Shooting and editing a long-form documentary means putting in a lot of work and
                            preparation. If you are gearing up to feature documentaries, you need professional
                            experience and skill to take up the job and do it finally. Ces Collaborative offers
                            you professional documentary services where we would shoot documentaries for you. We
                            have expert professionals who know which equipment to use, how to find protagonists,
                            interview them, shoot tons of b-rolls and edit and sequence your full-length
                            documentary into chapters. </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<div class="fw-container">

    <div class="text-center py-3 ">
        <h2>Featured Videos </h2>
    </div>

    <div class="filter-blog masonry fw-row">
        <div class="filter-blog-item work fw-col-xs-12 fw-col-sm-6 fw-col-md-4 fw-col-lg-4">
            <article class="blog-item">
                <div class="video">
                    <video controls="" width="100%">
                        <source src="{{ asset('asset/images/box-d-1.mp4') }}" type="video/mp4">
                        <source src="{{ asset('asset/images/box-d-1.mp4') }}" type="video/ogg">
                    </video>
                </div>
                <div class="wrap">
                    <div class="post-details"><span class="item"><i class="icon-calendar-2"></i><span>Aug 02
                                2022</span></span><span class="item"><i
                                class="icon-circular-clock"></i><span>6 min to read</span></span></div>
                    <h5><a href="javascript:void(0)">Save Water For The Future </a></h5>
                    <div class="author-link">Posted by <a href="javascript:void(0)">Admin</a></div>
                    <p>The oceans and seas contain 97.5 percent of the world's water, which is too salty for
                        human consumption. The majority of the final 2.5% is found in the ice caps. In order to
                        survive, humans are dependent on a meager amount of fresh water, which is less than 1%.
                    </p>
                </div>
                <div class="bottom">
                    <div class="fl">
                        <a href="javascript:void(0)"><i class="icon-speech-bubble"></i><span>6
                                comments</span></a>
                    </div>
                    <div class="fr">
                        <a href="javascript:void(0)"><i class="icon-heart-outline"></i><span>25</span></a>
                    </div>
                </div>
            </article>
        </div>
        <div class="filter-blog-item trip fw-col-xs-12 fw-col-sm-6 fw-col-md-4 fw-col-lg-4">
            <article class="blog-item">
                <div class="video">

                    <video controls="" width="100%">
                        <source src="{{ asset('asset/images/box-d-2.mp4') }}" type="video/mp4">
                        <source src="{{ asset('asset/images/box-d-2.mp4') }}" type="video/ogg">
                    </video>

                </div>
                <div class="wrap">
                    <div class="post-details"><span class="item"><i class="icon-calendar-2"></i><span>Aug 02
                                2022</span></span><span class="item"><i
                                class="icon-circular-clock"></i><span>6 min to read</span></span></div>
                    <h5><a href="javascript:void(0)">Dormant Black Hole Discovery </a></h5>
                    <div class="author-link">Posted by <a href="javascript:void(0)">Admin</a></div>
                    <p>According to the latest research based on observations from a very large telescope of the
                        European Southern Observatory (ESO), there are many dormant black holes in the nearby
                        galaxies. In contrast to most black holes, these black holes don't release much X-ray
                        radiation.
                    </p>
                </div>
                <div class="bottom">
                    <div class="fl">
                        <a href="javascript:void(0)"><i class="icon-speech-bubble"></i><span>6
                                comments</span></a>
                    </div>
                    <div class="fr">
                        <a href="javascript:void(0)"><i class="icon-heart-outline"></i><span>25</span></a>
                    </div>
                </div>
            </article>
        </div>
        <div class="filter-blog-item trip fw-col-xs-12 fw-col-sm-6 fw-col-md-4 fw-col-lg-4">
            <article class="blog-item">
                <div class="video">
                    <video controls="" width="100%">
                        <source src="{{ asset('asset/images/box-d-3.mp4') }}" type="video/mp4">
                        <source src="{{ asset('asset/images/box-d-3.mp4') }}" type="video/ogg">
                    </video>

                </div>
                <div class="wrap">
                    <div class="post-details"><span class="item"><i class="icon-calendar-2"></i><span>Aug
                                02 2022</span></span><span class="item"><i
                                class="icon-circular-clock"></i><span>6 min to read</span></span></div>
                    <h5><a href="javascript:void(0)">The Dinosaur Fossils </a></h5>
                    <div class="author-link">Posted by <a href="javascript:void(0)">Admin</a></div>
                    <p>It was early June morning, already very hot and dry by 7.30, when Mark, a Montana
                        rancher, and his friend, Joseph, set out to search for fossils. Mark calls himself the
                        Dino Cowboy after he found the two full-size dinosaur skeletons.<br><br>
                    </p>
                </div>
                <div class="bottom">
                    <div class="fl">
                        <a href="javascript:void(0)"><i class="icon-speech-bubble"></i><span>6
                                comments</span></a>
                    </div>
                    <div class="fr">
                        <a href="javascript:void(0)"><i class="icon-heart-outline"></i><span>25</span></a>
                    </div>
                </div>
            </article>
        </div>


    </div>
</div>
<section class="video-container section-full " style="height:500px">
    <div class="overlay-main bg-secondry opacity-05"></div>
    <video src="{{ asset('asset/images/d-v-1.mp4') }}" autoplay="" loop="" playsinline="" muted=""></video>
    <div class="callout home-about-section p-t80 p-b50 bg-no-repeat bg-bottom-right">
        <div class="fw-container ">
            <div class="fw-row">

                <div class="fw-col-xs-12 fw-col-sm-12 fw-col-md-12">
                    <div class="awesome-counter text-center">
                        <h1 class="text-dark">Make Top Documentary Films With Ces Collaborative </h1>
                        <p class="text-dark">If You wish to shoot full-length, thought-provoking, educational,
                            and entertaining documentary films, we can make it easier for you.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<script>
    var videos = document.querySelectorAll('video');

    for (var i = 0; i < videos.length; i++)

        videos[i].addEventListener('play', function() {
            pauseAll(this)
        }, true);



    function pauseAll(elem) {

        for (var i = 0; i < videos.length; i++) {



            if (videos[i] == elem) continue;



            if (videos[i].played.length > 0 && !videos[i].paused) {



                videos[i].pause();

            }

        }

    }
</script>

@endsection
