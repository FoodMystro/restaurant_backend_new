@extends('backend.layout.master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<body class="fixed-nav sticky-footer" id="page-top">
    <!-- Navigation-->
  
    <!-- /Navigation-->
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
        <form action="{{route('add_admin')}}" method="POST">
            @csrf
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('dashboard')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Add admin user</li>
            </ol>
            <!-- /box_general-->
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-list"></i>Add New Admin</h2>
                </div>
                <div class="wrapper_indent">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group radio_c_group no_label">
                                <label>Available For:</label><br>
                                <label class="container_check">Delivery
                                    <input type="checkbox" value="1" name="delivery" @if($data->delivery == 1) checked @endif>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container_check">Collection
                                    <input type="checkbox" value="1" name="collection" @if($data->collection == 1) checked @endif>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container_check">Table Service
                                    <input type="checkbox" value="1" name="table_service" @if($data->table_service == 1) checked @endif>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror">
                            </div>
                        </div>
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                       @enderror
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="last_name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">
                            </div>
                        </div>
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                       @enderror
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone No.</label>
                                <input type="tel" name="phone_no" class="form-control">
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
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Role</label>
                                <div class="styled-select">
                                    <select class="@error('role') is-invalid @enderror" name="role">
                                        <option value="admin" >Admin</option>   
                                        <option value="user">User</option>
                                        <option value="manager">Manager</option>
                                        <option value="supervisor">Kitchen/Supervisor</option>
                                        <option value="staff">Staff</option>
                                    </select>
                                </div>
                            </div>
                            @error('role')
                            <div class="alert alert-danger">{{ $message }}</div>
                           @enderror
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Enter New Password</label>
                                <input type="password" name="password" class="form-control @error('role') is-invalid @enderror">
                            </div>
                        </div>
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                       @enderror
                    </div>
           
                    <!-- /row-->
                    <!-- /box_general-->
                </div>
                <!-- /.container-fluid-->
                <div class="row">
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-success">ADD</button>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                </div>
            </div>
            <!-- /.container-wrapper-->
        </form>


            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fa fa-angle-up"></i>
            </a>
             
        
</body>

</html>
@endsection