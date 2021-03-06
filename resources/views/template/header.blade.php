<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Kuskus - @yield('title')</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        {{-- <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}"></link> --}}
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"></link>
        <style>
            .clearfix {
            overflow: auto;
            }
            .clearfix::after {
            content: "";
            clear: both;
            display: table;
            }
            html {
                position: relative;
                min-height: 100%;
            }
            .footer {
                width: 100%;
                height: 2.5rem;
                position: absolute;
                bottom: 0px; left: 0;
            }
        </style>
    </head>

    <body style="background-color: #e9ebee;">