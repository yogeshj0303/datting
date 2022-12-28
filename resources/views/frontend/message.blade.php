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
                        <h2>Messages</h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="profile">Home</a></li>
                        <li>-</li>
                        <li class="active">Messages</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    {{-- ===========================================
                    MESSAGES SECTION
    =========================================== --}}
    <section class="message-section container-fluid">
        <div>
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="message-tab">
                        <div class="message-link" id="inbox-tab">
                            Inbox
                            <span class="badge rounded-pill">15</span>
                        </div>
                        <div class="message-link" id="sent-tab">
                            Sent
                            <span class="badge rounded-pill">5</span>
                        </div>
                        <div class="message-link" id="archieve-tab">
                            Archieve
                            {{--  <span class="badge rounded-pill">15</span>  --}}
                        </div>
                        <div class="message-link" id="filtered-tab">
                            Filtered Out
                            {{--  <span class="badge rounded-pill">15</span>  --}}
                        </div>
                        <div class="message-link" id="gold-tab">
                            Gold Members
                            <span class="badge rounded-pill">2</span>
                        </div>
                        <div class="message-link" id="platinum-tab">
                            Platinum Members
                            <span class="badge rounded-pill">3</span>
                        </div>
                        <div class="message-link" id="diamond-tab">
                            Diamond Members
                            <span class="badge rounded-pill">5</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 chat-box">

                    {{--  MESSAGE CHAT BOX  --}}
                    <div class="chat-main">
                        <div class="chat-grid-main">
                            <div class="chat-head">
                                <div class="d-flex">
                                    <div class="back-btn">
                                        <i class="fa-solid fa-arrow-left-long"></i>
                                    </div>
                                    <div class="person-img">
                                        <a href="other-profile">
                                            <img src="{{ asset('assets/images/profile/01.jpg') }}" alt="..." class="w-100 h-100">
                                        </a>
                                    </div>
                                    <div class="person-detail flex-fill">
                                        <div class="d-flex flex-column h-100">
                                            <div class="person-name m-auto">
                                                Harry Porter
                                            </div>
                                            <div class="person-status d-flex">
                                                <span><i class="fa-solid fa-circle text-success"></i></span> Online
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <div class="show-grid-btn">
                                        <button class="w-100 h-100 show-grid-button">
                                            <i class="fa-solid fa-id-badge"></i>
                                        </button>
                                    </div>
                                    <div class="dropdown">
                                        <button  type="button" data-toggle="dropdown">
                                            <i class="fa-solid fa-ellipsis-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                          <li><a href="#">Archieve Conversation</a></li>
                                          <li><a href="#">Delete Conversation</a></li>
                                          <li><a href="#">Block User</a></li>
                                          <li><a href="#">Hide User</a></li>
                                          <li><a data-bs-toggle="modal" data-bs-target="#report">Report User</a></li>
                                          <li><a href="#">Pin Chat</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="chat-message">

                                <div class="chats">
                                    <div class="messages">
                                        <div class="my-message">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, eius.</p>
                                        </div>
                                    </div>

                                    <div class="messages">
                                        <div class="other-message">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, eius.</p>
                                        </div>
                                    </div>

                                    <div class="messages">
                                        <div class="my-message">
                                            <p>Lorem ipsum dolor sit.</p>
                                        </div>
                                    </div>

                                    <div class="messages">
                                        <div class="other-message">
                                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        </div>
                                    </div>

                                    <div class="messages">
                                        <div class="my-message">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, eius.Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, eius.</p>
                                        </div>
                                    </div>

                                    <div class="messages">
                                        <div class="other-message">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, eius.Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, eius.</p>
                                        </div>
                                    </div>
                                    <div class="messages">
                                        <div class="my-message">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, eius.</p>
                                        </div>
                                    </div>

                                    <div class="messages">
                                        <div class="other-message">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, eius.</p>
                                        </div>
                                    </div>

                                    <div class="messages">
                                        <div class="my-message">
                                            <p>Lorem ipsum dolor sit.</p>
                                        </div>
                                    </div>

                                    <div class="messages">
                                        <div class="other-message">
                                            <p>Lorem ipsum dolor sit amet consectetur.</p>
                                        </div>
                                    </div>

                                    <div class="messages">
                                        <div class="my-message">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, eius.Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, eius.</p>
                                        </div>
                                    </div>

                                    <div class="messages">
                                        <div class="other-message">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, eius.Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, eius.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="chat-foot">
                                <div class="input-file h-100">
                                    <label class="file-btn h-100" for="msgfile">
                                        <span class="mr-0"><i class="fa-solid fa-paperclip"></i></span>
                                    </label>
                                    <input type="file" name="messageFile" id="msgfile" class="d-none">
                                </div>
                                <div class="input-message h-100 flex-fill">
                                    <input type="text" name="message" placeholder="Message...">
                                </div>
                                <div class="send-message h-100">
                                    <button>
                                        <span><i class="fa-regular fa-paper-plane text-theme"></i></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="chat-grid-profile">
                            <div class="grid-photo">
                                <div>
                                    <img src="{{ asset('assets/images/profile/single/08.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="hide-grid-btn">
                                    <button class="w-100 h-100 hide-grid-button">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="recent-info">
                                <div class="recent-grid-box">
                                    <div>Userneme</div>
                                    <div>william_smith</div>
                                </div>
                                <div class="recent-grid-box">
                                    <div>Member Since</div>
                                    <div>10-11-2022</div>
                                </div>
                                <div class="recent-grid-box">
                                    <div>Recent</div>
                                    <div>Maharashtra</div>
                                </div>
                                <div class="recent-grid-box">
                                    <div>
                                        <span>Active Now</span>
                                        {{--  <span>Last Active</span>  --}}
                                    </div>
                                    <div>
                                        <div class="active-status"></div>
                                        {{--  <div>20-11-2022</div>  --}}
                                    </div>
                                </div>
                            </div>
                            <div class="recent-info">
                                <div class="recent-info-head">
                                    <div class="info-head">
                                        About
                                    </div>
                                </div>
                                <div class="recent-grid-box">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos sint
                                    non nisi, sit sapiente ipsam accusamus, officiis corporis nesciunt
                                    laudantium magnam, recusandae dignissimos quidem maiores. Aliquid
                                    ut sint odio iure.
                                </div>
                            </div>
                            <div class="recent-info">
                                <div class="recent-info-head">
                                    <div class="info-head">
                                        Basic Info
                                    </div>
                                </div>
                                <div class="recent-grid-box">
                                    <div>Height</div>
                                    <div>156cm</div>
                                </div>
                                <div class="recent-grid-box">
                                    <div>Body Type</div>
                                    <div>Slim</div>
                                </div>
                                <div class="recent-grid-box">
                                    <div>Ethnicity</div>
                                    <div>Asian</div>
                                </div>
                                <div class="recent-grid-box">
                                    <div>Education</div>
                                    <div>Graduation</div>
                                </div>
                                <div class="recent-grid-box">
                                    <div>Relationship</div>
                                    <div>Single</div>
                                </div>
                                <div class="recent-grid-box">
                                    <div>Children</div>
                                    <div>No</div>
                                </div>
                                <div class="recent-grid-box">
                                    <div>Smoke</div>
                                    <div>Light Smoker</div>
                                </div>
                                <div class="recent-grid-box">
                                    <div>Drink</div>
                                    <div>Social Drinker</div>
                                </div>
                            </div>
                            <div class="recent-info">
                                <div class="recent-info-head">
                                    <div class="info-head">
                                        Social
                                    </div>
                                </div>
                                <div class="social-link">
                                    <p><a href="#"><i class="icofont-facebook"></i> &nbsp; Facebook</a></p>
                                    <p><a href="#"><i class="icofont-instagram"></i> &nbsp; Instagram</a></p>
                                    <p><a href="#"><i class="icofont-linkedin"></i> &nbsp; LinkedIn</a></p>
                                </div>
                            </div>
                        </div>

                    </div>

                    {{--  PERSON LIST  --}}
                    <div class="chat-inbox" id="inbox">

                        <div class="chat-inbox-head">
                            <div class="inbox-head">
                                Inbox Messages
                            </div>
                            <div class="inbox-filters">
                                <div class="inbox-checkbox">
                                    <label for="unread">
                                        <input type="checkbox" name="unread"> Show Unread Only
                                    </label>
                                </div>
                                <div class="inbox-filter-btn">
                                    <button data-toggle="modal" data-target="#inbox-filter">
                                        <i class="fa-solid fa-sliders"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <form action="#">
                            <div class="search-bar">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text d-flow-root h-100 search-icon">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                      </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </div>
                        </form>

                        <hr>

                        <div class="chat-item">
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/01.jpg') }}" alt="..." class="w-100 h-100">
                                </div>

                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            <div class="active-status"></div> Harry Porter
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/02.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            Shaktiman
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/03.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            Junior G
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/04.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            <div class="active-status"></div> Emma Watson
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/01.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            Ronald Weisley
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/02.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            <div class="active-status"></div> Jack Smith
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/03.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            Pinnochio
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/04.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            Monica Ward
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/01.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            <div class="active-status"></div> Ronald Weisley
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/02.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            <div class="active-status"></div> Jack Smith
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/03.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            Pinnochio
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/04.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            <div class="active-status"></div> Monica Ward
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="chat-inbox" id="sent">

                        <div class="chat-inbox-head">
                            <div class="inbox-head">
                                Sent Messages
                            </div>
                            <div class="inbox-filters">
                                <div class="inbox-checkbox">
                                    <label for="unread">
                                        <input type="checkbox" name="unread"> Show Unread Only
                                    </label>
                                </div>
                            </div>
                        </div>

                        <form action="#">
                            <div class="search-bar">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text d-flow-root h-100 search-icon">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                      </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </div>
                        </form>

                        <hr>

                        <div class="chat-item">
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/01.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            <div class="active-status"></div> Harry Porter
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/02.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            Shaktiman
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/03.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            <div class="active-status"></div> Junior G
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/04.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            Emma Watson
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/01.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            <div class="active-status"></div> Ronald Weisley
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/02.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            <div class="active-status"></div> Jack Smith
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/03.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            Pinnochio
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/04.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            <div class="active-status"></div> Monica Ward
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/01.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            <div class="active-status"></div> Ronald Weisley
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/02.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            <div class="active-status"></div> Jack Smith
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/03.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            Pinnochio
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/04.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            <div class="active-status"></div> Monica Ward
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="chat-inbox" id="archieve">

                        <div class="chat-inbox-head">
                            <div class="inbox-head">
                                Archieve Messages
                            </div>
                            <div class="inbox-filters">
                                <div class="inbox-checkbox">
                                    <label for="unread">
                                        <input type="checkbox" name="unread"> Show Unread Only
                                    </label>
                                </div>
                            </div>
                        </div>

                        <form action="#">
                            <div class="search-bar">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text d-flow-root h-100 search-icon">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                      </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </div>
                        </form>

                        <hr>

                        <div class="chat-item">
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/01.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            Harry Porter
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/02.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            <div class="active-status"></div> Shaktiman
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/03.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            Junior G
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/04.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            <div class="active-status"></div> Emma Watson
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="chat-inbox" id="filtered">

                        <div class="chat-inbox-head">
                            <div class="inbox-head">
                                Filtered Messages
                            </div>
                            <div class="inbox-filters">
                                <div class="inbox-checkbox">
                                    <label for="unread">
                                        <input type="checkbox" name="unread"> Show Unread Only
                                    </label>
                                </div>
                                <div class="inbox-filter-btn">
                                    <button data-toggle="modal" data-target="#inbox-filter">
                                        <i class="fa-solid fa-sliders"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <form action="#">
                            <div class="search-bar">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text d-flow-root h-100 search-icon">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                      </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </div>
                        </form>

                        <hr>

                        <div class="chat-item">
                            <div class="empty-content">
                                <h4>No messages have been filtered out yet.</h4>
                                <p>If you haven't configured your settings yet, you can click the filter
                                    icon in the top-right corner, or click the button below.</p>
                            </div>
                            {{--  <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/01.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            <div class="active-status"></div> Harry Porter
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/02.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            Shaktiman
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>  --}}
                        </div>

                    </div>

                    <div class="chat-inbox" id="gold-member">

                        <div class="chat-inbox-head">
                            <div class="inbox-head">
                                Gold Members
                            </div>
                            <div class="inbox-filters">
                                <div class="inbox-checkbox">
                                    <label for="unread">
                                        <input type="checkbox" name="unread"> Show Unread Only
                                    </label>
                                </div>
                            </div>
                        </div>

                        <form action="#">
                            <div class="search-bar">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text d-flow-root h-100 search-icon">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                      </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </div>
                        </form>

                        <hr>

                        <div class="chat-item">
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/01.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            <div class="active-status"></div> Harry Porter
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/02.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            Shaktiman
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="chat-inbox" id="platinum-member">

                        <div class="chat-inbox-head">
                            <div class="inbox-head">
                                Platinum Members
                            </div>
                            <div class="inbox-filters">
                                <div class="inbox-checkbox">
                                    <label for="unread">
                                        <input type="checkbox" name="unread"> Show Unread Only
                                    </label>
                                </div>
                            </div>
                        </div>

                        <form action="#">
                            <div class="search-bar">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text d-flow-root h-100 search-icon">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                      </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </div>
                        </form>

                        <hr>

                        <div class="chat-item">
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/01.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            <div class="active-status"></div> Harry Porter
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/02.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            Shaktiman
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/03.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            <div class="active-status"></div> Junior G
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="person d-flex">
                                <div class="person-img">
                                    <img src="{{ asset('assets/images/profile/04.jpg') }}" alt="..." class="w-100 h-100">
                                </div>
                                <div class="person-detail flex-fill">
                                    <div class="d-flex flex-column h-100">
                                        <div class="person-name">
                                            Emma Watson
                                        </div>
                                        <div class="person-status">
                                            Hi, How are you ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="chat-inbox" id="diamond-member">

                        <div class="chat-inbox-head">
                            <div class="inbox-head">
                                Diamond Members
                            </div>
                            <div class="inbox-filters">
                                <div class="inbox-checkbox">
                                    <label for="unread">
                                        <input type="checkbox" name="unread"> Show Unread Only
                                    </label>
                                </div>
                            </div>
                        </div>

                        <form action="#">
                            <div class="search-bar">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text d-flow-root h-100 search-icon">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                      </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </div>
                        </form>

                        <hr>

                        <div class="chat-item">
                            <div class="empty-content">
                                <h4>No messages with diamond members yet.</h4>
                                <p>If you haven't started conversation with diamond members, search for members
                                    and start meeting with new people.
                                </p>
                            </div>
                        </div>

                    </div>

                    <div class="modal" id="inbox-filter">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Inbox Filters</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    The filters you set below will be applied to any new messages you receive.
                                    Messages already in your inbox will not be affected.
                                </p>
                                <div class="filter-container">
                                    <div class="dropdown">
                                        <button type="button"  data-toggle="dropdown">
                                          Verifications <i class="fa-solid fa-angle-down"></i>
                                        </button>
                                          <label for="verification"  class="dropdown-menu dropdown-menu-right">
                                            <ul>
                                                <li><input type="checkbox" name="verification" value="id-verify"> ID Verified</li>
                                                <li><input type="checkbox" name="verification" value="photo-verify">Photos Verified</li>
                                                <li><input type="checkbox" name="verification" value="Facebook">Facebook</li>
                                                <li><input type="checkbox" name="verification" value="Instagram">Instagram</li>
                                                <li><input type="checkbox" name="verification" value="LinkedIn">LinkedIn</li>
                                            </ul>
                                          </label>
                                    </div>
                                    <div class="dropdown">
                                        <button type="button" data-toggle="dropdown">
                                          Body Type <i class="fa-solid fa-angle-down"></i>
                                        </button>
                                          <label for="body"  class="dropdown-menu dropdown-menu-right">
                                            <ul>
                                                <li><input type="checkbox" name="body" value="Slim"> Slim</li>
                                                <li><input type="checkbox" name="body" value="Athletic">Athletic</li>
                                                <li><input type="checkbox" name="body" value="Average">Average</li>
                                                <li><input type="checkbox" name="body" value="Curvy">Curvy</li>
                                                <li><input type="checkbox" name="body" value="Overweight">Overweight</li>
                                            </ul>
                                          </label>
                                    </div>
                                    <div class="dropdown">
                                        <button type="button" data-toggle="dropdown">
                                          Ethnicity <i class="fa-solid fa-angle-down"></i>
                                        </button>
                                          <label for="body"  class="dropdown-menu dropdown-menu-right">
                                            <ul>
                                                <li><input type="checkbox" name="ethnicity" value="Asian"> Asian</li>
                                                <li><input type="checkbox" name="ethnicity" value="African">African</li>
                                                <li><input type="checkbox" name="ethnicity" value="East-Indian">East Indian</li>
                                                <li><input type="checkbox" name="ethnicity" value="Middle-Eastern">Middle Eastern</li>
                                                <li><input type="checkbox" name="ethnicity" value="Asian"> Asian</li>
                                                <li><input type="checkbox" name="ethnicity" value="African">African</li>
                                                <li><input type="checkbox" name="ethnicity" value="East-Indian">East Indian</li>
                                                <li><input type="checkbox" name="ethnicity" value="Middle-Eastern">Middle Eastern</li>
                                            </ul>
                                          </label>
                                    </div>
                                    <div class="dropdown">
                                        <button type="button" data-toggle="dropdown">
                                          Education <i class="fa-solid fa-angle-down"></i>
                                        </button>
                                          <label for="body"  class="dropdown-menu dropdown-menu-right">
                                            <ul>
                                                <li><input type="checkbox" name="education" value="High-School"> High School</li>
                                                <li><input type="checkbox" name="education" value="Intermediate">Intermediate</li>
                                                <li><input type="checkbox" name="education" value="Bachelor-Degree">Bachelor Degree</li>
                                                <li><input type="checkbox" name="education" value="Graduate-Degree">Graduate Degree</li>
                                                <li><input type="checkbox" name="education" value="PhD"> PhD</li>
                                                <li><input type="checkbox" name="education" value="African">African</li>
                                                <li><input type="checkbox" name="education" value="East Indian">East Indian</li>
                                                <li><input type="checkbox" name="education" value="Middle Eastern">Middle Eastern</li>
                                            </ul>
                                          </label>
                                    </div>
                                    <div class="dropdown">
                                        <button type="button" data-toggle="dropdown">
                                            Relationship <i class="fa-solid fa-angle-down"></i>
                                        </button>
                                          <label for="body"  class="dropdown-menu dropdown-menu-right">
                                            <ul>
                                                <li><input type="checkbox" name="body" value="Single"> Single</li>
                                                <li><input type="checkbox" name="body" value="Married">Married</li>
                                                <li><input type="checkbox" name="body" value="Open-Relationship">Open Relationship</li>
                                                <li><input type="checkbox" name="body" value="Divorced">Divorced</li>
                                                <li><input type="checkbox" name="body" value="Widowed">Widowed</li>
                                            </ul>
                                          </label>
                                    </div>
                                    <div class="dropdown">
                                        <button type="button" data-toggle="dropdown">
                                            Children <i class="fa-solid fa-angle-down"></i>
                                        </button>
                                          <label for="body"  class="dropdown-menu dropdown-menu-right">
                                            <ul>
                                                <li><input type="checkbox" name="body" value="Yes"> Yes</li>
                                                <li><input type="checkbox" name="body" value="No">No</li>
                                            </ul>
                                          </label>
                                    </div>
                                    <div class="dropdown">
                                        <button type="button" data-toggle="dropdown">
                                            Smoke <i class="fa-solid fa-angle-down"></i>
                                        </button>
                                          <label for="body"  class="dropdown-menu dropdown-menu-right">
                                            <ul>
                                                <li><input type="checkbox" name="body" value="Non-Smoker">Non Smoker</li>
                                                <li><input type="checkbox" name="body" value="Light-Smoker">Light Smoker</li>
                                                <li><input type="checkbox" name="body" value="Heavy-Smoker">Heavy Smoker</li>
                                            </ul>
                                          </label>
                                    </div>
                                    <div class="dropdown">
                                        <button type="button" data-toggle="dropdown">
                                            Drink <i class="fa-solid fa-angle-down"></i>
                                        </button>
                                          <label for="body"  class="dropdown-menu dropdown-menu-right">
                                            <ul>
                                                <li><input type="checkbox" name="body" value="Non-Drinker"> Non Drinker</li>
                                                <li><input type="checkbox" name="body" value="Social-Drinker">Social Drinker</li>
                                                <li><input type="checkbox" name="body" value="Heavy-Drinker">Heavy Drinker</li>
                                            </ul>
                                          </label>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Search</button>
                            </div>
                          </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



@endsection
