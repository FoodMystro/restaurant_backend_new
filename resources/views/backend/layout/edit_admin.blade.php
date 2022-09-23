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
        <form action="{{route('update_admin',['id'=>$data->id])}}" method="POST" >
            @csrf
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="admin-backend.html">Admin Backend</a>
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
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" name="name" class="form-control" value="{{$data->name}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="last_name" class="form-control" value="{{$data->last_name}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" value="{{$data->email}}">
                            </div>
                        </div>
                        <!-- <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone No.</label>
                                <input type="tel" name="phone_no" class="form-control" value="{{$data->phone_no}}">
                            </div>
                        </div> -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Status</label>
                                <div class="styled-select">
                                    @if($data->status==1)
                                    <select name="status">
                                        <option value="1">Active</option>
                                        <option value="0">Not Active</option>
                                    </select>
                                    @endif
                                    @if($data->status==0)
                                    <select name="status">
                                        <option value="0">Not Active</option>
                                        <option value="1">Active</option>
                                    </select>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Role</label>
                                <div class="styled-select">
                                    @if($data->role=="super")
                                    <select name="role">
                                       <option value="admin" >Super Admin</option>
                                    </select>
                                    @endif
                                @if($data->role=="admin")
                                    <select name="role">
                                       <option value="admin" >Admin</option>
                                        <option value="manager">Manager</option>
                                        <option value="supervisor">Kitchen/Supervisor</option>
                                        <option value="staff">Staff</option>
                                    </select>
                                    @endif
                                    @if($data->role=="manager")
                                    <select name="role">
                                        <option value="manager">Manager</option>
                                       <option value="admin" >Admin</option>
                                        <option value="supervisor">Kitchen/Supervisor</option>
                                        <option value="staff">Staff</option>
                                    </select>
                                    @endif
                                    @if($data->role=="supervisor")
                                    <select name="role">
                                        <option value="supervisor">Kitchen/Supervisor</option>
                                        <option value="manager">Manager</option>
                                       <option value="admin" >Admin</option>
                                        <option value="user">User</option>
                                        <option value="staff">Staff</option>
                                    </select>
                                    @endif
                                    @if($data->role=="supervisor")
                                    <select name="role">
                                        <option value="staff">Staff</option>
                                        <option value="supervisor">Kitchen/Supervisor</option>
                                        <option value="manager">Manager</option>
                                       <option value="admin" >Admin</option>
                                        <option value="user">User</option>
                                    </select>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-12">
                            <div class="form-group">
                                <label>Enter New Password</label>
                                <input type="password" name="new_password" class="form-control" value="{{$data->new_password}}">
                            </div>
                        </div> -->
                    </div>
                    <!-- /row-->
                    <!-- /box_general-->
                </div>
                <!-- /.container-fluid-->
                <div class="row">
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-success">UPDATE</button>
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