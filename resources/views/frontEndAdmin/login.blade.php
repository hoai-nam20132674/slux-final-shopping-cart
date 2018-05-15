<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Title -->
		<title>Welcome! Admin Slux.vn</title>

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('admin/vendor/bootstrap4/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('admin/vendor/themify-icons/themify-icons.css')}}">
		<link rel="stylesheet" href="{{asset('admin/vendor/font-awesome/css/font-awesome.min.css')}}">

		<!-- Neptune CSS -->
		<link rel="stylesheet" href="{{asset('admin/css/core.css')}}">

		<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="auth-bg">
		
		<div class="auth">
			<div class="auth-header">
				<div class="mb-2"><img src="img/logo.png" title=""></div>
				<h6>Welcome! Admin Slux.vn</h6>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4 offset-md-4">
						<form action="/postLogin" method="POST">
						{!! csrf_field() !!}
							<div class="form-group">
								<div class="input-group">
									<input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="Email" value="{!! old('email') !!}">
									<div class="input-group-addon"><i class="ti-email"></i></div>
								</div>
							</div>
							<div class="form-group">
								<div class="input-group">
								<input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password">
									<div class="input-group-addon"><i class="ti-key"></i></div>
								</div>
							</div>
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
							<div class="form-group clearfix">
								<div class="float-xs-left">
									<label class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description font-90">Remember me</span>
									</label>
								</div>
								<div class="float-xs-right">
									<a class="text-white font-90" href="pages-sign-in2.html#">Forgot password?</a>
								</div>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-danger btn-block">Đăng nhập</button>
							</div>
						</form>
						<div class="row">
							<div class="col-xs-6">
								<button type="button" class="btn bg-facebook btn-block label-left mb-0-25">
									<span class="btn-label"><i class="ti-facebook"></i></span>
									Facebook
								</button>
							</div>
							<div class="col-xs-6">
								<button type="button" class="btn bg-twitter btn-block label-left mb-0-25">
									<span class="btn-label"><i class="ti-twitter"></i></span>
									Twitter
								</button>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>

		<!-- Vendor JS -->
		<script type="text/javascript" src="{{asset('admin/vendor/jquery/jquery-1.12.3.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/tether/js/tether.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/vendor/bootstrap4/js/bootstrap.min.js')}}"></script>
		<script type="text/javascript">
	        $("div.alert").delay(3000).slideUp();
	    </script>
	</body>
</html>