<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title> @yield('title') </title>


        <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/dist/css/bootstrap-theme.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">

    	<!-- core CSS -->

        <link href="{{asset('assets/css/site/font-awesome.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/site/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/site/prettyPhoto.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/site/main.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/site/responsive.css')}}" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="{{asset('assets/js/site/html5shiv.js')}}"></script>
        <script src="{{asset('assets/js/site/respond.min.js')}}"></script>
        <![endif]-->
        <link rel="shortcut icon" href="{{asset('assets/files/images/ico/favicon.ico')}}">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('assets/files/images/ico/apple-touch-icon-144-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('assets/files/images/ico/apple-touch-icon-114-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets/files/images/ico/apple-touch-icon-72-precomposed.png')}}">
        <link rel="apple-touch-icon-precomposed" href="{{asset('assets/files/images/ico/apple-touch-icon-57-precomposed.png')}}">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 
</head>
<body id="app-layout">

    @include('layouts.header')

    @section('title', 'Page Title')

    @yield('content')

    @include('layouts.footer')


    <script src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


    <script src = "{{asset('assets/vendor/tinymce/jquery.tinymce.min.js')}}"></script>
    <script src = "{{asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

    <!-- Theme JavaScripts -->
    <script src="{{asset('assets/js/site/jquery.js')}}"></script>
    <script src="{{asset('assets/js/site/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/site/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('assets/js/site/jquery.isotope.min.js')}}"></script>
    <script src="{{asset('assets/js/site/main.js')}}"></script>
    <script src="{{asset('assets/js/site/wow.min.js')}}"></script>
</body>
</html>
