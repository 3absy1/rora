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

    <div class="col-xl-3 col-sm-6">
        <div class="card">
            <div class="card-body">
                <p class="fs-md text-muted mb-0"> Clients </p>

                <div class="row mt-4 align-items-end">
                    <div class="col-lg-6">
                        <h3 class="mb-4"><span class="counter-value" data-target=" {{count($clients)}}"> 0</span> client </h3>
                        <div class="progress progress-sm rounded-0" role="progressbar" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-success" style="width: {{count($clients)}}%"></div>
                        </div>
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
                    <div class="progress progress-sm rounded-0" role="progressbar" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-success" style="width: {{count($sims)}}%"></div>
                    </div>                    {{-- <div class="col-lg-6">
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
                    <div class="progress progress-sm rounded-0" role="progressbar" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-success" style="width: {{count($calls)}}%"></div>
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
                    <div class="progress progress-sm rounded-0" role="progressbar" aria-valuenow="49" aria-valuemin="0" aria-valuemax="100">
                        <div class="progress-bar bg-success" style="width: {{count($reviews)}}%"></div>
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

</div>
<!--end row-->
<div class="row">
    <div class="col-xl-12">
        <div class="card card-height-250">
            {!! $chart->container() !!}

            <div class="card-header d-flex align-items-center">


            </div>
        </div>
    </div>
</div>
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
    <div class="col-xl-4">
        <div class="card card-height-250">
            {!! $home->container() !!}

            <div class="card-header d-flex align-items-center">


            </div>
            <!--end card-header-->
            {{-- <div class="card-body">
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
            </div> --}}
        </div>
    </div><!-- /col-->
    <div class="col-xl-4">
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
    <div class="col-xl-4">
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

<div class="row">

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

    <!--end col-->

</div>
<!--end row-->

@endsection
@section('script')
<script src="{{ $chart->cdn() }}"></script>
<script src="{{ $simcard->cdn() }}"></script>
<script src="{{ $call->cdn() }}"></script>
<script src="{{ $review->cdn() }}"></script>
<script src="{{ $home->cdn() }}"></script>

{{ $chart->script() }}
{{ $simcard->script() }}
{{ $call->script() }}
{{ $review->script() }}
{{ $home->script() }}

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


