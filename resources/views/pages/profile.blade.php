@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Edit Profile</h4>
                            <p class="card-category">Complete your profile</p>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('editProfile',$user->id)}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Name</label>
                                            <input type="text" class="form-control" name="name" value="{{old('name',$user->name)}}">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Email address</label>
                                            <input type="email" class="form-control" name="email" value="{{old('email',$user->email)}}">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Personal Number</label>
                                            <input type="number" class="form-control" name="personal_number" value="{{old('personal_number',$user->personal_number)}}">
                                            @error('personal_number')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Age</label>
                                            <input type="number" class="form-control" name="age" value="{{old('age',$user->age)}}">
                                            @error('age')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Gender</label>
                                            <select class="form-control" id="gender" name="gender">
                                                    <option
                                                        value = "male" @if(old('gender', $user->gender) == "male") selected="selected" @endif>Male</option>
                                                <option
                                                    value = "female" @if(old('gender', $user->gender) == "female") selected="selected" @endif>Female</option>

                                            </select>
                                            @error('gender')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Weight</label>
                                            <input type="text" class="form-control" name="weigh" value="{{old('weigh',$user->weigh)}}">
                                            @error('weigh')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Blood Group</label>
                                            <select class="form-control" id="blood_id" name="blood_id">
                                                @foreach($blood_groups as $group_blood)
                                                    <option
                                                        value = "{{$group_blood->id}}" @if(old('blood_id',$user->blood_id) == $group_blood->id) selected="selected" @endif>{{ $group_blood->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('blood_id')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">City</label>
                                            <input type="text" class="form-control" name="city" value="{{old('city',$user->city)}}">
                                            @error('city')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Country</label>
                                            <input type="text" class="form-control" name="country" value="{{old('country',$user->country)}}">
                                            @error('country')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Frequency</label>
                                            <input type="text" class="form-control" name="frequency" value="{{old('frequency',$user->frequency)}}">
                                        </div>
                                    </div>
                                </div>
{{--                                <div class="row">--}}
{{--                                    <div class="col-md-4">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label class="bmd-label-floating">Status</label>--}}
{{--                                            <select class="form-control" id="status" name="status">--}}
{{--                                                <option--}}
{{--                                                    value = "1" @if(old('status') == "1") selected="selected" @endif>Active</option>--}}
{{--                                                <option--}}
{{--                                                    value = "0" @if(old('status') == "0") selected="selected" @endif>Deactive</option>--}}

{{--                                            </select>--}}
{{--                                            @error('status')--}}
{{--                                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                            @enderror--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-md-4">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label class="bmd-label-floating">Role</label>--}}
{{--                                            <select class="form-control" id="role" name="role">--}}
{{--                                                <option--}}
{{--                                                    value = "2" @if(old('role') == "2") selected="selected" @endif>User</option>--}}
{{--                                                <option--}}
{{--                                                    value = "1" @if(old('role') == "1") selected="selected" @endif>Admin</option>--}}

{{--                                            </select>--}}
{{--                                            @error('role')--}}
{{--                                            <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                            @enderror--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="" style="margin-top:8px">Profile Picture</label>
                                            <input type="file" name="image" accept="image/*" class="form-control" style="opacity:1; z-index:0; padding-left:100px">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-profile">
                        <div class="card-avatar">
                            <a href="javascript:;">
                                <img class="img" src="{{ $profile_picture }}" alt=""/>
                            </a>
                        </div>
                        <div class="card-body">
                            <h6 class="card-category text-gray">{{ strtoupper($user->role)}}</h6>
                            <h4 class="card-title">{{ $user->name }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
@section('style')
<style>
    .invalid-feedback{
        display:unset!important;
    }
</style>
    @endsection
