<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{URL::asset('img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>UBAYA @yield('title')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('css/material-kit.css')}}" rel="stylesheet"/>
</head>

<body class="@yield('class')-page">
    @include('partials._nav')
    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('{{URL::asset('img/bg2.jpeg')}}');">
            <div class="container">
                <div class="row">
                    @yield('judul')

                </div>

            </div>
        </div>
        
        <div class="main main-raised">
            <div class="section" id="carousel">
                <div class="container">
                    @yield('carousel')

                    @yield('news')

                </div>
            </div>
        </div>
        @include('partials._footer')
    </div>

</body>
    @include('partials._script')
    @yield('script')
</html>