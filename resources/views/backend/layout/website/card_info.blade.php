@extends('frontend.layout.master')

@section('content')
<main>
		<div class="hero_single inner_pages background-image" data-background="url(img/hero_general_2.jpg)">
			<div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-xl-8 col-lg-10 col-md-8">
							<h1>{{$info->info_heading}}</h1>
							<p>Below is information about payment information</p>
							 <form method="post" action="grid-listing-filterscol.html">
                                <div class="row g-0 custom-search-input">
                                    <div class="col-lg-10">
                                        <div class="form-group">
                                            <input class="form-control no_border_r" type="text" placeholder="What are you looking for?">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <button class="btn_1 gradient" type="submit">Search</button>
                                    </div>
                                </div>
                                <!-- /row -->
                            </form>
						</div>
					</div>
					<!-- /row -->
				</div>
			</div>
			<div class="wave hero gray"></div>
		</div>
		<!-- /hero_single -->

		<div class="bg_gray">
            <div class="container margin_30_40">
                <div class="main_title center">
                    <span><em></em></span>
                    <h2>{{$info->heading_1}}</h2>
                    <p>{!! $info->paragraph_1!!}</p>
                </div>
            </div>
		</div>
		<!-- /bg_gray -->
		<div class="container margin_60_40">
            <div class="main_title center">
                <span><em></em></span>
                <h2>{{$info->heading_2}}</h2>
                <p>{!!$info->paragraph_2!!}</p>
            </div>
		</div>
		
	</main>



	<div id="toTop"></div>
	


    @endsection