@include('user.header')
@php
$settings = \App\Models\setting::first();
@endphp
<!-- Navbar -->
@include('user.sidebar')

<!-- Logout Modal -->
<div class="modal fade" id="logout">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-dark text-light">
                <h5 class="modal-title">Do You Really Want to Leave?</h5>
                <button type="button" class="close text-white" data-dismiss="modal">&times;</button>
            </div>
            <!-- <div class="modal-body">
                    <h5>Press Logout to leave</h5>
                </div> -->
            <div class="modal-footer bg-dark">
                <button type="button" class="btn btn-light">Stay Here</button>
                <button type="button" class="btn btn-danger">Logout</button>
            </div>
        </div>
    </div>
</div>
<!-- Logout Modal Ends -->

<!-- Cards -->
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 col-md-8 ml-auto">
                <div class="row pt-md-5 mt-md-3 mb-5">
                    <div class="col-sm-6 col-xl-3 p-2">
                        <div class="card cstm-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <i class="fa fa-shopping-cart fa-4x text-danger"></i>
                                    <div class="text-right text-secondary">
                                        <h5>Sales</h5>
                                        <h3>$135,000</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-secondary">
                                <i class="fa fa-refresh mr-3"></i>
                                <span>Update Now</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 p-2">
                        <div class="card cstm-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <i class="fa fa-money fa-4x text-success"></i>
                                    <div class="text-right text-secondary">
                                        <h5>Expenses</h5>
                                        <h3>$40,000</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-secondary">
                                <i class="fa fa-refresh mr-3"></i>
                                <span>Update Now</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 p-2">
                        <div class="card cstm-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <i class="fa fa-users fa-4x text-info"></i>
                                    <div class="text-right text-secondary">
                                        <h5>Users</h5>
                                        <h3>10,000</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-secondary">
                                <i class="fa fa-refresh mr-3"></i>
                                <span>Update Now</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3 p-2">
                        <div class="card cstm-card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <i class="fa fa-line-chart fa-4x text-danger"></i>
                                    <div class="text-right text-secondary">
                                        <h5>Visitors</h5>
                                        <h3>20,000</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-secondary">
                                <i class="fa fa-refresh mr-3"></i>
                                <span>Update Now</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Cards Ends -->

<!-- Table Start -->
<section>
    <main>
        @yield('content')
    </main>
</section>
<!-- Table End -->
@include('user.footer')