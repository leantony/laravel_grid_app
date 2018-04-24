<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grids test application</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
          integrity="sha256-NuCn4IvuZXdBaFKJOAcsU2Q3ZpwbdFisd5dux4jkQ5w=" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.css"
          integrity="sha256-no0c5ccDODBwp+9hSmV5VvPpKwHCpbVzXHexIkupM6U=" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.min.css"
          integrity="sha256-WgFzD1SACMRatATw58Fxd2xjHxwTdOqB48W5h+ZGLHA=" crossorigin="anonymous"/>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="navbar-brand" href="/">laravel grid</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('https://github.com/leantony/laravel-grid') }}">Github package</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('https://packagist.org/packages/leantony/laravel-grid') }}">Packagist</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('https://github.com/leantony/laravel-grid/wiki') }}">Docs</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                Examples
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="{{ url('/users') }}">Users</a>
                <a class="dropdown-item" href="{{ url('/roles') }}">Users</a>
            </div>
        </li>
    </ul>
</nav>

<div class="jumbotron">
    <div class="container" style="margin-top: 50px;">
        <h1>Laravel Grid View</h1>
        <p>Simple, customizable, pjax ready bootstrap styled grid view for the laravel framework, inspired by the yii2
            gridview widget. For laravel 5.6 and above.
        <p>
            <a class="btn btn-primary btn-lg" href="{{ url('https://github.com/leantony/laravel-grid') }}">View on
                Github
                <i class="fa fa-github"></i></a>
        </p>
    </div>
</div>

<div class="container" style="margin-bottom: 100px;">
    <div class="row">
        @yield('content')
    </div>
</div>
@include('leantony::modal.container')
<script src="https://cdnjs.cloudflare.com/ajax/libs/nprogress/0.2.0/nprogress.min.js"
        integrity="sha256-XWzSUJ+FIQ38dqC06/48sNRwU1Qh3/afjmJ080SneA8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/2.0.1/jquery.pjax.min.js"
        integrity="sha256-8Te5uZFXTW5VNskYNkjCnaNnGRweXs4cOVvlTSBECYY=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js"
        integrity="sha256-9wRM03dUw6ABCs+AU69WbK33oktrlXamEXMvxUaF+KU=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/2.1.27/daterangepicker.min.js"
        integrity="sha256-fuPJ7xvV6OPcIGSJd2Xj7s/+2aWsVGapv+Uj/cuVOzk=" crossorigin="anonymous"></script>
<script src="{{ asset('vendor/leantony/grid/js/grid.js') }}"></script>
<script>
    // setup ajax
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).on('pjax:start', function () {
        NProgress.start();
    });
    $(document).on('pjax:end', function () {
        NProgress.done();
    });
</script>
@stack('grid_js')
</body>
</html>
