<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.4 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>Clip-One - Responsive Admin Template</title>
		<!-- start: META -->
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="The new grace company custom management suite" name="description" />
    <meta content="phillip madsen" name="author" />
    @yield('seo')
		<!-- end: META -->
		<!-- start: MAIN CSS -->
	    <link rel ="stylesheet" href="{!! asset('/backend/assets/plugins/bootstrap/css/bootstrap.min.css') !!}">
	    <link rel="stylesheet" href="{!! asset('/backend/assets/plugins/font-awesome/css/font-awesome.min.css') !!}">
	    <link rel="stylesheet" href="{!! asset('/backend/assets/fonts/style.css') !!}">
	    <link rel="stylesheet" href="{!! asset('/backend/assets/css/main.css') !!}">
	    <link rel="stylesheet" href="{!! asset('/backend/assets/css/main-responsive.css') !!}">
	    <link rel="stylesheet" href="{!! asset('/backend/assets/plugins/iCheck/skins/all.css') !!}">
	    <link rel="stylesheet" href="{!! asset('/backend/assets/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css') !!}">
	    <link rel="stylesheet" href="{!! asset('/backend/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.css') !!}">
	    <link rel="stylesheet" href="{!! asset('/backend/assets/css/theme_light.css') !!}" type="text/css" id="skin_color">
	    <link rel="stylesheet" href="{!! asset('/backend/assets/css/print.css') !!}" type="text/css" media="print"/>
		<!--[if IE 7]>
		<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		@yield('ppstyle')
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
    <link rel="shortcut icon" href="{!! asset('/backend/favicon.ico') !!}" />
    @yield('pp_header_scripts')
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body>
		<!-- start: HEADER -->
		<div class="navbar navbar-inverse navbar-fixed-top">
			<!-- start: TOP NAVIGATION CONTAINER -->
			<div class="container">
				<div class="navbar-header">
					<!-- start: RESPONSIVE MENU TOGGLER -->
					<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
						<span class="clip-list-2"></span>
					</button>
					<!-- end: RESPONSIVE MENU TOGGLER -->
					<!-- start: LOGO -->
 					{{-- <a class="navbar-brand" href="{{ url(getLang().'/admin/dashboard') }}"> GRACE<i class="clip-clip"></i>ADMIN </a> --}}
					<!-- end: LOGO -->
				</div>
				<div class="navbar-tools">
			 {{-- @include('admin.layouts.partials.header.header') --}}
				</div>
			</div>
			<!-- end: TOP NAVIGATION CONTAINER -->
		</div>
		<!-- end: HEADER -->
		<!-- start: MAIN CONTAINER -->
		<div class="main-container">
		    <div class="navbar-content">
		        <!-- start: SIDEBAR -->
		        <div class="main-navigation navbar-collapse collapse">
		            {{-- @include('admin/layouts/partials/menu/adminsidebar') --}}
		        </div>
		    </div>
		    <!-- end: SIDEBAR -->
			<!-- start: PAGE -->
			<div class="main-content">
				<!-- start: PANEL CONFIGURATION MODAL FORM -->
				<div class="modal fade" id="panel-config" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
									&times;
								</button>
								<h4 class="modal-title">Panel Configuration</h4>
							</div>
							<div class="modal-body">
								Here will be a configuration form
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">
									Close
								</button>
								<button type="button" class="btn btn-primary">
									Save changes
								</button>
							</div>
						</div>
						<!-- /.modal-content -->
					</div>
					<!-- /.modal-dialog -->
				</div>
				<!-- /.modal -->
				<!-- end: SPANEL CONFIGURATION MODAL FORM -->
				<div class="container">
					<!-- start: PAGE HEADER -->
					<div class="row">
						<div class="col-sm-12">
							<!-- start: STYLE SELECTOR BOX -->
							 {{-- @include('admin.layouts.partials.style-selector') --}}
							<!-- end: STYLE SELECTOR BOX -->
							<!-- start: PAGE TITLE & BREADCRUMB -->
			                <!-- start: PAGE TITLE & BREADCRUMB -->
			                <ol class="breadcrumb">
			                    <li><a href="{!! url('/admin') !!}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			                    @yield('breadlink1')
			                </ol>
			                <div class="page-header">
			                    <h1> @yield('pagetitle')  <small> | @yield('pt-small', 'Control Panel')</small></h1>
			                </div>
			                {{-- @yield('pageheader') --}}
			                        <!-- end: PAGE TITLE & BREADCRUMB -->
						</div>
					</div>
					<!-- end: PAGE HEADER -->
					<!-- start: PAGE CONTENT -->
<div class="row">
    <div class="col-sm-12">
        {{-- @include('backend.layout.partials.3-widgets') --}}
        @yield('widgets')
        @yield('content')
        @yield('after-content')
    </div>
</div>
					<!-- end: PAGE CONTENT-->
				</div>
			</div>
			<!-- end: PAGE -->
		</div>
		<!-- end: MAIN CONTAINER -->
		<!-- start: FOOTER -->
		<div class="footer clearfix">
			<div class="footer-inner">
				 2016 &copy; Grace Management Suite by phillip madsen.
			</div>
			<div class="footer-items">
				<span class="go-top"><i class="clip-chevron-up"></i></span>
			</div>
		</div>
		<!-- end: FOOTER -->
		<!-- start: RIGHT SIDEBAR -->
		{{-- @include('admin.layouts.partials.event-management') --}}
		{{-- @include('admin.layouts.partials.chat-sidebar') --}}

		<!-- end: RIGHT SIDEBAR -->
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
<script src="{!! asset('/backend/assets/plugins/respond.min.js') !!}"></script>
<script src="{!! asset('/backend/assets/plugins/excanvas.min.js') !!}"></script>
		<script type="text/javascript" src="assets/plugins/jQuery-lib/1.10.2/jquery.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
		<script src="{!! asset('/backend/assets/plugins/jQuery-lib/2.0.3/jquery.min.js') !!}"></script>
		<!--<![endif]-->
		<script src="{!! asset('/backend/assets/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js') !!}"></script>
		<script src="{!! asset('/backend/assets/plugins/bootstrap/js/bootstrap.min.js') !!}"></script>
		<script src="{!! asset('/backend/assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') !!}"></script>
		<script src="{!! asset('/backend/assets/plugins/blockUI/jquery.blockUI.js') !!}"></script>
		<script src="{!! asset('/backend/assets/plugins/iCheck/jquery.icheck.min.js') !!}"></script>
		<script src="{!! asset('/backend/assets/plugins/perfect-scrollbar/src/jquery.mousewheel.js') !!}"></script>
		<script src="{!! asset('/backend/assets/plugins/perfect-scrollbar/src/perfect-scrollbar.js') !!}"></script>
		<script src="{!! asset('/backend/assets/plugins/less/less-1.5.0.min.js') !!}"></script>
		<script src="{!! asset('/backend/assets/plugins/jquery-cookie/jquery.cookie.js') !!}"></script>
		<script src="{!! asset('/backend/assets/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js') !!}"></script>
		<script src="{!! asset('/backend/assets/js/main.js') !!}"></script>
		@yield('footer_scripts')
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->

		@yield('pp_footer_scripts')
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
		@yield('inlinejs')
			jQuery(document).ready(function() {
				@yield('ppinline')
				Main.init();
				@yield('clipinline')
			});
		</script>
	</body>
	<!-- end: BODY -->
</html>