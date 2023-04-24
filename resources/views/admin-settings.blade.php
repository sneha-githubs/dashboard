@extends('layouts.admin-master')

@section('title') Branch @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Forms @endslot
        @slot('title') Vendors @endslot
    @endcomponent

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
              <div class="card-body">
                    <form class="needs-validation" novalidate>
                        <div class="row">
                       
                            <div class="col-md-8">
                               <div class="mb-3">
                                   <label for="choices-single-default" class="form-label font-size-13 text-muted">Vendors</label>
                                    <select class="form-control" data-trigger name="choices-single-default"
                                        id="choices-single-default"
                                        placeholder="This is a search placeholder">
                                        <option value=""> </option>
                                        <option value="Choice 1">Device 1</option>
                                        <option value="Choice 2">Device 2</option>
                                        <option value="Choice 3">Device 3</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please enter a Branch.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                     
                            <button class="btn btn-primary mt-4" type="submit">Submit</button></div>
                        </div>
                        
                        
                    </form>
                </div>
            </div>
            <!-- end card -->
        </div> <!-- end col -->

        
    </div>
    <!-- end row -->

    

@endsection


@section('script')

    <!-- pristine js -->
    <script src="{{ URL::asset('/assets/libs/pristinejs/pristinejs.min.js') }}"></script>
    <!-- form validation -->
    <script src="{{ URL::asset('/assets/js/pages/form-validation.init.js') }}"></script>

@endsection
