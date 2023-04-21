@extends('layouts.master')

@section('title') Bank @endsection
@section('css')

    <!-- datepicker css -->
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/flatpickr/flatpickr.min.css') }}">

@endsection
@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Forms @endslot
        @slot('title') Add Bank @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
              <div class="card-body">
                    <form class="needs-validation" novalidate>
                        <div class="row">
                        <div class="col-md-6">
                                <div class="mb-3">
                                   <label for="choices-single-default" class="form-label font-size-13 text-muted">Device to upload data</label>
                                    <select class="form-control" data-trigger name="choices-single-default"
                                        id="choices-single-default"
                                        placeholder="This is a search placeholder">
                                        <option value=""> </option>
                                        <option value="Choice 1">Branch 1</option>
                                        <option value="Choice 2">Branch 2</option>
                                        <option value="Choice 3">Branch 3</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please enter a Branch.
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
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
            <!-- end card -->
        </div> <!-- end col -->

        
    </div>
    <!-- end row -->

    

@endsection


@section('script')
 <!-- datepicker js -->
 <script src="{{ URL::asset('/assets/libs/flatpickr/flatpickr.min.js') }}"></script>
    <!-- pristine js -->
    <script src="{{ URL::asset('/assets/libs/pristinejs/pristinejs.min.js') }}"></script>
    <!-- form validation -->
    <script src="{{ URL::asset('/assets/js/pages/form-validation.init.js') }}"></script>

@endsection
