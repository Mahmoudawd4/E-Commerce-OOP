<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    @yield('title')
    </title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

            <li class="nav-item">
                <a class="nav-link" href="{{Route('product.all')}}">All product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{Route('product.one')}}">product Max 100</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{Route('customer.all')}}">All Customer</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{Route('customer.one')}}">Customer in Cairo</a>
            </li>

        </ul>

    </div>
</nav>



    @yield('content')



    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('js/bootstarp.min.js')}}"></script>
</body>
</html>
