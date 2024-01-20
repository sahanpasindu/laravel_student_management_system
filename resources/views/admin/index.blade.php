@extends('admin.layouts.app')

@section('content')
    <div class="main-content app-content">
        <div class="container-fluid">
            <!-- Page Header -->
            <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                <div>
                    <h4 class="mb-0">Hi, welcome back!</h4>
                    <p class="mb-0 text-muted">Sales monitoring dashboard template.</p>
                </div>
                <div class="main-dashboard-header-right">
                    <div>
                        <label class="fs-13 text-muted">Customer Ratings</label>
                        <div class="main-star">
                            <i class="bi bi-star-fill fs-13 text-warning"></i>
                            <i class="bi bi-star-fill fs-13 text-warning"></i>
                            <i class="bi bi-star-fill fs-13 text-warning"></i>
                            <i class="bi bi-star-fill fs-13 text-warning"></i>
                            <i class="bi bi-star-fill fs-13 text-muted op-8"></i> <span>(14,873)</span>
                        </div>
                    </div>
                    <div>
                        <label class="fs-13 text-muted">Online Sales</label>
                        <h5 class="mb-0 fw-semibold">563,275</h5>
                    </div>
                    <div>
                        <label class="fs-13 text-muted">Offline Sales</label>
                        <h5 class="mb-0 fw-semibold">783,675</h5>
                    </div>
                </div>
            </div>
            <!-- End Page Header -->

            <!-- row -->
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                    <div class="card overflow-hidden sales-card bg-primary-gradient">
                        <div class="px-3 pt-3  pb-2 pt-0">
                            <div >
                                <h6 class="mb-3 fs-12 text-fixed-white">TODAY ORDERS</h6>
                            </div>
                            <div class="pb-0 mt-0">
                                <div class="d-flex">
                                    <div >
                                        <h4 class="fs-20 fw-bold mb-1 text-fixed-white">$5,74.12</h4>
                                        <p class="mb-0 fs-12 text-fixed-white op-7">Compared to last week</p>
                                    </div>
                                    <span class="float-end my-auto ms-auto">
                                        <i class="fas fa-arrow-circle-up text-fixed-white"></i>
                                        <span class="text-fixed-white op-7"> +427</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div id="compositeline"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                    <div class="card overflow-hidden sales-card bg-danger-gradient">
                        <div class="px-3 pt-3  pb-2 pt-0">
                            <div >
                                <h6 class="mb-3 fs-12 text-fixed-white">TODAY EARNINGS</h6>
                            </div>
                            <div class="pb-0 mt-0">
                                <div class="d-flex">
                                    <div >
                                        <h4 class="fs-20 fw-bold mb-1 text-fixed-white">$1,230.17</h4>
                                        <p class="mb-0 fs-12 text-fixed-white op-7">Compared to last week</p>
                                    </div>
                                    <span class="float-end my-auto ms-auto">
                                        <i class="fas fa-arrow-circle-down text-fixed-white"></i>
                                        <span class="text-fixed-white op-7"> -23.09%</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div id="compositeline2"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                    <div class="card overflow-hidden sales-card bg-success-gradient">
                        <div class="px-3 pt-3  pb-2 pt-0">
                            <div >
                                <h6 class="mb-3 fs-12 text-fixed-white">TOTAL EARNINGS</h6>
                            </div>
                            <div class="pb-0 mt-0">
                                <div class="d-flex">
                                    <div >
                                        <h4 class="fs-20 fw-bold mb-1 text-fixed-white">$7,125.70</h4>
                                        <p class="mb-0 fs-12 text-fixed-white op-7">Compared to last week</p>
                                    </div>
                                    <span class="float-end my-auto ms-auto">
                                        <i class="fas fa-arrow-circle-up text-fixed-white"></i>
                                        <span class="text-fixed-white op-7"> 52.09%</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div id="compositeline3"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                    <div class="card overflow-hidden sales-card bg-warning-gradient">
                        <div class="px-3 pt-3  pb-2 pt-0">
                            <div >
                                <h6 class="mb-3 fs-12 text-fixed-white">PRODUCT SOLD</h6>
                            </div>
                            <div class="pb-0 mt-0">
                                <div class="d-flex">
                                    <div >
                                        <h4 class="fs-20 fw-bold mb-1 text-fixed-white">$4,820.50</h4>
                                        <p class="mb-0 fs-12 text-fixed-white op-7">Compared to last week</p>
                                    </div>
                                    <span class="float-end my-auto ms-auto">
                                        <i class="fas fa-arrow-circle-down text-fixed-white"></i>
                                        <span class="text-fixed-white op-7"> -152.3</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div id="compositeline4"></div>
                    </div>
                </div>
            </div>
            <!-- row closed -->

            <!-- row opened -->
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-7">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title mb-0">Order status</h4>
                                <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light bg-transparent rounded-pill" data-bs-toggle="dropdown"><i
                                    class="fe fe-more-horizontal"></i></a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Another
                                        Action</a>
                                    <a class="dropdown-item" href="javascript:void(0);">Something Else
                                        Here</a>
                                </div>
                            </div>
                            <p class="fs-12 text-muted mb-0">Order Status and Tracking. Track your order from ship date to arrival. To begin, enter your order number.</p>
                        </div>
                        <div class="card-body">
                            <div class="total-revenue">
                                <div>
                                    <h4>120,750</h4>
                                    <label><span class="bg-primary"></span>success</label>
                                </div>
                                <div>
                                    <h4>56,108</h4>
                                    <label><span class="bg-danger"></span>Pending</label>
                                </div>
                                <div>
                                    <h4>32,895</h4>
                                    <label><span class="bg-warning"></span>Failed</label>
                                </div>
                                </div>
                            <div id="Sales-bar" class="sales-bar mt-4"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-xl-5">
                    <div class="card card-dashboard-map-one">
                        <h4 class="card-title">Sales Revenue by Customers in USA</h4>
                        <p class="fs-12 text-muted">Sales Performance of all states in the United States.</p>
                        <div id="us-map1" class="pt-1"></div>
                    </div>
                </div>
            </div>
            <!-- row closed -->

            <!-- row opened -->
            <div class="row">
                <div class="col-xl-4 col-md-12 col-lg-12">
                    <div class="card overflow-hidden">
                        <div class="card-header pb-1">
                            <h3 class="card-title mb-2">Recent Customers</h3>
                            <p class="fs-12 mb-0 text-muted">A customer is an individual or business that purchases the goods service has evolved to include real-time</p>
                        </div>
                        <div class="card-body p-0 customers mt-1">
                            <div class="list-group list-lg-group list-group-flush">
                                <div class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <img class="avatar avatar-md rounded-circle my-auto me-3" src="../assets/images/faces/3.jpg" alt="Image description">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-center">
                                                <div class="mt-0">
                                                    <h5 class="mb-1 fs-15">Samantha Melon</h5>
                                                    <p class="mb-0 fs-13 text-muted">User ID: #1234 <span class="text-success ms-2 d-inline-block">Paid</span></p>
                                                </div>
                                                <div class="ms-auto w-45 fs-16 mt-2">
                                                    <div id="spark1" class="w-100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item list-group-item-action br-t-1">
                                    <div class="d-flex">
                                        <img class="avatar avatar-md rounded-circle my-auto me-3" src="../assets/images/faces/11.jpg" alt="Image description">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-center">
                                                <div class="mt-1">
                                                    <h5 class="mb-1 fs-15">Jimmy Changa</h5>
                                                    <p class="mb-0 fs-13 text-muted">User ID: #1234 <span class="text-danger ms-2 d-inline-block">Pending</span></p>
                                                </div>
                                                <div class="ms-auto w-45 fs-16 mt-2">
                                                    <div id="spark2" class="w-100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item list-group-item-action br-t-1">
                                    <div class="d-flex">
                                        <img class="avatar avatar-md rounded-circle my-auto me-3" src="../assets/images/faces/17.jpg" alt="Image description">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-center">
                                                <div class="mt-1">
                                                    <h5 class="mb-1 fs-15">Gabe Lackmen</h5>
                                                    <p class="mb-0 fs-13 text-muted">User ID: #1234 <span class="text-danger ms-2 d-inline-block">Pending</span></p>
                                                </div>
                                                <div class="ms-auto w-45 fs-16 mt-2">
                                                    <div id="spark3" class="w-100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item list-group-item-action br-t-1">
                                    <div class="d-flex">
                                        <img class="avatar avatar-md rounded-circle my-auto me-3" src="../assets/images/faces/15.jpg" alt="Image description">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-center">
                                                <div class="mt-1">
                                                    <h5 class="mb-1 fs-15">Manuel Labor</h5>
                                                    <p class="mb-0 fs-13 text-muted">User ID: #1234 <span class="text-success ms-2 d-inline-block">Paid</span></p>
                                                </div>
                                                <div class="ms-auto w-45 fs-16 mt-2">
                                                    <div id="spark4" class="w-100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-item list-group-item-action br-t-1 br-be-7 br-bs-7">
                                    <div class="d-flex">
                                        <img class="avatar avatar-md rounded-circle my-auto me-3" src="../assets/images/faces/6.jpg" alt="Image description">
                                        <div class="flex-grow-1">
                                            <div class="d-flex align-items-center">
                                                <div class="mt-1">
                                                    <h5 class="mb-1 fs-15">Sharon Needles</h5>
                                                    <p class="b-0 fs-13 text-muted mb-0">User ID: #1234 <span class="text-success ms-2 d-inline-block">Paid</span></p>
                                                </div>
                                                <div class="ms-auto w-45 fs-16 mt-2">
                                                    <div id="spark5" class="w-100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12 col-lg-6">
                    <div class="card">
                        <div class="card-header pb-1">
                            <h3 class="card-title mb-2">Sales Activity</h3>
                            <p class="fs-12 mb-0 text-muted">Sales activities are the tactics that salespeople use to achieve their goals and objective</p>
                        </div>
                        <div class="product-timeline card-body pt-2 mt-1">
                            <ul class="timeline-1 mb-0">
                                <li class="mt-0"> <i class="fe fe-pie-chart bg-primary-gradient text-fixed-white product-icon"></i> <span class="fw-medium mb-4 fs-14">Total Products</span> <a href="javascript:void(0);" class="float-end fs-11 text-muted">3 days ago</a>
                                    <p class="mb-0 text-muted fs-12">1.3k New Products</p>
                                </li>
                                <li class="mt-0"> <i class="fe fe-shopping-cart bg-danger-gradient text-fixed-white product-icon"></i> <span class="fw-medium mb-4 fs-14">Total Sales</span> <a href="javascript:void(0);" class="float-end fs-11 text-muted">35 mins ago</a>
                                    <p class="mb-0 text-muted fs-12">1k New Sales</p>
                                </li>
                                <li class="mt-0"> <i class="fe fe-bar-chart bg-success-gradient text-fixed-white product-icon"></i> <span class="fw-medium mb-4 fs-14">Total Revenue</span> <a href="javascript:void(0);" class="float-end fs-11 text-muted">50 mins ago</a>
                                    <p class="mb-0 text-muted fs-12">23.5K New Revenue</p>
                                </li>
                                <li class="mt-0"> <i class="fe fe-box bg-warning-gradient text-fixed-white product-icon"></i> <span class="fw-medium mb-4 fs-14">Total Profit</span> <a href="javascript:void(0);" class="float-end fs-11 text-muted">1 hour ago</a>
                                    <p class="mb-0 text-muted fs-12">3k New profit</p>
                                </li>
                                <li class="mt-0"> <i class="fe fe-eye bg-purple-gradient text-fixed-white product-icon"></i> <span class="fw-medium mb-4 fs-14">Customer Visits</span> <a href="javascript:void(0);" class="float-end fs-11 text-muted">1 day ago</a>
                                    <p class="mb-0 text-muted fs-12">15% increased</p>
                                </li>
                                <li class="mt-0 mb-0"> <i class="fe fe-edit bg-primary-gradient text-fixed-white product-icon"></i> <span class="fw-medium mb-4 fs-14">Customer Reviews</span> <a href="javascript:void(0);" class="float-end fs-11 text-muted">1 day ago</a>
                                    <p class="mb-0 text-muted fs-12">1.5k reviews</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12 col-lg-6">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h3 class="card-title mb-2">Recent Orders</h3>
                            <p class="fs-12 mb-0 text-muted">An order is an investor's instructions to a broker or brokerage firm to purchase or sell</p>
                        </div>
                        <div class="card-body sales-info pb-0 pt-0">
                            <div id="chart" class="ht-150"></div>
                            <div class="row sales-infomation pb-0 mb-0 mx-auto w-100">
                                <div class="col-md-6 col">
                                    <p class="mb-0 d-flex"><span class="legend bg-primary brround"></span>Delivered</p>
                                    <h3 class="mb-1">5238</h3>
                                    <div class="d-flex">
                                        <p class="text-muted ">Last 6 months</p>
                                    </div>
                                </div>
                                <div class="col-md-6 col">
                                    <p class="mb-0 d-flex"><span class="legend bg-info brround"></span>Cancelled</p>
                                        <h3 class="mb-1">3467</h3>
                                    <div class="d-flex">
                                        <p class="text-muted">Last 6 months</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card ">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center pb-2">
                                        <p class="mb-0">Total Sales</p>
                                    </div>
                                    <h4 class="fw-bold mb-2">$7,590</h4>
                                    <div class="progress progress-style progress-sm">
                                        <div class="progress-bar bg-primary-gradient" style="width: 80%" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="78"></div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-4 mt-md-0">
                                    <div class="d-flex align-items-center pb-2">
                                        <p class="mb-0">Active Users</p>
                                    </div>
                                    <h4 class="fw-bold mb-2">$5,460</h4>
                                    <div class="progress progress-style progress-sm">
                                        <div class="progress-bar bg-danger-gradient" style="width: 45%" role="progressbar"  aria-valuenow="45" aria-valuemin="0" aria-valuemax="45"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row close -->

            <!-- row opened -->
            <div class="row">
                <div class="col-md-12 col-lg-4 col-xl-4">
                    <div class="card top-countries-card">
                        <div class="card-header p-0">
                            <h6 class="card-title fs-13 mb-2">Your Top Countries</h6><span class="d-block mg-b-10 text-muted fs-12 mb-2">Sales performance revenue based by country</span>
                        </div>
                        <div class="list-group border">
                            <div class="list-group-item border-top-0" id="br-t-0">
                                <p>United States</p><span>$1,671.10</span>
                            </div>
                            <div class="list-group-item">
                                <p>Netherlands</p><span>$1,064.75</span>
                            </div>
                            <div class="list-group-item">
                                <p>United Kingdom</p><span>$1,055.98</span>
                            </div>
                            <div class="list-group-item">
                                <p>Canada</p><span>$1,045.49</span>
                            </div>
                            <div class="list-group-item">
                                <p>India</p><span>$1,930.12</span>
                            </div>
                            <div class="list-group-item border-bottom-0 mb-0">
                                <p>Australia</p><span>$1,042.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8 col-xl-8">
                    <div class="card card-table">
                        <div class=" card-header p-0 d-flex justify-content-between">
                            <h4 class="card-title mb-1">Your Most Recent Earnings</h4>
                            <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-light bg-transparent rounded-pill" data-bs-toggle="dropdown"><i
                                class="fe fe-more-horizontal"></i></a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);">Action</a>
                                <a class="dropdown-item" href="javascript:void(0);">Another
                                    Action</a>
                                <a class="dropdown-item" href="javascript:void(0);">Something Else
                                    Here</a>
                            </div>
                        </div>
                        <span class="fs-12 text-muted mb-3 ">This is your most recent earnings for today's date.</span>
                        <div class="table-responsive country-table">
                            <table class="table table-striped table-bordered mb-0 text-nowrap">
                                <thead>
                                    <tr>
                                        <th class="wd-lg-25p">Date</th>
                                        <th class="wd-lg-25p">Sales Count</th>
                                        <th class="wd-lg-25p">Earnings</th>
                                        <th class="wd-lg-25p">Tax Witheld</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>05 Dec 2019</td>
                                        <td class="fw-medium">34</td>
                                        <td class="fw-medium">$658.20</td>
                                        <td class="text-danger fw-medium">-$45.10</td>
                                    </tr>
                                    <tr>
                                        <td>06 Dec 2019</td>
                                        <td class="fw-medium">26</td>
                                        <td class="fw-medium">$453.25</td>
                                        <td class="text-danger fw-medium">-$15.02</td>
                                    </tr>
                                    <tr>
                                        <td>07 Dec 2019</td>
                                        <td class="fw-medium">34</td>
                                        <td class="fw-medium">$653.12</td>
                                        <td class="text-danger fw-medium">-$13.45</td>
                                    </tr>
                                    <tr>
                                        <td>08 Dec 2019</td>
                                        <td class="fw-medium">45</td>
                                        <td class="fw-medium">$546.47</td>
                                        <td class="text-danger fw-medium">-$24.22</td>
                                    </tr>
                                    <tr>
                                        <td>09 Dec 2019</td>
                                        <td class="fw-medium">31</td>
                                        <td class="fw-medium">$425.72</td>
                                        <td class="text-danger fw-medium">-$25.01</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /row -->

        </div>
    </div>
@endsection
