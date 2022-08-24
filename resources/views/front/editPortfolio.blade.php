@extends('front.layout')
@section('content')
    {{-- portfolioEditModal --}}
    <div class="modal fade mt-5" id="portfolioEditModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Portfolio</h5>
                </div>
                <form action="{{ url('/admin/home/updatePortfolio/'.$port->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
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
                                <img src="{{ asset('asset/images/portfolioImage/' . $port->image) }}" style="width: 100px;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Heading</label>
                                    <input type="text" name="heading" id="heading" class="form-control" value="{{ $port->heading }}"
                                        placeholder="" aria-describedby="helpId">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <input type="text" name="desc" id="desc" class="form-control" value="{{ $port->desc }}"
                                        placeholder="" aria-describedby="helpId">
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
            $('#portfolioEditModal').modal({
                backdrop: 'static',
                keyboard: false
            });
        });
    </script>
@endsection
