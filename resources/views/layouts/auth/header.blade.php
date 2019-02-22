<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="google-site-verification" content=""/>
    <meta name="msvalidate.01" content=""/>
    <meta name="alexaVerifyID" content=""/>
    <meta name="robots" content="INDEX,FOLLOW"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>

    <title>Innoscripta</title>

    <!-- Open graph -->
    <meta property="og:site_name" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content=""/>
    <meta property="og:image" content="">
    <meta property="og:url" content="{{ url('/') }}">

    <link rel="canonical" href="{{ URL::current() }}"/>
    <link rel="icon" href="{{ asset('favicon.ico') }}"/>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg') }}" color="#004eff">
    <meta name="theme-color" content="#ffffff">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/app.css') }}">
    @stack('styles')
</head>
<body>
    <div class="page">
        <div class="page-single">
