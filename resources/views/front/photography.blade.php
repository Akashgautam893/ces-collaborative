@extends('front.layout')
@section('content')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    @foreach ($p_banner as $pb)
        <div class="banner-block fw-main-row photography-page" style="height: 500px;">
            <div class="item"
                style="background-image: url({{ asset('asset/images/photographyBanner/' . $pb->photo_banner) }});">
                <div class="centered-container fw-container">
                    <div class="h1">{{ $pb->heading }}</div>
                    <i class="fa fa-pencil-square float-right" id="photographyBannerModalbtn" style="font-size: xxx-large;"
                        aria-hidden="true"></i>
                    <p>{!! $pb->desc !!}</p>
                </div>
            </div>
        </div>
    @endforeach

    <!-- END Banner block -->
    <section class="fw-main-row">
        <div class="fw-container-fluid p-0">
            <!-- Persona block -->
            <div class="persona-block" style="margin:0">
                <div class="image-l"
                    style="background-image: url({{ asset('asset/images/photographyFeature/' . $p_feature[0]->f_image) }});">
                </div>
                <div class="wrap tac">
                    {!! $p_feature[0]->our_features !!}
                    <!--<p><a href="#" class="button-style3"><i class="icon-right-thin-chevron"></i><span>know MORE</span></a></p>-->
                </div>
                <div class="image-r"
                    style="background-image: url({{ asset('asset/images/photographyFeature/' . $p_feature[0]->s_image) }});">
                    <i class="fa fa-pencil-square float-right mt-5 mr-5" id="photographyFeatureModalbtn"
                        style="font-size: xxx-large;" aria-hidden="true"></i>
                </div>
            </div>
            <!-- END Persona block -->
        </div>
    </section>
    <section class="fw-main-row">
        <div class="fw-container-fluid">
            @foreach ($f_services as $f_service)
                <!-- Heading -->
                <div class="heading-decor px-5">
                    <i class="fa fa-pencil-square float-right" id="featuredServicesModalbtn" style="font-size: xxx-large;"
                        aria-hidden="true"></i>
                    <h5>{{ $f_service->p_heading }}</h5>
                    <h1>{{ $f_service->s_heading }}</h1>
                </div>
                <!-- END Heading -->
                <p class="p-text tac" style="max-width:630px;margin: 0 auto 25px;">{{ $f_service->short_desc }}</p>
            @endforeach
            <div class="row">
                <div class="col">
                    <i class="fa fa-pencil-square float-right" id="featuredServicesCatelogModalbtn"
                        style="font-size: xxx-large;" aria-hidden="true"></i>
                </div>
            </div>
            <div class="fw-row">
                <!-- Featured Services Catelog items -->
                    @foreach ($fsCatelogs as $fsCatelog)
                        <div class="fw-col-xs-12 fw-col-sm-6 fw-col-md-3">
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
                <!-- END Category items -->
                <!-- Category item -->
                {{-- <div class="fw-col-xs-12 fw-col-sm-6 fw-col-md-3">
                    <div class="category-item dark-bg"
                        style="background-image: url({{ asset('asset/images/imgs/pho-se-1.jpg') }});">
                        <img src="{{ asset('asset/images/imgs/pho-se-1.jpg') }}" alt="portrait">
                        <a href="{{ url('/family_portraits') }}" class="button-style2 centered-container">
                            <span>family portraits</span>
                        </a>
                    </div>
                </div> --}}
                <!-- END Category item -->
            </div>
            <!-- END Category items -->
        </div>
    </section>
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


    <!-------------------------------------------------- Modal Start ------------------------------------------------------------->
    <!-- photographyBannerModal -->
    <div class="modal fade mt-5" id="photographyBannerModal" tabindex="-1" role="dialog"
        aria-labelledby="featuredservicesLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 80rem;right: 24rem;">
                <div class="modal-header">
                    <h5 class="modal-title" id="featuredservicesLabel">Photography Banner Section</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{-- <button type="button" id="photographyBannerModalAddNewBtn" class="btn btn-sm btn-dark mb-2"
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
                            @foreach ($p_banner as $pb)
                                <tr>
                                    <td>{{ $pb->id }}</td>
                                    <td>
                                        <img src="{{ asset('asset/images/photographyBanner/' . $pb->photo_banner) }}"
                                            style="width: 150px;">
                                    </td>
                                    <td>{{ $pb->heading }}</td>
                                    <td>{!! $pb->desc !!}</td>
                                    <td>
                                        <span class="d-flex">
                                            <i class="fa fa-pencil-square pt-1 mr-3" id="photographyBannerModalEditBtn"
                                                style="font-size: x-large;" aria-hidden="true"></i>
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
    <!-- photographyBannerEditModal-->
    <div class="modal fade mt-5" id="photographyBannerEditModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Photography Banner Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/admin/photography/updatePhotographyBanner/' . $p_banner[0]->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="photo_banner" id="photo_banner"
                                placeholder="" aria-describedby="fileHelpId">
                        </div>
                        <div class="form-group">
                            <label for="">Current Image</label>
                            <img src="{{ asset('asset/images/photographyBanner/' . $p_banner[0]->photo_banner) }}"
                                class="form-control" style="width: 150px;">
                        </div>
                        <div class="form-group">
                            <label for="">Heading</label>
                            <input type="text" name="heading" id="heading" class="form-control" placeholder=""
                                value="{{ $p_banner[0]->heading }}" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea class="form-control" name="desc" id="desc" rows="3">{{ $p_banner[0]->desc }}</textarea>
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

    <!-- photographyFeatureModal -->
    <div class="modal fade mt-5" id="photographyFeatureModal" tabindex="-1" role="dialog"
        aria-labelledby="featuredservicesLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 88rem;right: 24rem;">
                <div class="modal-header">
                    <h5 class="modal-title" id="photographyFeatureLabel">Photography Featured Section</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{-- <button type="button" id="photographyFeatureModalAddNewBtn" class="btn btn-sm btn-dark mb-2"
                        style="pointer-events: auto !important;">Add New</button> --}}
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">First Image</th>
                                <th scope="col">Second Image</th>
                                <th scope="col">Features</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($p_feature as $pf)
                                <tr>
                                    <td>{{ $pf->id }}</td>
                                    <td><img src="{{ asset('asset/images/photographyFeature/' . $pf->f_image) }}"
                                            class="form-control" style="width: 150px;">
                                    </td>
                                    <td><img src="{{ asset('asset/images/photographyFeature/' . $pf->s_image) }}"
                                            class="form-control" style="width: 150px;">
                                    </td>
                                    <td>{!! $pf->our_features !!}</td>
                                    <td>
                                        <span class="d-flex">
                                            <i class="fa fa-pencil-square pt-1 mr-3" id="photographyFeatureModalEditBtn"
                                                style="font-size: x-large;" aria-hidden="true"></i>
                                            {{-- <a href="{{ url('/admin/home/deletebanner/' . $pf->id) }}"
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
    <!-- photographyBannerEditModal-->
    <div class="modal fade mt-5" id="photographyFeatureEditModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 75rem;right: 20rem;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Featured Services</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/admin/photography/updatePhotographyFeature/' . $p_feature[0]->id) }}"
                    method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">First Image</label>
                            <input type="file" class="form-control" name="f_image" id="f_image" placeholder=""
                                aria-describedby="fileHelpId">
                        </div>
                        <div class="form-group">
                            <label for="">Current First Image</label>
                            <img src="{{ asset('asset/images/photographyFeature/' . $p_feature[0]->f_image) }}"
                                class="form-control" style="width: 150px;">
                        </div>
                        <div class="form-group">
                            <label for="">Second Image</label>
                            <input type="file" class="form-control" name="s_image" id="s_image" placeholder=""
                                aria-describedby="fileHelpId">
                        </div>
                        <div class="form-group">
                            <label for="">Current Second Image</label>
                            <img src="{{ asset('asset/images/photographyFeature/' . $p_feature[0]->s_image) }}"
                                class="form-control" style="width: 150px;">
                        </div>
                        <div class="form-group">
                            <label for="">Features</label>
                            <textarea class="form-control" name="our_features" id="our_features" rows="3">{{ $p_feature[0]->our_features }}</textarea>
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

    <!-- Service tab Heading & description Table -->
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
    <!--  Add Heading & description in Service tab -->
    <div class="modal fade mt-5" id="featuredServicesAddNewModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 75rem;right: 20rem;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Service</h5>
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
    <!-- Edit Heading & description of Service tab-->
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

    {{-- Service Catelog Table --}}
    <div class="modal fade mt-5" id="featuredServicesCatelogModal" tabindex="-1" role="dialog"
        aria-labelledby="bannerModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 70rem;right: 14rem;">
                <div class="modal-header">
                    <h5 class="modal-title" id="featuredServicesCatelogModalLabel">Featured Services Catelog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <button type="button" id="featuredServicesCatelogAddNewBtn" class="btn btn-sm btn-dark mb-2"
                        style="pointer-events: auto !important;">Add New Service</button>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Image</th>
                                <th scope="col">Service Name</th>
                                {{-- <th scope="col">Slug</th> --}}
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
                                    {{-- <td>{{ $fsCatelog->slug }}</td> --}}
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
    {{-- Add New Service in ServiceCatelogTable --}}
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
                        {{-- <div class="form-group">
                            <label for="">Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control" placeholder=""
                                aria-describedby="helpId">
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

    <!-- Service Catelog Image Table -->
    <div class="modal fade mt-5" id="addImageInFeaturedServicesCatelogModal" tabindex="-1" role="dialog"
        aria-labelledby="featuredservicesLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="featuredservicesLabel">All Services With Images</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <button type="button" id="addImageInFeaturedServicesAddBtn" class="btn btn-sm btn-dark mb-2"
                        style="pointer-events: auto !important;">Add New Image in Service</button>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Image</th>
                                <th scope="col">Service Name</th>
                                <th scope="col">Image Text</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fSImages as $fSImage)
                                <tr>
                                    <td>{{ $fSImage->id }}</td>
                                    <td><img src="{{ asset('asset/images/fsImage/' . $fSImage->image) }}"
                                            style="width: 150px;"></td>
                                    <td>{{ $fSImage->featuredServicesCatelog->service_name }}</td>
                                    <td>{{ $fSImage->image_text }}</td>
                                    <td>
                                        <span class="d-flex">
                                            <a href="{{ url('/admin/home/editImageInFsCatelog/' . $fSImage->id) }}"
                                                style="pointer-events: auto;">
                                                <i class="fa fa-pencil-square pt-1 mr-3"
                                                    style="font-size: x-large;pointer-events: auto;"
                                                    aria-hidden="true"></i>
                                            </a>
                                            <a href="{{ url('/admin/home/deleteImageInFsCatelog/' . $fSImage->id) }}"
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
    <!-- Add Image in Service Catelog  -->
    <div class="modal fade mt-5" id="addImageInFeaturedServicesAddModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Image In Service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/admin/home/addImageInFsCatelog') }}" method="post"
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
                            <select class="form-control" name="fsCatlogName_id" id="fsCatlogName_id" required>
                                <option value="" selected disabled>Select Service Name</option>
                                @foreach ($fsCatelogs as $fsCatelog)
                                    <option value="{{ $fsCatelog->id }}">{{ $fsCatelog->service_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Image Text</label>
                            <input type="text" name="image_text" id="image_text" class="form-control" placeholder=""
                                aria-describedby="helpId">
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


    <script>
        CKEDITOR.replace('short_desc');
        CKEDITOR.replace('desc');
        CKEDITOR.replace('our_features');
        $(document).ready(function() {
            $("#photographyBannerModalbtn").click(function() {
                $('#photographyBannerModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
            $("#photographyBannerModalEditBtn").click(function() {
                $('#photographyBannerEditModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });




















            $("#photographyFeatureModalbtn").click(function() {
                $('#photographyFeatureModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
            $("#photographyFeatureModalAddNewBtn").click(function() {
                $('#photographyFeatureAddNewModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
            $("#photographyFeatureModalEditBtn").click(function() {
                $('#photographyFeatureEditModal').modal({
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


            $("#addImageInFeaturedServicesCatelogbtn").click(function() {
                $('#addImageInFeaturedServicesCatelogModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
            $("#addImageInFeaturedServicesAddBtn").click(function() {
                $('#addImageInFeaturedServicesAddModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
            $("#addImageInFeaturedServicesEditBtn").click(function() {
                $('#addImageInFeaturedServicesEditModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
        });
    </script>
@endsection
