@extends('frontEndAdmin.layout.default')
@section('css')
	<link rel="stylesheet" href="{{asset('admin/vendor/bootstrap4/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/themify-icons/themify-icons.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/animate.css/animate.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/jscrollpane/jquery.jscrollpane.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/waves/waves.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/switchery/dist/switchery.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/css/upload-image.css')}}">
	<style type="text/css">
		.range-slider {
		  margin: 30px 0 30px 0;
		}

		.range-slider {
		  width: 100%;
		}

		.range-slider__range {
		  -webkit-appearance: none;
		  width: calc(100% - (73px));
		  height: 10px;
		  border-radius: 5px;
		  background: #d7dcdf;
		  outline: none;
		  padding: 0;
		  margin: 0;
		}
		.range-slider__range::-webkit-slider-thumb {
		  -webkit-appearance: none;
		          appearance: none;
		  width: 20px;
		  height: 20px;
		  border-radius: 50%;
		  background: #2c3e50;
		  cursor: pointer;
		  transition: background .15s ease-in-out;
		}
		.range-slider__range::-webkit-slider-thumb:hover {
		  background: #1abc9c;
		}
		.range-slider__range:active::-webkit-slider-thumb {
		  background: #1abc9c;
		}
		.range-slider__range::-moz-range-thumb {
		  width: 20px;
		  height: 20px;
		  border: 0;
		  border-radius: 50%;
		  background: #2c3e50;
		  cursor: pointer;
		  transition: background .15s ease-in-out;
		}
		.range-slider__range::-moz-range-thumb:hover {
		  background: #1abc9c;
		}
		.range-slider__range:active::-moz-range-thumb {
		  background: #1abc9c;
		}
		.range-slider__range:focus::-webkit-slider-thumb {
		  box-shadow: 0 0 0 3px #fff, 0 0 0 6px #1abc9c;
		}

		.range-slider__value {
		  display: inline-block;
		  position: relative;
		  width: 60px;
		  color: #fff;
		  line-height: 20px;
		  text-align: center;
		  border-radius: 3px;
		  background: #2c3e50;
		  padding: 5px 10px;
		  margin-left: 8px;
		}
		.range-slider__value:after {
		  position: absolute;
		  top: 8px;
		  left: -7px;
		  width: 0;
		  height: 0;
		  border-top: 7px solid transparent;
		  border-right: 7px solid #2c3e50;
		  border-bottom: 7px solid transparent;
		  content: '';
		}

		::-moz-range-track {
		  background: #d7dcdf;
		  border: 0;
		}

		input::-moz-focus-inner,
		input::-moz-focus-outer {
		  border: 0;
		}
	</style>

@endsection()
@section('content')
	<div class="content-area py-1">
		<div class="container-fluid">
			<h4>Basic Form Elements</h4>
			<ol class="breadcrumb no-bg mb-1">
				<li class="breadcrumb-item"><a href="{{URL::route('index')}}">Trang chủ</a></li>
				<li class="breadcrumb-item"><a href="{{URL::route('getListProductsRepair')}}">Danh sách khách hàng</a></li>
				<li class="breadcrumb-item active">Sửa khách hàng</li>
			</ol>
			<div class="box box-block bg-white">
				@if( count($errors) > 0)
		    	<div class="alert alert-danger">
		    		<ul>
		    			@foreach($errors->all() as $error)
		    				<li>{{$error}}</li>
		    			@endforeach
		    		</ul>
		    	</div>
		    	@endif
				<h5>Form controls</h5>
				<p class="font-90 text-muted mb-1">Bootstrap provides several form control styles, layout options, and custom components for creating a wide variety of forms.</p>
				@foreach($product_repair as $pr)
					<form action="{{URL::route('postEditProductRepair',$pr->id)}}" method="POST" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token()}}">
						<div class="row">
							<div class="col-md-9">
								
								<div class="form-group">
									<label for="exampleInputEmail1">Tên khách hàng</label>
									<input type="text" class="form-control" name="name" placeholder="VD: Nguyễn Văn A" value="{{$pr->name}}">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Số điện thoại</label>
									<input type="text" class="form-control" name="phone_number" placeholder="VD: 0123456789" value="{{$pr->phone_number}}">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Địa chỉ</label>
									<input type="text" class="form-control" name="address" placeholder="VD: số 1 Lê Thanh Nghị, Hai Bà Trưng, Hà Nội" value="{{$pr->address}}">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Tên sản phẩm sửa chữa</label>
									<input type="text" class="form-control" name="product_name" placeholder="VD: Nokia 8800 gold" value="{{$pr->product_name}}">
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Lỗi sản phẩm</label>
									<input type="text" class="form-control" name="error" placeholder="VD: Lỗi tai nghe" value="{{$pr->error}}">
								</div>
								<div class="range-slider">
									<label for="exampleInputEmail1">Mức độ hoàn thiện</label>
								  	<input class="range-slider__range" name="status" type="range" value="{{$pr->status}}" min="0" max="100">
								  	<span class="range-slider__value">10</span>
								</div>
								
							</div>
							<div class="col-md-3">
								<div class="all-image-product">
									<div class="row">
										<div class="col-md-12">
											<?php 
												$i=2;
												$product_repair_image = App\Products_Repair_Image::where('product_repair_id',$pr->id)->get();
											?>
											
											@foreach($product_repair_image as $prim)									
												@if($i==2)
													<div class="image-product{{$i}}" style="width: 50%; float: left;" >
														<img class="img-thumbnail" width="100%" src="{{url('/uploads/images/products/'.$prim["url_image"])}}">
													</div>
													<?php
														$i++;
													?>
												@else
													<div class="image-product{{$i}}" style="width: 50%;float: right;" >
														<img class="img-thumbnail" width="100%" src="{{url('/uploads/images/products/'.$prim["url_image"])}}">
													</div>
													<?php
														$i++;
													?>
												@endif
											@endforeach
										</div>
									</div>
								</div>
								<hr>
								<div class="file-upload edit-image2">	
								  	<div class="image-upload-wrap image-upload-wrap2">
									    <input class="file-upload-input file-upload-input2" type='file' name="image" onchange="readURL2(this);" accept="image/*" />
									    <div class="drag-text">
									      <h3>Ảnh sản phẩm trước sửa chữa</h3>
									    </div>
								  	</div>
								  	<div class="file-upload-content file-upload-content2">
								    	<img class="file-upload-image file-upload-image2" src="#" alt="your image" />
								    	<div class="image-title-wrap image-title-wrap2">
								      		<button type="button" onclick="removeUpload2()" class="remove-image">Remove <span class="image-title image-title2 text-center">Uploaded Image</span></button>
								    	</div>
								  	</div>
								  	<hr>
								</div>
								
								<div class="file-upload edit-image3">	
								  	<div class="image-upload-wrap image-upload-wrap3">
									    <input class="file-upload-input file-upload-input3" type='file' name="fimage" onchange="readURL3(this);" accept="image/*" />
									    <div class="drag-text">
									      <h3>Ảnh sản phẩm sau sửa chữa</h3>
									    </div>
								  	</div>
								  	<div class="file-upload-content file-upload-content3">
								    	<img class="file-upload-image file-upload-image3" src="#" alt="your image" />
								    	<div class="image-title-wrap image-title-wrap3">
								      		<button type="button" onclick="removeUpload3()" class="remove-image">Remove <span class="image-title image-title3 text-center">Uploaded Image</span></button>
								    	</div>
								  	</div>
								</div>
							</div>
						</div>

						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				@endforeach
			</div>
			
		</div>
	</div>
@endsection()
@section('js')
	<!-- Vendor JS -->
		<script type="text/javascript" src="{{asset('admin/vendor/jquery/jquery-1.12.3.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/tether/js/tether.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/bootstrap4/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/detectmobilebrowser/detectmobilebrowser.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/jscrollpane/jquery.mousewheel.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/jscrollpane/mwheelIntent.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/jscrollpane/jquery.jscrollpane.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/jquery-fullscreen-plugin/jquery.fullscreen-min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/waves/waves.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/switchery/dist/switchery.min.js')}}"></script>

		<!-- Neptune JS -->
		<script type="text/javascript" src="{{asset('admin/js/app.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/js/demo.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/js/upload-image.js')}}"></script>
		<script type="text/javascript">
			var rangeSlider = function(){
			  var slider = $('.range-slider'),
			      range = $('.range-slider__range'),
			      value = $('.range-slider__value');
			    
			  slider.each(function(){

			    value.each(function(){
			      var value = $(this).prev().attr('value');
			      $(this).html(value);
			    });

			    range.on('input', function(){
			      $(this).next(value).html(this.value);
			    });
			  });
			};

			rangeSlider();
		</script>
		
@endsection