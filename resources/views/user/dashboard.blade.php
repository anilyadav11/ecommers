@extends('user.app')
@section('content')
<div class="container-fluid">
    <div class="row mb-5">
        <div class="col-lg-10 col-md-8 ml-auto">
            <div class="row align-items-center">
                <!-- First Table -->
                <div class="col-12 col-xl-6 mb-4 mb-xl-0">
                    <h4 class="text-muted text-center mb-3">All Orders</h4>

                    <table class="table bg-light table-hover table-striped  text-center display" id="allorders">
                        <thead>
                            <tr class="text-muted">
                                <th>#SL</th>
                                <th>Order No.</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th>6</th>
                                <td>pr006</td>
                                <td>Black Shoe</td>
                                <td>$99</td>
                                <td><span class="badge badge-success w-60 py-2">Completed</span></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <!-- Second Table -->
                <div class="col-12 col-xl-6">
                    <h4 class="text-muted text-center mb-3">Recent Orders</h4>
                    <table class="table table-hover bg-light table-striped text-center display"
                        id="recentorders">
                        <thead>
                            <tr class="text-muted">
                                <th>#SL</th>
                                <th>Order No.</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th>6</th>
                                <td>pr0014</td>
                                <td>Black Shoe</td>
                                <td>$99</td>
                                <td><button type="button" class="btn btn-success btn-sm">Approved</button></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection