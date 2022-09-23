@extends('frontend.layout.master')

@section('content')
<main>
		<div class="hero_single inner_pages background-image" data-background="url(img/hero_general_2.jpg)">
			<div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-8 col-lg-10 col-md-8">
							<h1>{{$helpdata->sec1_heading}}</h1>
							<p>{{$helpdata->sec1_paragraph}}</p>
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
			</div>
			<div class="wave hero gray"></div>
		</div>
		<!-- /hero_single -->

		<div class="bg_gray">
			<div class="container margin_30_40">
				<div class="main_title center">
				    <span><em></em></span>
				    <h2>{{$helpdata->sec2_heading}}</h2>
				    <p>{{$helpdata->sec2_paragraph}}</p>
				</div>

				<div class="row">
					@foreach($helpCard as $key)
					<div class="col-lg-4 col-md-6">
						<a class="box_topic" href="{{route('card_info',[$key->id])}}">
							<span><i class="icon_wallet" id=""></i></span>
							<h3>{{$key->heading}}</h3>
							<p>{{$key->paragraph}}</p>
						</a>
					</div>
					@endforeach

					<!-- <div class="col-lg-4 col-md-6">
						<a class="box_topic" href="#0">
							<i class="icon_cloud-upload_alt"></i>
							<h3>Submission</h3>
							<p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris.</p>
						</a>
					</div>
					<div class="col-lg-4 col-md-6">
						<a class="box_topic" href="#0">
							<i class="icon_lifesaver"></i>
							<h3>General help</h3>
							<p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris.</p>
						</a>
					</div>
					<div class="col-lg-4 col-md-6">
						<a class="box_topic" href="#0">
							<i class="icon_globe-2"></i>
							<h3>International</h3>
							<p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris.</p>
						</a>
					</div>
					<div class="col-lg-4 col-md-6">
						<a class="box_topic" href="#0">
							<i class="icon_document_alt"></i>
							<h3>Cancellation</h3>
							<p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris.</p>
						</a>
					</div>
					<div class="col-lg-4 col-md-6">
						<a class="box_topic" href="#0">
							<i class="icon_comment_alt"></i>
							<h3>Reviews</h3>
							<p>Id mea congue dictas, nec et summo mazim impedit. Vim te audiam impetus interpretaris.</p>
						</a>
					</div>
				</div> -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_gray -->
		<div class="container margin_60_40">
				<div class="main_title version_2">
					<span><em></em></span>
					<h2>{{$helpdata->sec3_heading}}</h2>
					<p>{{$helpdata->sec3_paragraph}}</p>
				</div>
				<div class="list_articles clearfix">
					<ul>
						<!-- <li><a href="#0"><i class="icon_documents_alt"></i>Et dicit vidisse epicurei pri</a></li>
						<li><a href="#0"><i class="icon_documents_alt"></i>Ad sit virtute rationibus efficiantur</a></li>
						<li><a href="#0"><i class="icon_documents_alt"></i>Partem vocibus omittam pri ne</a></li>
						<li><a href="#0"><i class="icon_documents_alt"></i>Case debet appareat duo cu</a></li>
						<li><a href="#0"><i class="icon_documents_alt"></i>Impedit torquatos quo in</a></li>
						<li><a href="#0"><i class="icon_documents_alt"></i>Nec omnis alienum no</a></li>
						<li><a href="#0"><i class="icon_documents_alt"></i>Quo eu soleat facilisi menandri</a></li>
						<li><a href="#0"><i class="icon_documents_alt"></i>Et dicit vidisse epicurei pri</a></li> -->
						{!!$helpdata->sec3_artical_list!!}
					</ul>
				</div>
				<!-- /list_articles -->
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