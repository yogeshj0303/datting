@extends('frontend.layout.main')
@section('main.container')

    {{-- ===========================================
                    PAGE HEADER
    =========================================== --}}
    <section class="page-header-section style-1 breadcrumb-section">
        <div class="container">
            <div class="page-header-content">
                <div class="page-header-inner">
                    <div class="page-title">
                        <h2>Login</h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>-</li>
                        <li class="active">Login</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid login-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-10 mx-auto form-box">
                    <div class="text-center mt-3 section-heading">
                        <h3>OPTIONS</h3>
                    </div>
                     <form action="loginuser"method="POST">
                        @csrf
                        <div class="login-form">
                            <div class="login-head">
                                <h4>Log In</h4>
                                <hr class="border-top">
                                <p class="text-muted text-center"> Login below to continue using Options.</p>
                            </div>
                            <div class="login-inputs">
                                <div class="group-input">
                                    <input type="email" name="email" class="flex-fill" placeholder="E-Mail*" required>
                                </div>
                                <div class="group-input">
                                    <input type="password" name="password" class="flex-fill" placeholder="Password*" required>
                                </div>
                            </div>
                            <div class="login-btn">
                                <button>Login</button>
                            </div>
                            @if(session()->has('error'))
    <div class="alert alert-success">
        {{ session()->get('error') }}
    </div>
@endif
                            <div class="small-content">
                                <p class="mb-0"><small> <a href="forgot-password">Forgot your password?</a> </small></p>
                                <p class="mb-0"><small> New Member? <a href="sign-up">Register</a> </small></p>
                            </div>
                            <hr class="border-top">
                            <div class="price-box">
                                <h6>
                                    <i class="fa-solid fa-heart-pulse"></i>
                                    Looking for a date?
                                    <span class="text-danger">Try Our Price.</span>
                                </h6>
                            </div>
                        </div>
                    </form>
                    <div class="text-center">
                        <small class="text-muted">
                            By continuing you agree to Options Terms and Privacy Policy.
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
