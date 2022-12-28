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
                        <h2>Hidden Members</h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li>-</li>
                        <li class="active">Hidden Members</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    {{-- ===========================================
                HIDDEN MEMBER SECTION
    =========================================== --}}
    <section class="hidden-mem-section container-fluid">

        {{--  <div class="container">
            <h3>Hurray...you haven't hidden anyone.</h3>
            <h6>Hiding a member restricts them from seeing your profile in search, dashboards,
                and interest lists (although they could still message you if they can find you).
                The person you hide will not be notified that you have hidden them.</h6>
        </div>  --}}
<?php
        $clientId = session()->get('clientid');
        $data =  DB::table('hide_users')->where('user_id',$clientId)
        ->leftjoin('clients','hide_users.hide_user_id','=','clients.id')
        ->select('hide_users.*','clients.*')
        ->get();
    ?>
            
        <div class="row profile-grid">
            @foreach($data as $temp)
            <div class="col-lg-3 col-md-4 col-sm-6 profile-item">
                <div class="profile-card">
                    <div class="profile-img">
                        <a href="other-profile">
                            <img src="{{ asset('uploads/image/'.$temp->image) }}" alt="..." class="w-100 h-100">
                        </a>
                    </div>
                    <div class="profile-detail">
                        <div class="flex-fill">
                            <div class="name d-flex">
                                <div class="profile-name">
                                    <h6 class="mb-0 text-truncate">{{$temp->username}}</h6>
                                </div>
                            </div>
                            <p class="mb-0">{{$temp->locate}}</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <a href="{{URL::to('unhide')}}/{{$temp->id}}"> <button class="unhide-btn"> Unhide </button></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!--<div class="col-lg-3 col-md-4 col-sm-6 profile-item">-->
            <!--    <div class="profile-card">-->
            <!--        <div class="profile-img">-->
            <!--            <a href="other-profile">-->
            <!--                <img src="{{ asset('assets/images/profile/single/07.jpg') }}" alt="..." class="w-100 h-100">-->
            <!--            </a>-->
            <!--        </div>-->
            <!--        <div class="profile-detail">-->
            <!--            <div class="flex-fill">-->
            <!--                <h6 class="mb-0">Johnny Roy</h6>-->
            <!--                <p class="mb-0">Canada</p>-->
            <!--            </div>-->
            <!--            <div class="d-flex align-items-center">-->
            <!--                <button class="unhide-btn"> Unhide </button>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-sm-6 profile-item">-->
            <!--    <div class="profile-card">-->
            <!--        <div class="profile-img">-->
            <!--            <a href="other-profile">-->
            <!--                <img src="{{ asset('assets/images/profile/single/04.jpg') }}" alt="..." class="w-100 h-100">-->
            <!--            </a>-->
            <!--        </div>-->
            <!--        <div class="profile-detail">-->
            <!--            <div class="flex-fill">-->
            <!--                <div class="name d-flex">-->
            <!--                    <div class="profile-name">-->
            <!--                        <h6 class="mb-0 text-truncate">Johnny Wilson</h6>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <p class="mb-0">Canada</p>-->
            <!--            </div>-->
            <!--            <div class="d-flex align-items-center">-->
            <!--                <button class="unhide-btn"> Unhide </button>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-sm-6 profile-item">-->
            <!--    <div class="profile-card">-->
            <!--        <div class="profile-img">-->
            <!--            <a href="other-profile">-->
            <!--                <img src="{{ asset('assets/images/profile/single/02.jpg') }}" alt="..." class="w-100 h-100">-->
            <!--            </a>-->
            <!--        </div>-->
            <!--        <div class="profile-detail">-->
            <!--            <div class="flex-fill">-->
            <!--                <div class="name d-flex">-->
            <!--                    <div class="profile-name">-->
            <!--                        <h6 class="mb-0 text-truncate">Johnny Wilson</h6>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <p class="mb-0">Canada</p>-->
            <!--            </div>-->
            <!--            <div class="d-flex align-items-center">-->
            <!--                <button class="unhide-btn"> Unhide </button>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-sm-6 profile-item">-->
            <!--    <div class="profile-card">-->
            <!--        <div class="profile-img">-->
            <!--            <a href="other-profile">-->
            <!--                <img src="{{ asset('assets/images/profile/single/06.jpg') }}" alt="..." class="w-100 h-100">-->
            <!--            </a>-->
            <!--        </div>-->
            <!--        <div class="profile-detail">-->
            <!--            <div class="flex-fill">-->
            <!--                <div class="name d-flex">-->
            <!--                    <div class="profile-name">-->
            <!--                        <h6 class="mb-0 text-truncate">Johnny Wilson</h6>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <p class="mb-0">Canada</p>-->
            <!--            </div>-->
            <!--            <div class="d-flex align-items-center">-->
            <!--                <button class="unhide-btn"> Unhide </button>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-sm-6 profile-item">-->
            <!--    <div class="profile-card">-->
            <!--        <div class="profile-img">-->
            <!--            <a href="other-profile">-->
            <!--                <img src="{{ asset('assets/images/profile/single/07.jpg') }}" alt="..." class="w-100 h-100">-->
            <!--            </a>-->
            <!--        </div>-->
            <!--        <div class="profile-detail">-->
            <!--            <div class="flex-fill">-->
            <!--                <div class="name d-flex">-->
            <!--                    <div class="profile-name">-->
            <!--                        <h6 class="mb-0 text-truncate">Johnny Wilson</h6>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <p class="mb-0">Canada</p>-->
            <!--            </div>-->
            <!--            <div class="d-flex align-items-center">-->
            <!--                <button class="unhide-btn"> Unhide </button>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-sm-6 profile-item">-->
            <!--    <div class="profile-card">-->
            <!--        <div class="profile-img">-->
            <!--            <a href="other-profile">-->
            <!--                <img src="{{ asset('assets/images/profile/single/03.jpg') }}" alt="..." class="w-100 h-100">-->
            <!--            </a>-->
            <!--        </div>-->
            <!--        <div class="profile-detail">-->
            <!--            <div class="flex-fill">-->
            <!--                <div class="name d-flex">-->
            <!--                    <div class="profile-name">-->
            <!--                        <h6 class="mb-0 text-truncate">Johnny Wilson</h6>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <p class="mb-0">Canada</p>-->
            <!--            </div>-->
            <!--            <div class="d-flex align-items-center">-->
            <!--                <button class="unhide-btn"> Unhide </button>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
            <!--<div class="col-lg-3 col-md-4 col-sm-6 profile-item">-->
            <!--    <div class="profile-card">-->
            <!--        <div class="profile-img">-->
            <!--            <a href="other-profile">-->
            <!--                <img src="{{ asset('assets/images/profile/single/02.jpg') }}" alt="..." class="w-100 h-100">-->
            <!--            </a>-->
            <!--        </div>-->
            <!--        <div class="profile-detail">-->
            <!--            <div class="flex-fill">-->
            <!--                <div class="name d-flex">-->
            <!--                    <div class="profile-name">-->
            <!--                        <h6 class="mb-0 text-truncate">Johnny Wilson</h6>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--                <p class="mb-0">Canada</p>-->
            <!--            </div>-->
            <!--            <div class="d-flex align-items-center">-->
            <!--                <button class="unhide-btn"> Unhide </button>-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
        </div>

    </section>



@endsection
