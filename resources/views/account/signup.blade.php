<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Log In | Hyper - Responsive Bootstrap 4 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App css -->
    <link href="{{ asset('backend//css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend//css/app-creative.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
    <link href="{{ asset('backend//css/app-creative-dark.min.css') }}" rel="stylesheet" type="text/css"
        id="dark-style" />

</head>

<body class="authentication-bg" data-layout-config='{"darkMode":false}'>

    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="card">

                        <!-- Logo -->
                        <div class="card-header pt-4 pb-4 text-center bg-primary">
                        </div>

                        <div class="card-body p-4">

                            <div class="text-center w-75 m-auto">
                                <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Sign Up</h4>
                            </div>

                            <form action="#">

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input class="form-control" type="text" id=""
                                        placeholder="Enter your name">
                                </div>

                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input class="form-control" type="email" id="emailaddress" required=""
                                        placeholder="Enter your email">
                                </div>

                                <div class="form-group">
                                    <a href="#" class="text-muted float-right"><small>Forgot your
                                            password?</small></a>
                                    <label for="password">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" class="form-control"
                                            placeholder="Enter your password">
                                        <div class="input-group-append" data-password="false">
                                            <div class="input-group-text">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-check form-check-inline">
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                    <input class="form-check-input mx-2" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio1" value="option1">
                                </div>

                                <div class="form-check form-check-inline">
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                    <input class="form-check-input mx-2" type="radio" name="inlineRadioOptions"
                                        id="inlineRadio2" value="option2">
                                </div>

                                <div class="form-group mt-3">
                                    <label for="">Address</label>
                                    <input class="form-control" type="text" id="emailaddress" required=""
                                        placeholder="Enter your address">
                                </div>

                                <div class="form-group mt-3">
                                    <label for="">Birthday</label>
                                    <input class="form-control" type="date">
                                </div>

                                <div class="form-group mt-3">
                                    <label for="">Phone</label>
                                    <input class="form-control" type="number" id="emailaddress" required=""
                                        placeholder="Enter your phone">
                                </div>

                                <div class="form-group mb-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="checkbox-signin"
                                            checked>
                                        <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                    </div>
                                </div>

                                <div class="text-center mt-4">
                                    <p class="text-muted font-16">Sign in with</p>
                                    <ul class="social-list list-inline mt-3">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="social-list-item border-primary text-primary"><i
                                                    class="mdi mdi-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="social-list-item border-danger text-danger"><i
                                                    class="mdi mdi-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);"
                                                class="social-list-item border-secondary text-secondary"><i
                                                    class="mdi mdi-github-circle"></i></a>
                                        </li>
                                    </ul>
                                </div>

                            </form>
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-muted">Already an account? <a href="{{ route('account.signin') }}"
                                    class="text-muted ml-1"><b>Sign in</b></a></p>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <footer class="footer footer-alt">
        copyright &copy; {{ @Date('Y') }}
    </footer>

    <!-- bundle -->
    <script src="{{ asset('backend/js/vendor.min.js') }}"></script>
    <script src="{{ asset('backend/js/app.min.js') }}"></script>

</body>

</html>
