<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
         <!--     Fonts and icons     -->
         <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
         <!-- CSS Files -->
         <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet" />
         <link href="{{url('css/font-awesome.min.css')}}" rel="stylesheet" />
         <link href="{{url('css/new.css')}}" rel="stylesheet" />
         <!-- CSS Just for demo purpose, don't include it in your project -->

</head>
<body dir="rtl">

    @yield('content')
    @yield('js')
</body>
</html>
