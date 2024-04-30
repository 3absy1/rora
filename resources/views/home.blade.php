@extends('main.master')
@section('title')
Home
@endsection
@section('css')



<link href="{{ URL::asset('build/libs/jsvectormap/css/jsvectormap.min.css') }}" rel="stylesheet">

@endsection
@section('content')
@component('components.breadcrumb')
@slot('li_1')
Dashboards
@endslot
@slot('title')
Analytics
@endslot
@endcomponent

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Basic Bar Chart</h4>
            </div><!-- end card header -->

            <div class="card-body">
                <div id="bar_chart" data-colors='["--tb-success"]' class="apex-charts" dir="ltr"></div>
            </div><!-- end card-body -->
        </div><!-- end card -->
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <p class="fs-md text-muted mb-0"> Clients </p>

                <div class="row mt-4 align-items-end">
                    <div class="col-lg-6">
                        <h3 class="mb-4"><span class="counter-value" data-target=" {{count($clients)}}"> 0</span> client </h3>
                    </div>
                              <div class="col-lg-6">
                        <div id="visti_duration_chart" data-colors='["--tb-primary", "--tb-secondary"]' class="apex-charts m-n3 mt-n4" dir="ltr"></div>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                            @if (count($clients) > $previousCount )
                            <h5 class="text-success fs-xs mb-0">
                            <i class="ri-arrow-right-up-line fs-sm align-middle"></i> {{$previousCount}}
                            @else
                            <h5 class="text-danger fs-xs mb-0">
                            <i class="ri-arrow-right-down-line fs-sm align-middle"></i> {{$previousCount}}
                            @endif
                        </h5>
                        <p class="text-muted mb-0">than tomorrow</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <p class="fs-md text-muted mb-0">Sim Cards</p>

                <div class="row mt-4 align-items-end">
                    <div class="col-lg-6">
                        <h4 class="mb-4"><span class="counter-value" data-target=" {{count($sims)}}"> 0 </span> Sim Card </h4>
                        {{-- <p class="text-success mb-0"><i class="bi bi-arrow-up me-1"></i> 13% Last Month</p> --}}
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        @if (count($sims) > $previousCount )
                        <h5 class="text-success fs-xs mb-0">
                        <i class="ri-arrow-right-up-line fs-sm align-middle"></i> {{$previousCount}}
                        @else
                        <h5 class="text-danger fs-xs mb-0">
                        <i class="ri-arrow-right-down-line fs-sm align-middle"></i> {{$previousCount}}
                        @endif
                    </h5>
                    <p class="text-muted mb-0">than tomorrow</p>
                </div>
                    {{-- <div class="col-lg-6">
                        <div id="visti_duration_chart" data-colors='["--tb-primary", "--tb-secondary"]' class="apex-charts m-n3 mt-n4" dir="ltr"></div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
    {{-- <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <p class="fs-md text-muted mb-0"> Plans</p>

                <div class="row mt-4 align-items-end">
                    <div class="col-lg-6">
                        <h3 class="mb-4"><span class="counter-value" data-target="{{count($plans)}}">0</span> plan</h4>
                        <p class="text-danger mb-0"><i class="bi bi-arrow-down me-1"></i> 07.26% Last Week</p>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        @if (count($plans) > $previousCount )
                        <h5 class="text-success fs-xs mb-0">
                        <i class="ri-arrow-right-up-line fs-sm align-middle"></i> {{$previousCount}}
                        @else
                        <h5 class="text-danger fs-xs mb-0">
                        <i class="ri-arrow-right-down-line fs-sm align-middle"></i> {{$previousCount}}
                        @endif
                    </h5>
                    <p class="text-muted mb-0">than tomorrow</p>
                </div>
                    <div class="col-lg-6">
                        <div id="impressions_chart" data-colors='["--tb-secondary"]' class="apex-charts m-n3 mt-n4" dir="ltr"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--end col-->
    {{-- <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">

                <p class="fs-md text-muted mb-0">Subscribtions</p>

                <div class="row mt-4 align-items-end">
                    <div class="col-lg-6">
                        <h4 class="mb-4"><span class="counter-value" data-target="{{count($subscribtions)}}">0</span> Subscriber</h4>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        @if (count($subscribtions) > $previousCount )
                        <h5 class="text-success fs-xs mb-0">
                        <i class="ri-arrow-right-up-line fs-sm align-middle"></i> {{$previousCount}}
                        @else
                        <h5 class="text-danger fs-xs mb-0">
                        <i class="ri-arrow-right-down-line fs-sm align-middle"></i> {{$previousCount}}
                        @endif
                    </h5>
                    <p class="text-muted mb-0">than tomorrow</p>
                </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--end col-->
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <p class="fs-md text-muted mb-0"> Calls</p>

                <div class="row mt-4 align-items-end">
                    <div class="col-lg-6">
                        <h4 class="mb-4"><span class="counter-value" data-target="{{count($calls)}}">0</span> call</h4>
                        {{-- <p class="text-danger mb-0"><i class="bi bi-arrow-down me-1"></i> 07.26% Last Week</p> --}}
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        @if (count($calls) > $previousCount )
                        <h5 class="text-success fs-xs mb-0">
                        <i class="ri-arrow-right-up-line fs-sm align-middle"></i> {{$previousCount}}
                        @else
                        <h5 class="text-danger fs-xs mb-0">
                        <i class="ri-arrow-right-down-line fs-sm align-middle"></i> {{$previousCount}}
                        @endif
                    </h5>
                    <p class="text-muted mb-0">than tomorrow</p>
                </div>
                    {{-- <div class="col-lg-6">
                        <div id="impressions_chart" data-colors='["--tb-secondary"]' class="apex-charts m-n3 mt-n4" dir="ltr"></div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <p class="fs-md text-muted mb-0">Reviews</p>

                <div class="row mt-4 align-items-end">
                    <div class="col-lg-6">
                        <h4 class="mb-4"><span class="counter-value" data-target="{{count($reviews)}}">0</span> review </h4>
                        {{-- <p class="text-success mb-0"><i class="bi bi-arrow-up me-1"></i> 13% Last Month</p> --}}
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        @if (count($reviews) > $previousCount )
                        <h5 class="text-success fs-xs mb-0">
                        <i class="ri-arrow-right-up-line fs-sm align-middle"></i> {{$previousCount}}
                        @else
                        <h5 class="text-danger fs-xs mb-0">
                        <i class="ri-arrow-right-down-line fs-sm align-middle"></i> {{$previousCount}}
                        @endif
                    </h5>
                    <p class="text-muted mb-0">than tomorrow</p>
                </div>
                    {{-- <div class="col-lg-6">
                        <div id="views_chart" data-colors='["--tb-primary"]' class="apex-charts m-n3 mt-n4" dir="ltr"></div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <p class="fs-md text-muted mb-0"> Orders</p>

                <div class="row mt-4 align-items-end">
                    <div class="col-lg-6">
                        <h4 class="mb-4"><span class="counter-value" data-target="{{count($orders)}}">0</span> order</h4>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        @if (count($orders) > $previousCount )
                        <h5 class="text-success fs-xs mb-0">
                        <i class="ri-arrow-right-up-line fs-sm align-middle"></i> {{$previousCount}}
                        @else
                        <h5 class="text-danger fs-xs mb-0">
                        <i class="ri-arrow-right-down-line fs-sm align-middle"></i> {{$previousCount}}
                        @endif
                    </h5>
                    <p class="text-muted mb-0">than tomorrow</p>
                </div>

                </div>
            </div>
        </div>
    </div> --}}
    <!--end col-->
    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <p class="fs-md text-muted mb-0">Credit Transactions</p>

                <div class="row mt-4 align-items-end">
                    <div class="col-lg-6">
                        <h3 class="mb-4"><span class="counter-value" data-target="{{count($creditTransactions)}}">0</span>        credit </h3>
                        {{-- <p class="text-success mb-0"><i class="bi bi-arrow-up me-1"></i> 13% Last Month</p> --}}
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        @if (count($creditTransactions) > $previousCount )
                        <h5 class="text-success fs-xs mb-0">
                        <i class="ri-arrow-right-up-line fs-sm align-middle"></i> {{$previousCount}}
                        @else
                        <h5 class="text-danger fs-xs mb-0">
                        <i class="ri-arrow-right-down-line fs-sm align-middle"></i> {{$previousCount}}
                        @endif
                    </h5>
                    <p class="text-muted mb-0">than tomorrow</p>
                </div>
                    {{-- <div class="col-lg-6">
                        <div id="views_chart" data-colors='["--tb-primary"]' class="apex-charts m-n3 mt-n4" dir="ltr"></div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!--end row-->

<div class="row">
    <div class="col-xl-4">
        <div class="card card-height-100" id="networks">
            <div class="card-header d-flex">
                <h5 class="card-title mb-0 flex-grow-1">Recharage Requests ({{count($recharageRequests)}})</h5>
                <div class="flex-shrink-0">
                    <div class="dropdown card-header-dropdown sortble-dropdown">
                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="text-muted dropdown-title">Order Date</span> <i class="mdi mdi-chevron-down ms-1"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <button class="dropdown-item sort" data-sort="browsers">Client</button>
                            <button class="dropdown-item sort" data-sort="click">Recharage Card</button>
                            <button class="dropdown-item sort" data-sort="pageviews"> Price</button>
                            <button class="dropdown-item sort" data-sort="pageviews"> Statue</button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead class="table-active">
                            <tr>
                                <th class="sort cursor-pointer" data-sort="browsers">
                                    Client
                                </th>
                                <th class="sort cursor-pointer text-center" data-sort="click">
                                    Recharage Card
                                </th>
                                <th class="sort cursor-pointer text-center" data-sort="pageviews">
                                    Price
                                </th>
                                <th class="sort cursor-pointer text-center" data-sort="pageviews">
                                    Status
                                </th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach ($recharageRequests as $recharageRequest)
                            <tr>
                                <td>
                                    {{-- <img src="build/images/brands/chrome.png" alt="" class="avatar-xxs"> --}}
                                    <span class="ms-1 browsers">{{$recharageRequest->client->name}}</span>
                                </td>
                                <td class="click text-center">
                                    {{$recharageRequest->recharagecard->name}}
                                </td>
                                <td class="pageviews text-center">
                                    {{$recharageRequest->price}}
                                </td>
                                <td class="pageviews text-center">
                                    {{$recharageRequest->status}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
        <!--end col-->
    <div class="col-xl-4">
        <div class="card card-height-100" id="networks">
            <div class="card-header d-flex">
                <h5 class="card-title mb-0 flex-grow-1">Plans ({{count($plans)}})</h5>
                <div class="flex-shrink-0">
                    <div class="dropdown card-header-dropdown sortble-dropdown">
                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="text-muted dropdown-title">Order Date</span> <i class="mdi mdi-chevron-down ms-1"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <button class="dropdown-item sort" data-sort="browsers">Title</button>
                            <button class="dropdown-item sort" data-sort="click">Price</button>
                            <button class="dropdown-item sort" data-sort="pageviews"> Minutes</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead class="table-active">
                            <tr>
                                <th class="sort cursor-pointer" data-sort="browsers">
                                    Title
                                </th>
                                <th class="sort cursor-pointer text-center" data-sort="click">
                                    Price
                                </th>
                                <th class="sort cursor-pointer text-center" data-sort="pageviews">
                                    Minutes
                                </th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach ($plans as $plan)
                            <tr>
                                <td>
                                    {{-- <img src="build/images/brands/chrome.png" alt="" class="avatar-xxs"> --}}
                                    <span class="ms-1 browsers">{{$plan->title}}</span>
                                </td>
                                <td class="click text-center">
                                    {{$plan->price}}
                                </td>
                                <td class="pageviews text-center">
                                    {{$plan->minutes}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
    <div class="col-xl-4">
        <div class="card card-height-100" id="networks">
            <div class="card-header d-flex">
                <h5 class="card-title mb-0 flex-grow-1">Recharage Cards ({{count($recharagecards)}})</h5>
                <div class="flex-shrink-0">
                    <div class="dropdown card-header-dropdown sortble-dropdown">
                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="text-muted dropdown-title">Order Date</span> <i class="mdi mdi-chevron-down ms-1"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <button class="dropdown-item sort" data-sort="browsers">Card</button>
                            <button class="dropdown-item sort" data-sort="click">Price</button>
                            <button class="dropdown-item sort" data-sort="pageviews"> Minutes</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead class="table-active">
                            <tr>
                                <th class="sort cursor-pointer" data-sort="browsers">
                                    Cards
                                </th>
                                <th class="sort cursor-pointer text-center" data-sort="click">
                                    Price
                                </th>
                                <th class="sort cursor-pointer text-center" data-sort="pageviews">
                                    Minutes
                                </th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach ($recharagecards as $recharagecard)
                            <tr>
                                <td>
                                    {{-- <img src="build/images/brands/chrome.png" alt="" class="avatar-xxs"> --}}
                                    <span class="ms-1 browsers">{{$recharagecard->name}}</span>
                                </td>
                                <td class="click text-center">
                                    {{$recharagecard->price}}
                                </td>
                                <td class="pageviews text-center">
                                    {{$recharagecard->minutes}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
</div>
<!--end row-->

<div class="row">
    <div class="col-xl-9">
        <div class="card card-height-100">
            <div class="card-header d-flex align-items-center">
                <h5 class="card-title mb-0 flex-grow-1">Active Clients Right Now</h5>
                <div class="flex-shrink-0">
                    <button type="button" class="btn btn-subtle-primary btn-sm"><i class="bi bi-file-earmark-text me-1 align-baseline"></i> Reports</button>
                </div>
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div id="world-map-line-markers" data-colors='["--tb-light"]' style="height: 340px"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-4">
                            <h6 class="text-muted mb-3 fw-medium fs-xs text-uppercase">Compared to last month</h6>
                            <h3><span class="counter-value" data-target="{{count($clients)}}"></span> <small class="text-muted fw-normal fs-sm">Clients</small></h3>
                        </div>
                        <div>
                            <div id="main" data-colors='["--tb-primary-bg-subtle", "--tb-light", "--tb-primary"]' style="height: 265px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /col-->
    <div class="col-xl-3">
        <div class="card card-height-100" id="top-Pages">
            <div class="card-header d-flex align-items-center">
                <h5 class="card-title mb-0 flex-grow-1">Client Payment</h5>
                <div class="flex-shrink-0">
                    <div class="dropdown card-header-dropdown">
                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item sort" data-sort="activePage" href="#!"> Client</a>
                            <a class="dropdown-item sort" data-sort="pageUsers" href="#!">Users</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle table-borderless table-centered table-nowrap mb-0">
                        <thead class="text-muted table-light">
                            <tr>
                                <th scope="col" class="sort cursor-pointer" data-sort="activePage" style="width: 62;">Client</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="activePageNo">Payment Method</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach ($clientPayments as $clientPayment)

                            <tr>
                                <td>
                                    <a href="javascript:void(0);" class="activePage text-reset">{{$clientPayment->client->name}}</a>
                                </td>
                                <td class="activePageNo">{{$clientPayment->paymentMethod->name}}</td>
                            </tr><!-- end -->

                            @endforeach
                        </tbody><!-- end tbody -->
                    </table><!-- end table -->
                </div>
            </div>
        </div>
    </div><!-- end col-->
</div><!-- end row-->

<div class="row">
    <div class="col-xl-4">
        <div class="card card-height-100 border-0 overflow-hidden">
            <div class="card-body p-0">
                <div class="row g-0">
                    <div class="col-md-6">
                        <!-- card -->
                        <div class="card shadow-none border-end-md border-bottom rounded-0 mb-0">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Today</a>
                                        <a class="dropdown-item" href="#">Last Week</a>
                                        <a class="dropdown-item" href="#">Last Month</a>
                                        <a class="dropdown-item" href="#">Current Year</a>
                                    </div>
                                </div>
                                <div id="time_On_Sale" data-colors='["--tb-primary"]' dir="ltr"></div>
                                <div class="mt-2">
                                    <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Time on Sale</p>
                                    <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="32">0</span>M <span class="counter-value" data-target="12">0</span>s</h4>
                                    <div class="d-flex align-items-center gap-2">
                                        <h5 class="text-success flex-shrink-0 fs-xs mb-0">
                                            <i class="ri-arrow-right-up-line fs-sm align-middle"></i> +21.36 %
                                        </h5>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-muted text-truncate mb-0">Analytics for last week</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-md-6">
                        <!-- card -->
                        <div class="card shadow-none border-bottom rounded-0 mb-0">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Today</a>
                                        <a class="dropdown-item" href="#">Last Week</a>
                                        <a class="dropdown-item" href="#">Last Month</a>
                                        <a class="dropdown-item" href="#">Current Year</a>
                                    </div>
                                </div>
                                <div id="goal_Completions" data-colors='["--tb-dark"]' dir="ltr"></div>
                                <div class="mt-2">
                                    <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Goal Completions</p>
                                    <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="254157">0</span></h4>
                                    <div class="d-flex align-items-center gap-2">
                                        <h5 class="text-success flex-shrink-0 fs-xs mb-0">
                                            <i class="ri-arrow-right-up-line fs-sm align-middle"></i> +6.30 %
                                        </h5>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-muted text-truncate mb-0">Analytics for last week</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-md-6">
                        <!-- card -->
                        <div class="card shadow-none border-end-md rounded-0 mb-0">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Today</a>
                                        <a class="dropdown-item" href="#">Last Week</a>
                                        <a class="dropdown-item" href="#">Last Month</a>
                                        <a class="dropdown-item" href="#">Current Year</a>
                                    </div>
                                </div>
                                <div id="bounce_rate" data-colors='["--tb-danger"]' dir="ltr"></div>
                                <div class="mt-2">
                                    <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">Bounce Rate</p>
                                    <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="68">0</span>%</h4>
                                    <div class="d-flex align-items-center gap-2">
                                        <h5 class="text-danger flex-shrink-0 fs-xs mb-0">
                                            <i class="ri-arrow-right-down-line fs-sm align-middle"></i> +2.01 %
                                        </h5>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-muted text-truncate mb-0">Analytics for last week</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                    <div class="col-md-6">
                        <!-- card -->
                        <div class="card shadow-none border-top border-top-md-0 rounded-0 mb-0">
                            <div class="card-body">
                                <div class="dropdown float-end">
                                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Today</a>
                                        <a class="dropdown-item" href="#">Last Week</a>
                                        <a class="dropdown-item" href="#">Last Month</a>
                                        <a class="dropdown-item" href="#">Current Year</a>
                                    </div>
                                </div>
                                <div id="new_Sessions" data-colors='["--tb-info"]' dir="ltr"></div>
                                <div class="mt-2">
                                    <p class="text-uppercase fw-medium text-muted text-truncate fs-sm">New Sessions</p>
                                    <h4 class="fw-semibold mb-3"><span class="counter-value" data-target="32548">0</span> </h4>
                                    <div class="d-flex align-items-center gap-2">
                                        <h5 class="text-success flex-shrink-0 fs-xs mb-0">
                                            <i class="ri-arrow-right-up-line fs-sm align-middle"></i> +10.42 %
                                        </h5>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-muted text-truncate mb-0">than last week</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div> <!-- end row-->
            </div>
        </div>
    </div>
    <!--end col-->
    {{-- <div class="col-xl-4">
        <div class="card card-height-100">
            <div class="card-header d-flex align-items-center">
                <h5 class="card-title mb-0 flex-grow-1">Sales Report</h5>
                <div class="flex-shrink-0">
                    <button type="button" class="btn btn-subtle-info btn-sm"><i class="bi bi-file-earmark-text me-1 align-baseline"></i> Generate Reports</button>
                </div>
            </div>
            <div class="card-body pb-0">
                <h4>$<span class="counter-value" data-target="452.32"></span>M <span class="text-success fw-normal fs-sm"><i class="bi bi-arrow-up"></i> +23.57%</span></h4>
                <p class="text-muted mb-0">($215.32 Avg. revenue monthly)</p>
            </div>
            <div class="card-body pt-0 pb-2 ps-0 mt-2 mt-lg-n3 sales-report-chart">
                <div id="sales_Report" data-colors='["--tb-primary", "--tb-secondary"]' class="apex-charts" dir="ltr"></div>
            </div>
        </div>
    </div> --}}
    <!--end col-->
    <div class="col-xl-4">
        <div class="card card-height-100">
            <div class="card-header d-flex align-items-center">
                <h5 class="card-title mb-0 flex-grow-1">Earning</h5>
                <div class="dropdown card-header-dropdown">
                    <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#">Current Years</a>
                        <a class="dropdown-item" href="#">Last Years</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="p-3 text-center bg-light-subtle mb-4 rounded">
                    <h4 class="mb-0">$<span class="counter-value" data-target="314.57"></span>M <span class="text-muted fw-normal fs-sm"><span class="text-success fw-medium"><i class="bi bi-arrow-up"></i> +23.57%</span> Last Month</span></h4>
                </div>
                <div class="progress progress-bar-animated">
                    <div class="progress-bar" role="progressbar" data-bs-toggle="tooltip" data-bs-title="Product Development (28%)" style="width: 28%" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-secondary" role="progressbar" data-bs-toggle="tooltip" data-bs-title="Startup Business (15%)" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-info" role="progressbar" data-bs-toggle="tooltip" data-bs-title="Corporate Design (20%)" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-light" role="progressbar" data-bs-toggle="tooltip" data-bs-title="Develop Project (18%)" style="width: 18%" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-success" role="progressbar" data-bs-toggle="tooltip" data-bs-title="Prototype (13%)" style="width: 13%" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100"></div>
                    <div class="progress-bar bg-warning" role="progressbar" data-bs-toggle="tooltip" data-bs-title="Design (8%)" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <ul class="list-unstyled mt-4 pt-2 vstack gap-3">
                    <li>
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <i class="bi bi-circle-square text-primary me-2"></i> Product Development
                            </div>
                            <div class="flex-shrink-0">
                                28%
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <i class="bi bi-circle-square text-secondary me-2"></i> Startup Business
                            </div>
                            <div class="flex-shrink-0">
                                15%
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <i class="bi bi-circle-square text-info me-2"></i> Corporate Design
                            </div>
                            <div class="flex-shrink-0">
                                20%
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <i class="bi bi-circle-square text-light me-2"></i> Develop Project
                            </div>
                            <div class="flex-shrink-0">
                                18%
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <i class="bi bi-circle-square text-success me-2"></i> Prototype
                            </div>
                            <div class="flex-shrink-0">
                                13%
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <i class="bi bi-circle-square text-warning me-2"></i> Design
                            </div>
                            <div class="flex-shrink-0">
                                8%
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="text-center">
                    <a href="#!" class="link-secondary fw-medium link-effect">View All Earning <i class="bi bi-arrow-right align-baseline ms-1"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!--end col-->
    <div id="call" class="col-xl-3">
        <div class="card card-height-100" id="top-Pages">
            <div class="card-header d-flex align-items-center">
                <h5 class="card-title mb-0 flex-grow-1">Client Request</h5>
                <div class="flex-shrink-0">
                    <div class="dropdown card-header-dropdown">
                        <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="text-muted fs-lg"><i class="mdi mdi-dots-vertical align-middle"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item sort" data-sort="activePage" href="#!"> Client</a>
                            <a class="dropdown-item sort" data-sort="pageUsers" href="#!">Users</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end card-header-->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle table-borderless table-centered table-nowrap mb-0">
                        <thead class="text-muted table-light">
                            <tr>
                                <th scope="col" class="sort cursor-pointer" data-sort="activePage" style="width: 62;">Client</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="activePageNo">User 1</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="activePageNo">User 2</th>
                                <th scope="col" class="sort cursor-pointer" data-sort="activePageNo">Status</th>

                            </tr>
                        </thead>
                        <tbody class="list">
                            @foreach ($callRequests as $callRequest)

                            <tr>
                                <td>
                                    <a href="javascript:void(0);" class="activePage text-reset">{{$callRequest->client->name}}</a>
                                </td>
                                <td class="activePageNo">{{$callRequest->user1}}</td>
                                <td class="activePageNo">{{$callRequest->user2}}</td>
                                <td class="activePageNo">{{$callRequest->status}}</td>

                            </tr><!-- end -->

                            @endforeach
                        </tbody><!-- end tbody -->
                    </table><!-- end table -->
                </div>
            </div>
        </div>
    </div><!-- end col-->
</div>
<!--end row-->

@endsection
@section('script')
<!-- apexcharts -->
<script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/echarts/echarts.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
<script src="{{ URL::asset('build/libs/jsvectormap/maps/world-merc.js') }}"></script>
<script src="{{ URL::asset('build/libs/list.js/list.min.js') }}"></script>

<!-- dashboard init -->
<script src="{{ URL::asset('build/js/pages/dashboard-analytics.init.js') }}"></script>
<script src="{{ URL::asset('build/js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script>
    const xValues = $trend ;
    const yValues = [Sun,Mon,Thu,Wen,Tue,Fri,Sat];

    new Chart("myChart", {
      type: "line",
      data: {
        labels: xValues,
        datasets: [{
          fill: false,
          lineTension: 0,
          backgroundColor: "rgba(0,0,255,1.0)",
          borderColor: "rgba(0,0,255,0.1)",
          data: yValues
        }]
      },
      options: {
        legend: {display: false},
        scales: {
          yAxes: [{ticks: {min: 6, max:16}}],
        }
      }
    });
    </script>

@endsection


