@extends('frontend.layout.master')
@section('content')

<main class="bg_gray">
		
		<div class="container margin_60_20" style="margin-top:60px;">
			<form action="{{ route('checkout') }}" method="POST" class="needs-validation" >
				
				@csrf
				<div class="row justify-content-center">
					<div class="col-xl-6 col-lg-8">
						<div class="box_order_form">
							<div class="head">
								<div class="title">
									<h3>Personal Details</h3>
								</div>
							</div>
							<!-- /head -->
							<div class="main">
								<div class="form-group">
									<label>First and Last Name</label>
									<input class="form-control" type="text" name="name" value="" placeholder="First and Last Name" required>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>Email Address</label>
											<input class="form-control" type="email" name="email" value=""  placeholder="Email Address" required>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Phone</label>
											<input class="form-control" type="integer" name="phone" value=""  placeholder="Phone" required>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label>Full Address</label>
									<input class="form-control" type="text" name="address" value=""  placeholder="Full Address" required>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label>City</label>
											<input class="form-control" type="text" name="city" value=""  placeholder="City">
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<label>Postal Code</label>
											<input class="form-control" type="text" name="postcode" value=""  placeholder="0123">
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /box_order_form -->
						{{-- <div class="box_order_form">
							<div class="head">
								<div class="title">
									<h3>Payment Method</h3>
								</div>
							</div>
							<!-- /head -->
							<div class="main">
								<div class="payment_select">
									<label class="container_radio">Credit Card
										<input type="radio" value="" checked name="payment_method">
										<span class="checkmark"></span>
									</label>
									<i class="icon_creditcard"></i>
								</div>
								<div class="form-group">
									<label>Name on card</label>
									<input type="text" class="form-control" id="name_card_order" name="name_card_order" placeholder="First and last name">
								</div>
								<div class="form-group">
									<label>Card number</label>
									<input type="text" id="card_number" name="card_number" class="form-control" placeholder="Card number">
								</div>
								<div class="row">
									<div class="col-md-6">
										<label>Expiration date</label>
										<div class="row">
											<div class="col-md-6 col-6">
												<div class="form-group">
													<input type="text" id="expire_month" name="expire_month" class="form-control" placeholder="mm">
												</div>
											</div>
											<div class="col-md-6 col-6">
												<div class="form-group">
													<input type="text" id="expire_year" name="expire_year" class="form-control" placeholder="yyyy">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-sm-12">
										<div class="form-group">
											<label>Security code</label>
											<div class="row">
												<div class="col-md-4 col-6">
													<div class="form-group">
														<input type="text" id="ccv" name="ccv" class="form-control" placeholder="CCV">
													</div>
												</div>
												<div class="col-md-8 col-6">
													<img src="img/icon_ccv.gif" width="50" height="29" alt="ccv"><small>Last 3 digits</small>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--End row -->
								<div class="payment_select" id="paypal">
									<label class="container_radio">Pay with Paypal
										<input type="radio" value="" name="payment_method">
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="payment_select">
									<label class="container_radio">Pay with Cash
										<input type="radio" value="" name="payment_method">
										<span class="checkmark"></span>
									</label>
									<i class="icon_wallet"></i>
								</div>
							</div>
						</div> --}}
						<!-- /box_order_form -->
					</div>
					<!-- /col -->
					<div class="col-xl-4 col-lg-4" id="sidebar_fixed">
						<div class="box_order">
							<div class="head">
								<h3>Order Summary</h3>
								<div>Pizzeria da Alfredo</div>
							</div>
							<!-- /head -->
							<div class="main">
								
								@php $total = 0 @endphp
							@foreach((array) session('cart') as $id => $details)
								@php $total += $details['price'] * $details['quantity'] @endphp
							@endforeach
								<ul>
									{{-- <li>Date<span>Today 23/11/2019</span></li> --}}
									{{-- <li>Hour<span>08.30pm</span></li> --}}
									<li>Type<span>{{ $details['type'] }}</span></li>
								</ul>
								<hr>
								<ul class="clearfix">
									@if(session('cart'))
											@foreach(session('cart') as $id => $details)
											
											 @if($payment->default_currency == 1)
										<li><a href="{{ route('remove.cart',$id) }}" class="remove_cart" data-id="{{ $id }}" data-token="{{ csrf_token() }}" >{{ $details['quantity'] }}x {{ $details['name'] }}</a><span>£ {{ $details['price'] }}</span></li>
											@endif
											
											 @if($payment->default_currency == 2)
										<li><a href="{{ route('remove.cart',$id) }}" class="remove_cart" data-id="{{ $id }}" data-token="{{ csrf_token() }}" >{{ $details['quantity'] }}x {{ $details['name'] }}</a><span>$ {{ $details['price'] }}</span></li>
											@endif
										
										
										 @if($payment->default_currency == 3)
										<li><a href="{{ route('remove.cart',$id) }}" class="remove_cart" data-id="{{ $id }}" data-token="{{ csrf_token() }}" >{{ $details['quantity'] }}x {{ $details['name'] }}</a><span>€ {{ $details['price'] }}</span></li>
											@endif
											
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
									<li>Delivery fee<span>£ 0</span></li>
									 @endif
									
									 @if($payment->default_currency == 2)
									<li>Delivery fee<span>$ 0</span></li>
									 @endif
									 
									  @if($payment->default_currency == 3)
									<li>Delivery fee<span>€ 0</span></li>
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
								
								@php $grand_total = 0 @endphp
								@if(session('cart'))
									@foreach(session('cart') as $id => $details)
										@php $grand_total += $details['price'] * $details['quantity'] @endphp
										<input type="hidden" name="item_id[]" value="{{ $details['id'] }}">
										<input type="hidden" name="type" value="{{ $details['type'] }}">
										<input type="hidden" name="price[]" value="{{ $details['price'] }}">
										<input type="hidden" name="qty[]" value="{{ $details['quantity'] }}">
										<input type="hidden" name="sub_total[]" value="{{ $details['price'] * $details['quantity'] }}">
										<input type="hidden" name="grand_total" value="{{ $grand_total }}">
										<input type="hidden" name="sub_total" value="{{ $grand_total }}">
									@endforeach
								@endif
								<button class="btn_1 gradient full-width mb_5">Order Now</button>
								<div class="text-center"><small>Or Call Us at <strong>0432 48432854</strong></small></div>
							</div>
						</div>
						<!-- /box_booking -->
					</div>

				</div>
			</form>
		    <!-- /row -->
		</div>
		<!-- /container -->
		
	</main>
	<!-- /main -->

	

	<div id="toTop"></div><!-- Back to top button -->
	
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
	
	

@endsection