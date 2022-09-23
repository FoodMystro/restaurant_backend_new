@extends('frontend.layout.master')

@section('content')

<main class="bg_gray" style="margin-top:px;">
		<div id="error_page">
			<div class="container">
				<div class="row justify-content-center text-center">
					<div class="col-xl-7 col-lg-9">
						<figure><img src="{{asset('')}}assets/img/404.svg" alt="" class="img-fluid" width="550" height="234"></figure>
						<p>We're sorry, but the page you were looking for doesn't exist.</p>
						<form method="post" action="grid-listing-filterscol.html">
                                <div class="row g-0 custom-search-input">
                                    <div class="col-lg-10">
                                        <div class="form-group">
                                            <input class="form-control no_border_r" type="text" placeholder="What are you looking for?">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <button class="btn_1 gradient" type="submit">Search</button>
                                    </div>
                                </div>
                                <!-- /row -->
                            </form>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /error -->		
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