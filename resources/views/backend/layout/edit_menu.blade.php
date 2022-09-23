@extends('backend.layout.master')
 

 
 @section('content')

<body class="fixed-nav sticky-footer" id="page-top">
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('menu_management')}}">Menu Items</a>
                </li>
                <li class="breadcrumb-item active">Edit Menu Item</li>
            </ol>
            <!-- /box_general-->
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-list"></i>Edit Menu item</h2>
                </div>
                <div class="wrapper_indent">
                    <form action="{{ route('update_menu',['id'=>$display->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Choose Category</label>
                                <div class="styled-select">
                                    <select name="category">
                                       @foreach($category as $categories)
                                             <!--<option>{{$categories->category_name}}</option>-->
                                             <option value="{{ $categories->category_name }}" {{$display->category == $categories->category_name  ? 'selected' : ''}}>{{ $categories->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Availability</label>
                                <div class="styled-select">
                                    <select name="availability">
                                         <option {{ ($display->availability) == '1' ? 'selected' : '' }} value="1">Available to Order</option>
                                         <option {{ ($display->availability) == '0' ? 'selected' : '' }} value="0">Out of Stock</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Preparation Time</label>
                                <div class="styled-select">
                                    <select name="preparation_time">
                                        <option {{ ($display->preparation_time) == '15 Minutes' ? 'selected' : '' }}>15 Minutes</option>
                                        <option {{ ($display->preparation_time) == '20 Minutes' ? 'selected' : '' }}>20 Minutes</option>
                                        <option {{ ($display->preparation_time) == '25 Minutes' ? 'selected' : '' }}>25 Minutes</option>
                                        <option {{ ($display->preparation_time) == '30 Minutes' ? 'selected' : '' }}>30 Minutes</option>
                                        <option {{ ($display->preparation_time) == '35 Minutes' ? 'selected' : '' }}>35 Minutes</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group radio_c_group no_label">
                                <label>Available For:</label>
                                <label class="container_radio">Delivery
                                    <input type="checkbox" value="1" name="delivery" @if($display->delivery == 1) checked @endif>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container_radio">Collection
                                    <input type="checkbox" value="1" name="collection" @if($display->collection == 1) checked @endif>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container_radio">Table Service
                                    <input type="checkbox" value="1" name="table_service" @if($display->table_service == 1) checked @endif>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- /row-->
                    <div class="menu-item-section clearfix">
                        <h4>Menu item #1</h4>
                        <div>
                            <a href="#0"><i class="fa fa-plus-circle"></i></a>
                            <a href="#0"><i class="fa fa-minus-circle"></i></a>
                        </div>
                    </div>
                    <div class="strip_menu_items">
                        <div class="row">
                            <div class="col-xl-3">
                                <div class="form-group">
                                    <label>Choose file</label>
                                    <div> <label for="">Photo</label></div>
                                     <input type="file" name="Photo" value="{{$display->photo}}">
                                     <img src="{{asset('')}}uploads/home_images/{{$display->photo}}" alt="" width="60%" height="167px" class="lazy">
                                </div>
                            </div>
                            <div class="col-xl-9">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" value="{{$display->name}}" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Price</label>
                                        <input type="text" name="item_price" class="form-control" value="{{$display->price}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Description</label>              
                                                <textarea class="form-1" id="code_preview0" name="description" style="height: 300px;">{{$display->description}}</textarea>   
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                          
                            
                                <div class="form-group">
                                    <label>Item optionas</label>
                                    <div id="addr0" class="appendme">
                                        @foreach($items_o as $op)
                                            <div class="item_opt_wrapper" id="item_opt_wrapper{{$op->id}}{{$op->item_id}}">
                                                <div class="row">
                                                    <div class=" col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="+ $3.50" name="itemprice[]" value="{{$op->item_price}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Ex. Medium" name="itemsize[]" value="{{$op->item_size}}">
                                                             <td class="text-center"><button class="btn btn-danger remove" onclick="removee({{$op->id}}{{$op->item_id}})" type="button">Remove</button></td>
                                                        </div>
                                                    </div>
                                                </div>
                                        <!-- /row-->
                                            </div>
                                        @endforeach
                                </div>
                               
                                    <!-- /item_opt_wrapper-->
                                 <!-- <div class="item_opt_wrapper" style="background-color: #fff;">
                                   
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="+ $5.50" name="item3">
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-8">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Ex. Large" name="item4>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <div class="form-group radio_c_group">
                                                    <label class="container_radio">Checkbox
                                                        <input type="radio" value="1"  checked="checked" name="status2>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                    <label class="container_radio">Radio
                                                        <input type="radio" value="checkbox" name="option_item_settings_2">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                </div> -->
                                <div class="btn btn-light btn-sm mt-2" id="add">ADD ITEM</div>
                                
                                <div class="item_opt_wrapper mt-3">
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div>
                                                    <input type="text" class="form-control" placeholder="minimum" name="minimum" value="{{$display->minimum}}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div>
                                                    <input type="text" class="form-control" placeholder="maximum" name="maximum" value="{{$display->maximum}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- End form-group -->


                                <div class="form-group">
                                    <label class="mt-3">Item ingredients</label>
                                    <div id="add2">
                                      @foreach($ing as $in)
                                        <div class="item_opt_wrapper"id="item_in_wrapper{{$in->id}}{{$in->item_id}}">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group">
                                                        <input type="intetger" class="form-control" placeholder="+ $2.50" name="price[]" value="{{$in->price}}">
                                                    </div>
                                                </div>
                                                <div class=" col-md-6">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Ex. Extra tomato" name="quantity[]" value="{{$in->quantity}}">
                                                    <td class="text-center"><button class="btn btn-danger remove" onclick="rem({{$in->id}}{{$in->item_id}})" type="button">Remove</button>
                                                    </div>
                                                </div>
            
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div><!-- End form-group -->
                                    <div class="btn btn-light btn-sm mt-2" id="add3">ADD ITEM</div>
                            </div>
                            <!-- End row -->
                           
                    
                       <!-- !-- End strip_menu_items --> 
                    </div>
                    <!-- /box_general-->
                </div>
                <!-- /.container-fluid-->
            </div>
            <!-- /.container-wrapper-->
            <p>
              <button type="submit" class="btn btn-primary">Save Item</button>
                <!-- <a href="#0" class="btn_1 medium gray">Add another item</a> -->
            </p>

</form>

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fa fa-angle-up"></i>
            </a>
            
        
</body>


 
 <script>
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
            </script>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
        i=0;
            $("#add").click(function () {
                // console.log('fdlx');
            $("#addr0").append(' <div class="item_opt_wrapper" id="item_opt_wrapper'+i+'"><div class="row"><div class="col-lg-6 col-md-6"><div class="form-group"><input type="text" class="form-control" placeholder="+ $3.50" name="itemprice[]"></div></div><div class="col-lg-6 col-md-6"><div class="form-group d-flex"><input type="text" class="form-control" placeholder="Ex. Medium" name="itemsize[]"> <td class="text-center"><button class="ml-2 btn btn-danger remove" onclick="removee('+i+')" type="button">Remove</button></td></div></div></div></div></div></div>');
            i++;
            });
            function removee(id)
            {
                $("#item_opt_wrapper"+id).remove();
            }
        </script> 

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
          
          j=0;
                $('#add3').click(function(){
            //   console.log('hljnesdf');
                $('#add2').append(' <div class="item_opt_wrapper" id="item_in_wrapper'+j+'"><div class="row"><div class="col-lg-6 col-md-6"><div class="form-group"><input type="intetger" class="form-control" placeholder="+ $2.50" name="price[]"></div></div><div class=" col-md-6"><div class="form-group d-flex"><input type="text" class="form-control" placeholder="Ex. Extra tomato" name="quantity[]"><td class="text-center"><button class="ml-2 btn btn-danger remove" onclick="rem('+j+')" type="button">Remove</button></td></div></div></div></div>')
                    j++;
                });
           
           
           function rem(id){
               
               $("#item_in_wrapper"+id).remove();
           }
           
           
        </script>
 
 
 
 @endsection