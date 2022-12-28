@extends('frontend.layout.main-after')
@section('main2.container')
<style>
    div {
  position: relative;
  overflow: hidden;
}
input[type="file"] {
  position: absolute;
  font-size: 50px;
  opacity: 0;
  right: 0;
  top: 0;
}
</style>

    {{-- ===========================================
                    PAGE HEADER
    =========================================== --}}
    <section class="page-header-section style-1 breadcrumb-section">
        <div class="container">
            <div class="page-header-content">
                <div class="page-header-inner">
                    <div class="page-title">
                        <h2>My Profile</h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>-</li>
                        <li class="active">{{ $clients->username }}</li>
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
                            <img src="assets/images/profile/cover.jpg" alt="cover-pic" class="h-100">
                            <div class="edit-photo custom-upload">
                                <div class="file-btn"><i class="icofont-camera"></i>
                                    Edit Photo</div>
                                <input type="file">
                            </div>
                        </div>
                        <div class="profile-information">
                            <div class="profile-pic">
                                <img src="{{ asset('uploads/image/'.$clients->image) }}" alt="DP">
                                <div class="custom-upload">
                                    <form action="update-image" method="post" enctype="multipart/form-data">
                                         @csrf
                                    <div class="file-btn">
                                       <span class="d-none d-lg-inline-block"> <i class="icofont-camera"></i>
                                        Edit</span>
                                        <input type="file" name="image">
                                        <span class="d-lg-none mr-0"><i class="icofont-plus"></i></span>
                                    </div>
                                     <button type="submit" >Upload</button>
                                    </form>
                                </div>
                            </div>
                            <div class="profile-name">
                                <h4>{{ $clients->username }}</h4>
                                {{--  <p>Active 02 Minutes Ago</p>  --}}
                            </div>
                            <ul class="profile-contact">
                                <li>
                                    <a href="event-form">
                                        <div class="icon"><i class="fa-solid fa-calendar-day"></i></div>
                                        <div class="text">
                                            <p>Add Event</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="message">
                                        <div class="icon"><i class="icofont-envelope"></i></div>
                                        <div class="text">
                                            <p>Messages</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <div class="icon-img">
                                            <img src="{{ asset('assets/images/icons/diamond.png') }}" alt="..." class="w-100 h-100" data-bs-toggle="tooltip" title="Diamond Member">
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
                                                        <h6>Public Photos</h6>
                                                        <form action="/multiimage" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                        <div class="file btn  btn-danger">
                                                       <input type="hidden" value="0" name="status">
						                            	<input type="file" name="image[]" multiple/><i class="fa-solid fa-plus"></i>
                                                        </div>
                                                        <button type="submit" >Upload</button>
                                                        </form>
                                                    </div>
                                                    <div class="info-card-content">
                                                    
                                                        <div class="photo-grid">
                                                      @php
                                                      $clientId = session()->get('clientid');
                                                      $new = DB::table('multiple_images')->where('user_id',$clientId)->latest()->get();
                                                      
                                                     
                                                      @endphp
                                                      @foreach($new as $temp)
                                                      @php
                                                      $images = explode(',',$temp->images);
                                                      $count= count($images);
                                                      $i=0;
                                                      
                                                      @endphp
                                                      
                                                      @for($i=0; $i<$count; $i++)
                                                      @if($temp->status==0)
                                                            <div class="public-photo-item">
                                                                <img src="{{ asset('uploads/image/'.$images[$i]) }}" class="w-100 h-100" alt="">
                                                                <div class="public-private-btn">
                                                                    <button type="button" data-bs-toggle="tooltip" title="Make Private">
                                                                        <i class="fa-solid fa-lock-open"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            @endif
                                                            @endfor
                                                            @endforeach
                                                            <!--<div class="public-photo-item">-->
                                                            <!--    <img src="{{ asset('assets/images/profile/single/07.jpg') }}" class="w-100 h-100" alt="">-->
                                                            <!--    <div class="public-private-btn">-->
                                                            <!--        <button type="button" data-bs-toggle="tooltip" title="Make Private">-->
                                                            <!--            <i class="fa-solid fa-lock"></i>-->
                                                            <!--        </button>-->
                                                            <!--    </div>-->
                                                            <!--</div>-->
                                                            <!--<div class="public-photo-item">-->
                                                            <!--    <img src="{{ asset('assets/images/profile/single/03.jpg') }}" class="w-100 h-100" alt="">-->
                                                            <!--    <div class="public-private-btn">-->
                                                            <!--        <button type="button" data-bs-toggle="tooltip" title="Make Private">-->
                                                            <!--            <i class="fa-solid fa-lock"></i>-->
                                                            <!--        </button>-->
                                                            <!--    </div>-->
                                                            <!--</div>-->
                                                            <!--<div class="public-photo-item">-->
                                                            <!--    <img src="{{ asset('assets/images/profile/single/01.jpg') }}" class="w-100 h-100" alt="">-->
                                                            <!--    <div class="public-private-btn">-->
                                                            <!--        <button type="button" data-bs-toggle="tooltip" title="Make Private">-->
                                                            <!--            <i class="fa-solid fa-lock"></i>-->
                                                            <!--        </button>-->
                                                            <!--    </div>-->
                                                            <!--</div>-->
                                                            <!--<div class="public-photo-item">-->
                                                            <!--    <img src="{{ asset('assets/images/profile/single/02.jpg') }}" class="w-100 h-100" alt="">-->
                                                            <!--    <div class="public-private-btn">-->
                                                            <!--        <button type="button" data-bs-toggle="tooltip" title="Make Private">-->
                                                            <!--            <i class="fa-solid fa-lock"></i>-->
                                                            <!--        </button>-->
                                                            <!--    </div>-->
                                                            <!--</div>-->
                                                            <!--<div class="public-photo-item">-->
                                                            <!--    <img src="{{ asset('assets/images/profile/single/06.jpg') }}" class="w-100 h-100" alt="">-->
                                                            <!--    <div class="public-private-btn">-->
                                                            <!--        <button type="button" data-bs-toggle="tooltip" title="Make Private">-->
                                                            <!--            <i class="fa-solid fa-lock"></i>-->
                                                            <!--        </button>-->
                                                            <!--    </div>-->
                                                            <!--</div>-->
                                                            <!--<div class="public-photo-item">-->
                                                            <!--    <img src="{{ asset('assets/images/profile/single/08.jpg') }}" class="w-100 h-100" alt="">-->
                                                            <!--    <div class="public-private-btn">-->
                                                            <!--        <button type="button" data-bs-toggle="tooltip" title="Make Private">-->
                                                            <!--            <i class="fa-solid fa-lock"></i>-->
                                                            <!--        </button>-->
                                                            <!--    </div>-->
                                                            <!--</div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                                 
                                                <div class="info-card mb-20">
                                                    <div class="info-card-title">
                                                        <h6>Private Photos</h6>
                                                        <form action="/multiimage" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                        <div class="file btn  btn-danger">
                                                         <input type="hidden" value="1" name="status">
						                            	<input type="file" name="image[]" multiple/><i class="fa-solid fa-plus"></i>
                                                        </div>
                                                        <button type="submit" >Upload</button>
                                                        </form>
                                                    </div>
                                                    
                                                    <div class="info-card-content">
                                                     
                                                        <div class="photo-grid">
                                                             @foreach($new as $temp)
                                                      @php
                                                      $images = explode(',',$temp->images);
                                                      $count= count($images);
                                                      $i=0;
                                                      
                                                      @endphp
                                                       @for($i=0; $i<$count; $i++)
                                                      @if($temp->status==1)
                                                            <div class="public-photo-item">
                                                              
                                                                <img src="{{ asset('uploads/image/'.$images[$i]) }}" class="w-100 h-100" alt="">
                                                                <div class="public-private-btn">
                                                                    <button type="button" data-bs-toggle="tooltip" title="Make Public">
                                                                        <i class="fa-solid fa-lock"></i>
                                                                    </button>
                                                                </div>
                                                            </div> @endif
                                                            @endfor
                                                            @endforeach
                                                            <!--<div class="public-photo-item">-->
                                                            <!--    <img src="{{ asset('assets/images/profile/single/05.jpg') }}" class="w-100 h-100" alt="">-->
                                                            <!--    <div class="public-private-btn">-->
                                                            <!--        <button type="button" data-bs-toggle="tooltip" title="Make Public">-->
                                                            <!--            <i class="fa-solid fa-lock-open"></i>-->
                                                            <!--        </button>-->
                                                            <!--    </div>-->
                                                            <!--</div>-->
                                                            <!--<div class="public-photo-item">-->
                                                            <!--    <img src="{{ asset('assets/images/profile/single/02.jpg') }}" class="w-100 h-100" alt="">-->
                                                            <!--    <div class="public-private-btn">-->
                                                            <!--        <button type="button" data-bs-toggle="tooltip" title="Make Public">-->
                                                            <!--            <i class="fa-solid fa-lock-open"></i>-->
                                                            <!--        </button>-->
                                                            <!--    </div>-->
                                                            <!--</div>-->
                                                            <!--<div class="public-photo-item">-->
                                                            <!--    <img src="{{ asset('assets/images/profile/single/06.jpg') }}" class="w-100 h-100" alt="">-->
                                                            <!--    <div class="public-private-btn">-->
                                                            <!--        <button type="button" data-bs-toggle="tooltip" title="Make Public">-->
                                                            <!--            <i class="fa-solid fa-lock-open"></i>-->
                                                            <!--        </button>-->
                                                            <!--    </div>-->
                                                            <!--</div>-->
                                                            <!--<div class="public-photo-item">-->
                                                            <!--    <img src="{{ asset('assets/images/profile/single/07.jpg') }}" class="w-100 h-100" alt="">-->
                                                            <!--    <div class="public-private-btn">-->
                                                            <!--        <button type="button" data-bs-toggle="tooltip" title="Make Public">-->
                                                            <!--            <i class="fa-solid fa-lock-open"></i>-->
                                                            <!--        </button>-->
                                                            <!--    </div>-->
                                                            <!--</div>-->
                                                            <!--<div class="public-photo-item">-->
                                                            <!--    <img src="{{ asset('assets/images/profile/single/02.jpg') }}" class="w-100 h-100" alt="">-->
                                                            <!--    <div class="public-private-btn">-->
                                                            <!--        <button type="button" data-bs-toggle="tooltip" title="Make Public">-->
                                                            <!--            <i class="fa-solid fa-lock-open"></i>-->
                                                            <!--        </button>-->
                                                            <!--    </div>-->
                                                            <!--</div>-->
                                                            <!--<div class="public-photo-item">-->
                                                            <!--    <img src="{{ asset('assets/images/profile/single/03.jpg') }}" class="w-100 h-100" alt="">-->
                                                            <!--    <div class="public-private-btn">-->
                                                            <!--        <button type="button" data-bs-toggle="tooltip" title="Make Public">-->
                                                            <!--            <i class="fa-solid fa-lock-open"></i>-->
                                                            <!--        </button>-->
                                                            <!--    </div>-->
                                                            <!--</div>-->
                                                            <!--<div class="public-photo-item">-->
                                                            <!--    <img src="{{ asset('assets/images/profile/single/04.jpg') }}" class="w-100 h-100" alt="">-->
                                                            <!--    <div class="public-private-btn">-->
                                                            <!--        <button type="button" data-bs-toggle="tooltip" title="Make Public">-->
                                                            <!--            <i class="fa-solid fa-lock-open"></i>-->
                                                            <!--        </button>-->
                                                            <!--    </div>-->
                                                            <!--</div>-->
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="info-card mb-20">
                                                    <div class="info-card-title">
                                                        <h6>Base Info</h6>
                                                      <button class="edit-btn" data-toggle="modal" data-target="#edit_info">
                                                            <i class="fa-sharp fa-solid fa-pen-to-square"></i> Edit
                                                        </button>
                                                    </div>
                                                    <div class="info-card-content">
                                                       
                                                        <ul class="info-list">
                                                            <!--<li>-->
                                                            <!--    <p class="info-name">Name</p>-->
                                                            <!--    <p class="info-details">{{$clients->name}}</p>-->
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
                                                                <p class="info-details">{{$clients->personaliity}}</p>
                                                            </li>
                                                            <li>
                                                               
                                                                <p class="info-name">Age</p>
                                                                <p class="info-details">{{$age}}</p>
                                                            </li>
                                                            <!--<li>-->
                                                            <!--    <p class="info-name">Availibility</p>-->
                                                            <!--    <p class="info-details">Real & Virtual Meet</p>-->
                                                            <!--</li>-->
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
                                               <div class="modal" id="edit_info">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Edit Base Info</h4>
                                                                <button class="close" type="button" data-dismiss="modal">&times;</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="updatebaseinfo" method="post">
                                                                    @csrf
                                                                    <!--<div class="group-input">-->
                                                                    <!--    <input type="text" name="username" placeholder="Name" required >-->
                                                                    <!--</div>-->
                                                                    <div class="group-input">
                                                                        <input type="text" name="username" value="{{$clients->username}}" placeholder="Username" required class="w-100">
                                                                    </div>
                                                                    <div class="group-input">
                                                                        <input type="email" name="email" value="{{$clients->email}}" placeholder="E-Mail" required class="w-100">
                                                                    </div>
                                                                    <div class="group-dropdown">
                                                                        <label for="gender">I am : </label>
                                                                        <select name="gender" class="flex-fill">
                                                                            <option value="{{$clients->gender}}">{{$clients->gender}}</option>
                                                                            <option value="man">Man</option>
                                                                            <option value="woman">Woman</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="group-dropdown">
                                                                        <label for="intrest">Looking for : </label>
                                                                        <select name="intrest" class="flex-fill" >
                                                                            <option value="{{$clients->intrest}}">{{$clients->intrest}}</option>
                                                                            <option value="man">Man</option>
                                                                            <option value="woman">Woman</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="group-dropdown">
                                                                        <label for="personaliity">Who has : </label>
                                                                        <select name="personaliity" class="flex-fill" >
                                                                            <option value="{{$clients->personaliity}}">{{$clients->personaliity}}</option>
                                                                            <option value="Success & Wealth">Success & Wealth</option>
                                                                            <option value="Looks & Charms">Looks & Charms</option>
                                                                        </select>
                                                                    </div>
                                                                    <!--<div class="group-dropdown">-->
                                                                    <!--    <label for="height">Availibility : </label>-->
                                                                    <!--    <select name="height" class="flex-fill">-->
                                                                    <!--        <option value="">---</option>-->
                                                                    <!--        <option value="real">Real Meet</option>-->
                                                                    <!--        <option value="virtual">Virtual Meet</option>-->
                                                                    <!--        <option value="both">Both</option>-->
                                                                    <!--    </select>-->
                                                                    <!--</div>-->
                                                                    <div class="group-input">
                                                                        <input type="text" name="dob" value="{{$clients->dob}}" placeholder="Birth Date" onfocus="(this.type='date')" required class="w-100">
                                                                    </div>
                                                                    <div class="group-input">
                                                                        <input type="text" name="locate" value="{{$clients->locate}}" placeholder="Address" required class="w-100">
                                                                    </div>
                                                                     <div class="modal-footer">
                                                                         <button class="btn btn-danger" type="submit">Update</button>
                                                                     </div>
                                                                </form>
                                                            </div>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                              
                                              
                                                 <div class="info-card mb-20">
                                                    <div class="info-card-title">
                                                        <h6>Bio</h6>
                                                        <button class="edit-btn" data-toggle="modal" data-target="#edit_bio">
                                                            <i class="fa-sharp fa-solid fa-pen-to-square"></i> Edit
                                                        </button>
                                                    </div>
                                                    <div class="info-card-content">
                                                        <p>{{$clients->impression}}</p>
                                                    </div>
                                                </div>
                                                <div class="modal" id="edit_bio">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Edit Bio</h4>
                                                                <button class="close" type="button" data-dismiss="modal">&times;</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="updatebio" method="post">
                                                                    @csrf
                                                                    <div class="group-input">
                                                                        <textarea name="impression" rows="5" class="w-100" placeholder="For an eye-catching first impression!" required>{!! $clients->impression !!}</textarea>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button class="btn btn-danger" type="submit" >Update</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="info-card mb-20">
                                                    <div class="info-card-title">
                                                        <h6>Myself Summary</h6>
                                                        <button class="edit-btn" data-toggle="modal" data-target="#edit_summary">
                                                            <i class="fa-sharp fa-solid fa-pen-to-square"></i> Edit
                                                        </button>
                                                    </div>
                                                    <div class="info-card-content">
                                                        <!--<p>Collaboratively innovate compelling mindshare after-->
                                                        <!--    prospective partnerships Competently sereiz long-term-->
                                                        <!--    high-impact internal or "organic" sources via user friendly-->
                                                        <!--    strategic themesr areas creat Dramatically coordinate-->
                                                        <!--    premium partnerships rather than standards compliant-->
                                                        <!--    technologies ernd Dramatically matrix ethical collaboration-->
                                                        <!--    and idea-sharing through opensource methodologies and-->
                                                        <!--    Intrinsicly grow collaborative platforms vis-a-vis effective-->
                                                        <!--    scenarios. Energistically strategize cost effective ideas-->
                                                        <!--    before the worke unde.</p>-->
                                                        <p>{{$clients->aboutme}}</p>
                                                    </div>
                                                </div>
                                                <div class="modal" id="edit_summary">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Edit Summary</h4>
                                                                <button class="close" type="button" data-dismiss="modal">&times;</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="Updateaboume" method="post">
                                                                    @csrf
                                                                    <div class="group-input">
                                                                        <textarea name="aboutme" rows="8" class="w-100" placeholder="Tell a bit about yoourself!" required>{!! $clients->aboutme !!}</textarea>
                                                                    </div>
                                                                      <div class="modal-footer">
                                                                        <button class="btn btn-danger" type="submit" >Update</button>
                                                                     </div>
                                                                </form>
                                                            </div>
                                                          
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="info-card">
                                                    <div class="info-card-title">
                                                        <h6>Physical info</h6>
                                                        <button class="edit-btn" data-toggle="modal" data-target="#edit_physical">
                                                            <i class="fa-sharp fa-solid fa-pen-to-square"></i> Edit
                                                        </button>
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
                                                <div class="modal" id="edit_physical">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Edit Physical Info</h4>
                                                                <button class="close" type="button" data-dismiss="modal">&times;</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="updateprofile" method="post">
                                                                    @csrf
                                                                    <div class="group-dropdown">
                                                                        <label for="height">Height : </label>
                                                                        <select name="height" class="flex-fill">
                                                                            <option value="{{$clients->height}}">{{$clients->height}}</option>
                                                                            <option value="137cm">137cm</option>
                                                                            <option value="137cm">137cm</option>
                                                                            <option value="137cm">137cm</option>
                                                                            <option value="137cm">137cm</option>
                                                                            <option value="137cm">137cm</option>
                                                                            <option value="137cm">137cm</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="group-dropdown">
                                                                        <label for="body">Body Type : </label>
                                                                        <select name="bodytype" class="flex-fill" >
                                                                            <option value="{{$clients->bodytype}}">{{$clients->bodytype}}</option>
                                                                            <option value="slim">Slim</option>
                                                                            <option value="athletic">Athletic</option>
                                                                            <option value="average">Average</option>
                                                                            <option value="curvy">Curvy</option>
                                                                            <option value="overweight">Overweight</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="group-dropdown">
                                                                        <label for="ethinicity">Ethnicity : </label>
                                                                        <select name="ethinicity" class="flex-fill" >
                                                                            <option value="{{$clients->ethinicity}}">{{$clients->ethinicity}}</option>
                                                                            <option value="asian">Asian</option>
                                                                            <option value="african">African</option>
                                                                            <option value="east-indian">East Indian</option>
                                                                            <option value="middle-east">Middle Eastern</option>
                                                                            <option value="asian">Asian</option>
                                                                            <option value="african">African</option>
                                                                            <option value="east-indian">East Indian</option>
                                                                            <option value="middle-east">Middle Eastern</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="group-dropdown">
                                                                        <label for="education">Education : </label>
                                                                        <select name="education" class="flex-fill" >
                                                                            <option value="{{$clients->education}}">{{$clients->education}}</option>
                                                                            <option value="High School">High School</option>
                                                                            <option value="Intermediate">Intermediate</option>
                                                                            <option value="Bachelor Degree">Bachelor Degree</option>
                                                                            <option value="Graduate Degree">Graduate Degree</option>
                                                                            <option value="PhD">PhD</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="group-dropdown">
                                                                        <label for="relationship">Relationship : </label>
                                                                        <select name="relationship" class="flex-fill" >
                                                                            <option value="{{$clients->relationship}}">{{$clients->relationship}}</option>
                                                                            <option value="Single">Single</option>
                                                                            <option value="Married">Married</option>
                                                                            <option value="Open Relationship">Open Relationship</option>
                                                                            <option value="Divorced">Divorced</option>
                                                                            <option value="Widowed">Widowed</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="group-dropdown">
                                                                        <label for="children">Children : </label>
                                                                        <select name="children" class="flex-fill" >
                                                                            <option value="{{$clients->children}}">{{$clients->children}}</option>
                                                                            <option value="Yes">Yes</option>
                                                                            <option value="No">No</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="group-dropdown">
                                                                        <label for="smoke">Smoke : </label>
                                                                        <select name="smoke" class="flex-fill" >
                                                                            <option value="{{$clients->smoke}}">{{$clients->smoke}}</option>
                                                                            <option value="Non Smoker">Non Smoker</option>
                                                                            <option value="Light Smoker">Light Smoker</option>
                                                                            <option value="Heavy Smoker">Heavy Smoker</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="group-dropdown">
                                                                        <label for="drink">Drink : </label>
                                                                        <select name="drink" class="flex-fill" >
                                                                            <option value="{{$clients->drink}}">{{$clients->drink}}</option>
                                                                            <option value="Non Drinker">Non Drinker</option>
                                                                            <option value="Social Drinker">Social Drinker</option>
                                                                            <option value="Heavy Drinker">Heavy Drinker</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                <button class="btn btn-danger" type="submit">Update</button>
                                                            </div>
                                                                </form>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>

                                            </article>
                                        </div>

                                        <!-- Aside Part -->
                                        <div class="col-xl-4">
                                            <aside class="mt-5 mt-xl-0">
                                                <div class="widget tab-widget">
                                                    <div class="widget-inner">
                                                        <div class="widget-title">
                                                            <h5>{{ $clients->username }}</h5>
                                                        </div>
                                                        <div class="widget-content">
                                                            <ul class="list-unstyled">
                                                                <li class="tab-item member">
                                                                    <span class="tab-head"> <i class="fa-regular fa-clock"></i> Member Since</span>
                                                                    29-11-2022
                                                                </li>
                                                                <li class="tab-item">
                                                                    <a href="id-verified">
                                                                        {{--  <i class="fa-solid fa-circle-question"></i>  --}}
                                                                        <i class="fa-solid fa-circle-check text-primary"></i>
                                                                        <span> Get Your ID Verified </span>
                                                                    </a>
                                                                </li>
                                                                <li class="tab-item">
                                                                    <a href="#">
                                                                        <i class="fa-solid fa-circle-question"></i>
                                                                        {{--  <i class="fa-solid fa-circle-check text-success"></i>  --}}
                                                                        <span> Connect Your Facebook </span>
                                                                    </a>
                                                                </li>
                                                                <li class="tab-item">
                                                                    <a href="#">
                                                                        <i class="fa-solid fa-circle-question"></i>
                                                                        {{--  <i class="fa-solid fa-circle-check text-success"></i>  --}}
                                                                        <span> Connect Your Instagram </span>
                                                                    </a>
                                                                </li>
                                                                <li class="tab-item">
                                                                    <a href="#">
                                                                        <i class="fa-solid fa-circle-question"></i>
                                                                        {{--  <i class="fa-solid fa-circle-check text-success"></i>  --}}
                                                                        <span> Connect Your LinkedIn </span>
                                                                    </a>
                                                                </li>
                                                                <li class="tab-item">
                                                                    <a href="setting" class="member">
                                                                        <span class="tab-head">
                                                                            <i class="fa-solid fa-gear"></i>
                                                                            Settings
                                                                        </span>
                                                                        <i class="fa-solid fa-chevron-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="tab-item">
                                                                    <a href="ticket" class="member">
                                                                        <span class="tab-head">
                                                                            <i class="fa-solid fa-ticket"></i>
                                                                            Raise Ticket
                                                                        </span>
                                                                        <i class="fa-solid fa-chevron-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="tab-item">
                                                                    <a class="member" data-bs-toggle="modal" data-bs-target="#rate-options">
                                                                        <span class="tab-head">
                                                                            <i class="fa-solid fa-star"></i>
                                                                            Rate Options
                                                                        </span>
                                                                        <i class="fa-solid fa-chevron-right"></i>
                                                                    </a>
                                                                </li>
                                                                <div class="modal fade" id="rate-options" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Rate Options</h1>
                                                                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">x</button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div>
                                                                                    <p id="text-area">How was your Experience?</p>
                                                                                </div>
                                                                                <div class="center">
                                                                                    <div id="rate" class="rate text-center mb-4">
                                                                                        <label id="star1" onclick="rate(1)"></label>
                                                                                        <label id="star2" onclick="rate(2)"></label>
                                                                                        <label id="star3" onclick="rate(3)"></label>
                                                                                        <label id="star4" onclick="rate(4)"></label>
                                                                                        <label id="star5" onclick="rate(5)"></label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="feedback">
                                                                                    <textarea name="feedback" rows="3" class="p-2" placeholder="Enter your Valuable Feedback!"></textarea>
                                                                                </div>
                                                                                <div class="submit-btn">
                                                                                    <button class="w-100 p-2 mt-2 mb-1">Submit</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <li class="tab-item">
                                                                    <a href="logoutuser" class="member">
                                                                        <span class="tab-head text-danger">
                                                                            <i class="fa-solid fa-arrow-right-from-bracket text-danger"></i>
                                                                            Log Out
                                                                        </span>
                                                                        <i class="fa-solid fa-chevron-right text-danger"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget search-widget">
                                                    <div class="widget-inner">
                                                        <div class="widget-title">
                                                            <h5>Filter Search Member</h5>
                                                        </div>
                                                        <div class="widget-content">
                                                            <p>Serious Dating With Options. Your Perfect
                                                                Match is Just a Click Away.</p>
                                                            <form action="" class="banner-form">
                                                                <div class="gender">
                                                                    <div class="custom-select right w-100">
                                                                        <select class="">
                                                                            <option value="0">I am a </option>
                                                                            <option value="1">Male</option>
                                                                            <option value="2">Female</option>
                                                                            <option value="3">Others</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="person">
                                                                    <div class="custom-select right w-100">
                                                                        <select class="">
                                                                            <option value="0">Looking for</option>
                                                                            <option value="1">Male</option>
                                                                            <option value="2">Female</option>
                                                                            <option value="3">Others</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="age">
                                                                    <div
                                                                        class="right d-flex justify-content-between w-100">
                                                                        <div class="custom-select">
                                                                            <select>
                                                                                <option value="1">18</option>
                                                                                <option value="2">19</option>
                                                                                <option value="3">20</option>
                                                                                <option value="4">21</option>
                                                                                <option value="5">22</option>
                                                                                <option value="6">23</option>
                                                                                <option value="7">24</option>
                                                                                <option value="8">25</option>
                                                                                <option value="9">26</option>
                                                                                <option value="10">27</option>
                                                                                <option value="11">28</option>
                                                                                <option value="13">29</option>
                                                                                <option value="14">30</option>
                                                                            </select>
                                                                        </div>

                                                                        <div class="custom-select">
                                                                            <select>
                                                                                <option value="1">36</option>
                                                                                <option value="2">19</option>
                                                                                <option value="3">20</option>
                                                                                <option value="4">21</option>
                                                                                <option value="5">22</option>
                                                                                <option value="6">23</option>
                                                                                <option value="7">24</option>
                                                                                <option value="8">25</option>
                                                                                <option value="9">26</option>
                                                                                <option value="10">27</option>
                                                                                <option value="11">28</option>
                                                                                <option value="13">29</option>
                                                                                <option value="14">30</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="city">
                                                                    <div class="custom-select right w-100">
                                                                        <select class="">
                                                                            <option value="0">Choose Your Country
                                                                            </option>
                                                                            <option value="1">USA</option>
                                                                            <option value="2">UK</option>
                                                                            <option value="3">Spain</option>
                                                                            <option value="4">Brazil</option>
                                                                            <option value="5">France</option>
                                                                            <option value="6">Newzeland</option>
                                                                            <option value="7">Australia</option>
                                                                            <option value="8">Bangladesh</option>
                                                                            <option value="9">Turki</option>
                                                                            <option value="10">Chine</option>
                                                                            <option value="11">India</option>
                                                                            <option value="12">Canada</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="interest">
                                                                    <div class="custom-select right w-100">
                                                                        <select class="">
                                                                            <option value="0">Your Interests
                                                                            </option>
                                                                            <option value="1">Gaming</option>
                                                                            <option value="2">Fishing</option>
                                                                            <option value="3">Skydriving</option>
                                                                            <option value="4">Swimming</option>
                                                                            <option value="5">Racing</option>
                                                                            <option value="6">Hangout</option>
                                                                            <option value="7">Tranvelling</option>
                                                                            <option value="8">Camping</option>
                                                                            <option value="9">Touring</option>
                                                                            <option value="10">Acting</option>
                                                                            <option value="11">Dancing</option>
                                                                            <option value="12">Singing</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <button class="">Find Your Partner</button>

                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="widget like-member">
                                                    <div class="widget-inner">
                                                        <div class="widget-title">
                                                            <h5>You may Like</h5>
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
    </section>


@endsection
