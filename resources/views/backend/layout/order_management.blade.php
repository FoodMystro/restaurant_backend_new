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
        <li class="breadcrumb-item active">Order Management</li>
      </ol>
        <!-- Icon Cards-->
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card dashboard text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-envelope"></i>
                        </div>
                        <div class="mr-5">
                            <h5>New Orders!</h5>
                        </div>
                    </div>
                    <!-- <a class="card-footer text-white clearfix small z-1" href="new-orders.html">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </a> -->
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card dashboard text-white bg-success o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-shopping-cart"></i>
                        </div>
                        <div class="mr-5">
                            <h5>{{$processed_order}} Processed Orders!</h5>
                        </div>
                    </div>
                    <!-- <a class="card-footer text-white clearfix small z-1" href="processed-orders.html">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </a> -->
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card dashboard text-white bg-warning o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-refresh"></i>
                        </div>
                        <div class="mr-5">
                            <h5>{{$pending_order}} Pending Orders!</h5>
                        </div>
                    </div>
                    <!-- <a class="card-footer text-white clearfix small z-1" href="pending-orders.html">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </a> -->
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card dashboard text-white bg-danger o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-close"></i>
                        </div>
                        <div class="mr-5">
                            <h5>{{$cancelled_order}} Cancelled Orders!</h5>
                        </div>
                    </div>
                    <!-- <a class="card-footer text-white clearfix small z-1" href="cancelled-orders.html">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </a> -->
                </div>
            </div>
        </div>
        <!-- /cards -->
		<!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> List of Orders</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Email</th>
                  <th>Customer</th>
                  <th>Date</th>
                  <th>Status</th>
                  
                  @if(auth()->user()->role == "super"||
                  auth()->user()->role == "admin"||
                  auth()->user()->role == "manager")
                  <th>Action</th>
                  @endif
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Email</th>
                  <th>Customer</th>
                  <th>Date</th>
                  <th>Status</th>
                  
                  @if(auth()->user()->role == "super"||
                  auth()->user()->role == "admin"||
                  auth()->user()->role == "manager")
                  <th>Action</th>
                  @endif
                </tr>
              </tfoot>
              <tbody>
                @foreach ($orders as $order)
              
                <tr>
                  <td>{{ $order->id }}</td>
                  <td>@if(!empty($order->ordered_user)){{ $order->ordered_user->email }}@endif</td>
                    <td>@if(!empty($order->ordered_user)){{ $order->ordered_user->name }}@endif</td>
                  
                  <td>{{ $order->created_at }}</td>
                  <td>
                    @if($order->status == 'Pending')<i class="pending">Pending</i>
                    @elseif($order->status == 'Cancelled')<i class="cancel">Cancelled</i>
                    @elseif($order->status == 'Processed')<i class="approved">Processed</i>
                    @endif
                  </td>
                  
                  @if(auth()->user()->role == "super"||
                  auth()->user()->role == "admin"||
                  auth()->user()->role == "manager"||
                  auth()->user()->role == "supervisor")
                  <td><a href="{{ url('edit_order/'.$order->id) }}"><strong>Edit</strong></a> | <a href="{{ route('delete_order',[$order->id]) }}"><strong>Delete</strong></a></td>
                  @endif
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
	  <!-- /tables-->
	  </div>
	  <!-- /container-fluid-->
   	</div>
    <!-- /container-wrapper-->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    </div>

	
</body>
</html>


@endsection