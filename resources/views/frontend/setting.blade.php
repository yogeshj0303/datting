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
                        <h2>Settings</h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>-</li>
                        <li class="active">Settings</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    {{-- ===========================================
                    SETTINGS SECTION
    =========================================== --}}
    <section class="setting-section container-fluid">
        <div>
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="setting-tab">
                        <div class="setting-link activity-tab">Your Activity</div>
                        <div class="setting-link notification-tab">Notification</div>
                        <div class="setting-link account-tab">Account</div>
                        <div class="setting-link others-tab">Others</div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8">

                    <!-- ========== ACTIVITY TAB =============== -->
                    <div class="setting-content" id="activity">
                        <div class="tab-heading">
                            <h4 class="mb-0">Your Activity</h4>
                        </div>
                        <hr>
                        <div class="setting-holder">
                            <div class="setting-item">
                                <div class="setting-name flex-fill">
                                    <p>Show Online Status</p>
                                </div>
                                <div class="setting-icon">
                                    {{--  <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>  --}}
                                    <i class="fa-solid fa-lock"></i>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-name flex-fill">
                                    <p>Show when you view someone</p>
                                </div>
                                <div class="setting-icon">
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-name flex-fill">
                                    <p>Show when you favourite someone</p>
                                </div>
                                <div class="setting-icon">
                                    {{--  <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>  --}}
                                    <i class="fa-solid fa-lock"></i>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-name flex-fill">
                                    <p>Show Join Date</p>
                                </div>
                                <div class="setting-icon">
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-name flex-fill">
                                    <p>Show in Search, Dashboard & Options</p>
                                </div>
                                <div class="setting-icon">
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-name flex-fill">
                                    <p>Show recent Login location</p>
                                </div>
                                <div class="setting-icon">
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ========== NOTIFICATION TAB =============== -->
                    <div class="setting-content" id="notification">
                        <div class="tab-heading">
                            <h4 class="mb-0">Notification</h4>
                        </div>
                        <hr>
                        <div class="setting-holder">
                            <div class="setting-item">
                                <div class="setting-name flex-fill">
                                    <p>Push Notification</p>
                                </div>
                                <div class="setting-icon">
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-name flex-fill">
                                    <p>E-Mail Notification</p>
                                </div>
                                <div class="setting-icon">
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ========== ACCOUNT TAB =============== -->
                    <div class="setting-content" id="account">
                        <div class="tab-heading">
                            <h4 class="mb-0">Your Activity</h4>
                        </div>
                        <hr>
                        <div class="setting-holder">
                            <div class="setting-item">
                                <div class="setting-name flex-fill">
                                    <p>Show User-Generated Content</p>
                                </div>
                                <div class="setting-icon">
                                    <label class="switch">
                                        <input type="checkbox">
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>

                            <button class="setting-item" data-toggle="modal" data-target="#change-password">
                                <div class="setting-name flex-fill">
                                    <p>Change Password</p>
                                </div>
                                <div class="setting-icon">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </button>
                            <div class="modal" id="change-password">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Change Password</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <form action="changepassword" method="POST">
                                        @csrf
                                    <div class="modal-body">
                                        <div class="group-input">
                                            <input type="text" name="current_password" class="w-100" placeholder="Old Password">
                                        </div>
                                        <div class="group-input">
                                            <input type="text" name="new_password" class="w-100" placeholder="New Password">
                                        </div>
                                        <div class="group-input">
                                            <input type="text" name="new_confirm_password" class="w-100" placeholder="Confirm New Password">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="submit" class="btn btn-danger" >Update</button>
                                    </div>
                                    </form>
                                    
                                  </div>
                                </div>
                            </div>

                            <button class="setting-item" data-toggle="modal" data-target="#security-question">
                                <div class="setting-name flex-fill">
                                    <p>Security Questions</p>
                                </div>
                                <div class="setting-icon">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </button>
                            <div class="modal" id="security-question">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Security Question</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-center">
                                            Security questions will be used for password recovery if you forget
                                            your password and cannot access your email.
                                        </p>
                                        <div class="disable-btn">
                                            <div class="disable-status flex-fill">
                                                <p class="mb-0 toggle-text">Disabled</p>
                                            </div>
                                            <div class="disble-icon">
                                                {{--  <input type="checkbox" data-toggle="toggle" data-size="xs" id="security-check">  --}}
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <span class="slider round"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="enable-inputs">
                                            <div class="group-dropdown">
                                                <select name="sec-ques-1" class="flex-fill" >
                                                    <option value="">Select Question 1</option>
                                                    <option value="asian">What was your childhood name?</option>
                                                    <option value="african">What is the name of your favourite childhood friend?</option>
                                                    <option value="asian">What was the name of hospital where you were born?</option>
                                                    <option value="african">What was the name of your third grade teacher?</option>
                                                    <option value="asian">What was name and model of your first car?</option>
                                                </select>
                                                <input type="text" name="sec-ans-1" placeholder="Answer">
                                            </div>
                                            <div class="group-dropdown">
                                                <select name="sec-ques-2" class="flex-fill" >
                                                    <option value="">Select Question 2</option>
                                                    <option value="asian">What was your childhood name?</option>
                                                    <option value="african">What is the name of your favourite childhood friend?</option>
                                                    <option value="asian">What was the name of hospital where you were born?</option>
                                                    <option value="african">What was the name of your third grade teacher?</option>
                                                    <option value="asian">What was name and model of your first car?</option>
                                                </select>
                                                <input type="text" name="sec-ans-1" placeholder="Answer">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-danger" data-dismiss="modal">Save</button>
                                    </div>
                                  </div>
                                </div>
                            </div>

                            <a href="hidden-member" class="setting-item">
                                <div class="setting-name flex-fill">
                                    <p>Hidden Members</p>
                                </div>
                                <div class="setting-icon">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </a>

                            <a href="blocked-member" class="setting-item">
                                <div class="setting-name flex-fill">
                                    <p>Blocked Members</p>
                                </div>
                                <div class="setting-icon">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </a>

                            <div class="setting-item">
                                <div class="setting-name flex-fill">
                                    <p>Photo Permission</p>
                                </div>
                                <div class="setting-icon">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </div>

                            <button class="setting-item"  data-toggle="modal" data-target="#video-permission">
                                <div class="setting-name flex-fill">
                                    <p>Video Permission</p>
                                </div>
                                <div class="setting-icon">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </button>
                            <div class="modal" id="video-permission">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Video Permissions</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="modal-part">
                                            <div class="modal-head flex-fill">
                                                <p class="mb-0">Video Chat Availibilty</p>
                                            </div>
                                            <div class="modal-item d-flex">
                                                <div class="item-name flex-fill">
                                                    <p>Block Incoming Video Calls</p>
                                                </div>
                                                <div class="item-icon">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="modal-item d-flex">
                                                <div class="item-name flex-fill">
                                                    <p>Only receive calls from people I've conversed with</p>
                                                </div>
                                                <div class="item-icon">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-part">
                                            <div class="modal-head flex-fill">
                                                <p class="mb-0">Video Chat Settings</p>
                                            </div>
                                            <div class="modal-item d-flex">
                                                <div class="item-name flex-fill">
                                                    <p>Incoming Ringtone</p>
                                                </div>
                                                <div class="item-icon">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>

                            <a href="subscription" class="setting-item">
                                <div class="setting-name flex-fill">
                                    <p>Membership & Billing</p>
                                </div>
                                <div class="setting-icon">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </a>

                            <button class="setting-item" data-toggle="modal" data-target="#measurement-system">
                                <div class="setting-name flex-fill">
                                    <p>Preferred Measurement System</p>
                                </div>
                                <div class="setting-icon">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </button>
                            <div class="modal" id="measurement-system">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Preferred Measurement System</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="text-center">
                                            Choose which type of measurement system you prefer to use in this app.
                                        </p>
                                        <div class="modal-part">
                                            <div class="modal-item d-flex">
                                                <div class="item-name flex-fill">
                                                    <p>Metric</p>
                                                </div>
                                                <div class="item-icon">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="modal-item d-flex">
                                                <div class="item-name flex-fill">
                                                    <p>Imperial</p>
                                                </div>
                                                <div class="item-icon">
                                                    <label class="switch">
                                                        <input type="checkbox">
                                                        <span class="slider round"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>

                            <button class="setting-item" data-toggle="modal" data-target="#additional-data">
                                <div class="setting-name flex-fill">
                                    <p>Additional Data Privacy Option</p>
                                </div>
                                <div class="setting-icon">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </button>
                            <div class="modal" id="additional-data">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Additional Data Privacy Option</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div>
                                            <div class="modal-head flex-fill">
                                                <p class="mb-0">Request for Information</p>
                                            </div>
                                            <p class="text-center">
                                                If you would like to request an export of your data from options you may
                                                do so below. This is not instantaneous and you will receive an email when
                                                the export is ready,
                                            </p>
                                            <p>Password Required : </p>
                                            <input type="password" name="password" class="w-100" placeholder="Password">
                                            <button type="button" class="request" data-dismiss="modal">Request Information</button>
                                        </div>
                                        <div>
                                            <div class="modal-head flex-fill">
                                                <p class="mb-0">Request Deletion for Information</p>
                                            </div>
                                            <p class="text-center">
                                                If you would like to request youe Options account and associated
                                                personal data to be deleted, you may do so below. While this is
                                                not instantaneous, it is irreversible.
                                            </p>
                                            <p class="note">
                                                Note : If you have submitted an information requested above, you should
                                                wait to delete your account until that process is completed, otherwise
                                                your information request may not successfully proceed.
                                            </p>
                                            <p>Password Required : </p>
                                            <input type="password" name="password" class="w-100" placeholder="Password">
                                            <button type="button" class="request" data-dismiss="modal">Request Information</button>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                            </div>

                            <button class="setting-item" data-toggle="modal" data-target="#disable-deactivate">
                                <div class="setting-name flex-fill">
                                    <p>Disable or Delete Account</p>
                                </div>
                                <div class="setting-icon">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </button>
                            <div class="modal" id="disable-deactivate">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">Taking a break?</h4>
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <p>If you're just hoping to take a break, or you aren't sure whether you'll
                                            return to Options, we recommend disabling your account, not deleting it.</p>
                                        <p class="mb-0">Disable your account</p>
                                        <ul>
                                            <li>Your profile and photos will be removed from the site, but we'll keep
                                                everything for you in case you return so that you can start right where
                                                 you left off.</li>
                                            <li>To reenable your account, simply log back in at any time.</li>
                                        </ul>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Disable</button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="mb-0">Delete your account</p>
                                        <ul>
                                            <li class="text-theme">THIS IS PERMANENT.</li>
                                            <li>If you want to use Options again, you'll need to create a new account and fill out your profile again.</li>
                                            <li>Note: Any messages you've sent will still be in the recipients' inboxes, even if you delete your account</li>
                                            <li>Read more about how account deletion works in our FAQ.</li>
                                        </ul>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Delete</button>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ========== NOTIFICATION TAB =============== -->
                    <div class="setting-content" id="others">
                        <div class="tab-heading">
                            <h4 class="mb-0">Others</h4>
                        </div>
                        <hr>
                        <div class="setting-holder">
                            <div class="setting-item">
                                <div class="setting-name flex-fill">
                                    <p>Terms of Use</p>
                                </div>
                                <div class="setting-icon">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-name flex-fill">
                                    <p>Privacy Policy</p>
                                </div>
                                <div class="setting-icon">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </div>
                            <div class="setting-item">
                                <div class="setting-name flex-fill">
                                    <p>About</p>
                                </div>
                                <div class="setting-icon">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>




@endsection
