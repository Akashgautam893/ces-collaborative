@extends('front.layout')
@section('content')
    <section class="fw-main-row about">
        <div class="fw-container-fluid">
            <div class="fw-row">
                @foreach ($aboutUs as $aboutUsItem)
                    <div class="col-img fw-col-xs-12 fw-col-sm-4 fw-col-md-6">
                        <div style="background-image: url({{ asset('asset/images/aboutUsImage/' . $aboutUsItem->image) }})">
                            <img src="{{ asset('asset/images/aboutUsImage/' . $aboutUsItem->image) }}" alt="about me">
                        </div>
                    </div>
                    <div class="fw-col-xs-12 fw-col-sm-8 fw-col-md-6">
                        <!-- Heading -->
                        <div class="heading-decor">
                            <i class="fa fa-pencil-square float-right" id="aboutUsModalbtn" style="font-size: xxx-large;"
                                aria-hidden="true"></i>
                            <h5>A Picture Says A Thousand Words</h5>
                            <h2>About Us </h2>
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
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Banner block -->
    <div class="banner-block fw-main-row" style="height: 450px;">
        <div class="item" style="background-image: url({{ asset('asset/images/imgs/about-bg.jpg') }});">
            <div class="centered-container fw-container">
                <div class="h2">Subscribe Us</div>
                <p class="big">Register with us and stay updated to receive our latest newsletters,
                    periodicals,<br> travel blogs, documentaries, and more insightful stories.
                </p>
                <form action="#" class="subscribe-form"><input type="text" class="input"
                        placeholder="Enter your e-mail..."><button type="submit"
                        class="button-style3 big"><span>Subscribe</span></button></form>
            </div>
        </div>
    </div>


    <!-- About Us Modal -->
    <div class="modal fade mt-5" id="aboutUsModal" tabindex="-1" role="dialog" aria-labelledby="featuredservicesLabel"
        aria-hidden="true">
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
    {{-- <div class="modal fade mt-5" id="aboutUsAddNewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
    </div> --}}
    <!-- About Us Edit Modal -->
    <div class="modal fade mt-5" id="aboutUsEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
    <script>
        $(document).ready(function() {
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
        });
    </script>
@endsection
