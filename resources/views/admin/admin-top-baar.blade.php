<header id="hsjha">
    <section id="admin-top-baar">
        <div class="top-nav  admin-editor position-relative" style="">
            {{-- <a href="https://zonewebsites.us/" target="_blank" id="admin-editor-logo" style="pointer-events: none;"><img
                    src="https://zonewebsites.us/assets/img/favicon.png" alt="" width="25"></a> --}}
            <ul class="menu" style="padding-left: 15rem;">
                <div class="row">
                    <div class="col-9" id="edit_tab1">
                        <li><a href="javascript:void(0)" class="" id="edit_page">Edit Page</a></li>
                        <li><a href="javascript:void(0)" class="">Add Blog</a></li>
                        <li><a href="javascript:void(0)" class="">Add Service</a></li>
                        <li><a href="javascript:void(0)" class="">SEO</a></li>
                        <li><a href="javascript:void(0)" class="">Submissions</a></li>
                        <li><a href="javascript:void(0)" class=""><i class="fa fa-cog"></i></a></li>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li>
                                    <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li>
                                    <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li>
                                <div class="">
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out" style="font-size: large;"></i>{{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </div>
                    <div class="col-3 justify-content-end" id="edit_tab2">
                        <li><a href="#" id="close_edit" class="" style="pointer-events: auto;">Close
                                Editing</a></li>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li>
                                    <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li>
                                    <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li>
                                <div class="">
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out" style="font-size: large;"></i>{{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </div>
                </div>
            </ul>
        </div>
    </section>
</header>


{{-- <section id="admin_top_baar" class="bg-dark">
    <div class="top-nav  admin-editor position-relative" style="">
        <a href="https://zonewebsites.us/" target="_blank" id="admin-editor-logo" style="pointer-events: none;"><img
                src="https://zonewebsites.us/assets/img/favicon.png" alt="" width="25"></a>
        <div class="row m-0">
            <div class="col-sm-9">
                <ul class="clist">

                </ul>
            </div>
            <div class="col-sm-3">
                <ul class="clist justify-content-end">
                    <li><a href="/index" class="btn btn-sm bg-white text-dark rounded-pill"
                            style="pointer-events: auto;">Close Editing</a></li>
                    <form action="https://bayelleitsolutions.com/courses/wp-login.php" method="post">
                        <input type="hidden" value="admin" name="log"><input type="hidden"
                            value="Bayelleitsolution@2022" name="pwd">
                        <li>
                            <button type="submit" name="wp-submit"
                                class="btn btn-sm bg-white text-dark rounded-pill px-3">
                                <i class="fas fa-graduation-cap"></i> LMS
                            </button>
                        </li>
                    </form>
                    <li><a href="admin/logout" style="pointer-events: auto;">
                            <i class="fas fa-sign-out-alt"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="admin_top_baar" class="bg-dark">
    <div class="top-nav  admin-editor position-relative" style="">
        <a href="https://zonewebsites.us/" target="_blank" id="admin-editor-logo">
            <img src="https://zonewebsites.us/assets/img/favicon.png" alt="" width="25"></a>
        <div class="row m-0">
            <div class="col-sm-9">
                <ul class="clist">

                </ul>
            </div>
            <div class="col-sm-3">
                <ul class="clist justify-content-end">
                    <form action="https://bayelleitsolutions.com/courses/wp-login.php" method="post">
                        <input type="hidden" value="admin" name="log"><input type="hidden"
                            value="Bayelleitsolution@2022" name="pwd">
                        <li> <button type="submit" name="wp-submit"
                                class="btn btn-sm bg-white text-dark rounded-pill px-3"><i
                                    class="fas fa-graduation-cap"></i> LMS</button></li>
                    </form>
                    <li><a href="admin/logout"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</section> --}}
