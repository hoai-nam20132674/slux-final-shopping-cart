@extends('frontEndUser.layout.default')
@section('slide-header')
	@include('frontEndUser.layout.slide-header')
@endsection()
@section('blog-content')
	<div class="container">
		<div class="row">
			<div class="content">
				<div class="col-md-12">
					<div class="breadcrumb-slux">
				        <div class="btn-group btn-breadcrumb breadcrumb-default">
				            <a href="#" class="btn btn-default"><i class="glyphicon glyphicon-home"></i></a>
				            <a href="{{url('/'.$cate["url"])}}" class="btn btn-default border-bottom" style="text-transform: uppercase;">{{$cate->name}}</a>
				        </div>
					</div>
					<br>
					<div class="news-item-content">
						{!!$cate->content!!}
					</div>
				</div>
			</div>
		</div>
		<br>
		<br>
		<div class="row">
			<div class="col-md-12">
				<ul class="nav nav-tabs">
				    <li class="active"><a data-toggle="tab" href="#products" style="color: #000;" >SẢN PHẨM MỚI</a></li>
					<li ><a data-toggle="tab" href="#news" style="color: #000;">TIN TỨC MỚI</a></li>
				</ul>
				<br>
				<div class="tab-content">
					<div id="news" class="tab-pane fade">
						<div class="row">
							<?php 
								$i=0;
							?>
							@foreach($blogs as $blog)
								@if($i<4)
									@if($blog->display ==1)
										<div class="col-md-3">
											<div class="blog-new-item box-shadows" style="border: 1px solid #d4d4d4;"> 
						                        <a href="{{url('/'.$blog["url"])}}">
						                            <img src="{{url('/uploads/images/blogs/'.$blog["image"])}}" class="img-responsive img-box img-thumbnail"> 
						                        </a>
							                    <br>
							                    <br>
						                    	<h4><a href="#"  style="color: #000;">{{$blog->title}}</a></h4>
						                        <div class="clear"></div>
											</div>
										</div>
									@endif
								@endif
							@endforeach
						</div>
					</div>
					<div id="products"  class="tab-pane fade in active">
						<div class="row">
							<?php 
								$i=0
							?>
	                        @foreach($products as $prs)
	                        	@if($i<4)
									@if($prs->display ==1)
				                        <div class="col-sm-3 product-item">
				                            <div class="col-item">
				                                <div class="photo">
				                                    <a href="{{url('/'.$prs["url"])}}"><img src="{{url('/uploads/images/products/'.$prs["image"])}}" alt="a" /></a>
				                                </div>
				                                <div class="info">
				                                    <div class="row">
				                                        <div class="price col-md-12" style="text-align: center;">
				                                            <h5 style="text-transform: uppercase; font-weight: 700;">{{$prs->name}}</h5>
				                                            <h5 class="price-text-color">{{$prs->price}}</h5>
				                                        </div>
				                                        <div class="rating hidden-sm col-md-12">
				                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
				                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
				                                            </i><i class="fa fa-star"></i>
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
				                        <?php 
				                        	$i++;
				                        ?>
			                        @endif
			                    @endif
		                    @endforeach
	                    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
@endsection()