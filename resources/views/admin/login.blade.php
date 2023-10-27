<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.themenate.net/enlink-bs/dist/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Feb 2023 02:23:27 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Enlink - Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('admin-assets/assets/images/logo/favicon.png') }}">

    <!-- page css -->

    <!-- Core css -->
    <link href="{{ asset('admin-assets/assets/css/app.min.css') }}" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="container-fluid">
            <div class="d-flex full-height p-v-15 flex-column justify-content-between">
                <div class="d-none d-md-flex p-h-40">
                    <img src="{{ asset('admin-assets/assets/images/logo/logo.png') }}" alt="">
                </div>
                <div class="container">
                    @include('admin.message')
                    <div class="row align-items-center">
                        <div class="col-md-5">
                            <div class="card">
                                <div class="card-body">
                                    <h2 class="m-t-20">Sign In</h2>                                  
                                    <p class="m-b-30">Enter your credential to get access</p>
                                    <form action="{{ route('admin.authenticate') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="userName">Username:</label>
                                            <div class="input-affix">
                                                <i class="prefix-icon anticon anticon-user"></i>
                                                <input type="text" 
                                                value="{{ old('email') }}"
                                                name="email" id="email" 
                                                placeholder="Username"  
                                                class="form-control @error('email') is-invalid @enderror">
                                            </div>
                                        </div>
                                        @error('email')
                                        <p class="invalid-feedback">
                                            {{ $message }}
                                        </p>
                                        @enderror
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="password">Password:</label>
                                            <a class="float-right font-size-13 text-muted" href="#">Forget Password?</a>
                                            <div class="input-affix m-b-10">
                                                <i class="prefix-icon anticon anticon-lock"></i>
                                                <input type="password" 
                                                id="password" 
                                                name="password" 
                                                placeholder="Password"
                                                class="form-control 
                                                @error('password')
                                                is-invalid
                                                @enderror" 
                                                >
                                            </div>
                                        </div>
                                        @error('password')
                                        <p>
                                            {{ $message }}
                                        </p>
                                        @enderror
                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span class="font-size-13 text-muted">
                                                    Don't have an account? 
                                                    <a class="small" href="#"> Signup</a>
                                                </span>
                                                <button class="btn btn-primary">Sign In</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="offset-md-1 col-md-6 d-none d-md-block">
                            <img class="img-fluid" src="{{ asset('admin-assets/assets/images/others/login-2.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="d-none d-md-flex  p-h-40 justify-content-between">
                    <span class="">© 2019 ThemeNate</span>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a class="text-dark text-link" href="#">Legal</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-dark text-link" href="#">Privacy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Core Vendors JS -->
    <script src="{{ asset('admin-assets/assets/js/vendors.min.js') }}"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="{{ asset('admin-assets/assets/js/app.min.js') }}"></script>

</body>


<!-- Mirrored from www.themenate.net/enlink-bs/dist/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Feb 2023 02:23:32 GMT -->
</html>