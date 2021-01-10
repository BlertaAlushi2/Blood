@extends('layouts.entry')
@section('pageCss')
    .wrapper {
    position: relative;
    top: 0;
    min-height: 100vh;
    height: auto;
    }
    @endsection
@section('content')
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                @if(Route::currentRouteName() === 'home')
                    <a class="navbar-brand" href="http://www.blood.test">BBMS</a>
                @endif
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <form class="navbar-form">
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="javascript:;" id="navbarDropdownProfilee" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <p class=" d-inline-block mb-0">
                                {{\Auth::user()->name}}
                            </p>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
{{--                        <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown"--}}
{{--                           aria-haspopup="true" aria-expanded="false">--}}
{{--                            <i class="material-icons d-inline-block">person</i>--}}
{{--                            <p class="d-lg-none d-md-block d-inline-block mb-0">--}}
{{--                                Account--}}
{{--                            </p>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">--}}
{{--                            <a class="dropdown-item" href="{{route('logout')}}"--}}
{{--                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log--}}
{{--                                out</a>--}}
{{--                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                @csrf--}}
{{--                            </form>--}}
{{--                        </div>--}}
                        <a class="nav-link" href="{{route('logout')}}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log
                            out</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- End Navbar -->

    <div class="wrapper wrapper-full-page">
        <div class="page-header login-page header-filter" filter-color="black"
             style="background-image: url('{{asset('assets/img/blood2.png')}}'); background-size: cover; background-position: top center;">
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
                        <div class="card card-login card-hidden">
                            <div class="card-header card-header-danger text-center">
                                <h4 class="card-title pt-3 pb-2"><b>{{ __('Verify Your Email Address') }}</b></h4>
{{--                                <div class="social-line">--}}
{{--                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-white">--}}
{{--                                        <i class="fa fa-facebook-square"></i>--}}
{{--                                    </a>--}}
{{--                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-white">--}}
{{--                                        <i class="fa fa-twitter"></i>--}}
{{--                                    </a>--}}
{{--                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-white">--}}
{{--                                        <i class="fa fa-google-plus"></i>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
                            </div>
                            <div class="card-body ">
                                @if (session('resent'))
                                    <div class="alert alert-success" role="alert">
                                        {{ __('A fresh verification link has been sent to your email address.') }}
                                    </div>
                                @endif

                                {{ __('Before proceeding, please check your email for a verification link.') }}
                                {{ __('If you did not receive the email') }}, <a
                                    href="{{ route('verification.resend') }}"
                                    class="btn btn-danger btn-link btn-lg">{{ __('click here to request another') }}</a>.

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container" style="padding-top:0px!important;">
                    <div class="copyright float-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        BBMS. All rights reserved.
                    </div>
                </div>
            </footer>
        </div>
    </div>
@endsection
