@extends('layouts.entry')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                                <div class="col-md-6">
                                    <input id="city" type="text"
                                           class="form-control @error('city') is-invalid @enderror" name="city"
                                           value="{{ old('city') }}" required autocomplete="city">

                                    @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="country"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                                <div class="col-md-6">
                                    <input id="country" type="text"
                                           class="form-control @error('country') is-invalid @enderror" name="country"
                                           value="{{ old('country') }}" required autocomplete="country">

                                    @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="personal_number"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Personal Number') }}</label>

                                <div class="col-md-6">
                                    <input id="personal_number" type="number"
                                           class="form-control @error('personal_number') is-invalid @enderror"
                                           name="personal_number" value="{{ old('personal_number') }}" required
                                           autocomplete="personal_number">

                                    @error('personal_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                                <div class="col-md-6">
                                    <input id="age" type="number"
                                           class="form-control @error('age') is-invalid @enderror" name="age"
                                           value="{{ old('age') }}" required autocomplete="age">

                                    @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gender"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                                <div class="form-check col-md-2" style="margin-left:50px;">
                                    <input type="radio" class="form-check-input" id="radio1" name="gender" value="male" @if(old('gender') == 'male') checked @endif>
                                    <label class="form-check-label" for="radio1">
                                        Male
                                    </label>
                                </div>

                                <div class="form-check col-md-2">
                                    <input type="radio" class="form-check-input" id="radio1" name="gender" value="female" @if(old('gender') == 'female') checked @endif>
                                    <label class="form-check-label" for="radio1">
                                        Female
                                    </label>
                                </div>

                                <div class="col-md-4">
                                    @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="blood_id"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Blood Group') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" id="blood_id" name="blood_id">
                                        @foreach($blood_groups as $group_blood)
                                            <option
                                                value = "{{$group_blood->id}}" @if(old('blood_id') == $group_blood->id) selected="selected" @endif>{{ $group_blood->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('blood_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="weigh"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Weight') }}</label>

                                <div class="col-md-6">
                                    <input id="weigh" type="text"
                                           class="form-control @error('weigh') is-invalid @enderror" name="weigh"
                                           value="{{ old('weigh') }}" required autocomplete="weigh">

                                    @error('weigh')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

{{--                            <div class="form-group row">--}}
{{--                                <label for="image"--}}
{{--                                       class="col-md-4 col-form-label text-md-right">{{ __('Photo') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input type="file" name="image" accept="image/*" value="profile">--}}
{{--                                    @error('image')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
