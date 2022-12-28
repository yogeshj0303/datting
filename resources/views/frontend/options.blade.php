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
                        <h2>Options</h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>-</li>
                        <li class="active">Options</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    {{-- ===========================================
                    OPTIONS PAGE
    =========================================== --}}
    <section class="container-fluid options-section">

        {{-- ============== Featured Members ======= --}}
        <div id="featured">
            <div class="section-header wow fadeInUp" data-wow-duration="1.5s">
				<h2>Featured Members</h2>
			</div>
            <div class="row profile-grid">
                @foreach($subscribed as $temp)
                <div class="col-lg-3 col-md-4 col-sm-6 profile-item">
                     <a href="{{URL::to('other-profile',$temp->id)}}">
                    <div class="profile-card">
                        <div class="profile-img">
                           
                                <img src="{{ asset('uploads/image/'.$temp->image) }}" alt="..." class="w-100 h-100">
                           
                            <span class="profile-badge">
                                <img src="{{ asset('assets/images/icons/diamond.png') }}" alt="..."  data-bs-toggle="tooltip" title="Diamond Member">
                            </span>
                        </div>
                        <div class="profile-detail">
                            <div class="profile-info">
                                <div class="name d-flex">
                                    <div class="active-status"  data-bs-toggle="tooltip" title="Online"></div>
                                    <div class="profile-name">
                                        <h6 class="mb-0 text-truncate">{{$temp->username}}</h6>
                                    </div>
                                    <div class="tick">
                                        {{--  <i class="fa-solid fa-circle-check text-primary"  data-bs-toggle="tooltip" title="Verified"></i>  --}}
                                        <i class="fa-solid fa-circle-check text-success"  data-bs-toggle="tooltip" title="Trusted"></i>
                                    </div>
                                </div>
                                <p class="mb-0">{{$temp->locate}}</p>
                                <button class="text-truncate mb-0 event-link" data-bs-toggle="modal" data-bs-target="#event-popup">
                                    <small>
                                         @if(!empty($temp->event->event_name))
                                             <span class="event-name">{{$temp->event->event_name}} : </span>
                                            <span class="event-time">{{$temp->event->event_date}}</span>
                                         @endif
                                    </small>
                                </button>
                            </div>
                            <div class="d-flex align-items-center">
                                <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>
                            </div>
                        </div>
                    </div>
                     </a>
                </div>
                @endforeach
                <!--<div class="col-lg-3 col-md-4 col-sm-6 profile-item">-->
                <!--    <div class="profile-card">-->
                <!--        <div class="profile-img">-->
                <!--            <a href="other-profile">-->
                <!--                <img src="{{ asset('assets/images/profile/single/07.jpg') }}" alt="..." class="w-100 h-100">-->
                <!--            </a>-->
                <!--            <span class="profile-badge">-->
                <!--                <img src="{{ asset('assets/images/icons/platinum.png') }}" alt="..."  data-bs-toggle="tooltip" title="Platinum Member">-->
                <!--            </span>-->
                <!--        </div>-->
                <!--        <div class="profile-detail">-->
                <!--            <div class="profile-info">-->
                <!--                <div class="name d-flex">-->
                <!--                    <div class="profile-name">-->
                <!--                        <h6 class="mb-0 text-truncate">Johnny Wilson</h6>-->
                <!--                    </div>-->
                <!--                    <div class="tick">-->
                <!--                        {{--  <i class="fa-solid fa-circle-check text-primary"  data-bs-toggle="tooltip" title="Verified"></i>  --}}-->
                <!--                        {{--  <i class="fa-solid fa-circle-check text-success"  data-bs-toggle="tooltip" title="Trusted"></i>  --}}-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <p class="mb-0">Canada</p>-->
                <!--                <button class="text-truncate mb-0 event-link" data-bs-toggle="modal" data-bs-target="#event-popup">-->
                <!--                    <small>-->
                <!--                        <span class="event-name">Travel : </span>-->
                <!--                        <span class="event-time">12-12-2022 2:00 PM</span>-->
                <!--                    </small>-->
                <!--                </button>-->
                <!--            </div>-->
                <!--            <div class="d-flex align-items-center">-->
                <!--                <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>-->
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
                <!--            <span class="profile-badge">-->
                <!--                <img src="{{ asset('assets/images/icons/gold.png') }}" alt="..."  data-bs-toggle="tooltip" title="Gold Member">-->
                <!--            </span>-->
                <!--        </div>-->
                <!--        <div class="profile-detail">-->
                <!--            <div class="profile-info">-->
                <!--                <div class="name d-flex">-->
                <!--                    <div class="active-status"  data-bs-toggle="tooltip" title="Online"></div>-->
                <!--                    <div class="profile-name">-->
                <!--                        <h6 class="mb-0 text-truncate">Johnny Wilson</h6>-->
                <!--                    </div>-->
                <!--                    <div class="tick">-->
                <!--                        <i class="fa-solid fa-circle-check text-primary"  data-bs-toggle="tooltip" title="Verified"></i>-->
                <!--                        <i class="fa-solid fa-circle-check text-success"  data-bs-toggle="tooltip" title="Trusted"></i>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <p class="mb-0">Canada</p>-->
                <!--            </div>-->
                <!--            <div class="d-flex align-items-center">-->
                <!--                <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>-->
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
                <!--            <span class="profile-badge">-->
                <!--                <img src="{{ asset('assets/images/icons/platinum.png') }}" alt="..."  data-bs-toggle="tooltip" title="Platinum Member">-->
                <!--            </span>-->
                <!--        </div>-->
                <!--        <div class="profile-detail">-->
                <!--            <div class="profile-info">-->
                <!--                <div class="name d-flex">-->
                <!--                    <div class="profile-name">-->
                <!--                        <h6 class="mb-0 text-truncate">Johnny Wilson</h6>-->
                <!--                    </div>-->
                <!--                    <div class="tick">-->
                <!--                        {{--  <i class="fa-solid fa-circle-check text-primary"  data-bs-toggle="tooltip" title="Verified"></i>  --}}-->
                <!--                        <i class="fa-solid fa-circle-check text-success"  data-bs-toggle="tooltip" title="Trusted"></i>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <p class="mb-0">Canada</p>-->
                <!--                <button class="text-truncate mb-0 event-link" data-bs-toggle="modal" data-bs-target="#event-popup">-->
                <!--                    <small>-->
                <!--                        <span class="event-name">Travel : </span>-->
                <!--                        <span class="event-time">12-12-2022 2:00 PM</span>-->
                <!--                    </small>-->
                <!--                </button>-->
                <!--            </div>-->
                <!--            <div class="d-flex align-items-center">-->
                <!--                <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>-->
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
                <!--            <span class="profile-badge">-->
                <!--                <img src="{{ asset('assets/images/icons/diamond.png') }}" alt="..."  data-bs-toggle="tooltip" title="Diamond Member">-->
                <!--            </span>-->
                <!--        </div>-->
                <!--        <div class="profile-detail">-->
                <!--            <div class="profile-info">-->
                <!--                <div class="name d-flex">-->
                <!--                    <div class="active-status"  data-bs-toggle="tooltip" title="Online"></div>-->
                <!--                    <div class="profile-name">-->
                <!--                        <h6 class="mb-0 text-truncate">Johnny Wilson</h6>-->
                <!--                    </div>-->
                <!--                    <div class="tick">-->
                <!--                        <i class="fa-solid fa-circle-check text-primary"  data-bs-toggle="tooltip" title="Verified"></i>-->
                <!--                        <i class="fa-solid fa-circle-check text-success"  data-bs-toggle="tooltip" title="Trusted"></i>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <p class="mb-0">Canada</p>-->
                <!--                <button class="text-truncate mb-0 event-link" data-bs-toggle="modal" data-bs-target="#event-popup">-->
                <!--                    <small>-->
                <!--                        <span class="event-name">Travel : </span>-->
                <!--                        <span class="event-time">12-12-2022 2:00 PM</span>-->
                <!--                    </small>-->
                <!--                </button>-->
                <!--            </div>-->
                <!--            <div class="d-flex align-items-center">-->
                <!--                <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>-->
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
                <!--            <span class="profile-badge">-->
                <!--                <img src="{{ asset('assets/images/icons/platinum.png') }}" alt="..."  data-bs-toggle="tooltip" title="Platinum Member">-->
                <!--            </span>-->
                <!--        </div>-->
                <!--        <div class="profile-detail">-->
                <!--            <div class="profile-info">-->
                <!--                <div class="name d-flex">-->
                <!--                    <div class="profile-name">-->
                <!--                        <h6 class="mb-0 text-truncate">Johnny Wilson</h6>-->
                <!--                    </div>-->
                <!--                    <div class="tick">-->
                <!--                        {{--  <i class="fa-solid fa-circle-check text-primary"  data-bs-toggle="tooltip" title="Verified"></i>  --}}-->
                <!--                        {{--  <i class="fa-solid fa-circle-check text-success"  data-bs-toggle="tooltip" title="Trusted"></i>  --}}-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <p class="mb-0">Canada</p>-->
                <!--            </div>-->
                <!--            <div class="d-flex align-items-center">-->
                <!--                <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>

        {{-- ============== Platinum Members ======= --}}
        <div id="platinum">
            <div class="section-header wow fadeInUp" data-wow-duration="1.5s">
				<h2>Platinum Members</h2>
			</div>
		
            <div class="row profile-grid">
           
                  @foreach($subscribed as $temp)
                  @if($subscripeduser->user_id == $temp->id)
                <div class="col-lg-3 col-md-4 col-sm-6 profile-item">
                    <div class="profile-card">
                        <div class="profile-img">
                            <a href="{{URL::to('other-profile',$temp->id)}}">
                                <img src="{{ asset('uploads/image/'.$temp->image) }}" alt="..." class="w-100 h-100">
                            </a>
                            <span class="profile-badge">
                                <img src="{{ asset('assets/images/icons/platinum.png') }}" alt="..."  data-bs-toggle="tooltip" title="Platinum Member">
                            </span>
                        </div>
                        <div class="profile-detail">
                            <div class="profile-info">
                                <div class="name d-flex">
                                    <div class="active-status"  data-bs-toggle="tooltip" title="Online"></div>
                                    <div class="profile-name">
                                        <h6 class="mb-0 text-truncate">{{$temp->username}}</h6>
                                    </div>
                                    <div class="tick">
                                        {{--  <i class="fa-solid fa-circle-check text-primary"  data-bs-toggle="tooltip" title="Verified"></i>  --}}
                                        <i class="fa-solid fa-circle-check text-success"  data-bs-toggle="tooltip" title="Trusted"></i>
                                    </div>
                                </div>
                                <p class="mb-0">{{$temp->locate}}</p>
                                <button class="text-truncate mb-0 event-link" data-bs-toggle="modal" data-bs-target="#event-popup">
                                    <small>
                                         @if(!empty($temp->event->event_name))
                                             <span class="event-name">{{$temp->event->event_name}} : </span>
                                            <span class="event-time">{{$temp->event->event_date}}</span>
                                         @endif
                                    </small>
                                </button>
                            </div>
                            <div class="d-flex align-items-center">
                                <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                
                <!--<div class="col-lg-3 col-md-4 col-sm-6 profile-item">-->
                <!--    <div class="profile-card">-->
                <!--        <div class="profile-img">-->
                <!--            <a href="other-profile">-->
                <!--                <img src="{{ asset('assets/images/profile/single/07.jpg') }}" alt="..." class="w-100 h-100">-->
                <!--            </a>-->
                <!--            <span class="profile-badge">-->
                <!--                <img src="{{ asset('assets/images/icons/platinum.png') }}" alt="..."  data-bs-toggle="tooltip" title="Platinum Member">-->
                <!--            </span>-->
                <!--        </div>-->
                <!--        <div class="profile-detail">-->
                <!--            <div class="profile-info">-->
                <!--                <div class="name d-flex">-->
                <!--                    <div class="profile-name">-->
                <!--                        <h6 class="mb-0 text-truncate">Johnny Wilson</h6>-->
                <!--                    </div>-->
                <!--                    <div class="tick">-->
                <!--                        {{--  <i class="fa-solid fa-circle-check text-primary"  data-bs-toggle="tooltip" title="Verified"></i>  --}}-->
                <!--                        {{--  <i class="fa-solid fa-circle-check text-success"  data-bs-toggle="tooltip" title="Trusted"></i>  --}}-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <p class="mb-0">Canada</p>-->
                <!--            </div>-->
                <!--            <div class="d-flex align-items-center">-->
                <!--                <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>-->
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
                <!--            <span class="profile-badge">-->
                <!--                <img src="{{ asset('assets/images/icons/platinum.png') }}" alt="..."  data-bs-toggle="tooltip" title="Platinum Member">-->
                <!--            </span>-->
                <!--        </div>-->
                <!--        <div class="profile-detail">-->
                <!--            <div class="profile-info">-->
                <!--                <div class="name d-flex">-->
                <!--                    <div class="active-status"  data-bs-toggle="tooltip" title="Online"></div>-->
                <!--                    <div class="profile-name">-->
                <!--                        <h6 class="mb-0 text-truncate">Johnny Wilson</h6>-->
                <!--                    </div>-->
                <!--                    <div class="tick">-->
                <!--                        <i class="fa-solid fa-circle-check text-primary"  data-bs-toggle="tooltip" title="Verified"></i>-->
                <!--                        <i class="fa-solid fa-circle-check text-success"  data-bs-toggle="tooltip" title="Trusted"></i>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <p class="mb-0">Canada</p>-->
                <!--                <button class="text-truncate mb-0 event-link" data-bs-toggle="modal" data-bs-target="#event-popup">-->
                <!--                    <small>-->
                <!--                        <span class="event-name">Travel : </span>-->
                <!--                        <span class="event-time">12-12-2022 2:00 PM</span>-->
                <!--                    </small>-->
                <!--                </button>-->
                <!--            </div>-->
                <!--            <div class="d-flex align-items-center">-->
                <!--                <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>-->
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
                <!--            <span class="profile-badge">-->
                <!--                <img src="{{ asset('assets/images/icons/platinum.png') }}" alt="..."  data-bs-toggle="tooltip" title="Platinum Member">-->
                <!--            </span>-->
                <!--        </div>-->
                <!--        <div class="profile-detail">-->
                <!--            <div class="profile-info">-->
                <!--                <div class="name d-flex">-->
                <!--                    <div class="profile-name">-->
                <!--                        <h6 class="mb-0 text-truncate">Johnny Wilson</h6>-->
                <!--                    </div>-->
                <!--                    <div class="tick">-->
                <!--                        {{--  <i class="fa-solid fa-circle-check text-primary"  data-bs-toggle="tooltip" title="Verified"></i>  --}}-->
                <!--                        <i class="fa-solid fa-circle-check text-success"  data-bs-toggle="tooltip" title="Trusted"></i>-->
                <!--                    </div>-->
                <!--                </div>-->
                <!--                <p class="mb-0">Canada</p>-->
                <!--                <button class="text-truncate mb-0 event-link" data-bs-toggle="modal" data-bs-target="#event-popup">-->
                <!--                    <small>-->
                <!--                        <span class="event-name">Travel : </span>-->
                <!--                        <span class="event-time">12-12-2022 2:00 PM</span>-->
                <!--                    </small>-->
                <!--                </button>-->
                <!--            </div>-->
                <!--            <div class="d-flex align-items-center">-->
                <!--                <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>-->
                <!--            </div>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>

        {{-- ============== Gold Members ======= --}}
        <div id="featured">
            <div class="section-header wow fadeInUp" data-wow-duration="1.5s">
				<h2>Gold Members</h2>
			</div>
            <div class="row profile-grid">
                <div class="col-lg-3 col-md-4 col-sm-6 profile-item">
                    <div class="profile-card">
                        <div class="profile-img">
                            <a href="other-profile">
                                <img src="{{ asset('assets/images/profile/single/02.jpg') }}" alt="..." class="w-100 h-100">
                            </a>
                            <span class="profile-badge">
                                <img src="{{ asset('assets/images/icons/gold.png') }}" alt="..."  data-bs-toggle="tooltip" title="Gold Member">
                            </span>
                        </div>
                        <div class="profile-detail">
                            <div class="profile-info">
                                <div class="name d-flex">
                                    <div class="profile-name">
                                        <h6 class="mb-0 text-truncate">Johnny Wilson</h6>
                                    </div>
                                    <div class="tick">
                                        {{--  <i class="fa-solid fa-circle-check text-primary"  data-bs-toggle="tooltip" title="Verified"></i>  --}}
                                        <i class="fa-solid fa-circle-check text-success"  data-bs-toggle="tooltip" title="Trusted"></i>
                                    </div>
                                </div>
                                <p class="mb-0">Canada</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 profile-item">
                    <div class="profile-card">
                        <div class="profile-img">
                            <a href="other-profile">
                                <img src="{{ asset('assets/images/profile/single/06.jpg') }}" alt="..." class="w-100 h-100">
                            </a>
                            <span class="profile-badge">
                                <img src="{{ asset('assets/images/icons/gold.png') }}" alt="..."  data-bs-toggle="tooltip" title="Gold Member">
                            </span>
                        </div>
                        <div class="profile-detail">
                            <div class="profile-info">
                                <div class="name d-flex">
                                    <div class="profile-name">
                                        <h6 class="mb-0 text-truncate">Johnny Wilson</h6>
                                    </div>
                                    <div class="tick">
                                        <i class="fa-solid fa-circle-check text-primary"  data-bs-toggle="tooltip" title="Verified"></i>
                                        <i class="fa-solid fa-circle-check text-success"  data-bs-toggle="tooltip" title="Trusted"></i>
                                    </div>
                                </div>
                                <p class="mb-0">Canada</p>
                                <button class="text-truncate mb-0 event-link" data-bs-toggle="modal" data-bs-target="#event-popup">
                                    <small>
                                        <span class="event-name">Travel : </span>
                                        <span class="event-time">12-12-2022 2:00 PM</span>
                                    </small>
                                </button>
                            </div>
                            <div class="d-flex align-items-center">
                                <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 profile-item">
                    <div class="profile-card">
                        <div class="profile-img">
                            <a href="other-profile">
                                <img src="{{ asset('assets/images/profile/single/07.jpg') }}" alt="..." class="w-100 h-100">
                            </a>
                            <span class="profile-badge">
                                <img src="{{ asset('assets/images/icons/gold.png') }}" alt="..."  data-bs-toggle="tooltip" title="Gold Member">
                            </span>
                        </div>
                        <div class="profile-detail">
                            <div class="profile-info">
                                <div class="name d-flex">
                                    <div class="profile-name">
                                        <h6 class="mb-0 text-truncate">Johnny Wilson</h6>
                                    </div>
                                    <div class="tick">
                                        {{--  <i class="fa-solid fa-circle-check text-primary"  data-bs-toggle="tooltip" title="Verified"></i>  --}}
                                        {{--  <i class="fa-solid fa-circle-check text-success"  data-bs-toggle="tooltip" title="Trusted"></i>  --}}
                                    </div>
                                </div>
                                <p class="mb-0">Canada</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ============== Diamond Members ======= --}}
        <div id="featured">
            <div class="section-header wow fadeInUp" data-wow-duration="1.5s">
				<h2>Diamond Members</h2>
			</div>
            <div class="row profile-grid">
                <div class="col-lg-3 col-md-4 col-sm-6 profile-item">
                    <div class="profile-card">
                        <div class="profile-img">
                            <a href="other-profile">
                                <img src="{{ asset('assets/images/profile/single/01.jpg') }}" alt="..." class="w-100 h-100">
                            </a>
                            <span class="profile-badge">
                                <img src="{{ asset('assets/images/icons/diamond.png') }}" alt="..."  data-bs-toggle="tooltip" title="Diamond Member">
                            </span>
                        </div>
                        <div class="profile-detail">
                            <div class="profile-info">
                                <div class="name d-flex">
                                    <div class="active-status"  data-bs-toggle="tooltip" title="Online"></div>
                                    <div class="profile-name">
                                        <h6 class="mb-0 text-truncate">Johnny Wilson</h6>
                                    </div>
                                    <div class="tick">
                                        {{--  <i class="fa-solid fa-circle-check text-primary"  data-bs-toggle="tooltip" title="Verified"></i>  --}}
                                        <i class="fa-solid fa-circle-check text-success"  data-bs-toggle="tooltip" title="Trusted"></i>
                                    </div>
                                </div>
                                <p class="mb-0">Canada</p>
                                <button class="text-truncate mb-0 event-link" data-bs-toggle="modal" data-bs-target="#event-popup">
                                    <small>
                                        <span class="event-name">Travel : </span>
                                        <span class="event-time">12-12-2022 2:00 PM</span>
                                    </small>
                                </button>
                            </div>
                            <div class="d-flex align-items-center">
                                <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 profile-item">
                    <div class="profile-card">
                        <div class="profile-img">
                            <a href="other-profile">
                                <img src="{{ asset('assets/images/profile/single/04.jpg') }}" alt="..." class="w-100 h-100">
                            </a>
                            <span class="profile-badge">
                                <img src="{{ asset('assets/images/icons/diamond.png') }}" alt="..."  data-bs-toggle="tooltip" title="Diamond Member">
                            </span>
                        </div>
                        <div class="profile-detail">
                            <div class="profile-info">
                                <div class="name d-flex">
                                    <div class="profile-name">
                                        <h6 class="mb-0 text-truncate">Johnny Wilson</h6>
                                    </div>
                                    <div class="tick">
                                        <i class="fa-solid fa-circle-check text-primary"  data-bs-toggle="tooltip" title="Verified"></i>
                                        <i class="fa-solid fa-circle-check text-success"  data-bs-toggle="tooltip" title="Trusted"></i>
                                    </div>
                                </div>
                                <p class="mb-0">Canada</p>
                                <button class="text-truncate mb-0 event-link" data-bs-toggle="modal" data-bs-target="#event-popup">
                                    <small>
                                        <span class="event-name">Travel : </span>
                                        <span class="event-time">12-12-2022 2:00 PM</span>
                                    </small>
                                </button>
                            </div>
                            <div class="d-flex align-items-center">
                                <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>



@endsection
