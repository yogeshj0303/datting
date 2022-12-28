
@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Dashboard')

@section('content')
<style>
    .avatar-wrapper {
  position: relative;
  width: 70px;
  margin-left: 58px;
  height: 50px;
}

.avatar {
  vertical-align: middle;
  width: 100%;
  height: 100%;
  border-radius: 50%;
}

.verified-avatar-icon {
  position: absolute;
  right: 30px;
  bottom: 0;
  border-radius: 40%;
  background: green;
  width: 22px;
  height: 16px;
  
  //style for inner text
  display: grid;
  text-align: center;
  line-height: 15px;
  color: white;
  font-size: 10px;
  font-weight: bolder;
}
body {
  background: whitesmoke;
  font-family: 'Open Sans', sans-serif;
}
.container {
  max-width: 960px;
  margin: 30px auto;
  padding: 20px;
}
h1 {
  font-size: 20px;
  text-align: center;
  margin: 20px 0 20px;
}
h1 small {
  display: block;
  font-size: 15px;
  padding-top: 8px;
  color: gray;
}
.avatar-upload {
  position: relative;
  max-width: 205px;
  margin: 50px auto;
}
.avatar-upload .avatar-edit {
  position: absolute;
  right: 12px;
  z-index: 1;
  top: 10px;
}
.avatar-upload .avatar-edit input {
  display: none;
}
.avatar-upload .avatar-edit input + label {
  display: inline-block;
  width: 34px;
  height: 34px;
  margin-bottom: 0;
  border-radius: 100%;
  background: #FFFFFF;
  border: 1px solid transparent;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
  cursor: pointer;
  font-weight: normal;
  transition: all 0.2s ease-in-out;
}
.avatar-upload .avatar-edit input + label:hover {
  background: #f1f1f1;
  border-color: #d6d6d6;
}
.avatar-upload .avatar-edit input + label:after {
  content: "\f040";
  font-family: 'FontAwesome';
  color: #757575;
  position: absolute;
  top: 10px;
  left: 0;
  right: 0;
  text-align: center;
  margin: auto;
}
.avatar-upload .avatar-preview {
  width: 192px;
  height: 192px;
  position: relative;
  border-radius: 100%;
  border: 6px solid #F8F8F8;
  box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
}
.avatar-upload .avatar-preview > div {
  width: 100%;
  height: 100%;
  border-radius: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center;
}

</style>
<body class="hold-transition sidebar-mini">

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              
                   <div class="avatar-upload">
      
        <div class="avatar-preview">
            <div id="imagePreview" style="background-image: url({{asset('uploads/image/'.$data->image )}});">
                 @if($data->verify_status=="1")
                   <div class="verified-avatar-icon">✓</div> 
                   @endif
            </div>
        </div>
    

                <!--<div class="text-center avatar-wrapper">-->
                <!--  <img class="profile-user-img img-fluid img-circle"-->
                <!--       src="{{asset('uploads/image/'.$data->image )}}"-->
                <!--       alt="User profile picture" >-->
                <!--       @if($data->verify_status=="1")-->
                <!--     <div class="verified-avatar-icon">✓</div>   -->
                <!--     @endif-->
                     
                <!--</div>-->

                <h3 class="profile-username text-center" style="margin-top: 20px;">{{$data->username}}</h3>

                <p class="text-muted text-center">{{$data->ethinicity}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Favourite Me</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Viewed</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                  </li>
                </ul>
                     @if($data->verify_status==1)
                          <a href="{{url('admin/verify-user/status/0')}}/{{$data->id}}" class="btn btn-success btn-block">Verified</a>
                       @elseif($data->verify_status==0)
                          <a href="{{url('admin/verify-user/status/1')}}/{{$data->id}}"  class="btn btn-primary btn-block">Verify User</a>
                    @endif
                
                   @if($data->block_status==1)
                          <a href="{{url('admin/block-user/status/0')}}/{{$data->id}}" class="btn btn-danger btn-block">Unblock User</a>
                       @elseif($data->block_status==0)
                          <a href="{{url('admin/block-user/status/1')}}/{{$data->id}}"  class="btn btn-danger btn-block">Block User</a>
                    @endif
            
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                {{$data->education}}
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">{{$data->locate}}</p>

                <hr>
                
                <strong><i class="fas fa-pencil-alt mr-1"></i> Impression</strong><i class="fas fa-edit" style="margin-left: 103px; color:brown;"></i>

                <p class="text-muted">
                 {{$data->impression}}
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> About Me</strong><i class="fas fa-edit"  style="margin-left: 118px; color:brown;"></i>

                <p class="text-muted">{{$data->aboutme}}</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item" ><a class="nav-link active" href="#activity" data-toggle="tab">Details</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">User Report</a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Event Form</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <!--<div class="post">-->
                    <!--  <div class="user-block">-->
                    <!--    <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">-->
                    <!--    <span class="username">-->
                    <!--      <a href="#">Jonathan Burke Jr.</a>-->
                    <!--      <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>-->
                    <!--    </span>-->
                    <!--    <span class="description">Shared publicly - 7:30 PM today</span>-->
                    <!--  </div>-->
                      <!-- /.user-block -->
                    <!--  <p>-->
                    <!--    Lorem ipsum represents a long-held tradition for designers,-->
                    <!--    typographers and the like. Some people hate it and argue for-->
                    <!--    its demise, but others ignore the hate as they create awesome-->
                    <!--    tools to help create filler text for everyone from bacon lovers-->
                    <!--    to Charlie Sheen fans.-->
                    <!--  </p>-->

                    <!--  <p>-->
                    <!--    <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>-->
                    <!--    <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>-->
                    <!--    <span class="float-right">-->
                    <!--      <a href="#" class="link-black text-sm">-->
                    <!--        <i class="far fa-comments mr-1"></i> Comments (5)-->
                    <!--      </a>-->
                    <!--    </span>-->
                    <!--  </p>-->

                    <!--  <input class="form-control form-control-sm" type="text" placeholder="Type a comment">-->
                    <!--</div>-->
                    <!-- /.post -->

                    <!-- Post -->
                    <!--<div class="post clearfix">-->
                    <!--  <div class="user-block">-->
                    <!--    <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">-->
                    <!--    <span class="username">-->
                    <!--      <a href="#">Sarah Ross</a>-->
                    <!--      <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>-->
                    <!--    </span>-->
                    <!--    <span class="description">Sent you a message - 3 days ago</span>-->
                    <!--  </div>-->
                      <!-- /.user-block -->
                    <!--  <p>-->
                    <!--    Lorem ipsum represents a long-held tradition for designers,-->
                    <!--    typographers and the like. Some people hate it and argue for-->
                    <!--    its demise, but others ignore the hate as they create awesome-->
                    <!--    tools to help create filler text for everyone from bacon lovers-->
                    <!--    to Charlie Sheen fans.-->
                    <!--  </p>-->

                    <!--  <form class="form-horizontal">-->
                    <!--    <div class="input-group input-group-sm mb-0">-->
                    <!--      <input class="form-control form-control-sm" placeholder="Response">-->
                    <!--      <div class="input-group-append">-->
                    <!--        <button type="submit" class="btn btn-danger">Send</button>-->
                    <!--      </div>-->
                    <!--    </div>-->
                    <!--  </form>-->
                    <!--</div>-->
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post">
                     
                     
                        <span class="username">
                        <h5>Public Photos</h5>
                          <!--<a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>-->
                        </span>
                        
                      
                      <!-- /.user-block -->
                      <div class="row mb-3">
                      
                     
                          <div class="row">
                             @php
                                                   
                                                     $photo = DB::table('multiple_images')->where('user_id',$reqId)->get();
                                                      @endphp
                                                            
                                                            
                                                      @foreach($photo as $temp)
                                                      @php
                                                      $images = explode(',',$temp->images);
                                                      $count= count($images);
                                                      $i=0;
                                                      
                                                      @endphp
                                                      
                                                            @for($i=0; $i<$count; $i++)
                                                      @if($temp->status==0)
                            <div class="col-sm-3">
                              <img class="img-fluid mb-2" src="{{ asset('uploads/image/'.$images[$i]) }}" alt="Photo">
                              <!--<img class="img-fluid" src="{{ asset('uploads/image/'.$images[$i]) }}" alt="Photo">-->
                            </div>
                              @endif
                                                            @endfor
                                                            @endforeach
                        
                            <!-- /.col -->
                          </div>
                          
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!--<p>-->
                      <!--  <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>-->
                      <!--  <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>-->
                      <!--  <span class="float-right">-->
                      <!--    <a href="#" class="link-black text-sm">-->
                      <!--      <i class="far fa-comments mr-1"></i> Comments (5)-->
                      <!--    </a>-->
                      <!--  </span>-->
                      <!--</p>-->
                    </div>
                    
                    <div class="post">
                     
                     
                        <span class="username">
                        <h5>Private Photos</h5>
                          <!--<a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>-->
                        </span>
                        
                      
                      <!-- /.user-block -->
                      <div class="row mb-3">
                     
                          <div class="row">
                            @foreach($photo as $temp)
                                                      @php
                                                      $images = explode(',',$temp->images);
                                                      $count= count($images);
                                                      $i=0;
                                                      
                                                      @endphp
                                                      
                                                            @for($i=0; $i<$count; $i++)
                                                      @if($temp->status==1)
                            <div class="col-sm-3">
                              <img class="img-fluid mb-2" src="{{ asset('uploads/image/'.$images[$i]) }}" alt="Photo">
                              <!--<img class="img-fluid" src="{{ asset('uploads/image/'.$images[$i]) }}" alt="Photo">-->
                            </div>
                              @endif
                                                            @endfor
                                                            @endforeach<!-- /.col -->
                          
                            <!-- /.col -->
                          </div>

                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!--<p>-->
                      <!--  <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>-->
                      <!--  <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>-->
                      <!--  <span class="float-right">-->
                      <!--    <a href="#" class="link-black text-sm">-->
                      <!--      <i class="far fa-comments mr-1"></i> Comments (5)-->
                      <!--    </a>-->
                      <!--  </span>-->
                      <!--</p>-->
                    </div>
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                   <table class="table table-bordered">

                        <tr>
                            <th>S no</th>
                            <th>Report By</th>
                           <th>Report Reason</th>
                            <th>Report Description</th>
                        </tr>
                    @foreach ($report as $key => $user)

                            <tr>

                                <td>{{ ++$key }}</td>

                                 <td>{{ $user->username }}</td>

                                <td>{{ $user->report_title }}</td>
                                <td>{{ $user->report_des }}</td>
                            </tr>

                        @endforeach

                  

                    </table>


                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <table class="table table-bordered">

                        <tr>


                            <th>S no</th>

                            <th>Event Name</th>
                           <th>Travel Duration</th>
                            <th>Event Location</th>
                             <th>Event Date</th>
                              <th>Event Description</th>
                        </tr>
                    @foreach ($event as $key => $user)

                            <tr>

                                <td>{{ ++$key }}</td>

                                 <td>{{ $user->event_name }}</td>

                                <td>{{ $user->event_duration }}</td>
                                <td>{{ $user->event_location }}</td>
                                <td>{{ $user->event_date }}</td>
                                <td>{{ $user->event_des }}</td>
                            </tr>

                        @endforeach

                  

                    </table>

                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
  
    <!-- /.content -->
@endsection

