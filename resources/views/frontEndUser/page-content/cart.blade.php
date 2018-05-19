@extends('frontEndUser.layout.default')
@section('css')
<link rel="stylesheet" href="{{asset('addCart/css/cart.css')}}">
@endsection
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				@if( Session::has('flash_message'))
	                <div class="alert alert-{{ Session::get('flash_level')}}">
	                    {{ Session::get('flash_message')}}
	                </div>
	            @endif
				@if( count($errors) > 0)
		    	<div class="alert alert-danger">
		    		<ul>
		    			@foreach($errors->all() as $error)
		    				<li>{{$error}}</li>
		    			@endforeach
		    		</ul>
		    	</div>
		    	@endif
			</div>
		</div>
	    <div class="row">
	        <div class="col-md-7">
	        	<div class="panel panel-default">
					<div class="panel-heading">Thông tin giỏ hàng</div>
					<div class="panel-body">
						@foreach($contents as $item)
						<div class="row" style="margin-bottom: 40px;">
							<section id="cart"> 
								<article class="product">
									<div class="col-md-12">
										<div class="col-md-4">
											<header>
												<a id="{{$item->id}}" class="remove">
													<img width="100%" src="{{url('/uploads/images/products/'.$item["attributes"]["img"])}}" alt="">
													<h3>Remove</h3>
												</a>
											</header>
										</div>
										<div class="col-md-8">
											<div class="content">
												<h1>{{$item->name}}</h1>
											</div>
										</div>
									</div>

									<div class="col-md-12">
										<footer class="content">
											<span id="{{$item->id}}" class="qt-minus">-</span>
											<span class="qt">{{$item->quantity}}</span>
											<span id="{{$item->id}}" class="qt-plus">+</span>
											<h2 class="full-price">
												{{$item->price*$item->quantity}}<span>đ</span>
											</h2>
											<h2 class="price">
												{{$item->price}}<span>đ</span>
											</h2>
											
										</footer>
									</div>
								</article>
							</section>
						</div>
						@endforeach
						<div class="row">
							<footer id="site-footer">
								<div class="clearfix">
									
									<div class="col-md-6">
										<!-- <h2 class="subtotal">Subtotal: <span>0</span>đ</h2> -->
										<h3 class="tax">Taxes (0%): <span>0</span>đ</h3>
										<h3 class="shipping">Shipping: <span>0.00</span>đ</h3>
									</div>

									<div class="col-md-6">
											<div class="col-md-12">
												<h1 class="total">Total: <span>{{$total}}</span>đ</h1>
											</div>
											<div class="col-md-12">
												<a href="{{ URL::previous() }}" class="btn btn-warning" style="width: 100%;">Tiếp tục mua hàng</a>
											</div>
											<div class="col-md-12">
												<a type="submit" class="btn btn-danger" style="width: 100%;">Đặt hàng</a>
											</div>
									
									</div>

								</div>
							</footer>
						</div>
					</div>
				</div>
	        </div>
	        <div class="col-md-5">
	        	<div class="panel panel-default">
					<div class="panel-heading">Thông tin thanh toán</div>
					<div class="panel-body">
						<form action="{{URL::route('postAddOrder')}}" method="POST">
							<input type="hidden" name="_token" value="{{ csrf_token()}}">
							<div class="row">
								<div class="col-md-4">
									<label>Họ tên</label>
								</div>
								<div class="col-md-8">
									<div class="form-group">	
										<input type="text" class="form-control" name="name" placeholder="VD: Nguyễn Văn A" value="{{old('name')}}">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<label>Số điện thoại</label>
								</div>
								<div class="col-md-8">
									<div class="form-group">	
										<input type="text" class="form-control" name="phone_number" placeholder="VD: 0123456789" value="{{old('phone_number')}}">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<label>Địa chỉ</label>
								</div>
								<div class="col-md-8">
									<div class="form-group">	
										<input type="text" class="form-control" name="address" placeholder="Số 1 - Lê Thanh Nghị - Hai Bà Trưng - Hà Nội" value="{{old('address')}}">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<label>Lời nhắn</label>
								</div>
								<div class="col-md-8">
									<div class="form-group">	
										<textarea class="form-control" name="messages" rows="3">{{old('messages')}}</textarea>
									</div>
								</div>
							</div>
							<button type="submit" class="btn btn-danger" style="width: 100%;">Đặt hàng</button>
						</form>
					</div>
				</div>
	        </div>
	    </div>
	</div>
@endsection()
@section('js')
	<script type="text/javascript" src="{{asset('addCart/js/cart.js')}}"></script>
</script>
@endsection()