@extends('backend.layout.master')

@section('content')

<body class="fixed-nav sticky-footer" id="page-top">
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{route('dashboard')}}">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Admin Backend</li>
      </ol>

        <div class="box_general padding_bottom">
            <div class="header_box version_2">
                <h2><i class="fa fa-file"></i>Add New Admin User</h2>
            </div>
            <!-- <div class="row">
                <div class="col-md-6">
                    <div class="form-group radio_c_group no_label">
                        <label>Available For:</label><br>
                        <label class="container_check">Delivery
                            <input type="checkbox" value="checkbox" name="delivery">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_check">Collection
                            <input type="checkbox" value="checkbox" name="collection">
                            <span class="checkmark"></span>
                        </label>
                        <label class="container_check">Table Service
                            <input type="checkbox" value="checkbox" name="table-service">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                </div> -->

                <div class="col-md-12">
                    <p><a href="{{route('add_new_admin')}}" class="btn_1 medium">Add Admin User</a> </p>
                </div>
                        
            </div>
        </div>
		<!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> User Management</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                @foreach($admin as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>{{$data->last_name}}</td>
                    <td>{{$data->email}}</td>

                    <td>
                     @if($data->status == 0)
                      <i class="cancel">Not Active</i>
                      @endif
                      @if($data->status == 1)
                      <i class="approved">Active</i>
                      @endif
                    </td>

                    <td>{{$data->role}}</td>
                    <td><a href="{{ route('edit_admin',[$data->id]) }}"><strong>Edit</strong></a> | <a href="{{ route('delete_admin',[$data->id]) }}"><strong>Delete</strong></a></td>
                </tr>
                @endforeach
                <!-- <tr>
                    <td>13</td>
                    <td>Dan </td>
                    <td>Alfredo</td>
                    <td>Dan.Alfredo@email.com</td>
                    <td><i class="cancel">Not Active</i></td>
                    <td>Store Owner</td>
                    <td><a href="add-new-admin.html"><strong>Edit</strong></a> | <a href="#0"><strong>Delete</strong></a></td>

                </tr>
                 <tr>
                    <td>14</td>
                    <td>Valeria</td>
                    <td>Felice</td>
                    <td>Taxo.Mex@email.com</td>
                    <td><i class="approved">Active</i></td>
                    <td>Store Manager</td>
                    <td><a href="add-new-admin.html"><strong>Edit</strong></a> | <a href="#0"><strong>Delete</strong></a></td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Smtih</td>
                    <td>Mex</td>
                    <td>Smtih.Mex@email.com</td>
                    <td><i class="approved">Active</i></td>
                    <td>Basic User</td>
                    <td><a href="add-new-admin.html"><strong>Edit</strong></a> | <a href="#0"><strong>Delete</strong></a></td>
                </tr> -->
            </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
	  <!-- /tables-->
        <!-- /row-->
	  </div>
	  <!-- /container-fluid-->
   	</div>
    <!-- /container-wrapper-->

    

   
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
  
    

</body>
</html>

@endsection