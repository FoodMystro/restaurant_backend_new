@extends('backend.layout.master')

@section('content')
<body class="fixed-nav sticky-footer" id="page-top">
    <!-- Navigation-->
 
    <!-- /Navigation-->
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <form action="{{ route('update_category',['id'=> $category->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('category')}}">Category</a>
                </li>
                <li class="breadcrumb-item active">Add Category</li>
            </ol>
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-file"></i>Add New Category</i></h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Category Name</label>
                   
                            <input type="text"  name="category_name" class="form-control" value="{{$category->category_name}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label >Status</label>
                            <div class="styled-select">
                                <select name="status">
                                    <option {{ ($category->status) == '1' ? 'selected' : '' }}  value="1">Active</option>   
                                    <option {{ ($category->status) == '0' ? 'selected' : '' }} value="0">Not Active</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Keywords</label>
                            <input name="keywords" type="text" class="form-control" value="{{$category->keywords}}">
                        </div>
                    </div>
                   
                    <div class="col-md-6">
                        <div class="form-group radio_c_group no_label">
                            <label>Available For:</label>
                            
                            <label class="container_radio">Delivery
                                <input type="checkbox" name="delivery" value="1" @if($category->delivery == 1) checked @endif>
                                <span class="checkmark"></span>
                            </label>
                            <label class="container_radio">Collection
                                <input type="checkbox" name="collection" value="1" @if($category->collection == 1) checked @endif>
                                <span class="checkmark"></span>
                            </label>
                            <label class="container_radio">Table Service
                                <input type="checkbox" name="table_service" value="1" @if($category->table_service == 1) checked @endif>
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>

                
                <!-- /row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Description</label>
                            <!-- <div class=""> -->
                            <textarea class="form-1" id="code_preview0" name="description" style="height: 300px;" value="">{{$category->description}}</textarea> 
                            <!-- </div> -->
                        </div>
                    </div>
                </div>

                <!-- /row start-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Choose file</label>
                            <h4>PHOTO</h4>
                            <input type="hidden" value="{{$category->photos}}" name="img">                   
                            <input type="file" class="" id="" name="photos">
                        </div>
                    </div>
                </div>
               
                <!-- /row end-->
            
            <!-- /box_general-->

            <!-- /box_general-->
            <!-- /.container-wrapper-->
            <button type="submit" class="btn btn-success mt-3">Update</button>
        </form>
           
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fa fa-angle-up"></i>
            </a>

            
        

            <!-- Bootstrap core JavaScript-->
       
            <!-- <script>
            $('.editor').summernote({
                fontSizes: ['10', '14'],
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough']],
                    ['fontsize', ['fontsize']],
                    ['para', ['ul', 'ol', 'paragraph']]
                ],
                placeholder: 'Write here ....',
                tabsize: 2,
                height: 200
            });
           </script> -->

        </body>



@endsection