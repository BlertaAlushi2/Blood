@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-danger">
                            <h4 class="card-title mt-0">Camps</h4>

                            @if(session()->has('success'))
                                <p class="text-success mb-0"><b>
                                        {{ session()->get('success') }}</b>
                                </p>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                @include('pages.campTable')
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

        $('.js-dataTable-full').DataTable({
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'pdf',
                        title: 'PDF exportation of data',
                        exportOptions: {
                            columns: "thead th:not(:last-child)"
                        },
                        filename: function(){
                            var d = new Date();
                            var n = d.getTime();
                            return 'Camps_' + n;
                        }
                    },{
                        extend: 'excel',
                        title: 'Excel exportation of data',
                        exportOptions: {
                            columns: "thead th:not(:last-child)"
                        },
                        filename: function(){
                            var d = new Date();
                            var n = d.getTime();
                            return 'Camps_' + n;
                        }
                    }, {
                        extend: 'csv',
                        title: 'CSV exportation of data',
                        exportOptions: {
                            columns: "thead th:not(:last-child)"
                        },
                        filename: function(){
                            var d = new Date();
                            var n = d.getTime();
                            return 'Camps_' + n;
                        }
                    }]
            } );
    </script>
@endsection
