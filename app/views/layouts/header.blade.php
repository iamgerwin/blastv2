<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Blastv2 | @yield('pagetitle')</title>
    <meta name="description" content="Blast Application">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
    <link rel="shortcut icon" href="{{URL::to('favicon.ico')}}" type="image/x-icon" />

    {{ HTML::style('sb/css/bootstrap.min.css') }}
    {{ HTML::style('sb/font-awesome/css/font-awesome.css') }}
    {{ HTML::style('sb/css/plugins/morris/morris-0.4.3.min.css') }}
    {{ HTML::style('sb/css/plugins/timeline/timeline.css') }}
    {{ HTML::style('sb/css/sb-admin.css') }}

    {{ HTML::style('css/style.css') }}
    <style>

    </style>

    @yield('header')
</head>
<body>