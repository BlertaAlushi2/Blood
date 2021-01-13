@extends('layouts.app')
@section('style')
<style>
    .canvasjs-chart-credit{
        display: none !important;
    }
</style>
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            @if(session()->has('success'))
                <p class="text-success mb-0 hasText" ><b>
                        {{ session()->get('success') }}</b>
                </p>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div id="columnChartContainer" style="height: 300px; width: 100%;"></div>
                </div>
            </div>
            <div class="row" style="padding: 25px 0 25px 0; ">
                <div class="col-md-6"> <div id="pieChartContainer" style="height: 300px; width: 100%;"></div></div>
                <div class="col-md-6"> <div id="lineChartContainer" style="height: 300px; width: 100%;"></div></div>
            </div>
            <div class="row">
                <div class="col-md-12">
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
@section('jQuery')
    <script type="text/javascript">
        $(document).ready(function(){
            var columnChart = new CanvasJS.Chart("columnChartContainer", {
                animationEnabled: true,
                theme: "light2", // "light1", "light2", "dark1", "dark2"
                title:{
                    text: "Top blood donations per City"
                },
                axisY: {
                    title: "Blood tanks in L"
                },
                data: [{        
                    type: "column",  
                    showInLegend: true, 
                    legendMarkerColor: "grey",
                    legendText: "Cities",
                    dataPoints: {!! json_encode($chartDonations, JSON_HEX_TAG) !!}
                }]
            });
            
            var lineChart = new CanvasJS.Chart("lineChartContainer", {
                animationEnabled: true,
                theme: "light2", // "light1", "light2", "dark1", "dark2"
                title:{
                    text: "Blood donations in last 6 months"
                },
                axisY: {
                    title: "Blood tanks in L"
                },
                data: [{        
                    type: "column",  
                    showInLegend: true, 
                    legendMarkerColor: "grey",
                    legendText: "Months",
                    dataPoints: {!! json_encode($bloodDonations, JSON_HEX_TAG) !!}
                }]
            });
            var pieChart = new CanvasJS.Chart("pieChartContainer", {
                animationEnabled: true,
                theme: "light2",
                title: {
                    text: "Blood types"
                },
                data: [{
                    type: "pie",
                    startAngle: 240,
                    yValueFormatString: "##0.00'L'",
                    indexLabel: "{label} {y}",
                    dataPoints: {!! json_encode($chartBloodBanks, JSON_HEX_TAG) !!}
                }]
            });
            columnChart.render();
            lineChart.render();
            pieChart.render();
        });
    </script>
@endsection