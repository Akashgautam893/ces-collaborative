@extends('front.layout')
@section('content')
    {{-- weddingImagesEditModal --}}
    <div class="modal fade mt-5" id="weddingImagesEditModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Wedding Image Edit</h5>
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> --}}
                </div>
                <form action="{{ url('/admin/home/updateWeddingImage/'.$w_image->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="bg_image" id="bg_image" placeholder=""
                                aria-describedby="fileHelpId">
                        </div>
                        <div class="form-group">
                            <h4>Current Image</h4>
                            @if (!empty($w_image->bg_image))
                            <img src="{{ asset('asset/images/weddingImages/'.$w_image->bg_image) }}" style="width: 150px;">
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Image Heading</label>
                            <input type="text" name="bg_image_heading" id="bg_image_heading" class="form-control" placeholder=""
                               value="{{ $w_image->bg_image_heading }}" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Image Description</label>
                            <input type="text" name="bg_image_desc" id="bg_image_desc" class="form-control" placeholder=""
                               value="{{ $w_image->bg_image_desc }}" aria-describedby="helpId">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(window).load(function() {
            $('#weddingImagesEditModal').modal({
                backdrop: 'static',
                keyboard: false
            });
        });
    </script>
@endsection
