@extends('backend.layout.master')
@section('content')


<body class="fixed-nav sticky-footer" id="page-top">
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="">CMS Help Cards</a>
                </li>
                <li class="breadcrumb-item active">Edit Cards</li>
            </ol>
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-file"></i>Add New Cards</i></h2>
                </div>
            </div>
           <div class="container-fluid">
                <div class="row">
                        <div class="col-md-12">
                        <form action="{{ route('update_card',['id'=> $data->id])}}" method="post">
                           @csrf
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group">
                                        <div>
                                            <label>Icon </label>
                                            <input type="text" name="icon" class="form-control" value="{{$data->icon}}">
                                        </div>
                                        <div><br>
                                            <label>Heading </label>
                                            <input type="text" name="heading" class="form-control" value="{{$data->heading}}">
                                        </div>
                                        <br>
                                        <div>
                                            <label>Paragraph </label>
                                            <input type="text" name="paragraph" class="form-control" value="{{$data->paragraph}}">
                                        </div>
                                        <div class="mt-3">
                                          <label>Info Heading</label>
                                          <input type="text" name="info_heading" class="form-control" value="{{$data->info_heading}}">
                                       </div>
                                       <div class="mt-3">
                                          <label>Info Paragraph</label>
                                          <input type="text" name="info_paragraph" class="form-control" value="{{$data->info_paragraph}}">
                                       </div>
                                       <div class="mt-3">
                                          <label>Heading 1 </label>
                                          <input type="text" name="heading_1" class="form-control" value="{{$data->heading_1}}">
                                       </div>
                                       <div class="mt-3">
                                          <label>Paragraph 1 </label>
                                          <textarea class="form-1" id="code_preview0" name="paragraph_1" style="height: 300px;">{{$data->paragraph_1}}</textarea> 
                                       </div>
                                       <div class="mt-3">
                                          <label>Heading 2 </label>
                                          <input type="text" name="heading_2" class="form-control" value="{{$data->heading_2}}">
                                       </div>
                                       <div class="mt-3">
                                          <label>Paragraph 2 </label>
                                          <textarea class="form-1" id="code_preview3" name="paragraph_2" style="height: 300px;">{{$data->paragraph_2}}</textarea> 
                                       </div>
                                       <div class="mt-3">
                                          <label>Image</label>
                                          <input type="file" name="Image" class="" value="">
                                       </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3 ml-3">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                </div>
               
            </div>
         </form>                          
</body>


@endsection




<!-- 
<div class="content-wrapper">
   <div class="container-fluid">
      <ol class="breadcrumb">
         <li class="breadcrumb-item">
            <a href="menu-items.html">CMS Home Card</a>
         </li>
         <li class="breadcrumb-item active">Edit Cards</li>
      </ol>
      <div class="box_general padding_bottom">
         <div class="header_box version_2">
            <h2><i class="fa fa-list"></i>Edit Cards</h2>
         </div>
         <div class="col-md-4 mt-3"></div>
                 </div>
                 
                    <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <div>
                                        <label>Icon </label>
                                        <input type="text" name="icon" class="form-control" value="{{$data->icon}}">    
                                    </div>
                                        <div><br>
                                            <label>Heading </label>
                                            <input type="text" name="heading" class="form-control" value="{{$data->heading}}">
                                        </div><br>
                                        <div>
                                            <label>Paragraph </label>
                                            <input type="text" name="paragraph" class="form-control" value="{{$data->paragraph}}">
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        </div>
                                   
                    </div>
                    
                </div>
            </div>
            
            
    </body>
</html> -->