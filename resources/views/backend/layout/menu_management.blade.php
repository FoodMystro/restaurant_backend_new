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
              <li class="breadcrumb-item Available to Order">Menu Management</li>
          </ol>
      <!-- Icon Cards-->
      <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card dashboard text-white bg-primary o-hidden h-100">
                  <div class="card-body">
                      <div class="card-body-icon">
                          <i class="fa fa-fw fa-list"></i>
                      </div>
                      <div class="mr-5">
                          <h5>{{$all_item}} Menu Items</h5>
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
                          <h5>{{$availability}} Available to Order</h5>
                          
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
                          <h5>{{$total_category}} Categories</h5>
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
                          <h5>{{$out_of_stock}} Out of Stock!</h5>
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
      @if(auth()->user()->role == "super"||
            auth()->user()->role == "admin"||
            auth()->user()->role == "manager")
      <div class="box_general padding_bottom">
            <div class="header_box version_2">
                <h2><i class="fa fa-file"></i>Add Menu Item</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p><a href="{{route('add_menu_item')}}" class="btn_1 medium">Add Menu Item</a> </p>
                </div>
            </div>
        </div>
        @endif

      <!-- /cards -->
          <!--  DataTables Card-->
          <div class="card mb-3">
              <div class="card-header">
                  <i class="fa fa-table"></i> Menu List Table</div>
              <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <tr>
                                  <th>ID</th>
                                  <th>Name</th>
                                  <th>Category</th>
                                  <th>Price</th>
                                  <th>Availability</th>
                                  
                                  @if(auth()->user()->role == "super"||
                                  auth()->user()->role == "admin"||
                                  auth()->user()->role == "manager")
                                  <th>Action</th>
                                  @endif
                              </tr>
                          </thead>
                         
                          <tbody>
                              @foreach($menu as $data)
                              <tr>
                                  <td>{{$data->id}}</td>
                                  <td>{{$data->name}}</td>
                                  <td>{{$data->category}}</td>
                                  <td>{{$data->price}}</td>
                                  <td>
                                      @if($data->availability == 0)
                                      <i class="cancel">Out of Stock</i>
                                      @endif
                                      @if($data->availability == 1)
                                      <i class="approved">Available to Order</i>
                                      @endif
                                      
                                    </td>
                                    
                                    @if(auth()->user()->role == "super"||
                                        auth()->user()->role == "admin"||
                                        auth()->user()->role == "manager")
                                  <td>
                                    <a href="{{ route('edit_menu',[$data->id]) }}"><strong>Edit</strong></a>
                                    | <a href="{{route('delete_menu',[$data->id])}}"><strong>Delete</strong></a></td>
                                    @endif
                                </tr>
                              @endforeach
                           
                            
                          </tbody>
                      </table>
                  </div>
              </div>
              <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
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


 @endsection