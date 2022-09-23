@extends('backend.layout.master')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{route('dashboard')}}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Add listing</li>
      </ol>
	<form action="{{ route('update_user',['id'=> $user->id])}}" method="post"  enctype="multipart/form-data">
		@csrf
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-user"></i>Profile details</h2>
			</div>	
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
					<label>Your photo</label>
						<input type="file" name="photo">
						<img src="{{asset('')}}uploads/home_images/{{Auth::user()->photo}}" alt="" width="40%" height="100px" class="lazy mt-2">
				    </div>
				</div>
				<div class="col-md-8 add_top_30">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Name</label>
								<input type="text" class="form-control" placeholder="Your name" name="name" value="{{Auth::user()->name}}">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Last name</label>
								<input type="text" class="form-control" placeholder="Your last name" name="last_name" value="{{Auth::user()->last_name}}">
							</div>
						</div>
					</div>
					<!-- /row-->
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Telephone</label>
								<input type="text" class="form-control" placeholder="Your telephone number" name="telephone" value="{{Auth::user()->telephone}}" >
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Email</label>
								<input type="email" readonly class="form-control" placeholder="Your email" name="email" value="{{Auth::user()->email}}">
							</div>
						</div>
					</div>
					<!-- /row-->
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Personal info</label>
								<textarea style="height:100px;" class="form-control" placeholder="Personal info" name="Personal_info">{{Auth::user()->Personal_info}}</textarea>
							</div>
						</div>
					</div>
					<button class="btn btn-success">Update</button>
					<!-- /row-->
				</div>
			</div>
		</div>
	</form>
		<!-- /box_general-->
		
		<div class="row">
		
			<div class="col-md-6">
				<div class="box_general padding_bottom">
					<form action="{{route('update_password',[$user->id,Auth::user()->id])}}" method="POST">
					@csrf
					<!-- @if ($errors->any())
								@foreach ($errors->all() as $error)
									<div>{{$error}}</div>
								@endforeach
							@endif -->
					<div>		
					</div>
						<div class="header_box version_2">
							<h2><i class="fa fa-lock"></i>Change password</h2>
						</div>
					
						<div class="form-group">
							<label>Old password</label>
							<input class="form-control" type="password" name="old_password"  />
							<div  class="danger text-danger">{{$errors->first('old_password')}}</div>
						
						</div>
						
						<div class="form-group">
							<label>New password</label>
							<input class="form-control" type="password" name="password" />
							<div  class="danger text-danger">{{$errors->first('new_password')}}</div>
						</div>
						<div class="form-group">
							<label>Confirm new password</label>
							<input class="form-control" type="password" name="confirm_password" />
							<div  class="danger text-danger">{{$errors->first('password')}}</div>
						</div>
						<button class="btn btn-success">Update</button>
					</form>
				</div>
			</div>
		
			<div class="col-md-6">
				<div class="box_general padding_bottom">
			
					<form action="{{route('update_email',[$user->id,Auth::user()->id])}}" method="POST">
						@csrf
					
						<div class="header_box version_2">
							<h2><i class="fa fa-envelope"></i>Change email</h2>
						</div>
						<div class="form-group">
							<label>Old email</label>
							<input class="form-control" name="oldemail" id="old_email" type="email" required>
							<div class="danger text-danger">{{$errors->first('oldemail')}}</div>
						</div>
						<div class="form-group">
							<label>New email</label>
							<input class="form-control" name="email" id="new_email" type="email" required>
							<div class="danger text-danger">{{$errors->first('email')}}</div>
						</div>
						<div class="form-group">
							<label>Confirm new email</label>
							<input class="form-control" name="confirm_new_email" id="confirm_new_email" type="email" required>
							<div class="danger text-danger">{{$errors->first('confirm_new_email')}}</div>
						</div>
						<button class="btn btn-success">Update</button>
					</form>
				</div>
			</div>
		</div>
		<!-- /row
		<p><a href="#0" class="btn_1 medium">Save</a></p> -->
	  </div>
	  <!-- /.container-fluid-->
   	</div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="#0">Logout</a>
          </div>
        </div>
      </div>
    </div> -->
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

	<script>
        $(document).ready(function() {
            toastr.options.timeOut = 10000;
            @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
            @elseif(Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @endif
        });

    </script> -->
@endsection