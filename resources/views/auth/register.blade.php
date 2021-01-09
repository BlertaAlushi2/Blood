{{--@extends('layouts.frontend.master')--}}
{{--@section('title', 'Task Manager')--}}
{{--@section('pageCss')--}}
{{--    .info{--}}
{{--    display:flex;--}}
{{--    }--}}
{{--    .description p{--}}
{{--    color:#999!important;--}}
{{--    margin-left:10px;--}}
{{--    margin-top:15px;--}}
{{--    }--}}
{{--    .description h4{--}}
{{--    margin-left:10px;--}}
{{--    margin-top:5px;--}}
{{--    }--}}
{{--    .info-horizontal .icon.icon-rose{--}}
{{--    color: #e91e63;--}}
{{--    }--}}
{{--    .info-horizontal .icon.icon-primary {--}}
{{--    color: #9c27b0;--}}
{{--    }--}}
{{--    .info-horizontal .icon.icon-info {--}}
{{--    color: #00bcd4;--}}
{{--    }--}}
{{--    .info-horizontal .icon .material-icons{--}}
{{--    font-size:2.6em!important;--}}
{{--    }--}}
{{--    .card-body{--}}
{{--    padding: 0 30px 0 10px!important;--}}
{{--    position:relative;--}}
{{--    }--}}
{{--    .card.card-signup{--}}
{{--    border-radius: 6px;--}}
{{--    box-shadow: 0 16px 24px 2px rgba(0,0,0,.14), 0 6px 30px 5px rgba(0,0,0,.12), 0 8px 10px -5px rgba(0,0,0,.2);--}}
{{--    margin-bottom: 100px;--}}
{{--    padding: 40px 0;--}}
{{--    margin-top: 15vh;--}}
{{--    }--}}
{{--    .wrapper {--}}
{{--    position: relative;--}}
{{--    top: 0;--}}
{{--    min-height: 100vh;--}}
{{--    height: auto;--}}
{{--    }--}}
{{--    @media (max-width: 991px) {--}}
{{--    .page-header{--}}
{{--    min-height:200vh;--}}
{{--    }--}}
{{--    }--}}
{{--@endsection--}}

{{--@section('content')--}}
{{--    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">--}}
{{--        <div class="container">--}}
{{--            <div class="navbar-wrapper">--}}
{{--                <a class="navbar-brand" href="http://www.wesurepro.com">WESUREPRO</a>--}}
{{--            </div>--}}
{{--            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"--}}
{{--                    aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                <span class="sr-only">Toggle navigation</span>--}}
{{--                <span class="navbar-toggler-icon icon-bar"></span>--}}
{{--                <span class="navbar-toggler-icon icon-bar"></span>--}}
{{--                <span class="navbar-toggler-icon icon-bar"></span>--}}
{{--            </button>--}}
{{--            <div class="collapse navbar-collapse justify-content-end">--}}
{{--                <ul class="navbar-nav">--}}
{{--                    <li class="nav-item  active ">--}}
{{--                        <a href="{{route('register')}}" class="nav-link">--}}
{{--                            <i class="material-icons">person_add</i>--}}
{{--                            Register--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item ">--}}
{{--                        <a href="{{route('login')}}" class="nav-link">--}}
{{--                            <i class="material-icons">fingerprint</i>--}}
{{--                            Login--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item ">--}}
{{--                        <a href="{{route('password.request')}}" class="nav-link">--}}
{{--                            <i class="material-icons">lock_outline</i>--}}
{{--                            Forgot Password--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </nav>--}}
{{--    <!-- End Navbar -->--}}
{{--    <div class="wrapper wrapper-full-page">--}}
{{--        <div class="page-header register-page header-filter" filter-color="black"--}}
{{--             style="background-image: url('{{asset('assets/media/photos/photo30@2x.jpg')}}'); background-position: 0 50%;--}}
{{--                 background-size: cover;">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-md-10 ml-auto mr-auto">--}}
{{--                        <div class="card card-signup">--}}
{{--                            <h2 class="card-title text-center ">Register</h2>--}}
{{--                            <div class="card-body">--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-5 ml-auto">--}}
{{--                                        <div class="info info-horizontal mt-3">--}}
{{--                                            <div class="icon icon-rose">--}}
{{--                                                <i class="material-icons">timeline</i>--}}
{{--                                            </div>--}}
{{--                                            <div class="description inline">--}}
{{--                                                <h4 class="info-title">Marketing</h4>--}}
{{--                                                <p class="description">--}}
{{--                                                    We've created the marketing campaign of the website. It was a very--}}
{{--                                                    interesting collaboration.--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="info info-horizontal mt-3">--}}
{{--                                            <div class="icon icon-primary">--}}
{{--                                                <i class="material-icons">code</i>--}}
{{--                                            </div>--}}
{{--                                            <div class="description">--}}
{{--                                                <h4 class="info-title">Fully Coded in HTML5</h4>--}}
{{--                                                <p class="description">--}}
{{--                                                    We've developed the website with HTML5 and CSS3. The client has--}}
{{--                                                    access to the code using GitHub.--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="info info-horizontal mt-3">--}}
{{--                                            <div class="icon icon-info">--}}
{{--                                                <i class="material-icons">group</i>--}}
{{--                                            </div>--}}
{{--                                            <div class="description">--}}
{{--                                                <h4 class="info-title">Built Audience</h4>--}}
{{--                                                <p class="description">--}}
{{--                                                    There is also a Fully Customizable CMS Admin Dashboard for this--}}
{{--                                                    product.--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-5 mr-auto">--}}
{{--                                        <div class="social text-center">--}}
{{--                                            <button class="btn btn-just-icon btn-round btn-twitter">--}}
{{--                                                <i class="fa fa-twitter"></i>--}}
{{--                                            </button>--}}
{{--                                            <button class="btn btn-just-icon btn-round btn-dribbble">--}}
{{--                                                <i class="fa fa-dribbble"></i>--}}
{{--                                            </button>--}}
{{--                                            <button class="btn btn-just-icon btn-round btn-facebook">--}}
{{--                                                <i class="fa fa-facebook"> </i>--}}
{{--                                            </button>--}}
{{--                                            <h4 class="mt-3"> or be classical </h4>--}}
{{--                                        </div>--}}
{{--                                        <form class="form" method="POST" action="{{ route('register') }}">--}}
{{--                                            @csrf--}}
{{--                                            <div class="form-group has-default">--}}
{{--                                                <div class="input-group">--}}
{{--                                                    <div class="input-group-prepend">--}}
{{--                                                        <span class="input-group-text">--}}
{{--                                                          <i class="material-icons">face</i>--}}
{{--                                                        </span>--}}
{{--                                                    </div>--}}
{{--                                                    <input type="text"--}}
{{--                                                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"--}}
{{--                                                           placeholder="Name..." name="name" value="{{ old('name') }}"--}}
{{--                                                           required>--}}
{{--                                                    @if ($errors->has('name'))--}}
{{--                                                        <span class="invalid-feedback" role="alert">--}}
{{--                                                            <strong>{{ $errors->first('name') }}</strong>--}}
{{--                                                        </span>--}}
{{--                                                    @endif--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-group has-default">--}}
{{--                                                <div class="input-group">--}}
{{--                                                    <div class="input-group-prepend">--}}
{{--                                                        <span class="input-group-text">--}}
{{--                                                          <i class="material-icons">mail</i>--}}
{{--                                                        </span>--}}
{{--                                                    </div>--}}
{{--                                                    <input type="text"--}}
{{--                                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"--}}
{{--                                                           placeholder="Email..." name="email"--}}
{{--                                                           value="{{ old('email') }}" required>--}}
{{--                                                    @if ($errors->has('email'))--}}
{{--                                                        <span class="invalid-feedback" role="alert">--}}
{{--                                                            <strong>{{ $errors->first('email') }}</strong>--}}
{{--                                                        </span>--}}
{{--                                                    @endif--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-group has-default">--}}
{{--                                                <div class="input-group">--}}
{{--                                                    <div class="input-group-prepend">--}}
{{--                                                        <span class="input-group-text">--}}
{{--                                                          <i class="material-icons">lock_outline</i>--}}
{{--                                                        </span>--}}
{{--                                                    </div>--}}
{{--                                                    <input type="password" placeholder="Password..."--}}
{{--                                                           class="form-control{{ $errors->has('passowrd') ? ' is-invalid' : '' }}"--}}
{{--                                                           name="password" value="{{ old('password') }}" required>--}}
{{--                                                    @if ($errors->has('password'))--}}
{{--                                                        <span class="invalid-feedback" role="alert">--}}
{{--                                                            <strong>{{ $errors->first('password') }}</strong>--}}
{{--                                                        </span>--}}
{{--                                                    @endif--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="form-group has-default">--}}
{{--                                                <div class="input-group">--}}
{{--                                                    <div class="input-group-prepend">--}}
{{--                                                        <span class="input-group-text">--}}
{{--                                                          <i class="material-icons">lock_outline</i>--}}
{{--                                                        </span>--}}
{{--                                                    </div>--}}
{{--                                                    <input type="password" placeholder="Confirm Password..."--}}
{{--                                                           class="form-control" name="password_confirmation">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}


{{--                                                                                    <div class="form-check">--}}
{{--                                                                                        <label class="form-check-label">--}}
{{--                                                                                            <input class="form-check-input" type="checkbox" value="" checked="">--}}
{{--                                                                                            <span class="form-check-sign">--}}
{{--                                                                        <span class="check"></span>--}}
{{--                                                                      </span>--}}
{{--                                                                                            I agree to the--}}
{{--                                                                                            <a href="#something">terms and conditions</a>.--}}
{{--                                                                                        </label>--}}
{{--                                                                                    </div>--}}
{{--                                            <div class="text-center">--}}
{{--                                                                                                <a href="#pablo" class="btn btn-primary btn-round mt-4">Get Started</a>--}}
{{--                                                <button type="submit"--}}
{{--                                                        class="btn btn-primary  btn-round mt-4">Get Started--}}
{{--                                                </button>--}}
{{--                                            </div>--}}
{{--                                        </form>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <footer class="footer">--}}
{{--                <div class="container">--}}
{{--                    <div class="copyright float-right">--}}
{{--                        &copy;--}}
{{--                        <script>--}}
{{--                            document.write(new Date().getFullYear())--}}
{{--                        </script>--}}
{{--                        Wesurepro, LLC. All rights reserved.--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </footer>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}

@extends('layouts.entry')
@section('title', 'Blood Donation')
@section('pageCss')
    html, body {
    overflow-x: hidden;
    }
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
                    <li class="nav-item active">
                        <a href="{{route('register')}}" class="nav-link">
                            <i class="material-icons">person_add</i>
                            Register
                        </a>
                    </li>
                    <li class="nav-item   ">
                        <a href="{{route('login')}}" class="nav-link">
                            <i class="material-icons">fingerprint</i>
                            Login
                        </a>
                    </li>
                    <li class="nav-item ">
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
                    <div class="col-lg-8 col-md-10 col-sm-12 ml-auto mr-auto">
                        <form class="form" action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="card card-login card-hidden">
                                <div class="card-header card-header-danger text-center">
                                    <h4 class="card-title pt-3 pb-2"><b>Register</b></h4>
{{--                                    <div class="social-line">--}}
{{--                                        <a href="#pablo" class="btn btn-just-icon btn-link btn-white">--}}
{{--                                            <i class="fa fa-facebook-square"></i>--}}
{{--                                        </a>--}}
{{--                                        <a href="#pablo" class="btn btn-just-icon btn-link btn-white">--}}
{{--                                            <i class="fa fa-twitter"></i>--}}
{{--                                        </a>--}}
{{--                                        <a href="#pablo" class="btn btn-just-icon btn-link btn-white">--}}
{{--                                            <i class="fa fa-google-plus"></i>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
                                </div>
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-md-6">
                                    <div class="form-group has-default">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                          <i class="material-icons">face</i>
                                                        </span>
                                            </div>
                                            <input type="text"
                                                   class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                   placeholder="Name..." name="name" value="{{ old('name') }}"
                                                   required>
                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group has-default">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                          <i class="material-icons">mail</i>
                                                        </span>
                                            </div>
                                            <input type="text"
                                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                   placeholder="Email..." name="email"
                                                   value="{{ old('email') }}" required>
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group has-default">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                          <i class="material-icons">place</i>
                                                        </span>
                                            </div>
                                            <input type="text"
                                                   class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}"
                                                   placeholder="City..." name="city" value="{{ old('city') }}"
                                                   required>
                                            @if ($errors->has('city'))
                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('city') }}</strong>
                                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group has-default">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                          <i class="material-icons">flag</i>
                                                        </span>
                                            </div>
                                            <input type="text"
                                                   class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}"
                                                   placeholder="Country..." name="country" value="{{ old('country') }}"
                                                   required>
                                            @if ($errors->has('country'))
                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('country') }}</strong>
                                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group has-default">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                          <i class="material-icons">person</i>
                                                        </span>
                                            </div>
                                            <input type="number"
                                                   class="form-control{{ $errors->has('personal_number') ? ' is-invalid' : '' }}"
                                                   placeholder="Personal Number..." name="personal_number" value="{{ old('personal_number') }}"
                                                   required>
                                            @if ($errors->has('personal_number'))
                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('personal_number') }}</strong>
                                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                            <div class="form-check" style="margin:27px 60px 22px;">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" id="radio1" name="gender" value="male" @if(old('gender') == 'male') checked @endif>
                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                      </span>
                                                    Male
                                                </label>
                                                <label class="form-check-label" style="margin-left:30px">
                                                    <input type="radio" class="form-check-input" id="radio1" name="gender" value="female" @if(old('gender') == 'female') checked @endif>
                                                    <span class="form-check-sign">
                                                                        <span class="check"></span>
                                                                      </span>
                                                    Female
                                                </label>
                                                @if ($errors->has('gender'))
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('gender') }}</strong>
                                                        </span>
                                                @endif
                                            </div>
                                        </div>
                                    <div class="col-md-6">
                                    <div class="form-group has-default">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                          <i class="material-icons">face</i>
                                                        </span>
                                            </div>
                                            <input type="number"
                                                   class="form-control{{ $errors->has('age') ? ' is-invalid' : '' }}"
                                                   placeholder="Age..." name="age" value="{{ old('age') }}"
                                                   required>
                                            @if ($errors->has('age'))
                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('age') }}</strong>
                                                        </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group has-default">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                          <i class="material-icons">face</i>
                                                        </span>
                                            </div>
                                            <select class="form-control" id="blood_id" name="blood_id">
                                                <option value = "">Select Blood Group</option>
                                                @foreach($blood_groups as $group_blood)
                                                    <option value = "{{$group_blood->id}}" @if(old('blood_id') == $group_blood->id) selected="selected" @endif>{{ $group_blood->name }}</option>

                                                @endforeach
                                            </select>
                                            @if ($errors->has('blood_id'))
                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('blood_id') }}</strong>
                                                        </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group has-default">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                          <i class="material-icons">face</i>
                                                        </span>
                                            </div>
                                            <input type="text"
                                                   class="form-control{{ $errors->has('weigh') ? ' is-invalid' : '' }}"
                                                   placeholder="Weight..." name="weigh" value="{{ old('weigh') }}"
                                                   required>
                                            @if ($errors->has('weigh'))
                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('weigh') }}</strong>
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

{{--                                    <div class="form-check" style="margin:27px 27px 20px;">--}}
{{--                                        <label class="form-check-label">--}}
{{--                                            <input class="form-check-input" type="checkbox" value="" checked="">--}}
{{--                                            <span class="form-check-sign">--}}
{{--                                                                        <span class="check"></span>--}}
{{--                                                                      </span>--}}
{{--                                            I agree to the--}}
{{--                                            <a href="#something">terms and conditions</a>.--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
                                    <div class="text-center">
{{--                                        <a href="#pablo" class="btn btn-primary btn-round mt-4">Get Started</a>--}}
                                        <button type="submit"
                                                class="btn btn-danger btn-round mt-4 mb-3">Get Started
                                        </button>
                                    </div>
                            </div>
                                </div>
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

