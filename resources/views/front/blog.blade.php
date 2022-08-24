@extends('front.layout')
@section('content')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <main class="fw-main-row blog blog-page">
        <div class="fw-container customepadding">
            <i class="fa fa-pencil-square float-right" id="blogModalbtn" style="font-size: xxx-large;" aria-hidden="true"></i>
            <h1>Blogs </h1>
            <div class="filter-blog">
                <article class="filter-blog-item blog-item work friends horisontal">
                    <div class="image fw-col-xs-12 fw-col-sm-4 fw-col-md-6">

                        <a href="{{ url('/5_desirable_qualities_a_professional_photographer_must_have') }}"
                            style="background-image: url({{ asset('asset/images/imgs/blog-item4.jpg') }});"><img
                                src="{{ asset('asset/images/imgs/blog-item4.jpg') }}" alt="Just my breakfast"></a>
                    </div>
                    <div class="wrap fw-col-xs-12 fw-col-sm-8 fw-col-md-6 fw-col-sm-offset-4 fw-col-md-offset-6">
                        <h4><a href="{{ url('/5_desirable_qualities_a_professional_photographer_must_have') }}">5 Desirable
                                Qualities A Professional Photographer Must Have</a></h4>
                        <div class="post-details"><span class="item"><i class="icon-calendar-2"></i><span>Aug 02
                                    2022</span></span><span class="item"><i class="icon-circular-clock"></i><span>6 min to
                                    read</span></span></div>
                        <p>Photos have always been an important part of humans. When we all know that we cannot hold
                            the present moments for a long time, nor can we bring back the past moments, photos are
                            our option to capture our precious moments to cherish in the future. And those photos
                            become even more beautiful when captured from the exact angle with proper lights and
                            hold the exact expressions of the moments. All these necessities of good photos have
                            been achieved with the growth of the camera and lens industry. The camera and lens
                            industry has bought numerous features for the photographers to adjust the camera to get
                            the perfect shot.
                        </p>
                        <a href="{{ url('/5_desirable_qualities_a_professional_photographer_must_have') }}"
                            class="button-style3 big grey">read MORE</a>
                        <div class="bottom">
                            <div class="fl">
                                <div class="author-link">Posted by <a href="javascript:void(0)">Admin</a></div>
                            </div>
                            <div class="fr">
                                <a href="javascript:void(0)"><i class="icon-speech-bubble"></i><span>6
                                        comments</span></a>
                                <a href="javascript:void(0)"><i class="icon-heart-outline"></i><span>25</span></a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="filter-blog-item blog-item friends horisontal">
                    <div class="image fw-col-xs-12 fw-col-sm-4 fw-col-md-6">

                        <a href="{{ url('/5_ways_you_can_become_a_successful_travel_blogger') }}"
                            style="background-image: url({{ asset('asset/images/imgs/blog-item5.jpg') }});"><img
                                src="{{ asset('asset/images/imgs/blog-item5.jpg') }}" alt="Riders on the waves"></a>
                    </div>
                    <div class="wrap fw-col-xs-12 fw-col-sm-8 fw-col-md-6 fw-col-sm-offset-4 fw-col-md-offset-6">
                        <h4><a href="{{ url('/5_ways_you_can_become_a_successful_travel_blogger') }}">5 Ways You
                                Can Become A
                                Successful Travel Blogger</a></h4>
                        <div class="post-details"><span class="item"><i class="icon-calendar-2"></i><span>Aug 02
                                    2022</span></span><span class="item"><i class="icon-circular-clock"></i><span>6 min to
                                    read</span></span></div>
                        <p>Do you like to travel? Do you want to be a travel blogger? If yes, then you have made the
                            right choice because this market is incredibly popular while being fiercely competitive
                            at the same time, thanks to the audience's enthusiasm and love of exploring new places.
                            Post your travel photos with broad descriptions on the internet while waiting for your
                            audience to arrive at the time when most people travel and create tons of content about
                            their adventures. However, if you want to be different and seen, you have to use the
                            tried and tested methods and tips from the industry. This article outlines five proven,
                            tried-and-tested tactics you should use to succeed as a travel blogger.
                        </p>
                        <a href="{{ url('/5_ways_you_can_become_a_successful_travel_blogger') }}"
                            class="button-style3 big grey">read MORE</a>
                        <div class="bottom">
                            <div class="fl">
                                <div class="author-link">Posted by <a href="javascript:void(0)">Ella</a></div>
                            </div>
                            <div class="fr">
                                <a href="javascript:void(0)"><i class="icon-speech-bubble"></i><span>6
                                        comments</span></a>
                                <a href="javascript:void(0)"><i class="icon-heart-outline"></i><span>25</span></a>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="filter-blog-item blog-item work horisontal">
                    <div class="image fw-col-xs-12 fw-col-sm-4 fw-col-md-6">

                        <a href="{{ url('/proven_tips_for_promoting_your_small_business_from_online_entrepreneurs') }}"
                            style="background-image: url({{ asset('asset/images/imgs/blog-item6.jpg') }});"><img
                                src="{{ asset('asset/images/imgs/blog-item6.jpg') }}"
                                alt="Nature is my favorite friend"></a>
                    </div>
                    <div class="wrap fw-col-xs-12 fw-col-sm-8 fw-col-md-6 fw-col-sm-offset-4 fw-col-md-offset-6">
                        <h4><a
                                href="{{ url('/proven_tips_for_promoting_your_small_business_from_online_entrepreneurs') }}">Proven
                                Tips for Promoting Your Small Business from Online Entrepreneurs</a></h4>
                        <div class="post-details"><span class="item"><i class="icon-calendar-2"></i><span>Aug 02
                                    2022</span></span><span class="item"><i class="icon-circular-clock"></i><span>6 min to
                                    read</span></span></div>
                        <p>What online marketing strategies work best for small businesses? What actions must you
                            take as a small business owner to ensure that you don't pass up any opportunities for
                            online marketing? How can you increase sales and customer acquisition using the
                            Internet? These are some of the questions that trouble small business owners. Although
                            using content marketing is possible, and concentrating on social media might be
                            effective, follow these proven tips from online entrepreneurs to take your business
                            sales to the next level. </p>
                        <a href="{{ url('/proven_tips_for_promoting_your_small_business_from_online_entrepreneurs') }}"
                            class="button-style3 big grey">read MORE</a>
                        <div class="bottom">
                            <div class="fl">
                                <div class="author-link">Posted by <a href="javascript:void(0)">Ella</a></div>
                            </div>
                            <div class="fr">
                                <a href="javascript:void(0)"><i class="icon-speech-bubble"></i><span>6
                                        comments</span></a>
                                <a href="javascript:void(0)"><i class="icon-heart-outline"></i><span>25</span></a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </main>


    {{-- Blog Modal --}}
    <div class="modal fade mt-5" id="blogModal" tabindex="-1" role="dialog" aria-labelledby="bannerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 90rem;right: 28rem;">
                <div class="modal-header">
                    <h5 class="modal-title" id="bannerModalLabel">Blog Section</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <button type="button" id="blogAddNewBtn" class="btn btn-sm btn-dark mb-2"
                        style="pointer-events: auto !important;">Add New</button>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Author</th>
                                <th scope="col">Date</th>
                                {{-- <th scope="col">Slug</th> --}}
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($banners as $banner) --}}
                            <tr>
                                <td><img src="" style="width: 150px;"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                {{-- <td></td> --}}
                                <td></td>
                                <td>
                                    <span class="d-flex">
                                        <i class="fa fa-pencil-square pt-1 mr-3" id="blogEditBtn"
                                            style="font-size: x-large;" aria-hidden="true"></i>
                                        {{-- <a href="{{ url('/admin/home/deletebanner/' . $banner->id) }}"
                                                class="text-danger" style="pointer-events: auto;font-size: x-large;">
                                                <i class="fa fa-trash"></i>
                                            </a> --}}
                                    </span>
                                </td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Blog AddNewModal --}}
    <div class="modal fade mt-5" id="blogAddNewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 90rem;right: 28rem;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Blog Add</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/admin/home/addBlog') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="image" id="image" placeholder=""
                                aria-describedby="fileHelpId">
                        </div>
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder=""
                                aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Author</label>
                            <input type="text" name="author" id="author" class="form-control" placeholder=""
                                aria-describedby="helpId">
                        </div>
                        {{-- <div class="form-group">
                            <label for="">Date & Time</label>
                            <input type="datetime" name="time" id="time" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control" placeholder=""
                                aria-describedby="helpId">
                        </div> --}}
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
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
    {{-- Blog EditModal --}}
    <div class="modal fade mt-5" id="blogEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="width: 90rem;right: 28rem;">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Blog Edit</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('/admin/home/addbanner') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class="form-control" name="image" id="image" placeholder=""
                                aria-describedby="fileHelpId">
                        </div>
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder=""
                                aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Author</label>
                            <input type="text" name="author" id="author" class="form-control" placeholder=""
                                aria-describedby="helpId">
                        </div>
                        {{-- <div class="form-group">
                            <label for="">Date & Time</label>
                            <input type="datetime" name="time" id="time" class="form-control">
                        </div>
                       <div class="form-group">
                            <label for="">Slug</label>
                            <input type="text" name="slug" id="slug" class="form-control" placeholder=""
                                aria-describedby="helpId">
                        </div> --}}
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
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
        CKEDITOR.replace('description');
        $(document).ready(function() {
            $("#blogModalbtn").click(function() {
                $('#blogModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
            $("#blogAddNewBtn").click(function() {
                $('#blogAddNewModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
            $("#blogEditBtn").click(function() {
                $('#blogEditModal').modal({
                    backdrop: 'static',
                    keyboard: false
                });
            });
        })
    </script>
@endsection
