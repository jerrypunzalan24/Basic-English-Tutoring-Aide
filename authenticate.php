<?php 

session_start();
include_once('connectDB.php');
if(isset($_POST['submit'])){
	$query = mysqli_query($con, "SELECT * FROM accounts WHERE username = '".mysqli_real_escape_string($con, $_POST['uname'])."'");
	echo mysqli_num_rows($query);
	if(mysqli_num_rows($query) == 1){
		while($row = mysqli_fetch_assoc($query)){
			$pass = $row['password'];
			$user = $row['username'];
			$firstname = $row['fname'];
			$lastname = $row['lname'];
			$admin = $row['admin'];
			$id = $row['id'];
			$about = $row['about'];
			$image  = base64_encode($row['display_picture']);
		}
		if(password_verify($_POST['pass'], $pass)){
			$_SESSION['login'] = true;
			$_SESSION['admin'] = $admin;
			$_SESSION['fname'] = $firstname;
			$_SESSION['lname'] = $lastname;
			$_SESSION['uname'] = $user;
			$_SESSION['id'] = $id;
			$_SESSION['about'] = $about;
			$_SESSION['image'] = $image;
			header('Location: index.php');
		}
		else{
			$_SESSION['error'] = '<b>Error</b> Incorrect username and password';
			$_SESSION['uname'] = $_POST['uname'];
			header("Location: login.php");
		}
	}
	else{
		$_SESSION['error'] = '<b>Error</b> Incorrect username and password';
		$_SESSION['uname'] = $_POST['uname'];
		header("Location: login.php");
	}
}else{
	header("Location: login.php");
}

?>