                @php
                $role=Auth()->user()->role;
                @endphp
     <!-- sidebar -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-default fixed-top" id="mainNav">
        <a class="navbar-brand" href="{{route('dashboard')}}"><img src="{{asset('')}}admin-assets/img/logo.svg" alt="" width="167" height="36"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Admin Backend">
                    <div class="dropdown">
                            <span class=" dropdown-toggle ml-3" style="font-size: 17px; color:#ededed;"   data-toggle="dropdown">CMS</span>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" style="font-size:14px;" href="{{route('cms_home')}}">Home</a>
                                <a class="dropdown-item" style="font-size:14px;" href="{{route('help_cms')}}">Help</a>
                                <a class="dropdown-item" style="font-size:14px;" href="{{route('help_card')}}">Help Cards</a>
                        </div>
                    </div>
                </li> -->

                @if(Auth::user() && Auth::user()->role == "user")
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                        <a class="nav-link" href="{{route('dashboard')}}">
                            <i class="fa fa-fw fa-line-chart"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Category">
                    <a class="nav-link" href="{{route('category')}}">
                        <i class="fa fa-fw fa-list"></i>
                        <span class="nav-link-text">Category</span>
                    </a>
                </li>
                @elseif(Auth::user() && Auth::user()->role == "staff" || Auth::user()->role == "manager")

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="{{route('dashboard')}}">
                        <i class="fa fa-fw fa-line-chart"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>
                
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Order Management">
                    <a class="nav-link" href="{{route('order_management')}}">
                        <i class="fa fa-fw fa-shopping-cart"></i>
                        <span class="nav-link-text">Order Management</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Management">
                    <a class="nav-link" href="{{route('menu_management')}}">
                        <i class="fa fa-fw fa-bars"></i>
                        <span class="nav-link-text">Menu Management</span>
                    </a>
                </li>
                
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Category">
                    <a class="nav-link" href="{{route('category')}}">
                        <i class="fa fa-fw fa-list"></i>
                        <span class="nav-link-text">Category</span>
                    </a>
                </li>
                
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="User Profile">
                    <a class="nav-link" href="{{route('user_profile')}}">
                        <i class="fa fa-fw fa-user"></i>
                        <span class="nav-link-text">User Profile</span>
                    </a>
                </li>

                {{-- @elseif(Auth::user() && Auth::user()->role == "manager") --}}

                @else
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="{{route('dashboard')}}">
                        <i class="fa fa-fw fa-line-chart"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>

                @if(Auth::user()->role == 'super' || auth()->user()->role == 'admin')

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="">
                        <i class="fa fa-fw fa-gears"></i>
                        <span class="nav-link-text">CMS</span>
                    </a>
                    <ul>
                        <li>
                        <a class="nav-link" href="{{route('cms_home')}}">
                             <i class="fa fa-fw fa-home"></i>
                             <span class="nav-link-text">Home</span>
                        </a>
                        </li>
                        <li>
                        <a class="nav-link" href="{{route('help_cms')}}">
                             <i class="fa fa-key"></i>
                             <span class="nav-link-text">Help</span>
                        </a>
                        </li>
                        <li>
                        <a class="nav-link" href="{{route('help_card')}}">
                             <i class="fa fa-picture-o"></i>
                             <span class="nav-link-text">Help Card</span>
                        </a>
                        </li>
                    </ul>
                </li>
            @endif

            <!--
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="">
                        <i class="fa fa-fw fa-home"></i>
                        <span class="nav-link-text">Home</span>
                    </a>
                </li> -->
                <!-- <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Store Management">
                    <a class="nav-link" href="">
                        <i class="fa fa-fw fa-map"></i>
                        <span class="nav-link-text">Store Management</span>
                    </a>
                </li> -->
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Order Management">
                    <a class="nav-link" href="{{route('order_management')}}">
                        <i class="fa fa-fw fa-shopping-cart"></i>
                        <span class="nav-link-text">Order Management</span>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Management">
                    <a class="nav-link" href="{{route('menu_management')}}">
                        <i class="fa fa-fw fa-bars"></i>
                        <span class="nav-link-text">Menu Management</span>
                    </a>
                </li>


                @if(Auth::user()->role == 'super' || auth()->user()->role == 'admin' || auth()->user()->role == 'manager' )
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add Menu Item">
                    <a class="nav-link" href="{{route('add_menu_item')}}">
                        <i class="fa fa-fw fa-plus-circle"></i>
                        <span class="nav-link-text">Add Menu Item</span>
                    </a>
                </li>
             @endif


                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Category">
                    <a class="nav-link" href="{{route('category')}}">
                        <i class="fa fa-fw fa-list"></i>
                        <span class="nav-link-text">Category</span>
                    </a>
                </li>

                @if(Auth::user()->role == 'super' || auth()->user()->role == 'admin' || auth()->user()->role == 'manager' )

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add Category">
                    <a class="nav-link" href="{{route('add_category')}}">
                        <i class="fa fa-fw fa-plus-circle"></i>
                        <span class="nav-link-text">Add Category</span>
                    </a>
                </li>

                @endif
                @if(Auth::user()->role == 'super' || auth()->user()->role == 'admin')
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Payment Merchant">
                    <a class="nav-link" href="{{route('payment_marchant')}}">
                        <i class="fa fa-fw fa-credit-card"></i>
                        <span class="nav-link-text">Payment Merchant</span>
                    </a>
                </li>
                @endif
                @if(Auth::user()->role == 'super' || auth()->user()->role == 'admin')
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Delivery Management">
                    <a class="nav-link" href="{{route('delivery_management')}}">
                        <i class="fa fa-fw fa-car"></i>
                        <span class="nav-link-text">Delivery Management</span>
                    </a>
                </li>
                @endif
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="User Profile">
                    <a class="nav-link" href="{{route('user_profile')}}">
                        <i class="fa fa-fw fa-user"></i>
                        <span class="nav-link-text">User Profile</span>
                    </a>
                </li>
                
                
                @if(Auth::user()->role == 'super' || auth()->user()->role == 'admin')
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="User Profile">
                    <a class="nav-link" href="{{route('user_management')}}">
                        <i class="fa fa-fw fa-user"></i>
                        <span class="nav-link-text">User Management</span>
                    </a>
                </li>
                @endif


                @if($role == 'super')
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Admin Backend">
                    <a class="nav-link" href="{{route('admin_backend')}}">
                        <i class="fa fa-fw fa-dashboard"></i>
                        <span class="nav-link-text">Admin Backend</span>
                    </a>
                </li>
                @endif

                @if(Auth::user()->role == 'super' || auth()->user()->role == 'admin')
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Admin Backend">
                    <a class="nav-link" href="{{route('email')}}">
                        <i class="fa fa-fw fa-dashboard"></i>
                        <span class="nav-link-text">Email Settings</span>
                    </a>
                </li>
                @endif
            </ul>
            <ul class="navbar-nav sidenav-toggler">
                <li class="nav-item">
                    <a class="nav-link text-center" id="sidenavToggler">
                        <i class="fa fa-fw fa-angle-left"></i>
                    </a>
                </li>
                @endif

            </ul>
            <ul class="navbar-nav ml-auto">
                <!--<li class="nav-item dropdown">-->
                <!--    <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown"-->
                <!--        aria-haspopup="true" aria-expanded="false">-->
                <!--        <i class="fa fa-fw fa-envelope"></i>-->
                <!--        <span class="d-lg-none">Messages-->
                <!--            <span class="badge badge-pill badge-primary">12 New</span>-->
                <!--        </span>-->
                <!--        <span class="indicator text-primary d-none d-lg-block">-->
                <!--            <i class="fa fa-fw fa-circle"></i>-->
                <!--        </span>-->
                <!--    </a>-->
                <!--    <div class="dropdown-menu" aria-labelledby="messagesDropdown">-->
                <!--        <h6 class="dropdown-header">New Messages:</h6>-->
                <!--        <div class="dropdown-divider"></div>-->
                <!--        <a class="dropdown-item" href="#">-->
                <!--            <strong>David Miller</strong>-->
                <!--            <span class="small float-right text-muted">11:21 AM</span>-->
                <!--            <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome!-->
                <!--                These messages clip off when they reach the end of the box so they don't overflow over to-->
                <!--                the sides!</div>-->
                <!--        </a>-->
                <!--        <div class="dropdown-divider"></div>-->
                <!--        <a class="dropdown-item" href="#">-->
                <!--            <strong>Jane Smith</strong>-->
                <!--            <span class="small float-right text-muted">11:21 AM</span>-->
                <!--            <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00-->
                <!--                instead of 4:00. Thanks!</div>-->
                <!--        </a>-->
                <!--        <div class="dropdown-divider"></div>-->
                <!--        <a class="dropdown-item" href="#">-->
                <!--            <strong>John Doe</strong>-->
                <!--            <span class="small float-right text-muted">11:21 AM</span>-->
                <!--            <div class="dropdown-message small">I've sent the final files over to you for review. When-->
                <!--                you're able to sign off of them let me know and we can discuss distribution.</div>-->
                <!--        </a>-->
                <!--        <div class="dropdown-divider"></div>-->
                <!--        <a class="dropdown-item small" href="#">View all messages</a>-->
                <!--    </div>-->
                <!--</li>-->
                <!--<li class="nav-item dropdown">-->
                <!--    <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown"-->
                <!--        aria-haspopup="true" aria-expanded="false">-->
                <!--        <i class="fa fa-fw fa-bell"></i>-->
                <!--        <span class="d-lg-none">Alerts-->
                <!--            <span class="badge badge-pill badge-warning">6 New</span>-->
                <!--        </span>-->
                <!--        <span class="indicator text-warning d-none d-lg-block">-->
                <!--            <i class="fa fa-fw fa-circle"></i>-->
                <!--        </span>-->
                <!--    </a>-->
                <!--    <div class="dropdown-menu" aria-labelledby="alertsDropdown">-->
                <!--        <h6 class="dropdown-header">New Alerts:</h6>-->
                <!--        <div class="dropdown-divider"></div>-->
                <!--        <a class="dropdown-item" href="#">-->
                <!--            <span class="text-success">-->
                <!--                <strong>-->
                <!--                    <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>-->
                <!--            </span>-->
                <!--            <span class="small float-right text-muted">11:21 AM</span>-->
                <!--            <div class="dropdown-message small">This is an automated server response message. All systems-->
                <!--                are online.</div>-->
                <!--        </a>-->
                <!--        <div class="dropdown-divider"></div>-->
                <!--        <a class="dropdown-item" href="#">-->
                <!--            <span class="text-danger">-->
                <!--                <strong>-->
                <!--                    <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>-->
                <!--            </span>-->
                <!--            <span class="small float-right text-muted">11:21 AM</span>-->
                <!--            <div class="dropdown-message small">This is an automated server response message. All systems-->
                <!--                are online.</div>-->
                <!--        </a>-->
                <!--        <div class="dropdown-divider"></div>-->
                <!--        <a class="dropdown-item" href="#">-->
                <!--            <span class="text-success">-->
                <!--                <strong>-->
                <!--                    <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>-->
                <!--            </span>-->
                <!--            <span class="small float-right text-muted">11:21 AM</span>-->
                <!--            <div class="dropdown-message small">This is an automated server response message. All systems-->
                <!--                are online.</div>-->
                <!--        </a>-->
                <!--        <div class="dropdown-divider"></div>-->
                <!--        <a class="dropdown-item small" href="#">View all alerts</a>-->
                <!--    </div>-->
                <!--</li>-->
                <!--<li class="nav-item">-->
                <!--    <form class="form-inline my-2 my-lg-0 mr-lg-2">-->
                <!--        <div class="input-group">-->
                <!--            <input class="form-control search-top" type="text" placeholder="Search for...">-->
                <!--            <span class="input-group-btn">-->
                <!--                <button class="btn btn-primary" type="button" style="height:100%;">-->
                <!--                    <i class="fa fa-search"></i>-->
                <!--                </button>-->
                <!--            </span>-->
                <!--        </div>-->
                <!--    </form>-->
                <!--</li>-->
                <li class="nav-item">
                    <li class="nav-item">
                    <a class="nav-link" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-fw fa-sign-out"></i>Logout</a>
                </li>

                </li>
            </ul>
        </div>
    </nav>
    <!-- /Navigation-->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-light" type="button" data-dismiss="modal">Cancel</button>

                        <span class="btn btn-sm btn-light" style="">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                        </span>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
            </div>
        </div>
    </div>



