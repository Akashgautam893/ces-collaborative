@extends('front.layout')
@section('content')
    {{-- featuredServicesCatelog EditModal --}}
    <div class="modal fade mt-5" id="featuredServicesCatelogEditModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Featured Services Catelog Edit</h5>

                </div>
                <form action="{{ url('/admin/home/updateFeaturedServicesCatelog/' . $fsCatelog->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="image" id="image" placeholder=""
                                value="{{ $fsCatelog->image }}" aria-describedby="fileHelpId">
                        </div>
                        <div class="form-group">
                            <label for="">Current Image</label>
                            <img src="{{ asset('asset/images/fsCatelog/' . $fsCatelog->image) }}" class="form-control" style="width: 150px;">
                        </div>
                        <div class="form-group">
                            <label for="">Service Name</label>
                            <input type="text" name="service_name" id="service_name" class="form-control"
                                value="{{ $fsCatelog->service_name }}" placeholder="" aria-describedby="helpId">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a name="" id="" class="btn btn-secondary" href="{{ url('/service') }}" role="button">Close</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(window).load(function() {
            $('#featuredServicesCatelogEditModal').modal({
                backdrop: 'static',
                keyboard: false
            });
        });
    </script>
@endsection
