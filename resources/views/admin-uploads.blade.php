@extends('layouts.admin-master')

@section('title') @lang('translation.File_Upload') @endsection

@section('css')

    <!-- dropzone css -->
    <link href="{{ URL::asset('/assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Forms @endslot
        @slot('title') Uploads @endslot
    @endcomponent
    <div class="row">
        <div class="col-12">
            <div class="card">
               
                <div class="card-body">
                <form action="#" class="dropzone" style="border:none;">
                <div class="col-md-12">
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

                    <div style="    border: 1px solid #d2d2d2;border-radius: 5px;">
                       <div class="6">
                            <div class="fallback">
                                <input name="file" type="file" multiple="multiple">
                            </div>
                            <div class="dz-message needsclick">
                                <div class="mb-3">
                                    <i class="display-4 text-muted bx bx-cloud-upload"></i>
                                </div>

                                <h5>Drop files here or click to upload.</h5>
                            </div>
                            </div>
                        </form>
                    </div>

                    <div class="text-center mt-4">
                        <button type="button" class="btn btn-primary waves-effect waves-light">Send
                            Files</button>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection

@section('script')

    <!-- dropzone js -->
    <script src="{{ URL::asset('/assets/libs/dropzone/dropzone.min.js') }}"></script>

@endsection
