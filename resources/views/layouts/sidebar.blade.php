<div class="ecaps-sidemenu-area">
    {{-- {/* <!-- Desktop Logo --> */} --}}
    <div class="ecaps-logo">
        <a href="index.html"><img class="desktop-logo" src="{{asset('img/logo.png')}}" alt="Desktop Logo"> <img class="small-logo" src="{{ asset('img/small-logo.png')}}" alt="Mobile Logo"></a>
    </div>

    {{-- {/* <!-- Side Nav --> */} --}}
    <div class="ecaps-sidenav" id="ecapsSideNav">
        <!-- Side Menu Area -->
        <div class="side-menu-area">
            {{-- {/* <!-- Sidebar Menu --> */} --}}
            <nav>
                <ul class="sidebar-menu" data-widget="tree">
                    <li><a href="{{ route('cocina.index')}}"><i class="icon_lifesaver"></i> <span>Cocina</span></a></li>
                    <li><a href="{{ route('bodega.index')}}"><i class="icon_lifesaver"></i> <span>Bodega</span></a></li>
                    <li><a href="{{ route('compras.index')}}"><i class="icon_lifesaver"></i> <span>Compras</span></a></li>
                    {{-- <li class="treeview">
                        <a href="javascript:void(0)"><i class="icon_drive"></i> <span>UI kit</span> <i class="fa fa-angle-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="avatar.html">Avatar</a></li>
                            <li><a href="buttons.html">Button</a></li>
                            <li><a href="card.html">Card</a></li>
                            <li><a href="slider.html">Slider</a></li>
                            <li><a href="tab.html">Tab</a></li>
                            <li><a href="general.html">General</a></li>
                            <li><a href="progressbar.html">Progressbar</a></li>
                            <li><a href="notifications.html">Notification</a></li>
                            <li><a href="dropdown.html">Dropdown</a></li>
                            <li><a href="typography.html">Typography</a></li>
                        </ul>
                    </li> --}}
                </ul>
            </nav>
        </div>
    </div>
</div>