<?php
include_once('connectDB.php');
 if(isset($_POST['submitOne'])){
      $desc = mysqli_real_escape_string($con, $_POST['contentOne']);
      mysqli_query($con, "UPDATE pages SET description = '{$desc}', updated_at = '".date("Y-m-d H:i:s")."' WHERE part = 'contentOne'") or die(mysqli_error($con));
      $_SESSION['success'] = '<b>Success</b> - Content updated successfully';
   header("Location:index.php");
}
 if(isset($_POST['submitTwo'])){
        $desc = mysqli_real_escape_string($con, $_POST['contentTwo']);
        mysqli_query($con, "UPDATE pages SET description = '{$desc}', updated_at = '".date("Y-m-d H:i:s")."' WHERE part = 'contentTwo'") or die(mysqli_error($con));
        $_SESSION['success'] = '<b>Success</b> - Content updated successfully';
   header("Location:index.php");
 }
if(isset($_POST['submitThree'])){
  $desc = mysqli_real_escape_string($con, $_POST['contentThree']);
  $assistantName = mysqli_real_escape_string($con, $_POST['assistantName']);
  mysqli_query($con, "UPDATE pages SET description = '{$desc}', updated_at = '".date("Y-m-d H:i:s")."' WHERE part = 'contentThree'") or die (mysqli_error($con));
  mysqli_query($con, "UPDATE pages SET description ='{$assistantName}', updated_at = '".date("Y-m-d H:i:s")."' WHERE part = 'assistantName'") or die(mysqli_error($con));
  $_SESSION['success'] = '<b>Success</b> - Content updated successfully';
  header("Location:index.php");
}
?>