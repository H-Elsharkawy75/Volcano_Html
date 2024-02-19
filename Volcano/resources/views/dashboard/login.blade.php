<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> Volcano Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('dashboard/images/favicon.ico') }}">

    <!-- App css -->
    <link href="{{ asset('dashboard/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"
        id="bootstrap-stylesheet" />
    <link href="{{ asset('dashboard/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet" />

</head>

<body class="authentication-bg">

    <div class="account-pages pt-5 my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="account-card-box">
                        <div class="card mb-0">
                            <div class="card-body p-4">

                                <div class="text-center">
                                    <div class="my-3 mb-5">
                                        <a href="index.html">
                                            <span><img src="{{ asset('dashboard/images/logo.png') }}" alt=""
                                                    height="40"></span>
                                        </a>
                                    </div>
                                </div>
                                @if ($errors->any())
                                    <div class="bg-danger alert p-3">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                            <form class="mt-2" method="POST" action="{{ url('login') }}">
                                                @csrf
                                                <div class="form-group mb-3">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter your email" name="email"
                                                        value="{{ old('email') }}" required autocomplete="email">
                                                </div>

                                                <div class="form-group mb-3">
                                                    <input class="form-control" type="password" id="password"
                                                        placeholder="Enter your password" name="password" required>
                                                </div>

                                                {{-- <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="checkbox-signin"
                                                checked>
                                            <label class="custom-control-label" for="checkbox-signin">Remember
                                                me</label>
                                        </div>
                                    </div> --}}

                                                <div class="form-group text-center">
                                                    <button class="btn btn-success btn-block waves-effect waves-light"
                                                        type="submit"> Log In </button>
                                                </div>



                                            </form>



                                    </div> <!-- end card-body -->
                            </div>
                            <!-- end card -->
                        </div>


                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <!-- Vendor js -->
        <script src="{{ asset('dashboard/js/vendor.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('dashboard/js/app.min.js') }}"></script>

</body>

</html>
