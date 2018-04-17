<?php
include_once('connectDB.php');
session_start();
if(isset($_POST['submit'])){
	$query = mysqli_query($con, "SELECT * FROM accounts WHERE username = '".mysqli_real_escape_string($con, $_POST['uname'])."'");
	if(mysqli_num_rows($query) == 1){
		echo "asdsad";
		$code = '';
		$alphabets = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		while($code == ''){
			for($i = 0; $i<6; $i++)
				$code .= $alphabets[rand(0, strlen($alphabets)-1)];
			$checkRandomPass = mysqli_query($con , "SELECT * FROM accounts");
			while($row = mysqli_fetch_assoc($checkRandomPass)){
				if(password_verify($code, $row['password'])){
					$code ='';
					break;
				}
			}
		}
		mysqli_query($con, "UPDATE accounts set password = '".mysqli_real_escape_string($con, password_hash($code, PASSWORD_DEFAULT))."'
    WHERE username = '".mysqli_real_escape_string($con, $_POST['uname'])."'");
		$_SESSION['code'] = $code;
		header("Location:forgotpass.php");
	}
	else{
		$_SESSION['error'] = '<b>Error</b> - Username does not exist.';
		header("Location: forgotpass.php");
	}
}
else
	header("Location:login.php");

?>
