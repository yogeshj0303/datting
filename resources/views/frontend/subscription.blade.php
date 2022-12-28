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
                        <h2>Subscription</h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Subscription</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    {{-- ===========================================
                    SUBSCRIPTION PLANS
    =========================================== --}}

    <section class="container-fluid padding-tb plan-section">
        <div class="container">
            <div class="row plan-grid">
                @foreach($data as $temp)
                <div class="col-lg-4 col-md-6 plan-item">
                    <div class="plan-card">
                        <div class="plan-head">
                            <div class="text-center">{{$temp->plan}}</div>
                        </div>
                        <div class="plan-price">
                            <div class="text-center">
                                <span class="price">Rs.{{$temp->price}}</span>
                                <span class="time">{{$temp->plan_validity}}</span>
                            </div>
                        </div>
                        <hr>
                        <div class="plan-details">
                            <ul>
                                <li> <i class="fa-solid fa-check"></i> Lorem ipsum dolor sit amet.</li>
                                <li> <i class="fa-solid fa-check"></i> Lorem ipsum dolor sit amet.</li>
                                <li> <i class="fa-solid fa-check"></i> Lorem ipsum dolor sit amet.</li>
                                <li> <i class="fa-solid fa-check"></i> Lorem ipsum dolor sit amet.</li>
                                <li> <i class="fa-solid fa-xmark"></i> Lorem ipsum dolor sit amet.</li>
                                <li> <i class="fa-solid fa-xmark"></i> Lorem ipsum dolor sit amet.</li>
                            </ul>
                        </div>
                        <div class="plan-foot">
                            <div class="text-center">
                                <button>Get Started</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            <!--    <div class="col-lg-4 col-md-6 plan-item">-->
            <!--        <div class="plan-card">-->
            <!--            <div class="plan-head">-->
            <!--                <div class="text-center">Platinum</div>-->
            <!--            </div>-->
            <!--            <div class="plan-price">-->
            <!--                <div class="text-center">-->
            <!--                    <span class="price">Rs.9000</span>-->
            <!--                    <span class="time">/month</span>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <hr>-->
            <!--            <div class="plan-details">-->
            <!--                <ul>-->
            <!--                    <li> <i class="fa-solid fa-check"></i> Lorem ipsum dolor sit amet.</li>-->
            <!--                    <li> <i class="fa-solid fa-check"></i> Lorem ipsum dolor sit amet.</li>-->
            <!--                    <li> <i class="fa-solid fa-check"></i> Lorem ipsum dolor sit amet.</li>-->
            <!--                    <li> <i class="fa-solid fa-check"></i> Lorem ipsum dolor sit amet.</li>-->
            <!--                    <li> <i class="fa-solid fa-xmark"></i> Lorem ipsum dolor sit amet.</li>-->
            <!--                    <li> <i class="fa-solid fa-xmark"></i> Lorem ipsum dolor sit amet.</li>-->
            <!--                </ul>-->
            <!--            </div>-->
            <!--            <div class="plan-foot">-->
            <!--                <div class="text-center">-->
            <!--                    <button>Get Started</button>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--    <div class="col-lg-4 col-md-6 plan-item">-->
            <!--        <div class="plan-card">-->
            <!--            <div class="plan-head">-->
            <!--                <div class="text-center">Diamond</div>-->
            <!--            </div>-->
            <!--            <div class="plan-price">-->
            <!--                <div class="text-center">-->
            <!--                    <span class="price">Rs.9000</span>-->
            <!--                    <span class="time">/month</span>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--            <hr>-->
            <!--            <div class="plan-details">-->
            <!--                <ul>-->
            <!--                    <li> <i class="fa-solid fa-check"></i> Lorem ipsum dolor sit amet.</li>-->
            <!--                    <li> <i class="fa-solid fa-check"></i> Lorem ipsum dolor sit amet.</li>-->
            <!--                    <li> <i class="fa-solid fa-check"></i> Lorem ipsum dolor sit amet.</li>-->
            <!--                    <li> <i class="fa-solid fa-check"></i> Lorem ipsum dolor sit amet.</li>-->
            <!--                    <li> <i class="fa-solid fa-xmark"></i> Lorem ipsum dolor sit amet.</li>-->
            <!--                    <li> <i class="fa-solid fa-xmark"></i> Lorem ipsum dolor sit amet.</li>-->
            <!--                </ul>-->
            <!--            </div>-->
            <!--            <div class="plan-foot">-->
            <!--                <div class="text-center">-->
            <!--                    <button>Get Started</button>-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </section>


@endsection
