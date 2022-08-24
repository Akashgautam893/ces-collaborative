{{-- @php
    echo "<pre>";
    print_r($fSImage);
    die;
@endphp --}}
@extends('front.layout')
@section('content')
    <!-- Edit Image of Service Catelog -->
    <div class="modal fade mt-5" id="ServicesCatelogEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Featured Services</h5>
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> --}}
                </div>
                <form action="{{ url('/admin/home/updateImageInFsCatelog/' . $fSImage->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="image" id="image" placeholder=""
                                aria-describedby="fileHelpId">
                        </div>
                        <div class="form-group">
                            <label for="">Current Image</label>
                            <img src="{{ asset('asset/images/fsImage/' . $fSImage->image) }}" class="form-control"
                                style="width: 150px;">
                        </div>
                        <div class="form-group">
                            <label for="">Service Name</label>
                            <select class="form-control" name="fsCatlogName_id" id="fsCatlogName_id">
                                @foreach ($fsCatelogs as $fsCatelog)
                                    <option value="{{ $fsCatelog->id }}"
                                        {{ $fSImage->featured_services_catelog_id = $fsCatelog->service_name ? 'selected' : '' }}>
                                        {{ $fsCatelog->service_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Image Text</label>
                            <input type="text" name="image_text" id="image_text" class="form-control"
                                value="{{ $fSImage->image_text }}" placeholder="" aria-describedby="helpId">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a name="" id="" class="btn btn-secondary" href="{{ url('/service') }}"
                            role="button">Close</a>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(window).load(function() {
            $('#ServicesCatelogEditModal').modal({
                backdrop: 'static',
                keyboard: false
            });
        });
    </script>
@endsection
