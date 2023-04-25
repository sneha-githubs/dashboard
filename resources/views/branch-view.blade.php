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
@slot('li_1') Tables @endslot @slot('title')  Branch / Co operative bank @endslot @endcomponent
<style>
    .switch {
  position: relative;
  display: inline-block;
  width: 55px;
  height: 25px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 20px;
  width: 20px;
  left: 4px;
  bottom: 3px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
            <div class="row justify-content-between align-items-center">
                        
                        <div class="col-sm-auto">
                            
                        </div>
                        <div class="col-sm-auto">
                            <div class="mb-4">
                                <span>SMS Credits: <b>13877</b></span>
                            <button type="button" class="ms-3 btn btn-light waves-effect waves-light"  data-bs-toggle="modal"
                                    data-bs-target="#credit"><i class="bx bx-plus me-1"></i> Add SMS Credit</button>
                                <button type="button" class="btn btn-light waves-effect waves-light"  data-bs-toggle="modal"
                                    data-bs-target="#addbranch"><i class="bx bx-plus me-1"></i> Add Branch</button>
                            </div>
                        </div>
                    </div>
                <table
                    id="datatable"
                    class="table table-bordered dt-responsive nowrap w-100"
                >
                    <thead>
                        <tr>
                            <th>Sl.NO</th>
                            <th>Branch Name</th>
                            <th>Username</th>
                            <th>Monitoring Enabled</th>
                            <th>Action</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><a href="device-view">Feroke</a></td>
                            <td>savings</td>
                            <td>Yes</td>
                            <td style="width: 100px">
                                        <a class="btn btn-outline-secondary btn-sm edit" title="Edit" data-bs-toggle="modal"
                                    data-bs-target="#myModal">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-outline-secondary btn-sm delete" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                </td>
                                <td>
                                    <label class="switch">
                                      <input type="checkbox">
                                       <span class="slider round"></span>
                                    </label>
                                </td>
                            <!--<td style="width: 100px">
                                <a
                                    class="btn btn-outline-secondary btn-sm edit"
                                    data-bs-toggle="modal"
                                    data-bs-target="#myModal addbranch"
                                    title="Edit"
                                >
                                    <i class="fas fa-pencil-alt"></i> Chnge
                                    Password
                                </a>
                            </td>-->
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="device-view">Karaparamba</a></td>
                            <td>savings</td>
                            <td>Yes</td>
                            <td style="width: 100px">
                                        <a class="btn btn-outline-secondary btn-sm edit" title="Edit" data-bs-toggle="modal"
                                    data-bs-target="#myModal">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-outline-secondary btn-sm delete" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                </td>
                                <td>
                                    <label class="switch">
                                      <input type="checkbox">
                                       <span class="slider round"></span>
                                    </label>
                                </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="device-view">Feroke</a></td>
                            <td>savings</td>
                            <td>Yes</td>
                            <td style="width: 100px">
                                        <a class="btn btn-outline-secondary btn-sm edit" title="Edit" data-bs-toggle="modal"
                                    data-bs-target="#myModal">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-outline-secondary btn-sm delete" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                </td>
                                <td>
                                    <label class="switch">
                                      <input type="checkbox">
                                       <span class="slider round"></span>
                                    </label>
                                </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="device-view">Karaparamba</a></td>
                            <td>savings</td>
                            <td>Yes</td>
                            <td style="width: 100px">
                                        <a class="btn btn-outline-secondary btn-sm edit" title="Edit" data-bs-toggle="modal"
                                    data-bs-target="#myModal">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-outline-secondary btn-sm delete" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                </td>
                                <td>
                                    <label class="switch">
                                      <input type="checkbox">
                                       <span class="slider round"></span>
                                    </label>
                                </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="device-view">Feroke</a></td>
                            <td>savings</td>
                            <td>Yes</td>
                            <td style="width: 100px">
                                        <a class="btn btn-outline-secondary btn-sm edit" title="Edit" data-bs-toggle="modal"
                                    data-bs-target="#myModal">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-outline-secondary btn-sm delete" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                </td>
                                <td>
                                    <label class="switch">
                                      <input type="checkbox">
                                       <span class="slider round"></span>
                                    </label>
                                </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><a href="device-view">Karaparamba</td>
                            <td>savings</td>
                            <td>Yes</td>
                            <td style="width: 100px">
                                        <a class="btn btn-outline-secondary btn-sm edit" title="Edit" data-bs-toggle="modal"
                                    data-bs-target="#myModal">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <a class="btn btn-outline-secondary btn-sm delete" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                </td>
                                <td>
                                    <label class="switch">
                                      <input type="checkbox">
                                       <span class="slider round"></span>
                                    </label>
                                </td>
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
                <h5 class="modal-title" id="myModalLabel">Edit Branch</h5>
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
                                    <label class="form-label" for="validationCustom01">Branch Name</label>
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="Branch Name" value="" required>
                                    <div class="valid-feedback">
                                    Please enter a Branch name
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom02">Username</label>
                                    <input type="text" class="form-control" id="validationCustom02" placeholder="Username" value="" required>
                                    <div class="valid-feedback">
                                    Please enter a username
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom03">Password</label>
                                    <input type="text" class="form-control" id="validationCustom03" placeholder="Password" required>
                                    <div class="invalid-feedback">
                                        Please enter a Password.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom04">Confirm Password</label>
                                    <input type="text" class="form-control" id="validationCustom04" placeholder="Confirm Password" required>
                                    <div class="invalid-feedback">
                                        Please enter a Confirm Password.
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<!-- sample modal content -->
<div
    id="addbranch"
    class="modal fade"
    tabindex="-1"
    aria-labelledby="myModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add Branch</h5>
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
                                    <label class="form-label" for="validationCustom01">Branch Name</label>
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="Branch Name" value="" required>
                                    <div class="valid-feedback">
                                    Please enter a Branch name
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom02">Username</label>
                                    <input type="text" class="form-control" id="validationCustom02" placeholder="Username" value="" required>
                                    <div class="valid-feedback">
                                    Please enter a username
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom03">Password</label>
                                    <input type="text" class="form-control" id="validationCustom03" placeholder="Password" required>
                                    <div class="invalid-feedback">
                                        Please enter a Password.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom04">Confirm Password</label>
                                    <input type="text" class="form-control" id="validationCustom04" placeholder="Confirm Password" required>
                                    <div class="invalid-feedback">
                                        Please enter a Confirm Password.
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- sample modal content -->
<div
    id="credit"
    class="modal fade"
    tabindex="-1"
    aria-labelledby="myModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add SMS Credit - bank name</h5>
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
                                    >SMS Credit</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="validationCustom01"
                                    placeholder=""
                                    value=""
                                    required
                                />
                                <div class="valid-feedback">
                                    Please enter a SMS Credit
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
