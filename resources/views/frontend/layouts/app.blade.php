<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="max-age=604800" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>commerce</title>

    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">

    <link rel="stylesheet" type="text/css" href="{{asset('butik/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('butik/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('butik/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('butik/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('butik/css/chosen.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('butik/css/lightbox.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('butik/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('butik/css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('butik/css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('butik/css/style.css')}}">
    <style>
        .new-button-custom{
            border: 1px solid #eaeaea;
            padding: 10px;
            font-family: 'Courier New', Courier, monospace;
            font-size: 10px;
            font-style: inherit;
        }

        .car-custom{
            font-style: italic;
        }

        .new-form-login{
            font-size: 10cm;
        }

        .card-bordered{
            border: 1px solid #eaeaea;
            padding: 30px;
        }

        .validation{
            font-size: 10px;
            color: red;
            font-weight: normal;
        }
    </style>

    @toastr_css

</head>
<body>

@include('frontend.includes.header')

<!-- ========================= SECTION CONTENT ========================= -->
@yield('content')
<!-- ========================= SECTION CONTENT END// ========================= -->
<br>
@include('frontend.includes.footer')


@jquery
@toastr_js
@toastr_render

@yield('script')

<script type="text/javascript" src="{{asset('butik/js/jquery-2.1.4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('butik/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('butik/js/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('butik/js/chosen.jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('butik/js/Modernizr.js')}}"></script>
<script type="text/javascript" src="{{asset('butik/js/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('butik/js/lightbox.min.js')}}"></script>
<script type="text/javascript" src="{{asset('butik/js/masonry.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('butik/js/imagesloaded.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('butik/js/isotope.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('butik/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script type="text/javascript" src="{{asset('butik/js/jquery.parallax-1.1.3.js')}}"></script>
<script type="text/javascript" src="{{asset('butik/js/jquery.magnific-popup.min.js')}}"></script>
<script type="text/javascript" src="{{asset('butik/js/masonry.js')}}"></script>
<script type="text/javascript" src="{{asset('butik/js/functions.js')}}"></script>

</body>

</html>