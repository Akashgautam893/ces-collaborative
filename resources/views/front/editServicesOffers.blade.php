@extends('front.layout')
@section('content')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    {{-- servicesOffersEditModal --}}
    <div class="modal fade mt-5" id="servicesOffersEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Service</h5>
                </div>
                <form action="{{ url('/admin/home/updateServicesOffer/'.$ServiceOffer->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Service Name</label>
                            <input type="text" name="service_name" id="service_name" class="form-control"
                                value="{{ $ServiceOffer->service_name }}" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Heading</label>
                            <input type="text" name="heading" id="heading" class="form-control"
                                value="{{ $ServiceOffer->heading }}" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="image" id="image" placeholder=""
                                aria-describedby="fileHelpId">
                        </div>
                        <div class="form-group">
                            <label for="">Old Image</label>
                            <img src="{{ asset('asset/images/servicesOffer/' . $ServiceOffer->image) }}"
                                class="form-control" style="width: 100px;">
                        </div>
                        <div class="form-group">
                            <label for="">Sub Category</label>
                            <textarea class="form-control" name="sub_category" id="sub_category" rows="3">{{ $ServiceOffer->sub_category }}</textarea>
                        </div>
                        <div class="modal-footer">
                            <a name="" id="" class="btn btn-secondary" href="{{ url('/home') }}" role="button">Close</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        CKEDITOR.replace('sub_category');
        $(window).load(function() {
            $('#servicesOffersEditModal').modal({
                backdrop: 'static',
                keyboard: false
            });
        });
    </script>
@endsection
