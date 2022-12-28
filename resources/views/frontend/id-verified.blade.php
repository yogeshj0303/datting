@extends('frontend.layout.main-after')
@section('main2.container')


    {{-- ===========================================
                    PAGE HEADER
    =========================================== --}}
    <section class="page-header-section style-1 breadcrumb-section">
        <div class="container">
            <div class="page-header-content">
                <div class="page-header-inner">
                    <div class="page-title">
                        <h2>ID Verification</h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="profile">Home</a></li>
                        <li>-</li>
                        <li class="active">Verify ID</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>


    {{-- ===========================================
                    VERIFY ID SECTION
    =========================================== --}}
    <section class="verify-id-section container-fluid">
        <div>
            <div class="row">
                <div class="col-lg-6 my-auto">
                    <div class="event-form-header text-center">
                        <h4>Get ID Verified</h4>
                    </div>
                    <div class="verify-text">
                        Having an ID Verification badge proves that you are, in fact, who you say you are. It's as simple
                        as taking photo of your government issued ID(front and back) and a selfie, which will be compared
                        to your profile. Once your profile is verified by our team, you will see an ID Verification badge
                        appears in your profile. There are many benefits having an ID Verification badge.
                        <ul class="text-left">
                            <li>Receive more messages and responses.</li>
                            <li>Appear trustworthy to other members.</li>
                            <li>Attract more members to your profile.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 my-auto">
                    <div class="verify-form">
                        <form action="">
                            <div class="d-flex verify-inputs">
                                <div class="input-file h-100">
                                    <label class="file-btn h-100" for="msgfile">
                                        <span class="mr-0"><i class="fa-solid fa-arrow-up-from-bracket"></i></span>
                                    </label>
                                    <input type="file" name="messageFile" id="msgfile" class="d-none">
                                    Upload Adhaar
                                </div>
                                <div class="input-file h-100">
                                    <label class="file-btn h-100" for="msgfile">
                                        <span class="mr-0"><i class="fa-solid fa-arrow-up-from-bracket"></i></span>
                                    </label>
                                    <input type="file" name="messageFile" id="msgfile" class="d-none">
                                    Upload Pan
                                </div>
                            </div>
                            <div class="price-card">
                                <div class="row">

                                    <div class="col-12">
                                        <p>ID Verification for lifetime Validity</p>
                                        <p> <small>(Cancel anytime in settings)</small> </p>
                                    </div>
                                    <div class="col-6 text-left">
                                        <p class="price">Rs.500</p>
                                    </div>
                                    <div class="col-6 text-right">
                                        <p class="time">One time</p>
                                    </div>
                                </div>
                            </div>
                            <div class="group-input">
                                <button type="submit">Continue</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection
