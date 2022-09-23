@extends('backend.layout.master')

@section('content')
<div class="content-wrapper">


    <form action="{{ route('add_user')}}" method="post">
		@csrf


    <div class="box_general padding_bottom">
        <div class="header_box version_2">
            <h2><i class="fa fa-user"></i>Add User</h2>
        </div>	

           
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Your name" name="name"  >
                        </div>

                        @error('name')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control  @error('email') is-invalid @enderror" placeholder="Your Email" name="email" value="">
                        </div>
                        @error('email')
                          <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <!-- /row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>password</label>
                            <input type="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Your password" name="password" value="" >
                        </div>
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                       @enderror
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label >Role</label>
                                <div class="styled-select">
                                    <select name="role" class="@error('role') is-invalid @enderror">
                                        <option value="admin" >Admin</option>   
                                        <option value="user">User</option>
                                        <option value="manager">Manager</option>
                                        <option value="supervisor">Kitchen/Supervisor</option>
                                        <option value="staff">Staff</option>
                                        
                                    </select>
                                </div>
                                @error('role')
                                  <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Status</label>
                            <div class="styled-select">
                                <select name="status">
                                    <option value="1">Active</option>
                                    <option value="0">Not Active</option>
                                </select>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /row-->
               
                <button class="btn btn-success">Submit</button>

    </div>
</form>
</div>
@endsection