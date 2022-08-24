@extends('front.layout')
@section('content')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <style>
        a:hover {
            color: white;
        }

        fa-pencil-square {
            background-color: white;
        }
    </style>

    <!-- Banner block -->
    <section class="main-slider" data-eglobal="main-slide">
        <div class="banner-block full-screen-block fw-main-row">
            @foreach ($banners as $banner)
                <div class="item dark-bg"
                    style="background-image: url({{ asset('asset/images/bannerImages/' . $banner->image) }});">
                    <div class="centered-container fw-container">
                        <div class="h1">{{ $banner->heading }}</div>
                        <p>{{ $banner->short_desc }}</p>
                        {{-- <a href="javascript:void(0)" class="button-style1"><span>Explore Us</span></a> --}}
                        <i class="fa fa-pencil-square float-right" id="bannerModalbtn" style="font-size: xxx-large;"
                            aria-hidden="true"></i>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- WHAT DO WE OFFER -->
    <section class="we_offer fw-main-row">
        <div class="fw-container-fluid">
            @foreach ($f_services as $f_service)
                <!-- Heading -->
                <div class="heading-decor px-5">
                    <i class="fa fa-pencil-square float-right" id="featuredServicesModalbtn" style="font-size: xxx-large;"
                        aria-hidden="true"></i>
                    <h5>{{ $f_service->p_heading }}</h5>
                    <h2>{{ $f_service->s_heading }}</h2>
                </div>
                <!-- END Heading -->
                <p class="p-text tac" style="max-width:630px;margin: 0 auto 25px;">{{ $f_service->short_desc }}</p>
            @endforeach

            <!-- Featured Services Catelog items -->
            <div class="fw-row">
                <i class="fa fa-pencil-square float-right" id="featuredServicesCatelogModalbtn"
                    style="font-size: xxx-large;" aria-hidden="true"></i>
                @foreach ($fsCatelogs as $fsCatelog)
                    <div class="fw-col-xs-12 fw-col-sm-6 fw-col-md-4">
                        <div class="category-item dark-bg"
                            style="background-image: url({{ asset('asset/images/fsCatelog/' . $fsCatelog->image) }});">
                            <img src="{{ asset('asset/images/fsCatelog/' . $fsCatelog->image) }}" alt="portrait">
                            <a href="{{ url('/admin/home/catelogImages/' . $fsCatelog->slug) }}"
                                class="button-style2 centered-container">
                                <span>{{ $fsCatelog->service_name }}</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- END Category items -->
        </div>
    </section>
    <!-- About Us -->
    <section class="about_us fw-main-row">
        <div class="fw-container-fluid">
            <div class="fw-row">
                @foreach ($aboutUs as $aboutUsItem)
                    <div class="col-img fw-col-xs-12 fw-col-sm-4 fw-col-md-6">
                        <div
                            style="background-image: url({{ asset('asset/images/aboutUsImage/' . $aboutUsItem->image) }})">
                            <img src="{{ asset('asset/images/aboutUsImage/' . $aboutUsItem->image) }}" alt="about me">
                        </div>
                    </div>
                    <div class="fw-col-xs-12 fw-col-sm-8 fw-col-md-6">
                        <!-- Heading -->
                        <div class="heading-decor">
                            <i class="fa fa-pencil-square float-right" id="aboutUsModalbtn" style="font-size: xxx-large;"
                                aria-hidden="true"></i>
                            <h5>A Picture Says A Thousand Words</h5>
                            <h2>About Us</h2>
                        </div>
                        <!-- END Heading -->
                        <p class="p-text tac">{{ $aboutUsItem->short_desc }}</p>
                        <div class="fw-row">
                            <!-- Number block -->
                            <div class="fw-col-xs-12 fw-col-lg-6">
                                <div class="number-block-item">
                                    {{-- <div class="num">01</div> --}}
                                    <div class="text">
                                        <div class="h5 uppercase">{{ $aboutUsItem->heading }}</div>
                                        <p>{{ $aboutUsItem->content }}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END Number block -->
                        </div>
                        <div class="tac" style="margin-top: 25px;">
                            <a href="{{ url('/about') }}" class="button-style3 white"><i
                                    class="icon-right-thin-chevron"></i>
                                <span>Read More</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="heading-decor">
                <h5>Portfolio</h5>
                <h2>Our Latest Projects</h2>
            </div>
            <div class="portfolio-items masonry fw-row pointer">
                @foreach ($portfolio as $port)
                    <i class="fa fa-pencil-square float-right" id="portfolioModalbtn" style="font-size: xxx-large;"
                        aria-hidden="true"></i>
                    <!-- Portfolio item -->
                    <div class="portfolio-item fw-col-xs-12 fw-col-sm-6 fw-col-md-3">
                        <div style="background-image: url({{ asset('asset/images/portfolioImage/' . $port->image) }});">
                            <a href="javascript:void(0)">
                                <div>
                                    <div class="h5">{{ $port->heading }}</div>
                                    <span>{{ $port->desc }}</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END Portfolio item -->
                @endforeach
            </div>
        </div>
    </section>
    <!-- Testimonials -->
    <section class="testimonials fw-main-row">
        <i class="fa fa-pencil-square float-right" id="testimonialModalbtn" style="font-size: xxx-large;"
            aria-hidden="true"></i>
        <div class="fw-container">
            <div class="heading-decor">
                <h5>What Do Our Clients Say</h5>
                <h2>Testimonials</h2>
            </div>
            <!-- Slider -->
            <div class="slider-wrap">
                @foreach ($testimonials as $test)
                    <div class="item testimonials-item">
                        <blockquote>{{ $test->review }}<span class="post">{{ $test->client_name }}</span></blockquote>
                    </div>
                @endforeach
            </div>
            <!-- END Slider -->
        </div>
    </section>
    <!-- Express Yourself Slider -->
    <section class="express_yourself_slider fw-main-row dark-overlay pointer" style="padding-bottom: 30px;">
        <div class="fw-container-fluid">
            <div class="heading-decor">
                <i class="fa fa-pencil-square float-right" id="slidingImagesModalbtn" style="font-size: xxx-large;"
                    aria-hidden="true"></i>
                <h5>Express yourself and Unleash The Creativity Within You </h5>
                <h2>FILMING. COMPELLING VISUALS. STORYTELLING
                </h2>
            </div>
            <p class="p-text tac" style="max-width:630px;margin: 0 auto 25px;">We film high quality videos and
                stunning photographs, so that your videos and pictures can convey everything, you desire to
                express
                to the world. </p>
            <!-- Carousel -->
            <div class="photo-carousel">
                @foreach ($slidingImage as $s_image)
                    <div class="item"
                        style="background-image: url({{ asset('asset/images/slidingImage/' . $s_image->image) }})">
                        <a href="javascript:void(0)"></a><img
                            src="{{ asset('asset/images/slidingImage/' . $s_image->image) }}" alt="carousel item">
                    </div>
                @endforeach
            </div>
            <!-- END Carousel -->

        </div>
    </section>
    <!-- Category Cards -->
    <section class="category_cards fw-main-row">
        <div class="fw-container-fluid">
            <div class="heading-decor">
                <!--<h5>choose one of my</h5>-->
                <i class="fa fa-pencil-square float-right" id="servicesOffersModalbtn" style="font-size: xxx-large;"
                    aria-hidden="true"></i>
                <h2>What All Do We Offer</h2>
            </div>
            <div class="fw-row">
                @foreach ($servicesOffer as $serviceOffer)
                    <div class="fw-col-xs-12 fw-col-sm-6 fw-col-lg-4">
                        <!-- Pricing item -->
                        <div class="pricing-item">
                            <div class="top"
                                style="background-image: url({{ asset('asset/images/servicesOffer/' . $serviceOffer->image) }})">
                                <h5 class="uppercase"><span>{{ $serviceOffer->service_name }}</span></h5>
                                <div class="price">4 </div>
                                <h6>{{ $serviceOffer->heading }}</h6>
                            </div>
                            <div class="wrap">
                                {{-- <div class="row1">Family Portrait
                            </div>
                            <div class="row1">Professional Headshots
                            </div>
                            <div class="row1">Automobiles </div>
                            <div class="row1">Motorbikes </div> --}}
                                {!! $serviceOffer->sub_category !!}
                            </div>
                            <div class="bottom"><a href="{{ url('/photography') }}" class="button-style3 big"><span>Read
                                        More</span></a></div>
                        </div>
                        <!-- END Pricing item -->
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    <!-------------------------------------------------- Modal Start ------------------------------------------------------------->
    {{-- bannerModal --}}
    <div class="modal fade mt-5" id="bannerModal" tabindex="-1" role="dialog" aria-labelledby="bannerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bannerModalLabel">Banner Section</h5>
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> --}}
                </div>
                <div class="modal-body">
                    {{-- <button type="button" id="bannerModalAddNewBtn" class="btn btn-sm btn-dark mb-2"
                        style="pointer-events: auto !important;">Add New</button> --}}
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Heading</th>
                                <th scope="col">Short Description</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($banners as $banner)
                                <tr>
                                    <td>{{ $banner->id }}</td>
                                    <td>{{ $banner->heading }}</td>
                                    <td>{{ $banner->short_desc }}</td>
                                    <td>
                                        <img src="{{ asset('asset/images/bannerImages/' . $banner->image) }}"
                                            style="width: 150px;">
                                    </td>
                                    <td>
                                        <span class="d-flex">
                                            <i class="fa fa-pencil-square pt-1 mr-3" id="bannerModalEditBtn"
                                                style="font-size: x-large;" aria-hidden="true"></i>
                                            {{-- <a href="{{ url('/admin/home/deletebanner/' . $banner->id) }}"
                                                class="text-danger" style="pointer-events: auto;font-size: x-large;">
                                                <i class="fa fa-trash"></i>
                                            </a> --}}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    {{-- bannerAddNewModal --}}
    <div class="modal fade mt-5" id="bannerAddNewbtnModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Banner Add</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="{{ url('/admin/photography/addPhotographyBanner') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Heading</label>
                            <input type="text" name="heading" id="heading" class="form-control" placeholder=""
                                aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Short Description</label>
                            <input type="text" name="short_desc" id="short_desc" class="form-control" placeholder=""
                                aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="image" id="image" placeholder=""
                                aria-describedby="fileHelpId">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- bannerEditModal --}}
    <div class="modal fade mt-5" id="bannerEditbtnModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Banner Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/admin/home/updatebanner/' . $banners[0]->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Heading</label>
                            <input type="text" name="heading" id="heading" class="form-control"
                                value="{{ $banners[0]->heading }}" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Short Description</label>
                            <input type="text" name="short_desc" id="short_desc" class="form-control"
                                value="{{ $banners[0]->short_desc }}" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="image" id="image"
                                value="{{ $banners[0]->image }}" placeholder="" aria-describedby="fileHelpId">
                        </div>
                        <div class="row">
                            <div class="col">
                                <h4>Old Image</h4>
                                @if (!empty($banners[0]->image))
                                    <img src="{{ asset('asset/images/bannerImages/' . $banners[0]->image) }}"
                                        style="width: 150px;">
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Featured Services Modal -->
    <div class="modal fade mt-5" id="featuredServicesModal" tabindex="-1" role="dialog"
        aria-labelledby="featuredservicesLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="featuredservicesLabel">Featured Services Section</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{-- <button type="button" id="featuredServicesModalAddNewBtn" class="btn btn-sm btn-dark mb-2"
                        style="pointer-events: auto !important;">Add New</button> --}}
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">First Heading</th>
                                <th scope="col">Second Heading</th>
                                <th scope="col">Short Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($f_services as $f_service)
                                <tr>
                                    <td>{{ $f_service->id }}</td>
                                    <td>{{ $f_service->p_heading }}</td>
                                    <td>{{ $f_service->s_heading }}</td>
                                    <td>{{ $f_service->short_desc }}</td>
                                    <td>
                                        <span class="d-flex">
                                            <i class="fa fa-pencil-square pt-1 mr-3" id="featuredServicesModalEditBtn"
                                                style="font-size: x-large;" aria-hidden="true"></i>
                                            {{-- <a href="{{ url('/admin/home/deletebanner/' . $f_service->id) }}"
                                                class="text-danger" style="pointer-events: auto;font-size: x-large;">
                                                <i class="fa fa-trash"></i>
                                            </a> --}}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!--  Featured_Services Add New Modal -->
    <div class="modal fade mt-5" id="featuredServicesAddNewModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 75rem;right: 20rem;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Featured Services</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/admin/home/addFeaturedServices') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Primary Heading</label>
                                    <input type="text" name="p_heading" id="p_heading" class="form-control"
                                        placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Secondary Heading</label>
                                    <input type="text" name="s_heading" id="s_heading" class="form-control"
                                        placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Short Description</label>
                                    <input type="text" name="short_desc" id="short_desc" class="form-control"
                                        placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Featured_Services Edit Modal -->
    <div class="modal fade mt-5" id="featuredServicesEditModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 75rem;right: 20rem;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Featured Services</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/admin/home/updateFeaturedServices/' . $f_services[0]->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Primary Heading</label>
                                    <input type="text" name="p_heading" id="p_heading" class="form-control"
                                        value="{{ $f_services[0]->p_heading }}" placeholder=""
                                        aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Secondary Heading</label>
                                    <input type="text" name="s_heading" id="s_heading" class="form-control"
                                        value="{{ $f_services[0]->s_heading }}" placeholder=""
                                        aria-describedby="helpId">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Short Description</label>
                                    <textarea class="form-control" name="short_desc" id="short_desc" rows="3">{{ $f_services[0]->short_desc }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- featuredServicesCatelog Modal --}}
    <div class="modal fade mt-5" id="featuredServicesCatelogModal" tabindex="-1" role="dialog"
        aria-labelledby="bannerModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 70rem;right: 14rem;">
                <div class="modal-header">
                    <h5 class="modal-title" id="featuredServicesCatelogModalLabel">Featured Services Catelog Section</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <button type="button" id="featuredServicesCatelogAddNewBtn" class="btn btn-sm btn-dark mb-2"
                        style="pointer-events: auto !important;">Add New</button>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Image</th>
                                <th scope="col">Service Name</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fsCatelogs as $fsCatelog)
                                <tr>
                                    <td>{{ $fsCatelog->id }}</td>
                                    <td>
                                        @if (!empty($fsCatelog->image))
                                            <img src="{{ asset('asset/images/fsCatelog/' . $fsCatelog->image) }}"
                                                style="width: 150px;">
                                        @endif
                                    </td>
                                    <td>{{ $fsCatelog->service_name }}</td>
                                    <td>{{ $fsCatelog->slug }}</td>
                                    <td>
                                        <span class="d-flex">
                                            <a href="{{ url('/admin/home/editFeaturedServicesCatelog/' . $fsCatelog->id) }}"
                                                id="slidingImagesEditBtn" style="pointer-events: auto;">
                                                <i class="fa fa-pencil-square pt-1 mr-3"
                                                    style="font-size: x-large;pointer-events: auto;"
                                                    aria-hidden="true"></i>
                                            </a>
                                            <a href="{{ url('/admin/home/deleteFeaturedServicesCatelog/' . $fsCatelog->id) }}"
                                                class="text-danger" style="pointer-events: auto;">
                                                <i class="fa fa-trash" style="font-size: x-large;pointer-events: auto;"
                                                    aria-hidden="true"></i>
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    {{-- featuredServicesCatelog AddNewModal --}}
    <div class="modal fade mt-5" id="featuredServicesCatelogAddNewModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Featured Services Catelog Add</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="{{ url('/admin/home/addFeaturedServicesCatelog') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="image" id="image" placeholder=""
                                aria-describedby="fileHelpId">
                        </div>
                        <div class="form-group">
                            <label for="">Service Name</label>
                            <input type="text" name="service_name" id="service_name" class="form-control"
                                placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control" placeholder=""
                                aria-describedby="helpId">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- About Us Modal -->
    <div class="modal fade mt-5" id="aboutUsModal" tabindex="-1" role="dialog"
        aria-labelledby="featuredservicesLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 70rem;right: 15rem;">
                <div class="modal-header">
                    <h5 class="modal-title" id="featuredservicesLabel">About Us Section</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{-- <button type="button" id="aboutUsAddNewBtn" class="btn btn-sm btn-dark mb-2"
                        style="pointer-events: auto !important;">Add New</button> --}}
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Image</th>
                                <th scope="col">Short Desc.</th>
                                <th scope="col">Heading</th>
                                <th scope="col">Content</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($aboutUs as $aboutUsItem)
                                <tr>
                                    <td>{{ $aboutUsItem->id }}</td>
                                    <td><img src="{{ asset('asset/images/aboutUsImage/' . $aboutUsItem->image) }}"
                                            style="width: 150px;"></td>
                                    <td>{{ $aboutUsItem->short_desc }}</td>
                                    <td>{{ $aboutUsItem->heading }}</td>
                                    <td>{{ $aboutUsItem->content }}</td>
                                    <td>
                                        <span class="d-flex">
                                            <i class="fa fa-pencil-square pt-1 mr-3" id="aboutUsEditBtn"
                                                style="font-size: x-large;" aria-hidden="true"></i>
                                            {{-- <a href="{{ url('/admin/home/deletebanner/' . $f_service->id) }}"
                                            class="text-danger" style="pointer-events: auto;font-size: x-large;">
                                            <i class="fa fa-trash"></i>
                                        </a> --}}
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!--  About Us Add New Modal -->
    <div class="modal fade mt-5" id="aboutUsAddNewModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 75rem;right: 20rem;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New About Us</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/admin/home/addAboutUs') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" class="form-control" value="" name="image"
                                        id="image" placeholder="" aria-describedby="fileHelpId">
                                </div>
                            </div>
                            <div class="col">
                                <h4>Old Image</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Short Description</label>
                                    <textarea class="form-control" name="short_desc" id="short_desc" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Heading</label>
                                    <input type="text" name="heading" id="heading" class="form-control"
                                        value="" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Content</label>
                                    <textarea class="form-control" name="content" id="content" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- About Us Edit Modal -->
    <div class="modal fade mt-5" id="aboutUsEditModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 75rem;right: 20rem;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit About Us</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/admin/home/updateAboutUs/' . $aboutUs[0]->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control" value="{{ $aboutUs[0]->image }}" name="image"
                                id="image" placeholder="" aria-describedby="fileHelpId">
                        </div>
                        <h4>Old Image</h4>
                        @if (!empty($aboutUs[0]->image))
                            <img src="{{ asset('asset/images/aboutUsImage/' . $aboutUs[0]->image) }}"
                                style="width: 100px;">
                        @endif
                        <div class="form-group">
                            <label for="">Short Description</label>
                            <textarea class="form-control" name="short_desc" id="short_desc" rows="3">{{ $aboutUs[0]->short_desc }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Heading</label>
                            <input type="text" name="heading" id="heading" class="form-control"
                                value="{{ $aboutUs[0]->heading }}" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Content</label>
                            <textarea class="form-control" name="content" id="content" rows="3">{{ $aboutUs[0]->content }}</textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    {{-- Portfolio Modal --}}
    <div class="modal fade mt-5" id="portfolioModal" tabindex="-1" role="dialog"
        aria-labelledby="portfolioModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: max-content;">
                <div class="modal-header">
                    <h5 class="modal-title" id="portfolioModalLabel">Portfolio Section</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <button type="button" id="portfolioModalAddNewBtn" class="btn btn-sm btn-dark mb-2"
                        style="pointer-events: auto !important;">Add New</button>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Heading</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($portfolio as $port)
                                <tr>
                                    <td>{{ $port->id }}</td>
                                    <td><img src="{{ asset('asset/images/portfolioImage/' . $port->image) }}"
                                            style="width: 80px;"></td>
                                    <td>{{ $port->heading }}</td>
                                    <td>{{ $port->desc }}</td>
                                    <td>
                                        <span class="d-flex">
                                            <a href="{{ url('/admin/home/editPortfolio/' . $port->id) }}"
                                                style="pointer-events: auto;">
                                                <i class="fa fa-pencil-square pt-1 mr-3"
                                                    style="font-size: x-large;pointer-events: auto;"
                                                    aria-hidden="true"></i>
                                            </a>
                                            <a href="{{ url('/admin/home/deletePortfolio/' . $port->id) }}"
                                                class="text-danger" style="pointer-events: auto;">
                                                <i class="fa fa-trash" style="font-size: x-large;pointer-events: auto;"
                                                    aria-hidden="true"></i>
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    {{-- portfolioAddNewModal --}}
    <div class="modal fade mt-5" id="portfolioAddNewModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Portfolio</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/admin/home/addPortfolio') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" class="form-control" name="image" id="image"
                                        placeholder="" aria-describedby="fileHelpId">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Heading</label>
                                    <input type="text" name="heading" id="heading" class="form-control"
                                        placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <input type="text" name="desc" id="desc" class="form-control"
                                        placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Testimonial Modal --}}
    <div class="modal fade mt-5" id="testimonialModal" tabindex="-1" role="dialog"
        aria-labelledby="testimonialModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="testimonialModalLabel">Testimonial Section</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <button type="button" id="testimonialModalAddNewBtn" class="btn btn-sm btn-dark mb-2"
                        style="pointer-events: auto !important;">Add New</button>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Client Name</th>
                                <th scope="col">Review</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($testimonials as $test)
                                <tr>
                                    <td>{{ $test->id }}</td>
                                    <td>{{ $test->client_name }}</td>
                                    <td>{{ $test->review }}</td>
                                    <td>
                                        <span class="d-flex">
                                            <a href="{{ url('/admin/home/edittestimonial/' . $test->id) }}"
                                                id="testimonialModalEditBtn" style="pointer-events: auto;">
                                                <i class="fa fa-pencil-square pt-1 mr-3"
                                                    style="font-size: x-large;pointer-events: auto;"
                                                    aria-hidden="true"></i>
                                            </a>
                                            <a href="{{ url('/admin/home/deletetestimonial/' . $test->id) }}"
                                                class="text-danger" style="pointer-events: auto;">
                                                <i class="fa fa-trash" style="font-size: x-large;pointer-events: auto;"
                                                    aria-hidden="true"></i>
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    {{-- testimonialAddNewModal --}}
    <div class="modal fade mt-5" id="testimonialAddNewModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Testimonial</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/admin/home/addtestimonial') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Client Name</label>
                                    <input type="text" name="client_name" id="client_name" class="form-control"
                                        placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Review</label>
                                    <textarea class="form-control" name="review" id="review" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- slidingImagesModal --}}
    <div class="modal fade mt-5" id="slidingImagesModal" tabindex="-1" role="dialog"
        aria-labelledby="slidingImagesModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: max-content;">
                <div class="modal-header">
                    <h5 class="modal-title" id="slidingImagesModalLabel">Sliding Images Section</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <button type="button" id="slidingImagesAddNewBtn" class="btn btn-sm btn-dark mb-2"
                        style="pointer-events: auto !important;">Add New</button>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                {{-- <th scope="col">Primary Heading</th>
                                <th scope="col">Secondary Heading</th>
                                <th scope="col">Description</th> --}}
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($slidingImage as $s_image)
                                <tr>
                                    <td>{{ $s_image->id }}</td>
                                    <td>
                                        <div style="width: 100px;">
                                            <img src="{{ asset('asset/images/slidingImage/' . $s_image->image) }}">
                                        </div>
                                    </td>
                                    <td>
                                        <span class="d-flex">
                                            <a href="{{ url('/admin/home/editSlidingImage/' . $s_image->id) }}"
                                                id="slidingImagesEditBtn" style="pointer-events: auto;">
                                                <i class="fa fa-pencil-square pt-1 mr-3"
                                                    style="font-size: x-large;pointer-events: auto;"
                                                    aria-hidden="true"></i>
                                            </a>
                                            <a href="{{ url('/admin/home/deleteSlidingImage/' . $s_image->id) }}"
                                                class="text-danger" style="pointer-events: auto;">
                                                <i class="fa fa-trash" style="font-size: x-large;pointer-events: auto;"
                                                    aria-hidden="true"></i>
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    {{-- slidingImagesAddNewModal --}}
    <div class="modal fade mt-5" id="slidingImagesAddNewModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Sliding Images</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/admin/home/addSlidingImage') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        {{-- <div class="form-group">
                            <label for="">Primary Heading</label>
                            <input type="text" name="p_heading" id="p_heading" class="form-control" placeholder=""
                                aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Secondary Heading</label>
                            <input type="text" name="s_heading" id="s_heading" class="form-control" placeholder=""
                                aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea class="form-control" name="desc" id="desc" rows="3"></textarea>
                        </div> --}}
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="image" id="image" placeholder=""
                                aria-describedby="fileHelpId">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- servicesOffersModal --}}
    <div class="modal fade mt-5" id="servicesOffersModal" tabindex="-1" role="dialog"
        aria-labelledby="servicesOffersModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: max-content;">
                <div class="modal-header">
                    <h5 class="modal-title" id="servicesOffersModalLabel">Services Offer Section</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <button type="button" id="servicesOffersAddNewBtn" class="btn btn-sm btn-dark mb-2"
                        style="pointer-events: auto !important;">Add New</button>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Service Name</th>
                                <th scope="col">Heading</th>
                                <th scope="col">Image</th>
                                <th scope="col">Sub Category</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($servicesOffer as $serviceOffer)
                                <tr>
                                    <td>{{ $serviceOffer->id }}</td>
                                    <td>{{ $serviceOffer->service_name }}</td>
                                    <td>{{ $serviceOffer->heading }}</td>
                                    <td>{{ $serviceOffer->image }}</td>
                                    <td>{!! $serviceOffer->sub_category !!}</td>
                                    <td>
                                        <span class="d-flex">
                                            <a href="{{ url('/admin/home/editServicesOffer/' . $serviceOffer->id) }}"
                                                style="pointer-events: auto;">
                                                <i class="fa fa-pencil-square pt-1 mr-3"
                                                    style="font-size: x-large;pointer-events: auto;"
                                                    aria-hidden="true"></i>
                                            </a>
                                            <a href="{{ url('/admin/home/deleteServicesOffer/' . $serviceOffer->id) }}"
                                                class="text-danger" style="pointer-events: auto;">
                                                <i class="fa fa-trash" style="font-size: x-large;pointer-events: auto;"
                                                    aria-hidden="true"></i>
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    {{-- servicesOffersAddNewModal --}}
    <div class="modal fade mt-5" id="servicesOffersAddNewModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/admin/home/addServicesOffer') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Service Name</label>
                            <input type="text" name="service_name" id="service_name" class="form-control"
                                placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Heading</label>
                            <input type="text" name="heading" id="heading" class="form-control"
                                placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="image" id="image"
                                placeholder="" aria-describedby="fileHelpId">
                        </div>
                        <div class="form-group">
                            <label for="">Sub Category</label>
                            <textarea class="form-control" name="sub_category" id="sub_category" rows="3"></textarea>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
        CKEDITOR.replace('sub_category');
        $(document).ready(function() {
            $("#bannerModalbtn").click(function() {
                $('#bannerModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
            $("#bannerModalAddNewBtn").click(function() {
                $('#bannerAddNewbtnModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
            $("#bannerModalEditBtn").click(function() {
                $('#bannerEditbtnModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });

            $("#featuredServicesModalbtn").click(function() {
                $('#featuredServicesModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
            $("#featuredServicesModalAddNewBtn").click(function() {
                $('#featuredServicesAddNewModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
            $("#featuredServicesModalEditBtn").click(function() {
                $('#featuredServicesEditModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });

            $("#featuredServicesCatelogModalbtn").click(function() {
                $('#featuredServicesCatelogModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
            $("#featuredServicesCatelogAddNewBtn").click(function() {
                $('#featuredServicesCatelogAddNewModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
            $("#featuredServicesCatelogEditBtn").click(function() {
                $('#featuredServicesCatelogEditModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });

            $("#aboutUsModalbtn").click(function() {
                $('#aboutUsModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
            $("#aboutUsAddNewBtn").click(function() {
                $('#aboutUsAddNewModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
            $("#aboutUsEditBtn").click(function() {
                $('#aboutUsEditModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });

            $("#portfolioModalbtn").click(function() {
                $('#portfolioModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
            $("#portfolioModalAddNewBtn").click(function() {
                $('#portfolioAddNewModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
            $("#portfolioModalEditBtn").click(function() {
                $('#portfolioEditModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });

            $("#testimonialModalbtn").click(function() {
                $('#testimonialModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
            $("#testimonialModalAddNewBtn").click(function() {
                $('#testimonialAddNewModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
            // $(window).load(function() {
            //     $('#testimonialEditModal').modal({
            //         backdrop: 'static',
            //         keyboard: false
            //     });
            // });

            $("#slidingImagesModalbtn").click(function() {
                $('#slidingImagesModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
            $("#slidingImagesAddNewBtn").click(function() {
                $('#slidingImagesAddNewModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
            // $("#slidingImagesEditBtn").click(function() {
            //     $('#slidingImagesEditModal').modal({
            //         backdrop: 'static',
            //         keyboard: false
            //     });
            // });

            $("#servicesOffersModalbtn").click(function() {
                $('#servicesOffersModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
            $("#servicesOffersAddNewBtn").click(function() {
                $('#servicesOffersAddNewModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
            $("#servicesOffersEditBtn").click(function() {
                $('#servicesOffersEditModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
        });
    </script>
@endsection
