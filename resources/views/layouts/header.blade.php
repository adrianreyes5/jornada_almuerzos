<!-- Top Header Area -->
<header class="top-header-area d-flex align-items-center justify-content-between">
    <div class="left-side-content-area d-flex align-items-center">
        <!-- Mobile Logo -->
        <div class="mobile-logo mr-3 mr-sm-4">
            <a href="index.html"><img src="{{ asset('img/small-lunch.png')}}" alt="Mobile Logo"></a>
        </div>

        <!-- Triggers -->
        <div class="ecaps-triggers mr-1 mr-sm-3">
            <div class="menu-collasped" id="menuCollasped">
                <i class="fas fa-bars"></i>
            </div>
            <div class="mobile-menu-open" id="mobileMenuOpen">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </div>

    <div class="right-side-navbar d-flex align-items-center justify-content-end">
        <!-- Mobile Trigger -->
        <div class="right-side-trigger" id="rightSideTrigger">
            <i class="ti-align-left"></i>
        </div>

        <!-- Top Bar Nav -->
        <ul class="right-side-content d-flex align-items-center mb-0">
            <li class="nav-item dropdown">
                <button type="button" class="btn dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('storage/img/user.png')}}" alt="user"></button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- User Profile Area -->
                    <div class="user-profile-area">
                        <div class="user-profile-heading">
                            <!-- Thumb -->
                            <div class="profile-thumbnail">
                                <img src="{{asset('storage/img/user.png')}}" alt="user-image">
                            </div>
                            <!-- Profile Text -->
                            <div class="profile-text">
                                <h6>{{ Auth::user()->name }}</h6>
                                <span>{{ Auth::user()->email }}</span>
                            </div>
                        </div>
                        {{-- <a href="#" class="dropdown-item"><i class="ti-user text-default" aria-hidden="true"></i> My profile</a>
                        <a href="#" class="dropdown-item"><i class="zmdi zmdi-email-open text-success" aria-hidden="true"></i> Messages</a>
                        <a href="#" class="dropdown-item"><i class="ti-settings text-default" aria-hidden="true"></i> Account settings</a>
                        <a href="#" class="dropdown-item"><i class="ti-heart text-purple" aria-hidden="true"></i> Support</a> --}}
                        <a href="{!! route('logout') !!}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
                        class="dropdown-item">
                        <i class="ti-unlink text-warning" 
                        aria-hidden="true"></i> Sign-out
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>
