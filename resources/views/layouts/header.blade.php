<!-- Top Header Area -->
<header class="top-header-area d-flex align-items-center justify-content-between">
    <div class="left-side-content-area d-flex align-items-center">
        <!-- Mobile Logo -->
        <div class="mobile-logo mr-3 mr-sm-4">
            <a href="index.html"><img src="{{ asset('img/small-logo.png')}}" alt="Mobile Logo"></a>
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

        <!-- Left Side Nav -->
        {{-- <ul class="left-side-navbar d-flex align-items-center">
            <li class="nav-item dropdown ml-1 ml-sm-3">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Apps <i class="fa fa-angle-down"></i></button>
                <!-- Dropdown Menu -->
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton6">
                    <a href="#" class="dropdown-item">- Profile</a>
                    <a href="#" class="dropdown-item">- Messages</a>
                    <a href="#" class="dropdown-item">- Settings</a>
                </div>
            </li>
        </ul> --}}
    </div>

    <div class="right-side-navbar d-flex align-items-center justify-content-end">
        <!-- Mobile Trigger -->
        <div class="right-side-trigger" id="rightSideTrigger">
            <i class="ti-align-left"></i>
        </div>

        <!-- Top Bar Nav -->
        <ul class="right-side-content d-flex align-items-center mb-0">
            {{-- <li class="hide-phone app-search mr-15">
                <form role="search" class=""><input type="text" placeholder="Search..." class="form-control"> <button type="submit" class="mr-0"><i class="fa fa-search"></i></button></form>
            </li> --}}
            {{-- <li class="nav-item dropdown">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon_globe-2" aria-hidden="true"></i></button>

                <div class="dropdown-menu dropdown-menu-right">
                    <!-- Top Message Area -->
                    <div class="top-message-area">
                        <!-- Heading -->
                        <div class="top-message-heading">
                            <div class="heading-title">
                                <h6>Messages</h6>
                            </div>
                            <span>5 New</span>
                        </div>
                        <div class="message-box" id="messageBox">
                            <a href="#" class="dropdown-item">
                                <i class="zmdi zmdi-email-open"></i>
                                <span class="message-text">
                                    <span>6-hour video course on Angular</span>
                                    <span>3 min ago</span>
                                </span>
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="zmdi zmdi-email-open"></i>
                                <span class="message-text">
                                    <span>Google Ads: You'll get a refund soon</span>
                                    <span>27 min ago</span>
                                </span>
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="zmdi zmdi-email-open"></i>
                                <span class="message-text">
                                    <span>New Feature: HTTP Method Selection</span>
                                    <span>56 min ago</span>
                                </span>
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="zmdi zmdi-email-open"></i>
                                <span class="message-text">
                                    <span>The Complete JavaScript Handbook</span>
                                    <span>1 hour ago</span>
                                </span>
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="zmdi zmdi-email-open"></i>
                                <span class="message-text">
                                    <span>New comment: ecaps Template</span>
                                    <span>2 days ago</span>
                                </span>
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="zmdi zmdi-email-open"></i>
                                <span class="message-text">
                                    <span>6-hour video course on Angular</span>
                                    <span>3 min ago</span>
                                </span>
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="zmdi zmdi-email-open"></i>
                                <span class="message-text">
                                    <span>Google Ads: You'll get a refund soon</span>
                                    <span>27 min ago</span>
                                </span>
                            </a>
                            <a href="#" class="dropdown-item">
                                <i class="zmdi zmdi-email-open"></i>
                                <span class="message-text">
                                    <span>New Feature: HTTP Method Selection</span>
                                    <span>56 min ago</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </li> --}}

            {{-- <li class="nav-item dropdown">
                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon_lightbulb_alt" aria-hidden="true"></i> <span class="active-status"></span></button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- Top Notifications Area -->
                    <div class="top-notifications-area">
                        <!-- Heading -->
                        <div class="notifications-heading">
                            <div class="heading-title">
                                <h6>Notifications</h6>
                            </div>
                            <span>5 New</span>
                        </div>

                        <div class="notifications-box" id="notificationsBox">
                            <a href="#" class="dropdown-item"><i class="ti-face-smile bg-success"></i><span>We've got something for you!</span></a>
                            <a href="#" class="dropdown-item"><i class="zmdi zmdi-notifications-active bg-danger"></i><span>Domain names expiring on Tuesday</span></a>
                            <a href="#" class="dropdown-item"><i class="ti-check"></i><span>Your commissions has been sent</span></a>
                            <a href="#" class="dropdown-item"><i class="ti-heart bg-success"></i><span>You sold an item!</span></a>
                            <a href="#" class="dropdown-item"><i class="ti-bolt bg-warning"></i><span>Security alert for your linked Google account</span></a>
                            <a href="#" class="dropdown-item"><i class="ti-face-smile bg-success"></i><span>We've got something for you!</span></a>
                            <a href="#" class="dropdown-item"><i class="zmdi zmdi-notifications-active bg-danger"></i><span>Domain names expiring on Tuesday</span></a>
                            <a href="#" class="dropdown-item"><i class="ti-check"></i><span>Your commissions has been sent</span></a>
                            <a href="#" class="dropdown-item"><i class="ti-heart bg-success"></i><span>You sold an item!</span></a>
                            <a href="#" class="dropdown-item"><i class="ti-bolt bg-warning"></i><span>Security alert for your linked Google account</span></a>
                        </div>
                    </div>
                </div>
            </li> --}}

            <li class="nav-item dropdown">
                <button type="button" class="btn dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('img/adrian.jpg')}}" alt="user"></button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- User Profile Area -->
                    <div class="user-profile-area">
                        <div class="user-profile-heading">
                            <!-- Thumb -->
                            <div class="profile-thumbnail">
                                <img src="{{asset('img/adrian.jpg')}}" alt="user-image">
                            </div>
                            <!-- Profile Text -->
                            <div class="profile-text">
                                <h6>Ajoy Das</h6>
                                <span>ajoydas@example.com</span>
                            </div>
                        </div>
                        <a href="#" class="dropdown-item"><i class="ti-user text-default" aria-hidden="true"></i> My profile</a>
                        <a href="#" class="dropdown-item"><i class="zmdi zmdi-email-open text-success" aria-hidden="true"></i> Messages</a>
                        <a href="#" class="dropdown-item"><i class="ti-settings text-default" aria-hidden="true"></i> Account settings</a>
                        <a href="#" class="dropdown-item"><i class="ti-heart text-purple" aria-hidden="true"></i> Support</a>
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
