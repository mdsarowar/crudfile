<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="{{url('/')}}" class="navbar-brand">Logo</a>
        <div class="navbar-nav">
            <li><a href="{{route('add_product')}}"class="nav-link">Add Product</a></li>
            <li><a href="{{'manage_product'}}"class="nav-link">Manage Product</a></li>
            <li><a href=""class="nav-link">JavaScript</a></li>
        </div>
    </div>
</nav>

@yield('body')


<script src="{{asset('/assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('/assets/js/bootstrap.bundle.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@if(Session::has('message'))
    <script>
        toastr.success("{{Session::get('message')}}");
    </script>
@endif
</body>
</html>

