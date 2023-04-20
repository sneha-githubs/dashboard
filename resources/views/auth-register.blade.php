@extends('layouts.master-without-nav')

@section('title')
    @lang('translation.Register')
@endsection

@section('body')

    <body>
    @endsection

    @section('content')
    <div class="auth-page">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xxl-3 col-lg-4 col-md-5">
                    <div class="auth-full-page-content d-flex p-sm-5 p-4">
                        <div class="w-100">
                            <div class="d-flex flex-column h-100">
                             
                                <div class="auth-content my-auto">
                                    <div class="text-center">
                                        <h5 class="mb-0">Change Password</h5>
                                    </div>
                                    <form class="needs-validation mt-4 pt-2" novalidate action="index">
                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Current Password</label>
                                            <input type="password" class="form-control" id="useremail" placeholder="" required>
                                            <div class="invalid-feedback">
                                                Please Enter Current Password
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="username" class="form-label">New Password</label>
                                            <input type="text" class="form-control" id="username" placeholder="" required>
                                            <div class="invalid-feedback">
                                                Please Enter New Password
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="userpassword" class="form-label">Confirm Password</label>
                                            <input type="password" class="form-control" id="userpassword" placeholder="" required>
                                            <div class="invalid-feedback">
                                                Please Enter Confirm Passwor
                                            </div>
                                        </div>
                                       
                                        <div class="mb-3">
                                            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Submit</button>
                                        </div>
                                    </form>
                                  </div>
                                <div class="mt-4 mt-md-5 text-center">
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script> © palm collection . Designed with <i class="mdi mdi-heart text-danger"></i> by
                                        Codeneos</p>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- end auth full page content -->
                </div>
                <!-- end col -->
                <div class="col-xxl-9 col-lg-8 col-md-7">
                        <div class="auth-bg pt-md-5 p-4 d-flex justify-content-center align-items-center">
                            <div class="bg-overlay bg-primary"></div>
                            <ul class="bg-bubbles">
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <!-- end bubble effect -->
                            <div class="row justify-content-center align-items-center">
                                <div class="col-xl-7">
                                    <div class="p-0 p-sm-4 px-xl-0">
                                    <div class="mb-4 mb-md-5 text-center">
                                        <a href="index" class="d-block auth-logo">
                                            <img src="assets/images/fav.png" alt="" width="200"> <span
                                                class="logo-txt">Palm collection</span>
                                        </a>
                                    </div>
                                        <!-- end review carousel -->
                                        <div class="d-flex">
                                            
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
        <!-- end container fluid -->
    </div>



    @endsection

    @section('script')

        <!-- validation init -->
        <script src="{{ URL::asset('/assets/js/pages/validation.init.js') }}"></script>

    @endsection
