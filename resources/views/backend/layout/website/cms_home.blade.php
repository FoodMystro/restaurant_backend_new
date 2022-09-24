@extends('backend.layout.master')
@section('content')

<form action="{{ route('update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
   @csrf
   <div class="content-wrapper">
   <div class="container-fluid">
   <!-- Breadcrumbs-->
   <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="menu-items.html">Home Items</a>
      </li>
      <li class="breadcrumb-item active">Edit Home Item</li>
   </ol>
   <!-- /box_general-->
   <div class="box_general padding_bottom">
   <div class="header_box version_2">
      <h2><i class="fa fa-list"></i>CMS</h2>
   </div>
   <div class="wrapper_indent">
   <div class="row">
      <div class="col-md-6">
         <div class="form-group">
            <label>Choose file</label>
            <h4>Logo</h4>
            <input type="file" name="logo" value="{{$data->logo}}">
            <img src="{{asset('')}}uploads/home_images/{{$data->logo}}" alt="" width="60%" height="167px" class="lazy">
         </div>
      </div>
   </div>
   <div class="row">
   <div class="col-md-4">
         <div class="form-group">
            <label>Business Name</label>
            <input type="text" name="sec_1_heading11" class="form-control"  value="{{$data->sec_1_heading11}}">
         </div>
      </div>
      <div class="col-md-4">
         <div class="form-group">
            <label>Phone No</label>
            <input type="text" name="sec_1_heading1" class="form-control"  value="{{$data->sec_1_heading1}}">
         </div>
      </div>
      <div class="col-md-4">
         <div class="form-group">
            <label>Email</label>
            <input type="text" name="sec_1_heading2" class="form-control"  value="{{$data->sec_1_heading2}}">
         </div>
      </div>
      <div class="col-md-4">
         <div class="form-group">
            <label>Address</label>
            <input type="text" name="sec_1_heading3" class="form-control"  value="{{$data->sec_1_heading3}}">
         </div>
      </div>
      <div class="col-md-4">
         <div class="form-group">
            <label>Post Code</label>
            <input type="text" name="sec_1_heading9" class="form-control"  value="{{$data->sec_1_heading9}}">
         </div>
      </div>
      <div class="col-md-4">
            <div class="form-group">
               <label>Keywords</label>
               <input type="text" name="sec_1_heading10" class="form-control"  value="{{$data->sec_1_heading10}}">
            </div>
         </div>
   </div>
   <div class="row">
         <div class="col-md-4">
            <div class="form-group">
               <label>Food Rating URL (Optional)</label>
               <input type="text" name="sec_1_heading5" class="form-control"  value="{{$data->sec_1_heading5}}">
            </div>
         </div>
         <div class="col-md-4">
            <div class="form-group">
               <label>FaceBook Page (Optional)</label>
               <input type="text" name="sec_1_heading6" class="form-control"  value="{{$data->sec_1_heading6}}">
            </div>
         </div>
         <div class="col-md-4">
            <div class="form-group">
               <label>Twitter (Optional)</label>
               <input type="text" name="sec_1_heading7" class="form-control"  value="{{$data->sec_1_heading7}}">
            </div>
         </div>
         <div class="col-md-4">
            <div class="form-group">
               <label>Instagram (Optional)</label>
               <input type="text" name="sec_1_heading8" class="form-control"  value="{{$data->sec_1_heading8}}">
            </div>
         </div>
         <div class="col-md-4">
         <div class="form-group">
            <label>Website (Optional)</label>
            <input type="text" name="sec_1_heading4" class="form-control"  value="{{$data->sec_1_heading4}}">
         </div>
      </div>
   </div>
  
   <!-- /row-->
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
            <div class="col-md-8">
               <div class="form-group">
                  <label>H1 Tag</label>
                  <input type="text" name="sec_1_heading" class="form-control" value="{{$data->sec_1_heading}}">
               </div>
               <div class="form-group">
                  <label>Paragraph</label>
                  <input type="text" name="sec_1_paragraph" class="form-control"  value="{{$data->sec_1_paragraph}}" >
               </div>
               <!-- <div class="row">
                  <div class="col-sm-6">
                     <div class="form-group">
                         <label>Phone No</label>
                         <input type="text" name="sec_1_heading1" class="form-control"  value="{{$data->sec_1_heading1}}">
                     </div>
                     <div class="form-group">
                         <label>Email</label>
                         <input type="text" name="sec_1_heading2" class="form-control"  value="{{$data->sec_1_heading2}}">
                     </div>
                     <div class="form-group">
                         <label>Address</label>
                         <input type="text" name="sec_1_heading3" class="form-control"  value="{{$data->sec_1_heading3}}">
                     </div>
                  </div>
                  </div> -->
            </div>
            <div class="col-md-4">
               <div class="card">
                  <div class="card-body">
                     <div class="form-group">
                        <label>Header Right Image:</label>
                        <div>
                           <!-- <input type="text" name="sec_1_right_img" class="form-control" value="{{$data->sec_1_right_img}}"> -->
                           <input type="file" name="sec_1_right_img" class="" value="{{$data->sec_1_right_img}}">
                           <img src="{{asset('')}}uploads/home_images/{{$data->sec_1_right_img}}" width="100%" height="100px;">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="menu-item-section clearfix mt-2">
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
                     <div class="col-md-12">
                        <div class="form-group">
                           <label>Heading</label>
                           <input type="text" name="sec_2_heading" class="form-control" value="{{$data->sec_2_heading}}">
                        </div>
                        <div class="form-group">
                           <label>Paragraph</label>
                           <input type="text" name="sec_2_paragraph" class="form-control" value="{{$data->sec_2_paragraph}}">
                        </div>
                        <div class="row">
                           <div class="col-md-4">
                              <div class="card">
                                 <div class="card-body">
                                    <div class="form-group">
@php
$role=Auth()->user()->role;
@endphp
                             @if($role=='super')
                                       <div>
                                          <label>Delivery</label>
                                          <input type="checkbox" name="sec_2_card_1_status" value="1" @if($data->sec_2_card_1_status == 1) checked @endif>
                                       </div>
                                       @endif
                                       <br>
                                       <div>
                                          <label>Image 1</label>
                                          <input type="file" name="sec_2_img1" class="" value="{{$data->sec_2_img1}}">
                                          <img src="{{asset('')}}uploads/home_images/{{$data->sec_2_img1}}" width="100%" height="100px;">
                                       </div>
                                       <div>
                                          <label>Heading 1</label>
                                          <input type="text" name="sec_2_heading_1" class="form-control" value="{{$data->sec_2_heading_1}}">
                                       </div>
                                       <br>
                                       <div>
                                          <label>Paragraph 1</label>
                                          <input type="text" name="sec_2_paragraph_1" class="form-control" value="{{$data->sec_2_paragraph_1}}">
                                       </div>
                                      
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="card">
                                 <div class="card-body">
                                    <div class="form-group">
                                       @if($role=='super')
                                       <div>
                                          <label>Collection</label>
                                          <input type="checkbox" name="sec_2_card_2_status" value="1" @if($data->sec_2_card_2_status == 1) checked @endif>
                                       </div>
                                       @endif
                                       <br>
                                       <div>
                                          <label>Image 2</label>
                                          <input type="file" name="sec_2_img_2" class="" value="{{$data->sec_2_img_2}}">
                                          <img src="{{asset('')}}uploads/home_images/{{$data->sec_2_img_2}}" width="100%" height="100px;">
                                       </div>
                                       <div><br>
                                          <label>Heading 2</label>
                                          <input type="text" name="sec_2_heading_2" class="form-control" value="{{$data->sec_2_heading_2}}">
                                       </div>
                                       <br>
                                       <div>
                                          <label>Paragraph 2</label>
                                          <input type="text" name="sec_2_paragraph_2" class="form-control" value="{{$data->sec_2_paragraph_2}}">
                                       </div>
                                     
                                       
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="card">
                                 <div class="card-body">
                                    <div class="form-group">
                                       @if($role=='super')
                                       <div>
                                          <label>Table Service</label>
                                          <input type="checkbox" name="sec_2_card_3_status" value="1" @if($data->sec_2_card_3_status == 1) checked @endif>
                                       </div>
                                       @endif
                                       <br>
                                       <div>
                                          <label>Image 3</label>
                                          <input type="file" name="sec_2_img_3" class="" value="{{$data->sec_2_img_3}}">
                                          <img src="{{asset('')}}uploads/home_images/{{$data->sec_2_img_3}}" width="100%" height="100px;">
                                       </div>
                                       <div><br>
                                          <label>Heading 3</label>
                                          <input type="text" name="sec_2_heading_3" class="form-control" value="{{$data->sec_2_heading_3}}">
                                       </div>
                                       <br>
                                       <div>
                                          <label>Paragraph 3</label>
                                          <input type="text" name="sec_2_paragraph_3" class="form-control" value="{{$data->sec_2_paragraph_3}}">
                                       </div>

                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="menu-item-section clearfix mt-3">
                     <h4>Section 3</h4>
                     <div>
                        <a href="#0"><i class="fa fa-plus-circle"></i></a>
                        <a href="#0"><i class="fa fa-minus-circle"></i></a>
                     </div>
                  </div>
                  <div class="strip_menu_items">
                     <div class="row">
                        <div class="col-xl-12">
                           <div class="row">
                              <div class="col-md-4">
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="form-group">
                                          <div>
                                             <label>Easy Order</label>
                                             <input type="checkbox" name="sec_3_card_1_status" value="1" @if($data->sec_3_card_1_status == 1) checked @endif>
                                          </div>
                                          <br>
                                          <div>
                                             <label>Left Image 1</label>
                                             <input type="file" name="sec3_card1_img1" class="" value="{{$data->sec3_card1_img1}}">
                                             <img src="{{asset('')}}uploads/home_images/{{$data->sec3_card1_img1}}" width="100%" height="100px;">
                                          </div>
                                          <div><br>
                                             <label>Heading 1</label>
                                             <input type="text" name="sec3_card1_heading1" class="form-control" value="{{$data->sec3_card1_heading1}}">
                                          </div>
                                          <br>
                                          <div>
                                             <label>Paragraph 1</label>
                                             <input type="text" name="sec3_card1_paragraph1" class="form-control" value="{{$data->sec3_card1_paragraph1}}">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="form-group">
                                          <div>
                                             <label>Quick Delivery </label>
                                             <input type="checkbox" name="sec_3_card_2_status" value="1" @if($data->sec_3_card_2_status == 1) checked @endif>
                                          </div>
                                          <br>
                                          <div>
                                             <label>Left Image 2</label>
                                             <input type="file" name="sec3_card2_img2" class="" value="{{$data->sec3_card2_img2}}">
                                             <img src="{{asset('')}}uploads/home_images/{{$data->sec3_card2_img2}}" width="100%" height="100px;">
                                          </div>
                                          <div><br>
                                             <label>Heading 2</label>
                                             <input type="text" name="sec3_card2_heading2" class="form-control" value="{{$data->sec3_card2_heading2}}">
                                          </div>
                                          <br>
                                          <div>
                                             <label>Paragraph 2</label>
                                             <input type="text" name="sec3_card2_paragraph2" class="form-control" value="{{$data->sec3_card2_paragraph2}}">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="card">
                                    <div class="card-body">
                                       <div class="form-group">
                                          <div>
                                             <label>Enjoy Food </label>
                                             <input type="checkbox" name="sec_3_card_3_status" value="1" @if($data->sec_3_card_3_status == 1) checked @endif>
                                          </div>
                                          <br>
                                          <div>
                                             <label>Left Image 3</label>
                                             <input type="file" name="sec3_card3_img3" class="" value="{{$data->sec3_card3_img3}}">
                                             <img src="{{asset('')}}uploads/home_images/{{$data->sec3_card3_img3}}" width="100%" height="100px;">
                                          </div>
                                          <div><br>
                                             <label>Heading 3</label>
                                             <input type="text" name="sec3_card3_heading3" class="form-control" value="{{$data->sec3_card3_heading3}}">
                                          </div>
                                          <br>
                                          <div>
                                             <label>Paragraph 3</label>
                                             <input type="text" name="sec3_card3_paragraph3" class="form-control" value="{{$data->sec3_card3_paragraph3}}">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group mt-3">
                              <label>Right Header</label>
                              <div class="row">
                                 <div class="col-md-6">
                                    <div>
                                       <label>Heading</label>
                                       <input type="text" name="sec3_right_header_heading" class="form-control" value="{{$data->sec3_right_header_heading}}">
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div>
                                       <label>Paragraph</label>
                                       <input type="text" name="sec3_right_header_paragraph" class="form-control" value="{{$data->sec3_right_header_paragraph}}">
                                    </div>
                                 </div>
                              </div>
                              <br>
                              <div class="form-group">
                                 {{-- <div class="item_opt_wrapper">
                                    <div class="row">
                                       <div class="col-lg-3 col-md-4">
                                          <div class="d-flex">
                                              <label class="p-2">Title1</label>
                                             <input type="text" class="form-control" name="sec3_title1" placeholder=""  value="{{$data->sec3_title1}}">
                                          </div>
                                       </div>
                                       <div class="col-lg-5 col-md-8">
                                          <div class="form-group d-flex">
                                           
                                             <div class="d-flex">
                                                <label class="p-2">Start</label>
                                                <input type="time" class="form-control " name="sec3_delivery_Stime" placeholder=""  value="{{$data->sec3_delivery_Stime}}">
                                             </div>
                                            
                                             <div class="d-flex ml-4">
                                                   <label class="p-2">End</label>
                                                   <input style="" type="time" class="form-control" name="sec3_delivery_Etime" placeholder=""  value="{{$data->sec3_delivery_Etime}}">                                                   
                                             </div>
                                             
                                          </div>
                                          
                                       </div> --}}
                                    
                                       <!-- <div class="col-lg-4 col-md-12">
                                          <div class="form-group radio_c_group">
                                              <div class="form-check">
                                                  <input class="form-check-input" type="checkbox" value="1" name="delivery_status" id="flexCheckDefault" @if($data->delivery_status == 1) checked @endif>
                                                  <label class="form-check-label" for="flexCheckDefault">Closed!</label>
                                              </div>
                                          </div>
                                          </div> -->
                                    {{-- </div>
                                    
                                 </div>
                                 <div class="item_opt_wrapper" style="background-color: #fff;">
                              
                                    <div class="row">
                                       <div class="col-lg-3 col-md-4">
                                       <div class="d-flex">
                                              <label class="p-2">Title2</label>
                                             <input type="text" class="form-control" name="sec3_title2" placeholder=""  value="{{$data->sec3_title2}}">
                                          </div>
                                       </div>
                                       <div class="col-lg-5 col-md-8">
                                          <div class="form-group d-flex">

                                             <div class="d-flex">
                                                <label class="p-2">Start</label>
                                                <input type="time" class="form-control" name="sec3_collection_Stime" value="{{$data->sec3_collection_Stime}}" placeholder="">
                                             </div> 

                                             <div class="d-flex ml-4">
                                                <label class="p-2">End</label>
                                                <input style="" type="time" class="form-control" name="sec3_collection_Etime"  value="{{$data->sec3_collection_Etime}}" >   
                                             </div>    

                                          </div>
                                       </div> --}}
                                       <!-- <div class="col-lg-4 col-md-12">
                                             <div class="form-group radio_c_group">
                                                 <div class="form-check">
                                                     <input class="form-check-input" type="checkbox" value="1" name="collection_status" id="flexCheckDefault" @if($data->collection_status == 1) checked @endif>
                                                     <label class="form-check-label" for="flexCheckDefault">Closed!</label>
                                                 </div>
                                             </div>
                                          </div> -->
                                    {{-- </div>
                                 </div>
                      
                                 <div class="form-group">
                                    <div class="item_opt_wrapper">
                                
                                       <div class="row">
                                          <div class="col-lg-3 col-md-4">
                                          <div class="d-flex">
                                              <label class="p-2">Title3</label>
                                             <input type="text" class="form-control" name="sec3_title3" placeholder=""  value="{{$data->sec3_title3}}">
                                          </div>
                                          </div>
                                          <div class="col-lg-5 col-md-8">
                                             <div class="form-group d-flex">
                                                <div class="d-flex">
                                                   <label class="p-2">Start</label>
                                                   <input type="time" class="form-control" name="sec3_right_service_Stime" placeholder="" value="{{$data->sec3_right_service_Stime}}">
                                                </div>
                                                <div class="d-flex ml-4">
                                                <label class="p-2">End</label>
                                                <input style="" type="time" class="form-control" name="sec3_table_service_Etime" placeholder="" value="{{$data->sec3_table_service_Etime}}">         
                                                </div>                                          
                                             </div>
                                          </div> --}}
                                          <!-- <div class="col-lg-4 col-md-12">
                                             <div class="form-group radio_c_group">
                                                 <div class="form-check">
                                                     <input class="form-check-input" type="checkbox" value="1" name="table_service_status" id="flexCheckDefault" @if($data->table_service_status == 1) checked @endif>
                                                     <label class="form-check-label" for="flexCheckDefault">Closed!</label>
                                                 </div>
                                             </div>
                                          </div> -->
                                       {{-- </div>
                                 
                                    </div> --}}

                                    
                                    
                                    <!-- section 4 card 1 -->
                                    <div class="menu-item-section clearfix mt-4">
                                       <h4>Section 4</h4>
                                       <div>
                                          <a href="#0"><i class="fa fa-plus-circle"></i></a>
                                          <a href="#0"><i class="fa fa-minus-circle"></i></a>
                                       </div>
                                    </div>
                                  
                                    <section class="section">
                                       <div class="card">
                                             <div class="card-header">
                                                <div class="form-check mb-2" style="margin-left:-20px;">
                                                   <input type="checkbox" name="status_1" value="1" @if($data ->status_1 == 1)  checked @endif>
                                                   <label class="form-check-label" for="flexCheckDefault"><b><u>SELLECT TO ACTIVE</u></b></label>
                                                </div>
                                               
                                             </div>

                                             <div class="card-body">
                                                <div>
                                                   <label>Heading 1</label>
                                                   <input type="text" name="sec4_card1_heading_1" class="form-control" value="{{$data->sec4_card1_heading_1}}">
                                                </div><br>

                                                   <div class="row">
                                                      <div class="col-md-12">
                                                         <div class="form-group">
                                                            <label for="image">Paragraph 1</label>
                                                            <textarea class="form-1" id="code_preview0" name="sec4_card1_paragraph_1" style="height: 300px;">{{$data->sec4_card1_paragraph_1}}</textarea> 
                                                         </div>
                                                   </div>

                                                   <div class="col-md-12">
                                                      <div>
                                                         <label>Heading 2</label>
                                                         <input type="text" name="sec4_card1_heading_2" class="form-control" value="{{$data->sec4_card1_heading_2}}">
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <div>
                                                         <label>Day 1</label>
                                                         <input type="text" name="sec4_card1_day1" class="form-control" value="{{$data->sec4_card1_day1}}">
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                         <div>
                                                            <label>Start Time</label>
                                                            <input type="time" name="sec4_card1_day1_Stime" class="form-control" value="{{$data->sec4_card1_day1_Stime}}">
                                                         </div>
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <div>
                                                         <label>End Time</label>
                                                         <input type="time" name="sec4_card1_day1_Etime" class="form-control" value="{{$data->sec4_card1_day1_Etime}}">
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3">
                                                      <div class="form-check mt-5" >
                                                         <input type="checkbox" name="status_card1_day1" value="1" @if($data->status_card1_day1 == 1) checked @endif>
                                                         <label class="form-check-label" for="flexCheckDefault"> Closed</label>
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>Day 2</label>
                                                      <input type="text" name="sec4_card1_day2" class="form-control" value="{{$data->sec4_card1_day2}}">
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>Start Time</label>
                                                      <input type="time" name="sec4_card1_day2_Stime" class="form-control" value="{{$data->sec4_card1_day2_Stime}}">
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>End Time</label>
                                                      <input type="time" name="sec4_card1_day2_Etime" class="form-control" value="{{$data->sec4_card1_day2_Etime}}">
                                                   </div>

                                                   <div class="col-md-3 mt-5">
                                                      <div class="form-check">
                                                         <input type="checkbox" name="status_card1_day2" value="1" @if($data->status_card1_day2 == 1) checked @endif>
                                                         <label class="form-check-label" for="flexCheckDefault"> Closed</label>
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <div>
                                                         <label>Day 3</label>
                                                         <input type="text" name="sec4_card1_day3" class="form-control" value="{{$data->sec4_card1_day3}}">
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <div>
                                                         <label>Start Time</label>
                                                         <input type="time" name="sec4_card1_day3_Stime" class="form-control" value="{{$data->sec4_card1_day3_Stime}}">
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <div>
                                                         <label>End Time</label>
                                                         <input type="time" name="sec4_card1_day3_Etime" class="form-control" value="{{$data->sec4_card1_day3_Etime}}">
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3 mt-5">
                                                      <div class="form-check" >
                                                         <input type="checkbox" name="status_card1_day3" value="1" @if($data->status_card1_day3 == 1) checked @endif>
                                                         <label class="form-check-label" for="flexCheckDefault"> Closed</label>
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>Day 4</label>
                                                      <input type="text" name="sec4_card1_day4" class="form-control" value="{{$data->sec4_card1_day4}}">
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>Start Time</label>
                                                      <input type="time" name="sec4_card1_day4_Stime" class="form-control" value="{{$data->sec4_card1_day4_Stime}}">
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>End Time</label>
                                                      <input type="time" name="sec4_card1_day4_Etime" class="form-control" value="{{$data->sec4_card1_day4_Etime}}">
                                                   </div>

                                                   <div class="col-md-3 mt-5">
                                                      <div class="form-check" >
                                                         <input type="checkbox" name="status_card1_day4" value="1"  @if($data->status_card1_day4 == 1) checked @endif>
                                                         <label class="form-check-label" for="flexCheckDefault"> Closed</label>
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>Day 5</label>
                                                      <input type="text" name="sec4_card1_day5" class="form-control" value="{{$data->sec4_card1_day5}}">
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>Start Time</label>
                                                      <input type="time" name="sec4_card1_day5_Stime" class="form-control" value="{{$data->sec4_card1_day5_Stime}}">
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>End Time</label>
                                                      <input type="time" name="sec4_card1_day5_Etime" class="form-control" value="{{$data->sec4_card1_day5_Etime}}">
                                                   </div>

                                                   <div class="col-md-3 mt-5">
                                                      <div class="form-check" >
                                                         <input type="checkbox" name="status_card1_day5" value="1"  @if($data->status_card1_day5 == 1) checked @endif>
                                                         <label class="form-check-label" for="flexCheckDefault"> Closed</label>
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>Day 6</label>
                                                      <input type="text" name="sec4_card1_day6" class="form-control" value="{{$data->sec4_card1_day6}}">
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>Start Time</label>
                                                      <input type="time" name="sec4_card1_day6_Stime" class="form-control" value="{{$data->sec4_card1_day6_Stime}}">
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>End Time</label>
                                                      <input type="time" name="sec4_card1_day6_Etime" class="form-control" value="{{$data->sec4_card1_day6_Etime}}">
                                                   </div>

                                                   <div class="col-md-3 mt-5">
                                                     <div class="form-check mt-2" >
                                                         <input type="checkbox" name="status_card1_day6" value="1"  @if($data->status_card1_day6 == 1) checked @endif>
                                                         <label class="form-check-label" for="flexCheckDefault"> Closed</label>
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>Day 7</label>
                                                      <input type="text" name="sec4_card1_day7" class="form-control" value="{{$data->sec4_card1_day7}}">
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>Start Time</label>
                                                      <input type="time" name="sec4_card1_day7_Stime" class="form-control" value="{{$data->sec4_card1_day7_Stime}}">
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>End Time</label>
                                                      <input type="time" name="sec4_card1_day7_Etime" class="form-control" value="{{$data->sec4_card1_day7_Etime}}">
                                                   </div>

                                                   <div class="col-md-3 mt-5">
                                                      <div class="form-check mt-2" >
                                                         <input type="checkbox" name="status_card1_day7" value="1"  @if($data->status_card1_day7 == 1) checked @endif>
                                                         <label class="form-check-label" for="flexCheckDefault"> Closed</label>
                                                      </div>
                                                   </div>
                                                </div>                                                                                                
                                             </div>                                            
                                       </div>
                                    </section>
                                 </div>
                                    <section class="section">
                                       <div class="card">
                                             <div class="card-header">
                                                <div class="form-check mb-2" style="margin-left:-20px;">
                                                   <input type="checkbox" name="status_2" value="1"  @if($data->status_2 == 1) checked @endif>
                                                   <label class="form-check-label" for="flexCheckDefault"><b><u>SELLECT TO ACTIVE</u></b></label>
                                                </div>
                                             </div>

                                             <div class="card-body">
                                                <div class="row">
                                                   <div class="col-md-12">
                                                      <div>
                                                         <label>Heading 1</label>
                                                         <input type="text" name="sec4_card2_heading_1" class="form-control" value="{{$data->sec4_card2_heading_1}}">
                                                      </div>
                                                   </div>

                                                   <div class="col-md-12 mt-3">
                                                     <div class="form-group">
                                                         <label for="image">Paragraph 1</label>
                                                         <textarea class="form-2" id="code_preview1" name="sec4_card2_paragraph_1" style="height: 300px;"  value="">{{$data->sec4_card2_paragraph_1}}</textarea> 
                                                      </div>
                                                   </div>
                                                   <div class="col-md-12">
                                                      <div>
                                                         <label>Heading 2</label>
                                                         <input type="text" name="sec4_card2_heading_2" class="form-control" value="{{$data->sec4_card2_heading_2}}">
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <div>
                                                         <label>Day 1</label>
                                                         <input type="text" name="sec4_card2_day1" class="form-control" value="{{$data->sec4_card2_day1}}">
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                         <div>
                                                            <label>Start Time</label>
                                                            <input type="time" name="sec4card2_day1_Stime" class="form-control" value="{{$data->sec4card2_day1_Stime}}"> 
                                                         </div>
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <div>
                                                         <label>End Time</label>
                                                         <input type="time" name="sec4_card2_day1_Etime" class="form-control" value="{{$data->sec4_card2_day1_Etime}}">
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3">
                                                      <div class="form-check mt-5" >
                                                         <input type="checkbox" name="status_card2_day1" value="1"  @if($data->status_card2_day1 == 1) checked @endif>
                                                         <label class="form-check-label" for="flexCheckDefault">Closed</label>
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>Day 2</label>
                                                      <input type="text" name="sec4_card2_day2" class="form-control" value="{{$data->sec4_card2_day2}}">
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>Start Time</label>
                                                      <input type="time" name="sec4_card2_day2_Stime" class="form-control" value="{{$data->sec4_card2_day2_Stime}}">
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>End Time</label>
                                                      <input type="time" name="sec4_card2_day2_Etime" class="form-control" value="{{$data->sec4_card2_day2_Etime}}">
                                                   </div>

                                                   <div class="col-md-3 mt-5">
                                                      <div class="form-check">
                                                         <input type="checkbox" name="status_card2_day2" value="1" @if($data->status_card2_day2 == 1) checked @endif> 
                                                         <label class="form-check-label" for="flexCheckDefault"> Closed</label>
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <div>
                                                         <label>Day 3</label>
                                                         <input type="text" name="sec4_card2_day3" class="form-control" value="{{$data->sec4_card2_day3}}">
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <div>
                                                         <label>Start Time</label>
                                                         <input type="time" name="sec4_card2_day3_Stime" class="form-control" value="{{$data->sec4_card2_day3_Stime}}">
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <div>
                                                         <label>End Time</label>
                                                         <input type="time" name="sec4_card2_day3_Etime" class="form-control" value="{{$data->sec4_card2_day3_Etime}}">
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3 mt-5">
                                                      <div class="form-check" >
                                                         <input type="checkbox" name="status_card2_day3" value="1" @if($data->status_card2_day3 == 1) checked @endif>
                                                         <label class="form-check-label" for="flexCheckDefault"> Closed</label>
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>Day 4</label>
                                                      <input type="text" name="sec4_card2_day4" class="form-control" value="{{$data->sec4_card2_day4}}">
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>Start Time</label>
                                                      <input type="time" name="sec4_card2_day4_Stime" class="form-control" value="{{$data->sec4_card2_day4_Stime}}">
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>End Time</label>
                                                      <input type="time" name="sec4_card2_day4_Etime" class="form-control" value="{{$data->sec4_card2_day4_Etime}}">
                                                   </div>

                                                   <div class="col-md-3 mt-5">
                                                      <div class="form-check" >
                                                         <input type="checkbox" name="status_card2_day4" value="1" @if($data->status_card2_day4 == 1) checked @endif>
                                                         <label class="form-check-label" for="flexCheckDefault"> Closed</label>
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>Day 5</label>
                                                      <input type="text" name="sec4_card2_day5" class="form-control" value="{{$data->sec4_card2_day5}}">
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>Start Time</label>
                                                      <input type="time" name="sec4_card2_day5_Stime" class="form-control" value="{{$data->sec4_card2_day5_Stime}}">
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>End Time</label>
                                                      <input type="time" name="sec4_card2_day5_Etime" class="form-control" value="{{$data->sec4_card2_day5_Etime}}">
                                                   </div>

                                                   <div class="col-md-3 mt-5">
                                                      <div class="form-check" >
                                                         <input type="checkbox" name="status_card2_day5" value="1" @if($data->status_card2_day5 == 1) checked @endif>
                                                         <label class="form-check-label" for="flexCheckDefault"> Closed</label>
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>Day 6</label>
                                                      <input type="text" name="sec4_card2_day6" class="form-control" value="{{$data->sec4_card2_day6}}">
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>Start Time</label>
                                                      <input type="time" name="sec4_card2_day6_Stime" class="form-control" value="{{$data->sec4_card2_day6_Stime}}">
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>End Time</label>
                                                      <input type="time" name="sec4_card2_day6_Etime" class="form-control" value="{{$data->sec4_card2_day6_Etime}}">
                                                   </div>

                                                   <div class="col-md-3 mt-5">
                                                     <div class="form-check mt-2" >
                                                         <input type="checkbox" name="status_card2_day6" value="1" @if($data->status_card2_day6 == 1) checked @endif>
                                                         <label class="form-check-label" for="flexCheckDefault"> Closed</label>
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>Day 7</label>
                                                      <input type="text" name="sec4_card2_day7" class="form-control" value="{{$data->sec4_card2_day7}}">
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>Start Time</label>
                                                      <input type="time" name="sec4_card2_day7_Stime" class="form-control" value="{{$data->sec4_card2_day7_Stime}}">
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>End Time</label>
                                                      <input type="time" name="sec4_card2_day7_Etime" class="form-control" value="{{$data->sec4_card2_day7_Etime}}">
                                                   </div>

                                                   <div class="col-md-3 mt-5">
                                                      <div class="form-check mt-2" >
                                                         <input type="checkbox" name="status_card2_day7" value="1" @if($data->status_card2_day7 == 1) checked @endif>
                                                         <label class="form-check-label" for="flexCheckDefault"> Closed</label>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </section>

                                    <section class="section">
                                       <div class="card">
                                             <div class="card-header">
                                                <div class="form-check mb-2" style="margin-left:-20px;">
                                                   <input type="checkbox" name="status_3" value="1"  @if($data->status_3 == 1) checked @endif>
                                                   <label class="form-check-label" for="flexCheckDefault"><b><u>SELLECT TO ACTIVE</u></b></label>
                                                </div>
                                             </div>

                                             <div class="card-body">
                                                <div class="row">
                                                   <div class="col-md-12">
                                                         <div class="form-group">
                                                            <label>Heading 1</label>
                                                            <input type="text" name="sec_4_card3_heading_1" class="form-control" value="{{$data->sec4_card3_heading_1}}">
                                                         </div>

                                                         <div class="row">
                                                            <div class="col-md-12">
                                                               <div class="form-group">
                                                                  <label for="image">Paragraph 1</label>
                                                                  <textarea class="form-3" id="code_preview2" name="sec4_card3_paragraph_1" style="height: 300px;"  value="">{{$data->sec4_card3_paragraph_1}}</textarea> 
                                                               </div>
                                                         </div>

                                                         <div class="col-md-12">
                                                            <div>
                                                               <label>Heading 2</label>
                                                               <input type="text" name="sec4_card3_heading_2" class="form-control" value="{{$data->sec4_card3_heading_2}}">
                                                            </div>
                                                         </div>

                                                         <div class="col-md-3 mt-3">
                                                      <div>
                                                         <label>Day 1</label>
                                                         <input type="text" name="sec4_card3_day1" class="form-control" value="{{$data->sec4_card3_day1}}">
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                         <div>
                                                            <label>Start Time</label>
                                                            <input type="time" name="sec4_card3_day1_Stime" class="form-control" value="{{$data->sec4_card3_day1_Stime}}">
                                                         </div>
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <div>
                                                         <label>End Time</label>
                                                         <input type="time" name="sec4_card3_day1_Etime" class="form-control" value="{{$data->sec4_card3_day1_Etime}}">
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3">
                                                      <div class="form-check mt-5" >
                                                         <input type="checkbox" name="status_card3_day1" value="1" @if($data->status_card3_day1 == 1) checked @endif>
                                                         <label class="form-check-label" for="flexCheckDefault"> Closed</label>
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>Day 2</label>
                                                      <input type="text" name="sec4_card3_day2" class="form-control" value="{{$data->sec4_card3_day2}}">
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>Start Time</label>
                                                      <input type="time" name="sec4_card3_day2_Stime" class="form-control" value="{{$data->sec4_card3_day2_Stime}}">
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>End Time</label>
                                                      <input type="time" name="sec4_card3_day2_Etime" class="form-control" value="{{$data->sec4_card3_day2_Etime}}">
                                                   </div>

                                                   <div class="col-md-3 mt-5">
                                                      <div class="form-check">
                                                         <input type="checkbox" name="status_card3_day2" value="1" @if($data->status_card3_day2 == 1) checked @endif>
                                                         <label class="form-check-label" for="flexCheckDefault"> Closed</label>
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <div>
                                                         <label>Day 3</label>
                                                         <input type="text" name="sec4_card3_day3" class="form-control" value="{{$data->sec4_card3_day3}}">
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <div>
                                                         <label>Start Time</label>
                                                         <input type="time" name="sec4_card3_day3_Stime" class="form-control" value="{{$data->sec4_card3_day3_Stime}}">
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <div>
                                                         <label>End Time</label>
                                                         <input type="time" name="sec4_card3_day3_Etime" class="form-control" value="{{$data->sec4_card3_day3_Etime}}">
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3 mt-5">
                                                      <div class="form-check" >
                                                         <input type="checkbox" name="status_card3_day3" value="1" @if($data->status_card3_day3 == 1) checked @endif>
                                                         <label class="form-check-label" for="flexCheckDefault"> Closed</label>
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>Day 4</label>
                                                      <input type="text" name="sec4_card3_day4" class="form-control" value="{{$data->sec4_card3_day4}}">
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>Start Time</label>
                                                      <input type="time" name="sec4_card3_day4_Stime" class="form-control" value="{{$data->sec4_card3_day4_Stime}}">
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>End Time</label>
                                                      <input type="time" name="sec4_card3_day4_Etime" class="form-control" value="{{$data->sec4_card3_day4_Etime}}">
                                                   </div>

                                                   <div class="col-md-3 mt-5">
                                                      <div class="form-check" >
                                                         <input type="checkbox" name="status_card3_day4" value="1" @if($data->status_card3_day4 == 1) checked @endif>
                                                         <label class="form-check-label" for="flexCheckDefault"> Closed</label>
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                       <label>Day 5</label>
                                                       <input type="text" name="sec4_card3_day5" class="form-control" value="{{$data->sec4_card3_day5}}">
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                       <label>Start Time</label>
                                                       <input type="time" name="sec4_card3_day5_Stime" class="form-control" value="{{$data->sec4_card3_day5_Stime}}">
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>End Time</label>
                                                      <input type="time" name="sec4_card3_day5_Etime" class="form-control" value="{{$data->sec4_card3_day5_Etime}}">
                                                   </div>

                                                   <div class="col-md-3 mt-5">
                                                      <div class="form-check" >
                                                         <input type="checkbox" name="status_card3_day5" value="1" @if($data->status_card3_day5 == 1) checked @endif>
                                                         <label class="form-check-label" for="flexCheckDefault"> Closed</label>
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>Day 6</label>
                                                      <input type="text" name="sec4_card3_day6" class="form-control" value="{{$data->sec4_card3_day6}}">
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>Start Time</label>
                                                      <input type="time" name="sec4_card3_day6_Stime" class="form-control" value="{{$data->sec4_card3_day6_Stime}}">
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                         <label>End Time</label>
                                                         <input type="time" name="sec4_card3_day6_Etime" class="form-control" value="{{$data->sec4_card3_day6_Etime}}">
                                                   </div>

                                                   <div class="col-md-3 mt-5">
                                                     <div class="form-check mt-2" >
                                                         <input type="checkbox" name="status_card3_day6" value="1" @if($data->status_card3_day6 == 1) checked @endif>
                                                         <label class="form-check-label" for="flexCheckDefault"> Closed</label>
                                                      </div>
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>Day 7</label>
                                                      <input type="text" name="sec4_card3_day7" class="form-control" value="{{$data->sec4_card3_day7}}">
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>Start Time</label>
                                                      <input type="time" name="sec4_card3_day7_Stime" class="form-control" value="{{$data->sec4_card3_day7_Stime}}">
                                                   </div>

                                                   <div class="col-md-3 mt-3">
                                                      <label>End Time</label>
                                                      <input type="time" name="sec4_card3_day7_Etime" class="form-control" value="{{$data->sec4_card3_day7_Etime}}">
                                                   </div>

                                                   <div class="col-md-3 mt-5">
                                                      <div class="form-check mt-2" >
                                                         <input type="checkbox" name="status_card3_day7" value="1" @if($data->status_card3_day7 == 1) checked @endif>
                                                         <label class="form-check-label" for="flexCheckDefault"> Closed</label>
                                                      </div>
                                                   </div>

                                                   </div>
                                                </div>
                                             </div>
                                       </div>
                                    </section>
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
   <div class="row">
      <div class="col-md-12">
         <button type="submit" class="btn btn-primary">UPDATE</button>
      </div>
   </div>
</form>

</body>

<!-- <script>
  $(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var user_id = $(this).data('id'); 
         
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '/changeStatus',
            data: {'status': status, 'user_id': user_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
</script> -->



@endsection