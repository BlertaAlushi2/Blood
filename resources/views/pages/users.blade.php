@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title mt-0">Courses</h4>

                            @if(session()->has('success'))
                                <p class="text-success mb-0"><b>
                                        {{ session()->get('success') }}</b>
                                </p>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @include('pages.usersTable')
                            </div>
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
