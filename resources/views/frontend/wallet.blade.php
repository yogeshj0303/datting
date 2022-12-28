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
                        <h2>Wallet</h2>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li>-</li>
                        <li class="active">Wallet</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    {{-- ===========================================
                    OPTIONS PAGE
    =========================================== --}}
    <section class="wallet-section container-fluid">
        <div class="container-fluid">
            <div class="wallet-part">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="my-wallet">
                            <div class="mywallet-head">
                                <h3>My Wallet</h3>
                            </div>
                            <hr>
                            <div class="available">
                                <h6 class="mb-0">Available Balance</h6>
                                <p>Rs.6000</p>
                            </div>
                            <div class="refer-reward">
                                <h6 class="mb-0">Rewards Earned</h6>
                                <p>Rs.600</p>
                            </div>
                            <hr>
                            <div class="add-money">
                                <button><i class="fa-solid fa-plus"></i></button>
                                Add Money
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8">
                        <div class="recent-transaction">
                            <div class="mywallet-head">
                                <h3>Recent Transactions</h3>
                            </div>
                            <hr>
                            <div class="transactions">
                                <div class="transaction-card">
                                    <div class="debit-credit">
                                        <div class="credit"><i class="fa-solid fa-plus"></i></div>
                                    </div>
                                    <div class="transact-detail flex-fill">
                                        <div class="transact-info">
                                            <h6 class="mb-0 text-truncate">Lorem ipsum dolor sit.</h6>
                                            <p class="date-time">12 Dec 2022 10:00 PM</p>
                                        </div>
                                    </div>
                                    <div class="transact-money">
                                        <div class="credit">Rs.500</div>
                                    </div>
                                </div>
                                <div class="transaction-card">
                                    <div class="debit-credit">
                                        <div class="debit"><i class="fa-solid fa-minus"></i></div>
                                    </div>
                                    <div class="transact-detail flex-fill">
                                        <div class="transact-info">
                                            <h6 class="mb-0 text-truncate">Lorem ipsum dolor sit.</h6>
                                            <p class="date-time">12 Dec 2022 10:00 PM</p>
                                        </div>
                                    </div>
                                    <div class="transact-money">
                                        <div class="debit">Rs.500</div>
                                    </div>
                                </div>
                                <div class="transaction-card">
                                    <div class="debit-credit">
                                        <div class="credit"><i class="fa-solid fa-plus"></i></div>
                                    </div>
                                    <div class="transact-detail flex-fill">
                                        <div class="transact-info">
                                            <h6 class="mb-0 text-truncate">Lorem ipsum dolor sit.</h6>
                                            <p class="date-time">12 Dec 2022 10:00 PM</p>
                                        </div>
                                    </div>
                                    <div class="transact-money">
                                        <div class="credit">Rs.500</div>
                                    </div>
                                </div>
                                <div class="transaction-card">
                                    <div class="debit-credit">
                                        <div class="debit"><i class="fa-solid fa-minus"></i></div>
                                    </div>
                                    <div class="transact-detail flex-fill">
                                        <div class="transact-info">
                                            <h6 class="mb-0 text-truncate">Lorem ipsum dolor sit.</h6>
                                            <p class="date-time">12 Dec 2022 10:00 PM</p>
                                        </div>
                                    </div>
                                    <div class="transact-money">
                                        <div class="debit">Rs.500</div>
                                    </div>
                                </div>
                                <div class="transaction-card">
                                    <div class="debit-credit">
                                        <div class="credit"><i class="fa-solid fa-plus"></i></div>
                                    </div>
                                    <div class="transact-detail flex-fill">
                                        <div class="transact-info">
                                            <h6 class="mb-0 text-truncate">Lorem ipsum dolor sit.</h6>
                                            <p class="date-time">12 Dec 2022 10:00 PM</p>
                                        </div>
                                    </div>
                                    <div class="transact-money">
                                        <div class="credit">Rs.500</div>
                                    </div>
                                </div>
                                <div class="transaction-card">
                                    <div class="debit-credit">
                                        <div class="debit"><i class="fa-solid fa-minus"></i></div>
                                    </div>
                                    <div class="transact-detail flex-fill">
                                        <div class="transact-info">
                                            <h6 class="mb-0 text-truncate">Lorem ipsum dolor sit.</h6>
                                            <p class="date-time">12 Dec 2022 10:00 PM</p>
                                        </div>
                                    </div>
                                    <div class="transact-money">
                                        <div class="debit">Rs.500</div>
                                    </div>
                                </div>
                                <div class="transaction-card">
                                    <div class="debit-credit">
                                        <div class="credit"><i class="fa-solid fa-plus"></i></div>
                                    </div>
                                    <div class="transact-detail flex-fill">
                                        <div class="transact-info">
                                            <h6 class="mb-0 text-truncate">Lorem ipsum dolor sit.</h6>
                                            <p class="date-time">12 Dec 2022 10:00 PM</p>
                                        </div>
                                    </div>
                                    <div class="transact-money">
                                        <div class="credit">Rs.500</div>
                                    </div>
                                </div>
                                <div class="transaction-card">
                                    <div class="debit-credit">
                                        <div class="debit"><i class="fa-solid fa-minus"></i></div>
                                    </div>
                                    <div class="transact-detail flex-fill">
                                        <div class="transact-info">
                                            <h6 class="mb-0 text-truncate">Lorem ipsum dolor sit.</h6>
                                            <p class="date-time">12 Dec 2022 10:00 PM</p>
                                        </div>
                                    </div>
                                    <div class="transact-money">
                                        <div class="debit">Rs.500</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="refer-part">
                <div class="refer-earn">
                    <div class="row">
                        <div class="col-lg-9 col-md-8 order-md-1 order-2 my-auto">
                            <div class="refer-content">
                                <h5>Refer Options. Earn Money.</h5>
                                <p><small>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero id est maxime
                                    dicta beatae eos quibusdam rerum fugit, rem itaque deserunt laboriosam numquam
                                    unde? Harum, dolorem laboriosam odit, magnam assumenda, ea accusantium minima
                                    cupiditate maiores perspiciatis nobis.
                                </small></p>
                                @php
                                $clientID = session()->get('clientid');
                                $wallet = DB::table('clients')->where('id',$clientID)->first();
                                @endphp
                                <div class="refer-links d-flex">
                                    <div class="copy-link">
                                        <!--<p class="link mb-0 text-truncate"> <small>options.com/uytoihreg7895454</small> </p>-->
                                        <input type="text" value="{{$wallet->referral_code}}" id="myInput" disabled>
                                        <button onclick="myFunction()"> <small> <i class="fa-regular fa-copy"></i> Copy Link </small> </button>
                                    </div>
                                    <div class="d-flex">
                                        <div class="share-link">
                                            <button> <small><i class="fa-brands fa-whatsapp"></i> Whatsapp</small> </button>
                                        </div>
                                        <div class="share-link">
                                            <button> <small><i class="fa-regular fa-envelope"></i> E-Mail</small> </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="more-text">
                                    <small class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi quia eligendi
                                        dicta tempora quaerat dolor!</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 order-md-2 order-1 my-auto">
                            <div class="refer-img">
                                <img src="{{ asset('assets/images/refer.png') }}" alt="..." class="w-100 h-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
function myFunction() {
  // Get the text field
  var copyText = document.getElementById("myInput");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

  // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);
  
  // Alert the copied text
  alert("Copied the text: " + copyText.value);
}
</script>
    </section>



@endsection
