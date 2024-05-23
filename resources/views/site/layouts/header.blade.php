<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" website" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <title> {{ getSetting('name_website', app()->getLocale()) }} | @yield('title')</title>
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- start-linkes -->
    <link rel="shortcut icon" href="{{ asset('storage/'. getSetting('favicon')) }}">
    <meta name="msapplication-TileColor" content="">





    @seo

    @include('site.layouts.style')


</head>

<body>
    <div class="loader">
        <div class="loading"></div>
    </div>


    <div class="website">
