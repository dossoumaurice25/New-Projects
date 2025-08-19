@php($hideFooter = true)

@extends('layouts.users.app')

@section('title', 'Paiement Crypto')

@section('style')
    <style>
        #qrcode canvas {
            background-color: white;
            display: inline-block;
            padding: 10px;
            border-radius: 8px;
        }
        #qrcode {
            background-color: white;
            display: inline-block;
            padding: 10px;
            border-radius: 8px;
        }
        .center{
            background-image: url('{{asset('assets/images/collection.png')}}');
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 40px;
            padding: 1rem;
            max-width: 100vw;
            
        }
        .wallet-address {
            background: #a023c247;
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 1rem;
            color: white;
            word-break: break-all;
            font-family: 'Courier New', monospace;
            font-size: 0.9rem;
            margin: 1rem 0;
        }
        .copy-btn, .complete-btn {
            background:#a023c22f;
            border: 2px solid #ffffff;
            border-radius: 50px;
            color: #ffffff;
            padding: 0.8rem 1.5rem;
            margin: 0rem;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 600;
        }
        .boutton{  
            background: #2ae581;
            border: 2px solid #0ae771;
            border-radius: 50px;
            color: #ffffff;
            padding: 0.8rem 1.5rem;
            margin: 0rem;
            cursor: pointer;
            width: 100%;
            transition: all 0.3s ease;
            font-weight: 600;
        }
        .copy-btn:hover, .complete-btn:hover {
            background: #2ae58154;
            border-color: #2ae581; 
        }

        .div1{
            background-color: white;
            color: white; 
            min-height: 100vh;
        }
    </style>
@endsection

@section('content')

    

    <div class="div1 d-flex align-items-center justify-content-center">

        <!-- Contact Button -->
        <div class="position-fixed bottom-0 end-0 p-5 z-3" >
            <button style="background-image: url('{{asset('assets/images/collection.png')}}');" class="btn btn-gradient-primary rounded-pill px-4 py-2 hover-lift" id="contactBtn" data-bs-toggle="tooltip" data-bs-placement="left" title="Important information">
                <i style="color: red" class="fa-solid fa-circle-exclamation"></i>
                <span style="color: red;font-weight: 800;" class="d-none d-md-inline">Disclaimer</span>
            </button>
        </div>

        <div class="mb-5 mt-5 center text-center p-4">


            <h3 class="text-center fw-bold mb-3" style="font-size: 2rem; color: #2ae581; ">Payment Confirmation</h3>

            <div class="row ">
                <div class="col-12 col-md-6 col-xl-6 mb-2" style="padding-top: 40px">

                    <div class="d-flex justify-content-center align-items-center">
                        <h3 id="cryptoAmount" style="color: #ffffff; font-size: 1.7rem;" class="fw-bold"></h3>
                        <button style="color: white; margin-left:5px; background-color:#473f4900;" class="btn btn-xl" onclick="copyValue( this)" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z"/>
                            </svg>
                        </button>
                    </div>

                    <div class="d-flex mt-4 mb-2">
                        <h4  style="padding-right: 10px; color: #2ae581;" >Wallet Address</h4>
                    </div>


                    <div class="mb-3 wallet-address">
                        <code id="cryptoAddress" style="font-size: 1.1rem; color:white">0x123ABC...</code>
                    </div>
                    <button style="color: #2ae581" class="copy-btn w-100" onclick="copyAddress(this)">
                        <i class="fas fa-copy me-2"></i>Copy Address
                    </button>

                </div>

                <div class="col-12 col-md-6 col-xl-6" style="padding-top: 1.5rem">

                    <div id="qrcode" class="my-4"></div>

                </div>
    
            </div>


            <form method="POST" action="{{ route('User.invest.confirm') }}">
                @csrf
                <input type="hidden" name="amount" value="{{ $amount }}">
                <input type="hidden" name="method" value="{{ $method }}">
                <button class="btn btn-success boutton mt-3">Transfer carried out</button>
            </form>
            
        </div>
    </div>

       


    
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
    <script>
        const amountUSD = {{ $amount }};
        const method = "{{ $method }}";

        const addresses = {
            btc: "13uQKvQdkTYxYss7gUNkNtmaEuWYLW2h3p",
            eth: "0x66d38cca809ff66f4f1ba15020c70e580d7ce441",
            usdt_trc20: "TR64h7Wtc8Hkju1K63TjyboqKfW48mdr2A",
            usdt_bep20: "0x66d38cca809ff66f4f1ba15020c70e580d7ce441"
        };

        const coingeckoIds = {
            btc: "bitcoin",
            eth: "ethereum",
            usdt_trc20: "tether",
            usdt_bep20: "tether"
        };

        const apiUrl = `https://api.coingecko.com/api/v3/simple/price?ids=${coingeckoIds[method]}&vs_currencies=usd`;

        fetch(apiUrl)
            .then(res => res.json())
            .then(data => {
                const price = data[coingeckoIds[method]].usd;
                const cryptoAmount = (amountUSD / price).toFixed(3);
                const address = addresses[method];

                document.getElementById("cryptoAmount").textContent = `${cryptoAmount} ${method.toUpperCase()}`;
                document.getElementById("cryptoAddress").textContent = address;

                const qrData = `${address}`;
                new QRCode(document.getElementById("qrcode"), qrData);
            });
    </script>

    <script>
        function copyValue(button) {
            const value = document.getElementById('cryptoAmount').innerText.trim();
            navigator.clipboard.writeText(value).then(() => {
                showSuccess(button, '✓');
            });
        }

        function copyAddress(button) {
            const value = document.getElementById('cryptoAddress').innerText.trim();
            navigator.clipboard.writeText(value).then(() => {
                showSuccess(button, 'Adresse copiée');
            });
        }

        function showSuccess(button, text) {
            const originalHTML = button.innerHTML;
            const originalClass = button.className;

            button.innerHTML = text;
            button.className = originalClass + ' copy-success';

            setTimeout(() => {
                button.innerHTML = originalHTML;
                button.className = originalClass;
            }, 2000);
        }
    </script>

    <script>
       class ContactManager {
            constructor() {
                this.setupContactButton();
            }
            
            setupContactButton() {
                const contactBtn = document.getElementById('contactBtn');
                contactBtn.addEventListener('click', () => this.showContactModal());
            }
            
            showContactModal() {
                // Create dynamic modal
                const modal = document.createElement('div');
                modal.className = 'modal fade';
                modal.innerHTML = `
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content bg-dark text-white border-0">
                            <div class="modal-header border-secondary">
                                <h5 class="modal-title text-danger">
                                    <i class="fas fa-headset me-2"></i>Disclaimer
                                </h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row g-3">
                                    <p>
                                    Once your transfer has been made, the deposit will be automatically credited to your account as soon as the funds have been received and validated by our system.
                                    The processing time may be up to 8 hours, depending on the payment method and network conditions at the time of the transaction.
                                    Please be patient during this time. No further action is required on your part.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                `;
                
                document.body.appendChild(modal);
                const bsModal = new bootstrap.Modal(modal);
                bsModal.show();
                
                modal.addEventListener('hidden.bs.modal', () => modal.remove());
            }
        }
 
        // Initialize Application
        document.addEventListener('DOMContentLoaded', () => {
            // Initialize a
            window.contactManager = new ContactManager();
         });
        
    </script>
   



@endsection