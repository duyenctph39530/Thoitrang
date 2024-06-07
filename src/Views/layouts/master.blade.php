<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
 <div class="container">
    <nav class="mt-5">
        <a href="{{url('admin')}}">Dasboard</a>
        <a href="{{url('admin/products')}}">Quản lý sản phẩm</a>
    </nav>
    <h1 class="mt-5 mb-3 text-center"> @yield('title')</h1>
    <div class="row">
        @yield('content')
    </div>
 </div> 
</body>

</html>