@extends('front.layout')
@section('content')
<section class="video-container section-full ">
    <div class="overlay-main bg-secondry opacity-05"></div>
    <video src="{{ asset('asset/images/vid-graphy.mp4') }}" autoplay="" loop="" playsinline="" muted=""></video>
    <div class="callout home-about-section p-t80 p-b50 bg-no-repeat bg-bottom-right">
        <div class="fw-container ">
            <div class="fw-row">

                <div class="fw-col-xs-12 fw-col-sm-12 fw-col-md-12">
                    <div class="awesome-counter text-center text-white">
                        <h1 class="white-text">Get Engrossing and Impressive Videos </h1>
                        <p>Ces Collaborative offers you professional videography services so that the videos
                            effortlessly convey the stories you want to deliver to the world. </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- END Banner block -->
<section class="fw-main-row videos">
    <div class="fw-container-fluid c-padding">
        <!-- Persona block -->
        <div class="persona-block">
            <div class="wrap tac">
                <div class="heading-decor">
                    <h5>What Makes Us Stand Out</h5>
                    <h2>Our Features </h2>
                </div>
                <div class="p-text">A good video should always be to the point that communicates the relevant
                    purpose within 10-20 seconds. It should have a high resolution with better sound quality. It
                    should also include an emotional component that delivers the message in the best way
                    possible. In Ces Collaborative, we have professionals who create captivating videos to
                    deliver stories more simply. </div>

                <!--<p><a href="javascript:void(0)" class="button-style3"><i class="icon-right-thin-chevron"></i><span>know MORE</span></a></p>-->
            </div>

        </div>
        <!-- END Persona block -->


    </div>
</section>

<div class="fw-container-fluid">
    <div class="heading-decor">
        <h4 class="pt-3">Photography Services</h4>

    </div>
    <p class="p-text tac" style="max-width:630px;margin: 0 auto 25px;">We cover a variety of videography
        services; whether it is a grand wedding ceremony or a documentary, our professional experts know how to
        create an engrossing professional video that seamlessly delivers the message across. We also cover
        portfolios and success stories of small business owners.
    </p>

    <div class="filter-blog masonry fw-row">
        <div class="filter-blog-item work fw-col-xs-12 fw-col-sm-6 fw-col-md-4 fw-col-lg-4">
            <article class="blog-item">
                <div class="video">
                    <video controls="" width="100%">
                        <source src="{{ asset('asset/images/video-d-1.mp4') }}" type="video/mp4">
                        <source src="{{ asset('asset/images/video-d-1.mp4') }}" type="video/ogg">
                    </video>
                </div>
                <div class="wrap">
                    <div class="post-details"><span class="item"><i class="icon-calendar-2"></i><span>feb 03
                                2016</span></span><span class="item"><i
                                class="icon-circular-clock"></i><span>6 min to read</span></span></div>
                    <h5><a href="weddings.php">Weddings</a></h5>
                    <div class="author-link">Posted by <a href="javascript:void(0)">Admin</a></div>
                    <p>Now you can capture special wedding moments and make your special day memorable with Ces
                        Collaborative. We create professional wedding videos that will keep your memories alive.
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
                        <source src="{{ asset('asset/images/video-d-2.mp4') }}" type="video/mp4">
                        <source src="{{ asset('asset/images/video-d-2.mp4') }}" type="video/ogg">
                    </video>
                </div>
                <div class="wrap">
                    <div class="post-details"><span class="item"><i class="icon-calendar-2"></i><span>feb 03
                                2016</span></span><span class="item"><i
                                class="icon-circular-clock"></i><span>6 min to read</span></span></div>
                    <h5><a href="documentaries.php">Documentaries</a></h5>
                    <div class="author-link">Posted by <a href="javascript:void(0)">Admin</a></div>
                    <p>If you are a documentary lover and want to shoot one, Ces Collaborative can be your best
                        companion. We shoot documentaries that convey the story in the best way possible. </p>
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
                        <source src="{{ asset('asset/images/video-d-3.mp4') }}" type="video/mp4">
                        <source src="{{ asset('asset/images/video-d-3.mp4') }}" type="video/ogg">
                    </video>
                </div>
                <div class="wrap">
                    <div class="post-details"><span class="item"><i class="icon-calendar-2"></i><span>feb
                                03 2016</span></span><span class="item"><i
                                class="icon-circular-clock"></i><span>6 min to read</span></span></div>
                    <h5><a href="small-business-owner-profiles.php">Small Business Owner Profiles</a></h5>
                    <div class="author-link">Posted by <a href="javascript:void(0)">Admin</a></div>
                    <p>Are you a business owner who wants to share his story with the world? Ces Collaborative
                        covers success stories and portfolios of budding entrepreneurs who want to be in the
                        spotlight.
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
