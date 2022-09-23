@extends('backend.layout.master')
@section('content')
<div class="content-wrapper">
   <div class="container-fluid">
      <ol class="breadcrumb">
         <li class="breadcrumb-item">
            <a href="menu-items.html">CMS Home Card</a>
         </li>
         <li class="breadcrumb-item active">Add Cards</li>
      </ol>
      <div class="box_general padding_bottom">
         <div class="header_box version_2">
            <h2><i class="fa fa-list"></i>Add New Cards</h2>
            <button type="button" class="btn btn-light btn-sm" data-toggle="modal" data-target="#exampleModalCenter" style="margin-left:700px;">ADD CARD</button>
         </div>
         <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLongTitle">HELP CARD</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <div class="row">
                        <div class="col-md-12">
                           <form action="{{route('add_card')}}" method="post">
                              @csrf
                              <div class="card">
                                 <div class="card-body">
                                    <div class="form-group">
                                       <div>
                                          <label>Icon </label>
                                          <input type="text" name="icon" class="form-control" value="">
                                       </div>
                                       <div class="mt-3">
                                          <label>Heading </label>
                                          <input type="text" name="heading" class="form-control" value="">
                                       </div>
                                       <div class="mt-3">
                                          <label>Paragraph </label>
                                          <input type="text" name="paragraph" class="form-control" value="">
                                       </div>
                                       <div class="mt-3">
                                          <label>Info Heading</label>
                                          <input type="text" name="info_heading" class="form-control" value="">
                                       </div>
                                       <div class="mt-3">
                                          <label>Info Paragraph</label>
                                          <input type="text" name="info_paragraph" class="form-control" value="">
                                       </div>
                                       <div class="mt-3">
                                          <label>Heading 1 </label>
                                          <input type="text" name="heading_1" class="form-control" value="">
                                       </div>
                                       <div class="mt-3">
                                          <label>Paragraph 1 </label>
                                          <textarea class="form-1" id="code_preview0" name="paragraph_1" style="height: 300px;"></textarea> 
                                       </div>
                                       <div class="mt-3">
                                          <label>Heading 2 </label>
                                          <input type="text" name="heading_2" class="form-control" value="">
                                       </div>
                                       <div class="mt-3">
                                          <label>Paragraph 2 </label>
                                          <textarea class="form-1" id="code_preview3" name="paragraph_2" style="height: 300px;"></textarea> 
                                       </div>
                                       <div class="mt-3">
                                          <label>Image</label>
                                          <input type="file" name="image" class="" value="">
                                       </div>
                                    </div>
                                 </div>
                              </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                     </div>
                  </div>
               </div>
               </form>
            </div>
         </div>
      </div>
      <div class="col-md-1"></div>
   </div>
   <div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-12">
        <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Icon</th>
      <th scope="col">Heading</th>
      <th scope="col">Paragraph</th>
      <th scope="col">ACTION</th>   
    </tr>
    
  </thead>
  <tbody>
  @foreach($helpcard as $data)
      <tr>
          <td>{{$data->id}}</td>
          <td>{{$data->icon}}</td>
          <td>{{$data->heading}}</td>
          <td>{{$data->paragraph}}</td>
          <td><a href="{{ url('edit/'.$data->id)}}" class="btn btn-sm btn-success">Edit</a></td>
          <td> <a href="{{route('delete',[$data->id])}}" class="btn btn-sm btn-danger">Delete</a></td>
      </tr>
      @endforeach
          
  </tbody>
</table>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>

</div>
</div>
</div>
</div>
<div class="wrapper_indent">
</body>
</html>
@endsection