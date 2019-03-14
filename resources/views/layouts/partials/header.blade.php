    <!-- preloader start -->
    {{-- <div id="preloader">
        <div class="loader">
            <div class="circle item0"></div>
            <div class="circle item1"></div>
            <div class="circle item2"></div>
        </div>
    </div>   --}}

    <!-- preloader end -->
    <!-- header top area start -->
    <!-- <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="number-area">
                        <p>Call For Any Question</p>
                        <p>(000) 000 000 000</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6 text-right">
                    <div class="login-reg">
                        <a href="login" class="top-loging">Login Demo</a>
                        <a href="single.php" class="top-loging">Single Speakers Details Demo</a>
                        <a href="privacy.php" class="top-loging">Privacy Policy</a>
                        <a href="faq.php" class="top-loging">FAQ's</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- header top area end -->
    <!-- header area start -->
    <header id="header">
        <div class="header-area">
            <div class="container-fluid-custom">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="logo">
                        <a href="{{route('webhome')}}">
                                {{-- <img src="{{asset('websiteassests/img/logo/logo.png')}}" alt="">  --}}
                                <h3><img src="{{asset('websiteassests/img/logo/wlogo1.png')}}" alt="" style="max-width:75% !important;"></h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 d-none d-lg-block">
                        <div class="main-menu">
                            <nav class="nav-menu">
                                <ul id="navigation">

                                    <li class=""><a href="{{route('webhome')}}">Home</a></li>
                                    <li><a href="{{route('webabout')}}">About</a></li>
                                    <li><a href="{{route('webspeakers')}}">Speakers</a></li>
                                    <li><a href="{{route('webcontact')}}">contact</a></li>
                                    @guest
                                        <li>
                                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @if (Route::has('register'))
                                        <li>
                                            <a href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                    
                                    @else

                                        <li>
                                            <a href="{{ route('userdashboard') }}">{{ __('Dashboard') }}</a>
                                        </li>

                                    @endguest
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-12 d-block d-lg-none">
                        <div class="mobile_menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->