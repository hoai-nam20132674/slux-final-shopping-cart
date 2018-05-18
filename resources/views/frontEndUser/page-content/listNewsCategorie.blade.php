@extends('frontEndUser.layout.default')
@section('slide-header')
	@include('frontEndUser.layout.slide-header')
@endsection()
@section('blog-list')
	<div class="container">
		<div class="row">
			<div class="content">	
				<div class="col-md-9">
					<div class="breadcrumb-slux">
						
					        <div class="btn-group btn-breadcrumb breadcrumb-default">
					            <a href="#" class="btn btn-default"><i class="glyphicon glyphicon-home"></i></a>
					            <a href="{{url('/'.$cate["url"])}}" class="btn btn-default border-bottom" style="text-transform: uppercase;">{{$cate->name}}</a>
					            
					        </div>
						
					</div>
					<div class="blog-list">
						@foreach($blogs as $blog)
							<div class="blog-item">
								<div class="row"> 
				                    <div class="col-xs-12 col-sm-3 col-md-3">
				                        <a href="{{url('/'.$blog["url"])}}">
				                            <img src="{{url('/uploads/images/blogs/'.$blog["image"])}}" class="img-responsive img-box img-thumbnail"> 
				                        </a>
				                    </div> 
				                    <div class="col-xs-12 col-sm-9 col-md-9">
				                    	<h4><a href="{{url('/'.$blog["url"])}}">{{$blog->title}}</a></h4>
				                        <p>Naturally, we know where Bali's newest restaurants are and what to order, so give that private chef a rest and check out these spanking new haunts.</p>
				                        <div class="list-group">
				                            <div class="list-group-item">
				                                <div class="row-content">
				                                	<?php 
				                                		$user = App\User::where('id',$blog->user_id)->get()->first();
				                                	?>
				                                    <small>
				                                        <i class="glyphicon glyphicon-time"></i>{{$blog->created_at}}<span class="twitter"> <i class="fa fa-twitter"></i> <a target="_blank" href="https://twitter.com/sintret" alt="sintret" title="sintret">{{$user->name}}</a></span>
				                                        <br>
				                                    </small>
				                                </div>
				                            </div>
				                        </div>
				                        <a href="{{url('/'.$blog["url"])}}"><div class="read-more"><button class="btn-primary">Xem thêm</button></div></a>
				                        <div class="clear"></div>
				                       
				                    </div> 
				                </div>
				            </div>
			                <hr>
						@endforeach	
					</div>
					<div class="pagination text-center">
						<?php 
							$i=1;
						?>
						@if( $blogs->currentPage() != 1)
					  		<a href="{{$blogs->url($blogs->currentPage()-1)}}">&laquo;</a>
					  	@endif
					  	@for($i; $i<=$blogs->lastPage();$i++)
					  		<a href="{{$blogs->url($i)}}" class="{{($blogs->currentPage()==$i) ? 'active' : ''}}">{{$i}}</a>
					  	@endfor
					  	@if( $blogs->currentPage() != $blogs->lastPage())
					  		<a href="{{$blogs->url($blogs->currentPage()+1)}}">&raquo;</a>
					  	@endif
					</div>
				</div>
				
			</div>
			<div class="sidebar">
				<div class="col-md-3">
					
						<div id='cssmenu'>
							<ul>
								<li class='active'><a ><span>Danh mục</span></a></li>
								<?php 
									$sideMenus = App\Menu_Sidebar::select()->get();
								?>
								@foreach($sideMenus as $sideMenu)
									<?php
										$categorie = App\Categories::where('id',$sideMenu->categorie_id)->get()->first();
										$categories = App\Categories::where('parent_id',$categorie->id)->get();
									?>
									<!-- @if($categorie->parent_id == 0) -->
										@if(count($categories)>0)
											<li class='has-sub'><a href='{{url('/'.$categorie["url"])}}'><span>{{$categorie->name}}</span></a>
												
													<ul class="">
														@foreach($categories as $categorie)
															<li><a href='{{url('/'.$categorie["url"])}}'><span>{{$categorie->name}}</span></a></li>
														@endforeach
													</ul>
												
											</li>
										@else
											<li class='has-sub'><a href='{{url('/'.$categorie["url"])}}'><span>{{$categorie->name}}</span></a></li>
										@endif
									<!-- @endif -->
								@endforeach
							   
							</ul>
						</div>
						<hr>
						<div class="panel-default">
							<div class="panel-heading text-center" style="text-transform: uppercase;font-weight:700;">Sản phẩm mới</div>
							<br>
								<div class="blog-new">
									<?php 
										$i=0;
									?>
									@foreach($products as $pr)
										<div class="blog-new-item box-shadows">
											<div class="row">
												@if($i<3)
													@if($pr->display ==1)
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
								                        <?php 
								                        	$i++;
								                        ?>
								                    @endif
								                @endif
						                	</div>
										</div>
										<br>
									@endforeach
									<br>
								</div>
							</div>
						</div>
				</div>
			</div>
		<div class="clear"></div>
		</div>
	</div>
	<br>
@endsection()