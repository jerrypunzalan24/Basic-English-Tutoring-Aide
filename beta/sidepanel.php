<?php 
@session_start();
date_default_timezone_set("Asia/Manila");
if(!isset($_SESSION['login'])){
    $_SESSION['error'] = '<b>Error</b> - Please login to continue';
    header("Location: login.php");
}

?>
<html lang="en">
    <head>
	  <meta charset="utf-8" />
	  <link rel="icon" type="image/png" href="assets/img/favicon.ico">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	  <title><?php echo $title;?></title>

	  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	  <meta name="viewport" content="width=device-width, initial-scale=1" />    

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
	  <style>
		.mCSB_inside > .mCSB_container{ margin-right: 10px; }
		ody > .navbar-collapse .sidebar-wrapper {
		    padding-bottom:0px;
		}
	  </style>
    </head>
    <body>


	  <div class="wrapper">
		<div class="sidebar" data-color="<?php echo $color;?>" data-image="assets/img/school-supplies-wallpaper-33.jpg">

		    <!--

Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
Tip 2: you can also add an image using data-image tag

-->

		    <?php 
		    function showNotif($type, $message){
		    ?>
		    <div data-notify="container" class="col-xs-11 col-sm-4 alert <?php echo $type; ?> animated fadeInDown" role="alert" data-notify-position="top-center" style="display: inline-block; margin: 0px auto; position: fixed; transition: all 0.5s ease-in-out; z-index: 1031; top: 20px; left: 0px; right: 0px;">
			  <button type="button" aria-hidden="true" class="close" data-dismiss = 'alert'style="position: absolute; right: 10px; top: 50%; margin-top:    -13px; z-index: 1033;">×</button>
			  <span data-notify="icon"></span> <span data-notify="title"></span> <span data-notify="message"><?php echo $message; ?></span>
			  <a href="#" target="_blank" data-notify="url"></a>
		    </div>
		    <?php }?>
		    <div class="sidebar-wrapper mCustomScrollbar">
			  <div class="logo">
				<div class ='content' align ='center'>

				    <?php if(!empty($_SESSION['image'])){?>
				    <img src = 'data:image/jpeg;base64, <?php echo $_SESSION['image'];?>' class ='img-circle' width ='125' height = '125' >
				    <?php }
				    else{
					  echo "<img src = 'assets/img/faces/Avatar03-512.png' class ='img-circle' width ='100' height = '100'/>";
				    }?>
				</div>
				<a class ='simple-text' href = 'profile.php'><?php echo $_SESSION['uname']?></a>
			  </div>

			  <ul class="nav">
				<li class = '<?php echo $active[0];?>'>
				    <a href="index.php">
					  <i class="pe-7s-home"></i>
					  <p>Home</p>
				    </a>
				</li>
				<?php if(!$_SESSION['admin']){?>
				<li class = '<?php echo $active[1];?>'>
				    <a href="profile.php">
					  <i class="pe-7s-user"></i>
					  <p>My Profile</p>
				    </a>
				</li >
				<?php }?>
				<li class = '<?php echo $active[2];?>'>
				    <a href="gameslist.php">
					  <i class="pe-7s-joy"></i>
					  <p>Games List</p>
				    </a>
				</li>
				<li class = '<?php echo $active[3];?>'>
				    <a href="lessons.php">
					  <i class="pe-7s-news-paper"></i>
					  <p>Course Outline</p>
				    </a>
				</li>
<!--
				<li class = '<?php //echo $active[4];?>'>
				    <a href="scores.php">
					  <i class="pe-7s-global"></i>
					  <p>Records/ Scores</p>
				    </a>
				</li>
-->
				<li class = '<?php echo $active[5];?>'> 
				    <a href="documentation.php">
					  <i class="pe-7s-folder"></i>
					  <p>Documentation</p>
				    </a>
				</li>


				<?php 
				if($_SESSION['admin']){ 
				?>
				<li class = '<?php echo $active[7];?>'>
				    <a href="accounts_admin.php">
					  <i class="pe-7s-note2"></i>
					  <p>Accounts Overview</p>
				    </a>
				</li>
				<?php } ?>
			  </ul>
		    </div>
		</div>
		<div class="main-panel">
		    <nav class="navbar navbar-default navbar-fixed">
			  <div class="container-fluid">
				<div class="navbar-header">
				    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
					  <span class="sr-only">Toggle navigation</span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
					  <span class="icon-bar"></span>
				    </button>

				</div>
				<div class="collapse navbar-collapse">
				    <ul class="nav navbar-nav navbar-left">
					  <li><a>Basic English Tutoring Aid</a></li>
				    </ul>

				    <ul class="nav navbar-nav navbar-right">
					  <li>
						<a>Today is : <?php echo date("F d, Y");?></a> 
					  </li>
					  <li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						    <p>
							  <?php echo $_SESSION['uname']?>
							  <b class="caret"></b>
						    </p>

						</a>
						<ul class="dropdown-menu">

						    <li><a href="edit.php?id=<?php echo $_SESSION['id'] ?>">Edit Account</a></li>

						    <li class="divider"></li>
						    <li><a href="logout.php">Logout</a></li>
						</ul>
					  </li>

					  <li class="separator hidden-lg hidden-md"></li>

				    </ul>
				</div>
			  </div>
		    </nav>
