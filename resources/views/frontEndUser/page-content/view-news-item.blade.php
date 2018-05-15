@extends('frontEndUser.layout.default')
@section('slide-header')
	@include('frontEndUser.layout.slide-header')
@endsection()
@section('blog-content')
	<div class="container">
		<div class="row">
			<div class="content">
				<div class="col-md-9">
					<div class="breadcrumb-slux">
				        <div class="btn-group btn-breadcrumb breadcrumb-default">
				            <a href="#" class="btn btn-default"><i class="glyphicon glyphicon-home"></i></a>
				            <a href="{{url('/tin-tuc')}}" class="btn btn-default border-bottom" style="text-transform: uppercase;">Tin tức</a>
				            <a href="{{url('/'.$bl["url"])}}" class="btn btn-default border-bottom" style="text-transform: uppercase;">{{$bl->title}}</a>
				        </div>
					</div>
					<br>
					<div class="news-item-content">
						{!!$bl->content!!}
					</div>
				</div>
				<div class="sidebar">
					<div class="col-md-3">
						
						<div id='cssmenu'>
							<ul>
							   <li class='active'><a ><span>Danh mục</span></a></li>
							   <li class='has-sub'><a href='#'><span>Linh kiện Nokia</span></a>
							      <ul>
							         	<li><a href='#'><span>Main</span></a></li>
							         	<li><a href='#'><span>Vỏ máy</span></a></li>
							        	<li><a href='#'><span>Phím</span></a></li>
							      </ul>
							   </li>
							   <li class='has-sub'><a href='#'><span>Linh kiện Vertu</span></a>
							      <ul>
							         	<li><a href='#'><span>Main</span></a></li>
							         	<li><a href='#'><span>Vỏ máy</span></a></li>
							         	<li><a href='#'><span>Phím</span></a></li>
							      </ul>
							   </li>
							   <li class='has-sub'><a href='#'><span>Phụ kiện Nokia</span></a>
									<ul>
							         	<li><a href='#'><span>Tai nghe</span></a></li>
							         	<li><a href='#'><span>Sạc pin</span></a></li>
							      	</ul>
							   </li>
							   <li class='has-sub'><a href='#'><span>Phụ kiện Vertu</span></a>
									<ul>
							         	<li><a href='#'><span>Tai nghe</span></a></li>
							        	<li><a href='#'><span>Sạc pin</span></a></li>
							      	</ul>
							   </li>
							</ul>
						</div>
						<hr>
						<div class="panel-default">
							<div class="panel-heading text-center" style="text-transform: uppercase;font-weight:700;">Sản phẩm liên quan</div>
							<br>
							<div class="blog-new">
								<?php 
									$i=0;
								?>
								@foreach($products as $pr)
									@if($i<3)
										@if($pr->display ==1)
											<div class="blog-new-item box-shadows">
												<div class="row">
								                    <div class="col-sm-12 product-item" style="margin-bottom: 0px;">
							                            <div class="col-item">
							                                <div class="photo">
							                                    <a href="{{url('/'.$pr["url"])}}"><img src="{{url('/uploads/images/products/'.$pr["image"])}}" alt="a" /></a>
							                                </div>
							                                <div class="info">
							                                    <div class="row">
							                                        <div class="price col-md-12" style="text-align: center;">
							                                            <h5 style="text-transform: uppercase; font-weight: 700;">{{$pr->name}}</h5>
							                                            <h5 class="price-text-color">{{$pr->price}}</h5>
							                                        </div>
							                                    </div>
							                                    <div class="separator clear-left">
							                                        <p class="btn-add">
							                                            <i class="fa fa-shopping-cart"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">Add to cart</a></p>
							                                        <p class="btn-details">
							                                            <i class="fa fa-list"></i><a href="http://www.jquery2dotnet.com" class="hidden-sm">More details</a></p>
							                                    </div>
							                                    <div class="clearfix">
							                                    </div>
							                                </div>
							                            </div>
							                        </div>
							                	</div>
											</div>
											<br>
					                        <?php 
					                        	$i++;
					                        ?>
										@endif
							        @endif
								@endforeach
								<br>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-9">
				<ul class="nav nav-tabs">
				    <li class="active" ><a style="color: #000;" >TIN TỨC LIÊN QUAN</a></li>
				</ul>
				<br>
				<div class="row">
					<?php 
						$i=0;
					?>
					@foreach($blogs as $blog)
						@if($i<3)
							@if($blog->display ==1)
								<div class="col-md-4">
									<div class="blog-new-item box-shadows" style="border: 1px solid #d4d4d4;"> 
				                        <a href="{{url('/'.$blog["url"])}}">
				                            <img src="{{url('/uploads/images/blogs/'.$blog["image"])}}" class="img-responsive img-box img-thumbnail"> 
				                        </a>
					                    <br>
					                    <br>
				                    	<h4><a href="{{url('/'.$blog["url"])}}"  style="color: #000;">{{$blog->title}}</a></h4>
				                        <div class="clear"></div>
									</div>
								</div>
							@endif
						@endif
					@endforeach
				</div>
			</div>
		</div>
	</div>
	<br>
@endsection()