{{-- @php
echo '<pre>';
print_r($ci);
die();
@endphp --}}
@extends('front.layout')
@section('content')
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    {{-- CityDetailsForm --}}
    <div class="modal fade mt-5" id="cityEditBtnModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Details In City</h5>
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> --}}
                </div>
                <form action="{{ url('/admin/travel-blog/updateCityDetails/' . $city->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Choose City-- {{ $city->travel_catelogs_id }}</label>
                            <select class="form-control" name="travel_catelogs_id" id="travel_catelogs_id" required>
                                <option value="" selected disabled>Select Service Name </option>
                                @foreach ($t_catelog as $tc)
                                    <option value="{{ $tc->id }}" {{ ($tc->id==$city->travel_catelogs_id)? 'selected':""}} >
                                        {{ $tc->city_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">City Banner</label>
                            <input type="file" class="form-control" name="banner" id="banner" placeholder=""
                                value="" aria-describedby="fileHelpId">
                        </div>
                        <div class="form-group">
                            <label for="">Current Banner Image</label>
                            <img src="{{ asset('asset/images/city/' . $city->banner) }}" class="form-control" style="width: 150px;">
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
                            <label for="">Current First Image</label>
                            <img src="{{ asset('asset/images/city/' . $city->fir_image) }}" class="form-control" style="width: 150px;">
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
                            <label for="">Current Second Image</label>
                            <img src="{{ asset('asset/images/city/' . $city->sec_image) }}" class="form-control" style="width: 150px;">
                        </div>
                        <div class="form-group">
                            <label for="">City Third Image</label>
                            <input type="file" class="form-control" name="thrd_image" id="thrd_image" placeholder=""
                                aria-describedby="fileHelpId">
                        </div>
                        <div class="form-group">
                            <label for="">Current Third Image</label>
                            <img src="{{ asset('asset/images/city/' . $city->thrd_image) }}" class="form-control" style="width: 150px;">
                        </div>
                        <div class="form-group">
                            <label for="">City Fourth Image</label>
                            <input type="file" class="form-control" name="frt_image" id="frt_image" placeholder=""
                                aria-describedby="fileHelpId">
                        </div>
                        <div class="form-group">
                            <label for="">Current Fourth Image</label>
                            <img src="{{ asset('asset/images/city/' . $city->frt_image) }}" class="form-control" style="width: 150px;">
                        </div>
                        <div class="form-group">
                            <label for="">Description Part 3</label>
                            <textarea class="form-control" name="thrd_desc" id="thrd_desc" rows="3">{{ $city->thrd_desc }}</textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a name="" id="" class="btn btn-secondary" href="{{ url('/travel-blog') }}" role="button">Close</a>
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

        $(window).load(function() {
            $('#cityEditBtnModal').modal({
                backdrop: 'static',
                keyboard: false
            });
        });
    </script>
@endsection
