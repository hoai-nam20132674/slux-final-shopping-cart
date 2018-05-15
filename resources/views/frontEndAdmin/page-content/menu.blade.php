@extends('frontEndAdmin.layout.default')
@section('css')
	<link rel="stylesheet" href="{{asset('admin/vendor/bootstrap4/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/themify-icons/themify-icons.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/animate.css/animate.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/jscrollpane/jquery.jscrollpane.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/waves/waves.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/switchery/dist/switchery.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/select2/dist/css/select2.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/multi-select/css/multi-select.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}">
@endsection
@section('content')
	<div class="content-area py-1">
		<div class="container-fluid">
			<h4>Plugins</h4>
			<ol class="breadcrumb no-bg mb-1">
				<li class="breadcrumb-item"><a href="forms-plugins.html#">Home</a></li>
				<li class="breadcrumb-item"><a href="forms-plugins.html#">Forms</a></li>
				<li class="breadcrumb-item active">Plugins</li>
			</ol>
			@if( Session::has('flash_message'))
                <div class="alert alert-{{ Session::get('flash_level')}}">
                    {{ Session::get('flash_message')}}
                </div>
            @endif
			<div class="box box-block bg-white">
				<div class="title-edit-menu text-center" style="color: #000;">
					<h5 style="font-weight: 700;">MENU HIỂN THỊ</h5>
					<p class="font-90 text-muted mb-1">Vui lòng chọn danh mục hiển thi trên menu Slux, hãy chắc chắn rằng bạn đã đưa ra quyết định chính xác trước khi nhấn <span style="font-size: 10px;" class="tag tag-danger">SUBMIT</span></p>
				</div>
				<hr>
				<form action="{{URL::route('postEditMenuHeader')}}" method="POST">
					<input type="hidden" name="_token" value="{{ csrf_token()}}">
					<div class="form-group row">
						<label for="select2-demo-2" class="col-sm-2 form-control-label text-center">MENU HEADER</label>
						<div class="col-sm-6">
							<select name="categorie_header[]" id="select2-demo-2" class="form-control" data-plugin="select2" multiple="multiple">
								@foreach($categories as $cate)
									@if($cate->id ==1){}
									@else
										<option value="{{$cate->id}}">{{$cate->name}}</option>
									@endif
								@endforeach
							</select>
						</div>
						<div class="col-sm-2"><button type="submit" class="btn btn-primary">SUBMIT</button></div>
					</div>
				</form>
				<hr>
				<form action="{{URL::route('postEditMenuFooter')}}" method="POST">
					<input type="hidden" name="_token" value="{{ csrf_token()}}">
					<div class="form-group row">
						<label for="select2-demo-3" class="col-sm-2 form-control-label text-center">MENU FOOTER</label>
						<div class="col-sm-6">
							<select name="categorie_footer[]" id="select2-demo-3" class="form-control" data-plugin="select2" multiple="multiple">
								@foreach($categories as $cate)
									@if($cate->id ==1){}
									@else
										<option value="{{$cate->id}}">{{$cate->name}}</option>
									@endif
								@endforeach
							</select>
						</div>
						<div class="col-sm-2"><button type="submit" class="btn btn-primary">SUBMIT</button></div>
					</div>
				</form>
				<hr>
				<form action="{{URL::route('postEditMenuSidebar')}}" method="POST">
					<input type="hidden" name="_token" value="{{ csrf_token()}}">
					<div class="form-group row">
						<label for="select2-demo-3" class="col-sm-2 form-control-label text-center">MENU SIDEBAR</label>
						<div class="col-sm-6">
							<select name="categorie_footer[]" id="select2-demo-3" class="form-control" data-plugin="select2" multiple="multiple">
								@foreach($categories as $cate)
									@if($cate->id ==1){}
									@else
										<option value="{{$cate->id}}">{{$cate->name}}</option>
									@endif
								@endforeach
							</select>
						</div>
						<div class="col-sm-2"><button type="submit" class="btn btn-primary">SUBMIT</button></div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
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
	<script type="text/javascript" src="{{asset('admin/vendor/select2/dist/js/select2.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/vendor/multi-select/js/jquery.multi-select.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/vendor/bootstrap-maxlength/src/bootstrap-maxlength.js')}}"></script>

	<!-- Neptune JS -->
	<script type="text/javascript" src="{{asset('admin/js/app.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/js/demo.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/js/forms-plugins.js')}}"></script>
@endsection