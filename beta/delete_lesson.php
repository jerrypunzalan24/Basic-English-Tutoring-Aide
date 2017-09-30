<?php
include_once('connectDB.php');
session_start();
if(!$_SESSION['admin'] || !$_SESSION['login'])
	header("Location: index.php");
if(isset($_POST['submit'])){
mysqli_query($con,"DELETE FROM lessons WHERE id = {$_GET['id']}") or die(mysqli_error($con));
mysqli_close($con);
$_SESSION['success'] = '<b>Success</b> - Lesson has been deleted';
$URL = "lessons.php";
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';    
}
else{
	header("Location: index.php");
}
?>