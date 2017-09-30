<?php 
include_once('connectDB.php');
session_start();  
?>
<?php
if(isset($_POST['submit'])){
	$id = $_GET['id'] + 0;
	if($id == $_SESSION['id'])
		session_destroy();
	$sql = "DELETE FROM accounts
			WHERE id = $id";
	@mysqli_query($con, $sql) or die("Unable to delete record");
	header("Location: accounts_admin.php");
}
else{
	header("Location: login.php");
	return;
}

mysqli_close($con);
?>