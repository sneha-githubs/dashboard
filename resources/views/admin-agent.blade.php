@extends('layouts.admin-master')

@section('title') @lang('translation.Invoice_List') @endsection

@section('css')

    <!-- flatpickr css -->
    <link href="{{ URL::asset('/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css">

    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Invoices @endslot
        @slot('title') Agent name / Branch Name @endslot
    @endcomponent


    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-between align-items-center">
                        
                        <div class="col-sm-auto">
                            <div class="d-flex align-items-center gap-1 mb-4">
                                
                                
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <div class="mb-4">
                            <span>Total Collection: <b>Rs. 13877</b></span>
                                <button type="button" class="ms-3 btn btn-light waves-effect waves-light"><i class="bx bx-download me-1"></i> Download</button>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="table-responsive ">
                        <table class="table table-bordered align-middle datatable dt-responsive table-check nowrap">
                            <thead>
                                <tr class="bg-transparent">
                                    
                                    <th style="width: 120px;">Receipt Number</th>
                                    <th>Account</th>
                                    <th>Name</th>
                                    <th>Opening Balance</th>
                                    <th>Amount Paid</th>
                                    <th>Mobile</th>
                                    <th>Collection Time</th>
                                    <th>Ref#</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>45666666</td>

                                    <td><a class="text-dark fw-medium">#MN0215</a> </td>
                                    <td>
                                        Name
                                    </td>
                                    <td>RS. 764</td>

                                    <td>RS. 764</td>
                                    <td>
                                    8113854105
                                    </td>
                                    <td>
                                    2023-04-03 12:58:02
                                    </td>
                                   
                                    <td>
                                    TR16
                                    </td>
                                   
                                </tr>
                                <tr>
                                    <td>45666666</td>

                                    <td><a class="text-dark fw-medium">#MN0215</a> </td>
                                    <td>
                                        Name
                                    </td>
                                    <td>RS. 764</td>

                                    <td>RS. 764</td>
                                    <td>
                                    8113854105
                                    </td>
                                    <td>
                                    2023-04-03 12:58:02
                                    </td>
                                   
                                    <td>
                                    TR16
                                    </td>
                                   
                                </tr>
                                <tr>
                                    <td>45666666</td>

                                    <td><a class="text-dark fw-medium">#MN0215</a> </td>
                                    <td>
                                        Name
                                    </td>
                                    <td>RS. 764</td>

                                    <td>RS. 764</td>
                                    <td>
                                    8113854105
                                    </td>
                                    <td>
                                    2023-04-03 12:58:02
                                    </td>
                                   
                                    <td>
                                    TR16
                                    </td>
                                   
                                </tr>
                                <tr>
                                    <td>45666666</td>

                                    <td><a  class="text-dark fw-medium">#MN0215</a> </td>
                                    <td>
                                        Name
                                    </td>
                                    <td>RS. 764</td>

                                    <td>RS. 764</td>
                                    <td>
                                    8113854105
                                    </td>
                                    <td>
                                    2023-04-03 12:58:02
                                    </td>
                                   
                                    <td>
                                    TR16
                                    </td>
                                   
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- end table responsive -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
@endsection

@section('script')

    <!-- flatpickr js -->
    <script src="{{ URL::asset('/assets/libs/flatpickr/flatpickr.min.js') }}"></script>

    <!-- Required datatable js -->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/invoices-list.init.js') }}"></script>

@endsection
