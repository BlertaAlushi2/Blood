@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-danger">
                            <h4 class="card-title"> @if(isset($camp))Edit @else New @endif Camp</h4>
                            <p class="card-category">Add or Edit Camp</p>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ isset($camp) ? route('updateCamp',$camp->id) : route('saveCamp')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Title</label>
                                            <input type="text" class="form-control" name="title" value="{{old('title',isset($camp) ? $camp->title:'')}}">
                                            @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">City</label>
                                            <input type="text" class="form-control" name="city" value="{{old('city',isset($camp) ? $camp->city:'')}}">
                                            @error('city')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">State</label>
                                            <input type="text" class="form-control" name="state" value="{{old('state',isset($camp) ? $camp->state:'')}}">

                                            @error('status')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Details</label>
                                            <textarea class="form-control" name="details" rows="5">{{old('details',isset($camp) ? $camp->details:'')}}</textarea>
                                            @error('details')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="" style="margin-top:8px">Profile Picture</label>
                                            <input type="file" name="image" accept="image/*" class="form-control" style="opacity:1; z-index:0; padding-left:100px">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-danger pull-right">@if(isset($camp))Edit @else New @endif Camp</button>
                                <div class="clearfix"></div>
                            </form>
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
