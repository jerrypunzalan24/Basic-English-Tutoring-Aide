<?php 
include_once("connectDB.php");
session_start();
if($_POST['submit']){
$id = mysqli_real_escape_string($con,$_GET['id'] + 0);
$query = mysqli_query($con, "SELECT * FROM accounts WHERE id ={$_GET['id']}");
while($row = mysqli_fetch_assoc($query)){
    mysqli_query($con,"UPDATE accounts SET admin = ".(($row['admin']==1)? 0 : 1) ." WHERE id ={$_GET['id']}");
  $_SESSION['admin'] = ($row['admin'])? 0 : 1;
}
  header("Location: index.php");
}
else{
  $_SESSION['error'] ='<b>Error</b> - Access denied';
  header("Location: index.php");
}
?>