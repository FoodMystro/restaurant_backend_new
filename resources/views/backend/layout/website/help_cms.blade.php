@extends('backend.layout.master')
 
@section('content')
<form action="{{ route('update2',['id'=>$helpdata->id])}}" method="post">
    @csrf
    <div class="content-wrapper">
        <div class="container-fluid">
                <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="menu-items.html">Help Items</a>
                </li>
                <li class="breadcrumb-item active">Add Help Item</li>
            </ol>
            <!-- /box_general-->
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-list"></i>CMS</h2>
                </div>
            
    <div class="menu-item-section clearfix">
        <h4>Section 1</h4>
        <div>
            <a href="#0"><i class="fa fa-plus-circle"></i></a>
            <a href="#0"><i class="fa fa-minus-circle"></i></a>
        </div>
    </div>
    <div class="strip_menu_items">
        <div class="row">
            <div class="col-xl-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Heading</label>
                            <input type="text" name="sec1_heading" class="form-control" value="{{$helpdata->sec1_heading}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Paragraph</label>
                            <input type="text" name="sec1_paragraph" class="form-control" value="{{$helpdata->sec1_paragraph}}">
                        </div>
                    </div>
                </div>

            <div class="menu-item-section clearfix">
                <h4>Section 2</h4>
                <div>
                    <a href="#0"><i class="fa fa-plus-circle"></i></a>
                    <a href="#0"><i class="fa fa-minus-circle"></i></a>
                </div>  
            </div>
                        
            <div class="strip_menu_items">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Heading</label>
                                        <input type="text" name="sec2_heading" class="form-control" value="{{$helpdata->sec2_heading}}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Paragraph</label>
                                        <input type="text" name="sec2_paragraph" class="form-control" value="{{$helpdata->sec2_paragraph}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!-- <div class="col-md-4">
                                        <div class="card">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <div>
                                                    <label>Icon 1</label>
                                                    <input type="text" name="sec2_card1_icon1" class="form-control" value="">
                                                </div>
                                                    <div><br>
                                                        <label>Heading 1</label>
                                                        <input type="text" name="sec2_card1_heading1" class="form-control" value="">
                                                    </div><br>
                                                    <div>
                                                        <label>Paragraph 1</label>
                                                        <input type="text" name="sec2_card1_paragraph1" class="form-control" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   
                                    </div> -->
<!-- 
                                    <div class="col-md-4">
                                            <div class="card">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div>
                                                        <label>Icon 2</label>
                                                        <input type="text" name="sec2_card2_icon2" class="form-control" value="">
                                                    </div>
                                                    <div><br>
                                                        <label>Heading 2</label>
                                                        <input type="text" name="sec2_card2_heading2" class="form-control" value="">
                                                    </div><br>
                                                    <div>
                                                        <label>Paragraph 2</label>
                                                        <input type="text" name="sec2_card2_paragraph2" class="form-control" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>   
                                    </div> -->

                                    <!-- <div class="col-md-4">
                                            <div class="card">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <div>
                                                        <label>Icon 3</label>
                                                        <input type="text" name="sec2_card3_icon3" class="form-control" value="">
                                                    </div>
                                                        <div><br>
                                                            <label>Heading 3</label>
                                                            <input type="text" name="sec2_card3_heading3" class="form-control" value="">
                                                        </div><br>
                                                        <div>
                                                            <label>Paragraph 3</label>
                                                            <input type="text" name="sec2_card3_paragraph3" class="form-control" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>   
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 mt-3">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <div>
                                                            <label>Icon 4</label>
                                                            <input type="text" name="sec2_card4_icon4" class="form-control" value="">
                                                        </div>
                                                            <div><br>
                                                                <label>Heading 4</label>
                                                                <input type="text" name="sec2_card4_heading4" class="form-control" value="">
                                                            </div><br>
                                                            <div>
                                                                <label>Paragraph 4</label>
                                                                <input type="text" name="sec2_card4_paragraph4" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>   
                                            </div>

                                            <div class="col-md-4 mt-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <div>
                                                                <label>Icon 5</label>
                                                                <input type="text" name="sec2_card5_icon5" class="form-control" value="">
                                                            </div>
                                                                <div><br>
                                                                    <label>Heading 5</label>
                                                                    <input type="text" name="menu_item_title" class="form-control" value="">
                                                                </div><br>
                                                                <div>
                                                                    <label>Paragraph 5</label>
                                                                    <input type="text" name="sec2_card5_paragraph5" class="form-control" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>   
                                                </div>

                                                <div class="col-md-4 mt-3">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <div>
                                                                    <label>Icon 6</label>
                                                                    <input type="text" name="sec2_card6_icon6" class="form-control" value="">
                                                                </div>
                                                                    <div><br>
                                                                        <label>Heading 6</label>
                                                                        <input type="text" name="sec2_card6_heading6" class="form-control" value="">
                                                                    </div><br>
                                                                    <div>
                                                                        <label>Paragraph 6</label>
                                                                        <input type="text" name="sec2_card6_paragraph6" class="form-control" value="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>   
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <!-- section 3 -->         
                                            <div class="menu-item-section clearfix">
                                                <h4>Section 3</h4>
                                                <div>
                                                    <a href="#0"><i class="fa fa-plus-circle"></i></a>
                                                    <a href="#0"><i class="fa fa-minus-circle"></i></a>
                                                </div>
                                            </div>
                                                    
                                                <div class="card">
                                                    <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>H1 Tag</label>
                                                                <input type="text" name="sec3_heading" class="form-control" value="{{$helpdata->sec3_heading}}">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Paragraph</label>
                                                                <input type="text" name="sec3_paragraph" class="form-control" value="{{$helpdata->sec3_paragraph}}">
                                                            </div>
                                                        </div>
                                                    </div>  
                                                    
                                                    <div>
                                                        <div class="form-group">
                                                            <textarea class="form-2" row="3" id="code_preview1" name="sec3_artical_list" style="height: 300px;">{{$helpdata->sec3_artical_list}}</textarea> 
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button type="submit" class="btn btn-primary">UPDATE</button>
                                                    </div>
                                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>     
   

                
   </form>
</body>



@endsection

