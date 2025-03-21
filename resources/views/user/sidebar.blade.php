<nav class="navbar navbar-expand-md navbar-light">
    <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#mynav">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynav">
        <div class="container-fluid">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-lg-2 col-md-4 fixed-top sidebar">
                    <a href="index.html"
                        class="navbar-brand text-light d-block mx-auto text-center py-3 mb-4 bottom-border"><img
                            src="{{asset('uploads/setting/'.$settings->logo)}}" class="img-fluid" width="200px" alt="logo"></a>
                    <div class="bottom-border pb-3">
                        <img src="./img/profile.jpg" alt="" width="60" class="rounded-circle">
                        <a href="#" class="text-light"> @auth
                            <p>Welcome, {{ auth()->user()->name }}!</p>
                            @endauth
                        </a>
                    </div>
                    <ul class="navbar-nav flex-column mt-5">
                        <li class="nav-item">
                            <a href="dashboard.html" class="nav-link text-light p-3 mb-2 sidebar-link current">
                                <i class="fa fa-home text-light fa-lg mr-3"></i>Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('orders.view')}}" class="nav-link text-light p-3 mb-2 sidebar-link">
                                <i class="fa fa-database text-light fa-lg mr-3"></i>All Orders
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="addproduct.html" class="nav-link text-light p-3 mb-2 sidebar-link">
                                <i class="fa fa-plus-circle text-light fa-lg mr-3"></i>Add Product
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="editproduct.html" class="nav-link text-light p-3 mb-2 sidebar-link">
                                <i class="fa fa-pencil-square-o text-light fa-lg mr-3"></i>Edit Product
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="removeproduct.html" class="nav-link text-light p-3 mb-2 sidebar-link">
                                <i class="fa fa-trash text-light fa-lg mr-3"></i>Remove Product
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('user.profile',['id'=>Auth::user()->id ?? 0])}}" class="nav-link text-light p-3 mb-2 sidebar-link">
                                <i class="fa fa-cogs text-light fa-lg mr-3"></i>Settings
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Top Nav -->
                <div class="col-lg-10 col-md-8 ml-auto fixed-top cstm-header align-items-center top-nav">
                    <div class="row">
                        <div class="col-lg-4 col-md-8 d-flex justify-content-center align-items-center pl-5">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link mx-2 text-light" href="index.html">Home <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-2 text-light" href="{{route('orders.view')}}">Order</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mx-2 text-light" href="dashboard.html">Dashboard</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block">
                            <form class="form-inline">
                                <input class="form-control mx-2 my-2" type="search" placeholder="Search"
                                    aria-label="Search">
                                <button class="btn btn-light" type="submit"><i class="fa fa-search"
                                        aria-hidden="true"></i>
                                </button>
                            </form>

                        </div>
                        <div class="col-md-4 col-lg-2 mt-2 justify-content-end align-items-center">
                            <button class="btn btn-outline-light mx-2" data-toggle="modal" data-target="#logout"><i
                                    class="fa fa-sign-out" aria-hidden="true"></i>
                                Logout</button>
                        </div>
                    </div>
                </div>
                <!-- Top Nav Ends -->
            </div>
        </div>
    </div>

</nav>