<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bazaar</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-success bg-dark">
<div class="container">
    <a href="" class="navbar-brand">Bazaar Admin Panel</a>
</div>

    </nav>
    <div class="nav navbar navbar-expand-lg navbar-success bg-light p-1 sticky-top">
        <div class="container">
            <ul class="navbar-nav">
                <li class="nav-item"><a href=""class="admin.index">Home</a></li>
                <li class="nav-item"><a href="{{route('admin.product')}}"class="nav-link">Product Manage</a></li>
                <li class="nav-item"><a href="{{route('admin.product.insert')}}"class="nav-link">Insert Product</a></li>
                <li class="nav-item"><a href="{{route('admin.orders')}}" class="nav-link">Orders</a></li>
                <li class="nav-item"><a href="{{route('admin.address')}}"class="nav-link">Addresses</a></li>
                <li class="nav-item"><a href="{{route('admin.coupon')}}"class="nav-link">Coupons</a></li>
                <li class="nav-item"><a href="{{route('admin.categories')}}"class="nav-link">Categories</a></li>
                <li class="nav-item"><a href="{{route('admin.users')}}"class="nav-link">Users</a></li>
                <li class="nav-item"><a href=""class="nav-link">Logout</a></li>
            </ul>
        </div>
    </div>

    @section('content')
    @show
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

</body>
</html>