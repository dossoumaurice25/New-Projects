   <!-- ========== header start ========== -->
  <header class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-5 col-md-5 col-6">
              <div class="header-left d-flex align-items-center">
                <div class="menu-toggle-btn mr-15">
                  <button id="menu-toggle" class="main-btn primary-btn btn-hover">
                    <i class="lni lni-chevron-left me-2"></i>
                  </button>
                </div>
                <!--<div class="header-search d-none d-md-flex">
                  <form action="#">
                    <input type="text" placeholder="Search..." />
                    <button><i class="lni lni-search-alt"></i></button>
                  </form>
                </div> -->
              </div>
            </div>
            <div class="col-lg-7 col-md-7 col-6">
              <div class="header-right">
  
                <!-- profile start -->
                <div class="profile-box ml-15">
                  <button class="dropdown-toggle bg-transparent border-0" type="button" id="profile"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="profile-info">
                      <div class="info" >
                        <div>
                          <h3 class="fw-500"><strong>{{ auth()->user()->username }}</strong></h3> 
                        </div>
                        
                      </div>
                    </div>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile">
                    <li>
                      <div class="author-info flex items-center !p-1">
                        <div class="content">
                          <h4 class="text-sm">{{ auth()->user()->username }}</h4>
                          <a class="text-black/40 dark:text-white/40 hover:text-black dark:hover:text-white text-xs" href="#">{{ auth()->user()->email }}</a>
                        </div>
                      </div>
                    </li>
                    <li class="divider"></li>
                    <li>
                      <a href="#0">
                        <i class="lni lni-user"></i> View Profile
                      </a>
                    </li>
                    <li>
                      <a href="settings.html"> <i class="lni lni-cog"></i> Settings </a>
                    </li>
                    <li class="divider"></li>
                    <li style="background: linear-gradient(120deg, #9f23c2, #dd98f0); border-radius: 12px;">
                      <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="fw-bold text-white" type="submit" style="border:none; padding:0; cursor:pointer; font:inherit; background:none;">
                          <i style="margin-right: 10px; margin-left: 5px;" class="lni lni-exit"></i> Sign Out
                        </button>
                      </form>
                    </li>
                  </ul>
                </div>
                <!-- profile end -->
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- ========== header end ========== -->