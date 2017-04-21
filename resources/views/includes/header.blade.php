<!DOCTYPE Html>
<Html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SIS - Sistem Informasi Sekolah</title>

	<!-- Global stylesheets -->
	{{ Html::style('https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900') }}
	{{ Html::style('assets/css/icons/icomoon/styles.css') }}
	{{ Html::style('assets/css/bootstrap.css') }}
	{{ Html::style('assets/css/core.css') }}
	{{ Html::style('assets/css/components.css') }}
	{{ Html::style('assets/css/colors.css') }}
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	{{ Html::script('assets/js/plugins/loaders/pace.min.js') }}
	{{ Html::script('assets/js/core/libraries/jquery.min.js') }}
	{{ Html::script('assets/js/core/libraries/bootstrap.min.js') }}
	{{ Html::script('assets/js/plugins/loaders/blockui.min.js') }}
	<!-- /core JS files -->

	<!-- Theme JS files -->
	{{ Html::script('assets/js/plugins/visualization/d3/d3.min.js') }}
	{{ Html::script('assets/js/plugins/visualization/d3/d3_tooltip.js') }}
	{{ Html::script('assets/js/plugins/forms/styling/switchery.min.js') }}
	{{ Html::script('assets/js/plugins/forms/styling/uniform.min.js') }}
	{{ Html::script('assets/js/plugins/forms/selects/bootstrap_multiselect.js') }}
	{{ Html::script('assets/js/plugins/ui/moment/moment.min.js') }}
	{{ Html::script('assets/js/plugins/pickers/daterangepicker.js') }}
	{{ Html::script('assets/js/core/app.js') }}
	{{ Html::script('assets/js/pages/dashboard.js') }}
	<!-- /theme JS files -->

</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.Html"><img src="assets/images/logo_light.png" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>

				
			</ul>

			<p class="navbar-text"><span class="label bg-success">Online</span></p>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown language-switch">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="assets/images/flags/id.png" class="position-left" alt="">
						Indonesia
						<span class="caret"></span>
					</a>

					<ul class="dropdown-menu">
						<li><a class="deutsch"><img src="assets/images/flags/id.png" alt=""> Indonesia</a></li>
						<li><a class="english"><img src="assets/images/flags/gb.png" alt=""> English</a></li>
					</ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-bubbles4"></i>
						<span class="visible-xs-inline-block position-right">Messages</span>
						<span class="badge bg-warning-400">2</span>
					</a>
					
					<div class="dropdown-menu dropdown-content width-350">
						<div class="dropdown-content-heading">
							Messages
							<ul class="icons-list">
								<li><a href="#"><i class="icon-compose"></i></a></li>
							</ul>
						</div>

						<ul class="media-list dropdown-content-body">
							
							<li class="media">
								<div class="media-left">
									<img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt="">
									<span class="badge bg-danger-400 media-badge">4</span>
								</div>

								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Margo Baker</span>
										<span class="media-annotation pull-right">12:16</span>
									</a>

									<span class="text-muted">That was something he was unable to do because...</span>
								</div>
							</li>

							<li class="media">
								<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></div>
								<div class="media-body">
									<a href="#" class="media-heading">
										<span class="text-semibold">Jeremy Victorino</span>
										<span class="media-annotation pull-right">22:48</span>
									</a>

									<span class="text-muted">But that would be extremely strained and suspicious...</span>
								</div>
							</li>

							
						</ul>

						<div class="dropdown-content-footer">
							<a href="#" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>
						</div>
					</div>
				</li>

				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="assets/images/avatar/avatar.jpg" alt="">
						<span>Fatkhi</span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
						<li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i class="icon-comment-discussion"></i> Messages</a></li>
						<li class="divider"></li>
						<li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>
						<li><a href="#"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->
