@extends('layouts.master')

@section('title') @lang('translation.DataTables') @endsection

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

    @component('components.breadcrumb')
        @slot('li_1') Tables @endslot
        @slot('title') Bank List @endslot
    @endcomponent


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <div class="row justify-content-between align-items-center">
                        
                        <div class="col-sm-auto">
                            <div class="d-flex align-items-center gap-1 mb-4">
                                
                                
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <div class="mb-4">
                                <button type="button" class="btn btn-light waves-effect waves-light" data-bs-toggle="modal"
                                    data-bs-target="#myModal1"><i class="bx bx-plus me-1"></i> Add bank</button>
                            </div>
                        </div>
                    </div>
                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th>Sl.NO</th>
                                <th>Bank</th>
                                <th>Account</th>
                                <th>SMS Credits</th>
                                <th>SMS Header</th>
                                <th>Setup Date</th>
                                <th>Action</th>
                                <th>Status</th>
                            </tr>
                        </thead>


                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="branch-view">Co-operative</a></td>
                                <td>savings</td>
                                <td>61</td>
                                <td>Co-operative</td>
                                <td>6/2/2023</td>
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
                                <td><a href="branch-view">Co-operative</a></td>
                                <td>savings</td>
                                <td>61</td>
                                <td>Co-operative</td>
                                <td>6/2/2023</td>
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
                                <td><a href="branch-view">Co-operative</a></td>
                                <td>savings</td>
                                <td>61</td>
                                <td>Co-operative</td>
                                <td>6/2/2023</td>
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
                                <td><a href="branch-view">Co-operative</a></td>
                                <td>savings</td>
                                <td>61</td>
                                <td>Co-operative</td>
                                <td>6/2/2023</td>
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
                                <td><a href="branch-view">Co-operative</a></td>
                                <td>savings</td>
                                <td>61</td>
                                <td>Co-operative</td>
                                <td>6/2/2023</td>
                                <td style="width: 100px">
                                        <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
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
                                <td><a href="branch-view">Co-operative</a></td>
                                <td>savings</td>
                                <td>61</td>
                                <td>Co-operative</td>
                                <td>6/2/2023</td>
                                <td style="width: 100px">
                                        <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
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
                                <td><a href="branch-view">Co-operative</a></td>
                                <td>savings</td>
                                <td>61</td>
                                <td>Co-operative</td>
                                <td>6/2/2023</td>
                                <td style="width: 100px">
                                        <a class="btn btn-outline-secondary btn-sm edit" title="Edit">
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
        </div> <!-- end col -->
    </div> <!-- end row -->
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
                <h5 class="modal-title" id="myModalLabel">Edit Bank</h5>
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
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom01">Bank Name</label>
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="" value="" required>
                                    <div class="valid-feedback">
                                    Please enter a bank name
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom02">Username</label>
                                    <input type="text" class="form-control" id="validationCustom02" placeholder="" value="" required>
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
                                    <input type="text" class="form-control" id="validationCustom03" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Please enter a Password.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom04">Confirm Password</label>
                                    <input type="text" class="form-control" id="validationCustom04" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Please enter a Confirm Password.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom05">SMS Credential</label>
                                    <input type="text" class="form-control" id="validationCustom05" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Please enter a SMS Credential.
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                       <div class="row">
                        <h4>Additional Details</h4>
                           <div class="col-md-12">
                                <div class="mb-3">
                                  <input type="text" class="form-control" id="validationCustom05" placeholder="SMS Header" required>
                                    <div class="invalid-feedback">
                                        Please enter a SMS Header.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                  <input type="date" class="form-control" id="datepicker-datetime" required>
                                    <div class="invalid-feedback">
                                        Please enter a date.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                  <select class="form-control" data-trigger name="choices-single-default"
                                        id="choices-single-default"
                                        placeholder="This is a search placeholder">
                                        <option value="">Infro </option>
                                        <option value="Choice 1">Choice 1</option>
                                        <option value="Choice 2">Choice 2</option>
                                        <option value="Choice 3">Choice 3</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please enter .
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


<!-- sample modal content -->
<div
    id="myModal1"
    class="modal fade"
    tabindex="-1"
    aria-labelledby="myModalLabel"
    aria-hidden="true"
>
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Add Bank</h5>
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
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom01">Bank Name</label>
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="" value="" required>
                                    <div class="valid-feedback">
                                    Please enter a bank name
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom02">Username</label>
                                    <input type="text" class="form-control" id="validationCustom02" placeholder="" value="" required>
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
                                    <input type="text" class="form-control" id="validationCustom03" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Please enter a Password.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom04">Confirm Password</label>
                                    <input type="text" class="form-control" id="validationCustom04" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Please enter a Confirm Password.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom05">SMS Credential</label>
                                    <input type="text" class="form-control" id="validationCustom05" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Please enter a SMS Credential.
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
