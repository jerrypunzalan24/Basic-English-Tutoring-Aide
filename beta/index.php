<!doctype html>
<?php 
session_start();

include_once('connectDB.php');
if(!isset($_SESSION['login'])){
	$_SESSION['error'] = '<b>Error</b> - Please login to continue';
	header("Location: login.php");
}
$title = 'Home';
$color = 'blue';
$active = array_fill(0,8,''); 
$active[0]='active';
include_once('sidepanel.php');
if(isset($_SESSION['error']))
{
	showNotif("alert-danger", $_SESSION['error']);
	unset($_SESSION['error']);
}
if(isset($_SESSION['success']))
{
	showNotif("alert-success", $_SESSION['success']);
	unset($_SESSION['success']);
}
$query = mysqli_query($con, "SELECT * from pages");
$content = array();
while($row = mysqli_fetch_assoc($query))
	$content[] = $row['description'];
?>

<div class="content">
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Modal Header</h4>
				</div>
				<div class="modal-body">
					<p>Some text in the modal.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>

		</div>
	</div>
	<div class="container-fluid">
		<div class ='row'>
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h4 class="title">Objective of the Project</h4>
						<p class="category">About the Project</p>
					</div>
					<div class="content">
						<div>
							<?php if($_SESSION['admin']){ ?>
							<form method = 'post' action ='updateContent.php'>
								<div class = 'form-group'>
									<textarea name = 'contentOne' class ='form-control' rows = '20' cols ='20'><?php echo $content[0];?></textarea>
								</div>
								<div class ='form-group'>
									<input type = 'submit' class ='btn btn-primary btn-fill' name = 'submitOne' value ='Update'/>
								</div>

							</form>	
							<?php 

							?>
							<?php }
							else { ?>
							<div class="content">
								<div>
									<p>
										<?php echo $content[0] ?>
									</p>
								</div>
							</div>
							<?php } ?>    
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class ='row'>
			<div class="col-md-12">
				<div class="card ">
					<div class="header">
						<h4 class="title">English Language</h4>
						<p class="category">Information</p>
					</div>
					<div class="content">
						<?php if($_SESSION['admin']){ ?>
						<form method = 'post' action ='updateContent.php'>
							<div class ='form-group'>
								<textarea name = 'contentTwo' class ='form-control' rows = '20' cols ='20'><?php echo $content[1]; ?></textarea>
							</div>
							<div class ='form-group'>
								<input type = 'submit' class ='btn btn-primary btn-fill' name = 'submitTwo' value ='Update'/>
							</div>
						</form>
						<?php }
						else { ?>
						<div class="content">
							<div>
								<p>
									<?php echo $content[1] ?>
								</p>
							</div>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class ='col-md-12'>
				<div class="card">

					<div class="header">
						<h4 class="title">Mechanics</h4>
						<p class="category">Information</p>
					</div>
					<div class ='content'>
						<p>Visual Novels (English 101 with Sachi & Henriks Supermarket)</p>
					</div>
				</div>

				<div class="row">
				</div>
			</div>
		</div>
		<?php include_once('footer.php');?>

