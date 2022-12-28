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
                        <h2>Interest</h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>-</li>
                        <li class="active">Interest</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    {{-- ===========================================
                    INTEREST PAGE
    =========================================== --}}
    <section class="container-fluid interest-section">
        {{--  <div class="container">  --}}
            <div class="tab-button">
                <button class="tablink flex-fill" onclick="openPage('viewedMe', this, '#b30101')" id="defaultOpen">Viewed Me</button>
                <button class="tablink flex-fill" onclick="openPage('favourited', this, '#b30101')">Favourited Me</button>
                <button class="tablink flex-fill" onclick="openPage('myfavourites', this, '#b30101')">My Favourites</button>
            </div>
<?php
  $currentUser = session()->get('clientid');
            $data = DB::table('views')
            ->leftJoin('clients','clients.id','=','views.user_id')
            ->where('views.view_user_id', $currentUser)
            ->select('clients.*','views.*')->get();
       
?>

            {{--  ========= Viewed Me =========  --}}
            <div id="viewedMe" class="tabcontent">
                <div class="row profile-grid">
                    @foreach($data as $new)
                   
                      
                    <div class="col-lg-3 col-md-4 col-sm-6 profile-item">
                     <a href="{{URL::to('other-profile',$new->user_id)}}">
                        <div class="profile-card">
                            <div class="profile-img">
                                
                                    <img src="{{ asset('uploads/image/'.$new->image) }}"alt="..." class="w-100 h-100">
                             
                                <span class="profile-badge">
                                    <img src="{{ asset('assets/images/icons/diamond.png') }}" alt="..."  data-bs-toggle="tooltip" title="Diamond Member">
                                </span>
                            </div>
                            <div class="profile-detail">
                                <div class="profile-info">
                                    <div class="name d-flex">
                                        <div class="active-status"  data-bs-toggle="tooltip" title="Online"></div>
                                        <div class="profile-name">
                                            <h6 class="mb-0 text-truncate">{{$new->username}}</h6>
                                        </div>
                                        <div class="tick">
                                            {{--  <i class="fa-solid fa-circle-check text-primary"  data-bs-toggle="tooltip" title="Verified"></i>  --}}
                                            <i class="fa-solid fa-circle-check text-success"  data-bs-toggle="tooltip" title="Trusted"></i>
                                        </div>
                                    </div>
                                    <p class="mb-0">{{$new->locate}}</p>
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
                          </a>
                    </div>
                     
                   @endforeach 
                    
                </div>
            </div>
<?php
   $currentUser = session()->get('clientid');
                       $user = DB::table('favourites')
                       ->leftJoin('clients','clients.id','=','favourites.user_id')
                       ->where('favourites.fav_user_id','=',$currentUser)
                       ->select('clients.*','favourites.*')
                        ->get();
                       
               
            ?> 
            {{--  ========= Favourited Me =========  --}}
            <div id="favourited" class="tabcontent">
                <div class="row profile-grid">
                    @foreach($user as $temp)
                  
                    <div class="col-lg-3 col-md-4 col-sm-6 profile-item">
                         <a href="{{URL::to('other-profile',$temp->user_id)}}">
                        <div class="profile-card">
                            <div class="profile-img">
                               
                                    <img src="{{ asset('uploads/image/'.$temp->image) }}" alt="..." class="w-100 h-100">
                              
                                <span class="profile-badge">
                                    <img src="{{ asset('assets/images/icons/gold.png') }}" alt="..."  data-bs-toggle="tooltip" title="Gold Member">
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
                                            <i class="fa-solid fa-circle-check text-primary"  data-bs-toggle="tooltip" title="Verified"></i>
                                            <i class="fa-solid fa-circle-check text-success"  data-bs-toggle="tooltip" title="Trusted"></i>
                                        </div>
                                    </div>
                                    <p class="mb-0">{{$temp->locate}}</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>
                                </div>
                            </div>
                        </div>
                          </a>
                    </div>
                    @endforeach
                  
                </div>
            </div>
            <?php
            $currentUser = session()->get('clientid');
                       $fav = DB::table('favourites')
                       ->leftJoin('clients','clients.id','=','favourites.fav_user_id')
                       ->where('favourites.user_id','=',$currentUser)
                       ->select('clients.*','favourites.*')
                        ->get();
               
            ?>
            {{--  ========= My Favourites =========  --}}
            <div id="myfavourites" class="tabcontent">
                <div class="row profile-grid">
                    @foreach($fav as $temp)
                  
                    <div class="col-lg-3 col-md-4 col-sm-6 profile-item">
                         <a href="{{URL::to('other-profile',$temp->fav_user_id)}}">
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
                                            <span class="event-name">Travel : </span>
                                            <span class="event-time">12-12-2022 2:00 PM</span>
                                        </small>
                                    </button>
                                </div>
                                <div class="d-flex align-items-center">
                                    <button class="like-btn"> <i class="fa-solid fa-heart text-theme"></i> </button>
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
                    <!--                <button class="like-btn"> <i class="fa-solid fa-heart text-theme"></i> </button>-->
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
                    <!--                {{--  <img src="{{ asset('assets/images/icons/gold.png') }}" alt="..."  data-bs-toggle="tooltip" title="Gold Member">  --}}-->
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
                    <!--                        {{--  <i class="fa-solid fa-circle-check text-primary"  data-bs-toggle="tooltip" title="Verified"></i>  --}}-->
                    <!--                        <i class="fa-solid fa-circle-check text-success"  data-bs-toggle="tooltip" title="Trusted"></i>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--                <p class="mb-0">Canada</p>-->
                    <!--            </div>-->
                    <!--            <div class="d-flex align-items-center">-->
                    <!--                <button class="like-btn"> <i class="fa-solid fa-heart text-theme"></i> </button>-->
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
                    <!--                <img src="{{ asset('assets/images/icons/diamond.png') }}" alt="..."  data-bs-toggle="tooltip" title="Diamond Member">-->
                    <!--            </span>-->
                    <!--        </div>-->
                    <!--        <div class="profile-detail">-->
                    <!--            <div class="profile-info">-->
                    <!--                <div class="name d-flex">-->
                    <!--                    <div class="profile-name">-->
                    <!--                        <h6 class="mb-0 text-truncate">Johnny Wilson</h6>-->
                    <!--                    </div>-->
                    <!--                    <div class="tick">-->
                    <!--                        <i class="fa-solid fa-circle-check text-primary"  data-bs-toggle="tooltip" title="Verified"></i>-->
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
                    <!--                <button class="like-btn"> <i class="fa-solid fa-heart text-theme"></i> </button>-->
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
                    <!--                <button class="like-btn"> <i class="fa-solid fa-heart text-theme"></i> </button>-->
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
                    <!--                <img src="{{ asset('assets/images/icons/gold.png') }}" alt="..."  data-bs-toggle="tooltip" title="Gold Member">-->
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
                    <!--                <button class="like-btn"> <i class="fa-solid fa-heart text-theme"></i> </button>-->
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
                    <!--                <button class="like-btn"> <i class="fa-solid fa-heart text-theme"></i> </button>-->
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
                    <!--                {{--  <img src="{{ asset('assets/images/icons/gold.png') }}" alt="..."  data-bs-toggle="tooltip" title="Gold Member">  --}}-->
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
                    <!--                        {{--  <i class="fa-solid fa-circle-check text-primary"  data-bs-toggle="tooltip" title="Verified"></i>  --}}-->
                    <!--                        <i class="fa-solid fa-circle-check text-success"  data-bs-toggle="tooltip" title="Trusted"></i>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <!--                <p class="mb-0">Canada</p>-->
                    <!--            </div>-->
                    <!--            <div class="d-flex align-items-center">-->
                    <!--                <button class="like-btn"> <i class="fa-solid fa-heart text-theme"></i> </button>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
            </div>
    </section>

    {{-- ===========================================
                    PAGINATION
    =========================================== --}}
    <div class="container-fluid pagination-container">
        <div class="container">
            <div class="pagination">
                <div class="previous">
                    <small>Previous</small>
                </div>
                <div class="page-numbers flex-fill text-center">
                    <ul class="d-flex justify-content-center align-items-center">
                        <li> <a href="#">1</a> </li>
                        <li> <a href="#">2</a> </li>
                        <li> <a href="#">3</a> </li>
                        <li> <a href="#">...</a> </li>
                    </ul>
                </div>
                <div class="next">
                    <small>Next</small>
                </div>
            </div>
        </div>
    </div>


@endsection
