<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

    <!-- Title -->
    <title>{{ $settings['app_name'] ?? 'Al Mukhtar' }} | @yield('title', '')</title>

    <!-- Favicon -->
    <link href="{{ asset('front_assets/images/favicon.ico') }}" rel="icon" type="image/x-icon">

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Lato:100,100i,300,300i,400,400i,700,700i,900,900i"
        rel="stylesheet">
    <link href="{{ asset('front_assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Mobile Menu -->
    <link href="{{ asset('front_assets/css/mmenu.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('front_assets/css/mmenu.positioning.css') }}" rel="stylesheet" type="text/css">

    <!-- Stylesheet -->
    <link href="{{ asset('front_assets/css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
 