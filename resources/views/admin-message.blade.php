@extends('layouts.admin-master')

@section('title') @lang('translation.Validation') @endsection
@section('css')

    <!-- datepicker css -->
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/flatpickr/flatpickr.min.css') }}">

@endsection
@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Forms @endslot
        @slot('title') Message @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-8 offset-xl-2">
            <div class="card">
              <div class="card-body">
                    <form class="needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom01">Phone number</label>
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="" value="" required>
                                    <div class="valid-feedback">
                                    Please enter a Phone number
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="validationCustom02">Message</label>
                                    <textarea type="text" class="form-control" id="validationCustom02" placeholder="" value="" required></textarea>
                                    <div class="valid-feedback">
                                    Please enter a Message
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        
                        <button class="btn btn-primary" type="submit">Send</button>
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
