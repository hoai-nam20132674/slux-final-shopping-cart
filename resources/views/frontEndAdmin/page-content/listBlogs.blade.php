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
@endsection()
@section('content')
	
	<div class="content-area py-1">
		<div class="container-fluid">
			<h4>Data Tables</h4>
			<ol class="breadcrumb no-bg mb-1">
				<li class="breadcrumb-item"><a href="tables-datatable.html#">Home</a></li>
				<li class="breadcrumb-item"><a href="tables-datatable.html#">Tables</a></li>
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
							<th>Tiêu đề</th>
							<th>Link bài tin tức</th>
							<th class="text-center">Enable</th>
							<th class="text-center">Disible</th>
							<th class="text-center" style="padding: 0px; background: green;">
								<a href="{{URL::route('addBlog')}}" title="Thêm tin tức" style="color: green;"><i class="ion-android-add" style=" font-size:30px; color:#fff;"></i></a>
							</th>

						</tr>
					</thead>
					<tbody>
						@foreach ($blogs as $blog)
						<tr>
							<td>{{$blog -> title}}</td>
							<td><a href="{{url('/'.$blog["url"])}}" target="_blank">{{$blog -> url}}</a></td>
							@if($blog->display ==0)
								<td class="text-center">
									<div class="checkbox">
										<label>
											<input onclick="enable{{$blog->id}}()" id="enable{{$blog->id}}" type="checkbox">
										</label>
									</div>
								</td>
								<td class="text-center">
									<div class="checkbox">
										<label>
											<input onclick="disable{{$blog->id}}()" id="disable{{$blog->id}}" type="checkbox" checked>
										</label>
									</div>
								</td>
							@else
								<td class="text-center">
									<div class="checkbox">
										<label>
											<input onclick="enable{{$blog->id}}()" id="enable{{$blog->id}}" type="checkbox" checked>
										</label>
									</div>
								</td>
								<td class="text-center">
									<div class="checkbox">
										<label>
											<input onclick="disable{{$blog->id}}()" id="disable{{$blog->id}}" type="checkbox">
										</label>
									</div>
								</td>
							@endif
							<script type="text/javascript">
								function enable{{$blog->id}}() {
								    document.getElementById("enable{{$blog->id}}").checked = true;
								    document.getElementById("disable{{$blog->id}}").checked = false;
								}

								function disable{{$blog->id}}() {
								    document.getElementById("disable{{$blog->id}}").checked = true;
								    document.getElementById("enable{{$blog->id}}").checked = false;
								}
							</script>
							<td class="text-center">
								<a onclick="return confirmDelete('Bạn có chắc muốn xóa tin tức này không')" href="{{ URL::route('deleteBlog',$blog->id)}}" title="Xóa danh mục"><i class="ion-trash-a" style="width: 100%; font-size: 18px; color: red; margin-right: 5px;"></i></a>
								<a href="{{ URL::route('editBlog',[$blog->id,$blog->categorie_id])}}" title="Sửa danh mục"><i class="ion-compose" style="width: 100%; font-size: 18px;"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
	
@endsection()
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
	
@endsection()