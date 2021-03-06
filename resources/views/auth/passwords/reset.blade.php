@extends('layouts.entry')

@section('title', 'Password Reset')
@section('pageCss')
    .input-group{
    padding-bottom: 10px;
    margin: 17px 0 0;
    }
    .card-footer{
    padding:0px!important;
    padding-bottom:10px!important;
    }
    .wrapper {
    position: relative;
    top: 0;
    min-height: 100vh;
    height: auto;
    }
@endsection
@section('content')

    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
        <div class="container">
            <div class="navbar-wrapper">
                <a class="navbar-brand" href="http://www.blood.test">BBMS</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a href="{{route('register')}}" class="nav-link">
                            <i class="material-icons">person_add</i>
                            Register
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{route('login')}}" class="nav-link">
                            <i class="material-icons">fingerprint</i>
                            Login
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a href="{{route('password.request')}}" class="nav-link">
                            <i class="material-icons">lock_outline</i>
                            Forgot Password
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="wrapper wrapper-full-page">
        <div class="page-header login-page header-filter" filter-color="black"
             style="background-image: url('{{asset('assets/img/blood2.png')}}'); background-size: cover; background-position: top center;">
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form class="form" action="{{ route('password.update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="card card-login card-hidden">
                                <div class="card-header card-header-danger text-center">
                                    <h4 class="card-title pt-3 pb-2"><b>DMS</b></h4>
                                    <p>Document Management System</p>

                                </div>
                                <div class="card-body ">
                  <span class="bmd-form-group">
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text">
                          <i class="material-icons">email</i>
                        </span>
                      </div>
                      <input type="email" class="form-control" placeholder="Email..." name="email">
                         @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                  </span>
                                    <div class="form-group has-default">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                        <span class="input-group-text">
                                          <i class="material-icons">lock_outline</i>
                                        </span>
                                            </div>
                                            <input type="password" placeholder="Password..."
                                                   class="form-control{{ $errors->has('passowrd') ? ' is-invalid' : '' }}"
                                                   name="password" value="{{ old('password') }}" required>
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group has-default">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                        <span class="input-group-text">
                                          <i class="material-icons">lock_outline</i>
                                        </span>
                                            </div>
                                            <input type="password" placeholder="Confirm Password..."
                                                   class="form-control" name="password_confirmation">
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer justify-content-center">
                                    <button type="submit" class="btn btn-danger btn-link btn-lg">Reset Password
                                    </button>
                                </div>
                            </div>
                        </form>
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
    <!-- END Page Content -->
@endsection


