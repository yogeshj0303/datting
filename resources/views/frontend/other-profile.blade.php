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
                        <h2>Others</h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>-</li>
                        <li class="active">{{$clients->username}}</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>


    {{-- ===========================================
                    PROFILE SECTION
    =========================================== --}}
    <section class="profile-section padding-tb">
        <div class="container">
            <div class="section-wrapper">
                <div class="member-profile">
                    <div class="profile-item">
                        <div class="profile-cover">
                            <img src="{{asset('assets/images/profile/cover.jpg')}}" alt="cover-pic" class="h-100">
                        </div>
                        <div class="profile-information">
                            <div class="profile-pic">
                                <img src="{{ asset('uploads/image/'.$clients->image) }}" alt="DP">
                            </div>
                            <div class="profile-name">
                                <h4>{{$clients->username}}</h4>
                                <p>{{$clients->last_seen}}</p>
                            </div>
                            <ul class="profile-contact">
                                <li>
                                    <a>
                                        <div class="icon">
                                            <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>
                                        </div>
                                        <div class="text">
                                            <p>Like</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="message">
                                        <div class="icon"><i class="icofont-envelope"></i></div>
                                        <div class="text">
                                            <p>Message</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <div class="icon-img">
                                            <img src="{{ asset('assets/images/icons/platinum.png') }}" alt="..." class="w-100 h-100" data-bs-toggle="tooltip" title="Platinum Member">
                                        </div>
                                        <div class="text">
                                              @if($clients->subs_id==0)
                                            <p>Pemium Member</p>
                                            @else
                                               <p>{{$clients->subs_name}}&nbsp; Member</p>
                                              @endif
                                        </div>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="profile-details">
                        <div class="tab-content" id="nav-tabContent">

                            <!-- Profile tab -->
                            <div class="tab-pane fade active show" id="profile">
                                <div>
                                    <div class="row">
                                        <div class="col-xl-8">
                                            <article>

                                                <div class="info-card mb-20">
                                                    <div class="info-card-title">
                                                        <h6>Request Private Photos</h6>
                                                        <button class="edit-btn">
                                                            <i class="fa-regular fa-paper-plane"></i> Request
                                                        </button>
                                                    </div>
                                                </div>

                                                <div class="info-card mb-20">
                                                    <div class="info-card-title">
                                                        <h6>Photos</h6>
                                                    </div>
                                                    <div class="info-card-content">
                                                
                                                      
                                                        <div class="photo-grid">
                                                              @php
                                                   
                                                     $photo = DB::table('multiple_images')->where('user_id',$data)->get();
                                                      @endphp
                                                            
                                                            
                                                      @foreach($photo as $temp)
                                                      @php
                                                      $images = explode(',',$temp->images);
                                                      $count= count($images);
                                                      $i=0;
                                                      
                                                      @endphp
                                                      
                                                            @for($i=0; $i<$count; $i++)
                                                      @if($temp->status==0)
                                                            <div class="public-photo-item">
                                                                <img src="{{ asset('uploads/image/'.$images[$i]) }}" class="w-100 h-100" alt="">
                                                            </div>
                                                             @endif
                                                            @endfor
                                                            @endforeach
                                                            <!--<div class="public-photo-item">-->
                                                            <!--    <img src="{{ asset('assets/images/profile/single/04.jpg') }}" class="w-100 h-100" alt="">-->
                                                            <!--</div>-->
                                                            <!--<div class="public-photo-item">-->
                                                            <!--    <img src="{{ asset('assets/images/profile/single/07.jpg') }}" class="w-100 h-100" alt="">-->
                                                            <!--</div>-->
                                                            <!--<div class="public-photo-item">-->
                                                            <!--    <img src="{{ asset('assets/images/profile/single/03.jpg') }}" class="w-100 h-100" alt="">-->
                                                            <!--</div>-->
                                                            <!--<div class="public-photo-item">-->
                                                            <!--    <img src="{{ asset('assets/images/profile/single/01.jpg') }}" class="w-100 h-100" alt="">-->
                                                            <!--</div>-->
                                                            <!--<div class="public-photo-item">-->
                                                            <!--    <img src="{{ asset('assets/images/profile/single/02.jpg') }}" class="w-100 h-100" alt="">-->
                                                            <!--</div>-->
                                                            <!--<div class="public-photo-item">-->
                                                            <!--    <img src="{{ asset('assets/images/profile/single/06.jpg') }}" class="w-100 h-100" alt="">-->
                                                            <!--</div>-->
                                                            <!--<div class="public-photo-item">-->
                                                            <!--    <img src="{{ asset('assets/images/profile/single/08.jpg') }}" class="w-100 h-100" alt="">-->
                                                            <!--</div>-->
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="info-card mb-20">
                                                    <div class="info-card-title">
                                                        <h6>Base Info</h6>
                                                    </div>
                                                    <div class="info-card-content">
                                                        <ul class="info-list">
                                                            <!--<li>-->
                                                            <!--    <p class="info-name">Name</p>-->
                                                            <!--    <p class="info-details">Ruchika Sen</p>-->
                                                            <!--</li>-->
                                                            <li>
                                                                <p class="info-name">Username</p>
                                                                <p class="info-details">{{$clients->username}}</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">E-Mail</p>
                                                                <p class="info-details">{{$clients->email}}</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">I'm a</p>
                                                                <p class="info-details">{{$clients->gender}}</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Loking for a</p>
                                                                <p class="info-details">{{$clients->intrest}}</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Who has</p>
                                                                <p class="info-details">{{$clients->relationship}}</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Age</p>
                                                                <p class="info-details">{{$age}}</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Availibility</p>
                                                                <p class="info-details">{{$clients->seeking_in_relation}}</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Date of Birth</p>
                                                                <p class="info-details">{{$clients->dob}}</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Address</p>
                                                                <p class="info-details">{{$clients->locate}}</p>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>

                                                <div class="info-card mb-20">
                                                    <div class="info-card-title">
                                                        <h6>Bio</h6>
                                                    </div>
                                                    <div class="info-card-content">
                                                        <p>{{$clients->impression}}.</p>
                                                    </div>
                                                </div>

                                                <div class="info-card mb-20">
                                                    <div class="info-card-title">
                                                        <h6>Summary</h6>
                                                    </div>
                                                    <div class="info-card-content">
                                                        <p>{{$clients->aboutme}}</p>
                                                    </div>
                                                </div>

                                                <div class="info-card">
                                                    <div class="info-card-title">
                                                        <h6>Physical info</h6>
                                                    </div>
                                                    <div class="info-card-content">
                                                        <ul class="info-list">
                                                            <li>
                                                                <p class="info-name">Height</p>
                                                                <p class="info-details">{{$clients->height}}</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Body Type</p>
                                                                <p class="info-details">{{$clients->bodytype}}</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Ethnicity</p>
                                                                <p class="info-details">{{$clients->ethinicity}}</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Education</p>
                                                                <p class="info-details">{{$clients->education}}</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Relationship</p>
                                                                <p class="info-details">{{$clients->relationship}}</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Children</p>
                                                                <p class="info-details">{{$clients->children}}</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Smoke</p>
                                                                <p class="info-details">{{$clients->smoke}}</p>
                                                            </li>
                                                            <li>
                                                                <p class="info-name">Drink</p>
                                                                <p class="info-details">{{$clients->drink}}</p>
                                                            </li>
                                                        </ul>

                                                    </div>
                                                </div>

                                            </article>
                                        </div>

                                        <!-- Aside Part -->
                                        <div class="col-xl-4">
                                            <aside class="mt-5 mt-xl-0">
                                            @foreach($event as $temp)
                                                <div class="widget event-widget" data-bs-toggle="modal" data-bs-target="#event-popup">
                                                    <div class="widget-inner">
                                                        <div class="widget-title d-flex justify-content-between align-items-center">
                                                            <div>
                                                                <h5>{{$temp->event_name}}</h5>
                                                                <p class="mb-0"><small> <strong> Date : </strong> <span>{{$temp->event_date}}</span> </small></p>
                                                                <p class="mb-0"><small> <strong> Venue : </strong> <span>{{$temp->event_location}}</span> </small></p>
                                                             <p class="mb-0"><small> <strong> Duration : </strong> <span>{{$temp->event_duration}}</span> </small></p>
                                                            
                                                            </div>
                                                            <!--<div class="open-btn">-->
                                                            <!--    <button class="py-2 px-3">View</button>-->
                                                            <!--</div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                                <!--<div class="widget event-widget" data-bs-toggle="modal" data-bs-target="#event-popup">-->
                                                <!--    <div class="widget-inner">-->
                                                <!--        <div class="widget-title d-flex justify-content-between align-items-center">-->
                                                <!--            <div>-->
                                                <!--                <h5>Clubbing</h5>-->
                                                <!--                <p class="mb-0"><small> <strong> Date : </strong> <span>29-11-2022</span> </small></p>-->
                                                <!--                <p class="mb-0"><small> <strong> Venue : </strong> <span>Delhi</span> </small></p>-->
                                                <!--            </div>-->
                                                <!--            <div class="open-btn">-->
                                                <!--                <button class="py-2 px-3">View</button>-->
                                                <!--            </div>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--</div>-->

                                                <div class="widget tab-widget">
                                                    <div class="widget-inner">
                                                        <div class="widget-title">
                                                            <h5>{{$clients->username}}</h5>
                                                        </div>
                                                        <div class="widget-content">
                                                            <ul class="list-unstyled">
                                                                <li class="tab-item member">
                                                                    <span class="tab-head"> <i class="fa-regular fa-clock"></i> Member Since</span>
                                                                    {{$clients->joindate}}
                                                                </li>
                                                                <li class="tab-item member">
                                                                    <span class="tab-head"> <i class="fa-solid fa-calendar-day"></i> Last Active</span>
                                                                    20-12-2022
                                                                </li>
                                                                <li class="tab-item member">
                                                                    <span class="tab-head"> <i class="fa-solid fa-location-dot"></i> Recent</span>
                                                                    Pune
                                                                </li>
                                                                <li class="tab-item">
                                                                    <a href="#">
                                                                        {{--  <i class="fa-solid fa-circle-question"></i>  --}}
                                                                        <i class="fa-solid fa-circle-check text-primary"  data-bs-toggle="tooltip" title="Trusted"></i>
                                                                        <span> Verified </span>
                                                                    </a>
                                                                </li>
                                                                <li class="tab-item">
                                                                    <a href="#">
                                                                        {{--  <i class="fa-solid fa-circle-question"></i>  --}}
                                                                        <i class="fa-solid fa-circle-check text-success"  data-bs-toggle="tooltip" title="Trusted"></i>
                                                                        <span> Trusted </span>
                                                                    </a>
                                                                </li>
                                                                <li class="tab-item">
                                                                    <a href="#">
                                                                        <i class="fa-brands fa-facebook"></i>
                                                                        Facebook
                                                                    </a>
                                                                </li>
                                                                <li class="tab-item">
                                                                    <a href="#">
                                                                        <i class="fa-brands fa-instagram"></i>
                                                                        Instagram
                                                                    </a>
                                                                </li>
                                                                <li class="tab-item">
                                                                    <a href="#">
                                                                        <i class="fa-brands fa-linkedin"></i>
                                                                        Linked In
                                                                    </a>
                                                                </li>
                                                                <li class="tab-item">
                                                                    <a href="{{URL::to('blocked')}}/{{$clients->id}}" class="member">
                                                                         <input type="hidden" name="block_user_id" value="{{$clients->id}}">
                                                                        <span class="tab-head text-danger"> <i class="fa-solid fa-ban"></i> Block User </span>
                                                                        <i class="fa-solid fa-chevron-right text-danger"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="tab-item" data-bs-toggle="modal" data-bs-target="#report">
                                                                    <a class="member">     
                                                                        <span class="tab-head text-danger"> <i class="fa-solid fa-bug"></i> Report User </span>
                                                                        <i class="fa-solid fa-chevron-right text-danger"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="tab-item">
                                                                    <a href="{{URL::to('hidemember')}}/{{$clients->id}}" class="member">
                                                                         <input type="hidden" name="hide_user_id" value="{{$clients->id}}">
                                                                        <span class="tab-head text-danger"> <i class="fa-solid fa-eye-slash"></i> Hide Profile </span>
                                                                        <i class="fa-solid fa-chevron-right text-danger"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="widget like-member">
                                                    <div class="widget-inner">
                                                        <div class="widget-title">
                                                            <h5>Recommended</h5>
                                                        </div>
                                                        <div class="widget-content">
                                                            <div class="row row-cols-3 row-cols-sm-auto g-3">
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="other-profile" data-rel="lightcase">
                                                                            <img src="assets/images/widget/01.jpg" alt="img">
                                                                        </a>
                                                                        <div class="profile-like">
                                                                            <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="other-profile" data-rel="lightcase">
                                                                            <img src="assets/images/widget/02.jpg" alt="img">
                                                                        </a>
                                                                        <div class="profile-like">
                                                                            <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="other-profile" data-rel="lightcase">
                                                                            <img src="assets/images/widget/03.jpg" alt="img">
                                                                        </a>
                                                                        <div class="profile-like">
                                                                            <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="other-profile" data-rel="lightcase">
                                                                            <img src="assets/images/widget/04.jpg" alt="img">
                                                                        </a>
                                                                        <div class="profile-like">
                                                                            <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="other-profile" data-rel="lightcase">
                                                                            <img src="assets/images/widget/05.jpg" alt="img">
                                                                        </a>
                                                                        <div class="profile-like">
                                                                            <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="other-profile" data-rel="lightcase">
                                                                            <img src="assets/images/widget/06.jpg" alt="img">
                                                                        </a>
                                                                        <div class="profile-like">
                                                                            <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="other-profile" data-rel="lightcase">
                                                                            <img src="assets/images/widget/07.jpg" alt="img">
                                                                        </a>
                                                                        <div class="profile-like">
                                                                            <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="other-profile" data-rel="lightcase">
                                                                            <img src="assets/images/widget/08.jpg" alt="img">
                                                                        </a>
                                                                        <div class="profile-like">
                                                                            <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="image-thumb">
                                                                        <a href="other-profile" data-rel="lightcase">
                                                                            <img src="assets/images/widget/09.jpg" alt="img">
                                                                        </a>
                                                                        <div class="profile-like">
                                                                            <button class="like-btn"> <i class="fa-regular fa-heart text-theme"></i> </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </aside>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    {{-- ===========================================
                    REPORT DIALOG
    =========================================== --}}
    <div class="modal fade" id="report" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{URL::to('reported')}}" method="POST">
                   
                    @csrf
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Report Member</h1>
                    <button type="button" data-bs-dismiss="modal" aria-label="Close">x</button>
                </div>
                <div class="modal-body">
                    <div class="report-item">
                        Choose a reason to report:
                    </div>
                    <div class="report-list">
                        <select class="form-select group-input" name="report_title" aria-label="Default select example">
                            <option selected>---</option>
                            <optgroup label="Criminal Activities">
                                <option value="Threats from a member">Threats from a member</option>
                                <option value="Other suspected criminal activity">Other suspected criminal activity</option>
                                <option value="Theft">Theft</option>
                                <option value="Other suspected criminal activity - banned">Other suspected criminal activity - banned</option>
                                <option value="Physical assault">Physical assault</option>
                            </optgroup>
                            <optgroup label="Underage">
                                <option value="Suspected underage">Suspected underage</option>
                                <option value="Potentially looking for underage members - banned">Potentially looking for underage members - banned</option>
                                <option value="Potentially looking for underage members">Potentially looking for underage members</option>
                            </optgroup>
                            <optgroup label="Profile Content">
                                <option value="Nudity">Nudity</option>
                                <option value="Inappropriate Vibes">Inappropriate Vibes</option>
                                <option value="Picture not of the person">Picture not of the person</option>
                                <option value="Inappropriate profile content">Inappropriate profile content</option>
                                <option value="User deceased or missing">User deceased or missing</option>
                                <option value="Inappropriate photo">Inappropriate photo</option>
                            </optgroup>
                            <optgroup label="Fake/Scam Member">
                                <option value="Using the site for commercial activity">Using the site for commercial activity</option>
                                <option value="Spammer">Spammer</option>
                                <option value="Scammer/phishing attempt - banned">Scammer/phishing attempt - banned</option>
                                <option value="Using the site for commercial activity - banned">Using the site for commercial activity - banned</option>
                                <option value="Scammer/phishing attempt">Scammer/phishing attempt</option>
                            </optgroup>
                            <optgroup label="Escorts and Soliciting">
                                <option value="Using escort terminology">Using escort terminology</option>
                                <option value="Using Escort Terminology - banned">Using Escort Terminology - banned</option>
                                <option value="Soliciting sex in exchange for compensation">Soliciting sex in exchange for compensation</option>
                            </optgroup>
                            <optgroup label="Inappropriate Conduct">
                                <option value="Excessive rudeness">Excessive rudeness</option>
                                <option value="Inappropriate messages">Inappropriate messages</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="report-item">
                        <textarea name="report_des" rows="5" placeholder="Describe your issue(optional)"></textarea>
                    </div>
                    <div class="report-btn">
                        <button type="submit" class="py-2 my-3 w-100">Report</button>
                          <input type="hidden" name="report_user_id" value="{{$clients->id}}">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
        
    </section>
@endsection
