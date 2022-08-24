@extends('front.layout')
@section('content')
    {{-- slidingImagesEditModal --}}
    <div class="modal fade mt-5" id="slidingImagesEditModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Sliding Images</h5>
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> --}}
                </div>
                <form action="{{ url('/admin/home/updateSlidingImage/'.$s_image->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        {{-- <div class="form-group">
                            <label for="">Primary Heading</label>
                            <input type="text" name="p_heading" id="p_heading" class="form-control" placeholder=""
                                aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Secondary Heading</label>
                            <input type="text" name="s_heading" id="s_heading" class="form-control"
                                placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea class="form-control" name="desc" id="desc" rows="3"></textarea>
                        </div> --}}
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
                                <label for="">Old Image</label>
                                <img src="{{ asset('asset/images/slidingImage/' . $s_image->image) }}" style="width: 100px;">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a name="" id="" class="btn btn-secondary" href="{{ url('/home') }}" role="button">Close</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(window).load(function() {
            $('#slidingImagesEditModal').modal({
                backdrop: 'static',
                keyboard: false
            });
        });
    </script>
@endsection
