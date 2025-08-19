@php($hideFooter = true)

@extends('layouts.users.app')

@section('title', 'Deposit')

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


            <h3 class="text-center mb-3 text-white">Transfer Funds to Proceed</h3>

            <div class="row ">
                <div class="col-12 col-md-6 col-xl-6 mb-2">

                    <p class="fw-bold mt-3" style="font-size: 1.5rem ; color:#2ae581"><strong> {{ strtoupper($method) }}</strong></p>
                    <div class="d-flex justify-content-center align-items-center">
                        <h3 style="color: #ffffff; font-size: 2rem;"  class=" fw-bold">{{ $cryptoAmount }}</h3>
                        <button style="color: white; margin-left:5px; background-color:#473f4900; border:2px solid #ffffff" class="btn btn-xl" onclick="copyValue('{{ $cryptoAmount }}', this)" >
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-copy" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 5a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1h1v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h1v1z"/>
                            </svg>
                        </button>
                    </div>
                    <!--<h1 style="color:white; font-size: 2.5rem;">{{ $cryptoAmount }} {{ strtoupper($method) }}</h1> -->

                    <div class="d-flex mt-4 mb-2">
                        <h4  style="padding-right: 10px; color: #2ae581;" >{{ strtoupper($method) }} Wallet Address</h4>
                    </div>
                    <div class="mb-3 wallet-address">
                        <code style="font-size: 1.1rem; color:white">{{ $address }}</code>
                    </div>
                    <button style="color: #2ae581" class="copy-btn w-100" onclick="copyAddress(this)">
                        <i class="fas fa-copy me-2"></i>Copy Address
                    </button>

                </div>

                <div class="col-12 col-md-6 col-xl-6" style="padding-top: 1.5rem">

                    <div id="qrcode" class="my-4"></div>

                </div>
    
            </div>



            <form method="POST" action="{{ route('User.deposits.store') }}">
                @csrf
                <input type="hidden" name="amount_usd" value="{{ $amount }}">
                <input type="hidden" name="crypto_amount" value="{{ $cryptoAmount }}">
                <input type="hidden" name="method" value="{{ $method }}">
                <button  class="btn btn-success boutton mt-3" >
                    I have completed the transfer
                </button>
            </form>


           



        </div>
    </div>
@endsection

@section('script')

     <script>
        function copyValue(value, button) {
            navigator.clipboard.writeText(value).then(() => {
                showSuccess(button, '✓');
            });
        }
        
        function copyAddress(button) {
            const address = "{{ $address }}";
            navigator.clipboard.writeText(address).then(() => {
                showSuccess(button, 'Address copied');
            });
        }
        
        function showSuccess(button, text) {
            const originalText = button.innerHTML;
            const originalClass = button.className;
            
            button.innerHTML = text;
            button.className = originalClass + ' copy-success';
            
            setTimeout(() => {
                button.innerHTML = originalText;
                button.className = originalClass;
            }, 2000);
        }
    </script>
    <!-- QR Code -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

    <script>
        // Construction des données à injecter dans le QR code
        const address = @json($address);
        const method = @json($method);
        const cryptoAmount = @json($cryptoAmount);

        let qrData = address;

        if (method === 'btc') {
            qrData = `${address}`;
        } else if (method === 'eth') {
            qrData = `${address}`;
        } else if (method === 'usdt_trc20' || method === 'usdt_bep20') {
            qrData = `${address}`;
        }

        console.log("Contenu QR code : ", qrData);

        new QRCode(document.getElementById("qrcode"), {
            text: qrData,
            width: 200,
            height: 200,
            colorDark: "#000000",
            colorLight: "#ffffff",
            correctLevel: QRCode.CorrectLevel.H
        });
    </script>
    <script>
        const form = document.querySelector("form");

        form.addEventListener('submit', function (e) {
            e.preventDefault(); // Empêche la soumission immédiate (à retirer si tu veux soumettre normalement)
            const confirmation = document.getElementById('confirmation');
            confirmation.classList.remove('d-none');
            
            // Disparaît automatiquement après 7 secondes
            setTimeout(() => {
                hideConfirmation();
            }, 7000);
        });

        function hideConfirmation() {
            const confirmation = document.getElementById('confirmation');
            confirmation.classList.add('d-none');
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
