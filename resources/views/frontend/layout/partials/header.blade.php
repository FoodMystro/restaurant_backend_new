<link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	
    
<header class="header black_nav clearfix element_to_stick" style="">
        <div class="container">
            <div id="logo">
                <a href="{{route('index')}}">
                    @if($data != null)
                    <img src="{{asset('')}}uploads/home_images/{{$data->logo}}" alt="" width="162" height="35" alt="">
                    @else
                    <img src="{{asset('')}}assets/img/logo_sticky.svg" width="162" height="35" alt="">
                    @endif
                </a>
            </div>
            <div class="layer"></div><!-- Opacity Mask Menu Mobile -->
            <ul id="top_menu">
                <!-- <li><a href="#sign-in-dialog" id="sign-in" class="login">Sign In</a></li> -->
                <li>
                    <div class="dropdown dropdown-cart">
                        @if(session()->get('cart') == null)
                            <a href="{{url('cart')}}" class="cart_bt"><strong>0</strong></a>
                        @else
                            <a href="{{url('cart')}}" class="cart_bt"><strong>{{count(session()->get('cart'))}}</strong></a>
                        @endif
                        <div class="dropdown-menu">
                            <ul>
                                <li>
                                    <figure><img src="img/menu-thumb-placeholder.jpg" data-src="{{asset('')}}assets/img/menu-thumb-1.jpg" alt="" width="50" height="50" class="lazy"></figure>
                                    <strong><span>1x Pizza Napoli</span>$12.00</strong>
                                    <a href="#0" class="action"><i class="icon_trash_alt"></i></a>
                                </li>
                                 <li>
                                    <figure><img src="img/menu-thumb-placeholder.jpg" data-src="{{asset('')}}assets/img/menu-thumb-2.jpg" alt="" width="50" height="50" class="lazy"></figure>
                                    <strong><span>1x Hamburgher Maxi</span>$10.00</strong>
                                    <a href="#0" class="action"><i class="icon_trash_alt"></i></a>
                                </li>
                                 <li>
                                    <figure><img src="img/menu-thumb-placeholder.jpg" data-src="{{asset('')}}assets/img/menu-thumb-3.jpg" alt="" width="50" height="50" class="lazy"></figure>
                                    <strong><span>1x Red Wine Bottle</span>$20.00</strong>
                                    <a href="#0" class="action"><i class="icon_trash_alt"></i></a>
                                </li>
                            </ul>
                            <div class="total_drop">
                                <div class="clearfix add_bottom_15"><strong>Total</strong><span>$32.00</span></div>
                                <a href="order.html" class="btn_1 outline">View Cart</a><a href="order.html" class="btn_1">Checkout</a>
                            </div>
                        </div>
                    </div>
                    <!-- /dropdown-cart-->
                </li>
            </ul>
            <!-- /top_menu -->
            <a href="#0" class="open_close">
                <i class="icon_menu"></i><span>Menu</span>
            </a>
           <nav class="main-menu">
                <div id="header_menu">
                    <a href="#0" class="open_close">
                        <i class="icon_close"></i><span>Menu</span>
                    </a>
                    <a href="{{ route('home') }}"><img src="img/logo.svg" width="162" height="35" alt=""></a>
                </div>
                <ul>
                    <li>
                        <a href="{{route('index')}}" class="show-submenu">Home</a>
                    </li>

                    {{-- <li>
                        <a href="" class="show-submenu">Food Rating</a>
                    </li>
                     --}}
                    <li class="submenu">
                        <a href="#0" class="show-submenu">About us</a>
                        <ul>
    				        <li><a href="{{route('help')}}">Help</a></li>
    				        <li><a href="{{route('blog')}}">Blog</a></li>
				        </ul>
                    </li>
                    <li><a href="{{route('contact')}}">Contacts</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
    @if(Session::has('success'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('success') }}");
  @endif
     @if(Session::has('error'))
  toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.error("{{ session('error') }}");
  @endif
  </script>