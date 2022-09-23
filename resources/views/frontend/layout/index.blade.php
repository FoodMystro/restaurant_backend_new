@extends('frontend.layout.master')
@section('content')
<main>  
        <div class="hero_single version_1">
            <div class="opacity-mask">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-8">
                            <h1>Welcome To {{$data->sec_1_heading}}</h1>
                            <p class="lead">{{$data->sec_1_paragraph}}</p>
                            <p>
                                <b>Phone No: {{$data->sec_1_heading1}}</b><br>
                                <b>Email: {{$data->sec_1_heading2}}</b> <br>
                                <b>Address: {{$data->sec_1_heading3}}</b> 
                            </p>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
            </div>
            <div class="wave hero"></div>
        </div>
        <!-- /hero_single -->

        <div class="shape_element_2">
            <div class="container margin_60_0">
                <div class="main_title">
                    <span><em></em></span>
                    <h2>{{$data->sec_2_heading}}</h2>
                    <p>{{$data->sec_2_paragraph}}</p>
                </div>

                <div class="row">

                    @if ($data->sec_2_card_1_status == 1)
                    <div class="col-md-4">
                        <a class="box_topic" href="{{route('delivery_order')}}">
                        <img src="{{asset('')}}uploads/home_images/{{$data->sec_2_img1}}" width="150" height="132" class="lazy">
                          
                          <h3>{{$data->sec_2_heading_1}}</h3>
                            <p>{{$data->sec_2_paragraph_1}}</p>
                        </a>
                    </div>

                    @endif
                   
                    @if ($data->sec_2_card_2_status == 1)
                    <div class="col-md-4">
                        <a class="box_topic" href="{{route('order_collection')}}">
                        <img src="{{asset('')}}uploads/home_images/{{$data->sec_2_img_2}}"  width="150" height="132" class="lazy">
                            <h3>{{$data->sec_2_heading_2}}</h3>
                            <p>{{$data->sec_2_paragraph_2}}</p>
                        </a>
                    </div>
                    @endif

                    @if ($data->sec_2_card_3_status == 1)
                    <div class="col-md-4">
                        <a class="box_topic" href="{{route('table_service')}}">
                           <img src="{{asset('')}}uploads/home_images/{{$data->sec_2_img_3}}" width="150" height="132" class="lazy"">
                            <h3>{{$data->sec_2_heading_3}}</h3>
                            <p>{{$data->sec_2_paragraph_3}}</p>
                        </a>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="shape_element_2">
            <div class="container margin_60_0">
                
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6">
                                @if ($data->sec_3_card_1_status == 1)
                                <div class="box_how">                              
                                    <img src="{{asset('')}}uploads/home_images/{{$data->sec3_card1_img1}}"  alt="" width="150" height="167" class="lazy">
                                    <h3>{{$data->sec3_card1_heading1}}</h3>
                                    <p>{{$data->sec3_card1_paragraph1}} </p>
                                </div>
                                @endif

                                @if ($data->sec_3_card_2_status == 1)
                                <div class="box_how">
                                  
                                    <img src="{{asset('')}}uploads/home_images/{{$data->sec3_card2_img2}}"  alt="" width="150" height="167" class="lazy">

                                    <h3>{{$data->sec3_card2_heading2}}</h3>
                                    <p>{{$data->sec3_card2_paragraph2}}</p>
                                </div>
                                @endif

                            </div>
                            <div class="col-lg-6 align-self-center">
                                @if ($data->sec_3_card_3_status == 1)
                                <div class="box_how">
                                  
                                    <img src="{{asset('')}}uploads/home_images/{{$data->sec3_card3_img3}}"  alt="" width="150" height="167" class="lazy">
                                    <h3>{{$data->sec3_card3_heading3}}</h3>
                                    <p>{{$data->sec3_card3_paragraph3}}</p>
                                </div>
                                @endif
                            </div>
                        </div>
                        <p class="text-center mt-3 d-block d-lg-none"><a href="#0" class="btn_1 medium gradient pulse_bt mt-2">Delivery or Collection</a></p>
                    </div>

                    <div class="col-lg-5 offset-lg-1 align-self-center">
                        <div class="intro_txt">
                            <div class="main_title">
                                <span><em></em></span>
                                <h2>{{$data->sec3_right_header_heading}}</h2>
                            </div>
                            <p class="lead">{{$data->sec3_right_header_paragraph}}</p>
                            <dl class="row">
                                <dt class="col-sm-3">{{$data->sec3_title1}}</dt>
                                <dd class="col-sm-9">
                                
                                    <div>
                                         @if($data->delivery_status == 0)
                                            {{$data->sec3_delivery_Stime}} AM - {{$data->sec3_delivery_Etime}} PM
                                            @else
                                                <span class="text-danger"><b>Closed!</b></span>
                                            @endif
                                    </div>
                                </dd>
                                <dt class="col-sm-3">{{$data->sec3_title2}}</dt>
                                <dd class="col-sm-9">
                                    <div>
                                    @if($data->collection_status == 0)
                                        {{$data->sec3_collection_Stime}} AM - {{$data->sec3_collection_Etime}} PM
                                        @else
                                            <span class="text-danger"><b>Closed!</b></span>
                                        @endif
                                    </div>
                                </dd>
                                <dt class="col-sm-3">{{$data->sec3_title3}}</dt>
                                <dd class="col-sm-9">
                                    <div>
                                    @if($data->table_service_status == 0)
                                        {{$data->sec3_right_service_Stime}} AM - {{$data->sec3_table_service_Etime}} PM
                                        @else
                                            <span class="text-danger"><b>Closed!</b></span>
                                        @endif
                                    </div>
                                </dd>
                            </dl>

                            <p><a href="{{route('contact')}}" class="btn_1 medium gradient pulse_bt mt-2">Contact us</a></p>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-md-8 col-md-10">
                            <div role="tablist" class="add_bottom_15 accordion_2" id="accordion_group">
      

                            @if ($data->status_1 == 1)
                            <div class="card">
                                    <div class="card-header" role="tab">
                                        <h5>
                                            <a data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true"><i
                                                    class="indicator icon_minus-06"></i>Delivery Information</a>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse show" role="tabpanel" data-bs-parent="#accordion_group">
                                        <div class="card-body">
                                            <p class="lead">{{$data->sec4_card1_heading_1}}</p>
                                            <ul>
                                              
                                                {!!$data->sec4_card1_paragraph_1!!}
                                                
                                            </ul>
                                            <p class="lead">{{$data->sec4_card1_heading_2}}</p>
                                            <ul>
                        
                                                <dl class="row">
                                                    <dt class="col-sm-3">{{$data->sec4_card1_day1}}</dt>
                                                    <dd class="col-sm-9">
                                                        <div>

                                                        @if($data->status_card1_day1 == 0)
                                                            {{$data->sec4_card1_day1_Stime}} AM - {{$data->sec4_card1_day1_Etime}} PM
                                                            
                                                            @else
                                                                <span class="text-danger"><b>Closed!</b></span>
                                                            @endif
                                                        </div>
                                                    </dd>
                                                    <dt class="col-sm-3">{{$data->sec4_card1_day2}}</dt>
                                                    <dd class="col-sm-9">
                                                        <div>
                                                            @if($data->status_card1_day2 == 0)
                                                        
                                                                {{$data->sec4_card1_day1_Stime}} AM - {{$data->sec4_card1_day1_Etime}} PM

                                                            @else
                                                            <span class="text-danger"><b>Closed!</b></span>
                                                            @endif
                                                        </div>
                                                    </dd>
                                                    <dt class="col-sm-3">{{$data->sec4_card1_day3}}</dt>
                                                    <dd class="col-sm-9">
                                                        <div>
                                                             @if($data->status_card1_day3 == 0)

                                                            {{$data->sec4_card1_day2_Stime}} AM - {{$data->sec4_card1_day2_Etime}} PM

                                                            @else
                                                            <span class="text-danger"><b>Closed!</b></span>
                                                            @endif
                                                        </div>

                                                    </dd>
                                                    <dt class="col-sm-3">{{$data->sec4_card1_day4}}</dt>
                                                    <dd class="col-sm-9">
                                                        <div>
                                                            @if($data->status_card1_day4 == 0)

                                                            {{$data->sec4_card1_day3_Stime}} AM - {{$data->sec4_card1_day3_Etime}} PM

                                                            @else
                                                            <span class="text-danger"><b>Closed!</b></span>
                                                            @endif

                                                        </div>
                                                    </dd>
                                                    <dt class="col-sm-3">{{$data->sec4_card1_day5}}</dt>
                                                    <dd class="col-sm-9">
                                                        <div>
                                                            @if($data->status_card1_day5 == 0)
                                                            
                                                            {{$data->sec4_card1_day4_Stime}} AM - {{$data->sec4_card1_day4_Etime}} PM

                                                            @else
                                                            <span class="text-danger"><b>Closed!</b></span>
                                                            @endif

                                                        </div>
                                                    </dd>
                                                    <dt class="col-sm-3">{{$data->sec4_card1_day6}}</dt>
                                                    <dd class="col-sm-9">
                                                        <div>
                                                            @if($data->status_card1_day6 == 0)

                                                            {{$data->sec4_card1_day5_Stime}} AM - {{$data->sec4_card1_day5_Etime}} PM

                                                            @else
                                                            <span class="text-danger"><b>Closed!</b></span>
                                                            @endif

                                                        </div>
                                                    </dd>
                                                    <dt class="col-sm-3">{{$data->sec4_card1_day7}}</dt>
                                                    <dd class="col-sm-9">
                                                        <div>
                                                            @if($data->status_card1_day7 == 0)

                                                            {{$data->sec4_card1_day6_Stime}} AM - {{$data->sec4_card1_day6_Etime}} PM

                                                            @else
                                                            <span class="text-danger"><b>Closed!</b></span>
                                                            @endif

                                                        </div>
                                                    </dd>
                                                </dl>
                                        </div>
                                    </div>
                                </div>
                           
                            @endif
                            <!-- /card -->
                        
                            @if ($data->status_2 == 1)
                            <div class="card">
                                <div class="card-header" role="tab">
                                    <h5>
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="false">
                                            <i class="indicator icon_plus"></i>Collection Information
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" role="tabpanel" data-bs-parent="#accordion_group">
                                    <div class="card-body">
                                        <p class="lead">{{$data->sec4_card2_heading_1}}</p>
                                        <ul>
                                        {!!$data->sec4_card2_paragraph_1!!}
                                            
                                        </ul>
                    
                                        <p class="lead">{{$data->sec4_card1_heading_2}}</p>
                                        <dl class="row">
                                            <dt class="col-sm-3">{{$data->sec4_card2_day1}}</dt>
                                            <dd class="col-sm-9">
                                                <div>

                                                     @if($data->status_card2_day1 == 0)

                                                    {{$data->sec4card2_day1_Stime}} AM - {{$data->sec4_card2_day1_Etime}} PM

                                                    @else
                                                      <span class="text-danger"><b>Closed!</b></span>
                                                    @endif

                                                </div>
                                            </dd>
                                            <dt class="col-sm-3">{{$data->sec4_card2_day2}}</dt>
                                            <dd class="col-sm-9">
                                                <div>
                                                    @if($data->status_card2_day2 == 0)    
                                                    {{$data->sec4_card2_day2_Stime}} AM - {{$data->sec4_card2_day2_Etime}} PM

                                                    @else
                                                        <span class="text-danger"><b>Closed!</b></span>
                                                    @endif
                                                </div>
                                            </dd>
                                            <dt class="col-sm-3">{{$data->sec4_card2_day3}}</dt>
                                            <dd class="col-sm-9">
                                                <div>
                                                    @if($data->status_card2_day3 == 0)     
                                                    {{$data->sec4_card2_day3_Stime}} AM - {{$data->sec4_card2_day3_Etime}} PM
                                                    @else
                                                            <span class="text-danger"><b>Closed!</b></span>
                                                    @endif
                                                </div>
                                            </dd>
                                            <dt class="col-sm-3">{{$data->sec4_card2_day4}}</dt>
                                            <dd class="col-sm-9">
                                            
                                                <div>
                                                    @if($data->status_card2_day4 == 0)      
                                                    {{$data->sec4_card2_day4_Stime}} AM - {{$data->sec4_card2_day4_Etime}} PM
                                                    @else
                                                            <span class="text-danger"><b>Closed!</b></span>
                                                    @endif
                                                </div>
                                            </dd>
                                            <dt class="col-sm-3">{{$data->sec4_card2_day5}}</dt>
                                            <dd class="col-sm-9">
                                                <div>

                                                    @if($data->status_card2_day5 == 0)  
                                                    {{$data->sec4_card2_day5_Stime}} AM - {{$data->sec4_card2_day5_Etime}} PM
                                                    @else
                                                            <span class="text-danger"><b>Closed!</b></span>
                                                    @endif

                                                </div>
                                            </dd>
                                            <dt class="col-sm-3">{{$data->sec4_card2_day6}}</dt>
                                            <dd class="col-sm-9">
                                                <div>

                                                    @if($data->status_card2_day6 == 0)      
                                                    {{$data->sec4_card2_day6_Stime}} AM - {{$data->sec4_card2_day6_Etime}} PM
                                                    @else
                                                            <span class="text-danger"><b>Closed!</b></span>
                                                    @endif

                                                </div>
                                            </dd>
                                            <dt class="col-sm-3">{{$data->sec4_card2_day7}}</dt>
                                            <dd class="col-sm-9">
                                                <div>
                                                    @if($data->status_card2_day7 == 0)  

                                                    {{$data->sec4_card2_day7_Stime}} AM - {{$data->sec4_card2_day7_Etime}} PM

                                                    @else
                                                            <span class="text-danger"><b>Closed!</b></span>
                                                    @endif

                                                </div>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <!-- /card -->
                            @if ($data->status_3 == 1)
                            <div class="card">
                                <div class="card-header" role="tab">
                                    <h5>
                                        <a class="collapsed" data-bs-toggle="collapse" href="#collapseThree" aria-expanded="false">
                                            <i class="indicator icon_plus"></i>Table Service Information
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" role="tabpanel" data-bs-parent="#accordion_group">
                                    <div class="card-body">
                                        <p class="lead">{{$data->sec4_card3_heading_2}}</p>
                                        <ul>
                                            {!!$data->sec4_card3_paragraph_1!!}
                                        </ul>
                    
                                        <p class="lead">{{$data->sec4_card3_heading_2}}</p>
                                        <dl class="row">
                                            <dt class="col-sm-3">{{$data->sec4_card3_day1}}</dt>
                                            <dd class="col-sm-9">
                                                <div>
                                                    @if($data->status_card3_day1 == 0)    
                                                    {{$data->sec4_card3_day1_Stime}} AM - {{$data->sec4_card3_day1_Etime }} PM

                                                    @else
                                                                <span class="text-danger"><b>Closed!</b></span>
                                                    @endif
                                                </div>
                                            </dd>
                                            <dt class="col-sm-3">{{$data->sec4_card3_day2}}</dt>
                                            <dd class="col-sm-9">
                                                <div>
                                                    @if($data->status_card3_day2 == 0)        
                                                    {{$data->sec4_card3_day2_Stime}} AM - {{$data->sec4_card3_day2_Etime}} PM
                                                    @else
                                                                    <span class="text-danger"><b>Closed!</b></span>
                                                    @endif
                                                </div>
                                            </dd>
                                            <dt class="col-sm-3">{{$data->sec4_card3_day3}}</dt>
                                            <dd class="col-sm-9">
                                            <div>
                                                @if($data->status_card3_day3 == 0)        
                                                {{$data->sec4_card3_day3_Stime}} AM - {{$data->sec4_card3_day3_Etime}} PM
                                                @else
                                                                    <span class="text-danger"><b>Closed!</b></span>
                                                @endif                         
                                             </div>
                                            </dd>
                                            <dt class="col-sm-3">{{$data->sec4_card3_day4}}</dt>
                                            <dd class="col-sm-9">
                                                <div>
                                                    @if($data->status_card3_day4 == 0)        
                                                    {{$data->sec4_card3_day4_Stime}} AM - {{$data->sec4_card3_day4_Etime}} PM
                                                    @else
                                                                    <span class="text-danger"><b>Closed!</b></span>
                                                    @endif
                                                </div>
                                            </dd>
                                            <dt class="col-sm-3">{{$data->sec4_card3_day5}}</dt>
                                            <dd class="col-sm-9">
                                                <div>
                                                    @if($data->status_card3_day5 == 0)        
                                                    {{$data->sec4_card3_day5_Stime}} AM - {{$data->sec4_card3_day5_Etime}} PM
                                                    @else
                                                                    <span class="text-danger"><b>Closed!</b></span>
                                                    @endif
                                                </div>
                                            </dd>
                                            <dt class="col-sm-3">{{$data->sec4_card3_day6}}</dt>
                                            <dd class="col-sm-9">
                                                <div> 
                                                    @if($data->status_card3_day6 == 0)        
                                                    {{$data->sec4_card3_day6_Stime}} AM - PM {{$data->sec4_card3_day6_Etime}}
                                                    @else
                                                                    <span class="text-danger"><b>Closed!</b></span>
                                                    @endif
                                                </div>
                                            </dd>
                                            <dt class="col-sm-3">{{$data->sec4_card3_day7}}</dt>
                                            <dd class="col-sm-9">
                                            <div>
                                                @if($data->status_card3_day7 == 0)        
                                                {{$data->sec4_card3_day7_Stime}} AM - {{$data->sec4_card3_day7_Etime}} PM 
                                                @else
                                                                    <span class="text-danger"><b>Closed!</b></span>
                                                @endif
                                              </div>
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <!-- /card -->
                        
                            </div>
                        </div>
                    </div>

                
                </div>
            </div>
        </div>
        <!-- /shape_element_2 -->

    </main>
    @endsection