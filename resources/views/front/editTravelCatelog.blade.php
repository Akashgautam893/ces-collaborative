@extends('front.layout')
@section('content')
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    {{-- travelCatelogEditModal --}}
    <div class="modal fade mt-5" id="travelCatelogEditModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Travel Catelog</h5>
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> --}}
                </div>
                <form action="{{ url('/admin/travel-blog/updatetravel-blog/'.$t_catelog->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">City Image</label>
                            <input type="file" class="form-control" name="city_image" id="city_image" placeholder=""
                               value="{{ $t_catelog->city_image }}" aria-describedby="fileHelpId">
                        </div>
                        <div class="form-group">
                            <label for="">Current City Image</label>
                            <img src="{{ asset('asset/images/travelCatelog/' . $t_catelog->city_image) }}"
                                class="form-control" style="width: 150px;">
                        </div>
                        <div class="form-group">
                            <label for="">City Name</label>
                            <input type="text" name="city_name" id="city_name" class="form-control" placeholder=""
                               value="{{ $t_catelog->city_name }}" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Date</label>
                            <input type="date" name="date" id="date" class="form-control" value="{{ $t_catelog->date }}">
                        </div>
                        <div class="form-group">
                            <label for="">Author Name</label>
                            <input type="text" name="author_name" id="author_name" class="form-control"
                               value="{{ $t_catelog->author_name }}" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">City Description</label>
                            <textarea class="form-control" name="desc" id="desc" rows="3">{{ $t_catelog->desc }}</textarea>
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
        $(window).load(function() {
            $('#travelCatelogEditModal').modal({
                backdrop: 'static',
                keyboard: false
            });
        });
    </script>
@endsection
