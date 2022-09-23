@extends('backend.layout.master')
 
@section('content')

<body class="fixed-nav sticky-footer" id="page-top">
    <div class="content-wrapper">
        <div class="container-fluid">
            
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Category List</li>
            </ol>

            @if(auth()->user()->role == "super"||
            auth()->user()->role == "admin"||
            auth()->user()->role == "manager")
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-file"></i>Add New Category</h2>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p><a href="{{route('add_category')}}" class="btn_1 medium">Add Category</a> </p>
                    </div>
                </div>
            </div>
            @endif
            <!--  DataTables Card-->
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Category List Table</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category Name</th>
                                            <!-- <th>Keywords</th> -->
                                            <th>Available For</th>
                                            <th>Status</th>
                                            <!-- <th>Discription</th> -->
                                            <!-- <th>Photos</th> -->
                                            
                                    @if(auth()->user()->role == "super"||
                                    auth()->user()->role == "admin"||
                                    auth()->user()->role == "manager")
                                            <th>Action</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach($category as $data)
                                        <tr>
                                            <td>{{$data->id}}</td>
                                            <td>{{$data->category_name}}</td>
                                            <td>
                                                @if($data->delivery == 1)
                                                <i class="blue">Delivery</i>
                                                @endif
                                                @if($data->collection == 1)
                                                <i class="pink">Collection</i>
                                                @endif
                                                @if($data->table_service == 1) 
                                                <i class="pending">Table Service</i>
                                                @endif 
                                            </td>
                                            <td>
                                            @if($data->status == 1)
                                            <i class="approved"> Active</i>
                                            @endif  

                                            @if($data->status == 0)
                                            <i class="cancel">Not Active</i>
                                            @endif

                                            </td>
                                            <!-- <td>{{$data->keywords}}</td> -->
                                           
                                            <!-- <td>{!! $data->description !!}</td> -->
                                            <!-- <td><img src="{{asset('')}}uploads/home_images/{{$data->photos}}" alt=""  width="60px" height="60px" class="lazy"></td> -->
                                            
                                            @if(auth()->user()->role == "super"||
                                            auth()->user()->role == "admin"||
                                            auth()->user()->role == "manager")
                                            <td><a href="{{ route('edit_category',[$data->id]) }}"><strong >Edit</strong></a> | <a href="{{url('/delete_category',[$data->id])}}"><strong>Delete</strong></a></td>
                                            @endif
                                        </tr>
                                        @endforeach

                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
              
            </div>
            
        </div>
        <!-- /container-fluid-->
    </div>
    
  
                  <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>
    
</body>

</html>
                                    <!-- <td>
                                        <i class="blue">Delivery</i> 
                                        <i class="pink">Collection</i> 
                                        <i class="pending">Table Service</i>
                                    </td>
                                    <td><i class="cancel">Not Active</i></td>
                                    <td><a href="add-category.html"><strong>Edit</strong></a> | <a href="#0"><strong>Delete</strong></a></td>


                                <tr>
                                    <td>001</td>
                                    <td>Starters</td>
                                    <td>
                                        <i class="blue">Delivery</i> 
                                        <i class="pink">Collection</i> 
                                        <i class="pending">Table Service</i>
                                    </td>
                                    <td><i class="cancel">Not Active</i></td>
                                    <td><a href="add-category.html"><strong>Edit</strong></a> | <a href="#0"><strong>Delete</strong></a></td>
                                </tr>
                                <tr>
                                    <td>002</td>
                                    <td>Main Courses</td>
                                    <td>
                                        <i class="blue">Delivery</i> 
                                        <i class="pink">Collection</i> 
                                        <i class="pending">Table Service</i>
                                    </td>
                                    <td><i class="approved">Active</i></td>
                                    <td><a href="add-category.html"><strong>Edit</strong></a> | <a href="#0"><strong>Delete</strong></a></td>
                                </tr>
                                <tr>
                                    <td>003</td>
                                    <td>Desserts</td>
                                    <td>
                                        <i class="blue">Delivery</i>
                                    </td>
                                    <td><i class="approved">Active</i></td>
                                    <td><a href="add-category.html"><strong>Edit</strong></a> | <a href="#0"><strong>Delete</strong></a></td>
                                </tr>
                                <tr>
                                    <td>004</td>
                                    <td>Drinks</td>
                                    <td>
                                        <i class="pink">Collection</i>
                                    </td>
                                    <td><i class="cancel">Not Active</i></td>
                                    <td><a href="add-category.html"><strong>Edit</strong></a> | <a href="#0"><strong>Delete</strong></a></td>
                                </tr>
                                <tr>
                                    <td>004</td>
                                    <td>Special Offers</td>
                                    <td><i class="pending">Table Service</i></td>
                                    <td><i class="approved">Active</i></td>
                                    <td><a href="add-category.html"><strong>Edit</strong></a> | <a href="#0"><strong>Delete</strong></a></td>
                                </tr> -->

@endsection