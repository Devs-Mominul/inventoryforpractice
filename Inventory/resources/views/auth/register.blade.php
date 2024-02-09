<!DOCTYPE html>
<html lang="en">



<head>
        <meta charset="utf-8" />
        <title>Register </title>
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
                                <h4 class="mb-0 text-center text-white">Create a new Account</h4>
                            </div>
                            <div class="p-4 mt-2 card-body">
                                <form action="{{ route('register') }}" method="POST" class="p-3">
                                    @csrf
                                    <div class="mb-3 form-group">
                                        <input class="form-control" type="email"  name="email" placeholder="Email">
                                    </div>

                                    <div class="mb-3 form-group">
                                        <input class="form-control" type="text"  name="name" placeholder="Username">
                                    </div>

                                    <div class="mb-3 form-group">
                                        <input class="form-control" type="password" name="password" placeholder="Password">
                                    </div>

                                    <div class="mb-3 form-group">
                                        <div class="custom-control custom-checkbox checkbox-primary">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin">
                                            <label class="custom-control-label" for="checkbox-signin">I accept <a href="#">Terms and Conditions</a></label>
                                        </div>
                                    </div>

                                    <div class="mt-5 mb-4 text-center form-group">
                                        <button class="btn btn-primary waves-effect width-md waves-light" type="submit"> Register </button>
                                    </div>

                                    <div class="mb-0 form-group row">
                                        <div class="text-center col-sm-12">
                                            <a href="{{ route('login') }}">Already have account?</a>
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



</html>
