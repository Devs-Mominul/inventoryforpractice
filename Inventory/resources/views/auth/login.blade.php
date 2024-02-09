<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/moltran/layouts/blue-vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Feb 2024 05:51:59 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Login Page | Moltran - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('backend')}}/assets/images/favicon.ico">

        <!-- App css -->
        <link href="{{asset('backend')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="{{asset('backend')}}/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{asset('backend')}}/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-stylesheet" />

    </head>

    <body class="authentication-page">

        <div class="my-5 account-pages">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="mt-4 card">
                            <div class="p-5 card-header bg-img position-relative">
                                <div class="bg-overlay"></div>
                                <h4 class="mb-0 text-center text-white">Sign In to Moltran</h4>
                            </div>
                            <div class="p-4 mt-2 card-body">
                                <form action="{{ route('login') }}" class="p-3" method="POST">
                                    @csrf

                                    <div class="mb-3 form-group">
                                        <input class="form-control" type="email"  name='email' placeholder="Username">
                                    </div>

                                    <div class="mb-3 form-group">
                                        <input class="form-control" type="password"  name='password' placeholder="Password">
                                    </div>

                                    <div class="mb-3 form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                                            <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                        </div>
                                    </div>

                                    <div class="mt-5 mb-4 text-center form-group">
                                        <button class="btn btn-primary waves-effect width-md waves-light" type="submit"> Log In </button>
                                    </div>

                                    <div class="mb-0 form-group row">
                                        <div class="col-sm-7">
                                            <a href="pages-recoverpw.html"><i class="mr-1 fa fa-lock"></i> Forgot your password?</a>
                                        </div>
                                        <div class="text-right col-sm-5">
                                            <a href="{{ route('register') }}">Create an account</a>
                                        </div>
                                    </div>
                                </form>

                            </div>
                            <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <!-- end row -->

                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div>
        </div>

        <!-- Vendor js -->
        <script src="{{asset('backend')}}/assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="{{asset('backend')}}/assets/js/app.min.js"></script>

    </body>


<!-- Mirrored from coderthemes.com/moltran/layouts/blue-vertical/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 02 Feb 2024 05:51:59 GMT -->
</html>
