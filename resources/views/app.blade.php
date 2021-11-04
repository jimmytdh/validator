<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Jimmy Parker">
    <link rel="icon" href="{{ url('/images/favicon.png') }}" sizes="16x16" type="image/png">
    <title>@yield('title','Cebu South Medical Center: Data Validation')</title>
    <!-- Custom styles for this template -->
    <link href="{{ url('/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ url('/css/font-awesome.css') }}" rel="stylesheet">
    @yield('css')
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Data Validation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}"><i class="fa fa-home"></i> Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url("/verify") }}"><i class="fa fa-search"></i> Verify Data</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
<header class="bg-success py-3 mb-5">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-lg-12">
                <div class="banner mt-5">
                    <img src="{{ url('/images/banner.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Page Content -->
<div class="wrapper p-5">
    @yield('content')
</div>

<!-- /.container -->
<!-- Footer -->
<footer class="py-md-3 bg-dark footer">
    <div class="container">
        <font class="text-white">Copyright &copy; CSMC IHOMP 2021</font>
    </div>
    <!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="{{ asset('/js/jquery.min.js') }}"></script>
<script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
@yield('js')
</body>

</html>
