 

 <!-- ======== sidebar-nav start =========== -->
    <aside class="sidebar-nav-wrapper">
      <div class="navbar-logo">
        <a href="{{route('User.dashboard')}}">
         <img src="{{asset('assets/images/logo/logo.png')}}" alt="logo" height="100" width="180" />
          <div class="align-items-center justify-content-center gap-2 mb-0">
              <h1 style="font-family: 'Batangas', sans-serif; font-size: 2.5rem;" class="display-6 fw-bold mb-0 text-black">NovaPu<span style="font-family: 'Batangas', sans-serif; color:#9f23c2">l</span>se</h1>
          </div>
        </a>
      </div>
      <nav class="sidebar-nav">
        <ul> 
          <li class="nav-item ">
            <a
              href="{{route('User.dashboard')}}"
            >
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                  <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z"/>
                </svg>
              </span>
              <span class="text">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('User.profilCalculator')}}">
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-graph-up-arrow" viewBox="0 0 18 18">
                  <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4.9l-3.613 4.417a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61L13.445 4H10.5a.5.5 0 0 1-.5-.5"/>
                </svg>
              </span>
              <span class="text">Profit Calculator</span>
            </a>
          </li>
          <li class="nav-item nav-item-has-children">
            <a
              href="#0"
              class="collapsed"
              data-bs-toggle="collapse"
              data-bs-target="#ddmenu_2"
              aria-controls="ddmenu_2"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pie-chart" viewBox="0 0 18 18">
                  <path d="M7.5 1.018a7 7 0 0 0-4.79 11.566L7.5 7.793zm1 0V7.5h6.482A7 7 0 0 0 8.5 1.018M14.982 8.5H8.207l-4.79 4.79A7 7 0 0 0 14.982 8.5M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8"/>
                </svg>
              </span>
              <span class="text">My Shares</span>
            </a>
            <ul id="ddmenu_2" class="collapse dropdown-nav">
              <li>
                <a href="{{route('User.purchaseReport')}}"> Purchase Report </a>
              </li>
              <li>
                <a href="{{route('User.details')}}"> Details </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="{{route('User.wallet')}}">
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-wallet" viewBox="0 0 18 18">
                  <path d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a2 2 0 0 1-1-.268M1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1"/>
                </svg>
              </span>
              <span class="text">Wallet</span>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="{{route('User.deposit')}}">
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-wallet2" viewBox="0 0 18 18">
                  <path d="M12.136.326A1.5 1.5 0 0 1 14 1.78V3h.5A1.5 1.5 0 0 1 16 4.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 13.5v-9a1.5 1.5 0 0 1 1.432-1.499zM5.562 3H13V1.78a.5.5 0 0 0-.621-.484zM1.5 4a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5z"/>
                </svg>
              </span>
              <span class="text">Deposit</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('User.withdrawal')}}">
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 18 18">
                  <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                  <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2z"/>
                </svg>
              </span>
              <span class="text">Withdrawal</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('User.profile')}}">
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 18 18">
                  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                </svg>
              </span>
              <span class="text">Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('User.directReferral')}}">
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-add" viewBox="0 0 20 20">
                  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
                  <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                </svg>
              </span>
              <span class="text">Direct Referral</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('User.tutorials')}}">
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-mortarboard" viewBox="0 0 16 16">
                  <path d="M8 0a.5.5 0 0 1 .242.063l7 3.5a.5.5 0 0 1 0 .874l-7 3.5a.5.5 0 0 1-.484 0L4.5 5.869V8.5c0 .172-.014.34-.04.502.275.136.54.288.788.456.697.478 1.38 1.123 1.38 1.791v1.5a.5.5 0 0 1-1 0v-1.5c0-.244-.276-.637-.88-1.057C4.684 9.874 3.5 9.237 3.5 8.5V5.869l-2.758-1.379a.5.5 0 0 1 0-.874l7-3.5A.5.5 0 0 1 8 0ZM1.361 4.5 8 7.933 14.639 4.5 8 1.067 1.361 4.5Z"/>
                </svg>
              </span>
              <span class="text">Tutorials</span>
            </a>
          </li>
        </ul>
      </nav>
      <div class="promo-box">
        <a href="#" target="_blank" rel="nofollow" class="main-btn primary-btn btn-hover"><i class="lni lni-exit"></i>
          Upgrade to PRO
        </a>
      </div>
    </aside>
    <div class="overlay"></div>
    <!-- ======== sidebar-nav end =========== -->