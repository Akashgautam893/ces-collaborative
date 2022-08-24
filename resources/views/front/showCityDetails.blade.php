{{-- @php
echo '<pre>';
print_r($city->toArray());
die();
@endphp --}}
@extends('front.layout')
@section('content')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <div class="post-image" style="background-image: url({{ asset('asset/images/city/' . $city->banner) }});"></div>
    <!-- Page header -->
    <div class="page-header fw-main-row">
        <div class="fw-container" style="max-width:1200px">
            <a href="{{ url('/admin/travel-blog/editCityDetails/' . $city->id) }}" style="pointer-events: auto;">
                <i class="fa fa-pencil-square pt-1 mr-3" style="font-size: x-large;pointer-events: auto;"
                    aria-hidden="true"></i>
            </a>
            <div class="fw-row">
                <div class="fw-col-xs-12 fw-col-sm-8">
                    <h1>{{ $city->city_name }}</h1>
                    <div class="post-details">
                        <span class="item">
                            <i class="icon-calendar-2"></i>
                            <span>{{ $city->date }}</span>
                        </span>
                        <span class="item">
                            <i class="icon-circular-clock"></i>
                            <span>{{ $city->author_name }}</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Page header -->
    <!-- Main block -->
    <main class="fw-main-row">
        <div class="fw-container site-content" style="max-width:1200px">
            <p>{!! $city->fir_desc !!}</p>
            <p><img src="{{ asset('asset/images/city/' . $city->fir_image) }}" alt="Post image"></p>
            <p>{!! $city->sec_desc !!}</p>
            <div class="fw-row">
                <div class="fw-col-xs-12 fw-col-sm-4"><img src="{{ asset('asset/images/city/' . $city->sec_image) }}"
                        alt=""></div>
                <div class="fw-col-xs-12 fw-col-sm-4"><img src="{{ asset('asset/images/city/' . $city->thrd_image) }}"
                        alt=""></div>
                <div class="fw-col-xs-12 fw-col-sm-4"><img src="{{ asset('asset/images/city/' . $city->frt_image) }}"
                        alt=""></div>
            </div>
            {!! $city->thrd_desc !!}
        </div>
    </main>

    {{-- CityDetailsForm --}}
    <div class="modal fade mt-5" id="cityEditBtnModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Details In City</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/admin/travel-blog/updateCityDetails/' . $city->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Choose City</label>
                            <select class="form-control" name="travel_catelogs_id" id="travel_catelogs_id" required>
                                <option value="" selected disabled>Select Service Name</option>
                                @foreach ($t_catelog as $tc)
                                    <option value="{{ $tc->id }}" @if ($city->travel_catelogs_id = $tc->id) selected @endif>
                                        {{ $tc->city_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">City Banner</label>
                            <input type="file" class="form-control" name="banner" id="banner" placeholder=""
                                value="{{ $city->banner }}" aria-describedby="fileHelpId">
                        </div>
                        <div class="form-group">
                            <label for="">Description Part 1</label>
                            <textarea class="form-control" name="fir_desc" id="fir_desc" rows="3">{{ $city->fir_desc }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">City First Image</label>
                            <input type="file" class="form-control" name="fir_image" id="fir_image" placeholder=""
                                aria-describedby="fileHelpId">
                        </div>
                        <div class="form-group">
                            <label for="">Description Part 2</label>
                            <textarea class="form-control" name="sec_desc" id="sec_desc" rows="3">{{ $city->sec_desc }}</textarea>
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
                            <textarea class="form-control" name="thrd_desc" id="thrd_desc" rows="3">{{ $city->thrd_desc }}</textarea>
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
            $("#cityEditBtn").click(function() {
                $('#cityEditBtnModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
        });
    </script>
@endsection
