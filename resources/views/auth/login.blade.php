<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login SIS - Sistem Informasi Sekolah</title>

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
	{{ Html::script('assets/js/plugins/forms/styling/uniform.min.js') }}

	{{ Html::script('assets/js/core/app.js') }}
	{{ Html::script('assets/js/pages/login.js') }}
	<!-- /theme JS files -->

</head>

<body class="login-container bg-slate-800">



	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					<!-- Advanced login -->
					<form action="">
						<div class="panel panel-body login-form">
							<div class="text-center">
                <h5 class="content-group-lg"><img src="assets/images/logo_dark.png" alt=""></h5>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="text" class="form-control input-lg" placeholder="Username">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="text" class="form-control input-lg" placeholder="Password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group login-options">
								<div class="row">
									<div class="col-sm-6">
										<label class="checkbox-inline">
											<input type="checkbox" class="styled" checked="checked">
											Remember
										</label>
									</div>

									<div class="col-sm-6 text-right">
										<a href="login_password_recover.html">Forgot password?</a>
									</div>
								</div>
							</div>

							<div class="form-group">
								<button type="submit" class="btn bg-blue btn-block btn-lg">Login <i class="icon-arrow-right14 position-right"></i></button>
							</div>

							<span class="help-block text-center">Don't have account? </span>
							<span class="help-block text-center">Contact your <a href="#">administrator</a></span>
						</div>
					</form>
					<!-- /advanced login -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
