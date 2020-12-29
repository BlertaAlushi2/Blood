<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
{{--    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">--}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        BBMS
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <script src="{{asset('assets/js/core/jquery.min.js')}}"></script>

    <link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/datatables/buttons-bs4/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
    <script src="{{ asset('assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- CSS Files -->
    <link href="{{asset('assets/css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
{{--    <link href="{{asset('assets/demo/demo.css')}}" rel="stylesheet" />--}}
<!--   Core JS Files   -->

    <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/core/bootstrap-material-design.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
    <!-- Plugin for the momentJs  -->
    <script src="{{asset('assets/js/plugins/moment.min.js')}}"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="{{asset('assets/js/plugins/sweetalert2.js')}}"></script>
    <!-- Forms Validations Plugin -->
    <script src="{{asset('assets/js/plugins/jquery.validate.min.js')}}"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="{{asset('assets/js/plugins/jquery.bootstrap-wizard.js')}}"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="{{asset('assets/js/plugins/bootstrap-selectpicker.js')}}"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="{{asset('assets/js/plugins/bootstrap-datetimepicker.min.js')}}"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="{{asset('assets/js/plugins/jquery.dataTables.min.js')}}"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="{{asset('assets/js/plugins/bootstrap-tagsinput.js')}}"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="{{asset('assets/js/plugins/jasny-bootstrap.min.js')}}"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="{{asset('assets/js/plugins/fullcalendar.min.js')}}"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="{{asset('assets/js/plugins/jquery-jvectormap.js')}}"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{asset('assets/js/plugins/nouislider.min.js')}}"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="{{asset('assets/js/plugins/nouislider.min.js')}}"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist JS -->
    <script src="{{asset('assets/js/plugins/chartist.min.js')}}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{asset('assets/js/plugins/bootstrap-notify.js')}}"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{asset('assets/js/material-dashboard.js?v=2.1.2')}}" type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    {{--    <script src="../assets/demo/demo.js"></script>--}}
</head>
<body>
    <div class="wrapper">
        @include('layouts.sidebar')
        <div class="main-panel">
            @include('layouts.header')
            @yield('content')
            @include('layouts.modals')
            @include('layouts.footer')
        </div>
    </div>

</body>
<script>
    $(document).ready(function() {
        $('.js-dataTable-full').DataTable();
        let sidebar = document.getElementsByClassName('sidebar-wrapper');
        // let sidebarURLs = sidebar[0].getElementsByClassName('nav-link');
        let sidebarURLs = $('.sidebar-wrapper .nav-link');
        let currentUrl = window.location.href;
        sidebarURLs.filter(function(){
            return this.href === currentUrl;
        }).parent().addClass('active').parents('.collapse').addClass('show').siblings('.nav-link').removeClass('.collapsed').attr('aria-expanded','true');
    });
    $(document).ready(function () {
        $('.alertBox').hide();
    });
    $(document).on('click','.delete', function(e){
        e.preventDefault();
        let action = $('.modalForm').attr('action');
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: action,
            data: {
            },
            success: function (data) {
                // var messages_table = $(".messages_table");
                // messages_table.html("");
                // messages_table.html(data)
                console.log(data.table);
                $('.alertBox').show();
                $('.alertBox div').addClass('alert-'+data.status);
                $('.message').text(data.message)
                    setTimeout(function () {
                        $('#deleteModal').modal('hide');
                        // window.location.href=data.url
                        let table = $('.table');
                        table.html("");
                        table.html(data.table);
                        // $('.js-dataTable-full').DataTable().ajax.reload();

                    }, 3000);

            }
        });
    });
</script>
@yield('jQuery')
</html>
