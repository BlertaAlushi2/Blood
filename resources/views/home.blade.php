@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            @if(session()->has('success'))
                <p class="text-success mb-0 hasText" ><b>
                        {{ session()->get('success') }}</b>
                </p>
            @endif
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                    @if(Auth::user()->role === 1)
                        <div class="card-header card-header-danger">
                            <h4 class="card-title mt-0">Blood Bank</h4>
                            <p class="card-category">Quantity for each group of blood</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @include('pages.tableBloodBank')
                            </div>
                        </div>
                        @else
                            <div class="card-header card-header-danger">
                                <h4 class="card-title mt-0">Donations</h4>
                                <p class="card-category">Donations you have done!</p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">

                                    <table class="table table-hover js-dataTable-full">
                                        <thead class="">
                                        <th>
                                            NAME
                                        </th>
                                        <th>
                                            CAMP
                                        </th>
                                        <th>
                                            BLOOD GROUP
                                        </th>
                                        <th>
                                            DATE
                                        </th>
                                        </thead>
                                        <tbody>
                                        @if($donations)
                                            @foreach($donations as $donation)
                                                <tr>
                                                    <td>
                                                        {{ $donation->user->name}}
                                                    </td>
                                                    <td>
                                                        <a href="{{route('editCamp',$donation->camp->id)}}">{{ $donation->camp->title}}</a>
                                                    </td>
                                                    <td>
                                                        {{ $donation->blood->name }}
                                                    </td>
                                                    <td>
                                                        {{ $donation->donation_date }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

