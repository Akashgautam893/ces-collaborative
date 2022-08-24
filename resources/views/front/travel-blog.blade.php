@extends('front.layout')
@section('content')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    {{-- <style>
        input[type="date"] {
            position: relative;
        }

        input[type="date"]:after {
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            content: "\f073";
            color: #555;
            padding: 0 5px;
        }

        /* change color of symbol on hover */
        input[type="date"]:hover:after {
            color: #bf1400;
        }

        /* make the native arrow invisible and stretch it over the whole field so you can click anywhere in the input field to trigger the native datepicker*/
        input[type="date"]::-webkit-calendar-picker-indicator {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: auto;
            height: auto;
            color: transparent;
            background: transparent;
        }

        /* adjust increase/decrease button */
        input[type="date"]::-webkit-inner-spin-button {
            z-index: 1;
        }

        /* adjust clear button */
        input[type="date"]::-webkit-clear-button {
            z-index: 1;
        }
    </style> --}}
    <div class="banner-block fw-main-row profiles" style="height: 650px;">
        <div class="item dark-bg" style="background-image: url({{ asset('asset/images/imgs/tr-bg.jpg') }});">
            <div class="centered-container fw-container">
                <i class="fa fa-pencil-square float-right" id="bannerModalbtn" style="font-size: xxx-large;"
                    aria-hidden="true"></i>
                <div class="h1"><a href="#">Exploring Incredible Travel Destinations</a></div>
                <div class="post-details white"><span class="item"><i class="icon-calendar-2"></i><span>Aug 02
                            2022</span></span><span class="item"><i class="icon-circular-clock"></i><span>6
                            min</span></span></div>
                <p>If you are a travel lover and have traveled the unchartered territories of Japan, the US,
                    Netherlands, and Denmark, we can turn your unique travel experiences and sweet memories into
                    full-time travel stories. Ces Collaborative offers travel blogging services where we film your
                    travel stories and share them with the world. </p>
            </div>
        </div>
    </div>
    <!-- END Banner block -->
    <div class="row">
        <div class="col">
            <button type="button" id="addCityDetailsBtn" class="btn btn-sm btn-dark mb-2"
                style="pointer-events: auto !important;">Add Details in City</button>
        </div>
        <div class="col">
            <i class="fa fa-pencil-square float-right" id="travelCatelogbtn" style="font-size: xxx-large;"
                aria-hidden="true"></i>
        </div>
    </div>
    <div class="fw-main-row layer-bg">
        <div class="fw-container-fluid">
            <div class="article-carousel">
                @foreach ($t_catelog as $tc)
                    <div class="ac-item"
                        style="background-image: url({{ asset('asset/images/travelCatelog/' . $tc->city_image) }});">
                        <a href="{{ url('/admin/travel-blog/catelogCity/'.$tc->id) }}">
                            <div class="text">
                                <h2>{{ $tc->city_name }}</h2>
                                <div class="post-details white">
                                    <span class="item">
                                        <i class="icon-calendar-2"></i>
                                        <span>{{ $tc->date }}</span>
                                    </span>
                                    <span class="item">
                                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                        <span>{{ ucfirst($tc->author_name) }}</span>
                                    </span>
                                </div>
                                <p>{!! $tc->desc !!}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Banner block -->
    <div class="banner-block fw-main-row" style="height: 450px;">
        <div class="item" style="background-image: url({{ asset('asset/images/imgs/about-bg.jpg') }});">
            <div class="centered-container fw-container">
                <div class="h2">Subscribe Us</div>
                <p class="big">Register with us and stay updated to receive our latest newsletters,
                    periodicals,<br>travel blogs, documentaries, and more insightful stories. </p>
                <form action="#" class="subscribe-form"><input type="text" class="input"
                        placeholder="Enter your e-mail..."><button type="submit"
                        class="button-style3 big"><span>Subscribe</span></button></form>
            </div>
        </div>
    </div>

    <!-------------------------------------------------- Modal Start ------------------------------------------------------------->
    {{-- travelCatelogModal --}}
    <div class="modal fade mt-5" id="travelCatelogModal" tabindex="-1" role="dialog" aria-labelledby="bannerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 92rem;right: 30rem;">
                <div class="modal-header">
                    <h5 class="modal-title" id="bannerModalLabel">Travel Catelog</h5>
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> --}}
                </div>
                <div class="modal-body">
                    <button type="button" id="travelCatelogAddNewBtn" class="btn btn-sm btn-dark mb-2"
                        style="pointer-events: auto !important;">Add New</button>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">City Image</th>
                                <th scope="col">City Name</th>
                                <th scope="col">Date</th>
                                <th scope="col">Author</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($t_catelog as $tc)
                                <tr>
                                    <th>{{ $tc->id }}</th>
                                    <th>
                                        @if (!empty($tc->city_image))
                                            <img src="{{ asset('asset/images/travelCatelog/' . $tc->city_image) }}"
                                                style="width: 150px;">
                                        @endif
                                    </th>
                                    <th>{{ $tc->city_name }}</th>
                                    <th>{{ $tc->date }}</th>
                                    <th>{{ $tc->author_name }}</th>
                                    <th>{!! mb_substr($tc->desc, 0, 75) . '........' !!}</th>
                                    <td>
                                        <span class="d-flex">
                                            <a href="{{ url('/admin/travel-blog/edittravel-blog/' . $tc->id) }}"
                                                id="slidingImagesEditBtn" style="pointer-events: auto;">
                                                <i class="fa fa-pencil-square pt-1 mr-3"
                                                    style="font-size: x-large;pointer-events: auto;" aria-hidden="true"></i>
                                            </a>
                                            <a href="{{ url('/admin/travel-blog/deletetravel-blog/' . $tc->id) }}"
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
    {{-- travelCatelogAddNewModal --}}
    <div class="modal fade mt-5" id="travelCatelogAddNewModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Travel Catelog</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/admin/travel-blog/addtravel-blog') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">City Image</label>
                            <input type="file" class="form-control" name="city_image" id="city_image" placeholder=""
                                aria-describedby="fileHelpId">
                        </div>
                        <div class="form-group">
                            <label for="">City Name</label>
                            <input type="text" name="city_name" id="city_name" class="form-control" placeholder=""
                                aria-describedby="helpId">
                        </div>
                        {{-- <div class="form-group">
                            <label for="">Date</label>
                            <input type="date" name="date" id="date" class="form-control">
                        </div> --}}
                        <div class="form-group">
                            <label for="">Author Name</label>
                            <input type="text" name="author_name" id="author_name" class="form-control"
                                placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">City Description</label>
                            <textarea class="form-control" name="desc" id="desc" rows="3"></textarea>
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

    {{-- CityDetailsForm --}}
    <div class="modal fade mt-5" id="CityDetailsForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Details In City</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/admin/travel-blog/addCityDetails') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Choose City</label>
                            <select class="form-control" name="travel_catelogs_id" id="travel_catelogs_id" required>
                                <option value="" selected disabled>Select Service Name</option>
                                @foreach ($t_catelog as $tc)
                                    <option value="{{ $tc->id }}">{{ $tc->city_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">City Banner</label>
                            <input type="file" class="form-control" name="banner" id="banner" placeholder=""
                                aria-describedby="fileHelpId">
                        </div>
                        <div class="form-group">
                            <label for="">Description Part 1</label>
                            <textarea class="form-control" name="fir_desc" id="fir_desc" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">City First Image</label>
                            <input type="file" class="form-control" name="fir_image" id="fir_image" placeholder=""
                                aria-describedby="fileHelpId">
                        </div>
                        <div class="form-group">
                            <label for="">Description Part 2</label>
                            <textarea class="form-control" name="sec_desc" id="sec_desc" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">City Second Image</label>
                            <input type="file" class="form-control" name="sec_image" id="sec_image" placeholder=""
                                aria-describedby="fileHelpId">
                        </div>
                        <div class="form-group">
                            <label for="">City Third Image</label>
                            <input type="file" class="form-control" name="thrd_image" id="thrd_image" placeholder=""
                                aria-describedby="fileHelpId">
                        </div>
                        <div class="form-group">
                            <label for="">City Fourth Image</label>
                            <input type="file" class="form-control" name="frt_image" id="frt_image" placeholder=""
                                aria-describedby="fileHelpId">
                        </div>
                        <div class="form-group">
                            <label for="">Description Part 3</label>
                            <textarea class="form-control" name="thrd_desc" id="thrd_desc" rows="3"></textarea>
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

    <script>
        CKEDITOR.replace('desc');
        CKEDITOR.replace('fir_desc');
        CKEDITOR.replace('sec_desc');
        CKEDITOR.replace('thrd_desc');

        $(document).ready(function() {
            $("#travelCatelogbtn").click(function() {
                $('#travelCatelogModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
            $("#travelCatelogAddNewBtn").click(function() {
                $('#travelCatelogAddNewModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });

            $("#addCityDetailsBtn").click(function() {
                $('#CityDetailsForm').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
            $("#travelCatelogAddNewBtn").click(function() {
                $('#travelCatelogAddNewModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
        });
    </script>
@endsection
