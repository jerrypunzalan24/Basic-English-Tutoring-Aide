<head><meta charset="utf-8" >
	<?php 
	include_once('connectDB.php');
	session_start();
	if(isset($_SESSION['login'])){
		header("Location: index.php");
		exit;
	}
	?>            
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
</head>
<div class = 'body-bg'>
	<?php 
	function showNotif($type, $message){
	?>
	<div data-notify="container" class="col-xs-11 col-sm-4 alert <?php echo $type; ?> animated fadeInDown" role="alert" data-notify-position="top-center" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out; z-index: 1031; top: 20px; left: 0px; right: 0px;">
		<button type="button" aria-hidden="true" class="close" data-dismiss = 'alert'style="position: absolute; right: 10px; top: 50%; margin-top: -13px; z-index: 1033;">×</button>
		<span data-notify="icon"></span> <span data-notify="title"></span> <span data-notify="message"><?php echo $message; ?></span>
		<a href="#" target="_blank" data-notify="url"></a>
	</div>
	<?php }?>
	<div class = 'content' style = ''>

		<!-- display  notification-->
		<?php 
		if(isset($_SESSION['error']))
			showNotif("alert-danger",$_SESSION['error']);
		?>
		<!-- end display notification -->
		<div class = 'row'>
			<div class ='col-md-6 side-bg'>
				<div class ='content' style = 'padding:40px; ' >


				</div>

			</div>
			<div class ='col-md-6' style ='padding-left:0; '>
				<!-- form fields -->
				<form method = 'POST' id = 'submit-form' action = 'process.php' data-toggle = 'validator' role = 'form'>
					<div class = 'card' style = 'height:100%'>
						<div class = 'header ' style = 'padding:50px' align = 'center'>
							<h4 class = 'title' style = 'font-size: 2em' >Signing up</h4>
							<p class = 'category' style ='font-size: 1.2em'>Fill the following fields</p>
						</div>

						<div class = 'content'>
							<div class = 'row'>
								<div class = 'col-md-6'>
									<div class = 'form-group'>
										<label>First Name</label>
										<input type ='text' name = 'fname' pattern = "^[^\s]+[\w\s]+[\w]*$" class = 'form-control' maxlength = "20" data-error = 'Must be valid and not empty!' value = '<?php echo isset($_SESSION['fname'])? $_SESSION['fname'] : ''; ?>' REQUIRED/>
										<div class="help-block with-errors"></div>
									</div>
								</div>
								<div class = 'col-md-6'>
									<div class = 'form-group'>
										<label>Last Name</label>
										<input type ='text' name = 'lname' pattern = "^[^\s]+[\w\s]+[\w]*$" class = 'form-control' maxlength = "20" data-error = 'Must be valid and not empty!' value = '<?php echo isset($_SESSION['lname'])? $_SESSION['lname'] : ''; ?>'   REQUIRED/>
										<div class="help-block with-errors"></div>
									</div>
								</div>

							</div>
							<div class = 'row'>
								<div class = 'col-md-12'>
									<div class = 'form-group'>
										<label>Username</label>
										<input type ='text'  pattern = '\S{6,}'  name = 'uname'  class = 'form-control' maxlength = "20"
											 value = '<?php echo isset($_SESSION['uname'])? $_SESSION['uname'] : ''; ?>' REQUIRED/>
										<div class="help-block with-errors"></div>
									</div>
								</div>
							</div>
							<div class = 'row'>
								<div class = 'col-md-12'>
									<div class = 'form-group'>
										<label>Password</label>
										<input type ='password'  pattern = '\S{6,}' class = 'form-control'  name = 'pass' maxlength = "20"REQUIRED/>
										<div class="help-block with-errors"></div>
									</div>
								</div>
							</div>
							<div class = 'row' align = 'center'>
								<div class ='col-md-12'>
									<input type = 'submit' value = 'Sign up' name = 'signup' class="btn btn-info btn-fill" style = 'width:100%'>
								</div>

							</div>
							<div class = 'row' align = 'center' style = 'padding-top: 20px'>
								<div class = 'col-md-12'>
									<p class = 'category'><a href = 'login.php'>Go back</a></p>
								</div>
							</div>
						</div>
					</div>
					</div>
			</div>
			</form>
		<?php session_unset();?>
		<!-- end form fields-->
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

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>
<script type="text/javascript">

</script>
<script type="text/javascript">
	$("#").validator();
</script>
