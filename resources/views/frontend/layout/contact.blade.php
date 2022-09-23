@extends('frontend.layout.master')

@section('content')

	
	<main>
		<div class="hero_single inner_pages background-image" data-background="url({{asset('')}}assets/img/home_section_2.jpg)">
			<div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-9 col-lg-10 col-md-8">
							<h1>Contact FooYes</h1>
							<p>A successful restaurant experience</p>
						</div>
					</div>
					<!-- /row -->
				</div>
			</div>
			<div class="wave gray hero"></div>
		</div>
		<!-- /hero_single -->

		<div class="bg_gray">
		    <div class="container margin_60_40">
		        <div class="row justify-content-center">
		            <div class="col-lg-4">
		                <div class="box_contacts">
		                    <i class="icon_lifesaver"></i>
		                    <h2>Help Center</h2>
		                    <a href="#0">+94 423-23-221</a> - <a href="#0">help@fooyes.com</a>
		                    <small>MON to FRI 9am-6pm SAT 9am-2pm</small>
		                </div>
		            </div>
		            <div class="col-lg-4">
		                <div class="box_contacts">
		                    <i class="icon_pin_alt"></i>
		                    <h2>Address</h2>
		                    <div>6th Forrest Ray, London - 10001 UK</div>
		                    <small>MON to FRI 9am-6pm SAT 9am-2pm</small>
		                </div>
		            </div>
		            <div class="col-lg-4">
		                <div class="box_contacts">
		                    <i class="icon_cloud-upload_alt"></i>
		                    <h2>Submissions</h2>
		                    <a href="#0">+94 423-23-221</a> - <a href="#0">order@fooyes.com</a>
		                    <small>MON to FRI 9am-6pm SAT 9am-2pm</small>
		                </div>
		            </div>
		        </div>
		        <!-- /row -->
		    </div>
		    <!-- /container -->
		</div>
		<!-- /bg_gray -->

		<div class="container margin_60_20">
		    <h5 class="mb_5">Drop Us a Line</h5>
		    <div class="row">
		        <div class="col-lg-4 col-md-6 add_bottom_25">
		            <div id="message-contact"></div>
			            <form method="post" action="assets/contact.php" id="contactform" autocomplete="off">
			                <div class="form-group">
			                    <input class="form-control" type="text" placeholder="Name" id="name_contact" name="name_contact">
			                </div>
			                <div class="form-group">
			                    <input class="form-control" type="email" placeholder="Email" id="email_contact" name="email_contact">
			                </div>
			                <div class="form-group">
			                    <textarea class="form-control" style="height: 150px;" placeholder="Message" id="message_contact" name="message_contact"></textarea>
			                </div>
			                <div class="form-group">
			                    <input class="form-control" type="text" id="verify_contact" name="verify_contact" placeholder="Are you human? 3 + 1 =">
			                </div>
			                <div class="form-group">
			                    <input class="btn_1 gradient full-width" type="submit" value="Submit" id="submit-contact">
			                </div>
			            </form>
		        	</div>
		            <div class="col-lg-8 col-md-6 add_bottom_25">
		                <iframe class="map_contact" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39714.47749917409!2d-0.13662037019554393!3d51.52871971170425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondra%2C+Regno+Unito!5e0!3m2!1sit!2ses!4v1557824540343!5m2!1sit!2ses" allowfullscreen></iframe>
		            </div>
		        </div>
		    </div>
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