
<head><meta charset="utf-8" >

	<style>
	.body-bg{
		width: 100%;
		height:100%;
		background-image: url(assets/img/school-supplies-wallpaper-33.jpg);
		background-size: cover;
		overflow:hidden;

	}
	.side-bg{
		background-color: rgba(15, 15, 15, 0.53); 
		padding-right:0; 
		height:100%;
		overflow:auto;
	}
	.desc{
		font-family: 'Century Regular';
		color:white;
	}
</style>

<link rel="icon" type="image/png" href="assets/img/favicon.ico">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<title>Light Bootstrap Dashboard by Creative Tim</title>

<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<meta name="viewport" content="width=device-width" />


<!-- Bootstrap core CSS     -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet" />

<!-- Animation library for notifications   -->
<link href="assets/css/animate.min.css" rel="stylesheet"/>

<!--  Light Bootstrap Table core CSS    -->
<link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


<!--  CSS for Demo Purpose, don't include it in your project     -->
<link href="assets/css/demo.css" rel="stylesheet" />


<!--     Fonts and icons     -->
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/js/jquery.mCustomScrollbar.css">
</head>
<div class = 'body-bg' >
	<!-- end display notifcation -->
	<div class = 'row' >
		<div class = 'col-md-6 side-bg'>
			<div class ='content' style = 'padding:40px;' >

			</div>
		</div>
		<div class ='col-md-6' style ='padding-left:0' >
			<form method = 'POST' id = 'submit-form'  data-toggle = 'validator' role = 'form'>
				@csrf
				<div class = 'card' style = 'height:100%'>
					<div class = 'header ' style = 'padding:50px' align = 'center'>
						<h4 class = 'title' style = 'font-size: 2em' >Welcome</h4>
						<p class = 'category' style ='font-size: 1.2em'>Enter your username and password to log-in</p>
					</div>
					<div class = 'content'>
						<div class ='row' style ='padding-top:50px'>

							@if(session('error'))
							<div class="alert alert-danger" style ='width:80%;margin:auto'>
								<strong>Error!</strong> - Incorrect username or password.
							</div>
							@endif
							<div class ='content'>
								<div class = 'row'>
									<div class = 'col-md-12'>
										<div class = 'form-group'>
											<label>Username</label>
											<input type ='text' pattern = '\S+'maxlength = "20" name = 'uname' class = 'form-control' data-error = 'Please fill out this field' value = '{{ session('username') }}' REQUIRED/>
											<div class="help-block with-errors"></div>
										</div>
									</div>
								</div>
								<div class = 'row'>
									<div class = 'col-md-12'>
										<div class = 'form-group'>
											<label>Password</label>
											<input type ='password' maxlength = "20" class = 'form-control' name = 'pass' data-error = 'Please fill out this field.' REQUIRED/>
											<div class="help-block with-errors"></div>
										</div>
									</div>
								</div>
							</div>

						</div>

						<div class = 'row' align = 'center'>
							<div class ='col-md-12'>
								<input type = 'submit' name = 'submit' value = 'Login' class="btn btn-info btn-fill" style = 'width:100%'>
							</div>

						</div>
						<div class = 'row' align = 'center' style = 'padding-top: 20px'>
							<div class = 'col-md-6'>
								<p class = 'category'><a href = 'forgotpass.php'>Forgot password?</a></p>
							</div>
							<div class = 'col-md-6'>
								<p class = 'category'>Not a member? <a href = 'signup.php'>Sign up</a></p>
							</div>
						</div>

					</div>
					<?php session_unset(); ?>
				</div>
			</form>
		</div>
	</div>

</div>
</div>
<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js"></script>
<script src = 'assets/js/validator.js'></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>
<script type="text/javascript">

</script>
<script type="text/javascript">
	$("#").validator();
</script>