{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}
{{--    <title>@yield('title')</title>--}}

{{--    <meta name="description" content="Task Manager">--}}
{{--    <meta name="author" content="">--}}
{{--    <meta name="robots" content="noindex, nofollow">--}}

{{--    <!-- Open Graph Meta -->--}}
{{--    <meta property="og:title" content="Task Manager">--}}
{{--    <meta property="og:site_name" content="Task Manager">--}}
{{--    <meta property="og:description" content="Task Manager">--}}
{{--    <meta property="og:type" content="website">--}}
{{--    <meta property="og:url" content="">--}}
{{--    <meta property="og:image" content="">--}}


{{--    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">--}}
{{--    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/oneui.min.css') }}">--}}

{{--</head>--}}
{{--<body>--}}
{{--<!-- Page Container -->--}}
{{--<div id="page-container">--}}
{{--    <!-- Main Container -->--}}
{{--    <main id="main-container">--}}

{{--    @yield('content')--}}
{{--    </main>--}}
{{--    <!-- END Main Container -->--}}
{{--</div>--}}

{{--<script src="{{ asset('assets/js/oneui.core.min.js') }}"></script>--}}

{{--<script src="{{ asset('assets/js/oneui.app.min.js') }}"></script>--}}

{{--<!-- Page JS Plugins -->--}}
{{--<script src="{{ asset('assets/js/plugins/jquery-countdown/jquery.countdown.min.js') }}"></script>--}}

{{--<!-- Page JS Code -->--}}
{{--<script src="{{ asset('assets/js/pages/op_coming_soon.min.js') }}"></script>--}}
{{--</body>--}}
{{--</html>--}}



<!--
=========================================================
Material Dashboard PRO - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard-pro
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
    {{--    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">--}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>
        @yield('title')
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport'/>
    <!-- Extra details for Live View on GitHub Pages -->
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-pro"/>
    <!--  Social tags      -->
    <meta name="keywords"
          content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 4 dashboard, bootstrap 4, css3 dashboard, bootstrap 4 admin, material dashboard bootstrap 4 dashboard, frontend, responsive bootstrap 4 dashboard, material design, material dashboard bootstrap 4 dashboard">
    <meta name="description"
          content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design.">
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="Material Dashboard PRO by Creative Tim">
    <meta itemprop="description"
          content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design.">
    <meta itemprop="image"
          content="https://s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_thumbnail.jpg">
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@creativetim">
    <meta name="twitter:title" content="Material Dashboard PRO by Creative Tim">
    <meta name="twitter:description"
          content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design.">
    <meta name="twitter:creator" content="@creativetim">
    <meta name="twitter:image"
          content="https://s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_thumbnail.jpg">
    <!-- Open Graph data -->
    <meta property="fb:app_id" content="655968634437471">
    <meta property="og:title" content="Material Dashboard PRO by Creative Tim"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="http://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html"/>
    <meta property="og:image"
          content="https://s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_thumbnail.jpg"/>
    <meta property="og:description"
          content="Material Dashboard PRO is a Premium Material Bootstrap 4 Admin with a fresh, new design inspired by Google's Material Design."/>
    <meta property="og:site_name" content="Creative Tim"/>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{asset('assets/css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet"/>
    <!-- CSS Just for demo purpose, don't include it in your project -->
{{--    <link href="../../assets/demo/demo.css" rel="stylesheet" />--}}
<!-- Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
    </script>
    <style>
        #ofBar{
            display:none!important;
        }
        .invalid-feedback {
            display: inline-block;
            margin-left: 55px;
        }

        .btn.btn-dribbble {
            color: #fff !important;
            background-color: #ea4c89;
            border-color: #ea4c89;
            box-shadow: 0 2px 2px 0 rgba(234, 76, 137, .14), 0 3px 1px -2px rgba(234, 76, 137, .2), 0 1px 5px 0 rgba(234, 76, 137, .12);
        }

        @media (max-width: 991px) {
            .nav-link {
                color: black !important;
            }
        }

        .card .card-body .form-group {
            margin: 27px 0 0 7px !important;
            padding-bottom: 0px !important;

        }
        @yield('pageCss')
    </style>
    <!-- End Google Tag Manager -->
</head>

<body class="off-canvas-sidebar">
<!-- Extra details for Live View on GitHub Pages -->
<!-- Google Tag Manager (noscript) -->
{{--<noscript>--}}
{{--    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"--}}
{{--            style="display:none;visibility:hidden"></iframe>--}}
{{--</noscript>--}}
<!-- End Google Tag Manager (noscript) -->

@yield('content')

<!-- Navbar -->
{{--<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">--}}
{{--    <div class="container">--}}
{{--        <div class="navbar-wrapper">--}}
{{--            <a class="navbar-brand" href="javascript:;">Register Page</a>--}}
{{--        </div>--}}
{{--        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="sr-only">Toggle navigation</span>--}}
{{--            <span class="navbar-toggler-icon icon-bar"></span>--}}
{{--            <span class="navbar-toggler-icon icon-bar"></span>--}}
{{--            <span class="navbar-toggler-icon icon-bar"></span>--}}
{{--        </button>--}}
{{--        <div class="collapse navbar-collapse justify-content-end">--}}
{{--            <ul class="navbar-nav">--}}
{{--                <li class="nav-item  active ">--}}
{{--                    <a href="../pages/register.html" class="nav-link">--}}
{{--                        <i class="material-icons">person_add</i>--}}
{{--                        Register--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item ">--}}
{{--                    <a href="../pages/login.html" class="nav-link">--}}
{{--                        <i class="material-icons">fingerprint</i>--}}
{{--                        Login--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
{{--<!-- End Navbar -->--}}
{{--<div class="wrapper wrapper-full-page">--}}
{{--    <div class="page-header register-page header-filter" filter-color="black" style="background-image: url('{{asset('assets/media/photos/photo23@2x.jpg')}}'); background-position: 0 50%;--}}
{{--        background-size: cover;">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-5 ml-auto mr-auto">--}}
{{--                    <div class="card card-signup">--}}
{{--                        <h2 class="card-title text-center pt-5 ">Register</h2>--}}
{{--                        <div class="card-body pb-5">--}}
{{--                            <div class="row">--}}
{{--                                --}}{{--                                <div class="col-md-5 ml-auto">--}}
{{--                                --}}{{--                                    <div class="info info-horizontal">--}}
{{--                                --}}{{--                                        <div class="icon icon-rose">--}}
{{--                                --}}{{--                                            <i class="material-icons">timeline</i>--}}
{{--                                --}}{{--                                        </div>--}}
{{--                                --}}{{--                                        <div class="description">--}}
{{--                                --}}{{--                                            <h4 class="info-title">Marketing</h4>--}}
{{--                                --}}{{--                                            <p class="description">--}}
{{--                                --}}{{--                                                We've created the marketing campaign of the website. It was a very interesting collaboration.--}}
{{--                                --}}{{--                                            </p>--}}
{{--                                --}}{{--                                        </div>--}}
{{--                                --}}{{--                                    </div>--}}
{{--                                --}}{{--                                    <div class="info info-horizontal">--}}
{{--                                --}}{{--                                        <div class="icon icon-primary">--}}
{{--                                --}}{{--                                            <i class="material-icons">code</i>--}}
{{--                                --}}{{--                                        </div>--}}
{{--                                --}}{{--                                        <div class="description">--}}
{{--                                --}}{{--                                            <h4 class="info-title">Fully Coded in HTML5</h4>--}}
{{--                                --}}{{--                                            <p class="description">--}}
{{--                                --}}{{--                                                We've developed the website with HTML5 and CSS3. The client has access to the code using GitHub.--}}
{{--                                --}}{{--                                            </p>--}}
{{--                                --}}{{--                                        </div>--}}
{{--                                --}}{{--                                    </div>--}}
{{--                                --}}{{--                                    <div class="info info-horizontal">--}}
{{--                                --}}{{--                                        <div class="icon icon-info">--}}
{{--                                --}}{{--                                            <i class="material-icons">group</i>--}}
{{--                                --}}{{--                                        </div>--}}
{{--                                --}}{{--                                        <div class="description">--}}
{{--                                --}}{{--                                            <h4 class="info-title">Built Audience</h4>--}}
{{--                                --}}{{--                                            <p class="description">--}}
{{--                                --}}{{--                                                There is also a Fully Customizable CMS Admin Dashboard for this product.--}}
{{--                                --}}{{--                                            </p>--}}
{{--                                --}}{{--                                        </div>--}}
{{--                                --}}{{--                                    </div>--}}
{{--                                --}}{{--                                </div>--}}
{{--                                <div class="col-md-10 ml-auto mr-auto">--}}
{{--                                    <div class="social text-center">--}}
{{--                                        <button class="btn btn-just-icon btn-round btn-twitter">--}}
{{--                                            <i class="fa fa-twitter"></i>--}}
{{--                                        </button>--}}
{{--                                        <button class="btn btn-just-icon btn-round btn-dribbble">--}}
{{--                                            <i class="fa fa-dribbble"></i>--}}
{{--                                        </button>--}}
{{--                                        <button class="btn btn-just-icon btn-round btn-facebook">--}}
{{--                                            <i class="fa fa-facebook"> </i>--}}
{{--                                        </button>--}}
{{--                                        <h4 class="mt-3"> or be classical </h4>--}}
{{--                                    </div>--}}
{{--                                    <form class="form" method="" action="">--}}
{{--                                        <div class="form-group has-default">--}}
{{--                                            <div class="input-group">--}}
{{--                                                <div class="input-group-prepend">--}}
{{--                            <span class="input-group-text">--}}
{{--                              <i class="material-icons">face</i>--}}
{{--                            </span>--}}
{{--                                                </div>--}}
{{--                                                <input type="text" class="form-control" placeholder="Name...">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group has-default">--}}
{{--                                            <div class="input-group">--}}
{{--                                                <div class="input-group-prepend">--}}
{{--                            <span class="input-group-text">--}}
{{--                              <i class="material-icons">mail</i>--}}
{{--                            </span>--}}
{{--                                                </div>--}}
{{--                                                <input type="text" class="form-control" placeholder="Email...">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group has-default">--}}
{{--                                            <div class="input-group">--}}
{{--                                                <div class="input-group-prepend">--}}
{{--                            <span class="input-group-text">--}}
{{--                              <i class="material-icons">lock_outline</i>--}}
{{--                            </span>--}}
{{--                                                </div>--}}
{{--                                                <input type="password" placeholder="Password..." class="form-control">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group has-default">--}}
{{--                                            <div class="input-group">--}}
{{--                                                <div class="input-group-prepend">--}}
{{--                            <span class="input-group-text">--}}
{{--                              <i class="material-icons">lock_outline</i>--}}
{{--                            </span>--}}
{{--                                                </div>--}}
{{--                                                <input type="password" placeholder="Confirm Password..." class="form-control">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}


{{--                                        --}}{{--                                        <div class="form-check">--}}
{{--                                        --}}{{--                                            <label class="form-check-label">--}}
{{--                                        --}}{{--                                                <input class="form-check-input" type="checkbox" value="" checked="">--}}
{{--                                        --}}{{--                                                <span class="form-check-sign">--}}
{{--                                        --}}{{--                            <span class="check"></span>--}}
{{--                                        --}}{{--                          </span>--}}
{{--                                        --}}{{--                                                I agree to the--}}
{{--                                        --}}{{--                                                <a href="#something">terms and conditions</a>.--}}
{{--                                        --}}{{--                                            </label>--}}
{{--                                        --}}{{--                                        </div>--}}
{{--                                        <div class="text-center">--}}
{{--                                            <a href="#pablo" class="btn btn-primary btn-round mt-4">Get Started</a>--}}
{{--                                        </div>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <footer class="footer">--}}
{{--            <div class="container">--}}
{{--                <nav class="float-left">--}}
{{--                    <ul>--}}
{{--                        <li>--}}
{{--                            <a href="https://www.creative-tim.com/">--}}
{{--                                Creative Tim--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="https://www.creative-tim.com/presentation">--}}
{{--                                About Us--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="https://www.creative-tim.com/blog">--}}
{{--                                Blog--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="https://www.creative-tim.com/license">--}}
{{--                                Licenses--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </nav>--}}
{{--                <div class="copyright float-right">--}}
{{--                    &copy;--}}
{{--                    <script>--}}
{{--                        document.write(new Date().getFullYear())--}}
{{--                    </script>, made with <i class="material-icons">favorite</i> by--}}
{{--                    <a href="https://www.creative-tim.com/" target="_blank">Creative Tim</a> for a better web.--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </footer>--}}
{{--    </div>--}}
{{--</div>--}}
<!--   Core JS Files   -->
<script src="{{asset('assets/js/core/core/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/core/core/popper.min.js')}}"></script>
<script src="{{asset('assets/js/core/core/bootstrap-material-design.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Chartist JS -->
<script src="{{asset('assets/js/plugins/chartist.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('assets/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('assets/js/material-dashboard.js?v=2.1.2')}}" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
{{--<script src="../../assets/demo/demo.js"></script>--}}
<script>
    $(document).ready(function () {
        $().ready(function () {
            $sidebar = $('.sidebar');

            $sidebar_img_container = $sidebar.find('.sidebar-background');

            $full_page = $('.full-page');

            $sidebar_responsive = $('body > .navbar-collapse');

            window_width = $(window).width();

            fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

            if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
                if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
                    $('.fixed-plugin .dropdown').addClass('open');
                }

            }

            $('.fixed-plugin a').click(function (event) {
                // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                if ($(this).hasClass('switch-trigger')) {
                    if (event.stopPropagation) {
                        event.stopPropagation();
                    } else if (window.event) {
                        window.event.cancelBubble = true;
                    }
                }
            });

            $('.fixed-plugin .active-color span').click(function () {
                $full_page_background = $('.full-page-background');

                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data-color', new_color);
                }

                if ($full_page.length != 0) {
                    $full_page.attr('filter-color', new_color);
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.attr('data-color', new_color);
                }
            });

            $('.fixed-plugin .background-color .badge').click(function () {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('background-color');

                if ($sidebar.length != 0) {
                    $sidebar.attr('data-background-color', new_color);
                }
            });

            $('.fixed-plugin .img-holder').click(function () {
                $full_page_background = $('.full-page-background');

                $(this).parent('li').siblings().removeClass('active');
                $(this).parent('li').addClass('active');


                var new_image = $(this).find("img").attr('src');

                if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    $sidebar_img_container.fadeOut('fast', function () {
                        $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                        $sidebar_img_container.fadeIn('fast');
                    });
                }

                if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $full_page_background.fadeOut('fast', function () {
                        $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                        $full_page_background.fadeIn('fast');
                    });
                }

                if ($('.switch-sidebar-image input:checked').length == 0) {
                    var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                    $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                }

                if ($sidebar_responsive.length != 0) {
                    $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                }
            });

            $('.switch-sidebar-image input').change(function () {
                $full_page_background = $('.full-page-background');

                $input = $(this);

                if ($input.is(':checked')) {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar_img_container.fadeIn('fast');
                        $sidebar.attr('data-image', '#');
                    }

                    if ($full_page_background.length != 0) {
                        $full_page_background.fadeIn('fast');
                        $full_page.attr('data-image', '#');
                    }

                    background_image = true;
                } else {
                    if ($sidebar_img_container.length != 0) {
                        $sidebar.removeAttr('data-image');
                        $sidebar_img_container.fadeOut('fast');
                    }

                    if ($full_page_background.length != 0) {
                        $full_page.removeAttr('data-image', '#');
                        $full_page_background.fadeOut('fast');
                    }

                    background_image = false;
                }
            });

            $('.switch-sidebar-mini input').change(function () {
                $body = $('body');

                $input = $(this);

                if (md.misc.sidebar_mini_active == true) {
                    $('body').removeClass('sidebar-mini');
                    md.misc.sidebar_mini_active = false;

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                } else {

                    $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                    setTimeout(function () {
                        $('body').addClass('sidebar-mini');

                        md.misc.sidebar_mini_active = true;
                    }, 300);
                }

                // we simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function () {
                    window.dispatchEvent(new Event('resize'));
                }, 180);

                // we stop the simulation of Window Resize after the animations are completed
                setTimeout(function () {
                    clearInterval(simulateWindowResize);
                }, 1000);

            });
        });
    });
</script>
<!-- Sharrre libray -->
{{--<script src="{{asset('assets/js/demo/jquery.sharrre.js')}}"></script>--}}
<script>
    $(document).ready(function () {


        $('#facebook').sharrre({
            share: {
                facebook: true
            },
            enableHover: false,
            enableTracking: false,
            enableCounter: false,
            click: function (api, options) {
                api.simulateClick();
                api.openPopup('facebook');
            },
            template: '<i class="fab fa-facebook-f"></i> Facebook',
            url: 'https://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html'
        });

        $('#google').sharrre({
            share: {
                googlePlus: true
            },
            enableCounter: false,
            enableHover: false,
            enableTracking: true,
            click: function (api, options) {
                api.simulateClick();
                api.openPopup('googlePlus');
            },
            template: '<i class="fab fa-google-plus"></i> Google',
            url: 'https://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html'
        });

        $('#twitter').sharrre({
            share: {
                twitter: true
            },
            enableHover: false,
            enableTracking: false,
            enableCounter: false,
            buttons: {
                twitter: {
                    via: 'CreativeTim'
                }
            },
            click: function (api, options) {
                api.simulateClick();
                api.openPopup('twitter');
            },
            template: '<i class="fab fa-twitter"></i> Twitter',
            url: 'https://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html'
        });


        // Facebook Pixel Code Don't Delete
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', '//connect.facebook.net/en_US/fbevents.js');

        try {
            fbq('init', '111649226022273');
            fbq('track', "PageView");

        } catch (err) {
            console.log('Facebook Track Error:', err);
        }

    });
</script>
<script>
    // Facebook Pixel Code Don't Delete
    !function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window,
        document, 'script', '//connect.facebook.net/en_US/fbevents.js');

    try {
        fbq('init', '111649226022273');
        fbq('track', "PageView");

    } catch (err) {
        console.log('Facebook Track Error:', err);
    }
</script>
<noscript>
    <img height="1" width="1" style="display:none"
         src="https://www.facebook.com/tr?id=111649226022273&ev=PageView&noscript=1"/>
</noscript>
<script>
    $(document).ready(function () {
        md.checkFullPageBackgroundImage();
    });
</script>
</body>

</html>
