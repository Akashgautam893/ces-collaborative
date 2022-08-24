
@extends('front.layout')
@section('content')
    <div class="page-header fw-main-row photosgraphics">
        <div class="fw-container">
            @foreach ($catImages as $catImage)
                <h1>{{ $catImage->service_name }}</h1>
            @endforeach
        </div>
    </div>
    <!-- END Page header -->
    <!-- Main block -->
    <main class="fw-main-row">
        <div class="fw-container-fluid">
            <div class="portfolio-items masonry fw-row">
                @foreach ($catImages as $catImage)
                    @foreach ($catImage->featuredServicesImage as $item)
                        <!-- Portfolio item -->
                        <div class="portfolio-item img fw-col-xs-12 fw-col-sm-4">
                            <img src="{{ asset('asset/images/fsimage/' . $item->image) }}" alt="project name">
                            <a href="javascript:void(0)">
                                <div>
                                    <div class="h5">{{ $item->image_text }}</div>
                                </div>
                            </a>
                        </div>
                        <!-- END Portfolio item -->
                    @endforeach
                @endforeach

            </div>
        </div>
    </main>
    <!-- END Main block -->
    <!-- Banner block -->
    <div class="banner-block fw-main-row" style="height: 450px;">
        <div class="item dark-bg" style="background-image: url({{ asset('asset/images/imgs/bg1.jpg') }});">
            <div class="centered-container fw-container">
                <div class="h2">Subscribe Us</div>
                <p class="big">Register with us and stay updated to receive our latest newsletters,
                    periodicals,<br> travel blogs, documentaries, and more insightful stories. </p>
                <form action="#" class="subscribe-form"><input type="text" class="input"
                        placeholder="Enter your e-mail..."><button type="submit"
                        class="button-style3 white-dark big"><span>Subscribe</span></button></form>
            </div>
        </div>
    </div>
@endsection
