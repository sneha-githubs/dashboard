@extends('layouts.master')

@section('title') jyg @endsection

@section('css')

    <!-- DataTables -->
    <link href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    {{-- <link href="{{ URL::asset('/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="{{ URL::asset('/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" type="text/css" /> --}}

@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Tables @endslot
        @slot('title') Billing @endslot
    @endcomponent


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th>Sl.NO</th>
                                <th>Bank</th>
                                <th>Account</th>
                                <th>Devices</th>
                                <th>Expiry</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="layouts-horizontal">Co-operative</a></td>
                                <td>savings</td>
                                <td>samsung</td>
                                <td>6/2/2023</td>
                                <td>6/2/2023</td>
                                <td style="width: 100px">
                                        <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-outline-secondary btn-sm delete" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><a href="layouts-horizontal">Co-operative</a></td>
                                <td>savings</td>
                                <td>samsung</td>
                                <td>6/2/2023</td>
                                <td>6/2/2023</td>
                                <td style="width: 100px">
                                        <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-outline-secondary btn-sm delete" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><a href="layouts-horizontal">Co-operative</a></td>
                                <td>savings</td>
                                <td>samsung</td>
                                <td>6/2/2023</td>
                                <td>6/2/2023</td>
                                <td style="width: 100px">
                                        <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-outline-secondary btn-sm delete" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><a href="layouts-horizontal">Co-operative</a></td>
                                <td>savings</td>
                                <td>samsung</td>
                                <td>6/2/2023</td>
                                <td>6/2/2023</td>
                                <td style="width: 100px">
                                        <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-outline-secondary btn-sm delete" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                </td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td><a href="layouts-horizontal">Co-operative</a></td>
                                <td>savings</td>
                                <td>samsung</td>
                                <td>6/2/2023</td>
                                <td>6/2/2023</td>
                                <td style="width: 100px">
                                        <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-outline-secondary btn-sm delete" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                </td>
                            </tr>
                    
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    
@endsection

@section('script')

    <!-- Required datatable js -->
    <script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
    {{-- <script src="{{ URL::asset('/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script> --}}

    <!-- Buttons examples -->
    {{-- <script src="{{ URL::asset('/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script> --}}
    <script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
    {{-- <script src="{{ URL::asset('/assets/libs/pdfmake/vfs_fonts.js') }}"></script> --}}
    {{-- <script src="{{ URL::asset('/assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

    <!-- Responsive examples -->
    <script src="{{ URL::asset('/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}">
    </script> --}}

    <!-- Datatable init js -->
    <script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>

@endsection
