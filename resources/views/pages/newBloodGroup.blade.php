@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-header-danger">
                            <h4 class="card-title mt-0">Blood Groups</h4>

                            @if(session()->has('success'))
                                <p class="text-success mb-0 hasText"><b>
                                        {{ session()->get('success') }}</b>
                                </p>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @include('pages.bloodTable')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header card-header-danger">
                            <h4 class="card-title">New Blood Group</h4>
                            <p class="card-category">Add new blood group</p>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('saveBloodGroup')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Name</label>
                                            <input type="text" class="form-control" name="name" value="{{old('name')}}">
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-danger pull-right">New Blood Group</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('jQuery')
    <script>
        $(document).ready(function(){
            $('.deleteCourse').click(function(){
                let url = $(this).attr('data-url');
                if (url !== '') {
                    $('.modalForm').attr('action', url);
                    $('#deleteModal').modal('show');
                }
            });
        });
    </script>
    @endsection
@section('style')
    <style>
        .invalid-feedback{
            display:unset!important;
        }
    </style>
@endsection
