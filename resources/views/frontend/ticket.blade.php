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
                        <h2>Raise Ticket</h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="profile">Home</a></li>
                        <li>-</li>
                        <li class="active">Raise Ticket</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>


    {{-- ===========================================
                    EVENT FORM SECTION
    =========================================== --}}
    <section class="raise-ticket-section container-fluid">
        <div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="raise-ticket-img">
                        <img src="{{ asset('assets/images/ticket.png') }}" alt="" class="w-100 h-100">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 my-auto">
                    <div class="raise-ticket text-center">
                        <div class="raise-ticket-header">
                            <h6>Submit a Ticket</h6>
                        </div>
                        <form action="">
                            <select class="form-select group-input" aria-label="Default select example">
                                <option selected>Issue</option>
                                <option value="1">Money not received in Wallet</option>
                                <option value="2">Referral amount not credited</option>
                                <option value="3">Report a bug</option>
                                <option value="4">Found anyone inappropiate</option>
                                <option value="5">Others</option>
                            </select>
                            <div class="group-input">
                                <textarea name="issue" placeholder="Describe Your Issue"></textarea>
                            </div>
                            <div class="group-input">
                                <button type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="raise-steps">
            <div class="section-header wow fadeInUp" data-wow-duration="1.5s">
				<h2>We are here to help.</h2>
			</div>
            <div class="raise-card-grid">
                <div class="raise-card">
                    <div class="card-icon">
                        <img src="{{ asset('assets/images/icons/message.png') }}" alt="" class="w-100 h-100">
                    </div>
                    <div class="raise-card-content">
                        <div class="head text-truncate">
                            Lorem, ipsum.
                        </div>
                        <div class="content">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem sed porro,
                            cupiditate voluptates officiis, aut maiores architecto sit, officia qui in.
                            Placeat eos odio aut, ad laborum nemo obcaecati provident. Perferendis
                            quisquam dicta nisi suscipit animi molestiae, ullam officia quis?
                        </div>
                    </div>
                </div>
                <div class="line"></div>
                <div class="raise-card">
                    <div class="card-icon">
                        <img src="{{ asset('assets/images/icons/message.png') }}" alt="" class="w-100 h-100">
                    </div>
                    <div class="raise-card-content">
                        <div class="head text-truncate">
                            Lorem, ipsum.
                        </div>
                        <div class="content">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem sed porro,
                            cupiditate voluptates officiis, aut maiores architecto sit, officia qui in.
                            Placeat eos odio aut, ad laborum nemo obcaecati provident. Perferendis
                            quisquam dicta nisi suscipit animi molestiae, ullam officia quis?
                        </div>
                    </div>
                </div>
                <div class="raise-card">
                    <div class="card-icon">
                        <img src="{{ asset('assets/images/icons/message.png') }}" alt="" class="w-100 h-100">
                    </div>
                    <div class="raise-card-content">
                        <div class="head text-truncate">
                            Lorem, ipsum.
                        </div>
                        <div class="content">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem sed porro,
                            cupiditate voluptates officiis, aut maiores architecto sit, officia qui in.
                            Placeat eos odio aut, ad laborum nemo obcaecati provident. Perferendis
                            quisquam dicta nisi suscipit animi molestiae, ullam officia quis?
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection
