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
                                    <div class="mb-4 mb-md-5 text-center">
                                        <a href="index" class="d-block auth-logo">
                                            <img src="assets/images/logo-sm.svg" alt="" height="28"> <span
                                                class="logo-txt">Minia</span>
                                        </a>
                                    </div>
                                    <div class="auth-content my-auto">
                                        <div class="text-center">
                                            <h5 class="mb-0">Change password</h5>
                                            <p class="text-muted mt-2">Get your free Minia account now.</p>
                                        </div>
                                        <form method="POST" action="{{ route('register') }}"
                                            class="needs-validation mt-4 pt-2" novalidate action="index">
                                            @csrf
                                            <div class="mb-3">
                                            <label for="userpassword">Current Password</label>
                                                <input type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" id="userpassword" placeholder="">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                            <label for="userpassword">New Password</label>
                                                <input type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" id="userpassword" placeholder="">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                            <label for="userpassword">Confirm Password</label>
                                                <input type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" id="userpassword" placeholder="">
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                                <input id="password_confirmation" type="password" placeholder="Enter Password"
                                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                                    name="password_confirmation" required autocomplete="new-password">

                                                @error('password_confirmation')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                         
                                            <div class="mb-3">
                                                <button class="btn btn-primary w-100 waves-effect waves-light"
                                                    type="submit">Register</button>
                                            </div>
                                        </form>

                                       

                                     
                                    </div>
                                    <div class="mt-4 mt-md-5 text-center">
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script> Minia . Crafted with <i class="mdi mdi-heart text-danger"></i> by
                                        Themesbrand</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end auth full page content -->
                    </div>
                    <!-- end col -->
                    <div class="col-xxl-9 col-lg-8 col-md-7">
                        <div class="auth-bg pt-md-5 p-4 d-flex">
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
