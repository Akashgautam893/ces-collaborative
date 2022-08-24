<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset=utf-8>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Leading Photigraphy, Videography and Travel Blog Site
    </title>
    <meta name="keywords" content="Motorbikes, Best Photographic Techniques and Styles, Compelling Visuals ">
    <meta name="description"
        content=" Enjoy The Best Photography and Videography Services With Ces Collaborative. Let your videos and photos speak for you. Check to know more about our services.">
    <script type="text/javascript" src="{{ asset('asset/js/jquery-2.1.3.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link id="favicon" rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset/css/icons.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/social-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/frontend-grid.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/mobile.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style-1.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @auth
        <link rel="stylesheet" href="{{ asset('asset/css/admin-editor-css.css') }}">
    @endauth
</head>

<body>
    @auth
        @include('admin.admin-top-baar')
        <div id="all">
            <!-- Header start Here -->
            @include('front.header')
            <!-- Header ENDS Here -->

            @if (session()->has('success'))
                <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endif
            @if (session()->has('error'))
                <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                    {{ session('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endif

            @yield('content')

            <!--Footer start Here -->
            @include('front.footer')
            <!-- Footer end Here -->
        </div>
    @else
        <div id="all">
            <!-- Header start Here -->
            @include('front.header')
            {{-- <?php include 'header.php'; ?> --}}
            <!-- Header ENDS Here -->

            @yield('content')

            <!--Footer start Here -->
            @include('front.footer')
            <!-- Footer end Here -->
        </div>
    @endauth
    <script type="text/javascript">
        // document.addEventListener("copy", (evt) => {
        //     alert('Copy Denied');
        //     evt.clipboardData.setData("text/plain", "Copy Denied");
        //     evt.preventDefault();
        // }, false);
        $(document).ready(function() {
            $("#edit_tab2").addClass("d-none");
            $(".fa-pencil-square").addClass("d-none");
            $("#edit_page").click(function() {
                $("#edit_tab1").removeClass("d-block").addClass("d-none");
                $(".fa-pencil-square").removeClass("d-none").addClass("d-block");
                $("#edit_tab2").addClass("d-block");
                $('body').contents().find("a").css("pointer-events", "none");
                $('body .admin-editor').contents().find("a").css("pointer-events", "auto");
                $('body').contents().find("a.admin-editor").css("pointer-events", "auto");
            });
            $("#close_edit").click(function() {
                $("#edit_tab2").removeClass("d-block").addClass("d-none");
                $(".fa-pencil-square").removeClass("d-block").addClass("d-none");
                $("#edit_tab1").addClass("d-block");
                $('body').contents().find("a").css("pointer-events", "auto");
            });
        });
    </script>
</body>

</html>
