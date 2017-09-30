<?php 
include_once('connectDB.php');
session_start();  
?>
<?php 
if(!isset($_SESSION['login'])){
	$_SESSION['error'] = '<b>Error</b> - Please login to continue';
	header("Location: login.php");
}
if($_SESSION['id'] != $_GET['id'])
{   
	$_SESSION['error'] = "<b>Error</b> - Access denied.";
	header("Location: index.php");
	exit;
}
$title = 'Edit Account';
$color = 'blue';
$active = array_fill(0,8,''); $active[7]='active';
include_once('sidepanel.php');
?>
<style>

</style>
<?php
$id = mysqli_real_escape_string($con,@$_GET['id'] + 0);     
$username = '';
$password = '';
$fname = '';
$lname = '';
$formerror = '';
$cPass = '';
$sql = "SELECT username, password, fname, lname, about FROM accounts WHERE id = $id";
$results = mysqli_query($con, $sql);
if($results && mysqli_num_rows($results))
{
	$record = mysqli_fetch_array($results, MYSQLI_ASSOC);
	$username = $record['username'];
	$password = $record['password'];
	$fname = $record['fname'];
	$lname = $record['lname'];
	$about = $record['about'];
}
else
{
	$URL = "accounts_admin.php";
	echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
	echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';                             
}
mysqli_free_result($results);
if(isset($_POST['updateInfo']))
{
	$username = mysqli_real_escape_string($con, $_POST['username']);
	$fname = mysqli_real_escape_string($con,$_POST['fname']);
	$lname = mysqli_real_escape_string($con, $_POST['lname']);
	if(!$_SESSION['admin'])
		$about = mysqli_real_escape_string($con, $_POST['about']);
	$checkUser = mysqli_query($con, "SELECT * FROM accounts WHERE username = '".$username."'");
	$row = mysqli_fetch_assoc($checkUser);
	if(mysqli_num_rows($checkUser) != 0 && $username != $row['username']){
		$_SESSION['error'] = '<b>Error</b> - Username already exist.';
	}
	else{
		mysqli_query($con,"UPDATE accounts SET username = '{$username}', fname ='{$fname}', lname ='{$lname}', about = '{$about}' WHERE id = {$id}") or die(mysqli_error($con));
		if($_SESSION['id'] == $_GET['id']){
			$query = mysqli_query($con, "SELECT * FROM accounts WHERE id = {$id}");
			$row = mysqli_fetch_assoc($query);
			$_SESSION['uname'] = $row['username'];
			$_SESSION['fname'] = $row['fname'];
			$_SESSION['lname'] = $row['lname'];
			if(!$_SESSION['admin'])
				$_SESSION['about'] = $row['about'];
			$_SESSION['success'] = '<b>Success</b> -  Your account has been updated.';
		}
		$URL = "index.php";
		echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
		echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
	}
}
if(isset($_POST['updatePass'])){
	$cPass = mysqli_real_escape_string($con, $_POST['cpassword']);
	$password = mysqli_real_escape_string($con, $_POST['npassword']);
	$query = mysqli_query($con,"SELECT * FROM accounts WHERE id = {$id}");
	$row = mysqli_fetch_assoc($query);
	if(password_verify($cPass, $row['password'])){
		mysqli_query($con,"UPDATE accounts set password = '".password_hash($password, PASSWORD_DEFAULT)."' WHERE id ={$id}") or die (mysqli_error($con));
		if($_SESSION['id'] == $_GET['id']){
			$query = mysqli_query($con, "SELECT * FROM accounts WHERE id = {$id}");
			$row = mysqli_fetch_assoc($query);
			$_SESSION['pass'] = $row['password'];
			$_SESSION['success'] = '<b>Success</b> -  Your account has been updated.';
		}
		$URL = "index.php";
		echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
		echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
	}
	else
		$_SESSION['error'] = '<b>Error</b> - Invalid password';
}
if(isset($_POST['submitImage'])){
	if($_FILES['imageFile']['error'] != 4){
		$image = addslashes(file_get_contents($_FILES['imageFile']['tmp_name']));
		mysqli_query($con, "UPDATE accounts set display_picture = '{$image}' WHERE id ={$_SESSION['id']}") or die (mysqli_error($con));
		$query = mysqli_query($con, "SELECT * from accounts WHERE id ={$_SESSION['id']}");
		while($row = mysqli_fetch_assoc($query)){
			$_SESSION['image'] = base64_encode($row['display_picture']);
		}
		$_SESSION['success'] = '<b>Success</b> -  Your account has been updated.';
		$URL = "index.php";
	}else{
		$_SESSION['danger'] = '<b>Error</b> Please upload an image';
		$URL = "edit.php?id={$_SESSION['id']}";
	}

	echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
	echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
}
if(isset($_SESSION['error']))
	showNotif('alert-danger', $_SESSION['error']);
unset($_SESSION['error']);
?>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">

				<div class = 'content'>

					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item active">
							<a class="nav-link active" data-toggle="tab" href="#info" role="tab" aria-expanded = 'true'>Edit Info</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#pass" role="tab">Change Password</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#changedp" role="tab">Change Default Picture</a>
						</li>
					</ul>
					<div class="card">   
						<div class="tab-content">
							<div class="tab-pane fade active in" id="info" role="tabpanel" aria-expanded = 'true'>
								<div class ='content'>
									<form method = 'post' data-toggle = 'validator'>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Username</label>
													<input type="text" name = "username" class="form-control" pattern = '\S{6,}' placeholder="Username" value='<?php echo $username; ?>' REQUIRED/>
													<div class="help-block with-errors"></div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>First Name</label>
													<input type="text" name = "fname" class="form-control" pattern = '^[^\s]+[\w\s]+[\w]*$' placeholder="First Name" required data-error = 'Must be valid and not empty' value='<?php echo $fname; ?>'>
													<div class="help-block with-errors"></div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Last Name</label>
													<input type="text" name = "lname" class="form-control" pattern = '^[^\s]+[\w\s]+[\w]*$' data-error = 'Must be valid and not empty' placeholder="Last Name" required value='<?php echo $lname; ?>'>
													<div class="help-block with-errors"></div>
												</div>
											</div>
										</div>
										<?php if(!$_SESSION['admin']){?>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>About</label>
													<textarea name = 'about' class ='form-control' rows = '5'><?php echo $about; ?></textarea>
													<div class="help-block with-errors"></div>
												</div>
											</div>
										</div>
										<?php }?>

										<button type="submit" name = "updateInfo" class="btn btn-info btn-fill pull-right">Update Info</button>
										<div class="clearfix"></div>
									</form>
								</div>
							</div>
							<div class="tab-pane fade" id="pass" role="tabpanel">
								<div class ='content'>                          
									<form method = 'post' data-toggle='validator'>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Current Password</label>
													<input type="password" name = "cpassword"   class="form-control" pattern = '\S{6,}' placeholder="Current Password" required>
													<div class="help-block with-errors"></div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>New Password</label>
													<input type="password" name = "npassword"   class="form-control"  pattern = '\S{6,}' placeholder="New Password" value='' required>
													<div class="help-block with-errors"></div>
												</div>
											</div>
										</div>
										<button type="submit" name = "updatePass" class="btn btn-info btn-fill pull-right">Update Password</button>
										<div class="clearfix"></div>
									</form>
								</div>
							</div>
							<div class="tab-pane fade" id="changedp" role="tabpanel">
								<div class ='content'>
									<form method ='post' enctype="multipart/form-data">
										<div class ='row'>
											<div class ='col-md-12'>
												<div class ='form-group'>

													<input type ='file' name ='imageFile' id ='file'class = 'custom-file-input' accept = 'image/*'/>
												</div>
												<div class ='form-group'>
													<input type = 'submit' name ='submitImage' class ='btn btn-info btn-fill pull-right'/>
												</div>
											</div>
										</div>
									</form>
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
<script>
	$('#').validator();
</script>
</script>
</script>