<!doctype html>
<?php 
session_start();
include_once('connectDB.php');

if(!isset($_SESSION['login'])){
	$_SESSION['error'] = '<b>Error</b> - Please login to continue';
	header("Location: login.php");
}
$title = 'Games list';
$color = 'red';
$active = array_fill(0,8,''); $active[2]='active';
include_once('sidepanel.php');


?>
<style>
	.col-md-6{
		padding:15px;
	}
	.row{ }
</style>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h4 class="title">List of Available Games</h4>
						<p class="category">Enjoy the Games!</p>
					</div>
					<div class="content">
						<div class = 'row'>
							<div class ='col-md-6'>
								<div class ='content' style ='padding-right:0px'>
									<a href = 'Monogatari/index.php?gameType=Start'><img src ='assets/img/vino.png' style ='width:100%'/></a>
								</div>
							</div>
							<div class ='col-md-6'>
								<div class ='content' style ='padding-left:0px'>
									<a href = 'Monogatari/index.php?gameType=Start1'><img src ='assets/img/henrik-supermarket.png' style ='width:100%'/></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include_once('footer.php');?>