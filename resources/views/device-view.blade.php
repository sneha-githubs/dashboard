@extends('layouts.master') @section('title') @lang('translation.DataTables')
@endsection @section('css')

<!-- DataTables -->
<link
    href="{{ URL::asset('/assets/libs/datatables/datatables.min.css') }}"
    rel="stylesheet"
    type="text/css"
/>
{{--
<link
    href="{{ URL::asset('/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}"
    rel="stylesheet"
    type="text/css"
/>

<!-- Responsive datatable examples -->
<link
    href="{{ URL::asset('/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
    rel="stylesheet"
    type="text/css"
/>
--}} @endsection @section('content') @component('components.breadcrumb')
@slot('li_1') Tables @endslot @slot('title') DataTables @endslot @endcomponent

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table
                    id="datatable"
                    class="table table-bordered dt-responsive nowrap w-100"
                >
                    <thead>
                        <tr>
                            <th>Sl.NO</th>
                            <th>Bank</th>
                            <th>Branch</th>
                            <th>Device</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Collection</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Co-opartvive</td>
                            <td>Feroke</td>
                            <td>Samsung</td>
                            <td>Samsung</td>
                            <td>432</td>
                            <td>Rs.567</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Co-opartvive</td>
                            <td>Feroke</td>
                            <td>Samsung</td>
                            <td>Samsung</td>
                            <td>432</td>
                            <td>Rs.567</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Co-opartvive</td>
                            <td>Feroke</td>
                            <td>Samsung</td>
                            <td>Samsung</td>
                            <td>432</td>
                            <td>Rs.567</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Co-opartvive</td>
                            <td>Feroke</td>
                            <td>Samsung</td>
                            <td>Samsung</td>
                            <td>432</td>
                            <td>Rs.567</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->
<!-- sample modal content -->
<div
    id="myModal"
    class="modal fade"
    tabindex="-1"
    aria-labelledby="myModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Change Password</h5>
                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" novalidate>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label
                                    class="form-label"
                                    for="validationCustom01"
                                    >New password</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="validationCustom01"
                                    placeholder="New password"
                                    value=""
                                    required
                                />
                                <div class="valid-feedback">
                                    Please enter a New password
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">
                        Submit
                    </button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@endsection @section('script')

<!-- Required datatable js -->
<script src="{{ URL::asset('/assets/libs/datatables/datatables.min.js') }}"></script>
{{--
<script src="{{ URL::asset('/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
--}}

<!-- Buttons examples -->
{{--
<script src="{{ URL::asset('/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
--}}
<script src="{{ URL::asset('/assets/libs/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/pdfmake/pdfmake.min.js') }}"></script>
{{--
<script src="{{ URL::asset('/assets/libs/pdfmake/vfs_fonts.js') }}"></script>
--}} {{--
<script src="{{ URL::asset('/assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>

<!-- Responsive examples -->
<script src="{{ URL::asset('/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
--}}

<!-- Datatable init js -->
<script src="{{ URL::asset('/assets/js/pages/datatables.init.js') }}"></script>

@endsection
