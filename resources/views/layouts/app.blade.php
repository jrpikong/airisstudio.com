<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="{{ app()->getLocale() }}">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="{{ app()->getLocale() }}">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="{{ app()->getLocale() }}" class="no-js">
<head>
    <!-- Basic need -->
    <title>Open Pediatrics</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="profile" href="#">
    <!-- <link rel="shortcut icon" href="images/favicon.ico"> -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Lato:bold,black,regular">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Playfair+Display:bold,italic,bolditalic">
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" >
    <link  rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:400,700,900">
    <!-- -->
    <link  rel="stylesheet" type="text/css" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <link  rel="stylesheet" type="text/css"  href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- Mobile specific meta -->
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone-no">
    <!-- CSS files -->
    <link rel="stylesheet" href="{{asset('css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

    {{--Include Nav--}}
    @include('partials.nav')
    <div id="page" class="allpage">

        {{--Include Header--}}
        @include('partials.header')

        @yield('content')

        {{--Include Footer--}}
        @include('partials.footer')

    </div>

    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <script src="{{asset('js/plugins.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://npmcdn.com/isotope-layout@3.0/dist/isotope.pkgd.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAguiQMk8GSqnO6GHpkgS8txEqYNXDjp4k&callback=initialize" type="text/javascript"></script
</body>
</html>