@extends('frontend.layout.main')
@section('main.container')

    {{-- =============================================
                        MAIN BANNER
    ============================================  --}}

    {{--  <div class="container-fluid top-banner">
        <div class="main-banner">
            <div class="row h-100">
                <div class="col-md-6 my-auto">
                    <div class="top-banner-content">
                        <h2 class="text-theme mb-3">OPTIONS</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi a perferendis adipisci tenetur nihil? Totam accusantium voluptate illo eius fuga laboriosam perferendis vero, ad vel obcaecati natus. Ipsum, earum reprehenderit. Dicta ea veritatis corrupti expedita impedit similique rem unde commodi!</p>
                        <button class="join-btn"> Join Now </button>
                    </div>
                </div>
                <div class="col-md-6 h-100">
                    <div class="banner-container h-100">
                        <img src="{{ asset("assets/images/home/main-banner.jpg") }}" alt="..." class="w-100 h-100">
                    </div>
                </div>
            </div>
        </div>
    </div>  --}}

    <section class="banner-section style2 bgimg" style="background-image: url(assets/images/banner/bg2.jpg);">
        <div class="container">
            <div class="section-wrapper">
                <div class="row align-items-end">
                    <div class="col-lg-6">
                        <div class="banner-content">
                            <div class="intro-form">
                                <h2>Meet <span class="theme-color">big</span> And <span class="theme-color">Cute</span> Love Here.</h2>
                                <ul>
                                    <li><i class="icofont-heart-alt"></i>Friendly, efficient and simple</li>
                                    <li><i class="icofont-heart-alt"></i>Consist on that we offer a site which is friendly</li>
                                    <li><i class="icofont-heart-alt"></i>Find friends among a group of guys and girls</li>
                                    <li><i class="icofont-heart-alt"></i>You can find love</li>
                                    <li><i class="icofont-heart-alt"></i>Absolutely free</li>
                                </ul>
                                <a href="#" class="lab-btn"><span>Join Now</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-thumb">
                            <img src="assets/images/banner/01.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{--  =============================================
                        ABOUT SECTION
    ============================================  --}}

    <div class="container-fluid about-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-lg-1 col-md-6 order-md-1 about-1">
                    <div>
                        <div>
                            <div class="couple-icons">
                                <img src="{{ asset("assets/images/icons/couple.png") }}" alt="" class="w-100 h-100">
                            </div>
                            <h5>Lorem, ipsum dolor.</h5>
                        </div>
                    </div>
                    <div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam voluptatibus animi, quis distinctio ea eligendi labore soluta nemo, tenetur eius facilis sapiente, autem excepturi. Laborum vitae ipsa mollitia nemo quas.</p>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-2 col-md-12 ordermdm-3 about-2 my-auto">
                    <img src="{{ asset("assets/images/home/about-img.jpg") }}" alt="">
                </div>
                <div class="col-lg-4 order-lg-3 col-md-6 order-md-2 about-3">
                    <div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam voluptatibus animi, quis distinctio ea eligendi labore soluta nemo, tenetur eius facilis sapiente, autem excepturi. Laborum vitae ipsa mollitia nemo quas.</p>
                    </div>
                    <div>
                        <div>
                            <div class="couple-icons">
                                <img src="{{ asset("assets/images/icons/couple.png") }}" alt="" class="w-100 h-100">
                            </div>
                            <h5>Lorem, ipsum dolor.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{--  =============================================
                    HOW IT WORKS SECTION
    ============================================  --}}
    <div class="about">
		<div class="container">
			<div class="section-header wow fadeInUp" data-wow-duration="1.5s">
				<h2>Getting Started</h2>
			</div>
			<div class="section__wrapper">
				<div class="row g-4 justify-content-center row-cols-lg-3 row-cols-sm-2 row-cols-1">
					<div class="col wow fadeInUp" data-wow-duration="1.5s">
						<div class="about__item text-center">
							<div class="about__inner">
								<div class="about__thumb">
									<img src="assets/images/about/01.jpg" alt="dating thumb">
								</div>
								<div class="about__content">
									<h4>Create A Profile</h4>
									<p>Create a personalised profile, add photos and describe your ideal partner</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col wow fadeInUp" data-wow-duration="1.5s">
						<div class="about__item text-center">
							<div class="about__inner">
								<div class="about__thumb">
									<img src="assets/images/about/02.jpg" alt="dating thumb">
								</div>
								<div class="about__content">
									<h4>Browse Photos</h4>
									<p>Find members based on location, very special interests and lifestyle preferences.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col wow fadeInUp" data-wow-duration="1.5.5s">
						<div class="about__item text-center">
							<div class="about__inner">
								<div class="about__thumb">
									<img src="assets/images/about/03.jpg" alt="dating thumb">
								</div>
								<div class="about__content">
									<h4>Start Communicating</h4>
									<p>Show interest in the members you like and let the journey begin.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


    {{--  =============================================
                    MILESTONE SECTION
    ============================================  --}}

    <div class="container-fluid bg-light">
        <div class="container milestone">
            <div class="section-header wow fadeInUp" data-wow-duration="1.5s">
				<h2>Our dating site helps millions find real love</h2>
			</div>
            <div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 text-center milestone-item">
                        <div class="milestone-img">
                            <img src="{{ asset("assets/images/icons/heart.png") }}" alt="" class="w-100 h-100">
                        </div>
                        <div>
                            <p>Over 2 Million have found true love</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center milestone-item">
                        <div class="milestone-img">
                            <img src="{{ asset("assets/images/icons/couple-col.png") }}" alt="" class="w-100 h-100">
                        </div>
                        <div>
                            <p>51% MEN <br class="d-md-block d-sm-none"> 49% WOMEN</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center milestone-item">
                        <div class="milestone-img">
                            <img src="{{ asset("assets/images/icons/conversation.png") }}" alt="" class="w-100 h-100">
                        </div>
                        <div>
                            <p>SITE MOST LIKELY TO LEAD TO HAPPY RELATIONSHIPS</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center milestone-item">
                        <div class="milestone-img">
                            <img src="{{ asset("assets/images/icons/message.png") }}" alt="" class="w-100 h-100">
                        </div>
                        <div>
                            <p>2.3 MILLION MESSAGES SENT WEEKLY</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{--  =============================================
                    REAL DATE SECTION
    ============================================  --}}

    <div class="container-fluid real-date-section">
        <div class="container">
            <div class="section-header wow fadeInUp" data-wow-duration="1.5s">
				<h2>The Real Date</h2>
			</div>
            <div>
                <div class="row">
                    <div class="col-md-6 my-auto">
                        <div class="real-date-img">
                            <img src="{{ asset("assets/images/home/real date.jpg") }}" alt="..." class="w-100 h-100">
                        </div>
                    </div>
                    <div class="col-md-6 my-auto">
                        <div class="real-date-content">
                            <div class="mb-3">
                                <h6>Over the course of our 20+ years in the relationship business,
                                    millions of couples have found lasting love. Give us a try when
                                    you’re ready for something real.</h6>
                            </div>
                            <div class="join-radio">
                                <form action="">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="radio-head">I am</div>
                                            <div class="radio">
                                                <label class="mb-0"><input type="radio" name="i_am" class="mr-2">Man</label>
                                            </div>
                                            <div class="radio">
                                                <label class="mb-0"><input type="radio" name="i_am" class="mr-2">Woman</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="radio-head">Looking For</div>
                                            <div class="radio">
                                                <label class="mb-0"><input type="radio" name="looking" class="mr-2">Man</label>
                                            </div>
                                            <div class="radio">
                                                <label class="mb-0"><input type="radio" name="looking" class="mr-2">Woman</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="join-btn">
                                        <button> Join Now </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{--  =============================================
                DATING ADVICE SECTION
    ============================================  --}}

    <div class="container-fluid dating-advice-section bg-light">
        <div class="container">
            <div class="section-header wow fadeInUp" data-wow-duration="1.5s">
				<h2>Dating Advice</h2>
			</div>
            <div class="dating-advice-para">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Dicta omnis odio voluptas iste facilis velit aperiam. Minus,
                    provident repellendus, ad eveniet nisi distinctio amet
                    consectetur sed quasi atque, dolores alias.</p>
            </div>
            <div>
                <div class="dating-advice-slider">
                    <div class="dating-item">
                        <div class="dating-card">
                            <div class="dating-card-img">
                                <img src="{{ asset('assets/images/home/about-img.jpg') }}" alt="..." class="w-100 h-100">
                            </div>
                            <div class="dating-card-content">
                                <div class="head">
                                    Lorem ipsum dolor sit amet.
                                </div>
                                <div class="para">
                                    <small>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Consequuntur voluptatem perspiciatis labore porro quos
                                        dolorum maxime a sed at. Fugit consequuntur praesentium
                                        dolorem tempore, sit accusamus vero facere placeat dolore
                                        esse dolorum vitae ab nisi eveniet deserunt assumenda quaerat eaque.</small>
                                </div>
                                <div class="writer">
                                    <p>by Rachel Dack, MC, LCPC, NCC</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dating-item">
                        <div class="dating-card">
                            <div class="dating-card-img">
                                <img src="{{ asset('assets/images/home/about-img.jpg') }}" alt="..." class="w-100 h-100">
                            </div>
                            <div class="dating-card-content">
                                <div class="head">
                                    Lorem ipsum dolor sit amet.
                                </div>
                                <div class="para">
                                    <small>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Consequuntur voluptatem perspiciatis labore porro quos
                                        dolorum maxime a sed at. Fugit consequuntur praesentium
                                        dolorem tempore, sit accusamus vero facere placeat dolore
                                        esse dolorum vitae ab nisi eveniet deserunt assumenda quaerat eaque.</small>
                                </div>
                                <div class="writer">
                                    <p>by Rachel Dack, MC, LCPC, NCC</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dating-item">
                        <div class="dating-card">
                            <div class="dating-card-img">
                                <img src="{{ asset('assets/images/home/about-img.jpg') }}" alt="..." class="w-100 h-100">
                            </div>
                            <div class="dating-card-content">
                                <div class="head">
                                    Lorem ipsum dolor sit amet.
                                </div>
                                <div class="para">
                                    <small>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Consequuntur voluptatem perspiciatis labore porro quos
                                        dolorum maxime a sed at. Fugit consequuntur praesentium
                                        dolorem tempore, sit accusamus vero facere placeat dolore
                                        esse dolorum vitae ab nisi eveniet deserunt assumenda quaerat eaque.</small>
                                </div>
                                <div class="writer">
                                    <p>by Rachel Dack, MC, LCPC, NCC</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dating-item">
                        <div class="dating-card">
                            <div class="dating-card-img">
                                <img src="{{ asset('assets/images/home/about-img.jpg') }}" alt="..." class="w-100 h-100">
                            </div>
                            <div class="dating-card-content">
                                <div class="head">
                                    Lorem ipsum dolor sit amet.
                                </div>
                                <div class="para">
                                    <small>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Consequuntur voluptatem perspiciatis labore porro quos
                                        dolorum maxime a sed at. Fugit consequuntur praesentium
                                        dolorem tempore, sit accusamus vero facere placeat dolore
                                        esse dolorum vitae ab nisi eveniet deserunt assumenda quaerat eaque.</small>
                                </div>
                                <div class="writer">
                                    <p>by Rachel Dack, MC, LCPC, NCC</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dating-item">
                        <div class="dating-card">
                            <div class="dating-card-img">
                                <img src="{{ asset('assets/images/home/about-img.jpg') }}" alt="..." class="w-100 h-100">
                            </div>
                            <div class="dating-card-content">
                                <div class="head">
                                    Lorem ipsum dolor sit amet.
                                </div>
                                <div class="para">
                                    <small>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Consequuntur voluptatem perspiciatis labore porro quos
                                        dolorum maxime a sed at. Fugit consequuntur praesentium
                                        dolorem tempore, sit accusamus vero facere placeat dolore
                                        esse dolorum vitae ab nisi eveniet deserunt assumenda quaerat eaque.</small>
                                </div>
                                <div class="writer">
                                    <p>by Rachel Dack, MC, LCPC, NCC</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="dating-item">
                        <div class="dating-card">
                            <div class="dating-card-img">
                                <img src="{{ asset('assets/images/home/about-img.jpg') }}" alt="..." class="w-100 h-100">
                            </div>
                            <div class="dating-card-content">
                                <div class="head">
                                    Lorem ipsum dolor sit amet.
                                </div>
                                <div class="para">
                                    <small>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                        Consequuntur voluptatem perspiciatis labore porro quos
                                        dolorum maxime a sed at. Fugit consequuntur praesentium
                                        dolorem tempore, sit accusamus vero facere placeat dolore
                                        esse dolorum vitae ab nisi eveniet deserunt assumenda quaerat eaque.</small>
                                </div>
                                <div class="writer">
                                    <p>by Rachel Dack, MC, LCPC, NCC</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--  =============================================
                SAFETY ANS PLAN SECTION
    ============================================  --}}

    <div class="work work--style2 padding-tb bgimg">
		<div class="container">
			<div class="section__wrapper">
				<div class="row g-4 justify-content-center">
					<div class="col-xl-6 col-lg-8 col-12 wow fadeInLeft" data-wow-duration="1.5s">
						<div class="work__item">
							<div class="work__inner">
								<div class="work__thumb">
									<img src="assets/images/work/09.png" alt="dating thumb">
								</div>
								<div class="work__content">
									<h3>Trust And Safety</h3>
									<p>Choose from one of our membership levels and unlock features you need. </p>
									<a href="policy.html" class="lab-btn"><span>See More Details</span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-lg-8 col-12 wow fadeInRight" data-wow-duration="1.5s">
						<div class="work__item">
							<div class="work__inner">
								<div class="work__thumb">
									<img src="assets/images/work/10.png" alt="dating thumb">
								</div>
								<div class="work__content">
									<h3>Simple Membership</h3>
									<p>Choose from one of our membership levels and unlock features you need. </p>
									<a href="pricing-plan.html" class="lab-btn"><span>Membership Details</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection
