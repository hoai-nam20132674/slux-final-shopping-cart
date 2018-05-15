@extends('frontEndAdmin.layout.default')
@section('css')
	<link rel="stylesheet" href="{{asset('admin/vendor/bootstrap4/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/themify-icons/themify-icons.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/animate.css/animate.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/jscrollpane/jquery.jscrollpane.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/waves/waves.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/switchery/dist/switchery.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/DataTables/css/dataTables.bootstrap4.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/DataTables/Responsive/css/responsive.bootstrap4.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/DataTables/Buttons/css/buttons.dataTables.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/DataTables/Buttons/css/buttons.bootstrap4.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/vendor/ionicons/css/ionicons.min.css')}}">
@endsection
@section('content')
	<div class="content-area py-1">
		<div class="container-fluid">
			<h4>Data Tables</h4>
			<ol class="breadcrumb no-bg mb-1">
				<li class="breadcrumb-item"><a href="{{URL::route('index')}}">Trang chủ</a></li>
				<li class="breadcrumb-item active">Data Tables</li>
			</ol>
			<div class="box box-block bg-white">
				<h5 class="mb-1">Default Table</h5>
				<table class="table table-striped table-bordered dataTable" id="table-1">
					@if( Session::has('flash_message'))
		                <div class="alert alert-{{ Session::get('flash_level')}}">
		                    {{ Session::get('flash_message')}}
		                </div>
		            @endif
					<thead>
						<tr>
							<th>STT</th>
							<th>Họ tên</th>
							<th>SĐT</th>
							<th>Địa chỉ</th>
							<th>Tên sản phẩm</th>
							<th>Lỗi</th>
							<th>Trạng thái</th>
							<th class="text-center" style="padding: 0px; background: green;">
								<a href="{{URL::route('addProductRepair')}}" title="Thêm sản phẩm sửa chữa" style="color: green;"><i class="ion-android-add" style=" font-size:30px;color:#fff;"></i></a>
							</th>

						</tr>
					</thead>
					<tbody>
						<?php 
							$i=1;
						?>
						@foreach ($products_repair as $pr)
						<tr>
							<td>{{$i++}}</td>
							<td>{{$pr -> name}}</td>
							<td>{{$pr->phone_number}}</td>
							<td>{{$pr->address}}</td>
							<td>{{$pr->product_name}}</td>
							<td>{{$pr->error}}</td>
							<td class="text-center">
								@if($pr->status < 100)
								<div class="status" style="background: red;color:#fff; width:100%;">
									<span >sửa chữa</span>
								</div>
								@else 
								<div class="status" style="background: green;color:#fff;width:100%; ">
									<span >hoàn thiện</span>
								</div>
								@endif
							</td>
							
							<td class="text-center">
								<a onclick="return confirmDelete('Bạn có chắc muốn xóa khách hàng này không')" href="{{ URL::route('deleteProductRepair',$pr->id)}}" title="Xóa khách hàng"><i class="ion-trash-a" style="width: 100%; font-size: 18px; color: red; margin-right: 5px;"></i></a>
								<a href="{{ URL::route('editProductRepair',$pr->id)}}" title="Sửa khách hàng"><i class="ion-compose" style="width: 100%; font-size: 18px;"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection
@section('js')
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
	<script type="text/javascript" src="{{asset('admin/vendor/DataTables/js/jquery.dataTables.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/vendor/DataTables/js/dataTables.bootstrap4.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/vendor/DataTables/Responsive/js/dataTables.responsive.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/vendor/DataTables/Responsive/js/responsive.bootstrap4.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/vendor/DataTables/Buttons/js/dataTables.buttons.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/vendor/DataTables/Buttons/js/buttons.bootstrap4.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/vendor/DataTables/JSZip/jszip.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/vendor/DataTables/pdfmake/build/pdfmake.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/vendor/DataTables/pdfmake/build/vfs_fonts.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/vendor/DataTables/Buttons/js/buttons.html5.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/vendor/DataTables/Buttons/js/buttons.print.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/vendor/DataTables/Buttons/js/buttons.colVis.min.js')}}"></script>

	<!-- Neptune JS -->
	<script type="text/javascript" src="{{asset('admin/js/app.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/js/demo.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/js/tables-datatable.js')}}"></script>
@endsection