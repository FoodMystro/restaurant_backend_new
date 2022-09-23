@extends('frontend.layout.master')

@section('content')
<body data-spy="scroll" data-bs-target="#secondary_nav" data-offset="75">
			
	<main>

		<div class="hero_in detail_page background-image" data-background="url({{asset('')}}assets/img/hero_general-1.jpg)" style="margin-top:65px;">
			<div class="wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
				
				<div class="container">
					<div class="main_info">
						<div class="row">
							<div class="col-xl-4 col-lg-5 col-md-6">
								<h1>{{ $data->sec_1_heading }}</h1>
								{{ $data->sec_1_heading3 }} - <a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x47e66e1de36f4147:0xb6615b4092e0351f!2sAssistance+Publique+-+H%C3%B4pitaux+de+Paris+(AP-HP)+-+Si%C3%A8ge!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="blank">Get directions</a>
							</div>
							<div class="col-xl-8 col-lg-7 col-md-6 position-relative">
								<div class="buttons clearfix">
									<!-- <span class="magnific-gallery">
										<a href="img/detail_1.jpg" class="btn_hero" title="Photo title" data-effect="mfp-zoom-in"><i class="icon_image"></i>View photos</a>
										<a href="img/detail_2.jpg" title="Photo title" data-effect="mfp-zoom-in"></a>
										<a href="img/detail_3.jpg" title="Photo title" data-effect="mfp-zoom-in"></a>
									</span> -->
									<a href="#0" class="btn_hero wishlist"><i class="icon_phone"></i>Contact us</a>
								</div>
							</div>
						</div>
						<!-- /row -->
					</div>
					<!-- /main_info -->
				</div>
			</div>
		</div>
		<!--/hero_in-->

		<nav class="secondary_nav sticky_horizontal">
		    <div class="container">
		        <ul id="secondary_nav">
		            <li><a href="#section-1">Starters</a></li>
		            <li><a href="#section-2">Main Courses</a></li>
		            <li><a href="#section-3">Desserts</a></li>
		            <li><a href="#section-4">Drinks</a></li>
		        </ul>
		    </div>
		    <span></span>
		</nav>
		<!-- /secondary_nav -->

		<div class="bg_gray">
		    <div class="container margin_detail">
		        <div class="row">
		            <div class="col-lg-8 list_menu">
		                <section id="section-1">
		                    <h4>Starters</h4>
		                    <div class="row">
		                        @foreach ($items as $starter)
									@if($starter->category == 'Starter')
		                        <div class="col-md-6">
		                            <a class="menu_item modal_dialog" href="#modal{{ $starter->id }}" >
		                                <figure><img src="{{asset('')}}assets/img/menu-thumb-placeholder.jpg" data-src="{{asset('')}}assets/img/menu-thumb-1.jpg" alt="thumb" class="lazy"></figure>
		                                <h3>1. {{ $starter->name }}</h3>
		                                <p>{{strip_tags($starter->description)  }}</p>
		                                <strong>RS. {{ $starter->price }}</strong>
		                            </a>
		                        </div>
								@endif
								@endforeach
		                        
		                    </div>
		                    <!-- /row -->
		                </section>
		                <!-- /section -->
		                <section id="section-2">
		                    <h4>Main Courses</h4>
								@foreach ($items as $main)
									@if($main->category == 'Main course')
		                    <div class="row">
		                        <div class="col-md-6">
		                            <a class="menu_item modal_dialog" href="#modal{{ $main->id }}">
		                                <figure><img src="img/menu-thumb-placeholder.jpg" data-src="{{asset('')}}assets/img/menu-thumb-5.jpg" alt="thumb" class="lazy"></figure>
		                                <h3>1. {{ $main->name }}</h3>
		                                <p>{{strip_tags($main->description)  }}</p>
		                                <strong>RS. {{ $main->price }}</strong>
		                            </a>
		                        </div>
		                        @endif
								@endforeach
		                    </div>
		                    <!-- /row -->
		                </section>
		                <!-- /section -->
		                <section id="section-3">
		                    <h4>Desserts</h4>
		                    @foreach ($items as $dessert)
									@if($dessert->category == 'Dessert')
		                    <div class="row">
		                        <div class="col-md-6">
		                            <a class="menu_item modal_dialog" href="#modal{{ $dessert->id }}">
		                                <figure><img src="img/menu-thumb-placeholder.jpg" data-src="{{asset('')}}assets/img/menu-thumb-5.jpg" alt="thumb" class="lazy"></figure>
		                                <h3>1. {{ $dessert->name }}</h3>
		                                <p>{{strip_tags($dessert->description)  }}</p>
		                                <strong>RS. {{ $dessert->price }}</strong>
		                            </a>
		                        </div>
									@endif
								@endforeach
		                    </div>
		                    <!-- /row -->
		                </section>
		                <!-- /section -->
		                <section id="section-4">
		                    <h4>Drinks</h4>
		                    @foreach ($items as $drinks)
									@if($drinks->category == 'Drinks')
							<div class="row">
		                        <div class="col-md-6">
		                            <a class="menu_item modal_dialog" href="#modal{{ $drinks->id }}">
										<figure><img src="img/menu-thumb-placeholder.jpg" data-src="{{asset('')}}assets/img/menu-thumb-5.jpg" alt="thumb" class="lazy"></figure>
		                                <h3>1. {{ $drinks->name }}</h3>
		                                <p>{{strip_tags($drinks->description)  }}</p>
		                                <strong>RS. {{ $drinks->price }}</strong>
		                            </a>
		                        </div>
									@endif
								@endforeach
		                    </div>
		                    <!-- /row -->
		                </section>
		                <!-- /section -->
		            </div>
		            <!-- /col -->
		            <div class="col-lg-4" id="sidebar_fixed">
		                <div class="box_order mobile_fixed">
		                    <div class="head">
		                        <h3>Order Summary</h3>
		                        <a href="#0" class="close_panel_mobile"><i class="icon_close"></i></a>
		                    </div>
		                    <!-- /head -->
							@php $total = 0 @endphp
                        @foreach((array) session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                        @endforeach
		                    <div class="main">
		                        <ul class="clearfix">
									@if(session('cart'))
                        				@foreach(session('cart') as $id => $details)
		                            <li><a href="{{ route('remove.cart',$id) }}" class="remove_cart" data-id="{{ $id }}" data-token="{{ csrf_token() }}" >{{ $details['quantity'] }}x {{ $details['name'] }}</a><span>$ {{ $details['price'] }}</span></li>
									@endforeach
									@endif
		                        </ul>
		                        <ul class="clearfix">

		                              @if($payment->default_currency == 1)
		                            <li>Subtotal<span>£ {{ $total }}</span></li>
		                            @endif
		                            
		                             @if($payment->default_currency == 2)
		                            <li>Subtotal<span>$ {{ $total }}</span></li>
		                            @endif
		                            
		                             @if($payment->default_currency == 3)
		                            <li>Subtotal<span>€ {{ $total }}</span></li>
		                            @endif
		                            
		                            @if($payment->default_currency == 1)
		                            <li>Delivery fee<span>£ 0.00</span></li>
		                             @endif
		                             
		                              @if($payment->default_currency == 2)
		                            <li>Delivery fee<span>$ 0.00</span></li>
		                             @endif
		                             
		                              @if($payment->default_currency == 3)
		                            <li>Delivery fee<span>€ 0.00</span></li>
		                             @endif
		                             
		                             
		                            @if($payment->default_currency == 1)
		                            <li class="total">Total<span>£ {{ $total }}</span></li>
		                            @endif
		                            
		                             @if($payment->default_currency == 2)
		                            <li class="total">Total<span>$ {{ $total }}</span></li>
		                            @endif
		                            
		                             @if($payment->default_currency == 3)
		                            <li class="total">Total<span>€ {{ $total }}</span></li>
		                            @endif
		                            
		                        </ul>
		                        <div class="row opt_order">
		                            <!-- <div class="col-6">
		                                <label class="container_radio">Delivery
		                                    <input type="radio" value="option1" name="opt_order" checked>
		                                    <span class="checkmark"></span>
		                                </label>
		                            </div> -->
		                            <div class="col-6">
		                                <label class="container_radio">Order For Collection
		                                    <input type="radio" value="option1" name="opt_order">
		                                    <span class="checkmark"></span>
		                                </label>
		                            </div>

									<div class="col-12 mt-2">
										<div class="form-group">
											<div class="custom_select clearfix">
												<label>Select Location</label>
												<select class="wide form-control" style="display: none;">
													<option value="">London</option>
													<option value="East London">East London</option>
													<option value="South East London">South East London</option>
													<option value="West London">West London</option>
													<option value="North London">North London</option>
													<option value="Central London">Central London</option>
												</select>
												<div class="nice-select wide form-control" tabindex="0"><span class="current">Restaurant Location</span>
													<ul class="list">
														<li data-value="" class="option selected focus">London</li>
														<li data-value="East London" class="option">East London</li>
														<li data-value="South East London" class="option">South East London</li>
														<li data-value="West London" class="option">West London</li>
														<li data-value="North London" class="option">North London</li>
														<li data-value="Central London" class="option">Central London</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
		                        </div>
		                        {{-- <div class="dropdown day">
		                            <a href="#" data-bs-toggle="dropdown">Day <span id="selected_day"></span></a>
		                            <div class="dropdown-menu">
		                                <div class="dropdown-menu-content">
		                                    <h4>Which day delivered?</h4>
		                                    <div class="radio_select chose_day">
		                                        <ul>
		                                            <li>
		                                                <input type="radio" id="day_1" name="day" value="Today">
		                                                <label for="day_1">Today<em>-40%</em></label>
		                                            </li>
		                                            <li>
		                                                <input type="radio" id="day_2" name="day" value="Tomorrow">
		                                                <label for="day_2">Tomorrow<em>-40%</em></label>
		                                            </li>
		                                        </ul>
		                                    </div>
		                                    <!-- /people_select -->
		                                </div>
		                            </div>
		                        </div>
		                        <!-- /dropdown -->
		                        <div class="dropdown time">
		                            <a href="#" data-bs-toggle="dropdown">Time <span id="selected_time"></span></a>
		                            <div class="dropdown-menu">
		                                <div class="dropdown-menu-content">
		                                    <h4>Lunch</h4>
		                                    <div class="radio_select add_bottom_15">
		                                        <ul>
		                                            <li>
		                                                <input type="radio" id="time_1" name="time" value="12.00am">
		                                                <label for="time_1">12.00<em>-40%</em></label>
		                                            </li>
		                                            <li>
		                                                <input type="radio" id="time_2" name="time" value="08.30pm">
		                                                <label for="time_2">12.30<em>-40%</em></label>
		                                            </li>
		                                            <li>
		                                                <input type="radio" id="time_3" name="time" value="09.00pm">
		                                                <label for="time_3">1.00<em>-40%</em></label>
		                                            </li>
		                                            <li>
		                                                <input type="radio" id="time_4" name="time" value="09.30pm">
		                                                <label for="time_4">1.30<em>-40%</em></label>
		                                            </li>
		                                        </ul>
		                                    </div>
		                                    <!-- /time_select -->
		                                    <h4>Dinner</h4>
		                                    <div class="radio_select">
		                                        <ul>
		                                            <li>
		                                                <input type="radio" id="time_5" name="time" value="08.00pm">
		                                                <label for="time_1">20.00<em>-40%</em></label>
		                                            </li>
		                                            <li>
		                                                <input type="radio" id="time_6" name="time" value="08.30pm">
		                                                <label for="time_2">20.30<em>-40%</em></label>
		                                            </li>
		                                            <li>
		                                                <input type="radio" id="time_7" name="time" value="09.00pm">
		                                                <label for="time_3">21.00<em>-40%</em></label>
		                                            </li>
		                                            <li>
		                                                <input type="radio" id="time_8" name="time" value="09.30pm">
		                                                <label for="time_4">21.30<em>-40%</em></label>
		                                            </li>
		                                        </ul>
		                                    </div>
		                                    <!-- /time_select -->
		                                </div>
		                            </div>
		                        </div> --}}
		                        <!-- /dropdown -->
								<input type="hidden" name="type" value="delivery">
		                        <div class="btn_1_mobile">
									@if(session('cart')!= null)
		                            <a href="{{ route('cart') }}" class="btn_1 gradient full-width mb_5">Order Now</a>
		                            <div class="text-center"><small>No money charged on this steps</small></div>
									@else
		                            <div class="text-center"><small>Shopping cart is empty</small></div>
									@endif
		                        </div>
		                    </div>
		                </div>
		                <!-- /box_order -->
		                <div class="btn_reserve_fixed"><a href="#0" class="btn_1 gradient full-width">View Basket</a></div>
		            </div>
		        </div>
		        <!-- /row -->
		    </div>
		    <!-- /container -->
		</div>
		<!-- /bg_gray -->
	</main>
	<!-- /main -->

	

	<div id="toTop" class="detail_page"></div><!-- Back to top button -->

	
<!-- Sign In Modal -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
    <div class="modal_header">
        <h3>Sign In</h3>
    </div>
    <form>
        <div class="sign-in-wrapper">
            <a href="#0" class="social_bt facebook">Login with Facebook</a>
            <a href="#0" class="social_bt google">Login with Google</a>
            <div class="divider"><span>Or</span></div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email">
                <i class="icon_mail_alt"></i>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" id="password" value="">
                <i class="icon_lock_alt"></i>
            </div>
            <div class="clearfix add_bottom_15">
                <div class="checkboxes float-start">
                    <label class="container_check">Remember me
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="float-end"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
            </div>
            <div class="text-center">
                <input type="submit" value="Log In" class="btn_1 full-width mb_5">
                Don’t have an account? <a href="register.html">Sign up</a>
            </div>
            <div id="forgot_pw">
                <div class="form-group">
                    <label>Please confirm login email below</label>
                    <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                    <i class="icon_mail_alt"></i>
                </div>
                <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
                <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
            </div>
        </div>
    </form>
    <!--form -->
</div>
<!-- /Sign In Modal -->

<!-- Modal item order -->

@foreach ($items as $item)
	
<!-- Modal item order -->
<div id="modal{{ $item->id }}" class="zoom-anim-dialog mfp-hide modal-dialog1">
	<div class="small-dialog-header">
		<h3 id="itm_name">{{ $item->name }}</h3>
	</div>
	<div class="content">
		<h5>Quantity</h5>
		<div class="numbers-row">
			<input type="text" value="1" id="item_qty" class="itm_qty form-control" name="quantity">
		</div>
		<h5>Size</h5>
			<ul class="clearfix">
				@foreach ($item->size as $size_details)
					
				<li>
					<label class="container_radio">{{ $size_details->item_size }}<span>+ ${{ $size_details->item_price }}</span>
						<input type="radio" value="option1" name="options_1">
						<span class="checkmark"></span>
					</label>
				</li>
				@endforeach
			</ul>
			<h5>Extra Ingredients</h5>
			<ul class="clearfix">
				@foreach ($item->ingredient as $ingredient_details)
				<li>
					<label class="container_check">{{ $ingredient_details->quantity }}<span>+ ${{ $ingredient_details->price }}</span>
						<input type="checkbox">
						<span class="checkmark"></span>
					</label>
				</li>
				@endforeach
			</ul>
	</div>
    <div class="footer">
        <div class="row small-gutters">
            {{-- <div class="col-md-4">
                <button type="reset" class="btn_1 outline full-width mb-mobile">Cancel</button>
            </div> --}}
            <div class="col-md-12">
                <a  href="{{ route('add.delivery.cart', $item['id']) }}" 
						data-token="{{ csrf_token() }}" 
						data-type="{{ 'delivery' }}"
						type="reset" class="btn_1 full-width">Add to cart</a>
            </div>
        </div>
        <!-- /Row -->
    </div>
    </div>
    <!-- /Modal item order -->
	
	@endforeach
	
	
</body>
@endsection

@section('scripts')
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
	$(document).ready(function(){
		$(".add_cart").click(function(){
        var id= $(this).data("id");
        var slug= 'delivery';
        console.log('slug');
        console.log(slug);
        var token = $(this).data("token");
        // console.log('token');
        // console.log(token);
        $.ajax({
            url: "/add-delivery-to-cart/"+id,
            type: 'get',
            data: {
                "id": id,
                "_token": 'token',
				"slug":'slug',
            },
            success: function (){
                console.log("Success");
                // console.log(data);
            }
        });
		$(".remove_cart").click(function(){
			alert('hello');
        var id= $(this).data("id");
        var token = $(this).data("token");
        $.ajax({
            url: "remove-from-cart",
            type: 'get',
            data: {
                "id": id,
                "_token": 'token',
            },
            success: function (){
                console.log("Success");
                // console.log(data);
            }
        });
    });
	});
</script>
@endsection