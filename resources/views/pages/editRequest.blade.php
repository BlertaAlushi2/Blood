@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Edit Request</h4>
                            <p class="card-category">Edit existing Request</p>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('updateRequest',$request->id)}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="user_id" value="">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Name</label>
                                            <input type="text" class="form-control" name="name" value="{{ old('name', $request->user->name) }}">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Age</label>
                                            <input type="number" class="form-control" name="age" value="{{ old('age', $request->user->age) }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">City</label>
                                            <input type="text" class="form-control" name="city" value="{{ old('city', $request->user->city) }}">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Country</label>
                                            <input type="text" class="form-control" name="country" value="{{ old('country', $request->user->country) }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Blood Group</label>
                                            <select class="form-control" id="blood_id" name="blood_id">
                                                @foreach($blood_groups as $group_blood)
                                                    <option
                                                        value = "{{$group_blood->id}}" @if(old('blood_id',isset($request) ? $request->blood_id:'') == $group_blood->id) selected="selected" @endif>{{ $group_blood->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('blood_id')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Quantity</label>
                                            <input type="text" class="form-control" name="quantity" value="{{old('quantity',$request->quantity)}}">
                                            @error('quantity')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Request Date</label>
                                            <input type="date" class="form-control" placeholder="" name="request_date" value="{{old('request_date',$request->request_date)}}">
                                            @error('request_date')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary pull-right" @if($request->confirm_request)disabled="disabled"@endif>Update Request</button>
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
@section('jQuery')
    <script>
        $(document).ready(function () {
            $('.alertBox').hide();
            $('input[name=donation_date]').parent().addClass('is-filled')
        });
        $(document).on('click', '.btn_search', function (e) {
            e.preventDefault();
            let action = $('.search_form').attr('action');
            let personal_number = $("input[name=personal_number]").val();
            console.log(action, personal_number);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: action,
                data: {
                    personal_number: personal_number,
                },
                success: function (data) {
                    console.log(data);
                    if(data.hasOwnProperty('user')){
                        $("input[name=user_id]").val(data.user.id);
                        $("input[name=name]").val(data.user.name).parent().addClass('is-filled');
                        $("input[name=age]").val(data.user.age).parent().addClass('is-filled');
                        $("input[name=city]").val(data.user.city).parent().addClass('is-filled');
                        $("input[name=country]").val(data.user.country).parent().addClass('is-filled');
                        $(".blood_group").val(data.user.blood_id);

                        $('.personal_number').text('');
                    }
                    else{
                        $("input[name=name]").val(null).parent().removeClass('is-filled');
                        $("input[name=age]").val(null).parent().removeClass('is-filled');
                        $("input[name=city]").val(null).parent().removeClass('is-filled');
                        $("input[name=country]").val(null).parent().removeClass('is-filled');
                        $('.personal_number').text(data.message);
                    }
                }
            });
        });
    </script>
@endsection
