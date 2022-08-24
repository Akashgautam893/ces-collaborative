@extends('front.layout')
@section('content')
    {{-- weddingVideosEditModal --}}
    <div class="modal fade mt-5" id="weddingVideosEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Wedding Video Edit</h5>
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> --}}
                </div>
                <form action="{{ url('/admin/wedding/updateWeddingVideo/'.$w_video->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Wedding Video</label>
                            <input id="file" type="file" accept="video/mp4,video/mkv, video/x-m4v,video/*"
                                name="im_video" id="im_video" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Current Video</label>
                            <iframe width="250" height="75" class="form-control"
                                src="{{ asset('asset/images/weddingVideo/' . $w_video->im_video) }}"></iframe>
                        </div>
                        <div class="form-group">
                            <label for="">Video Heading</label>
                            <input type="text" name="im_vheading" id="im_vheading" class="form-control" placeholder=""
                               value="{{ $w_video->im_vheading }}" aria-describedby="helpId">
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
        $(window).load(function() {
            $('#weddingVideosEditModal').modal({
                backdrop: 'static',
                keyboard: false
            });
        });
    </script>
@endsection
