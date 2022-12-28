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
                        <li class="active">Forgot Password</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid login-area forgot-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-7 col-sm-10 mx-auto form-box">
                    <div class="text-center mt-3 section-heading">
                        <h3>OPTIONS</h3>
                    </div>
                    <form action="">
                        <div class="login-form">
                            <div class="login-head">
                                <h4>Forgot Password</h4>
                                <hr class="border-top">
                                <p class="text-muted text-center"> To reset your account password, enter the email address you registered with and we'll send your instructions on their way.</p>
                            </div>
                            <div class="login-inputs">
                                <div class="group-input">
                                    <input type="email" name="email" class="flex-fill" placeholder="E-Mail" required>
                                </div>
                            </div>
                            <div class="login-btn">
                                <button>Send Instructions</button>
                            </div>
                            <div class="small-content">
                                <p class="mb-0"><small> <a href="#">Can't access your email?</a> </small></p>
                                <p class="mb-0"><small> <a href="login">Back to login</a> </small></p>
                            </div>
                            {{--  <hr class="border-top">
                            <div class="price-box">
                                <h6>
                                    <i class="fa-solid fa-heart-pulse"></i>
                                    Looking for a date?
                                    <span class="text-danger">Try Our Price.</span>
                                </h6>
                            </div>  --}}
                        </div>
                    </form>
                    {{--  <div class="text-center">
                        <small class="text-muted">
                            By continuing you agree to Options Terms and Privacy Policy.
                        </small>
                    </div>  --}}
                </div>
            </div>
        </div>
    </div>


@endsection
