<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="images/favicon.png" rel="shortcut icon">
    <title>{{$title??''}} - Supply Chain Solution</title>

    <!--====== Google Font ======-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">

    <!--====== Vendor Css ======-->
    <link rel="stylesheet" href="{{URL::asset('theme/css/vendor.css')}}">

    <!--====== Utility-Spacing ======-->
    <link rel="stylesheet" href="{{URL::asset('theme/css/utility.css')}}">

    <!--====== App ======-->
    <link rel="stylesheet" href="{{URL::asset('theme/css/app.css')}}">
    <link rel="stylesheet" href="{{URL::asset('theme/css/app.color8.css')}}">
	<link rel="stylesheet" href="{{URL::asset('theme/css/custom.css')}}">
</head>
<body class="config">
    <div class="preloader is-active">
        <div class="preloader__wrap">

            <img class="preloader__img" src="{{URL::asset('images/preloader.png')}}" alt=""></div>
    </div>

    <!--====== Main App ======-->
    <div id="app">

        <!--====== Main Header ======-->
        <header class="header--style-1">
			@include('template.default.header')
        </header>
        <!--====== End - Main Header ======-->


        <!--====== App Content ======-->
        <div class="app-content">
			@yield('content')
        </div>
        <!--====== End - App Content ======-->


        <!--====== Main Footer ======-->
        <footer>
			@include('template.default.footer')
        </footer>

        <!--====== Modal Section ======-->

    </div>
    <!--====== End - Main App ======-->


    <!--====== Google Analytics: change UA-XXXXX-Y to be your site's ID ======-->
    <script>
        window.ga = function() {
            ga.q.push(arguments)
        };
        ga.q = [];
        ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto');
        ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>

    <!--====== Vendor Js ======-->
    <script src="{{URL::asset('theme/js/vendor.js/')}}"></script>

    <!--====== jQuery Shopnav plugin ======-->
    <script src="{{URL::asset('theme/js/jquery.shopnav.js')}}"></script>

    <!--====== App ======-->
    <script src="{{URL::asset('theme/js/app.js')}}"></script>

    <!--====== Noscript ======-->
    <noscript>
        <div class="app-setting">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="app-setting__wrap">
                            <h1 class="app-setting__h1">JavaScript is disabled in your browser.</h1>

                            <span class="app-setting__text">Please enable JavaScript in your browser or upgrade to a JavaScript-capable browser.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </noscript>
</body>
</html>
