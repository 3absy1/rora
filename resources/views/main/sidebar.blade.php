    <!-- ========== App Menu ========== -->
    <div class="app-menu navbar-menu">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <a href="index" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="{{ URL::asset('build/images/rora.png') }}" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="{{ URL::asset('build/images/rora.png') }}" alt="" height="67" >
                </span>
            </a>
            <a href="dashboard" class="logo logo-light">
                <span class="logo-sm">
                    <img src="{{ URL::asset('build/images/rora.png') }}" alt="" height="100">
                </span>
                <span class="logo-lg">
                    <img src="{{ URL::asset('build/images/rora.png') }}" alt="" height="67" class="mt-10">
                </span>
            </a>
            <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                <i class="ri-record-circle-line"></i>
            </button>
        </div>
        <div id="scrollbar">
            <div class="container-fluid">

                <div id="two-column-menu">
                </div>
                <ul class="navbar-nav" id="navbar-nav">

                    <li class="menu-title"><span>@lang('translation.menu')</span></li>
                    <li class="nav-item">

                        <div class="collapse menu-dropdown" id="sidebarDashboards">
                            <div class="collapse menu-dropdown" id="sidebarDashboards">
                                <li class="nav-item">
                                    <a href="/dashboard" class="nav-link {{Request::url() == route('dashboard')? 'active':''}}" data-key="t-ecommerce"><i class=" ri-home-8-line"></i>Home</a>
                                </li>
                    </li>



                <li class="nav-item">

                    <a href="/simscard" class="nav-link {{Request::url() == route('simscard')? 'active':''}}" data-key="t-ecommerce"><i class="  ri-sd-card-line"></i> SimsCard</a>
                </li>

                <li class="nav-item">

                    <a href="/reviews" class="nav-link {{Request::url() == route('reviews')? 'active':''}}" data-key="t-ecommerce"><i class=" ri-mail-add-line"></i> Reviews</a>
                </li>
                <li class="menu-title"><span>Client Managment</span></li>

                <li class="nav-item">
                    <a href="/clients" class="nav-link {{Request::url() == route('clients') ? 'active':''}}" data-key="t-ecommerce"> <i class="ph-address-book"></i>Clients</a>
                </li>

                <li class="nav-item">
                    <a href="/clientPayment" class="nav-link {{Request::url() == route('clientPayment')? 'active':''}}" data-key="t-ecommerce"><i class="  ri-bank-card-line "></i>Client Payment</a>

                </li>

                <li class="nav-item">
                    <a href="/creditTransactions" class="nav-link {{Request::url() == route('creditTransactions')? 'active':''}}" data-key="t-ecommerce"><i class=" ri-refund-line"></i>Credit Transactions</a>

                </li>

                {{-- <li class="menu-title"><span>Subscribtions Managment</span></li> --}}

                {{-- <li class="nav-item">

                    <a  href="/subscribtions" class="nav-link {{Request::url() == route('subscribtions')? 'active':''}}" data-key="t-ecommerce"> <i class=" ri-add-circle-line "></i>  Subscribtions</a>
                    </li>

                    <li class="nav-item">

                        <a href="/plan" class="nav-link {{Request::url() == route('plan')? 'active':''}}" data-key="t-ecommerce"><i class="  ri-todo-line"></i> Plans</a>
                    </li>

                    <li class="nav-item">
                        <a href="/orders" class="nav-link {{Request::url() == route('orders')? 'active':''}}" data-key="t-ecommerce"> <i class=" ri-shopping-bag-line"></i> Orders</a>

                    </li> --}}

                <li class="menu-title"><span>Call Managment</span></li>

                    <li class="nav-item">
                        <a href="/calls" class="nav-link {{Request::url() == route('calls')? 'active':''}}" data-key="t-ecommerce"> <i class=" ri-phone-line"></i>Calls</a>

                    </li>
                    <li class="nav-item">
                        <a href="/callRequests" class="nav-link {{Request::url() == route('callRequests')? 'active':''}}" data-key="t-ecommerce"><i class="  bx bx-phone-incoming
                            "></i> Call Requests</a>

                    </li>
            <li class="menu-title"><span>Recharage Managment</span></li>

                    <li class="nav-item">
                        <a href="/recharagecards" class="nav-link {{Request::url() == route('recharagecards')? 'active':''}}" data-key="t-ecommerce"><i class="bx bxs-battery-full"></i> Recharage Cards</a>

                    </li>
                    <li class="nav-item">
                        <a href="/recharageRequests" class="nav-link {{Request::url() == route('recharageRequests')? 'active':''}}" data-key="t-ecommerce"><i class=" ri-battery-share-line"></i> Recharage Requests</a>

                    </li>
            <li class="menu-title"><span>Payment Managment</span></li>


                <li class="nav-item">
                    <a href="/paymentMethod" class="nav-link {{Request::url() == route('paymentMethod')? 'active':''}}" data-key="t-ecommerce"><i class="  ri-secure-payment-line"></i> Payment Method</a>

                </li>


                </ul>

            </div>
            <!-- Sidebar -->
        </div>

        <div class="sidebar-background"></div>
    </div>
    <!-- Left Sidebar End -->
    <!-- Vertical Overlay-->
    <div class="vertical-overlay"></div>
