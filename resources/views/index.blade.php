@extends('layouts.master')

@section('title') @lang('translation.Dashboard') @endsection

@section('css')

    <link href="{{ URL::asset('assets/libs/jquery-vectormap/jquery-vectormap.min.css') }}" rel="stylesheet"
        type="text/css" />

@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Dashboard @endslot
        @slot('title') Dashboard @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-4 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">No.of Banks</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="865"></span>
                            </h4>
                        </div>

                        <div class="col-6">
                            <div id="mini-chart1" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                        </div>
                    </div>
                   
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-4 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">No.of Branch</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="6258">0</span>
                            </h4>
                        </div>
                        <div class="col-6">
                            <div id="mini-chart2" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                        </div>
                    </div>
                   
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col-->

        <div class="col-xl-4 col-md-6">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">No.of Agents</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="4.32">0</span>
                            </h4>
                        </div>
                        <div class="col-6">
                            <div id="mini-chart3" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                        </div>
                    </div>
                    
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6" style="display:none;">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <span class="text-muted mb-3 lh-1 d-block text-truncate">Profit Ration</span>
                            <h4 class="mb-3">
                                <span class="counter-value" data-target="12.57">0</span>%
                            </h4>
                        </div>
                        <div class="col-6">
                            <div id="mini-chart4" data-colors='["#5156be"]' class="apex-charts mb-2"></div>
                        </div>
                    </div>
                   
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div><!-- end row-->

    <div class="row">
        <div class="col-xl-5">
            <!-- card -->
            <div class="card card-h-100">
                <!-- card body -->
                <div class="card-body">
                    <div class="d-flex flex-wrap align-items-center mb-4">
                        <h5 class="card-title me-2">Wallet Balance</h5>
                        <div class="ms-auto">
                            <div>
                                <button type="button" class="btn btn-soft-secondary btn-sm">
                                    ALL
                                </button>
                                <button type="button" class="btn btn-soft-primary btn-sm">
                                    1M
                                </button>
                                <button type="button" class="btn btn-soft-secondary btn-sm">
                                    6M
                                </button>
                                <button type="button" class="btn btn-soft-secondary btn-sm active">
                                    1Y
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-sm">
                            <div id="wallet-balance" data-colors='["#777aca", "#5156be", "#a8aada"]' class="apex-charts">
                            </div>
                        </div>
                        <div class="col-sm align-self-center">
                            <div class="mt-4 mt-sm-0">
                                <div>
                                    <p class="mb-2"><i
                                            class="mdi mdi-circle align-middle font-size-10 me-2 text-success"></i> Bitcoin
                                    </p>
                                    <h6>0.4412 BTC = <span class="text-muted font-size-14 fw-normal">$ 4025.32</span></h6>
                                </div>

                                <div class="mt-4 pt-2">
                                    <p class="mb-2"><i
                                            class="mdi mdi-circle align-middle font-size-10 me-2 text-primary"></i> Ethereum
                                    </p>
                                    <h6>4.5701 ETH = <span class="text-muted font-size-14 fw-normal">$ 1123.64</span></h6>
                                </div>

                                <div class="mt-4 pt-2">
                                    <p class="mb-2"><i class="mdi mdi-circle align-middle font-size-10 me-2 text-info"></i>
                                        Litecoin</p>
                                    <h6>35.3811 LTC = <span class="text-muted font-size-14 fw-normal">$ 2263.09</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
        <div class="col-xl-7">
            <div class="row">
                <div class="col-xl-12">
                    <!-- card -->
                    <div class="card card-h-100">
                        <!-- card body -->
                        <div class="card-body">
                            <div class="d-flex flex-wrap align-items-center mb-4">
                                <h5 class="card-title me-2">Invested Overview</h5>
                                <div class="ms-auto">
                                    <select class="form-select form-select-sm">
                                        <option value="MAY" selected="">May</option>
                                        <option value="AP">April</option>
                                        <option value="MA">March</option>
                                        <option value="FE">February</option>
                                        <option value="JA">January</option>
                                        <option value="DE">December</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-sm">
                                    <div id="invested-overview" data-colors='["#5156be", "#34c38f"]' class="apex-charts">
                                    </div>
                                </div>
                                <div class="col-sm align-self-center">
                                    <div class="mt-4 mt-sm-0">
                                        <p class="mb-1">Invested Amount</p>
                                        <h4>$ 6134.39</h4>

                                        <p class="text-muted mb-4"> + 0.0012.23 ( 0.2 % ) <i
                                                class="mdi mdi-arrow-up ms-1 text-success"></i></p>

                                        <div class="row g-0">
                                            <div class="col-6">
                                                <div>
                                                    <p class="mb-2 text-muted text-uppercase font-size-11">Income</p>
                                                    <h5 class="fw-medium">$ 2632.46</h5>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div>
                                                    <p class="mb-2 text-muted text-uppercase font-size-11">Expenses</p>
                                                    <h5 class="fw-medium">-$ 924.38</h5>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-2">
                                            <a href="#" class="btn btn-primary btn-sm">View more <i
                                                    class="mdi mdi-arrow-right ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->

             
            </div>
            <!-- end row -->
        </div>
        <!-- end col -->
    </div> <!-- end row-->

    

@endsection

@section('script')
    <script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Plugins js-->
    <script src="{{ URL::asset('assets/libs/jquery-vectormap/jquery-vectormap.min.js') }}"></script>
    {{-- <script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script> --}}
    <!-- dashboard init -->
    <script src="{{ URL::asset('assets/js/pages/dashboard.init.js') }}"></script>
    {{-- <script src="{{ URL::asset('assets/js/app.min.js') }}"></script> --}}

@endsection
