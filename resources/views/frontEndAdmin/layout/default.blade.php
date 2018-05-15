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
		<title>Admin master</title>
		<script type="text/javascript" src="{{asset('admin/ckeditor/ckeditor.js')}}"></script>
		<script type="text/javascript" src="{{asset('admin/ckfinder/ckfinder.js')}}"></script>

		<!-- Vendor CSS -->
		
		@yield('css')

		<!-- Neptune CSS -->
		<link rel="stylesheet" href="{{asset('admin/css/core.css')}}">

		<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="fixed-sidebar fixed-header skin-default content-appear">
		<div class="wrapper">

			<!-- Preloader -->
			<div class="preloader"></div>

			<!-- Sidebar -->
			<div class="site-overlay"></div>
			<div class="site-sidebar">
				<div class="custom-scroll custom-scroll-light">
					<ul class="sidebar-menu">
						<li class="menu-title">Main</li>
						<li class="with-sub">
							<a href="#" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="tag tag-purple">3</span>
								<span class="s-icon"><i class="ti-anchor"></i></span>
								<span class="s-text">HỆ THỐNG</span>
							</a>
							<ul>
								<li><a href="{{URL::route('editMenu')}}">Menu</a></li>
								<li><a href="index2.html">Media</a></li>
								<li><a href="index3.html">Dashboard 3</a></li>
							</ul>
						</li>
						<li>
							<a href="#" class="waves-effect  waves-light">
								<span class="s-icon"><i class="ti-layout-tab"></i></span>
								<span class="s-text">Layouts</span>
							</a>
						</li>
						<li>
							<a href="#" class="waves-effect  waves-light">
								<span class="s-icon"><i class="ti-palette"></i></span>
								<span class="s-text">Skins</span>
							</a>
						</li>
						<li class="menu-title">Components</li>
						<li class="with-sub">
							<a href="{{URL::route('getListCategories')}}" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-gallery"></i></span>
								<span class="s-text">Danh mục</span>
							</a>
						</li>
						<li class="with-sub">
							<a href="{{URL::route('getListProducts')}}" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-paint-bucket"></i></span>
								<span class="tag tag-success">3</span>
								<span class="s-text">Sản phẩm</span>
							</a>
						</li>
						<li class="with-sub">
							<a href="{{URL::route('getListBlogs')}}" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-pencil-alt"></i></span>
								<span class="tag tag-danger">{{$countBlogs}}</span>
								<span class="s-text">Tin tức</span>
							</a>
						</li>
						<li class="with-sub">
							<a href="#" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-menu-alt"></i></span>
								<span class="s-text">Khách hàng</span>
							</a>
							<ul>
								<li><a href="{{URL::route('getListProductsRepair')}}">Khách hàng sửa chữa</a></li>
								<li><a href="tables-datatable.html">Khách hàng đăng ký tư vấn</a></li>
							</ul>
						</li>
						<li class="with-sub">
							<a href="#" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="tag tag-success">3</span>
								<span class="s-icon"><i class="ti-gallery"></i></span>
								<span class="s-text">Pages</span>
							</a>
							<ul>
								<li><a href="pages-blank.html">Blank</a></li>
								<li><a href="pages-contactform.html">Contact Form</a></li>
								<li><a href="pages-403.html">Error 403</a></li>
								<li><a href="pages-404.html">Error 404</a></li>
								<li><a href="pages-500.html">Error 500</a></li>
								<li><a href="pages-faq.html">FAQ</a></li>
								<li><a href="pages-invoice.html">Invoice</a></li>
								<li><a href="pages-profile.html">Profile</a></li>
								<li><a href="pages-reset-password.html">Reset Password</a></li>
								<li><a href="pages-sign-in.html">Sign In</a></li>
								<li><a href="pages-sign-in2.html">Sign In 2</a></li>
								<li><a href="pages-sign-up.html">Sign Up</a></li>
							</ul>
						</li>
						<li class="with-sub">
							<a href="#" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-view-grid"></i></span>
								<span class="s-text">Apps</span>
							</a>
							<ul>
								<li><a href="apps-chat.html">Chat</a></li>
								<li><a href="apps-contacts.html">Contacts</a></li>
								<li><a href="apps-inbox.html">Inbox</a></li>
							</ul>
						</li>
						<li class="menu-title">More</li>
						<li class="with-sub">
							<a href="#" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="tag tag-info">6</span>
								<span class="s-icon"><i class="ti-bar-chart-alt"></i></span>
								<span class="s-text">Charts</span>
							</a>
							<ul>
								<li><a href="charts-chartjs.html">Chart.js</a></li>
								<li><a href="charts-chartist.html">Chartist Chart</a></li>
								<li><a href="charts-easy.html">Easy Pie Chart</a></li>
								<li><a href="charts-flot.html">Flot Chart</a></li>
								<li><a href="charts-morris.html">Morris Chart</a></li>
								<li><a href="charts-peity.html">Peity Chart</a></li>
								<li><a href="charts-sparkline.html">Sparkline Chart</a></li>
							</ul>
						</li>
						<li class="with-sub">
							<a href="#" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-location-pin"></i></span>
								<span class="s-text">Maps</span>
							</a>
							<ul>
								<li><a href="maps-google.html">Google Map</a></li>
								<li><a href="maps-vector.html">Vector Map</a></li>
							</ul>
						</li>
						<li>
							<a href="calendar.html" class="waves-effect  waves-light">
								<span class="s-icon"><i class="ti-calendar"></i></span>
								<span class="s-text">Calendar</span>
							</a>
						</li>
						<li class="with-sub compact-hide">
							<a href="javascript: void(0);" class="waves-effect  waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-menu"></i></span>
								<span class="s-text">Menu Levels</span>
							</a>
							<ul>
								<li class="with-sub">
									<a href="javascript: void(0);">
										<span class="s-caret"><i class="fa fa-angle-down"></i></span>
										<span class="s-text">Level 1</span>
									</a>
									<ul>
										<li class="with-sub">
											<a href="javascript: void(0);">
												<span class="s-caret"><i class="fa fa-angle-down"></i></span>
												<span class="s-text">Level 1.2</span>
											</a>
											<ul>
												<li class="with-sub">
													<a href="javascript: void(0);">
														<span class="s-caret"><i class="fa fa-angle-down"></i></span>
														<span class="s-text">Level 1.2.3</span>
													</a>
													<ul>
														<li><a href="javascript: void(0);">Level 1.2.3.4</a></li>
														<li><a href="javascript: void(0);">Level 1.2.3.4</a></li>
													</ul>
												</li>
												<li><a href="javascript: void(0);">Level 1.2.3</a></li>
											</ul>
										</li>
										<li><a href="javascript: void(0);">Level 1.2</a></li>
									</ul>
								</li>
								<li><a href="javascript: void(0);">Level 1</a></li>
							</ul>
						</li>
						<li class="menu-title compact-hide">System usage</li>
						<li class="compact-hide">
							<div class="progress-widget progress-widget-light">
								<div class="mb-0-5">
									SSD
									<span class="float-xs-right">5 GB</span>
								</div>
								<progress class="progress progress-rounded progress-success progress-sm" value="60" max="100">100%</progress>
								<div class="mb-0-5">
									CPU
									<span class="float-xs-right">80%</span>
								</div>
								<progress class="progress progress-rounded progress-danger progress-sm mb-0-5" value="80" max="100">100%</progress>
							</div>
						</li>
						<li class="menu-title compact-hide">Tags</li>
						<li class="compact-hide">
							<a href="javascript: void(0);" class="waves-effect  waves-light">
								<span class="s-icon"><i class="fa fa-circle-o text-danger"></i></span>
								<span class="s-text">Ideas</span>
							</a>
						</li>
						<li class="compact-hide">
							<a href="javascript: void(0);" class="waves-effect  waves-light">
								<span class="s-icon"><i class="fa fa-circle-o text-warning"></i></span>
								<span class="s-text">Projects</span>
							</a>
						</li>
						<li class="compact-hide">
							<a href="documentation.html" class="waves-effect  waves-light">
								<span class="s-icon"><i class="fa fa-circle-o text-primary"></i></span>
								<span class="s-text">Documentation</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			
			<!-- Sidebar second -->
			

			<!-- Template options -->
			

			<!-- Header -->
			<div class="site-header">
				<nav class="navbar navbar-light">
					<div class="navbar-left">
						<a class="navbar-brand" href="/admin/index">
							<div class="logo"><img src="{{asset('images/logo-slux.png')}}" width="100%"></div>
						</a>
						<div class="toggle-button dark sidebar-toggle-first float-xs-left hidden-md-up">
							<span class="hamburger"></span>
						</div>
						<div class="toggle-button-second dark float-xs-right hidden-md-up">
							<i class="ti-arrow-left"></i>
						</div>
						<div class="toggle-button dark float-xs-right hidden-md-up" data-toggle="collapse" data-target="#collapse-1">
							<span class="more"></span>
						</div>
					</div>
					<div class="navbar-right navbar-toggleable-sm collapse" id="collapse-1">
						<div class="toggle-button light sidebar-toggle-second float-xs-left hidden-sm-down">
							<span class="hamburger"></span>
						</div>
						<div class="toggle-button-second light float-xs-right hidden-sm-down">
							<i class="ti-arrow-left"></i>
						</div>
						<ul class="nav navbar-nav float-md-right">
							<li class="nav-item dropdown">
								<a class="nav-link" href="index.html#" data-toggle="dropdown" aria-expanded="false">
									<i class="ti-flag-alt"></i>
									<span class="hidden-md-up ml-1">Tasks</span>
									<span class="tag tag-success top">3</span>
								</a>
								<div class="dropdown-tasks dropdown-menu dropdown-menu-right animated fadeInUp">
									<div class="t-item">
										<div class="mb-0-5">
											<a class="text-black" href="index.html#">First Task</a>
											<span class="float-xs-right text-muted">75%</span>
										</div>
										<progress class="progress progress-danger progress-sm" value="75" max="100">100%</progress>
										<span class="avatar box-32">
											<img src="img/avatars/2.jpg" alt="">
										</span>
										<a class="text-black" href="index.html#">John Doe</a>, <span class="text-muted">5 min ago</span>
									</div>
									<div class="t-item">
										<div class="mb-0-5">
											<a class="text-black" href="index.html#">Second Task</a>
											<span class="float-xs-right text-muted">40%</span>
										</div>
										<progress class="progress progress-purple progress-sm" value="40" max="100">100%</progress>
										<span class="avatar box-32">
											<img src="img/avatars/3.jpg" alt="">
										</span>
										<a class="text-black" href="index.html#">John Doe</a>, <span class="text-muted">15:07</span>
									</div>
									<div class="t-item">
										<div class="mb-0-5">
											<a class="text-black" href="index.html#">Third Task</a>
											<span class="float-xs-right text-muted">100%</span>
										</div>
										<progress class="progress progress-warning progress-sm" value="100" max="100">100%</progress>
										<span class="avatar box-32">
											<img src="img/avatars/4.jpg" alt="">
										</span>
										<a class="text-black" href="index.html#">John Doe</a>, <span class="text-muted">yesterday</span>
									</div>
									<div class="t-item">
										<div class="mb-0-5">
											<a class="text-black" href="index.html#">Fourth Task</a>
											<span class="float-xs-right text-muted">60%</span>
										</div>
										<progress class="progress progress-success progress-sm" value="60" max="100">100%</progress>
										<span class="avatar box-32">
											<img src="img/avatars/5.jpg" alt="">
										</span>
										<a class="text-black" href="index.html#">John Doe</a>, <span class="text-muted">3 days ago</span>
									</div>
									<a class="dropdown-more" href="index.html#">
										<strong>View all tasks</strong>
									</a>
								</div>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link" href="index.html#" data-toggle="dropdown" aria-expanded="false">
									<i class="ti-email"></i>
									<span class="hidden-md-up ml-1">Notifications</span>
									<span class="tag tag-danger top">12</span>
								</a>
								<div class="dropdown-messages dropdown-tasks dropdown-menu dropdown-menu-right animated fadeInUp">
									<div class="m-item">
										<div class="mi-icon bg-info"><i class="ti-comment"></i></div>
										<div class="mi-text"><a class="text-black" href="index.html#">John Doe</a> <span class="text-muted">commented post</span> <a class="text-black" href="index.html#">Lorem ipsum dolor</a></div>
										<div class="mi-time">5 min ago</div>
									</div>
									<div class="m-item">
										<div class="mi-icon bg-danger"><i class="ti-heart"></i></div>
										<div class="mi-text"><a class="text-black" href="index.html#">John Doe</a> <span class="text-muted">liked post</span> <a class="text-black" href="index.html#">Lorem ipsum dolor</a></div>
										<div class="mi-time">15:07</div>
									</div>
									<div class="m-item">
										<div class="mi-icon bg-purple"><i class="ti-user"></i></div>
										<div class="mi-text"><a class="text-black" href="index.html#">John Doe</a> <span class="text-muted">followed</span> <a class="text-black" href="index.html#">Kate Doe</a></div>
										<div class="mi-time">yesterday</div>
									</div>
									<div class="m-item">
										<div class="mi-icon bg-danger"><i class="ti-heart"></i></div>
										<div class="mi-text"><a class="text-black" href="index.html#">John Doe</a> <span class="text-muted">liked post</span> <a class="text-black" href="index.html#">Lorem ipsum dolor</a></div>
										<div class="mi-time">3 days ago</div>
									</div>
									<a class="dropdown-more" href="index.html#">
										<strong>View all notifications</strong>
									</a>
								</div>
							</li>
							<li class="nav-item dropdown hidden-sm-down">
								<a href="index.html#" data-toggle="dropdown" aria-expanded="false">
									<span class="avatar box-32">
										<img src="{{asset('images/user.png')}}" alt="">
									</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right animated fadeInUp">
									<a class="dropdown-item" href="index.html#">
										<i class="ti-email mr-0-5"></i> Inbox
									</a>
									<a class="dropdown-item" href="index.html#">
										<i class="ti-user mr-0-5"></i> Profile
									</a>
									<a class="dropdown-item" href="index.html#">
										<i class="ti-settings mr-0-5"></i> Settings
									</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="index.html#"><i class="ti-help mr-0-5"></i> Help</a>
									<a class="dropdown-item" href="{{url('/logout/admin-master')}}"><i class="ti-power-off mr-0-5"></i> Sign out</a>
								</div>
							</li>
						</ul>
						<ul class="nav navbar-nav">
							<li class="nav-item hidden-sm-down">
								<a class="nav-link toggle-fullscreen" href="index.html#">
									<i class="ti-fullscreen"></i>
								</a>
							</li>
							<li class="nav-item dropdown hidden-sm-down">
								<a class="nav-link" href="index.html#" data-toggle="dropdown" aria-expanded="false">
									<i class="ti-layout-grid3"></i>
								</a>
								<div class="dropdown-apps dropdown-menu animated fadeInUp">
									<div class="a-grid">
										<div class="row row-sm">
											<div class="col-xs-4">
												<div class="a-item">
													<a href="index.html#">
														<div class="ai-icon"><img class="img-fluid" src="img/brands/dropbox.png" alt=""></div>
														<div class="ai-title">Dropbox</div>
													</a>
												</div>
											</div>
											<div class="col-xs-4">
												<div class="a-item">
													<a href="index.html#">
														<div class="ai-icon"><img class="img-fluid" src="img/brands/github.png" alt=""></div>
														<div class="ai-title">Github</div>
													</a>
												</div>
											</div>
											<div class="col-xs-4">
												<div class="a-item">
													<a href="index.html#">
														<div class="ai-icon"><img class="img-fluid" src="img/brands/wordpress.png" alt=""></div>
														<div class="ai-title">Wordpress</div>
													</a>
												</div>
											</div>
											<div class="col-xs-4">
												<div class="a-item">
													<a href="index.html#">
														<div class="ai-icon"><img class="img-fluid" src="img/brands/gmail.png" alt=""></div>
														<div class="ai-title">Gmail</div>
													</a>
												</div>
											</div>
											<div class="col-xs-4">
												<div class="a-item">
													<a href="index.html#">
														<div class="ai-icon"><img class="img-fluid" src="img/brands/drive.png" alt=""></div>
														<div class="ai-title">Drive</div>
													</a>
												</div>
											</div>
											<div class="col-xs-4">
												<div class="a-item">
													<a href="index.html#">
														<div class="ai-icon"><img class="img-fluid" src="img/brands/dribbble.png" alt=""></div>
														<div class="ai-title">Dribbble</div>
													</a>
												</div>
											</div>
										</div>
									</div>
									<a class="dropdown-more" href="index.html#">
										<strong>View all apps</strong>
									</a>
								</div>
							</li>
						</ul>
						<div class="header-form float-md-left ml-md-2">
							<form>
								<input type="text" class="form-control b-a" placeholder="Search for...">
								<button type="submit" class="btn bg-white b-a-0">
									<i class="ti-search"></i>
								</button>
							</form>
						</div>
					</div>
				</nav>
			</div>

			<div class="site-content">
				<!-- Content -->
				@yield('content')
				<!-- Footer -->
				<footer class="footer">
					<div class="container-fluid">
						<div class="row text-xs-center">
							<div class="col-sm-4 text-sm-left mb-0-5 mb-sm-0">
								2016 © Neptune
							</div>
							<div class="col-sm-8 text-sm-right">
								<ul class="nav nav-inline l-h-2">
									<li class="nav-item"><a class="nav-link text-black" href="index.html#">Privacy</a></li>
									<li class="nav-item"><a class="nav-link text-black" href="index.html#">Terms</a></li>
									<li class="nav-item"><a class="nav-link text-black" href="index.html#">Help</a></li>
								</ul>
							</div>
						</div>
					</div>
				</footer>
			</div>

		</div>

		<!-- Vendor JS -->
		
		@yield('js')
		<script type="text/javascript">
			function confirmDelete(msg){
	            if(window.confirm(msg)){
	                return true;
	            }
	            else{
	                return false;
	            }

	        }
	        
	    </script>
	    <script type="text/javascript">
	    	$("div.alert").delay(5000).slideUp();
	    </script>
	</body>
</html>