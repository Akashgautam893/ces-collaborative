{{-- @php
    echo "<pre>";
    print_r($w_videos->toArray());
    die;
@endphp --}}
@extends('front.layout')
@section('content')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <section class="video-container section-full " style="height: 650px;">
        @foreach ($w_Banner as $wb)
            <div class="overlay-main bg-secondry opacity-05"></div>
            <video src="{{ asset('asset/images/weddingBanner/' . $wb->w_banner) }}" autoplay="" loop="" playsinline=""
                muted=""></video>

            <div class="callout home-about-section p-t80 p-b50 bg-no-repeat bg-bottom-right">
                <div class="fw-container ">
                    <i class="fa fa-pencil-square float-right" id="weddingBannerBtn" style="font-size: xxx-large;"
                        aria-hidden="true"></i>
                    <div class="fw-row">
                        <div class="fw-col-xs-12 fw-col-sm-12 fw-col-md-12">
                            <div class="awesome-counter text-center text-white">
                                <h1 class="white-text">{{ $wb->banner_heading }}</h1>
                                <p>{!! $wb->banner_desc !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
    <div class="fw-container">
        <i class="fa fa-pencil-square float-right pt-3" id="weddingContentBtn" style="font-size: xxx-large;"
            aria-hidden="true"></i>
        @foreach ($w_contents as $wc)
            <div class="fw-row  py-3">
                <div class="fw-col-xs-12 fw-col-sm-12 fw-col-md-4">
                    <div class="wedding-img">
                        <img src="{{ asset('asset/images/weddingContent/' . $wc->image) }}">
                    </div>
                </div>
                <div class="fw-col-xs-12 fw-col-sm-12 fw-col-md-8 ">
                    <div class="wedding-text">
                        <h2>{{ $wc->heading }}</h2>
                        {!! $wc->desc !!}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- END Banner block -->
    <div class="fw-main-row">
        <i class="fa fa-pencil-square float-right pr-5" id="weddingImagesModalbtn" style="font-size: xxx-large;"
            aria-hidden="true"></i>
        <div class="fw-container">
            <div class="article-carousel">
                @foreach ($w_images as $wi)
                    <div class="ac-item wedding-box"
                        style="background-image: url({{ asset('asset/images/weddingImages/' . $wi->bg_image) }}">
                        <a href="javascript:void(0)">
                            <div class="text wedding-text-box">
                                <h2>{{ $wi->bg_image_heading }}</h2>
                                <p>{{ $wi->bg_image_desc }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <section class="video-container section-full " style="height: 450px;">
        <div class="overlay-main bg-secondry opacity-05"></div>
        <video src="{{ asset('asset/images/iconicBanner/' . $icon_banner[0]->icon_banner) }}" autoplay="" loop=""
            playsinline="" muted=""></video>
        <div class="callout home-about-section p-t80 p-b50 bg-no-repeat bg-bottom-right">
            <div class="fw-container ">
                <div class="fw-row">
                    <i class="fa fa-pencil-square float-right" id="iconicBannerBtn" style="font-size: xxx-large;"
                        aria-hidden="true"></i>
                    <div class="fw-col-xs-12 fw-col-sm-12 fw-col-md-12">
                        <div class="awesome-counter text-center text-white">
                            <h1 class="white-text">{{ $icon_banner[0]->icon_bheading }}</h1>
                            <p>{{ $icon_banner[0]->icon_bdesc }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="page-header fw-main-row self-color">
        <div class="fw-container text-center">
            <i class="fa fa-pencil-square float-right pt-3" id="weddingVideosBtn" style="font-size: xxx-large;"
                aria-hidden="true"></i>
            <h1>The Iconic Moments</h1>
        </div>
    </div>
    <!-- END Page header -->
    <!-- Main block -->
    <main class="fw-main-row">
        <div class="fw-container">
            <div class="portfolio-items  fw-row videos-tag">
                <!-- Portfolio item -->
                @foreach ($w_videos as $wv)
                    <div class=" img fw-col-xs-12 fw-col-sm-6 fw-col-md-4">
                        <video width="100%" controls="">
                            <source src="{{ asset('asset/images/weddingVideo/' . $wv->im_video) }}" type="video/mp4">
                            <source src="{{ asset('asset/images/weddingVideo/' . $wv->im_video) }}" type="video/ogg">
                        </video>
                        <a href="javascript:void(0)">
                            <div>
                                <div class="h5">{{ $wv->im_vheading }}</div>
                            </div>
                        </a>
                    </div>
                @endforeach
                <!-- END Portfolio item -->
            </div>
        </div>
    </main>


    <!-------------------------------------------------- Modal Start ------------------------------------------------------------->
    {{-- bannerModal --}}
    <div class="modal fade mt-5" id="weddingBannerModal" tabindex="-1" role="dialog" aria-labelledby="bannerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 100rem;right: 35rem;">
                <div class="modal-header">
                    <h5 class="modal-title" id="bannerModalLabel">Wedding Banner Section</h5>
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> --}}
                </div>
                <div class="modal-body">
                    {{-- <button type="button" id="weddingBannerModalAddNewBtn" class="btn btn-sm btn-dark mb-2"
                        style="pointer-events: auto !important;">Add New</button> --}}
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Banner Video</th>
                                <th scope="col">Heading</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($w_Banner as $wb)
                                <tr>
                                    <td>{{ $wb->id }}</td>
                                    <td>
                                        <iframe width="250" height="75"
                                            src="{{ asset('asset/Images/weddingBanner/' . $wb->w_banner) }}"></iframe>
                                    </td>
                                    <td>{{ $wb->banner_heading }}</td>
                                    <td>{!! $wb->banner_desc !!}</td>
                                    <td>
                                        <span class="d-flex">
                                            <i class="fa fa-pencil-square pt-1 mr-3" id="weddingBannerEditBtn"
                                                style="font-size: x-large;" aria-hidden="true"></i>
                                            {{-- <a href="{{ url('/admin/wedding/deletebanner/' . $banner->id) }}"
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
    {{-- <div class="modal fade mt-5" id="weddingBannerAddNewModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Banner Add</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/admin/wedding/addWeddingBanner') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Wedding Banner Video</label>
                            <input id="file" type="file" accept="video/mp4,video/mkv, video/x-m4v,video/*"
                                name="w_banner" id="w_banner" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Heading</label>
                            <input type="text" name="banner_heading" id="banner_heading" class="form-control"
                                placeholder="" aria-describedby="helpId">
                        </div>

                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea class="form-control" name="banner_desc" id="banner_desc" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
    {{-- bannerEditModal --}}
    <div class="modal fade mt-5" id="weddingBannerEditModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Banner Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/admin/wedding/updateWeddingBanner/' . $wb->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Wedding Banner Video</label>
                            <input id="file" type="file" accept="video/mp4,video/mkv, video/x-m4v,video/*"
                                name="w_banner" id="w_banner" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Current Banner Video</label>
                            <iframe width="250" height="75" class="form-control"
                                src="{{ asset('asset/Images/weddingBanner/' . $wb->w_banner) }}"></iframe>
                        </div>
                        <div class="form-group">
                            <label for="">Heading</label>
                            <input type="text" name="banner_heading" id="banner_heading" class="form-control"
                                value="{{ $wb->banner_heading }}" placeholder="" aria-describedby="helpId">
                        </div>

                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea class="form-control" name="banner_desc" id="banner_desc" rows="3">{!! $wb->banner_desc !!}</textarea>
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

    {{-- weddingContentModal --}}
    <div class="modal fade mt-5" id="weddingContentModal" tabindex="-1" role="dialog"
        aria-labelledby="bannerModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 100rem;right: 35rem;">
                <div class="modal-header">
                    <h5 class="modal-title" id="bannerModalLabel">Wedding Banner Section</h5>
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> --}}
                </div>
                <div class="modal-body">
                    {{-- <button type="button" id="weddingBannerModalAddNewBtn" class="btn btn-sm btn-dark mb-2"
                        style="pointer-events: auto !important;">Add New</button> --}}
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Image</th>
                                <th scope="col">Heading</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($w_contents as $wc)
                                <tr>
                                    <td>{{ $wc->id }}</td>
                                    <td>
                                        <img src="{{ asset('asset/images/weddingContent/' . $wc->image) }}"
                                            style="width: 150px;">
                                    </td>
                                    <td>{{ $wc->heading }}</td>
                                    <td>{!! $wc->desc !!}</td>
                                    <td>
                                        <span class="d-flex">
                                            <i class="fa fa-pencil-square pt-1 mr-3" id="weddingContentEditBtn"
                                                style="font-size: x-large;" aria-hidden="true"></i>
                                            {{-- <a href="{{ url('/admin/wedding/deletebanner/' . $banner->id) }}"
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
    {{-- <div class="modal fade mt-5" id="weddingBannerAddNewModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Banner Add</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/admin/wedding/addWeddingBanner') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Wedding Banner Video</label>
                            <input id="file" type="file" accept="video/mp4,video/mkv, video/x-m4v,video/*"
                                name="w_banner" id="w_banner" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Heading</label>
                            <input type="text" name="banner_heading" id="banner_heading" class="form-control"
                                placeholder="" aria-describedby="helpId">
                        </div>

                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea class="form-control" name="banner_desc" id="banner_desc" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div> --}}
    {{-- weddingContentEditModal --}}
    <div class="modal fade mt-5" id="weddingContentEditModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Banner Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/admin/wedding/updateWeddingContent/' . $wb->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="image" id="image"
                                value="{{ $w_contents[0]->image }}" placeholder="" aria-describedby="fileHelpId">
                        </div>
                        <div class="row">
                            <div class="col">
                                <h4>Old Image</h4>
                                @if (!empty($w_contents[0]->image))
                                    <img src="{{ asset('asset/images/weddingContent/' . $w_contents[0]->image) }}"
                                        style="width: 150px;">
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Heading</label>
                            <input type="text" name="heading" id="heading" class="form-control"
                                value="{{ $w_contents[0]->heading }}" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea class="form-control" name="desc" id="desc" rows="3">{{ $w_contents[0]->desc }}</textarea>
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

    {{-- weddingImagesModal --}}
    <div class="modal fade mt-5" id="weddingImagesModal" tabindex="-1" role="dialog"
        aria-labelledby="bannerModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 70rem;right: 20rem;">
                <div class="modal-header">
                    <h5 class="modal-title" id="bannerModalLabel">Wedding Images Section</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <button type="button" id="weddingImagesAddNewBtn" class="btn btn-sm btn-dark mb-2"
                        style="pointer-events: auto !important;">Add New</button>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Image</th>
                                <th scope="col">Image Heading</th>
                                <th scope="col">Image Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($w_images as $wi)
                                <tr>
                                    <td>{{ $wi->id }}</td>
                                    <td>
                                        <img src="{{ asset('asset/images/weddingImages/' . $wi->bg_image) }}"
                                            style="width: 150px;">
                                    </td>
                                    <td>{{ $wi->bg_image_heading }}</td>
                                    <td>{{ $wi->bg_image_desc }}</td>
                                    <td>
                                        <span class="d-flex">
                                            <a href="{{ url('/admin/home/editWeddingImage/' . $wi->id) }}"
                                                id="weddingImagesEditBtn" style="pointer-events: auto;">
                                                <i class="fa fa-pencil-square pt-1 mr-3"
                                                    style="font-size: x-large;pointer-events: auto;"
                                                    aria-hidden="true"></i>
                                            </a>
                                            <a href="{{ url('/admin/home/deleteWeddingImage/' . $wi->id) }}"
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
    {{-- weddingImagesAddNewModal --}}
    <div class="modal fade mt-5" id="weddingImagesAddNewModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Wedding Image Add</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/admin/home/addWeddingImage') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="bg_image" id="bg_image" placeholder=""
                                aria-describedby="fileHelpId">
                        </div>
                        <div class="form-group">
                            <label for="">Image Heading</label>
                            <input type="text" name="bg_image_heading" id="bg_image_heading" class="form-control"
                                placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Image Description</label>
                            <input type="text" name="bg_image_desc" id="bg_image_desc" class="form-control"
                                placeholder="" aria-describedby="helpId">
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

    {{-- iconicBannerModal --}}
    <div class="modal fade mt-5" id="iconicBannerModal" tabindex="-1" role="dialog"
        aria-labelledby="bannerModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 100rem;right: 35rem;">
                <div class="modal-header">
                    <h5 class="modal-title" id="bannerModalLabel">Iconic Banner Section</h5>
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> --}}
                </div>
                <div class="modal-body">
                    {{-- <button type="button" id="weddingBannerModalAddNewBtn" class="btn btn-sm btn-dark mb-2"
                        style="pointer-events: auto !important;">Add New</button> --}}
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Banner Video</th>
                                <th scope="col">Heading</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($icon_banner as $ib)
                                <tr>
                                    <td>{{ $ib->id }}</td>
                                    <td>
                                        <iframe width="250" height="75"
                                            src="{{ asset('asset/Images/iconicBanner/' . $ib->icon_banner) }}"></iframe>
                                    </td>
                                    <td>{{ $ib->icon_bheading }}</td>
                                    <td>{!! $ib->icon_bdesc !!}</td>
                                    <td>
                                        <span class="d-flex">
                                            <i class="fa fa-pencil-square pt-1 mr-3" id="iconicBannerEditBtn"
                                                style="font-size: x-large;" aria-hidden="true"></i>
                                            {{-- <a href="{{ url('/admin/wedding/deletebanner/' . $banner->id) }}"
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
    {{-- iconicBannerEditModal --}}
    <div class="modal fade mt-5" id="iconicBannerEditModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Iconic Banner Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/admin/wedding/updateIconicBanner/' . $ib->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Wedding Banner Video</label>
                            <input id="file" type="file" accept="video/mp4,video/mkv, video/x-m4v,video/*"
                                name="icon_banner" id="icon_banner" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Current Banner Video</label>
                            <iframe width="250" height="75" class="form-control"
                                src="{{ asset('asset/Images/iconicBanner/' . $ib->icon_banner) }}"></iframe>
                        </div>
                        <div class="form-group">
                            <label for="">Heading</label>
                            <input type="text" name="icon_bheading" id="icon_bheading" class="form-control"
                                value="{{ $ib->icon_bheading }}" placeholder="" aria-describedby="helpId">
                        </div>

                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea class="form-control" name="icon_bdesc" id="icon_bdesc" rows="3">{!! $ib->icon_bdesc !!}</textarea>
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




    {{-- weddingVideosModal --}}
    <div class="modal fade mt-5" id="weddingVideosModal" tabindex="-1" role="dialog"
        aria-labelledby="bannerModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 70rem;right: 20rem;">
                <div class="modal-header">
                    <h5 class="modal-title" id="bannerModalLabel">Wedding Videos Section</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <button type="button" id="weddingVideosAddNewBtn" class="btn btn-sm btn-dark mb-2"
                        style="pointer-events: auto !important;">Add New</button>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Wedding Videos</th>
                                <th scope="col">Video Heading</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($w_videos as $wv)
                                <tr>
                                    <td>{{ $wv->id }}</td>
                                    <td>
                                        <iframe width="250" height="75"
                                            src="{{ asset('asset/Images/weddingVideo/' . $wv->im_video) }}"></iframe>
                                    </td>
                                    <td>{{ $wv->im_vheading }}</td>
                                    <td>
                                        <span class="d-flex">
                                            <a href="{{ url('/admin/wedding/editWeddingVideo/' . $wv->id) }}"
                                                id="weddingImagesEditBtn" style="pointer-events: auto;">
                                                <i class="fa fa-pencil-square pt-1 mr-3"
                                                    style="font-size: x-large;pointer-events: auto;"
                                                    aria-hidden="true"></i>
                                            </a>
                                            <a href="{{ url('/admin/wedding/deleteWeddingVideo/' . $wv->id) }}"
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
    {{-- weddingVideosAddNewModal --}}
    <div class="modal fade mt-5" id="weddingVideosAddNewModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Wedding Video Add</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/admin/wedding/addWeddingVideo') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Wedding Video</label>
                            <input id="file" type="file" accept="video/mp4,video/mkv, video/x-m4v,video/*"
                                name="im_video" id="im_video" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Video Heading</label>
                            <input type="text" name="im_vheading" id="im_vheading" class="form-control"
                                placeholder="" aria-describedby="helpId">
                        </div>
                        {{-- <div class="form-group">
                            <label for="">Current Banner Video</label>
                            <iframe width="250" height="75" class="form-control"
                                src="{{ asset('asset/Images/weddingBanner/' . $wb->w_banner) }}"></iframe>
                        </div> --}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-------------------------------------------------- Modal End ------------------------------------------------------------->
    <script>
        CKEDITOR.replace('banner_desc');
        CKEDITOR.replace('desc');
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
        $(document).ready(function() {
            $("#weddingBannerBtn").click(function() {
                $('#weddingBannerModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
            $("#weddingBannerEditBtn").click(function() {
                $('#weddingBannerEditModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });

            $("#weddingContentBtn").click(function() {
                $('#weddingContentModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
            $("#weddingContentEditBtn").click(function() {
                $('#weddingContentEditModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });

            $("#weddingImagesModalbtn").click(function() {
                $('#weddingImagesModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
            $("#weddingImagesAddNewBtn").click(function() {
                $('#weddingImagesAddNewModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });

            $("#iconicBannerBtn").click(function() {
                $('#iconicBannerModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
            $("#iconicBannerEditBtn").click(function() {
                $('#iconicBannerEditModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });


            $("#weddingVideosBtn").click(function() {
                $('#weddingVideosModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
            $("#weddingVideosAddNewBtn").click(function() {
                $('#weddingVideosAddNewModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
        });
    </script>
@endsection
