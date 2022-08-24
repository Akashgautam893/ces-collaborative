@extends('front.layout')
@section('content')
    {{-- testimonialEditModal --}}
    <div class="modal fade mt-5" id="testimonialEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Portfolio Edit</h5>
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> --}}
                </div>
                <form action="{{ url('/admin/home/updatetestimonial/' . $test->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Client Name</label>
                                    <input type="text" name="client_name" id="client_name" class="form-control"
                                        value="{{ $test->client_name }}" placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Review</label>
                                    <textarea class="form-control" name="review" id="review" rows="3">{{ $test->review }}</textarea>
                                </div>
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
            $('#testimonialEditModal').modal({
                backdrop: 'static',
                keyboard: false
            });
        });
    </script>
@endsection
